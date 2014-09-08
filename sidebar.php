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

$sidebar = (is_tax('genre') && is_active_sidebar('genre')) ? 'genre' : 'sidebar-1';
?>
	<div id="secondary" class="widget-area" role="complementary">
	<?php if ( is_active_sidebar( $sidebar ) ) : ?>
		
			<div class="widget_wrapper">
				<?php dynamic_sidebar( $sidebar ); ?>
			</div>
	<?php endif; ?>
	
		</div><!-- #secondary -->