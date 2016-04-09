<a id="triggerNumbers"></a>
<?php

// Logiciels
if( have_rows('a_items') ): ?>

<section class="section arguments">
	<div class="row column">

		<?php if (get_field('a_title')) : ?>
		<h2 class="cedreo-title"><?php the_field('a_title'); ?></h2>
		<?php endif; ?>

		<?php if (get_field('a_text')) : ?>
		<p class="lead text-center"><?php the_field('a_text'); ?></p>
		<?php endif; ?>

		<div class="row">

		<?php 	// loop through the rows of data
	    while ( have_rows('a_items') ) : the_row(); ?>

		        <div class="columns medium-4 text-center">

		        	<?php if (get_sub_field('img')) : ?>
					<p class="argpicto"><img src="<?php the_sub_field('img'); ?>" alt=""></p>
					<?php endif; ?>

		        	<?php if (get_sub_field('title')) : ?>
					<h3 class="argument-title cedreo-title"><?php the_sub_field('title'); ?></h3>
					<?php endif; ?>

		        	<?php if (get_sub_field('text')) : ?>
					<p><?php the_sub_field('text'); ?></p>
					<?php endif; ?>


				</div>

	    <?php endwhile; ?>

	</div>
</section>

<?php endif; ?>