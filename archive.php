<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tindillelectric
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php 
            global $wp_query;
            $wp_query->set_404();
            status_header( 404 );
            get_template_part( 404 );
		?>

	</main><!-- #main -->

<?php get_footer(); ?>
