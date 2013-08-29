<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">	

		<div class="leftnmenu">
		    <h1>DỊCH VỤ</h1>
			<?php wp_nav_menu( array( 'container_class' => 'leftnmenu', 'theme_location' => 'leftsiderbar' ,'menu'=> 'leftsiderbar') ); ?>			            
			<img class="Fsubcont" src="<?php bloginfo('template_url'); ?>/images/Fsubscribe.png" alt=""/>
		</div>
		<div class="centralcon">
			<h2>LÀM ĐẸP DA</h2>	
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...</p>
			<img src="<?php bloginfo('template_url'); ?>/images/hinh2.png" alt=""/>						
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...</p>
			<img src="<?php bloginfo('template_url'); ?>/images/hinh3.png" alt=""/>						
		</div>
		<div class="Ntecgy">
			   <h3>CÔNG NGHỆ LIÊN QUAN</h3>
			   <ul>
				  <li>Công nghệ phun laser abcdezxy </li>
				  <li>Công nghệ phun laser </li>
				  <li>Công nghệ phun laser abcdezxy</li>
				  <li>Công nghệ phun laser </li>
				  <li>Công nghệ phun laser abcd</li>
				  <li>Công nghệ phun laser</li>
				  <li>Công nghệ phun laser</li>
			   </ul>			   
			   <h3>SẢN PHẨM LIÊN QUAN</h3>
			   <img src="<?php bloginfo('template_url'); ?>/images/splq.png" alt=""/>	
			   <img class="pdctslide" src="<?php bloginfo('template_url'); ?>/images/hinh4.png" alt=""/>				  
		</div>
	 </div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>