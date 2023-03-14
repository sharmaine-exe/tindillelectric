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

    <!-- Intro -->
    <section class="intro">
        <div class="container">
            <h3>Tindill Electric for Albertans</h3>
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
    <section class="story">
        <div class="container">
            <div>
                <div>
                    <h3>Why Tindill Electric?</h3>
                    <p>
                        Founded on February 2022, Tindill Electric is an electrical solutions company in Edmonton, Alberta, that focuses on delivering high-quality work to meet our client’s residential or commercial needs. We take pride in providing personalized treatment for each client to ensure we breathe their visions into life. 
                    </p>
                    <p>
                        We support Edmonton and surrounding areas. Tindill Electric primarily supports Edmonton but is also available to help you throughout Western Canada. 
                    </p>
                </div>

                <div>
                    <img src="http://tindill.web.dmitcapstone.ca/wp-content/uploads/2023/03/about-img.jpg" alt="A man working on electrical wiring.">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Story -->


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
                                'post_type'      => 'testimonials'
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

<aside class="contact-cta">
    <?php dynamic_sidebar('contact_cta'); ?>
</aside>

<?php get_footer(); ?>