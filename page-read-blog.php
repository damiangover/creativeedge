<?php 
// Template Name: Blog Template
get_header(); 
?>

    <main class="browse">
        <?php
            $is_first_post = true;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array( 'post_type' => 'post', 'posts_per_page' => 9, 'paged' => $paged );
            $wp_query = new WP_Query($args);
        ?>

         <div class="related-post--container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php if ( $is_first_post ) : $is_first_post = false; ?>
                    <article class="related-post--top-read">
                        <header class="entry-header post-heading">
                            <?php
                                the_title('<p class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></p>');
                            ?>
                        </header>
                        <div class="excerpt"><?php the_excerpt(); ?></div>
                    </article>
                <?php else: ?>
                    <article class="related-post">
                        <header class="entry-header post-heading">
                            <?php
                                the_title('<p class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></p>');
                            ?>
                        </header>
                        <div class="excerpt"><?php the_excerpt(); ?></div>
                    </article>
                <?php endif; endwhile; ?>
                <div class="related-post--page-nums">
                    <?php the_posts_pagination( 
                        array('mid_size' => 0,
                        'prev_text' => __( '&horbar;', 'textdomain' ),
                        'next_text' => __( '&horbar;', 'textdomain' ),
                    )); ?>
                </div>
            <?php else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
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

<?php wp_reset_postdata(); get_footer(); ?>