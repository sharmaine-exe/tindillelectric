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

<main id="primary" class="site-main">
    <!-- Banner -->
    <section class="banner banner-title banner-title--cut-sheets text-center">
        <h3 class="heading-primary heading-primary--main"><?php the_title(); ?></h3>
    </section>
    <!-- End of Banner -->

        <div class="cut-sheet-functions">
            <!-- search form -->
            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <label>
                    <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
                    <input type="search" class="search-field" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                    <input type="hidden" name="post_type" value="cut-sheets" />
                </label>
                <input type="submit" class="search-submit btn btn-content" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
            </form>
            <div class="wp-block-button" id="<?php echo get_site_url() . "/cut-sheets/"; ?>">
                <a class="wp-block-button__link wp-element-button" href="<?php echo get_site_url() . "/cut-sheets/"; ?>" style="border-radius: 3px;">Back to Cut Sheets</a>
            </div>
        </div>

		<?php if ( have_posts() ) : ?>
        <div class="cut-sheet-grid-container cut-sheet-flex">

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'tindillelectric' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

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

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
