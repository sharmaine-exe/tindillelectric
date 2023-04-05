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
            <?php the_field('image_slider');?>
            <div class="p-services-flex">
                <div class="paragraph-services-flex">
                    <p><?php the_field('service_description');?></p>
                </div>
            </div>
        </div>

