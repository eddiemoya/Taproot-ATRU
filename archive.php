<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div id="spacer">&nbsp;</div>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			
			<div class="breadcrumbs"><?php if(function_exists('bcn_display')){ bcn_display();}?></div>
			<?php 
			
			$pList = new WP_Query(array(
				'post_type' => get_post_type( $post ),  
				'meta_query' => array(
					array(
						'key' => 'tcms_closing',
						'compare' => '>=',
						'value' => date('Y-m-d', strtotime('now')),
					)
				),
				'meta_key' => 'tcms_opening',
				'orderby' => 'meta_value_num', 
				'order' => 'ASC',
				'posts_per_page' => -1
				)
			); 
			$metakeys = get_post_meta($post->ID);
			$genreMain =  get_the_term_list( $metakeys['tcms_productionID'][0], 'genre', '', ', ', ' ' );
			
			//PRODUCTION WITH GENRE
			if ($genreMain != ""){?>
			<?php if($pList->have_posts()) : ?>
			<?php //print_r(get_post_meta($post->ID)); ?>
<?php //echo get_post_type( $post ); echo get_term($post, 'genre'); ?>
				<?php while ( $pList->have_posts() ) : $pList->the_post(); ?>
					<?php 
					$metakey = get_post_meta($post->ID); 
					$genre = get_the_term_list( $metakeys['tcms_productionID'][0], 'genre', '', ', ', ' ' );
					if($genreMain == $genre){
					?>
					<?php get_template_part( 'excerpt', $post->post_type ); ?>
					<?php 
					}
					 ?>
				<?php endwhile; ?>

			<?php else: ?>

				<?php wp_reset_query(); ?>
				<?php get_template_part( 'content', $post->post_type); ?>

			<?php endif; // end of the loop. ?>
			<?php }
			//NOT A PRODUCTION WITH GENRE
			else
			{
				
				?>
			<?php if(have_posts()) : ?>
			<?php //print_r(get_post_meta($post->ID)); ?>
<?php //echo get_post_type( $post ); echo get_term($post, 'genre'); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php get_template_part( 'excerpt', $post->post_type ); ?>
					
				<?php endwhile; ?>

			<?php else: ?>

				<?php wp_reset_query(); ?>
				<?php get_template_part( 'content', $post->post_type); ?>

			<?php endif; // end of the loop. ?>
			<?php
			}
			?>
		</div><!-- #content -->
	</div><!-- #primary -->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>