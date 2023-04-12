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

<main id="primary" class="site-main error-404">

    <section class="banner banner-404 not-found text-center d-flex">
        <h2 class="sr-only">404 Page Not Found</h2>
        <div class="container">
            <header class="page-header">
                <p class="page-title">404</p>
                <p class="text-uppercase">Page Not Found</p>
            </header>

            <div class="page-content">
                <p class="text-center"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'tindillelectric' ); ?></p>

                <div class="error-404--nav">
                    <a href="/" class="btn btn-content">Go back home</a>
                    <a href="tel:7808857744" class="btn btn-white--outline">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 192.379 192.379">
                                <path id="Icon_material-phone-in-talk" data-name="Icon material-phone-in-talk" d="M186.191,138.1A121.416,121.416,0,0,1,148.036,132a10.908,10.908,0,0,0-10.9,2.565l-23.513,23.513A160.8,160.8,0,0,1,43.19,87.65L66.7,64.031a10.26,10.26,0,0,0,2.672-10.688,121.416,121.416,0,0,1-6.092-38.155A10.719,10.719,0,0,0,52.595,4.5H15.188A10.719,10.719,0,0,0,4.5,15.188,181.675,181.675,0,0,0,186.191,196.879a10.719,10.719,0,0,0,10.688-10.688V148.784A10.719,10.719,0,0,0,186.191,138.1ZM175.5,100.689h21.375A96.2,96.2,0,0,0,100.689,4.5V25.875A74.759,74.759,0,0,1,175.5,100.689Zm-42.751,0h21.375a53.458,53.458,0,0,0-53.439-53.439V68.626A32.02,32.02,0,0,1,132.753,100.689Z" transform="translate(-4.5 -4.5)" fill="#ffbd59"/>
                            </svg>
                            <span>Call Us</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
    </section>
</main>

<?php
get_footer();
