<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */


get_header();

$queried_object = get_queried_object();
query_posts(array(
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'post_parent' => $queried_object->ID,
		'post_type' => 'page'
));
?>
	<div id="spacer">&nbsp;</div>
	<div id="primary" class="site-content">
		<div id="content" role="main">
		
			<div class="breadcrumbs"><?php if(function_exists('bcn_display')){ bcn_display();}?></div>

			<?php if(have_posts()) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'excerpt', $post->post_type ); ?>
				<?php endwhile; ?>

			<?php else: ?>

				<?php wp_reset_query(); ?>
				<?php get_template_part( 'content', $post->post_type); ?>


			<?php endif; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php wp_reset_query(); ?>
<?php get_sidebar('page'); ?>
<?php get_footer(); ?>