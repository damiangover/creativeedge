<?php
get_header();
?>

    <main class="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header post-heading">
                    <?php

                    if (is_single()) {
                        the_title('<h1 class="entry-title">', '</h1>');
                    } elseif (is_front_page() && is_home()) {
                        the_title('<h1 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h1>');
                    } else {
                        the_title('<h1 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h1>');
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
                </article>
        <?php endwhile; endif; ?>
        <nav class="post-nav and-flex">
            <?php
                previous_post_link('<span class="post-nav--child">&horbar; %link</span>');
                next_post_link('<span class="post-nav--child">%link &horbar;</span>');
            ?>                           
        </nav>
    </main>
    <aside class="subscribe">
        <p>Strategies for change. Straight to your inbox.</p>
        <form>
            <fieldset>
                <input type="email" required placeholder="Email Address" class="big-text"/>
                <input type="submit" value="Join" class="big-button"/>
            </fieldset>
        </form>
    </aside>
<?php
get_footer();
?>