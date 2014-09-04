	<?php $metadata = get_post_custom(); ?>
	<?php $artist = array_pop(wp_get_post_terms(get_the_ID(), 'theatre_artists')); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail()) : ?>
	 		<?php the_post_thumbnail('medium'); ?>
		<?php endif; ?>
		<header class="entry-header">
			<h2 class="artist-name"><?php echo $artist->name; ?></h2>
			<h3 class="entry-title"><?php the_title(); ?></h3>
		</header>
		<section class="button-list">
			<a class="learn-more button" href="<?php the_permalink(); ?>" alt="Learn more about <?php the_title(); ?>">Learn More</a>
			<a class="buy-now button" href="<?php echo $metadata['tcms_ticketsURL'][0]; ?>" alt="Buy tickets for <?php the_title(); ?>">Buy Now</a>
		</section>

		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->