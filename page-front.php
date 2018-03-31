<?php
/* Template Name: Front Page Template */
get_header();
?>

<main id="post" class="headline animate-text--2s"> 
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="headline-title"><?php the_title(); ?></div>
        <div class="headline-subtitle"><?php the_content(); ?></div>
        <div class="headline-excerpt"><?php the_excerpt(); ?></div>
    <?php endwhile; endif; ?> 
</main>

<?php
get_footer();
?>