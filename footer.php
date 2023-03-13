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
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'tindillelectric' ) ); ?>">
				<?php
				    the_custom_logo();
				?>
			</a>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				// printf( esc_html__( 'Theme: %1$s by %2$s.', 'tindillelectric' ), 'tindillelectric', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->

		<?php
			dynamic_sidebar('footer_widgets');
		?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
