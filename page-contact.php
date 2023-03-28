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

<main id="primary" class="site-main contact">
    
    <!-- Banner -->
    <section class="banner banner-title banner-title--contact text-center">
        <?php while ( have_posts() ) : the_post(); ?>
            <h3 class="heading-primary heading-primary--main"><?php the_title(); ?></h3>
        <?php endwhile; ?>
    </section>
    <!-- End of Banner -->

    <!-- Intro -->
    <section class="intro">
        <div class="container">
            <h3 class="heading-secondary">Tell Us About Your Project</h3>
            <p>
                With almost 15 years of experience, Tindill Electric will meet your electrical needs and make your unique projects come to life.
            </p>
            <p>
                We are delighted to assist you; let us talk about your project.
            </p>

            <?php the_content() ?>
        </div>
    </section>
    <!-- End of Intro -->

    
</main>

<?php get_footer(); ?>