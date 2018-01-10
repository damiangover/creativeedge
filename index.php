<?php
    get_header();
?>

    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
            href="https://browsehappy.com/">upgrade
        your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <main class="content">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php

                    if (is_single()) {
                        the_title('<h1 class="entry-title">', '</h1>');
                    } elseif (is_front_page() && is_home()) {
                        the_title('<h1 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h1>');
                    } else {
                        the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                    }

                    ?>
                </header>
                <section>
                    <?php
                    /* translators: %s: Name of current post */
                    the_content(sprintf(
                        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'creativeedge'),
                        get_the_title()
                    ));

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . __('Pages:', 'creativeedge'),
                        'after' => '</div>',
                        'link_before' => '<span class="page-number">',
                        'link_after' => '</span>',
                    ));
                    ?>
                </section>
            </article>

        <?php endwhile; endif; ?>

    </main>

<?php
    get_footer();
?>