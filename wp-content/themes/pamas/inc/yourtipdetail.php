<div class="catnewlst2">

	<h1 class="cat_title"><?php echo $cat_name ?></h1>

    <ul class="tiplst">

		<?php if (have_posts()): ?>

	    <?php while(have_posts()):the_post(); ?>					

		 <li>

					<h2 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

					<span class="desc"><?php the_excerpt();?></span>

					<a href="<?php echo get_post_meta( get_the_ID(), 'meta-link', true ); ?>"><?php echo get_post_meta( get_the_ID(), 'meta-link', true ); ?></a>

		</li>			 		

		<?php endwhile ; ?>  

		<?php endif;   wp_reset_query(); ?>

	</ul>

</div>