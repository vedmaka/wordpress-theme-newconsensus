<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="subscribe-nc">
		<span class="nc-footer-title">Stay in touch</span>
		<span class="nc-footer-text">Sign up with your email to receive news & updates</span>
		<div class="form">
			<!--<input type="email" placeholder="Email Address" />
			<input type="submit" value="sign-up" />-->
			<?php es_subbox($namefield = "NO", $desc = "", $group = "Public"); ?>
		</div>
	</footer>

	<div id="widget-area" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- .widget-area -->

	<a href="https://secure.actblue.com/donate/newconsensus" target="_blank" class="site-donation-button" rel="nofollow">
		<img alt="Make a donation" src="https://s3.amazonaws.com/actblue-img/charities-badge-300px.png" />
	</a>

	<a href="mailto:info@newconsensus.com" class="footer-mail-link">info@newconsensus.com</a>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfifteen' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
