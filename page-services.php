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

    <section>
        <h2>Services</h2>
        <h3>HERE AT TINDILL ELECTRIC, WE MEET YOUR ELECTRICAL NEEDS</h3>
        <p>Whether you require residential electrical services or commercial, Tindill Electric is here to help you achieve your goal and provide peace of mind. Check out all the electrical services that Tindill Electric has to offer below.</p>

        <div class="featured-images">
            <?php
                $args = array(
                    'post_type'      => 'tindill-elec-service',
                    'posts_per_page' => 20,
                );
                $loop = new WP_Query($args);
                while ( $loop->have_posts() ) {
                    $loop->the_post();
                
                    get_template_part('template-parts/content', 'services');
                    
                }
            ?>
        </div>

    </section>


<?php

get_footer();

