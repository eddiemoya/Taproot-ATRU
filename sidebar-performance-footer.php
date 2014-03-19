<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'performance-footer' ) ) : ?>
		<div id="footer-banner" class="widget-area" role="complementary">
			<div class="widget_wrapper">
				<?php dynamic_sidebar( 'performance-footer' ); ?>
			</div>
		</div><!-- #secondary -->
	<?php endif; ?>