<?php
/* Template Name: Archive */
get_header();
?>

    <main class="content">
        <ul class="archive-list">
        <?php wp_get_archives(array( 'type' => 'postbypost', 'limit' => 20, 'format' => 'custom', 'before' => '<li class="my-post-title">', 'after' => '</li>' ) ); ?>
        </ul>

<!--        <ul class="archive-list">-->
<!--            --><?php
//            wp_get_archives('type=monthly');
//            ?>
<!--        </ul>-->
<!--        --><?php //while (have_posts()) : the_post(); ?>
<!--            <h3 class="entry-title"><a href="--><?php //the_permalink(); ?><!--" rel="bookmark"-->
<!--                                       title="Permanent Link to --><?php //the_title_attribute(); ?><!--">-->
<!--                    --><?php //the_title(); ?><!--</a>-->
<!--            </h3>-->
<!--            <p>--><?php //the_excerpt(); ?><!--</p>-->
<!--        --><?php //endwhile; ?>
    </main>

<?php
get_footer();
?>