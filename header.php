<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&family=Work+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>

    <header class="header-nav">
        <div class="primary-container header-nav-container">
            <a href="/" class="logo-container">
                <img src="<?php the_field('business_logo', 'option'); ?>" alt="InStream Logo with Company Name Beside It"
                            class="img-responsive">
            </a>
            <nav class="header-nav-container-desktop">
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1'
                    ));
                ?>
                <a href="javascript:void(0);" class="header-nav-contact">Let's Talk</a>
            </nav>
            <div class="header-menu-bars-mobile">
                <span class="menu-bars"></span>
                <span class="menu-bars"></span>
                <span class="menu-bars"></span>
            </div>
        </div>
        <div class="header-mobile-menu">
            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'menu-1'
                ));
            ?>
            <a href="javascript:void(0);" class="header-nav-contact">Let's Talk</a>
            <div class="header-mobile-menu-logo">
                <img src="<?php the_field('business_logo', 'option'); ?>" alt="InStream Logo with Company Name Beside It"
                            class="img-responsive">
            </div>
        </div>
    </header>
