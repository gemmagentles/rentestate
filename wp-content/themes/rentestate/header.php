<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Rent Estate Property Management is a residential management company that focuses on serving the needs of owners who hold investment properties in the Lower Mainland." /> 
    <meta name="keywords" content="rent,listings,home,renting,condo,house,townhouse,burnaby,downtown,richmond,ladner,tsawwassen,vancouver" />
    <meta property="og:title" content="A residential management company that focuses on serving the needs of owners who hold investment properties in the Lower Mainland." /> 
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.rentestate.ca/" />
    <meta property="og:image" content="https://www.rentestate.ca/wp-content/uploads/2019/07/two-large-houses.jpg" />

    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/tiny-slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/min/tiny-slider.js"></script>

    <?php wp_head(); ?>
    <script>
        function toggleNav() {
            var nav = document.getElementById("Sidenav"),
            main = document.getElementById("js-main");

            // check if already open, if so close
            if (nav.style.width == "272px") {
                nav.style.width = "0";
                main.style.marginLeft = "0";
                nav.classList.remove("header__nav--open");

                document.getElementById("navbar-js").style.width = "100%";
                
                // move middle hamburger icon back to the left
                document.getElementById("js-hamburger-bar2").style.margin = "0 0 0 0";
                // show logo again when nav is removed
                document.getElementById("js-logo").style.opacity = "1";
            }
            // else it must be closed so open
            else {
                nav.style.width = "272px";
                main.style.marginLeft = "272px";
                main.style.position = "relative";
                nav.classList.add("header__nav--open");

                document.getElementById("navbar-js").style.width = "calc(100% - 276px)";

                // when menu nav opens move the middle hamburger icon to right to show it is open. 
                document.getElementById("js-hamburger-bar2").style.margin = "0 0 0 10px";
                // And remove logo so it isnt behind hamburger.
                document.getElementById("js-logo").style.opacity = "0";
            }
        }
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146401060-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-146401060-1');
    </script>
</head>
<body <?php body_class(); ?>>
<div id="js-main" class="wrapper">
    <div id="navbar-js">
        <header class="header clear" role="banner">
            <div class="header__wrapper">
                <div class="header__logo-wrapper">
                    <div id="js-logo" class="logo">
                        <a href="<?php echo home_url(); ?>">
                            <img class="header__logo-desktop" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Rent Estate" />
                        </a>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="nav__hamburger-icon" id="hamburger" onclick="toggleNav()" value="Changed To 1">
                    <div class="hamburger-bar1"></div>
                    <div id="js-hamburger-bar2" class="hamburger-bar2"></div>
                    <div class="hamburger-bar3"></div>
                </div>
                <!-- Menu -->
                <nav id="Sidenav" class="header__nav" role="navigation">
                    <?php html5blank_nav(); ?>
                    <!-- Social Media Show On Mobile Only -->
                    <?php if ( have_rows( 'social_media', 'option' ) ) : ?>
                        <div class="header__social">
                            <?php while ( have_rows( 'social_media', 'option' ) ) : the_row(); ?>
                                <?php $social_icon = get_sub_field( 'social_icon' ); ?>
                                <?php if ( $social_icon ) { ?>
								    <a title="<?php echo $social_icon['alt']; ?>" target="_blank" href="<?php the_sub_field( 'social_link' ); ?>">
                                        <img class="header__social--icon" src="<?php echo $social_icon['url']; ?>" alt="<?php echo $social_icon['alt']; ?>" />
                                    </a>
                                <?php } ?>
                            <?php endwhile; ?>
                        </div>
                        <?php else : ?>
                            <?php // no rows found ?>
                    <?php endif; ?>
                </nav>
            </div>
        </header>
    </div>
