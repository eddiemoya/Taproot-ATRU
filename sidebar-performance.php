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
$featured_video_url = get_post_meta( get_the_ID(), 'omebed_featured_video');
$featured_video_url = str_replace('https', 'http', $featured_video_url);
$featured_video = wp_oembed_get($featured_video_url, array('width'=>'365'));

?>

	<?php if ( is_active_sidebar( 'performance-right-rail' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">

			<?php  if(!empty($featured_video)) : ?>
				<aside id="featured-video" class="widget">
					<h3 class="widget-title">Promotional Video</h3>
					<?php echo $featured_video; ?>
				</aside>
			<?php endif; ?>

			<?php dynamic_sidebar( 'performance-right-rail' ); ?>
				
			
		</div><!-- #secondary -->
	<?php endif; ?>