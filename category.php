<?php get_header(); ?>

    <main class="browse animate-text--2s">
        <header>
            <?php
                $active_category = get_category( get_query_var( 'cat' ) );
                $active_category_id = $active_category->cat_ID;
                    echo category_description( $active_category_id );
                    query_posts($query_string .'&posts_per_page=3');  ?>
           
        </header>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="related-post">
                        <article>
                    <header class="entry-header post-heading">
                        <?php

                                if (is_single()) {
                                    the_title('<h3 class="entry-title">', '</h1>');
                                } elseif (is_front_page() && is_home()) {
                                    the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h1>');
                                } else {
                                    the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                                }

                        ?>
                    </header>
                    <div class="excerpt longer-read"><?php the_excerpt(); ?></div>
                </article>
                    </div>
            <?php endwhile; endif; ?>
        </div>
    </main>

<?php get_footer(); ?>