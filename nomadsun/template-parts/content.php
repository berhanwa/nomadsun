<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomadsun
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<!-- <header class="entry-header">
		
	</header> -->


	<div class="entry-content">
		
		<!-- If the content has "rows" e.g. header / gallery / text block  -->
		<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row()
		;  
			// check what the row layout is and print the template part associated with that layout

     	  	 if( get_row_layout() == 'header' ): ?>

				<?php get_template_part( 'template-parts/content-header' ); ?>

				<!-- <?php the_field('hero_image'); ?> -->

     	  	 <?php elseif( get_row_layout() == 'text_block' ): ?>

				<?php get_template_part( 'template-parts/content-text' ); ?>

			<?php elseif ( get_row_layout() == 'gallery'): ?>

				<?php get_template_part( 'template-parts/content-gallery' ); ?>

			<?php elseif ( get_row_layout() == 'image_with_text'): ?>

				<?php get_template_part( 'template-parts/content-image-with-text' ); ?>

			<?php elseif ( get_row_layout() == 'gallery_grid'): ?>

				<?php get_template_part( 'template-parts/content-gallery-grid' ); ?>

         <?php endif; 
   			 endwhile;	endif;?>
	</div><!-- .entry-content -->



	<footer class="entry-footer">

		<?php get_template_part( 'template-parts/content-share' ); ?>

		<?php get_template_part( 'template-parts/content-explore' ); ?>

	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
