<?php
/**
 * The template for displaying the custom projects page.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tindillelectric
 */
?>

<?php get_header(); ?>

<main id="primary" class="site-main projects">
    
    <!-- Banner -->
    <section class="banner banner-title banner-title--projects text-center">
        <?php while ( have_posts() ) : the_post(); ?>
            <h3 class="heading-primary heading-primary--main"><?php the_title(); ?></h3>
        <?php endwhile; ?>
    </section>
    <!-- End of Banner -->

    <!-- Gallery -->
    <section class="projects-gallery">
        <div class="container">
            <?php the_content() ?>
        </div>
    </section>
    <!-- End of Gallery -->

</main>

<aside>
    <?php get_template_part( 'template-parts/content', 'contact-cta' ); ?>
</aside>

<?php get_footer(); ?>