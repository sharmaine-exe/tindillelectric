<?php
/**
 * The template for displaying search results pages but only display cut sheets CPT
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package tindillelectric
 */

get_header();
?>
<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package tindillelectric
 */

get_header();
?>

<main id="primary" class="site-main cut-sheets-search">
    <!-- Banner -->
    <section class="banner banner-title banner-title--cut-sheets text-center">
        <div class="cut-sheets-search--keyword">
            <a class="btn btn-underline" href="<?php echo get_site_url() . "/cut-sheet/"; ?>" style="border-radius: 3px;">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M5 12l14 0"></path>
                    <path d="M5 12l6 6"></path>
                    <path d="M5 12l6 -6"></path>
                </svg>
                <span>Back to Cut Sheets</span>
            </a>

            <h3 class="heading-primary heading-primary--main">
                <?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Results for "%s"', 'tindillelectric' ), '<span>' . get_search_query() . '</span>' );
					?>
            </h3>
        </div>
    </section>
    <!-- End of Banner -->

    <div class="container">
        <div class="cut-sheet-functions">
            <!-- Search Form -->
            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <label>
                    <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
                    <input type="search" class="search-field" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                    <input type="hidden" name="post_type" value="cut-sheets" />
                </label>
                <input type="submit" class="btn btn-content search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
            </form>
        </div>
        <!-- End of Search Form -->


		<?php if ( have_posts() ) : ?>
        <div class="cut-sheets--grid-container">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'cut-sheets' );

			endwhile;

			the_posts_navigation();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
		?>
        </div>
    </div>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
