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

	<div class="clear"></div>
		<div id="content">
        	<div id="content-title">
                <div id="content-title-logo">
                    <p>THÔNG TIN CHUNG</p>
                </div>
                <div id="title" class = "cate_hiden">
					<img src="<?php bloginfo('template_url'); ?>/images/a.png" class="img-title-01"/>
					<?php query_posts( 'p=138' );
						while (have_posts()) : the_post();?>
							<h2 class="p-title"><?php echo get_the_title();?></h2>
							<span><?php the_content();?></span>
					<?php endwhile;?>
					<img src="<?php bloginfo('template_url'); ?>/images/a2.png" class="img-title-02"/>
				</div>
            </div>
		</div><!-- #content -->
			<div id="wrap-content">
            	<ul class="product">
					<?php
						$args = array(
						
						'child_of' => 8,
						'hide_empty' => false,
						);
						$categories = get_categories( $args );
						foreach ( $categories as $category ) { ?>
                	
                        <li>
							<div class="content-product">
                             <a href="<?php echo get_category_link( $category->term_id )?>">
								<?php 
									if(wpds_tax_pic_url($category->cat_ID)){
										echo '<img src="'.wpds_tax_pic_url($category->cat_ID).'" />';
										}else{
										// other image or nothing.
									}
								?></a>
								<span class="link-img">
									<a href="<?php echo get_category_link( $category->term_id )?>" >Sản Phẩm</a>
								</span>
								<p class="polygon"><a href="<?php echo get_category_link( $category->term_id )?>" ><img src="<?php bloginfo('template_url'); ?>/images/sanpham/polygon.png" /></a></p>
								<p class="layer"><a href="<?php echo get_category_link( $category->term_id )?>" ><?php echo $category->name; ?></a></p>
							</div>
						</li>
                    
						<?php }?>
					<br clear="all" />
                </ul>
            </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>