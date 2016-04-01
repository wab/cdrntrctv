<?php
/**
 * Template Name: Accueil
 */
?>

<?php while (have_posts()) : the_post(); ?>

<div class="carousel owl-carousel">
	<div class="item" style="background-image: url(https://unsplash.it/1850/800?random)">
		<div class="row column item-wrap">

			<div class="item-box">
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<a href="#" class="large button">Demandez la demo  &rarr;</a>
			</div>

		</div>
	</div>
	<div class="item" style="background-image: url(https://unsplash.it/1800/800?random)">
		<div class="row column item-wrap">
			<div class="item-box">
				<p class="lead">Sit obcaecati laboriosam nobis corporis accusantium, non assumenda quis tempora quo voluptatibus.</p>
			</div>
		</div>
	</div>
	<div class="item" style="background-image: url(https://unsplash.it/1820/800?random)">
		<div class="row column item-wrap">
			<div class="item-box">
				<p class="lead">Neque distinctio nulla ipsam alias harum eum ratione earum odit.</p>
				<a href="#" class="large rounded button">Contactez-nous  &rarr;</a>
			</div>
		</div>
	</div>
</div>

<div class="section introduction">
	<div class="row">
		<div class="columns medium-6">
			<h1 class="cedreo-title">Logiciels 3D d'aide à la vente <br> <span>sur tous supports</span> </h1>
			<?php get_template_part('templates/content', 'page'); ?>
		</div>
		<div class="columns medium-6">
			<blockquote class="homequote"><p><strong>Plus de 2000 professionnels</strong> <br> utilisent nos logiciels tous les mois à travers le monde <br> <span>serez vous le prochain ?</span></p></blockquote>
		</div>
	</div>
</div>

<section class="section cibles">
	<div class="row column">
			<h2 class="cedreo-title">Logiciels sur-mesure <span>ou standard ?</span></h2>
		
			<div class="row grid medium-up-2">
				<div class="columns">
					<figure class="effect-ming">
						<img src="https://unsplash.it/600?random" alt="">
						<figcaption>
							<h3 class="h2 grid-title">Besoin d'un logiciel <br> <span>sur mesure ?</span></h3>
							<div><span class="acces">Accédez &rarr;</span></div>
							<a href="#">y accéder</a>
						</figcaption>			
					</figure>
				</div>
				<div class="columns">
					<figure class="effect-ming">
						<img src="https://unsplash.it/601?random" alt="">
						<figcaption>
							<h3 class="h2 grid-title">Un logiciel d’architecture 3D<span> simple et de grande qualité</span></h3>
							<div><span class="acces">Découvrez <br> MySketcher &rarr;</span></div>
							<a href="#">y accéder</a>
						</figcaption>			
					</figure>
				</div>
				<div class="columns">
					<figure class="effect-ming">
						<img src="https://unsplash.it/602?random" alt="">
						<figcaption>
							<h3 class="h2 grid-title"><span>Vous êtes constructeurs</span> <br> de maisons individuelles</h3>
							<div><span class="acces">Découvrez <br> Home Planner &rarr;</span></div>
							<a href="#">y accéder</a>
						</figcaption>			
					</figure>
				</div>
				<div class="columns">
					<figure class="effect-ming">
						<img src="https://unsplash.it/604?random" alt="">
						<figcaption>
							<h3 class="h2 grid-title">Besoin d'un <br><span>plan 3D ou une perspective ?</span></h3>
							<div><span class="acces">Découvrez <br> Archiwow &rarr;</span></div>
							<a href="#">y accéder</a>
						</figcaption>			
					</figure>
				</div>
				
		</div>
	</div>
</section>

<section class="section arguments">
	<div class="row column">
		<h2 class="cedreo-title" id="triggerNumbers">Ce qui se voit, <span>se vend</span></h2>
		<p class="lead text-center">Pour qu’une application 3D d’aide à la vente soit efficace, elle a besoin de ce que nous appelons les 3S</p>
		<div class="row">
			<div class="columns medium-4 text-center">
				<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/picto-simplicite.png" alt="simplicite"></p>
				<h3 class="argument-title cedreo-title">Simplicité</h3>
				<p>Des logiciels utilisables par les forces commerciales et clients finaux sans besoin de formation, une prise en mains intuitive</p>
			</div>
			<div class="columns medium-4 text-center">
				<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/picto-souplesse.png" alt="souplesse"></p>
				<h3 class="argument-title cedreo-title">Souplesse</h3>
				<p>Des logiciels utilisables par les forces commerciales et clients finaux sans besoin de formation, une prise en mains intuitive</p>
			</div>
			<div class="columns medium-4 text-center">
				<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/picto-seduction.png" alt="seduction"></p>
				<h3 class="argument-title cedreo-title">Séduction</h3>
				<p>Grâce à la technologie Cedreo Render Engine, tout se fait automatiquement et en ligne pour générer des rendus de qualité professionnelle</p>
			</div>
		</div>
	</div>
</section>

<?php endwhile; ?>