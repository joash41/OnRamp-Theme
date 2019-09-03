<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            <?php 
            if ( is_front_page() ){ echo 'Home'; echo ' | ';  bloginfo( 'name' );}
            else { echo wp_title(''); echo ' | ';  bloginfo( 'name' );}?>
        </title>
        <?php wp_head(); ?>
    </head>
    <header id="header">
        <div class="container">
            <div class="wrapper">
                <div class="logo_wrapper">
                    <a href="<?php echo get_site_url(); ?>" class="logo_link">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/web_logo.png" />
                    </a>
                </div>
                <div id="mobile-menu-icon" class="mobile-menu-icon">
                    <div onclick="mobileNav()" class="menu_icon">
                        <div class="bit-1"></div>
                        <div class="bit-2"></div>
                        <div class="bit-3"></div>
                    </div>
                </div>
            </div>
        <nav id="menu-wrapper" class="menu-wrapper">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>
        </div>
    </header>
    <body <?php body_class(); ?>>