<?php get_header(); ?>

    <main class="browse">
        <header>
            <!-- <h1 class="center-text"><?php single_cat_title(); ?></h1> -->
            <?php
                $is_first_post = true;
                $active_category = get_category( get_query_var( 'cat' ) );
                $active_category_id = $active_category->cat_ID;
            ?>
        </header>

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

<?php get_footer(); ?>