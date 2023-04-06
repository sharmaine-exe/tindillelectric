<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tindillelectric
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'tindillelectric' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-class">
            <div class="site-branding">
                <?php if ( ! has_custom_logo() ) { ?>
                    <?php if ( is_front_page() && is_home() ) : ?>
                        <!-- if your page is set to front-page or blog display the site title (appearance > customize) -->
                        <h1>
                            <a class="logo" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                        </h1>
                        
                    <?php else : ?>
                        <!-- if your page is not set to front-page or blog display the site title (appearance > customize) -->
                        <h1>
                            <a class="logo" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                        </h1>
                <?php endif; ?>
                <!-- otherwise display the custom logo. -->
                <?php } else {
                    the_custom_logo();
                }?>
            </div><!-- .site-branding -->

            <div class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="42.541" height="24.5" viewBox="0 0 42.541 24.5">
                    <g id="Group_234" data-name="Group 234" transform="translate(0 1.75)">
                        <line id="Line_27" data-name="Line 27" x2="28.121" transform="translate(14.421)" fill="none" stroke="#2f5b6b" stroke-width="3.5"/>
                        <line id="Line_28" data-name="Line 28" x2="42.541" transform="translate(0 10)" fill="none" stroke="#2f5b6b" stroke-width="3.5"/>
                        <line id="Line_29" data-name="Line 29" x2="33.168" transform="translate(9.374 21)" fill="none" stroke="#2f5b6b" stroke-width="3.5"/>
                    </g>
                </svg>
            </div><!-- .menu-icon -->

            <nav>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>

                <a href="tel:7809984522" class="btn btn-yellow--outline">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 192.379 192.379">
                            <path id="Icon_material-phone-in-talk" data-name="Icon material-phone-in-talk" d="M186.191,138.1A121.416,121.416,0,0,1,148.036,132a10.908,10.908,0,0,0-10.9,2.565l-23.513,23.513A160.8,160.8,0,0,1,43.19,87.65L66.7,64.031a10.26,10.26,0,0,0,2.672-10.688,121.416,121.416,0,0,1-6.092-38.155A10.719,10.719,0,0,0,52.595,4.5H15.188A10.719,10.719,0,0,0,4.5,15.188,181.675,181.675,0,0,0,186.191,196.879a10.719,10.719,0,0,0,10.688-10.688V148.784A10.719,10.719,0,0,0,186.191,138.1ZM175.5,100.689h21.375A96.2,96.2,0,0,0,100.689,4.5V25.875A74.759,74.759,0,0,1,175.5,100.689Zm-42.751,0h21.375a53.458,53.458,0,0,0-53.439-53.439V68.626A32.02,32.02,0,0,1,132.753,100.689Z" transform="translate(-4.5 -4.5)" fill="#ffbd59"/>
                        </svg>
                        <span>(780) 998 4522</span>
                    </div>
                </a>
            </nav><!-- nav -->
        </div><!-- .header-class -->

    </header>
