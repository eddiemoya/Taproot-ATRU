	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail()) : ?>
	 		<?php the_post_thumbnail('full'); ?>
		<?php endif; ?>
		<header class="entry-header">
			<h2 class="entry-title"><?php the_title(); ?></h2>
		</header>
		<section class="button-list">
			<a class="learn-more button" href="<?php the_permalink(); ?>" alt="Learn more about <?php the_title(); ?>">Learn More</a>
			<a class="buy-now button" href="<?php the_permalink(); ?>" alt="Buy tickets for <?php the_title(); ?>">Buy Now</a>
		</section>

		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->