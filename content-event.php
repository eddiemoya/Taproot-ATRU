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
<!-- 		<h2><?php the_title(); ?></h2> -->
		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
				<?php $events = get_post_meta(get_the_ID(), 'subevent'); ?>

				<ul class="event-list">

					<?php foreach($events as $event) : ?>
					<?php $event = format_subevent($event); ?>
						<li>
							<?php echo $event->startdate ?> &bull; <?php echo $event->starttime ?>
							<?php $ticket = get_post_meta(get_the_ID(), 'TI'); $ticket = json_decode($ticket[0]); ?>

							<?php if(!empty($ticket)) : ?>
								<a href="<?php echo $ticket->value; ?>">Buy Ticket</a>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>

				</ul>
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
