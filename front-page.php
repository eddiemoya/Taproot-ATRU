<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */


get_header(); 

query_posts(
	array(
		'post_type' => array('post'),
		'tax_query' => array(
			array(
				'taxonomy' => 'category',
				'field' => 'slug',
				'terms' => array('updates')
			)
		)
	)
);
?>
	<div id="spacer">&nbsp;</div>
	<div id="primary" class="site-content">
		<div id="content" role="main">
<div class="breadcrumbs">
	<?php if(function_exists('bcn_display'))
	{
		bcn_display();
	}?>
</div>
			<?php if(have_posts()) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'excerpt', $post->post_type ); ?>
				<?php endwhile; ?>

			<?php else: ?>

				
				<?php get_template_part( 'content', $post->post_type); ?>

			<?php endif; // end of the loop. ?>
			
		</div><!-- #content -->
	</div><!-- #primary -->

<?php wp_reset_query(); ?>
<?php get_sidebar('front-page-sidebar'); ?>
<?php get_sidebar('front-page-footer');  ?>
<?php get_footer(); ?>