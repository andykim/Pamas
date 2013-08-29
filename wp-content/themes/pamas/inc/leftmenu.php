<div class="leftnmenu">		
		    <h1 class="Hlstnews">LAST NEWS</h1>
			<ul class="Lnewlst">
			<?php wp_reset_query();
             query_posts('posts_per_page=2&order=DESC') ;
              if(have_posts()): ?>        
             <?php while(have_posts()):the_post(); ?>
				<li>
			     <span class="date"><?php the_time('D d-m-y');?></span>
				 <a href="<?php the_permalink();?>" class="leftmn_title"><span class="LNtitle"><?php the_title();?></span></a>
				 <span class="Ndsc"><?php the_excerpt();?></span>
				 <a href="<?php the_permalink();?>" class="leftmn_img"><img src="<?php bloginfo('template_url'); ?>/images/tai/freadmore.png"/></a>
			  </li>
			 <?php endwhile ; ?>                
              <?php endif; wp_reset_query(); ?>	
			  			  
			</ul>
		
			<img class="imgnlst" src="<?php bloginfo('template_url'); ?>/images/reimg1.png"/>
			<img class="imgnlst" src="<?php bloginfo('template_url'); ?>/images/reimg2.png"/>			
			<img class="Fsubcont" src="<?php bloginfo('template_url'); ?>/images/Fsubscribe.png" alt=""/>
</div><!--END .leftnmenu -->