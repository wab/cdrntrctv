<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/page', 'header'); ?>
	<div class="section contenu">
		<div class="row column">
			<?php if(get_field('logo')): ?>
				<div class="columns medium-4">
					<img src="<?php the_field('logo'); ?>" alt="">
				</div>
			<?php endif; ?>
			<div class="columns medium-8">
				<?php if (get_field('subtitle')) : ?>
					<h2 class="cedreo-title subtitle"><?php the_field('subtitle'); ?></h2>
				<?php endif; ?>
				<?php get_template_part('templates/content', 'page'); ?>
			</div>
				
		</div>
	</div>

	<?php get_template_part('templates/section', 'arguments'); ?>


	<section class="section competences contenu">
		<div class="row">
			<div class="columns medium-6">
				<?php if(get_field('c_title')): ?>
				<h2 class="cedreo-title subtitle"><?php the_field('c_title'); ?></h2>
				<?php endif; ?>
				<?php if(get_field('c_text')): ?>
				<?php the_field('c_text'); ?>
				<?php endif; ?>

				<?php

				// check if the repeater field has rows of data
				if( have_rows('competences') ): ?>

				<ul class="no-bullet competences-list">

					<?php 	// loop through the rows of data
				    while ( have_rows('competences') ) : the_row(); ?>

				        <li><?php the_sub_field('title'); ?>
				        	<div class="progress" role="progressbar" tabindex="0" aria-valuenow="<?php the_sub_field('value'); ?>" aria-valuemin="0" aria-valuetext="<?php the_sub_field('value'); ?> percent" aria-valuemax="100">
							  <div class="progress-meter" style="width: <?php the_sub_field('value'); ?>%"></div>
							</div>
				        </li>

				    <?php endwhile; ?>

				</ul>

				<?php endif; ?>

			</div>
			<?php if(get_field('c_image')): ?>
			<div class="columns medium-6 text-right">
				<img src="<?php the_field('c_image'); ?>" alt="nos compétences">
			</div>
			<?php endif; ?>
		</div>
	</section>
	<section class="section equipe grid ">
		<div class="row column">
			<h2 class="cedreo-title">Notre <span>équipe</span></h2>
			<div class="owl-carousel equipe-carousel no-bullet contenu">
				<div>
					<figure>
						<img src="https://unsplash.it/400?random" alt="">
						<figcaption>
							<h2 class="cedreo-title">Nom <span>fonction</span></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quam, est vero, enim consequatur doloremque dolores temporibus et! Quia, voluptatibus laboriosam sequi a maxime et quae modi reprehenderit nisi iste.</p>
						</figcaption>
					</figure>
				</div>
				<div>
					<figure>
						<img src="https://unsplash.it/402?random" alt="">
						<figcaption>
							<h2 class="cedreo-title">Nom <span>fonction</span></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quam, est vero, enim consequatur doloremque dolores temporibus et! Quia, voluptatibus laboriosam sequi a maxime et quae modi reprehenderit nisi iste.</p>
						</figcaption>
					</figure>
				</div>
				<div>
					<figure>
						<img src="https://unsplash.it/401?random" alt="">
						<figcaption>
							<h2 class="cedreo-title">Nom <span>fonction</span></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quam, est vero, enim consequatur doloremque dolores temporibus et! Quia, voluptatibus laboriosam sequi a maxime et quae modi reprehenderit nisi iste.</p>
						</figcaption>
					</figure>
				</div>
				<div>
					<figure>
						<img src="https://unsplash.it/403?random" alt="">
						<figcaption>
							<h2 class="cedreo-title">Nom <span>fonction</span></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quam, est vero, enim consequatur doloremque dolores temporibus et! Quia, voluptatibus laboriosam sequi a maxime et quae modi reprehenderit nisi iste.</p>
						</figcaption>
					</figure>
				</div>
			</div>

			<div class="arrows">
		        <a href="#" class="prev"><i class="fa fa-chevron-left"></i></a>
		        <a href="#" class="next"><i class="fa fa-chevron-right"></i></a>
		      </div>
		</div>
	</section>

	<?php get_template_part('templates/section', 'testimony'); ?>

<?php endwhile; ?>

