<?php
/**
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header('header-tcms_production'); ?>
	<div id="spacer">&nbsp;</div>
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<div class="breadcrumbs"><?php if(function_exists('bcn_display')){ bcn_display();}?></div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'tcms_production' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->

	</div><!-- #primary -->

<?php get_sidebar('event'); ?>
<?php get_sidebar('event-footer'); ?>
<?php get_footer(); ?>