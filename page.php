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
    <!-- the banner -->
    <div class="banner-container">
        <h1 class="banner-heading"><?php the_title(); ?></h1>
        <!-- 
            add bg as img for the bg overlay
                
        -->
        
        <!-- use which applies -->
        <div class="banner-content">
            <!-- <h3 class="banner-subheading"></h3> -->
            <!-- <div class="banner-cta"></div> -->
        </div>
    </div>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
