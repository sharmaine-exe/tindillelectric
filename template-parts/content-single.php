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
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                <?php get_the_date(); ?>
            </header>

            <div class="entry-content">
                <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>		
                <?php the_content(); ?>
            </div>

        </article>
    </div>