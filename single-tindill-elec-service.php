<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tindillelectric
 */

get_header();
?>

<main id="primary" class="site-main single-service">

    <!-- Banner -->
    <?php $featured_image_url = get_field('featured_image'); ?>
    <section class="banner banner-single-service" style="background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)), url(<?php echo $featured_image_url; ?>)">
        <div class="container">
            <div class="text-center">
                <h2 class="heading-secondary"><?php the_title(); ?></h2>
                <p><?php the_field('banner_description'); ?></p>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-content">Request A Quote</a>
            </div>
        </div>
    </section>
    <!-- End of Banner -->


    <!-- Slider -->
    <section class="slider">
        <h2 class="sr-only"><?php the_title(); ?> Projects Showcase</h2>	
        <?php the_field('image_slider');?>
    </section>
    <!-- End of Slider -->


    <!-- Service Description -->
    <section class="service-description">
        <h2 class="sr-only"><?php the_title(); ?> Service Description</h2>	
        <div class="container">
            <p><?php the_field('service_description');?></p>
        </div>
    </div>
    <!-- End of Service Description -->


    <!-- Other Services -->
    <div class="other-services">
        <div class="container">
            <h2 class="heading-secondary text-center">Other Services</h2>
            <?php
            $random_services = get_posts( array(
                'post_type' => 'tindill-elec-service',
                'posts_per_page' => 3,
                'orderby' => 'rand',
                'post__not_in' => array( get_the_ID() )
            ) );
            ?>
    
            <div class="grid">
                <?php foreach ( $random_services as $service ) : ?>
                    <div class="other-services--item">
                        <a href="<?php echo get_permalink( $service->ID ); ?>">
                            <div class="post-thumbnail">
                                <?php echo get_the_post_thumbnail( $service->ID, 'medium' ); ?>
                            </div>
                        </a>
    
                        <div class="text-center">
                            <h3><?php echo $service->post_title; ?></h3>
                            <?php $banner_description = get_field('banner_description', $service->ID); ?>
                            <?php if ($banner_description) : ?>
                                <p><?php echo $banner_description; ?></p>
                            <?php endif; ?>
                            <p><a class="btn btn-yellow--outline" href="<?php echo get_permalink( $service->ID ); ?>">Learn More</a></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- End of Other Services -->
    
    </article>
</main>


<aside>
    <?php get_template_part( 'template-parts/content', 'contact-cta' ); ?>
</aside>

<?php
get_footer(); 
?>
