<div class="catnewlst">
	<h1><?php echo $cat_name ?></h1>
    <ul>
		<?php if (have_posts()): ?>
	    <?php while(have_posts()):the_post(); 
		$thumb = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>	
				
		 <li>
		 <a href="<?php the_permalink();?>"><img class="CEfeature" alt src="<?php echo $thumb;  ?>" /></a>
		 <span>
		  <h2 class="ECtitle"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2><br/>
	      <span class="ECdate"><?php the_time('D d-m-Y') ?></span> <br/>
		  <p class="ECdesc"><?php the_excerpt();?></p>	   			
		 </span>		 
		 </li>
		 		 
		<?php endwhile ; ?>  
		<?php endif;   wp_reset_query(); ?>
	</ul>

</div>