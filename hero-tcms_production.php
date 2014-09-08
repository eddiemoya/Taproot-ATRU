<?php $artist = tcms_get_production_artists(); ?>
<?php $artist = (!empty($artist)) ? array_pop($artist) : ""; ?>
	<div id="hero">
		<header class="entry-header">
			<h1 class="entry-title"><?php echo (is_singular()) ? $artist->name : get_queried_object()->name; ?></h1>
		</header>
	
	</div>