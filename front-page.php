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

<main id="primary" class="site-main home">

    <!-- Banner -->
    <section class="banner d-flex">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="container">
                <div class="banner-content">
                    <h1><?php the_field('banner_heading'); ?></h1>
                    <p><?php the_field('banner_tagline'); ?></p>
                    <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-primary">See our Services</a>
                </div>
            </div>
        <?php endwhile; ?>
    </section>
    <!-- End of Banner -->


    <!-- Featured Projects -->
    <section class="featured-projects">
        <h3>Featured Projects</h3>
        <p>
            We have worked on multiple projects for the past year. With almost 15 years of experience, Tindill Electric will meet your electrical needs and make your unique projects come to life. 
        </p>
        
        <div>
            <!-- TODO: custom post type -->
        </div>

        <a href="<?php echo esc_url( home_url( '/projects' ) ); ?>">See All Projects</a>
    </section>
    <!-- End of Featured Projects -->

    
    <!-- Why Tindill Electric -->
    <section class="why-tindill">
        <div class="container">
            <div class="d-flex">
                <div class="wt-left">
                    <h3>Why Tindill Electric?</h3>
                    <p>
                        Tindill Electric gives you peace of mind as we handle each project like it’s our own. As an Albertan electrician for Albertans, the quality of work will always be our focus. 
                    </p>

                    <!-- Item 1 -->
                    <div class="wt-item d-flex">
                        <div class="wt-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shield-check" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 12l2 2l4 -4"></path>
                                <path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3"></path>
                            </svg>
                        </div>
                        
                        <div class="wt-content">
                            <h6>Quality of Work </h6>
                            <p>We assure to complete the job right and exceed expectations.</p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="wt-item d-flex">
                        <div class="wt-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                                <path d="M15 7a2 2 0 0 1 2 2"></path>
                                <path d="M15 3a6 6 0 0 1 6 6"></path>
                            </svg>  
                        </div>
                        <div class="wt-content">
                            <h6>Exceptional Customer Service</h6>
                            <p>Dependability and reliability matter, so we are here to assist with your needs.</p>
                        </div>
                    </div>

                        <!-- Item 3 -->
                    <div class="wt-item d-flex">
                        <div class="wt-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-shield" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h1.341"></path>
                                <path d="M19.682 10.682l-7.682 -7.682l-9 9h2v7a2 2 0 0 0 2 2h5"></path>
                                <path d="M22 16c0 4 -2.5 6 -3.5 6s-3.5 -2 -3.5 -6c1 0 2.5 -.5 3.5 -1.5c1 1 2.5 1.5 3.5 1.5z"></path>
                            </svg>
                        </div>
                        <div class="wt-content">
                            <h6>Safety</h6>
                            <p>Our top priority is safety and ensuring that everything is up to code. </p>
                        </div>
                    </div>

                        <!-- Item 4 -->
                    <div class="wt-item d-flex">
                        <div class="wt-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bulb" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 12h1m8 -9v1m8 8h1m-15.4 -6.4l.7 .7m12.1 -.7l-.7 .7"></path>
                                <path d="M9 16a5 5 0 1 1 6 0a3.5 3.5 0 0 0 -1 3a2 2 0 0 1 -4 0a3.5 3.5 0 0 0 -1 -3"></path>
                            <path d="M9.7 17l4.6 0"></path>
                        </svg>  
                        </div>
                        <div class="wt-content">
                            <h6>Expertise</h6>
                            <p>We have almost 15 years of knowledge to achieve the best version of your project. </p>
                        </div>
                    </div>

                    <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">Learn More</a>
                </div>

                <div class="wt-right">
                    <img src="https://mjayme1.dmitstudent.ca/dmit2032/powerhouse/wp-content/uploads/2023/03/1-e1678223683793.png" alt="A man doing the electrical wirings.">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Why Tindill Electric -->

    
    <!-- Testimonials -->
    <section class="testimonials">
        <div>
            <h4>What Our Clients Say</h4>
            <div id="slider" class="slider">
                <a href="javascript:void(0)" class="slider-control slider-prev">←</a>
                <a href="javascript:void(0)" class="slider-control slider-next">→</a>
                <ul class="slider-slides">
                    
                        <?php
                            $args = array(
                                'post_type'      => 'testimonials',
                                'posts_per_page' => 3,
                            );
                            $loop = new WP_Query($args);
                            while ( $loop->have_posts() ) {
                                $loop->the_post();
                                    get_template_part( 'template-parts/content', 'testimonials' );
                            }
                        ?>
                </ul>
            </div>
        </div>
    </section>
    <!-- End of Testimonials -->

</main>

<?php get_footer(); ?>