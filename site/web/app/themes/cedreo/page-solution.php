<?php
/**
 * Template Name: Secteur
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<header class="page-header section" style="background-image: url(https://unsplash.it/1850/200?random);">
		<div class="row column">
			<h1><?php the_title(); ?></h1>
		</div>
		
	</header>
	<div class="section">
		<div class="row">
			<div class="columns large-8">
				<?php get_template_part('templates/content', 'page'); ?>
			</div>
		</div>
	</div>

<?php endwhile; ?>
