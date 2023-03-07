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
		<?php the_content(); ?>

		<!-- 
			Removed ACF file type for better viewing. 
			With ACF, each cut sheet page will only display the link to view/download it.
			There will be another link to get directed to the website.

			Added a PDF Embedder instead to simply display the_content() as is, 
			and will embed to display it on the single cut sheet page itself.
			Note: If user wants to add a cut sheet in the future, the shortcode is pretty easy:

			[pdf-embedder url="https://example.com/attachmtn1.pdf"]

		-->
		<?php 
			$file = get_field('cut_sheet_file'); 
			if($file):

				// Extract variables.
				$url = $file['url'];
				$title = $file['title'];
				$caption = $file['caption'];
				$icon = $file['icon'];

				// Display image thumbnail when possible.
				if( $file['type'] == 'image' ) {
					$icon =  $file['sizes']['thumbnail'];
				}

				// Begin caption wrap.
				if( $caption ): ?>
					<div class="wp-caption">
				<?php endif; ?>
			
				<a href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($title); ?>">
					<img src="<?php echo esc_attr($icon); ?>" />
				</a>
			
				<?php 
				// End caption wrap.
				if( $caption ): ?>
					<p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
					</div>
				<?php endif; ?>
			<?php endif; ?> 

				<p class="">
					View / Download
					<a href="<?php echo $file['url']; ?>">
						<?php echo $file['filename']; ?>
					</a>
				</p>

			
			


	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<div class="cut-sheet-cat-single">
				<p>Category: <?php the_category(); ?></p>
			</div>
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

