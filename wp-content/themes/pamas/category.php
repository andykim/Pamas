<?php
/**
 * The template for displaying Category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
		<div id="content" class="site-content" role="main">

		<?php
		$cats = get_the_category();
		$cat_name = $cats[0]->name;
		
		if ($cat_name == "PROMOTIONS" or $cat_name == "KHUYẾN MÃI" or $cat_name=="EVENTS" or $cat_name=="SỰ KIỆN") {
		   require_once("inc/newdetail.php");				
		} elseif($cat_name=="YOUR TIPS" or $cat_name=="LỜI KHUYÊN CỦA BẠN"){
			include(TEMPLATEPATH. '/inc/yourtipdetail.php');
		}
			else{
		?>
			<div id="menu-content">
				<ul>
					<li><a href="#">PRIMO</a></li>
					<li><a href="#">BỘ SẢN PHẨM CLEARSER</a></li>
				</ul>
			</div>
		<div id="content-title">
			<div id="content-title-logo2">
				<p>THÔNG TIN DÒNG SẢN PHẨM</p>
			</div>
			<div id="title" >
				<img src="<?php bloginfo('template_url'); ?>/images/a.png" class="img-title-01"/>
				<h2 class="p-title"><?php echo single_cat_title( '', false );?></h2>
				<?php echo category_description(); ?>
				<img src="<?php bloginfo('template_url'); ?>/images/a2.png" class="img-title-02"/>
			</div>
		<?php } ?>
			<div class="clear"></div>
            <div id="wrap-content">
            	<ul class="product">
					<?php 
						if(have_posts()) { 
							while(have_posts()):the_post();
						?>
                	<li>
                        <div class="content-product-02">
<a href="<?php the_permalink();?>"><?php echo (has_post_thumbnail()) ? get_the_post_thumbnail($post->ID, 'medium') : ''; ?></a>
                            <p class="polygon"><img src="<?php bloginfo('template_url'); ?>/images/sanpham/polygon.png" /></p>
                            <p class="layer-02"><a href="<?php the_permalink();?>"><?php echo get_the_title();?></a></p>
                        </div>
                    </li>
						<?php endwhile; 
						} wp_reset_query();?>	
				</ul>
			</div>					 								
		 </div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>