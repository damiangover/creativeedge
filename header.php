<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">

    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>

    <?php wp_head(); ?>
</head>

<body>
<div class="grid-container">
<!--    <div class="logo">Creative Edge</div>-->
    <div class="logo">
        <a href="http://localhost:7888/wordpress/?page_id=39">
            <img src="http://localhost:7888/wordpress/wp-content/uploads/2018/02/icon-sm.png"/>
        </a>
    </div>
    <?php
    wp_nav_menu($args = array(
        'theme_location' => 'primary',
        'container' => 'nav',
        'container_class' => 'horizontal-navigation',
        'menu_class' => 'flatten',
    ));
    ?>