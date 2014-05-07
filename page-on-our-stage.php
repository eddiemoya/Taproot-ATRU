<?php
get_header(); 

$top = get_category_by_slug('top');
$categories = get_categories(array(
	'parent' => $top->term_id
));

?>
	<div id="spacer">&nbsp;</div>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			

				<?php foreach($categories as $cat) : ?>

				<?php $events = new WP_Query(array('category'=>$cat->term_id)); ?>

				<section id='category-<?php echo $cat->term_id; ?>' class="category">
					<header class='category-header'>
						<h1 class="entry-title"><?php echo $cat->name; ?> @ The Auditorium</h1>
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