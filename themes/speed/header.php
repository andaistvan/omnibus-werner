<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

   <header id="header">
      <div class="main-container">

         <div class="site-branding">
   			<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">omnibus <span>werner</span></a></p>
   		</div><!-- .site-branding -->

         <?php
         echo'

         <div class="top-bar">
            <div id="top-bar-right">';
                 wp_nav_menu(array(
                     'container' => false,
                     'menu' => __('Top Bar Menu', 'speed'),
                     'menu_class' => 'dropdown menu',
                     'theme_location' => 'topbar-menu',
                     'items_wrap' => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
                     //Recommend setting this to false, but if you need a fallback...
                     'fallback_cb' => 'f6_topbar_menu_fallback',
                     'walker' => new F6_TOPBAR_MENU_WALKER(),
                 ));
             echo'
            </div>
         </div>'; ?><!-- .site-navigation -->
      </div>
   </header><!-- header -->
   <div class="head-placeholder"></div>

   <div id="content" class="site-content">
