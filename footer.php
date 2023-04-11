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
        <h2 class="sr-only">Footer</h2>
		<div class="footer-flex">
			<div class="footer-flex-row">
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
