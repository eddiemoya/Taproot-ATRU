	<div id="hero">
		<?php if ( has_post_thumbnail()) : ?>
	 		<?php the_post_thumbnail('full'); ?>
	 	<?php else: ?>
	 		<div id="spacer">&nbsp;</div>
		<?php endif; ?>

		<header class="entry-header">
			<h1 class="entry-title"><?php single_post_title(); ?></h1>
		</header>

	
	</div>