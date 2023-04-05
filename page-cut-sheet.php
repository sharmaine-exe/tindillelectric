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
            <!-- search form -->
            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <label>
                    <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
                    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search for ...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                    <input type="hidden" name="post_type" value="cut-sheets" />
                </label>
                <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
            </form>
        </div>
        
        <div class="cut-sheet-grid-container cut-sheet-flex">
            <?php
                // $paged for pagination
                $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                // loop
                $args = array(
                    'post_type'      => 'cut-sheets',
                    'posts_per_page' => 20,
                    'order' => 'ASC',
                    'paged' => $paged,
                );
                $loop = new WP_Query($args);
                if(have_posts()){
                    while ( $loop->have_posts() ) {
                        $loop->the_post();
                    
                        get_template_part('template-parts/content', 'cut-sheets');
                        
                    }
                } else{
                    get_template_part('template-parts/content', 'none');
                }
            ?>
            <div class="pagination">
                <?php 
                    $total_pages = $loop->max_num_pages;
                    // echo "pages " . $total_pages . " <br>";
                    $big = 999999999;
                    if ($total_pages > 1){

                        $current_page = max(1, get_query_var('paged'));
                
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => $current_page,
                            'total' => $total_pages
                        ) );
                    }
                ?>    

            </div> <!-- end of pagination -->
        </div>

	</main><!-- #main -->


<?php

get_footer();

