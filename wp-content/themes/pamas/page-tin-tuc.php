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
		
	<!--LEFT MENU-->
	<?php include(TEMPLATEPATH.'/inc/leftmenu.php'); ?>
	   <div class="Eventcont">
		<div class="Eventcont promot">
		<?php 
			// Get the ID of a given category						
			$category_id = get_cat_ID('PROMOTIONS');
			

			// Get the URL of this category
			$category_link = get_category_link($category_id);
		?> 
		
		
			<h1><a href="<?php echo get_category_link(4); ?>"><?php echo get_cat_name(4);?></a></h1>
			<ul class="sukienlst">
			
			<?php wp_reset_query();
             query_posts('cat=4 &posts_per_page=2') ;
              if(have_posts()): ?>
        
             <?php while(have_posts()):the_post(); 
			 $thumb = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>															 
			 <li>
					<span class="Etitle"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></span>
					<span class="Edate"><?php the_time('D d-m-Y') ?></span>
					<a href="<?php the_permalink();?>"><img src="<?php echo $thumb; ?>" alt=""/></a>
					<p><?php the_excerpt();?></p>
			  </li>			  
			  <?php endwhile ; ?>                
              <?php endif; wp_reset_query(); ?>			  				  			 
			</ul>
			<a href="<?php echo get_category_link(4); ?>"><img src="<?php bloginfo('template_url'); ?>/thanh/readmore2.png"/></a>
		</div><br/>
		<div class="Eventcont event">
		<?php 
			// Get the ID of a given category
			$category_id = get_cat_ID( 'EVENTS' );
			// Get the URL of this category
			$category_link = get_category_link( $category_id );
		?> 							
			<h1><a href="<?php echo get_category_link(5) ?>"> <?php echo get_cat_name(5);?></a></h1>
			<ul class="sukienlst">			
			<?php wp_reset_query();
             query_posts('cat=5 &posts_per_page=2') ;
              if(have_posts()): ?>        
             <?php while(have_posts()):the_post(); 
			 $thumb = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>	
			 <li>
					<span class="Etitle"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></span>
					<span class="Edate"><?php the_time('D d-m-Y') ?></span>
					<a href="<?php the_permalink();?>"><img src="<?php echo $thumb; ?>" alt=""/></a>
					<p><?php the_excerpt();?></p>
			  </li>			  
			  <?php endwhile ; ?>                
              <?php endif; wp_reset_query(); ?>	
			</ul>
			<a href="<?php echo get_category_link(5); ?>"><img src="<?php bloginfo('template_url'); ?>/thanh/readmore2.png"/></a>
		</div><br/>
		<div class="Eventcont tip">
		<?php 
			// Get the ID of a given category
			$category_id = get_cat_ID( 'YOUR TIPS' );

			// Get the URL of this category
			$category_link = get_category_link( $category_id );
		?>
		    <h1><a href="<?php echo get_category_link(6);?>"><?php echo get_cat_name(6);?></a></h1>
			<ul class="tiplst">
			<?php wp_reset_query();
             query_posts('cat=6 &posts_per_page=5') ;
              if(have_posts()): ?>        
             <?php while(have_posts()):the_post(); ?>	
			 <li>
					<span class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></span>
					<span class="desc"><?php the_excerpt();?></span>
					<!-- <a href="<?php //echo get_post_meta( get_the_ID(), 'meta-link', true );?>"><?php //echo get_post_meta( get_the_ID(), 'meta-link', true ); ?></a> -->
			  </li>			  
			  <?php endwhile ; ?>                
              <?php endif; wp_reset_query(); ?>															
			</ul>
			<a href="<?php echo get_category_link(6); ?>"><img src="<?php bloginfo('template_url'); ?>/thanh/readmore2.png"/></a>
		</div>
	   </div><!--.Eventcont-->
		
	 </div><!-- #content -->
	</div><!-- #primary -->
<?php //get_sidebar(); ?>
<?php get_footer(); ?>