<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		
		<div class="dichvu">
			<div class="header"> 
			  <h2><a href="<?php echo get_page_link(10); ?>">DỊCH VỤ</a></h2>
			  <span class="dnav">
			   <img class="next" src="<?php bloginfo('template_url'); ?>/images/tai/next.png"/>
			   <img class="prev" src="<?php bloginfo('template_url'); ?>/images/tai/prev.png"/>
			  </span>
			</div>
			
			<div class="Dcont">
			   <ul>
               
               <?php 
			   
wp_reset_query();
			 query_posts('cat=18 &posts_per_page=4') ;
			  if(have_posts()):
			   ?>

			   			   			   			   	
                <?php while(have_posts()):the_post();   
				$thumb = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>
                    <li>
							<a href="<?php the_permalink();?>"><img class="fea" src="<?php echo $thumb; ?>" /> </a>           	
                           <span class="title"><a href="<?php the_permalink();?>">DỊCH VỤ 1</a></span>                      
							<span class="desc"><a href="<?php the_permalink();?>"><?php the_excerpt(); ?></a></span>
                   <a href="<?php the_permalink();?>"><img class="readmore" src="<?php bloginfo('template_url'); ?>/images/tai/readmore.png"></a>
                    </li>
                <?php endwhile ; ?>                
				<?php endif; wp_reset_query(); ?>               
				</ul>			
			</div>
		</div>
		<div class="gioithieu">
		 <ul>
		   <li>
		      <span class="header2"><h2><a href="<?php echo get_page_link(8);?>">CHUYÊN GIA QUỐC TẾ</a></h2></span>
			  <span class="ffeature">			     
				 <img class="fnext" src="<?php bloginfo('template_url'); ?>/images/tai/fnext.png"/>
				 <img class="fprev" src="<?php bloginfo('template_url'); ?>/images/tai/fprev.png" />
			     <img class="ffeaa" src="<?php bloginfo('template_url'); ?>/images/professional1.png" />				 
			  </span>
			  <span class="fdesc"> Lorem Ipsum is simply dummy text of the printing and typesetting industry... </span>
			  <img class="readmore" src="<?php bloginfo('template_url'); ?>/images/tai/freadmore.png" />
		   </li>		   
		   <li>
			  <span class="header2"><h2><a href="<?php echo get_page_link(34);?>">CÔNG NGHỆ MỚI</a></h2>
				<img class="tnext" src="<?php bloginfo('template_url'); ?>/images/tai/next.png" />
				<img class="tprev" src="<?php bloginfo('template_url'); ?>/images/tai/prev.png" /> 
			  </span>
			  
				<h3>CÔNG NGHỆ ULTHERA 1</h3>
				<span class="tdesc">Sắc đẹp có vai trò quan trọng, đặc biệt là đối với phái nữ. Tuy nhiên, nhiều khi chúng ta vẫn thường tự hỏi vì sao ở cùng một độ tuổi...>></span>				
				<img class="break" src="<?php bloginfo('template_url'); ?>/images/tai/break.png" />				
				<h3 class="ttech">CÔNG NGHỆ ULTHERA 2</h3>
				<span class="tdesc">Sắc đẹp có vai trò quan trọng, đặc biệt là đối với phái nữ. Tuy nhiên, nhiều khi chúng ta vẫn thường tự hỏi vì sao ở cùng một độ tuổi...>></span>
			  
		   </li>
		   <li>
			  <span class="header2"><h2><a href="<?php echo get_page_link(12); ?>">SẢN PHẨM</a></h2>
			    <img class="tnext" src="<?php bloginfo('template_url'); ?>/images/tai/next.png" />
				<img class="tprev" src="<?php bloginfo('template_url'); ?>/images/tai/prev.png" /> 
			  </span>		
			   <img class="pdetail" src="<?php bloginfo('template_url'); ?>/images/tproduct.png" />
			   <h3 class="pname">SẢN PHẨM 1</h3>
			   <span class="pdesc">Sắc đẹp có vai trò quan trọng, đặc biệt là đối với phái nữ. Tuy nhiên, nhiều khi chúng ta vẫn thường tự hỏi vì sao thường...>></span>			  
			   <img class="preadmore" src="<?php bloginfo('template_url'); ?>/images/tai/freadmore.png" />
		   </li>
		 </ul>		
		</div>
		<div class="neccessinfo">
			<div class="news">
				<span class="header2"><h2><a href="<?php echo get_page_link(14); ?>">TIN TỨC</a></h2></span>
				<ul class="newnav">
					<li class="active"><a href="#">ƯU ĐÃI</a><span class="triangle"></span></li>
					<li><a href="#">SỰ KIỆN</a><span class="triangle"></span></li>
					<li><a href="#">GÓC TƯ VẤN</a><span class="triangle"></span></li>					
				</ul>
			 <div class="newscont">
				<p class="demonew">
				    <img src="<?php bloginfo('template_url'); ?>/images/newfea.png" />
					<span class="title">ƯU ĐÃI NGÀY 8/3 CHO CHỊ EM PHỤ NỮ</span>
					<span class="descs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen scrambled it to make book...</span>
					<img class="preadmore" src="<?php bloginfo('template_url'); ?>/images/tai/freadmore.png" />
				</p>
				<p class="newlst">
					<img class="preadmore" src="<?php bloginfo('template_url'); ?>/images/new1.png" />
					<span class="title">Ưu đãi đặc biệt cho các dịch vụ khác tai Pamas </span>
					<span class="descs">Lorem Ipsum is simply dummy text of the printing and typesetting...>></span>
				</p>
				<p class="newlst">
					<img class="preadmore" src="<?php bloginfo('template_url'); ?>/images/new1.png" />
					<span class="title">Ưu đãi đặc biệt cho các dịch vụ khác tai Pamas </span>
					<span class="descs">Lorem Ipsum is simply dummy text of the printing and typesetting...>></span>
				</p>
				<p class="newlst">
					<img class="preadmore" src="<?php bloginfo('template_url'); ?>/images/new1.png" />
					<span class="title">Ưu đãi đặc biệt cho các dịch vụ khác tai Pamas </span>
					<span class="descs">Lorem Ipsum is simply dummy text of the printing and typesetting...>></span>
				</p>
			   </div>
			</div>

			<div class="Rtreatment">
				<span class="header2 header23"><h2>KẾT QUẢ ĐIỀU TRỊ</h2></span>
				<ul class="newnav newnav2">
						<li class="active"><a href="#">HÌNH ẢNH THỰC TẾ</a><span class="triangle"></span></li>
						<li><a href="#">Ý KIẾN KHÁCH HÀNG</a><span class="triangle"></span></li>				
				</ul>
				<img class="pdetail" src="<?php bloginfo('template_url'); ?>/images/treamresult.png" />
		    </div>
		</div>
		
		<!--
		<?php //if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php// while ( have_posts() ) : the_post(); ?>
				<?php// get_template_part( 'content', get_post_format() ); ?>
			<?php// endwhile; ?>

			<?php// twentythirteen_paging_nav(); ?>

		<?php// else : ?>
			<?php// get_template_part( 'content', 'none' ); ?>
		<?php// endif; ?> -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>