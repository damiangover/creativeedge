<?php get_header(); ?>

<main class="content">
    <section>
        <h1><?php single_cat_title(); ?></h1>
        <?php
            $active_category = get_category( get_query_var( 'cat' ) );
            $active_category_id = $active_category->cat_ID;
            echo category_description( $active_category_id );
        ?>
    </section>

    <hr />

    <div class="related-post-container">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="related-post">
            <header class="entry-header">
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
            <?php the_excerpt(); ?>
        </section>

        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>