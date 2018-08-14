<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Swag_Space
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Swag Space</title>
    <meta name="description" content="">
    <!-- Google Fonts - Work Sans -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <!-- Google Fonts - Pacifico -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- jQuery 3.3.1 -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'swag-space' ); ?></a>

<!--	<header id="masthead" class="site-header">-->
<!--		<div class="site-branding">-->
<!--			--><?php
//			the_custom_logo();
//			if ( is_front_page() && is_home() ) :
//				?>
<!--				<h1 class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
<!--				--><?php
//			else :
//				?>
<!--				<p class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></p>-->
<!--				--><?php
//			endif;
//			$swag_space_description = get_bloginfo( 'description', 'display' );
//			if ( $swag_space_description || is_customize_preview() ) :
//				?>
<!--				<p class="site-description">--><?php //echo $swag_space_description; /* WPCS: xss ok. */ ?><!--</p>-->
<!--			--><?php //endif; ?>
<!--		</div><!-- .site-branding -->
<!---->
<!--		<nav id="site-navigation" class="main-navigation">-->
<!--			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'swag-space' ); ?><!--</button>-->
<!--			--><?php
//			wp_nav_menu( array(
//				'theme_location' => 'menu-1',
//				'menu_id'        => 'primary-menu',
//			) );
//			?>
<!--		</nav><!-- #site-navigation -->
<!--	</header><!-- #masthead -->

    <header class="site-header drop-in">
        <div class="container max-width flex justify-between">
            <!-- Site Logo -->
            <div class="flex justify-start items-center">
                <a href="/">
                    <div class="site-logo">
                        <div class="flex">
                            <div class="logo flex justify-start items-center">
                                <img src="<?= get_template_directory_uri() . '/images/mini-logo.svg'; ?>" class="custom-logo" />
                            </div>
                            <div class="title flex justify-end items-center">
                                <h2>Swag Space</h2>
                            </div>
                        </div>
                    </div><!-- .site-logo -->
                </a>
            </div>
            <!-- Main Navigation -->
            <div class="flex items-center">
                <nav id="site-navigation" class="main-navigation nav primary flex items-center justify-end">
                    <div class="menu-primary-container">
                        <ul id="menu-primary" class="primary-menu header-font medium smooth gray h5 list-reset">
                            <li class="menu-item"><a href="#" id="submit-modal-trigger"><span id="all"><img src="https://s3-us-west-1.amazonaws.com/cdn.swag.space/assets/emojis/1f449.png" width="24"/></span>&nbsp; submit swag</a></li>
                            <li class="menu-item"><a href="#" id="request-modal-trigger"><span id="all"><img src="https://s3-us-west-1.amazonaws.com/cdn.swag.space/assets/emojis/1f44f.png" width="24"/></span>&nbsp; request swag</a></li>
                        </ul><!-- .menu-primary -->
                    </div>
                </nav><!-- .site-navigation -->
            </div>
        </div><!-- .container -->
    </header><!-- .site-header -->

    <!-- Sticky Header -->
    <header class="sticky-header drop-down">
        <div class="tag_header container flex justify-between items-center">

            <!-- Site Logo -->
            <div class="flex justify-start items-center">
                <a href="/">
                    <div class="site-logo">
                        <div class="flex">
                            <div class="logo flex justify-start items-center">
                                <img src="<?= get_template_directory_uri() . '/images/mini-logo.svg'; ?>" class="sticky-logo" />
                            </div>
                            <!-- <div class="sticky-title flex justify-end items-center">
                                <h2>Swag Space</h2>
                            </div> -->
                        </div>
                    </div><!-- .site-logo -->
                </a>
            </div>

            <!-- Category Navigation -->
            <div class="flex items-center">
                <nav id="site-navigation" class="main-menu nav primary flex items-center justify-between">
                    <div class="menu-primary-container">

                        <ul class="primary-menu header-font medium smooth gray h5 list-reset">
                            <li class="tag__filter_item"><button class="flex category-toggle show-all" href="#all" type="button" data-filter="all"><span id="all"><img src="https://s3-us-west-1.amazonaws.com/cdn.swag.space/assets/emojis/1f919.png" width="16"/></span>&nbsp; All</button></li>
                            <li class="tag__filter_item"><button class="flex category-toggle dev" href="#dev" type="button" data-filter="brand_category-dev"><span id="dev"><img src="https://s3-us-west-1.amazonaws.com/cdn.swag.space/assets/emojis/1f913.png" width="16"/></span>&nbsp; Dev</button></li>
                            <li class="tag__filter_item"><button class="flex category-toggle design" href="#design" type="button" data-filter="brand_category-design"><span id="design"><img src="https://s3-us-west-1.amazonaws.com/cdn.swag.space/assets/emojis/1f3a8.png" width="16"/></span>&nbsp; Design</button></li>
                            <li class="tag__filter_item"><button class="flex category-toggle tech" href="#tech" type="button" data-filter="brand_category-tech"><span id="tech"><img src="https://s3-us-west-1.amazonaws.com/cdn.swag.space/assets/emojis/1f468-1f4bb.png" width="16"/></span>&nbsp; Tech</button></li>
                            <li class="tag__filter_item"><button class="flex category-toggle social" href="#social" type="button" data-filter="brand_category-social"><span id="social"><img src="https://s3-us-west-1.amazonaws.com/cdn.swag.space/assets/emojis/1f44b.png" width="16"/></span>&nbsp; Social</button></li>
                        </ul>

                    </div>
                </nav><!-- .site-navigation -->
            </div>

            <div class="flex items-center">
                <nav id="share" class="social-menu nav flex items-center justify-between">
                    <div class="menu-social-container">

                        <ul class="social-menu header-font medium smooth gray h5 list-reset">

                            <li><a href="https://producthunt.com/posts/swagspace" rel="nofollow" target="_blank"><img src="https://s3-us-west-1.amazonaws.com/cdn.swag.space/icons/product-hunt.svg" width="22" alt="@hi_swagspace"></a></li>
                            <li><a href="https://twitter.com/hi_swagspace" rel="nofollow" target="_blank"><img src="https://s3-us-west-1.amazonaws.com/cdn.swag.space/icons/twitter.svg" width="22" alt="@hi_swagspace"></a></li>

                        </ul>

                    </div>
                </nav>
            </div>

        </div><!-- .container -->
    </header>

	<div class="page-wrapper">
