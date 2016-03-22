<?php
/**
 * Template Name: Accueil
 */
?>

<?php while (have_posts()) : the_post(); ?>

<div class="carousel owl-carousel">
	<div class="item" style="background-image: url(https://unsplash.it/1850/800?random)">
		<div class="item-wrap">
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>
	<div class="item" style="background-image: url(https://unsplash.it/1800/800?random)">
		<div class="item-wrap">
			<p class="lead">Sit obcaecati laboriosam nobis corporis accusantium, non assumenda quis tempora quo voluptatibus.</p>
		</div>
	</div>
	<div class="item" style="background-image: url(https://unsplash.it/1820/800?random)">
		<div class="item-wrap">
			<p class="lead">Neque distinctio nulla ipsam alias harum eum ratione earum odit.</p>
		</div>
	</div>
</div>

<div class="section introduction">
	<div class="row">
		<div class="columns medium-10 large-8 medium-centered">
			<h1><?php bloginfo('description') ?></h1>
			<?php get_template_part('templates/content', 'page'); ?>
			<div class="zoom"><p>Plus de 2000 professionnels utilisent nos logiciels tous les mois à travers le monde, serez vous le prochain ?</p></div>
		</div>
	</div>
</div>

<section class="section cibles">
	<div class="row">
		<div class="columns large-centered large-8">
			<h2>Logiciels sur-mesure ou standard ?</h2>
		
			<div class="row grid medium-up-2">
				<div class="columns">
					<figure class="effect-ming">
						<img src="https://unsplash.it/601?random" alt="">
						<figcaption>
							<h3 class="grid-title">Besoin d'un logiciel<span> sur mesure ?</span></h3>
							<p>&rarr; <em>Ça se passe ici</em></p>
							<a href="#">y accéder</a>
						</figcaption>			
					</figure>
				</div>
				<div class="columns">
					<figure class="effect-ming">
						<img src="https://unsplash.it/602?random" alt="">
						<figcaption>
							<h3 class="grid-title">Un logiciel <span>d’architecture 3D</span></h3>
							<p>pour réaliser ces images en moins de 30 minutes ?</p>
							<p>&rarr; <em>Ça se passe chez Brand 3D</em></p>
							<a href="#">y accéder</a>
						</figcaption>			
					</figure>
				</div>
				<div class="columns">
					<figure class="effect-ming">
						<img src="https://unsplash.it/603?random" alt="">
						<figcaption>
							<h3 class="grid-title">Constructeurs<span> de maisons</span></h3>
							<p>Vous souhaitez vendre plus et plus vite ?</p>
							<p>&rarr; <em>Ça se passe chez Brand CMI</em></p>
							<a href="#">y accéder</a>
						</figcaption>			
					</figure>
				</div>
				<div class="columns">
					<figure class="effect-ming">
						<img src="https://unsplash.it/604?random" alt="">
						<figcaption>
							<h3 class="grid-title">Professionnels <span>de l’immobilier</span> ou <span>de la construction</span></h3>
							<p>Vos images 3D rapidement et au meilleur prix ?</p>
							<p>&rarr; <em>Ça se passe chez Brand Services</em></p>
							<a href="#">y accéder</a>
						</figcaption>			
					</figure>
				</div>
				
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
		<div class="owl-carousel stories-carousel">
			<div>
				<div class="wrap">
					<strong>Nexity</strong>
				</div>
			</div>
			<div>
				<div class="wrap">
					<strong>Maisons France Confort</strong>
				</div>
			</div>
			<div>
				<div class="wrap">
					<strong>Lundia</strong>
				</div>
			</div>
			<div>
				<div class="wrap">
					<strong>Chateau d’Ax</strong>
				</div>
			</div>
			<div>
				<div class="wrap">
					<strong>Fermob</strong>
				</div>
			</div>
			<div>
				<div class="wrap">
					<strong>123 Webimmo</strong>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section partenaires">
	<div class="row column">
		<h2>Nos partenaires</h2>
		<ul class="row medium-up-8 no-bullet">
			<li class="columns"><img src="https://unsplash.it/g/180" alt=""></li>
			<li class="columns"><img src="https://unsplash.it/g/181" alt=""></li>
			<li class="columns"><img src="https://unsplash.it/g/182" alt=""></li>
			<li class="columns"><img src="https://unsplash.it/g/183" alt=""></li>
			<li class="columns"><img src="https://unsplash.it/g/184" alt=""></li>
		</ul>
	</div>
</section>
<?php endwhile; ?>