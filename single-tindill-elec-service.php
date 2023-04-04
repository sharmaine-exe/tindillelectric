<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tindillelectric
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content-services_details', get_post_type());

    endwhile; // End of the loop.
    ?>

    <h2>Other Services</h2>

    <?php
    $random_services = get_posts( array(
        'post_type' => 'tindill-elec-service',
        'posts_per_page' => 3,
        'orderby' => 'rand',
        'post__not_in' => array( get_the_ID() )
    ) );
    ?>

    <div class="random-services">
            <?php foreach ( $random_services as $service ) : ?>
                <div class="flex-single-service">
                    <a href="<?php echo get_permalink( $service->ID ); ?>">
                        <div class="post-thumbnail">
                            <?php echo get_the_post_thumbnail( $service->ID, 'medium' ); ?>
                        </div>
                    </a>
                    <div class="post-title">
                            <h3><?php echo $service->post_title; ?></h3>
                            <p><?php the_field('banner_description');?></p>
                            <p><a class="btn btn-content" href="<?php echo get_permalink( $service->ID ); ?>">Learn More</a></p>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>

    <aside>
        <?php get_template_part( 'template-parts/content', 'contact-cta' ); ?>
    </aside>
    </article>
</main>

    <?php
    get_sidebar();
    get_footer(); 
