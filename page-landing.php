<?php
/* Template Name: Landing Template */
get_header();
?>

<div id="pre" class="cover">
    <section class="grid-container--front">
        <section class="front--logo animate-text--2s">
            <!-- <p>Creative Edge</p> -->
        </section>
        <section class="front--hero">
            <p class="front--large"><span class="fadeInFromBottom--3s">al</span><span
                        class="fadeInFromBottom--4s">-che-</span><span
                        class="fadeInFromBottom--5s">my</span></p>
            <p class="front--define"><span class="animate-text--3s"><small>noun</small> \ ˈal-kə-mē \</span></p>
            <p class="front--define"><span class="animate-text--3s">A seemingly magical process of transformation, creation, or combination<span
                            class="orange">.</span></span></p>
        </section>
    </section>
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