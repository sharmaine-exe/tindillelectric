<?php
/**
 * Template part for displaying single page cut sheet from single-cut-sheets.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tindillelectric
 */

?>
    <div class="container">
        <article <?php post_class();?> id="post-<?php the_ID();?>" >

            <header>
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            </header>

            <div class="entry-content pdf-single">
                <?php the_content(); ?>
            </div>

        </article>
    </div>