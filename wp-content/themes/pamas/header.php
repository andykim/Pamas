<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link type="text/css" href="<?php bloginfo('template_url'); ?>/thanh.css"  rel="stylesheet">
    
	<link type="text/css" href="<?php bloginfo('template_url'); ?>/css/tan.css"  rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/unslider.js"> </script>
	<script>	
			$(function() {
				$('.banner').unslider({
				speed: 500,               //  The speed to animate each slide (in milliseconds)
				delay: 3000,              //  The delay between slide animations (in milliseconds)
				complete: function() {},  //  A function that gets called after every slide animation
				keys: true,               //  Enable keyboard (left, right) arrow shortcuts
				dots: true,               //  Display dot navigation
				fluid: false              //  Support responsive design. May break non-responsive designs
			});
			});	
		
	 $( document ).ready(function() {	 
	//start next/previouse link banner
		  var unslider = $('.banner').unslider();	       				
			$('.unslider-arrow').click(function(event) {
				event.preventDefault();
				if ($(this).hasClass('next')) {
				  unslider.data('unslider')['next']();  
				} else {
				  unslider.data('unslider')['prev']();  
				};
				});			
	});	  	
	</script>
	<script>
		$(function() {
			$( "#content-title-02" ).tabs();
		});
	</script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
		 <div id="tophead">
			<a href="<?php echo home_url(); ?>"><img class="toplogo" src="<?php bloginfo('template_url'); ?>/images/tai/logo.png" alt="pamas beauty clinic"/></a>
			<div class="topright">	
			  <p class="tcsl">
				<?php echo qtrans_generateLanguageSelectCode ('dropdown');?>
			    <!-- <img class="toplang" src="<?php //bloginfo('template_url'); ?>/images/tai/multipdemo.png" alt=""/> -->
				<img class="Psym" src="<?php bloginfo('template_url'); ?>/images/tai/psymbl.png" alt=""/>
				<img class="" src="<?php bloginfo('template_url'); ?>/images/tai/hotline.png" alt="HOTLINE: 1900 - 545453"/>
			  </p>
			  <?php wp_nav_menu( array( 'container_class' => 'mainmenu', 'theme_location' => 'Header Menu' ,'menu'=> 'Header Menu', 'after' => '<span class="triangle"></span>') ); ?>			            
			 <!--<img class="search" src="<?php //bloginfo('template_url'); ?>/images/tai/search.png">  -->
			 
		<!--SEARCH FORM-->
		<div class="search_form">
                <form action="<?php echo home_url(); ?>" method="get" id="searchform">
                    <input id="s" onblur="if (this.value == '') {this.value = 'Tim Kiem...';}" onfocus="if (this.value == 'Tim Kiem...') {this.value = '';}" value="Tim Kiem..." name="s" type="text">
                    <input class="search-submit" value="" type="submit">
                </form>
             </div><!--END SEARCH FORM -->
 
			</div>
		 </div>	

		 
		 <?php
if ( is_home() || is_page() || is_single() ||is_category()) {    
?>
		 <div class="banner">
		 <a class="next unslider-arrow"><img src="<?php bloginfo('template_url'); ?>/images/tai/next.png" alt="next"/></a>
		 <a class="unslider-arrow previous"><img src="<?php bloginfo('template_url'); ?>/images/tai/prev.png" alt="prev"/></a>		 
		    <ul>
			  <li>
				<img src="<?php bloginfo('template_url'); ?>/images/banner/banner1.png" alt="banner 1"/>
			  </li>			  
			  <li>
			    <img src="<?php bloginfo('template_url'); ?>/images/banner/banner2.png" alt="banner 2"/>
			  </li>			  
			  <li>
			    <img src="<?php bloginfo('template_url'); ?>/images/banner/banner3.png" alt="banner 3"/>
			  </li>
			</ul>
		   
		 </div>
<?php 
	} 
?>
		 <!--
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>

			
			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav>--><!-- #site-navigation -->
			</div><!-- #navbar -->
			
		</header><!-- #masthead -->

		<div id="main" class="site-main">