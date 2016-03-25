<?php
/**
 * Template Name: Page Logiciel
 */
use Roots\Sage\Breadcrumbs;
?>

<?php while (have_posts()) : the_post(); ?>
	<header class="page-header section" style="background-image: url(https://unsplash.it/1850/250?random);">
		<div class="row column">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>
	</header>
	<div class="contenu">
		<div class="row">
			<div class="columns large-8">
				<?= Breadcrumbs\breadcrumbs(); ?>
				<?php get_template_part('templates/content', 'page'); ?>
			</div>
		</div>
	</div>

<?php endwhile; ?>
