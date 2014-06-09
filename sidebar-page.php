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

global $post;
$sidebar = (is_active_sidebar('page-right-rail-'.$post->post_name)) ? 'page-right-rail-'.$post->post_name : 'sidebar-1';
?>

	<?php if ( is_active_sidebar( $sidebar ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<div class="widget_wrapper">
				<?php dynamic_sidebar( $sidebar ); ?>
			</div>
		</div><!-- #secondary -->
	<?php endif; ?>