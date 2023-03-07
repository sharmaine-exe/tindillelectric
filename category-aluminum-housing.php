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

    <?php if ( have_posts() ) : ?>

        <header class="page-header">
            <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
            ?>
        </header><!-- .page-header -->

        <?php
        /* Start the Loop */
        $args = array(
            'post_type'      => 'cut-sheets',
            'posts_per_page' => 25,
            'order' => 'ASC'
        );
        $loop = new WP_Query($args);
        while ( $loop->have_posts() ) {
            $loop->the_post();

            get_template_part( 'template-parts/content', 'cut-sheets' );

    }

        the_posts_navigation();

    else :

        get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>

</main><!-- #main -->

<?php get_footer();