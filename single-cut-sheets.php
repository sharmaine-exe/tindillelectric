<?php
/**
 * The template for displaying all single posts for cut sheets
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tindillelectric
 */

get_header();
?>

	<main id="primary" class="site-main cut-sheet-single">

		<?php
		while ( have_posts() ) :
			the_post();


			get_template_part( 'template-parts/content-single-cut-sheet', get_post_type() );

            // the_terms( $post->ID, 'cut-sheet-category', 'Category: ', '/ ' );


			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'tindillelectric' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'tindillelectric' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );



		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
