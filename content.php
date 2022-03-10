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
		
		<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();  

     	  	 if( get_row_layout() == 'header' ): ?>

				<div class="flex">

					<div class="w-60 min-vh-100 cover bg-center" style="<?php if( get_field('hero_image') ): ?>
						background-image: url(<?php the_field('hero_image'); ?>);	<?php endif; ?>">
					</div>

					<div class="w-40">
						<?php the_field('date'); ?>

						<?php the_title(); ?>
						<?php the_field('subhead'); ?>

						<?php the_sub_field('intro'); ?>

					</div>

				</div>

				<!-- <?php the_field('hero_image'); ?> -->

     	  	 <?php elseif( get_row_layout() == 'text_block' ): ?>
				<?php the_sub_field('text_content'); ?>
         	  <? endif; 
   			 endwhile;	endif;

		?>

	</div><!-- .entry-content -->


	<footer class="entry-footer">
		<!-- <?php nomadsun_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
