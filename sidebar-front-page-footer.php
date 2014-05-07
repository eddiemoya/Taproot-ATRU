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

// $sidebar = (is_front_page()) ? 'front-page-footer' : 'performance-footer';

?>

	<?php if ( is_active_sidebar( 'front-page-footer' ) ) : ?>
		<div id="footer-banner" class="widget-banner widget-area" role="complementary">
			<div class="widget_wrapper">
				<?php dynamic_sidebar( 'front-page-footer' ); ?>
			</div>
		</div><!-- #secondary -->
	<?php endif; ?>