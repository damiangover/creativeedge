<?php
/* Template Name: Landing Template */
get_header();
?>

<div id="pre" class="cover">
    <div class=front>
        <div class="front--large">
            <span class="fadeInFromBottom--2s">al</span><span class="fadeInFromBottom--3s">-che-</span><span class="fadeInFromBottom--4s">my</span>
        </div>
        <div class="front--define">
            <p><span class="animate-text--3s"><small>noun</small> \ ˈal-kə-mē \</span></p>
            <p><span class="animate-text--3s">A seemingly magical process of transformation, creation, or combination<span class="accent">.</span></span></p>
        </div>
    </div>
</div>

<main id="post" class="headline animate-text--2s"> 
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="headline-title"><?php the_title(); ?></div>
        <div class="headline-subtitle"><?php the_content(); ?></div>
        <div><?php the_excerpt(); ?></div>
    <?php endwhile; endif; ?> 
</main>

<?php
get_footer();
?>