<?php
get_header(); 

$top = get_category_by_slug('top');
$event_types = get_terms('event_type', array(parent => 0));
?>
	<div id="spacer">&nbsp;</div>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			

				<?php foreach($event_types as $event_type) : ?>

				<?php $events = new WP_Query(array('event_type'=>$event_type->slug)); ?>

				<section id='category-<?php echo $event_type->term_id; ?>' class="category">
					<header class='category-header'>
						<h1 class="entry-title"><?php echo $event_type->name; ?> @ The Auditorium</h1>
					</header>
					<div id="spacer">&nbsp;</div>
					<?php if($events->have_posts()) : ?>

						<?php while ( $events->have_posts() ) : $events->the_post(); ?>

							<?php get_template_part('content','on-our-stage'); ?>

						<?php endwhile; ?>

					<?php endif; ?>

				</section>

				<?php endforeach; ?>
		
		</div>

	</div>
<?php get_footer(); ?>