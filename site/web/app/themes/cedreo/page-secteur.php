<?php

/**
 * Template Name: Secteur d'activité
 */


?>
<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/page', 'header'); ?>
	
	<div class="introduction section">
		<div class="row">
			<?php if (get_field('subtitle')) : ?>
				<h2 class="cedreo-title subtitle large-8 large-centered columns"><?php the_field('subtitle'); ?></h2>
			<?php endif; ?>
			<div class="columns medium-6 end">
				<?php get_template_part('templates/content', 'page'); ?>
			</div>
		</div>
	</div>

	<?php get_template_part('templates/section'); ?>

	<?php 

	$posts = get_field('solutions');

	if( $posts ): ?>
	    <section class="logiciels">
	    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
	        <?php setup_postdata($post); ?>
	        <article class="section item">
	        	<div class="row columns presentation">
	        		<div>
	        			<h2 class="cedreo-title"><?php the_title(); ?> <br><span><?php the_field('subtitle'); ?></span></h2>

	        			 <?php the_excerpt(); ?>
	        		</div>
	        		<div>
	        			<?php if(get_field('video_id')): ?>
	        			<div class="flex-video widescreen">
							<iframe type="text/html" src="https://www.youtube.com/embed/<?php the_field('video_id'); ?>?controls=0&color=white&theme=light" frameborder="0" allowfullscreen></iframe>
						</div>
						<?php endif; ?>
	           		</div>
	        	</div>
	            
	        </article>
	    <?php endforeach; ?>
	    </section>
	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>

	<?php if ( get_field('display-stories') ) { get_template_part('templates/section', 'stories'); } ?>

<?php endwhile; ?>

