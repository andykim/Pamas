<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php // get_sidebar( 'main' ); ?>

			<div class="site-info">
			    <p class="Hcontact">
				 <span class="Htitle">Hotline:</span> <span class="Hphone"> 1900 - 545453</span> <br/>
				 <span class="Ncontact">© Pamas Spa & Clinic</span>				 
				</p>
				<p class="Nsymbol">
				 <span class="Ftitle">Phòng mạch Pamas</span> <br/>
				 <img class="Simg" src="<?php bloginfo('template_url'); ?>/images/tai/Fsymbol.png" />
				</p>
				<p class="Bsymbol">
				 <span class="Ftitle brft">Brochure Pamas</span> <br/>
				 <img class="Simg" src="<?php bloginfo('template_url'); ?>/images/tai/Bsymbol.png" />
				</p>
				<p class="Fsymbol">
				 <span class="Ftitle">Follow us on</span> <br/>
				 <img class="Fkimg" src="<?php bloginfo('template_url'); ?>/images/tai/Fasymbol.png" />
				 <img class="Yerimg" src="<?php bloginfo('template_url'); ?>/images/tai/Yesymbol.png" />
				</p>
				<p class="register">
					<span class="rtitle Ftitle">ĐĂNG KÝ NHẬN NEWSLETTER</span> <br/>
					<input type="text" placeholder="Nhập email của bạn vào đây..." />
				</p>
				<?php // do_action( 'twentythirteen_credits' ); ?>
				<!--<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?></a> -->
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>