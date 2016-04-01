<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/page', 'header'); ?>
	<div class="section">
		<div class="row">
			<div class="columns large-8">
				<?php get_template_part('templates/content', 'page'); ?>
			</div>
		</div>
	</div>

<?php endwhile; ?>
