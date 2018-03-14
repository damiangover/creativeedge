<?php
/* Template Name: Front Page Template */
get_header();
?>

    <main id="post" class="front animate-text--2s">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section class="hero">
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
        <?php endwhile; endif; ?>
    </main>

<?php
get_footer();
?>