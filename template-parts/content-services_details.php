<?php
/**
 * Template part for displaying single page content in single.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tindillelectric
 */

?>
<main id="primary" class="site-main single-service">
    <article <?php post_class();?> id="post-<?php the_ID();?>" >

        <!-- Banner -->
        <section class="banner banner-single-service" style="background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)), url(<?php echo get_the_post_thumbnail_url()?>)">
            <div class="container">
                <div class="text-center">
                    <h3 class="heading-secondary"><?php the_title(); ?></h3>
                    <p><?php the_field('banner_description'); ?></p>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-content">Request A Quote</a>
                </div>
            </div>
        </section>
        <!-- End of Banner -->

        <div class="entry-content">	

        <div class="slider">
            <?php 
            $images = array(
                get_field('featured_image'),
                get_field('service_image_1'),
                get_field('service_image_2'),
                get_field('service_image_3')
            );
            foreach( $images as $image ) {
                if( $image ) {
                    echo '<div>' . wp_get_attachment_image( $image, 'large' ) . '</div>';
                }
            }
            ?>
        </div>

        <script>
            jQuery(document).ready(function($) {
                $('.slider').slick({
                    dots: true,
                    responsive: [
                        {
                            breakpoint: 767,
                            settings: {
                                dots: false
                            }
                        }
                    ]
                });
            });
        </script>



            <?php the_field('service_description');?>
            
        </div>

    </article>
</main>