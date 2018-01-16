<?php get_header(); ?>

    <div class="content animate-text--2s">
        <main>
            <div class="category-blurb">
                <section>
                    <h1><?php single_cat_title(); ?></h1>
                    <?php
                    $active_category = get_category( get_query_var( 'cat' ) );
                    $active_category_id = $active_category->cat_ID;
                    echo category_description( $active_category_id );
                    query_posts($query_string .'&posts_per_page=3');  ?>
                </section>
            </div>

            <div class="related-post-container">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="related-post">
                        <article>
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
                            <div class="excerpt"><?php the_excerpt(); ?></div>
                        </article>
                    </div>
                <?php endwhile; endif; ?>
            </div>

            <div class="subscribe">
                <p>Strategies for change. Straight to your inbox.</p>
                <form>
                    <fieldset>
                        <input type="email" required placeholder="Email Address" class="big-text"/>
                        <input type="submit" value="Join" class="big-button"/>
                    </fieldset>
                </form>
            </div>
        </main>
    </div>
<?php get_footer(); ?>