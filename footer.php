<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tindillelectric
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-flex">
			<div class="footer-flex-row">
<!-- 
				<div class="site-info">
					<a href="<?php //echo esc_url( __( 'http://tindill.web.dmitcapstone.ca/', 'tindillelectric' ) ); ?>">
						<img src="http://tindill.web.dmitcapstone.ca/wp-content/uploads/2023/03/logo-white.png" alt="footer-logo">
					</a>
				</div>.site-info -->

				<?php
					dynamic_sidebar('footer_widgets');
				?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
