<?php
get_header(); 

$genres = get_terms('genre', array(parent => 0));
?>
	<div id="spacer">&nbsp;</div>
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<div class="breadcrumbs"><?php if(function_exists('bcn_display')){ bcn_display();}?></div>

				<?php foreach($genres as $genre) : ?>

				<?php 
				$today = time();
				$events = new WP_Query(
				//OLD QUERY
//					array(
//						'genre'=>$genre->slug, 
//						'posts_per_page'=>'4',
//						'meta_key' => 'tcms_opening',
//            			'orderby' => 'meta_value_num', 
//            			'order' => 'ASC')); 
					array(
						'genre'=>$genre->slug, 
						'posts_per_page'=>'4',
						'meta_query' => array(
							array(
								'key' => 'tcms_opening',
								'compare' => '>=',
								'value' => date('Y-m-d', strtotime('now')),
							)
						),
						'meta_key' => 'tcms_opening',
            			'orderby' => 'meta_value_num', 
            			'order' => 'ASC')); 
                ?>

				<section id='category-<?php echo $event_type->term_id; ?>' class="category">
					<header class='category-header'>
						<h1 class="entry-title">
							<a href="<?php echo esc_url( get_term_link($genre) ); ?>"><?php echo $genre->name; ?> @ The Auditorium</a>
						</h1>
					</header>
					<div id="spacer">&nbsp;</div>
					<?php if($events->have_posts()) : ?>

						<?php while ( $events->have_posts() ) : $events->the_post(); ?>

							<?php get_template_part('content','on-our-stage');
							?>

						<?php endwhile; ?>

					<?php endif; ?>

				</section>

				<?php endforeach; ?>
		
		</div>

	</div>
<?php get_footer(); ?>