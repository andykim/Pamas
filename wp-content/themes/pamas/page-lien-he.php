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
					<div class="get-in-touch">
			  	      <img src="<?php bloginfo('template_url');?>/images/thanh/get-in-touch.jpg" alt="Get in Touch" class="get_touch"/>
                      <p><img src="<?php bloginfo('template_url');?>/images/thanh/top-icon.png"/><span>Find Us!</span></p>
					</div><!-- .entry-header -->

					<div class="content-primary">     
					
					
					<div class="lienheform">
						 <?php wp_reset_query();
             query_posts('p=47') ;
              if(have_posts()): ?>
               
               <?php while(have_posts()):the_post(); ?>
                  <?php the_content(); ?>
                <?php endwhile ; ?>                
<?php endif; wp_reset_query(); ?>  								
					</div>
					
					
                        <div class="google-map">
                            <iframe width="95%" height="280" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" align="right" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=vi&amp;geocode=&amp;q=63+S%C6%B0%C6%A1ng+Nguy%E1%BB%87t+Anh,+B%E1%BA%BFn+Th%C3%A0nh,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam&amp;aq=0&amp;oq=63&amp;sll=37.0625,-95.677068&amp;sspn=54.357317,79.013672&amp;ie=UTF8&amp;hq=63+S%C6%B0%C6%A1ng+Nguy%E1%BB%87t+Anh,&amp;hnear=B%E1%BA%BFn+Th%C3%A0nh,+Qu%E1%BA%ADn+1,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam&amp;ll=10.772761,106.691709&amp;spn=0.006295,0.006501&amp;t=m&amp;output=embed"></iframe>
                        </div>
					</div><!-- end .content-primary -->
                    <div class="below-content">
                        <img src="<?php echo bloginfo('template_directory').'/images/thanh/bot-icon.png';?>"/>
                        <p class="border_bot"></p>
                    </div>
					
					<footer class="footer_contacts">				
					<h2> ĐỊA CHỈ CÁC CHI NHÁNH</h2>                
                    <div class="wrapper">
                        <span class="title">Tại Hà Nội</span>
                        <ul>
                        	<li>57 Thái Hòa, Q.Đống Đa</li>
                            <li> ĐT: 04 - 3537 9980</li>
                            <li> 01 Hòa Mã, Q. Hai Bà Trưng</li>
                            <li> ĐT: 04 - 3976 1423</li>
                            <li> 37 Thợ Nhuộm, Q. Hoàng Kiếm</li>
                            <li> ĐT: 04 - 3936 1350</li>
                        </ul>
                    </div>
                    <div class="wrapper">
                        <span class="title">Tại TPHCM</span>
                        <ul>
                        	<li>64 Đường 3 tháng 2, Q.10</li>
                            <li> ĐT: 08 - 3979 7460</li>
                            <li> 105 Nguyễn Trãi, Q.1</li>
                            <li> ĐT: 08 - 3925 4475</li>
                            <li> 239 Hai Bà Trưng, Q.3</li>
                            <li> ĐT: 08 - 3820 0050</li>
                            <li> 63 Sương Nguyệt Ánh, Q.1</li>
                            <li> ĐT: 08 - 3925 2344</li>
                        </ul>
                        <img src="<?php echo bloginfo('template_directory').'/images/thanh/icon.png';?>" />
                    </div>
                    <div class="wrapper">
                        <span class="title">Tại Đà Nẵng</span>
                        <ul>
                        	<li> 188 Hoàng Diệu, Q.Hải Châu</li>
                            <li> ĐT: 0511 - 386 8900</li>                         
                        </ul>
                    </div>
                    <div class="wrapper">
                        <span class="title">Tại Vũng Tàu</span>
                        <ul>
                        	<li> 188 Trương Công Định, Q.3</li>
                            <li> ĐT: 064 - 355 4437</li>
                        </ul>
                    </div>
					</footer><!-- .entry-meta -->				

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>