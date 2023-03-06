<?php
/**
 * Template part for displaying page content in page-cut-sheets.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tindillelectric
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php tindillelectric_post_thumbnail(); ?>

	<div class="entry-content">
		<?php  ?>
        <a href="<?php the_permalink();?>">
            <?php the_field('title'); ?>
        </a>

        <?php the_field('cut_sheet_file'); ?> 

	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'tindillelectric' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->



<div class="entry-content">
    <a href="<?php the_permalink();?>">
        <?php the_title('<h3>','</h3>'); ?>
    </a>
    <?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>

    <!-- advanced custom fields -->
    <?php the_field('description'); ?> 
    
    <?php the_excerpt(); ?>
</div>
