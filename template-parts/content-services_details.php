<?php
/**
 * Template part for displaying single page content in single.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tindillelectric
 */

?>
    <div class="container">
        <article <?php post_class();?> id="post-<?php the_ID();?>" >

            <header>
                <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>	
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                <?php the_field('banner_description');?>
                <button><a class="single-request" href="contact">REQUEST A QUOTE</a></button>
            </header>

            <div class="entry-content">	
    
            <?php 
                $image = get_field('featured_image');
                $size = 'large'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                }
            ?>
            <?php 
                $image = get_field('service_image_1');
                $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                }
            ?>
            <?php 
                $image = get_field('service_image_2');
                $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                }
            ?>
            <?php 
                $image = get_field('service_image_3');
                $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                }
            ?>


                <?php the_field('service_description');?>
                
            </div>

        </article>
    </div>