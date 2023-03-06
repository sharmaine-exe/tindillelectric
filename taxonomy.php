<?php
/**
 * The template for displaying categories
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tindillelectric
 */

get_header();
?>

<main id="primary" class="site-main">

<?php
    $args = array(
        'post_type'      => 'cut-sheets'
    );
    $loop = new WP_Query($args);
    while ( $loop->have_posts() ) {
        $loop->the_post();
    
        get_template_part('template-parts/content', 'cut-sheets');
        
    }
?>

</main>

<?php get_footer();