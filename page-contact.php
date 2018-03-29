<?php
/* Template Name: Contact Page Template */
get_header();
?>

    <main class="content animate-text--2s">
        <div class="contact">
            <div class="contact-section">
        
            <?php if (have_posts()): while (have_posts()): the_post();?>
                <header>About</header>
                <section>
                    <?php the_content(); ?>
                </section>
                </div>
                <div class="contact-section">
                    <header>Visit</header>
                    <section>
                        <address>2615 Saint Johns Street</address>
                        <address>Port Moody, BC V3H 2B5, Canada</address>
                    </section>
                </div>
                <div class="contact-section">
                    <header>Connect</header>
                    <section>
                        <p><?php echo get_post_meta($post->ID, 'about-connect', true); ?></p>
                        <p><?php echo get_post_meta($post->ID, 'about-call', true); ?></p>
                    </section>
                </div>
            <?php endwhile; ?>
            <?php endif;?>
        </div>
    </main>

<?php
get_footer();
?>