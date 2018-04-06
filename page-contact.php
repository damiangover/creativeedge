<?php
/* Template Name: Contact Page Template */
get_header();
?>

    <main class="content contact">
        <?php if (have_posts()): while (have_posts()): the_post();?>
            <div class="contact-section">
                <header>About</header>
                <section>
                    <?php the_content(); ?>
                </section>
            </div>
            <div class="contact-section">
                <header>Visit</header>
                <address><?php echo get_post_meta($post->ID, 'about-visit', true); ?></address>
            </div>
            <div class="contact-section">
                <header>Connect</header>
                <section>
                    <p><?php echo get_post_meta($post->ID, 'about-connect', true); ?></p>
                    <p><?php echo get_post_meta($post->ID, 'about-call', true); ?></p>
                </section>
            </div>
        <?php endwhile; endif;?>
    </main>

<?php
get_footer();
?>