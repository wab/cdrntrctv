<?php

/**
 * Template Name: Solutions logicielles 3D
 */


?>
<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/page', 'header'); ?>
	<div class="section logiciels">
		<div class="row">
			<header class="columns large-8 large-centered">
				<h1 class="cedreo-title text-center"><?php the_field('subtitle'); ?></h1>
			</header>
		</div>
		<?php if(get_field('video_id')): ?>
		<div class="row">
			<div class="columns large-6">
				<?php the_content(); ?>
			</div>
			<div class="columns large-6">
				<div class="flex-video widescreen">
					<iframe type="text/html" src="https://www.youtube.com/embed/<?php the_field('video_id'); ?>?controls=0&color=white&theme=light" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>

	<?php get_template_part('templates/section'); ?>

	<?php

	// check if the repeater field has rows of data
	if( have_rows('sectors') ): ?>

	<section class="section sectors">

		<div class="row column text-center">
		
			<?php if(get_field('sectors_txt')) { ?> <div class="lead"><?php the_field('sectors_txt');?></div> <?php } ?>

			<ul class="no-bullet list">

			<?php 	// loop through the rows of data
		    while ( have_rows('sectors') ) : the_row(); ?>


		    <?php 

			$sector = get_sub_field('sector');

			if( $sector ): ?>

			    <?php foreach( $sector as $post): // variable must be called $post (IMPORTANT) ?>
			        <?php setup_postdata($post); ?>
			        <li class="item">
		        		<p><a href="<?php the_permalink(); ?>"><?php if(get_sub_field('img')) {?> <img src="<?php the_sub_field('img') ?>" alt="picto"> <?php } ?></a></p>
		        		<p><?php the_title(); ?></p>

		        	</li>
			    <?php endforeach; ?>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>

		        

		    <?php endwhile; ?>

		    </ul>

	  	</div>

	</section>

	<?php endif; ?>

	<?php 

		$images = get_field('gallery');
		$slide = 0;
	if( $images ): ?>


	<section class="section gallery">
		<div class="row text-center">
			<div class="columns large-8 large-centered">
				
				<h3 class="cedreo-title">Exemples de rendus réalisés grace à <span><?php the_title(); ?></span></h3>
				<?php if(get_field('txt_gallery')) { echo '<p class="lead">' . the_field('txt_gallery') . '</p>'; } ?>

			    <div class="owl-carousel gallery-carousel" data-slider-id="1">
		            <?php foreach( $images as $image ): ?>
		                <div class="item" data-thumb="">
		                    <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
		                    <p><?php echo $image['caption']; ?></p>
		                </div>
		            <?php endforeach; ?>
			    </div>
			    <div class="owl-thumbs show-for-medium" data-slider-id="1">
		            <?php foreach( $images as $image ): ?>
		                <button class="owl-thumb-item"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" /></button>
		            <?php endforeach; ?>
			    </div>
			</div>
		</div>
	</section>

	<?php endif; ?>


	<?php if(get_field('cta')): ?>

	<section class="cta">
		<div class="row">
			<div class="columns medium-8 lead">
				<?php if (get_field('cta_img')) : ?>
					<img src="<?php the_field('cta_img') ?>" alt="" class="pull-left"> 
				<?php endif; ?>
				<?php the_field('cta');?></div>
			<div class="columns medium-4"><a href="<?php bloginfo('url') ?>/contact" class="button large">contactez-nous</a></div>
		</div>
	</section>

	<?php endif; ?>


	<?php if ( get_field('display-stories') ) { get_template_part('templates/section', 'stories'); } ?>

<?php endwhile; ?>

