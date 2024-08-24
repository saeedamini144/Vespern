<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php bloginfo('template_url') ?>/assets/img/favicon.png" rel="icon">
    <link href="<?php bloginfo('template_url') ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <title><?php get_the_title(); ?></title>
    <?php
    wp_head();
    ?>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <figure>
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_url($custom_logo_id);
                    // var_dump($logo);
                    if (has_custom_logo()) {
                        echo '<a href="' .  home_url() . '">' . '<img src="' . esc_url($logo) . ' " alt="' . get_bloginfo('name')  . '">' . '</a>'; //use a tag and home url function to link logo the main site
                        // echo '<img src="' . esc_url($logo) . ' " alt="' . get_bloginfo('name')  . '">';
                    } else {
                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                    }
                    ?>
                </figure>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
            <!-- <nav id="navbar" class="navbar"> -->
            <?php
            // wp_nav_menu(array(
            //     'menu'                => "primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
            //     'menu_class'        => "", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
            //     'menu_id'            => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
            //     'container'            => "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
            //     'container_class'    => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
            //     'container_id'        => "", // (string) The ID that is applied to the container.
            //     'fallback_cb'        => "no menu choose", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
            //     'before'            => "", // (string) Text before the link markup.
            //     'after'                => "", // (string) Text after the link markup.
            //     'link_before'        => "", // (string) Text before the link text.
            //     'link_after'        => "", // (string) Text after the link text.
            //     'echo'                => "true", // (bool) Whether to echo the menu or return it. Default true.
            //     'depth'                => "2", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
            //     'walker'            => "", // (object) Instance of a custom walker class.
            //     'theme_location'    => "", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
            //     'items_wrap'        => "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
            //     'item_spacing'        => "discard", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
            //     'show_carets' => true,
            // ));
            // wp_nav_menu(
            //     array(
            //         'menu' => 'primary',
            //         'container' => '',
            //         'theme_location' => 'primary',
            //         'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            //         'show_carets' => true,
            //         'submenu_class' => 'dropdown',
            //         'depth' => 4,
            //     )
            // )
            // 
            ?>
            <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
            <div class="menu-btn" id="menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="menu" id="menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container' => false,
                    'menu_class' => 'menu',
                    'depth' => 4
                ));
                ?>
            </nav>
            <!--  .navbar -->
        </div>
    </header>
    <!-- End Header -->