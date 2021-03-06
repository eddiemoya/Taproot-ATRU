<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-header">
			<h2 class="performance-title"><?php single_post_title(); ?></h2>
			<!-- <h3 class="performance-venue">Venue: <?php //echo $venue; ?></h3> -->
		</div>
<!-- 		<h2><?php the_title(); ?></h2> -->
		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">

				<?php $events = new WP_Query(array('post_type'=>'tcms_event', 'meta_key'=>'tcms_productionID', 'meta_value'=>get_the_ID(),'order' => 'ASC', 'posts_per_page' => -1)); ?>

				<ul class="event-list">

					<?php if($events->have_posts()) : ?>

						<?php while ( $events->have_posts() ) : $events->the_post(); ?>
							<?php $metadata = get_post_custom(); ?>


							<li>
								<?php echo tcms_get_event_startdate(); ?> &bull; <?php echo tcms_get_event_starttime(); ?>

								<?php if(isset($metadata['tcms_ticketsURL'][0])) : ?>
									<a href="<?php echo $metadata['tcms_ticketsURL'][0]; ?>" target="_blank">Buy Tickets</a>
							 	<?php endif; ?> 
						
							</li>
						<?php endwhile; ?>

					<?php endif; ?>
					<?php wp_reset_postdata(); ?>

				</ul>
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
