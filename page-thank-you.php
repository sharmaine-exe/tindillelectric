<?php
/**
 * The template for displaying the custom quote confirmation page.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tindillelectric
 */
?>

<?php get_header(); ?>

<main id="primary" class="site-main confirmation">
    
    <!-- Banner -->
    <section class="banner banner-title banner-title--contact text-center">
        <?php while ( have_posts() ) : the_post(); ?>
            <h2 class="heading-primary heading-primary--main">Contact Us</h2>
        <?php endwhile; ?>
    </section>
    <!-- End of Banner -->


    <!-- Intro -->
    <section class="intro">
        <div class="container">
            <h2 class="heading-secondary">
                <span>Thank You for Getting In Touch!</span><br>
                We'll speak soon.
            </h2>
            <p>
                Your request has been received. We will reach out to you within 1 to 2 business days.  In the meantime, why not find out more <a href="<?php echo home_url( '/about' ); ?>" class="link">about us</a>.
            </p>
            <p>
                Alternatively, give us a call at <a href="tel:7808857744" class="link">(780) 885 7744</a>. 
            </p>
            <p>
                <a href="/" class="btn btn-underline">
                    <span>Go Back Home</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 12l14 0"></path>
                        <path d="M13 18l6 -6"></path>
                        <path d="M13 6l6 6"></path>
                    </svg>
                </a>
            </p>
        </div>
    </section>
    <!-- End of Intro -->

</main>

<?php get_footer(); ?>