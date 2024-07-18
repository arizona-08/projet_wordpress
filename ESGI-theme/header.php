<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="site-header">
    <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/svg/logo.svg" alt="ESGI">
        <span class="square"></span>
    </div>
    <div class="burger-menu" id="burger-menu">
        <img src="<?php echo get_template_directory_uri(); ?>/images/svg/menu.svg" alt="ESGI">
    </div>
</header>
<nav class="mobile-menu" id="mobile-menu">
    <div class="mobile-menu-content">
        <img src="<?php echo get_template_directory_uri(); ?>/images/png/logowhite.png" alt="ESGI" class="logo-white">
        <p>Or try Search</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/svg/close.svg" class="close-menu" id="close-menu">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary_menu',
                'container' => false,
                'menu_class' => 'mobile-menu-list',
            )
        );
        ?>
    </div>
</nav>










