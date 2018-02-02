'use strict';

const postcss = require('gulp-postcss');
const gulp = require('gulp');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const newer = require('gulp-newer');

const source = {
    root: "./",
    build: "./wp-creativeedge/"
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

gulp.task('default', ['css', 'php']);