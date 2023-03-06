<?php
/**
 * The template for displaying the custom home page.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tindillelectric
 */
?>


<?php get_header(); ?>
    <main id="primary" class="site-main">
        <div class="banner d-flex">
            <?php while ( have_posts() ) : the_post(); ?>

                <div class="container">
                    <div class="banner-content">
                        <h1><?php the_field('banner_heading'); ?></h1>
                        <p><?php the_field('banner_tagline'); ?></p>
                        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-primary">See our Services</a>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>
    </main>



<?php get_footer(); ?>