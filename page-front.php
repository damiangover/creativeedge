<?php
/* Template Name: Front Page Template */
get_header();
?>
    <?php
        $args = array(
            'parent' => $post->ID,
            'post_type' => 'page',
            'post_status' => 'publish',
            'sort_order' => 'asc',
            'sort_column' => 'menu_order'
        );

        $pages = get_pages($args);
    ?>

    <?php foreach ($pages as $page) { 
        $args = array(
            'parent' => $page->ID,
            'post_type' => 'page',
            'post_status' => 'publish',
            'sort_order' => 'asc',
            'sort_column' => 'menu_order'
        );

        $pages_second_level = get_pages($args);

        ?>
        
        <div class="front--tile">
            <header class="front--tile-header">
                <span class="light"><?php echo $page->post_title ?>
            </header>
            <section class="front--tile-excerpt">
                <div class="front--tile-blurb"><?php echo $page->post_excerpt; ?></div>
                <nav>
                    <?php 
                        $count = 1;
                        foreach ($pages_second_level as $sub_page) { 
                    ?>
                    <a href="<?php echo get_permalink($sub_page->ID); ?>" rel="bookmark" title="<?php echo $sub_page->post_title; ?>">
                        <div class="line-up-text">
                            <p><small><?php echo '0'.$count; $count++ ?></small><p>
                            <p><?php echo $sub_page->post_title; ?></p>
                        </div>
                    </a>
                    <?php } ?>
                </nav>
            </section>
        </div>
    <?php } ?>

    <?php 
        // This is some terrrrrrible sshhhhh... 
        $is_time_to_play_cover = false;

        if (!isset($_SESSION['expire'])) {
            set_played_time();
            $is_time_to_play_cover = true;
        }
        else {
            if (time() > $_SESSION['expire']) {
                set_played_time();
                $is_time_to_play_cover = true;
            }
         }
    ?>

    <?php if ($is_time_to_play_cover) { ?>
        <div id="pre" class="cover">
            <div class="cover--logo">Creative Edge Consulting</div>
            <div class="cover--alchemy">
                <div class="cover--title">
                    <span class="fadeInFromBottom--2s">al</span><span class="fadeInFromBottom--3s">-che-</span><span class="fadeInFromBottom--4s">my</span>
                </div>
                <div class="cover--definition">
                    <p><span class="animate-text--3s"><small>noun</small> \ ˈal-kə-mē \</span></p>
                    <p><span class="animate-text--3s">A seemingly magical process of transformation, creation, or combination<span class="accent">.</span></span></p>
                </div>
            </div>
        </div>
    <?php } ?>

<?php
get_footer();
?>