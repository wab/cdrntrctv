<?php
/**
 * Template Name: Accueil
 */
?>

<div class="section">
	<div class="container">
		<p>carousel</p>
	</div>
</div>

<?php while (have_posts()) : the_post(); ?>
  <?php // get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<section class="section cibles">
	<div class="container">
		<h2>Logiciels sur-mesure ou standard ?</h2>
	</div>
	<div class="row">
		<div class="columns">
			<h3>Besoin d'un logiciel sur mesure ?</h3>
			<img src="https://unsplash.it/400/?random" alt="" class="thumbnail">
			<p class="text-center"><a href="#" class="expanded button">Ca se passe ici</a></p>
		</div>
		<div class="columns">
			<h3>Besoin d'un logiciel sur mesure ?</h3>
			<img src="https://unsplash.it/500/?random" alt="" class="thumbnail">
			<p class="text-center"><a href="#" class="expanded button">Ca se passe ici</a></p>
		</div>
		<div class="columns">
			<h3>Besoin d'un logiciel sur mesure ?</h3>
			<img src="https://unsplash.it/280/?random" alt="" class="thumbnail">
			<p class="text-center"><a href="#" class="expanded button">Ca se passe ici</a></p>
		</div>
		<div class="columns">
			<h3>Besoin d'un logiciel sur mesure ?</h3>
			<img src="https://unsplash.it/300/?random" alt="" class="thumbnail">
			<p class="text-center"><a href="#" class="expanded button">Ca se passe ici</a></p>
		</div>
	</div>
</section>

<section class="section arguments">
	<div class="container">
		<h2>Ce qui se voit se vend ?</h2>
	</div>
	<div class="row">
		<div class="columns">
			<h3>Simplicité</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed assumenda impedit repudiandae accusantium velit expedita fugiat similique optio qui quia iure nulla, veritatis harum, error, vitae, quae eum dolor consectetur.</p>
		</div>
		<div class="columns">
			<h3>Souplesse</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, reprehenderit, magni. Voluptates nisi officia, temporibus debitis velit officiis, nam dolorem blanditiis possimus dolor eligendi, ullam, saepe corrupti libero praesentium non!</p>
		</div>
		<div class="columns">
			<h3>Séduction</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, numquam, magni. Vero fugiat temporibus reprehenderit quod nisi iusto nam tempore recusandae reiciendis obcaecati cumque aspernatur quam, nihil mollitia amet, dolorum.</p>
		</div>
	</div>
</section>
