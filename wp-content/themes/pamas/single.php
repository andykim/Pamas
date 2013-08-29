<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
	<!--LEFT MENU-->
	<?php include(TEMPLATEPATH.'/inc/leftmenu.php'); ?>
	
	<div class="Eventcont">
	<div class="catnewlst2">
	<?php 
	$id_cat=the_category_ID(false);
	$name_cat=get_cat_name($id_cat);
	?>
	<span class="cat_title"><a href="<?php echo get_category_link($id_cat);?>"><?php 
	
	echo $name_cat ?></a></span>
    <ul>
		<?php if (have_posts()): ?>
	    <?php while(have_posts()):the_post(); ?>					
		 <li>		 		 
		  <h1 class="ECtitle"><?php the_title(); ?></h1>
	      <span class="ECdate"><?php the_time('D d-m-Y') ?></span>	     
		<br/>
		  <span class="ECdesc"><?php the_content();?></span>	   			
		 </li>		 		 
		<?php endwhile ; ?>  
		<?php endif;   wp_reset_query(); ?>
	</ul>
	</div>	
	
	<!-- San pham cung Category -->
	<br/>
	<div class="pm_List_post">
	<span class="pm_title">Sản Phẩm Liên Quan </span>	
	<ul>
	<?php wp_reset_query();
             query_posts('cat='.$id_cat.' &posts_per_page=3 & order=rand()') ;
              if(have_posts()): ?>        
             <?php while(have_posts()):the_post(); 
			 $thumb = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>	
		<li>
			<a href="<?php the_permalink();?>"><img src="<?php echo $thumb; ?>"/></a>
			<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
			<p><?php //the_excerpt(); ?></p>
		</li>
		<?php endwhile;?>
		<?php endif; wp_reset_query();?>
	</ul>
	</div>
	<!-- Facebook Comment -->
		<?php echo do_shortcode('[fbcomments]');?>
	</div>	
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>