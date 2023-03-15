<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tindillelectric
 */

get_header();
?>

	<main id="primary" class="site-main">
        <div class="cut-sheet-functions">
            <?php get_search_form(); ?>
            <form class="terms-dropdown">
                <select>
                    <?php 
                        $terms = get_terms('cut-sheet-category');
                        foreach($terms as $term):
                            echo '<option value="' . $term->name . '">' . $term->name . '</option>';
                        endforeach;
                    
                    ?>
                </select>
                <input type="submit" value="submit" class="hidden"/>
            </form>
        </div>
        
        <div class="cut-sheet-grid-container">
            <?php
                // loop
                $args = array(
                    'post_type'      => 'cut-sheets',
                    'posts_per_page' => 25,
                    'order' => 'ASC'
                );
                $loop = new WP_Query($args);

                while ( $loop->have_posts() ) {
                    $loop->the_post();
                
                    get_template_part('template-parts/content', 'cut-sheets');
                    
                }
            ?>
        </div>

	</main><!-- #main -->

<?php

get_footer();

