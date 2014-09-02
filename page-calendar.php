<?php
/*
Template Name: Calendar
*/

get_header(); ?>

<div id="spacer">&nbsp;</div>
<div id="primary" class="site-content">
	<div id="content" role="main">
	
		<div class="breadcrumbs"><?php if(function_exists('bcn_display')){ bcn_display();}?></div>

			<?php if(have_posts()) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', $post->post_type ); ?>
				<?php endwhile; ?>
			<?php endif; ?>

	</div><!-- #content -->

</div><!-- #primary -->

<?php get_footer(); ?>