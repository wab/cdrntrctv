<?php
/**
 * Template Name: Accueil
 */
?>

<?php while (have_posts()) : the_post(); ?>

<?php

// Carsousel
if( have_rows('carousel') ): ?>

<div class="carousel owl-carousel banshadow">

	<?php 	// loop through the rows of data
    while ( have_rows('carousel') ) : the_row(); ?>

        <div class="item" style="background-image: url(<?php the_sub_field('image'); ?>)">
        	<?php if( get_sub_field('text') || get_sub_field('link')) : ?>
	        <div class="row column item-wrap <?php if( get_sub_field('right') ) { echo 'right'; } ?>">

				<div class="item-box">

					<?php if( get_sub_field('text') ) : ?>
					<p class="lead"><?php the_sub_field('text'); ?></p>
					<?php endif; ?>

					<?php if( get_sub_field('link') || get_sub_field('e-link') ) : ?>

						<?php if (get_sub_field('link-type') == 'Interne') {
							$urlink = get_sub_field('link');
						} else {
							$urlink = get_sub_field('e-link');;
						} ?>
						
						<a href="<?php echo $urlink; ?>" class="button"><?php the_sub_field('link-txt'); ?>  &rarr;</a>


					<?php endif; ?>
					
				</div>

			</div>
			<?php endif; ?>
        </div>

    <?php endwhile; ?>

</div>

<?php endif; ?>

<div class="section introduction">
	<div class="row">
		<div class="columns medium-6">
			
			<?php if( get_field('subtitle') ) : ?>
			<h1 class="cedreo-title"><?php the_field('subtitle'); ?></h1>
			<?php else : ?>
			<h1 class="cedreo-title"><?php bloginfo('description'); ?></h1>
			<?php endif; ?>
			
			<?php get_template_part('templates/content', 'page'); ?>
		</div>
		<?php if( get_field('quote') ) : ?>
		<div class="columns medium-6">
			<blockquote class="homequote"><p><?php the_field('quote'); ?></p></blockquote>
		</div>
		<?php endif; ?>
	</div>
</div>

<?php

// Logiciels
if( have_rows('l_items') ): ?>

<section class="section cibles">
	<div class="row column">

		<?php if (get_field('l_title')) : ?>
		<h2 class="cedreo-title"><?php the_field('l_title'); ?></h2>
		<?php endif; ?>

		<div class="row grid medium-up-2">

		<?php 	// loop through the rows of data
	    while ( have_rows('l_items') ) : the_row(); ?>

		        <div class="columns">
					<figure class="effect-ming">

						<?php 

						$image = get_sub_field('img');
						$size = 'post-thumbnail';
						$thumb = $image['sizes'][ $size ];

						if( !empty($image) ): ?>

							<img data-src="<?php echo $thumb; ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" onload="lzld(this)" alt="<?php echo $image['alt']; ?>" />

						<?php endif; ?>

						<?php if( get_sub_field('text') ) : ?>
						<figcaption>
							<h3 class="h2 grid-title"><?php the_sub_field('text'); ?></h3>
							<div><span class="acces"><?php the_sub_field('link_txt'); ?> &rarr;</span></div>
							<a href="<?php the_sub_field('link'); ?>">y accéder</a>
						</figcaption>	
						<?php endif; ?>
						
					</figure>

				</div>

	    <?php endwhile; ?>

	</div>

	</div>
</section>

<?php endif; ?>

<?php get_template_part('templates/section', 'arguments'); ?>
<?php get_template_part('templates/section', 'stories'); ?>


<?php endwhile; ?>

