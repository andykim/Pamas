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
	 <div id="content1" class="site-content" role="main">	
	   <div class="doingucont1">
		<div class="subdoingumenu">
			<a href="<?php echo get_page_link(6); ?>">VỀ PAMAS</a>
			<a class="dnps" href="<?php echo get_page_link(8); ?>">ĐỘI NGŨ PAMAS</a>
		</div>
		<h1><a href="<?php echo get_page_link(8); ?>">ĐỘI NGŨ PAMAS</a></h1>
		<ul class="dnlst">
		   <?php query_posts('cat=7&posts_per_page=10'); 
		     $i=0;  
			   if(have_posts()) { 
				while(have_posts()):the_post();
				   $postid = get_the_ID();
				 ?>  
				
				   <li class="<?php  if($i % 2!=1){echo'magin60 ';}else{echo 'thump_img1 ';} $i++; echo $i ;?>">
		<a href="<?php the_permalink();?>"> <?php echo (has_post_thumbnail()) ? get_the_post_thumbnail($post->ID, 'thumbnail') : ''; ?></a>
					   <div class='list_st'> 
						   <span class="title"><a href="<?php the_permalink();?>"><?php  echo get_the_title();?></a></span>
						   <span class="dndsc"><a href="<?php the_permalink();?>"><?php the_excerpt();?></a></span>
						   <a href="<?php the_permalink();?>"><img class="dndel" src="<?php bloginfo('template_url'); ?>/images/tai/readmore2.png" alt=""/></a>	
						</div>
					</li>
								   
			   <?php endwhile; 
					}wp_reset_query();?>
		</ul>
	   </div>
	 </div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>