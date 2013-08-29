<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">	
		<div id="content" role="main" class="site-content">
		<div id="SearchResult">       
			<span class="title">Kết Quả Tìm</span>
			<?php if(have_posts()) : while(have_posts()) : the_post();
				$thumb = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );		
			?>
			<div class="search_result">
			<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
			<img src="<?php echo $thumb;?>" border="0"/>
			<?php the_content_rss('', false,'', 40);?>		
			</div>
			<?php endwhile; else: ?>
			<br/><br/>
			<p>Tìm không ra! <img src="http://bcdonline.net/wp-includes/images/smilies/icon_sad.gif" alt=":(" class="wp-smiley"> </p>
			<?php endif; ?>
		
		</div><!--#SearchResult-->
		</div> <!--#content-->		
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>