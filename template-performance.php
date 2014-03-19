<?php
/**
 * Template Name: Performance
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header('performance'); ?>
	<div id="spacer">&nbsp;</div>
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', $post->post_type ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->

	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_sidebar('performance-footer'); ?>
<?php get_footer(); ?>