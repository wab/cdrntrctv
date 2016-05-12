<?php

// check if the repeater field has rows of data
if( have_rows('section') ): ?>

<section class="section">
	<div class="row columns">

	<?php 	// loop through the rows of data
    while ( have_rows('section') ) : the_row(); ?>

        <h2 class="cedreo-title subtitle"><?php the_sub_field('title'); ?></h2>

        <div class="media"><?php the_sub_field('media-video'); ?></div>
        <div class="contenu"><?php the_sub_field('contenu'); ?></div>

    <?php endwhile; ?>

	</div>

</section>

<?php endif; ?>
