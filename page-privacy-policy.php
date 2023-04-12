<?php
/**
 * The template for displaying the custom privacy policy page.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tindillelectric
 */
?>

<?php get_header(); ?>

<main id="primary" class="site-main privacy-policy">
    
    <section>
        <div class="container">
            <h2 class="heading-secondary"><?php echo the_title() ?></h2>
            <p>We are Tindill Electric. Our website address is https://tindillelectric.com/.</p>

            <section>
                <h3 class="heading-tertiary">Cookies</h3>
                <p>
                    If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.
                </p>
                <p>
                    If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.
                </p>
                <p>
                    When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select "Remember Me", your login will persist for two weeks. If you log out of your account, the login cookies will be removed.
                </p>
                <p>
                    If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.
                </p>
            </section>

            <section>
                <h3 class="heading-tertiary">Embedded content from other websites</h3>
                <p>
                    Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.
                </p>
                <p>
                    These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.
                </p>
            </section>

            <section>
                <h3 class="heading-tertiary">Who we share your data with</h3>
                <p>
                    If you request a password reset, your IP address will be included in the reset email.
                </p>
            </section>

            <section>
                <h3 class="heading-tertiary">How long we retain your data</h3>
                <p>
                    If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.
                </p>
                <p>
                    For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.
                </p>
            </section>

            <section>
                <h3 class="heading-tertiary">What rights you have over your data</h3>
                <p>
                    If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.
                </p>
            </section>
        </div>
    </section>

</main>

<aside>
    <?php get_template_part( 'template-parts/content', 'contact-cta' ); ?>
</aside>

<?php get_footer(); ?>