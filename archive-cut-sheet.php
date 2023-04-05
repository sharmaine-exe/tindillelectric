<?php
/**
 * The template for displaying archive pages - Cut Sheets 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tindillelectric
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

            <!-- Banner -->
            <section class="banner banner-title banner-title--cut-sheets text-center">
                <h3 class="heading-primary heading-primary--main"><?php the_archive_title(); ?></h3>
            </section>
            <!-- End of Banner -->

            <div class="container">
                <div class="cut-sheets--grid-container">
                        <?php
                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();

                                get_template_part( 'template-parts/content', 'cut-sheets' );

                            endwhile;

                            the_posts_navigation();

                        else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif;
                        ?>
                </div>
            </div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
