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


    <!-- the banner -->
    <div class="banner-container">
        <h1 class="banner-heading"><?php the_title(); ?></h1>
        <!-- 
            add bg as img for the bg overlay:
                Commercial-2.jpg
        -->
        
        <!-- use which applies -->
        <div class="banner-content">
            <!-- <h3 class="banner-subheading"></h3> -->
            <!-- <div class="banner-cta"></div> -->
        </div>
    </div>

	<main id="primary" class="site-main">
        <div class="cut-sheet-functions">
            <?php get_search_form(); ?>
            <form class="terms-dropdown" name="csCatForm">
                <select onchange="selectCat();" name="cs-cat-select" id="csCat">
                    <?php 
                        $terms = get_terms('cut-sheet-category');
                        foreach($terms as $term):
                            echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
                        endforeach;
                    
                    ?>
                </select>
                <input type="submit" value="submit" class="hidden"/>
            </form>

            <script type="text/javascript">
                function selectCat(){
                    var cat = document.getElementById('csCat').value;
                    console.log(cat);
                    console.log("https://tindill.web.dmitcapstone.ca/cut-sheet-category/" + cat);
                }
            </script>
        </div>
        
        <div class="cut-sheet-grid-container cut-sheet-flex">
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

