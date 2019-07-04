<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/tiny-slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/min/tiny-slider.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body id="top" <?php body_class(); ?>>
<div class="wrapper">
    <div id="navbar-js">
        <header class="header clear" role="banner">
            <div class="header__wrapper">
                <div class="header__logo-wrapper">
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>">
                            <img class="header__logo-desktop" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Rent Estate" />
                        </a>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="nav__hamburger-icon" id="hamburger">
                    <div class="hamburger-bar1"></div>
                    <div class="hamburger-bar2"></div>
                    <div class="hamburger-bar3"></div>
                </div>
                <!-- Menu -->
                <nav class="header__nav" role="navigation">
                    <?php html5blank_nav(); ?>
                </nav>
            </div>
        </header>
    </div>
