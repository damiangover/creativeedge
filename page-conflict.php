<?php
/* Template Name: Parent Page Template */
get_header();
?>

<main id="post" class="headline animate-text--2s"> 
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="headline-title"><?php the_title(); ?></div>
        <div class="headline-subtitle"><?php the_content(); ?></div>        
    <?php endwhile; endif; ?> 
</main>

<?php
    $args = array(
        'parent' => $post->ID,
        'post_type' => 'page',
        'post_status' => 'publish',
    );

    $pages = get_pages($args);
?>

<div class="card-group">
    <?php foreach ($pages as $page) { ?>
        <div class="card">
            <a href="<?php echo get_permalink($page->ID); ?>" rel="bookmark" title="<?php echo $page->post_title; ?>">
            <header class="card-header"><p><?php echo $page->post_title; ?></p></header>
            <section class="card-body"><?php $excerpt = get_the_excerpt( $page->ID ); echo $excerpt; ?></section>
            </a>
        </div>
    <?php }?>
</div>

<?php
get_footer();
?>