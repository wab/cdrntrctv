<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/page', 'header'); ?>
	<div class="section contenu">
		<div class="row">
			<div class="columns large-8 large-centered">
				<?php if (get_field('subtitle')) : ?>
					<h2 class="cedreo-title subtitle"><?php the_field('subtitle'); ?></h2>
				<?php endif; ?>
				<?php get_template_part('templates/content', 'page'); ?>
			</div>
		</div>
	</div>

	<?php get_template_part('templates/section'); ?>

	<?php if ( get_field('display-stories') ) { get_template_part('templates/section', 'stories'); } ?>

<?php endwhile; ?>
