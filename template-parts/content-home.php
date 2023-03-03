<?php
/***
* Template part for displaying content in the front-page.php (home page)
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package tindillelectric
*/
?>
<article <?php post_class();?> id="post-<?php the_ID();?>" >
    <main>
        <header>
            <h2>
                <a href="<?php the_permalink();?>">
                    <?php the_title(); ?>
                </a>
            </h2>
        </header>
        <?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
        <div class="entry-content">
            <?php the_excerpt(); ?>
            
        </div>
    </main>
</article>
