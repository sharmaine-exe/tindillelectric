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

<main id="primary" class="site-main login">
    
    <!-- Banner -->
    <section class="banner banner-title banner-title--cut-sheets text-center">
        <?php while ( have_posts() ) : the_post(); ?>
            <h2 class="heading-primary heading-primary--main"><?php the_title(); ?></h2>
        <?php endwhile; ?>
    </section>
    <!-- End of Banner -->

    
    <!-- Intro -->
    <section>
        <div class="container">
            <h2 class="sr-only">Login Form</h2>

            <div class="form">
                <div>
                    <?php
                        if ( !is_user_logged_in() || !current_user_can( 'administrator' ) ) {  ?>
                                <h3 class="heading-secondary">Welcome Back!</h3>
                                <p>Hello there! Please log in to view the cut sheets.</p>
                            <?php
                        } else { ?>
                            <h3 class="heading-secondary">Hi, Admin! <br> You are already logged in.</h3>
                            <div>
                                <a href="/cut-sheet" class="btn btn-content">View Cut Sheets</a>
                                <a href="/wp-admin" class="btn btn-yellow--outline">Dashboard</a>
                            </div>
                        <?php }
                    ?>
                    <?php echo do_shortcode('[profilepress-login id="1"]'); ?>
                </div>

                <div>
                    <img src="http://tindill.web.dmitcapstone.ca/wp-content/uploads/2023/03/residential-1-1024x768.jpg" alt="Newly-renovated Kitchen">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Intro -->

</main>

<aside>
    <?php get_template_part( 'template-parts/content', 'contact-cta' ); ?>
</aside>

<?php get_footer(); ?>