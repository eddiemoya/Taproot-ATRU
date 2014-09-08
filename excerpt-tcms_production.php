<?php
$meta = get_post_custom(get_the_ID());
$artist = wp_get_post_terms(get_the_ID(), 'theatre_artists');
$artist = $artist[0]->name;

?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail()) : ?>
	 		<?php the_post_thumbnail('medium'); ?>
		<?php endif; ?>
		<div class="genre-content-container">
			<header class="entry-header">
				<h2 class="entry-artist"><?php echo $artist; ?></h2>
				<h3 class="entry-title"><?php the_title(); ?></h2>
				<span>Venue: <?php echo "A Stage"; ?></span>
				<span>Venue: <?php echo "Now"; ?>
			</header>
			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div>
		</div>
			<footer class="entry-meta">
				<section class="button-list">
					<a class="learn-more button" href="<?php the_permalink(); ?>" alt="Learn more about <?php the_title(); ?>">Learn More</a>
					<a class="buy-now button" target="_blank" href="<?php the_permalink(); ?>" alt="Buy tickets for <?php the_title(); ?>">Buy Now</a>
				</section>
				<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-meta -->
	</article><!-- #post -->