
<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/page', 'header'); ?>
	<div class="section logiciels">
		<div class="row">
			<div class="columns large-6">
				<h2 class="cedreo-title"><?php the_field('subtitle'); ?></h2>
				<?php if(get_field('video_id')): ?>
					<div class="flex-video widescreen">
						<iframe type="text/html" src="https://www.youtube.com/embed/<?php the_field('video_id'); ?>?controls=0&color=white&theme=light" frameborder="0" allowfullscreen></iframe>
					</div>
				<?php endif; ?>
			</div>
			<?php if(get_field('video_id')): ?>
			<div class="columns large-6 ">
				<?php the_content(); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>

<?php endwhile; ?>