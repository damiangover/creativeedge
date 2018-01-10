<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'creativeedge' ); ?></h1>
            </header>
            <div class="page-content">
                <p><?php _e( 'Oh my! The page you were looking for is missing, how embarrassing! Maybe try a search?', 'creativeedge' ); ?></p>

                <?php get_search_form(); ?>

            </div><!-- .page-content -->
        </section><!-- .error-404 -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();