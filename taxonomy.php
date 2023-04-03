<?php
/**
 * The template for displaying categories
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tindillelectric
 */

get_header();
?>


<main id="primary" class="site-main cut-sheet-category">

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

                            /*
                            * Include the Post-Type-specific template for the content.
                            * If you want to override this in a child theme, then include a file
                            * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                            */
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

<?php get_footer();