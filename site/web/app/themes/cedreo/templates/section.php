<?php

// check if the repeater field has rows of data
if( have_rows('section') ): ?>



	<?php 	// loop through the rows of data
    while ( have_rows('section') ) : the_row(); ?>

    <section class="section page-section">
		<div class="row">

	        <h2 class="cedreo-title subtitle large-8 large-centered columns"><?php the_sub_field('title'); ?></h2>

	        <div class="media medium-4 columns">

	        	<?php if (get_sub_field('media') == 'image') : ?>

	        		<?php 
	        			$image = get_sub_field('media-img');
	        			// thumbnail
						$size = 'square';
						$thumb = $image['sizes'][ $size ];
	        		?>

	        		<?php if( !empty($image) ): ?>

						<img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>

	        	<?php else : ?>
					
					<div class="flex-video widescreen">
						<iframe type="text/html" src="https://www.youtube.com/embed/<?php the_sub_field('media-video'); ?>?controls=0&color=white&theme=light" frameborder="0" allowfullscreen></iframe>
					</div>

	        	<?php endif ?>
	        		
	        	</div>

	        <div class="contenu medium-8 columns">
	        	<?php the_sub_field('contenu'); ?>
	        	<?php if ( get_sub_field('action-link')) : ?>
	        		<p><a href="<?php the_sub_field('action-link'); ?>" class="button"><?php the_sub_field('action-title'); ?></a></p>
	        	<?php endif ?>
	        	
	        </div>

		</div>
    </section>

    <?php endwhile; ?>

<?php endif; ?>
