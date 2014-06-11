	<div id="hero">
		<?php if ( has_post_thumbnail()) : ?>
	 		<?php the_post_thumbnail('full'); ?>
	 	<?php else: ?>
	 		<div id="spacer">&nbsp;</div>
		<?php endif; ?>

	<?php if ( is_active_sidebar( 'front-page-hero' ) ) : ?>
		<div id="hero-banner" class="widget-banner widget-area" role="complementary">
			<div class="widget_wrapper">
				<?php dynamic_sidebar( 'front-page-hero' ); ?>
			</div>
		</div><!-- #secondary -->
	<?php endif; ?>

		<header class="entry-header">
			<h1 class="entry-title">What's new...</h1>
		</header>

	
	</div>