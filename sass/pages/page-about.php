<?php
/**
 * The template for displaying the custom about page.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tindillelectric
 */
?>

<?php get_header(); ?>

<main id="primary" class="site-main about">
    
    <!-- Banner -->
    <section class="banner banner-title banner-title--about text-center">
        <?php while ( have_posts() ) : the_post(); ?>
            <h3 class="heading-primary heading-primary--main"><?php the_title(); ?></h3>
        <?php endwhile; ?>
    </section>
    <!-- End of Banner -->

    <!-- Intro -->
    <section class="intro text-center">
        <div class="container">
            <h3 class="heading-secondary">Tindill Electric for Albertans</h3>
            <p>
                Here at Tindill Electric, we prioritize the client's safety and everyone else's. By being Edmonton's local electrician, we guarantee that excellent job results from careful planning with safety always in mind.
            </p>
            <p>
                Tindill Electric gives you peace of mind as we handle each project like it's our own. As an Albertan electrician for Albertans, the quality of work will always be our focus. 
            </p>
        </div>
    </section>
    <!-- End of Intro -->


    <!-- Story -->
    <section class="why-tindill">
        <div class="container">
            <div class="why-tindill--inner">
                <div class="wt-left">
                    <h3 class="heading-secondary">About Tindill Electric</h3>
                    <p>
                        Founded on February 2022, Tindill Electric is an electrical solutions company in Edmonton, Alberta, that focuses on delivering high-quality work to meet our client’s residential or commercial needs. We take pride in providing personalized treatment for each client to ensure we breathe their visions into life. 
                    </p>
                    <p>
                        We support Edmonton and surrounding areas. Tindill Electric primarily supports Edmonton but is also available to help you throughout Western Canada. 
                    </p>
                </div>

                <div class="wt-right">
                    <img src="http://tindill.web.dmitcapstone.ca/wp-content/uploads/2023/03/about-img-e1679975845145.jpg" alt="A man working on electrical wiring.">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Story -->


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
                                'post_type'      => 'testimonials'
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