<?php
/**
 * Template Name: Accueil
 */
?>

<div class="section">
	<div class="row column">
		<p>carousel</p>
	</div>
</div>

<?php while (have_posts()) : the_post(); ?>
  <?php // get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div class="introduction">
	<div class="row">
		<div class="columns medium-10 large-8 medium-centered">
			<h1>Logiciels 3D d’aide à la vente sur tous supports</h1>
			Depuis plus de 10 ans, Cedreo Interactive est un éditeur leader de logiciels 3D d’aménagement d’espaces, et de configuration pour l’aide à la vente.
			Logiciel de plans 3D, agencement, aménagement, configuration, construction, personnalisation visuelle, le tout se fait de manière si simple et intuitive qu’elle devient la suite logicielle 3D la plus accessible du marché en offrant la meilleure qualité visuelle sur le maximum de plateformes.</p>
			<p class="panel">Plus de 2000 professionnels utilisent nos logiciels tous les mois à travers le monde, serez vous le prochain ?</p>
		</div>
	</div>
</div>

<section class="section cibles">
	<div class="row column">
		<h2>Logiciels sur-mesure ou standard ?</h2>
		<div class="row medium-up-2 besoins">
			<div class="columns">
				<p class="title">Besoin d'un logiciel sur mesure ?</p>
				<img src="https://unsplash.it/602/300?random" alt="" class="thumbnail">
				<p class="text-center"><a href="#" class="expanded button">Ca se passe ici</a></p>
			</div>
			<div class="columns">
				<p class="title">Un logiciel d’architecture 3D pour réaliser ces images en moins de 30 minutes ?</p>
				<img src="https://unsplash.it/600/300?random" alt="" class="thumbnail">
				<p class="text-center"><a href="#" class="expanded button">Ca se passe chez Brand 3D</a></p>
			</div>
			<div class="columns">
				<p class="title">Constructeurs de maisons, vous souhaitez vendre plus et plus vite ? </p>
				<img src="https://unsplash.it/601/300?random" alt="" class="thumbnail">
				<p class="text-center"><a href="#" class="expanded button">Ca se passe chez Brand CMI</a></p>
			</div>
			<div class="columns">
				<p class="title">Professionnels de l’immobilier ou de la construction, vos images 3D rapidement et au meilleur prix ?</p>
				<img src="https://unsplash.it/603/300?random" alt="" class="thumbnail">
				<p class="text-center"><a href="#" class="expanded button">Ca se passe chez Brand Services</a></p>
			</div>
		</div>
	</div>
</section>

<section class="section arguments">
	<div class="row column">
		<h2>Ce qui se voit se vend ?</h2>
		<div class="row">
			<div class="columns medium-4">
			<h3>Simplicité</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed assumenda impedit repudiandae accusantium velit expedita fugiat similique optio qui quia iure nulla, veritatis harum, error, vitae, quae eum dolor consectetur.</p>
			</div>
			<div class="columns medium-4">
				<h3>Souplesse</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, reprehenderit, magni. Voluptates nisi officia, temporibus debitis velit officiis, nam dolorem blanditiis possimus dolor eligendi, ullam, saepe corrupti libero praesentium non!</p>
			</div>
			<div class="columns medium-4">
				<h3>Séduction</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, numquam, magni. Vero fugiat temporibus reprehenderit quod nisi iusto nam tempore recusandae reiciendis obcaecati cumque aspernatur quam, nihil mollitia amet, dolorum.</p>
			</div>
		</div>
	</div>
</section>

<section class="section stories">
	<div class="row column">
		<h2>Nos success stories</h2>
		<div class="carousel">
			<div>Nexity</div>
			<div>Maisons France Confort</div>
			<div>Lundia</div>
			<div>Chateau d’Ax / La maison du convertible ?</div>
			<div>Fermob</div>
			<div>123 Webimmo</div>
		</div>
	</div>
</section>

<section class="section partenaires">
	<div class="row column">
		<h2>Nos partenaires</h2>
	</div>
</section>
