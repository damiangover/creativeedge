<?php get_header(); ?>

    <main class="browse animate-text--2s">
        <header>

            <h1 class="center-text"><?php single_cat_title(); ?></h1>
            <?php
                $active_category = get_category( get_query_var( 'cat' ) );
                $active_category_id = $active_category->cat_ID;
                query_posts($query_string .'&posts_per_page=10');
            ?>
           
        </header>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="related-post">
                        <article>
                    <header class="entry-header post-heading">
                        <?php

                            the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');

                        ?>
                    </header>
                    <div class="excerpt longer-read"><?php the_excerpt(); ?></div>
                </article>
                    </div>
            <?php endwhile; endif; ?>
        </div>
    </main>

<?php get_footer(); ?>