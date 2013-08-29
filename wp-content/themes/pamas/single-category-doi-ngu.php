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

get_header();
?>
<?php 
$meta_web = get_post_meta( get_the_ID(), 'meta-website', true ); 
$meta_face = get_post_meta( get_the_ID(), 'meta-face', true ); 
$meta_youtube = get_post_meta( get_the_ID(), 'meta-youtube', true ); 
$meta_certificate = get_post_meta( get_the_ID(), 'meta-certificate', true ); 
?>
	<div id="primary" class="content-area">
	 <div id="content-011" class="site-content" role="main">	
	   <div class="doingucont1">
		<div class="subdoingumenu bgimenu2">
			<a href="#">VỀ PAMAS</a>
			<a class="dnps" href="#">ĐỘI NGŨ PAMAS</a>
			<a class="bsps" href="#">BÁC SĨ ANDRE</a>
		</div>
		<h1>ĐỘI NGŨ PAMAS</h1>
		<div class="bspamas">
			<div class="bsftre">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="img-details-pamas"><?php echo (has_post_thumbnail()) ? get_the_post_thumbnail($post->ID, 'full') : ''; ?></div>
				<h2><?php echo get_the_title();?></h2>
         	<?php the_excerpt();?>
			
				</div>
			<span>KINH NGHIỆM</span>
			<?php the_content();?>
			<?php endwhile; ?>
				<span>CÁC THÔNG TIN LIÊN QUAN</span>
			<p>
				<span class="rarticlelst">Các bài viết liên quan về bác sĩ:</span> <br/>
				
				 <?php related_posts_dangdat(get_the_ID()); ?>
				
			</p>
			<img src="<?php bloginfo('template_url'); ?>/images/break2.png"/>
			<ul class="xahoi">
				<li>
					<a href="<?php if(!empty( $meta_web )) { echo $meta_web ;} else {echo '#';}?>">
						<div class="website-02">
							<p>Website</p>
							<img src="<?php bloginfo('template_url'); ?>/images/website.png" />
						</div>
					</a>
				</li>
				<li>
					<a href="<?php if(!empty( $meta_face )) { echo $meta_face ;} else {echo '#';}?>">
						<div class="facebook-02">
							<p>Facebook</p>
							<img src="<?php bloginfo('template_url'); ?>/images/Fasymbol.png" />
						</div>
					</a>
				</li>
				<li>
					<a href="<?php if(!empty( $meta_youtube )) { echo $meta_youtube ;} else {echo '#';}?>">
						<div class="youtube-02">
							<p>Kênh Youtube</p>
							<img src="<?php bloginfo('template_url'); ?>/images/Yesymbol.png" />
						</div>
					</a>
				</li>				
			</ul>
			<img src="<?php bloginfo('template_url'); ?>/images/break3.png"/>
			<div class="ttlienquan">
				<ul>
				<?php query_posts('cat=7&posts_per_page=4');   
					if(have_posts()) { 
						while(have_posts()):the_post();
					?> 
					<li>
						<?php echo (has_post_thumbnail()) ? get_the_post_thumbnail($post->ID, 'thumbnail') : ''; ?>
					</li>
					<?php endwhile; 
					} wp_reset_query();?>
				</ul>
			</div>
		</div>
		<div class="Rghtdcete">
			<div class="img-rghtdcete">
				<img src="<?php bloginfo('template_url'); ?>/images/Layer-66.png" /><span>Certificate</span><img src="<?php bloginfo('template_url'); ?>/images/Layer-66.png" />
			</div>
			<div class="Rghtdcete-content">
				<?php echo $meta_certificate ;?>
			</div>
		</div>
	   </div>
	 </div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>