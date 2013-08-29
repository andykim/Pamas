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
		    <h1>CÁC CÔNG NGHỆ THẨM MỸ</h1>
			<?php wp_nav_menu( array( 'container_class' => 'leftnmenu', 'theme_location' => 'leftsiderbar' ,'menu'=> 'leftsiderbar') ); ?>			            
		</div>
		<div class="centralcon">
			<h2>CÔNG NGHỆ</h2>
			<img src="<?php bloginfo('template_url'); ?>/images/facelike.png" alt=""/>
			<p class="btmdld">
			 <img src="<?php bloginfo('template_url'); ?>/images/downloadicon.png" alt=""/>
			 <img src="<?php bloginfo('template_url'); ?>/images/printicon.png" alt=""/>
			</p>
			<img src="<?php bloginfo('template_url'); ?>/images/txtlorem.png" alt=""/>		
			<div class="Tdetail1">
				<h3>Detail 1</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>				
				<ul>
				  <li>
					<img src="<?php bloginfo('template_url'); ?>/images/feature1.png" alt=""/>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
				  </li>
				  <li>
					<img src="<?php bloginfo('template_url'); ?>/images/feature1.png" alt=""/>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
				  </li>
				</ul>
			</div>
			<div class="Tdetail1">
				<h3>Detail 2</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>				
				<ul>
				  <li>
					<img src="<?php bloginfo('template_url'); ?>/images/feature1.png" alt=""/>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
				  </li>
				  <li>
					<img src="<?php bloginfo('template_url'); ?>/images/feature1.png" alt=""/>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
				  </li>
				</ul>
			</div>
			<div class="Tdetail1">
				<h3>Detail 3</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>				
				<ul>
				  <li>
					<img src="<?php bloginfo('template_url'); ?>/images/feature1.png" alt=""/>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
				  </li>
				  <li>
					<img src="<?php bloginfo('template_url'); ?>/images/feature1.png" alt=""/>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
				  </li>
				</ul>
			</div>
			<div class="RInfo">
				<h3>Các thông tin liên quan</h3>
				<span class="titlehead">Các bài viết liên quan về công nghệ: </span>
				<ul>
				  <li>- Lorem Ipsum is simply dummy text of the printing and typesetting.</li>
				  <li>- Lorem Ipsum is simply dummy text of the printing and typesetting.</li>
				  <li>- Lorem Ipsum is simply dummy text of the printing and typesetting.</li>
				</ul>
			</div>
		</div>
		<div class="Ntecgy">
			   <h3>CÔNG NGHỆ MỚI NHẤT</h3>
			   <ul>
				  <li>Công nghệ phun laser abcdezxy </li>
				  <li>Công nghệ phun laser </li>
				  <li>Công nghệ phun laser abcdezxy</li>
				  <li>Công nghệ phun laser </li>
				  <li>Công nghệ phun laser abcd</li>
				  <li>Công nghệ phun laser</li>
				  <li>Công nghệ phun laser</li>
			   </ul>
			   <div class="banner">
		 <a class="next unslider-arrow"><img src="<?php bloginfo('template_url'); ?>/images/tai/next.png" alt="next"/></a>
		 <a class="unslider-arrow previous"><img src="<?php bloginfo('template_url'); ?>/images/tai/prev.png" alt="prev"/></a>		 
		    <ul>
			  <li><img src="<?php bloginfo('template_url'); ?>/images/hinh1.png" alt=""/></li>		  
			  <li><img src="<?php bloginfo('template_url'); ?>/images/hinh1.png" alt=""/></li>			  
			  <li><img src="<?php bloginfo('template_url'); ?>/images/hinh1.png" alt=""/></li>
			</ul>		   
		 </div>
			   
					
		</div>
	 </div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>