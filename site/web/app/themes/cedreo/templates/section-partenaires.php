<?php 
// WP_Query arguments
$args_partenaires = array (
  'post_type'              => array( 'partner' )
);

// The Query
$partenaires = new WP_Query( $args_partenaires );

?>

<?php if ( $partenaires->have_posts() ) : ?>

	<section class="section partenaires">
		<div class="row column">
			<h2 class="cedreo-title">Nos <span>partenaires</span></h2>
				<ul class="list no-bullet">

			    <!-- the loop -->
			    <?php while ( $partenaires->have_posts() ) : $partenaires->the_post(); ?>

					<li class="item">
						<?php if( get_field('url') ) : ?>
						<a href="<?php the_field('url'); ?>"><img src="<?php the_field('logo'); ?>" alt="<?php the_title(); ?>"></a>
						<?php else : ?>
							<img data-src="<?php the_field('image_src'); ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" onload="lzld(this)" alt="<?php the_title(); ?>">
						<?php endif; ?>

					</li>

			    <?php endwhile; ?>
			    <!-- end of the loop --> 

    			</ul>
		</div>
	</section>

  	<?php wp_reset_postdata(); ?>

<?php endif; ?>

