<?php
/* Template Name: Landing Template */
get_header();
?>
    <div id="pre" class="cover">
        <section class="grid-container--front">
            <section class="front--logo animate-text--2s">
                <p>Creative Edge Consulting<span class="orange">.</span></p>
            </section>
            <section class="front--hero">
                <p class="front--large"><span class="fadeInFromBottom--3s">al</span><span
                            class="fadeInFromBottom--4s">-che-</span><span
                            class="fadeInFromBottom--5s">my</span></p>
                <p class="front--define"><span class="animate-text--3s"><small>noun</small>  \ ˈal-kə-mē \</span></p>
                <p class="front--define"><span class="animate-text--3s">A seemingly magical process of transformation, creation, or combination<span
                                class="orange">.</span></span></p>
            </section>
        </section>
    </div>

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