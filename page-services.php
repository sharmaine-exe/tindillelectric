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
<main id="primary" class="site-main services">
    
    <!-- Banner -->
    <section class="banner banner-title banner-title--services text-center">
        <?php while ( have_posts() ) : the_post(); ?>
            <h3 class="heading-primary heading-primary--main"><?php the_title(); ?></h3>
        <?php endwhile; ?>
    </section>
    <!-- End of Banner -->

    <section style="display:flex;">
        <div class="all-services">
            <div class="s-flex">
            <div class="services-content">
                <h3>Here at Tindill Electric, we meet your electrical needs!</h3>
                <p>Whether you require residential electrical services or commercial, Tindill Electric is here to help you achieve your goal and provide peace of mind. Check out all the electrical services that Tindill Electric has to offer below.</p>
            </div>
            <div class="services-button">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-content">REQUEST A QUOTE</a>
            </div>
            </div>

            <div class="featured-images">
                <div class="all-featured-images">
                    <?php
                        $args = array(
                            'post_type'      => 'tindill-elec-service', 
                            'posts_per_page' => 20,
                            // 'category_name' => 'residential,commercial,power,home,evc,security,repairs'
                            'order' => 'ASC'
                        );
                        $loop = new WP_Query($args);
                        while ( $loop->have_posts() ) {
                            $loop->the_post();
                        
                            get_template_part('template-parts/content', 'services');
                            
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>


<?php

get_footer();

