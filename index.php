<?php
get_header();
?>

    <main class="content animate-text--2s">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header post-heading">
                    <?php

                    if (is_single()) {
                        the_title('<h1 class="entry-title">', '</h1>');
                    } elseif (is_front_page() && is_home()) {
                        the_title('<h1 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h1>');
                    } else {
                        the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                    }
                    ?>
                    <div class="post-meta">
                        <time><?php the_date(); ?></time>
                        <p><?php the_category(', ') ?></p>
                    </div>
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
                <div class="author-details">
                    <div class="gravatar">
                        <?php echo get_avatar(get_the_author_meta("ID")); ?>
                    </div>
                    <small><?php the_author_meta('display_name'); ?></small>
                </div>
                </footer>
            </article>

        <?php endwhile; endif; ?>

    </main>
<?php
get_footer();
?>