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
	$meta_direction = get_post_meta( get_the_ID(), 'meta-direction', true ); 
	$meta_ingredient = get_post_meta( get_the_ID(), 'meta-ingredient', true ); 
?>
	 <div class="clear"></div>
    <div id="menu-content-02">
               <ul>
                   <li><a href="#">PRIMO</a></li>
                   <li><a href="#">BỘ SẢN PHẨM CLEARSER</a></li>
                   <li><a href="#">SẢN PHẨM 1</a></li>
               </ul>
            </div>
	<div id="content-02">
    <div class="clear"></div>
        <div id="content-title-side">
			<?php while ( have_posts() ) : the_post(); ?>
                <div id="content-side-left">
                    <div id="content-wrap">
                        <h2><?php echo get_the_title();?></h2>
                        <div class="content-product-02">
                            <?php echo (has_post_thumbnail()) ? get_the_post_thumbnail($post->ID, 'full') : ''; ?>
                        </div>
                        
						<?php 
						$postid        = get_the_ID(); 
						
							$args = array(
							'post_type' => 'attachment',
							'numberposts' => -1,
							'post_status' => null,
							'post_parent' => $postid
							);
							$attachments = get_posts( $args );
							if ( $attachments ) {
								echo '<ul id="myGallery">';
								foreach ( $attachments as $attachment ) {
									echo '<li>';
									echo wp_get_attachment_image( $attachment->ID, 'thumbnail' );
									echo '</li>';
								}
								echo '</ul>';
							}
						?>		
                        <img src="<?php bloginfo('template_url'); ?>/images/downloadicon.png" />
                        <img src="<?php bloginfo('template_url'); ?>/images/printicon.png" />
                    </div>
                </div>
                <div id="content-title-02">
                    <div class="mainmenu">
                      <ul id="menu-header-menu" class="menu">
                            <li>
                            <a href="#tabs-1">FUNCTION</a><span class="triangle"></span>
                            </li>
                            <li>
                                <a href="#tabs-2">DIRECTION</a><span class="triangle"></span>
                            </li>
                            <li>
                                <a href="#tabs-3">INGREDIENTS</a><span class="triangle"></span>
                            </li>
                       </ul>
                       
					   <div id="tabs-1">
                       <?php the_content();?>
                       </div>
						<div id="tabs-2">
							<?php if(!empty($meta_direction)) { echo $meta_direction ;} ?>
						</div>
                        <div id="tabs-3">
							<?php if(!empty( $meta_ingredient )) { echo $meta_ingredient ;} ?>
						</div>
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/muahangonline-02.png" /></a>
                     </div>
                   
		           
                </div><!--side-left-->
                
			<?php endwhile; ?>	
             <!-- Facebook Comment -->
              <?php echo do_shortcode('[fbcomments]');?> 
        </div>
            <div class="content-side-right">
            	<h2>You’ll also love</h2>
                <ul class="product-relate-wrap">
					 <?php 
						$id_cat=the_category_ID(false);
						$name_cat=get_cat_name($id_cat); ?>
					<?php  query_posts('cat='.$id_cat.' &posts_per_page=2 & order=rand()') ;
					while(have_posts()):the_post(); ?>
					<li>
                    	<div class="product-side">
                     <?php echo (has_post_thumbnail()) ? get_the_post_thumbnail($post->ID, 'medium') : ''; ?>
                        </div>
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
						<?php the_excerpt();?>
                     </li>
					<?php endwhile; 
					wp_reset_query();?>
                </ul>
                <div id="content-side-logo">
                	<p>SHOULD CONSIDER</p>
                </div>
                <div class="product-relate">
					<ul>
						<?php 
							query_posts('cat= 8 &posts_per_page=3 & order=rand()') ;
							while(have_posts()):the_post();?>
							<li>
						
								<div class="product-relate-content">
								<?php echo (has_post_thumbnail()) ? get_the_post_thumbnail($post->ID, 'medium') : ''; ?>
								</div>
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
								<?php the_excerpt();?>
							</li>
							<?php endwhile; 
							 wp_reset_query();?>	
					</ul>
					
                </div>
                
            </div>
            
        </div><!--End content-->
        <div class="clear"></div>
<?php get_footer(); ?>