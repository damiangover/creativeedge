'use strict';

const postcss = require('gulp-postcss');
const gulp = require('gulp');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const newer = require('gulp-newer');
const browserSync = require('browser-sync').create();

const source = {
    root: "./",
    build: "./wp-creativeedge/",
    mamp: "/MAMP/htdocs/wordpress/wp-content/themes/wp-creativeedge/"
};

gulp.task('css', function () {
    var plugins = [
        autoprefixer({browsers: ['last 4 versions']}),
        cssnano()
    ];

    return gulp.src(source.root + '*.css')
        .pipe(postcss(plugins))
        .pipe(gulp.dest(source.build));
});

gulp.task('php', function () {
    return gulp.src(source.root + '*.php')
        .pipe(newer(source.build))
        .pipe(gulp.dest(source.build));
});

gulp.task('mamp', function () {
    return gulp.src(source.build + '*.*')
        .pipe(gulp.dest(source.mamp));
});

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "http://localhost/wordpress",
        browser: ["chrome", "firefox", "opera"]
    });
    gulp.watch(source.mamp + '*.css').on("change", browserSync.reload);
});

gulp.task('watch', function() {
    gulp.watch(source.root + "*.*", ['css', 'php', 'mamp']);
});

gulp.task('default', ['watch']);