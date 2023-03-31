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
        $prev_post = get_previous_post(); // Get the previous post object
        $next_post = get_next_post(); // Get the next post object
        ?>

        <div class="previous-post">
            <?php if ($prev_post) : ?>
                <a href="<?php echo get_permalink($prev_post->ID); ?>">
                    <div class="post-thumbnail">
                        <?php echo get_the_post_thumbnail($prev_post->ID, 'medium'); ?>
                    </div>
                </a>
                <div class="post-title">
                        <h3><?php echo $prev_post->post_title; ?></h3>
                        
                </div>
            <?php endif; ?>
        </div>

        <div class="current">
        <?php the_post_thumbnail(); ?>

        <h3><?php the_title(); ?></h3>

        <?php the_field('banner_description');?>

        </div>

        <div class="next-post">
            <?php if ($next_post) : ?>
                <a href="<?php echo get_permalink($next_post->ID); ?>">
                    <div class="post-thumbnail">
                        <?php echo get_the_post_thumbnail($next_post->ID, 'medium'); ?>
                    </div>
                </a>

                <div class="post-title">
                        <h3><?php echo $next_post->post_title; ?></h3>
                    </div>
            <?php endif; ?>
        </div>


	</main><!-- #main -->

<aside>
    <?php get_template_part( 'template-parts/content', 'contact-cta' ); ?>
</aside>

<?php
get_sidebar();
get_footer();
