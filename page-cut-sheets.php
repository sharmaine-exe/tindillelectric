<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tindillelectric
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
            $args = array(
                'post_type'      => 'cut-sheets',
                'posts_per_page' => 25,
                'order' => 'ASC'
            );
            $loop = new WP_Query($args);
            while ( $loop->have_posts() ) {
                $loop->the_post();
            
                get_template_part('template-parts/content', 'cut-sheets');
                
            }
		?>

	</main><!-- #main -->

<?php

get_footer();

