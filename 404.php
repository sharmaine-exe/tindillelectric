<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tindillelectric
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="banner banner-404 error-404 not-found text-center d-flex">
            <div class="container">
                <header class="page-header">
                    <p class="page-title">404</p>
                    <p class="text-uppercase">Page Not Found</p>
                </header>

                <div class="page-content">
                    <p class="text-center"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'tindillelectric' ); ?></p>

                    <div class="search-form">
                        <?php get_search_form(); ?>
                    </div>
			    </div>
            </div>
			
		</section>
	</main>

    <script>
        const input = document.querySelector('.search-form .search-submit');
        input.classList.add('btn', 'btn-content');
    </script>

<?php
get_footer();
