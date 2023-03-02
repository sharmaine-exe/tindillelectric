<?php 
    /* 
    * the main template file 
    * most generic template file in a WP theme
    * one of two required files for a theme (other: style.css)
    * used to display a page when nothing more specific matches a query.
    * e.g. it puts together the home page when home.php file exists.
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    * @package tindillelectric
    */

get_header(); 

?>

<main>

    <div>
        <?php wp_tag_cloud(); ?>
    </div>
</main>

<div class="flex-container"> 
    <div>
        <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content', 'home' );
                endwhile;
            endif;
        ?>
    </div>

</div>

<?php get_footer(); ?>