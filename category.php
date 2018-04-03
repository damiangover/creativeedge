<?php get_header(); ?>

    <main class="browse animate-text--2s">
        <header>

            <h1 class="center-text"><?php single_cat_title(); ?></h1>
            <?php
                $is_first_post = true;
                $active_category = get_category( get_query_var( 'cat' ) );
                $active_category_id = $active_category->cat_ID;
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'posts_per_page' => 1,
                    'paged'          => $paged
                );
                $the_query = new WP_Query( $args );
            ?>
        </header>

        <div class="related-post--container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php if ( $is_first_post ) : $is_first_post = false; ?>
                    <article class="related-post--full-width">
                        <header class="entry-header post-heading">
                            <?php
                                the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                            ?>
                        </header>
                        <div class="excerpt longer-read"><?php the_excerpt(); ?></div>
                    </article>
                <?php else: ?>
                    <article class="related-post">
                        <header class="entry-header post-heading">
                            <?php
                                the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
                            ?>
                        </header>
                        <div class="excerpt longer-read"><?php the_excerpt(); ?></div>
                    </article>
                <?php endif; endwhile; ?>
            <?php else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?> 
            <div class="related-post--full-width">
                <?php the_posts_pagination( 
                    array('mid_size' => 2,
                    'prev_text' => __( '&horbar;', 'textdomain' ),
                    'next_text' => __( '&horbar;', 'textdomain' ),
                )); ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>