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
    <h1 class="sr-only">Tindill Electric</h1>

    <!-- Banner -->
    <section class="banner banner-home">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="container">
                <div>
                    <h1 class="heading-primary heading-primary--main"><?php the_field('banner_heading'); ?></h1>
                    <p class="heading-primary heading-primary--sub"><?php the_field('banner_tagline'); ?></p>
                    <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-banner">See our Services</a>
                </div>
            </div>
        <?php endwhile; ?>
    </section>
    <!-- End of Banner -->


    <!-- Featured Projects -->
    <section class="featured-projects text-center">
        <div class="container">
            <h3 class="heading-secondary">Featured Projects</h3>
            <p>
                We have worked on multiple projects for the past year. With almost 15 years of experience, Tindill Electric will meet your electrical needs and make your unique projects come to life. 
            </p>
            
            <div>
                <!-- TODO: custom post type -->
            </div>

            <div class="text-center">
                <a href="<?php echo esc_url( home_url( '/projects' ) ); ?>" class="btn btn-content">See All Projects</a>
            </div>
        </div>
    </section>
    <!-- End of Featured Projects -->

    
    <!-- Why Tindill Electric -->
    <section class="why-tindill">
        <div class="container">
            <div class="why-tindill--inner">
                <div class="wt-left">
                    <h3 class="heading-secondary">Why Tindill Electric?</h3>
                    <p>
                        Tindill Electric gives you peace of mind as we handle each project like it’s our own. As an Albertan electrician for Albertans, the quality of work will always be our focus. 
                    </p>

                    <!-- Item 1 -->
                    <div class="wt-item">
                        <div class="wt-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shield-check" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 12l2 2l4 -4"></path>
                                <path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3"></path>
                            </svg>
                        </div>
                        
                        <div class="wt-content">
                            <h4 class="heading-tertiary">Quality of Work </h4>
                            <p>We assure to complete the job right and exceed expectations.</p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="wt-item">
                        <div class="wt-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                                <path d="M15 7a2 2 0 0 1 2 2"></path>
                                <path d="M15 3a6 6 0 0 1 6 6"></path>
                            </svg>  
                        </div>
                        <div class="wt-content">
                            <h4 class="heading-tertiary">Exceptional Customer Service</h4>
                            <p>Dependability and reliability matter, so we are here to assist with your needs.</p>
                        </div>
                    </div>

                        <!-- Item 3 -->
                    <div class="wt-item">
                        <div class="wt-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-shield" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h1.341"></path>
                                <path d="M19.682 10.682l-7.682 -7.682l-9 9h2v7a2 2 0 0 0 2 2h5"></path>
                                <path d="M22 16c0 4 -2.5 6 -3.5 6s-3.5 -2 -3.5 -6c1 0 2.5 -.5 3.5 -1.5c1 1 2.5 1.5 3.5 1.5z"></path>
                            </svg>
                        </div>
                        <div class="wt-content">
                            <h4 class="heading-tertiary">Safety</h4>
                            <p>Our top priority is safety and ensuring that everything is up to code. </p>
                        </div>
                    </div>

                        <!-- Item 4 -->
                    <div class="wt-item">
                        <div class="wt-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bulb" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 12h1m8 -9v1m8 8h1m-15.4 -6.4l.7 .7m12.1 -.7l-.7 .7"></path>
                                <path d="M9 16a5 5 0 1 1 6 0a3.5 3.5 0 0 0 -1 3a2 2 0 0 1 -4 0a3.5 3.5 0 0 0 -1 -3"></path>
                            <path d="M9.7 17l4.6 0"></path>
                        </svg>  
                        </div>
                        <div class="wt-content">
                            <h4 class="heading-tertiary">Expertise</h4>
                            <p>We have almost 15 years of knowledge to achieve the best version of your project. </p>
                        </div>
                    </div>

                    <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn-content">Learn More</a>
                </div>

                <div class="wt-right">
                    <img src="http://tindill.web.dmitcapstone.ca/wp-content/uploads/2023/03/about-img-e1679975845145.jpg" alt="A man doing the electrical wirings.">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Why Tindill Electric -->

    
    <!-- Testimonials -->
    <section class="testimonials text-center">
        <div class="testimonials-inner">
            <div class="container">
                <h3 class="heading-secondary heading-secondary--white">What Our Clients Say</h3>
                <div class="quote-icon">
                    <img src="http://tindill.web.dmitcapstone.ca/wp-content/uploads/2023/03/quote-left.svg" alt="Quote SVG">
                </div>
                <div id="slider" class="slider">
                    <ul class="slider-slides">
                        <?php
                            $args = array(
                                'post_type'      => 'testimonials',
                                'posts_per_page' => 3,
                            );
                            $loop = new WP_Query($args);
                            $count = 1;
                            while ( $loop->have_posts() ) {
                                $loop->the_post();
                                get_template_part( 'template-parts/content', 'testimonials' );
                                $count++;
                            }
                        ?>
                    </ul>

                    <div class="slider-controls">
                        <a href="javascript:void(0)" class="slider-control slider-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M15 6l-6 6l6 6"></path>
                            </svg>
                        </a>

                        <div class="slider-labels">
                            <span id="slideNo"></span>
                        </div>

                        <a href="javascript:void(0)" class="slider-control slider-next">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 6l6 6l-6 6"></path>
                            </svg>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End of Testimonials -->

</main>

<aside>
    <?php get_template_part( 'template-parts/content', 'contact-cta' ); ?>
</aside>

<?php get_footer(); ?>