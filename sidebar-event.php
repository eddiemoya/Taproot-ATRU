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
$featured_video_url_meta = get_post_meta( $post->ID, 'oembed_featured_video', true);
$featured_video_url = str_replace('https', 'http', $featured_video_url_meta);
$featured_video = wp_oembed_get($featured_video_url, array('width'=>'310'));

?>
	<div id="secondary" class="widget-area" role="complementary">
	<?php if ( is_active_sidebar( 'event-right-rail' ) ) : ?>
		

			<?php   if(!empty($featured_video)) : ?>
				<aside id="featured-video" class="widget">
					<h3 class="widget-title">Promotional Video</h3>
					<?php echo $featured_video;?>
				</aside>
			<?php endif; ?>

			<?php dynamic_sidebar( 'event-right-rail' ); ?>
				
			
		
	<?php endif; ?>
	</div><!-- #secondary -->