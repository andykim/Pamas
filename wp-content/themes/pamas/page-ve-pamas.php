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
			<?php wp_nav_menu( array( 'container_class' => 'leftnmenu', 'theme_location' => 'leftsiderbar' ,'menu'=> 'leftsiderbar') ); ?>			            
			<div class="trietlycont">
			  <h1> TRIẾT LÝ</h1>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...</p>
<img src="<?php bloginfo('template_url'); ?>/images/trietly.png" alt="banner 2"/>
<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...</p>
<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...</p>
<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
			</div>
		<img src="<?php bloginfo('template_url'); ?>/images/break1.png"/>	
		<div class="Psalon">
		  <h2>HÌNH ẢNH SALON</h2>
		  <div class="feaImgLft">
		     <img src="<?php bloginfo('template_url'); ?>/images/featureimg.png"/ alt="">	
		  </div>
		  <div class="thumlst">
		     <ul>
			    <li> <img src="<?php bloginfo('template_url'); ?>/images/thumbimg.png" alt="">	</li>
				<li> <img src="<?php bloginfo('template_url'); ?>/images/thumbimg.png" alt="">	</li>
				<li> <img src="<?php bloginfo('template_url'); ?>/images/thumbimg.png" alt="">	</li>
				<li> <img src="<?php bloginfo('template_url'); ?>/images/thumbimg.png" alt="">	</li>
				<li> <img src="<?php bloginfo('template_url'); ?>/images/thumbimg.png" alt="">	</li>
				<li> <img src="<?php bloginfo('template_url'); ?>/images/thumbimg.png" alt="">	</li>
				<li> <img src="<?php bloginfo('template_url'); ?>/images/thumbimg.png" alt="">	</li>
				<li> <img src="<?php bloginfo('template_url'); ?>/images/thumbimg.png" alt="">	</li>
				<li> <img src="<?php bloginfo('template_url'); ?>/images/thumbimg.png" alt="">	</li>
			 </ul>
			 
			 <img class="pagenavi" src="<?php bloginfo('template_url'); ?>/images/pagenavithumb.png" alt="">
			 
		  </div>
		</div>
		<div class="hvideo">
		  <h2>VIDEO</h2>
		   <div class="feaImgLft">
		     <img src="<?php bloginfo('template_url'); ?>/images/videoDemo.png" alt=""  />	
			 
		   </div>
		    <div class="thumlst">
		     <ul>
			    <li> <img src="<?php bloginfo('template_url'); ?>/images/thumbvideoDemo.png" alt="">	</li>
				<li> <img src="<?php bloginfo('template_url'); ?>/images/thumbvideoDemo.png" alt="">	</li>
				<li> <img src="<?php bloginfo('template_url'); ?>/images/thumbvideoDemo.png" alt="">	</li>
				<li> <img src="<?php bloginfo('template_url'); ?>/images/thumbvideoDemo.png" alt="">	</li>
				<li> <img src="<?php bloginfo('template_url'); ?>/images/thumbvideoDemo.png" alt="">	</li>
			 </ul>			 			 
		  </div>
		</div>
	 </div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>