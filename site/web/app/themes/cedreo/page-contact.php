<?php
/**
 * Template Name: Page contact
 */
?>

<?php while (have_posts()) : the_post(); ?>

	<?php get_template_part('templates/page', 'header'); ?>

	<div class="section contenu">
		<div class="row">

			<?php $location = get_field('geoloc');

				if( !empty( $location ) ): ?>

				<div class="columns">
					<div id="map"></div>
				</div>

				<?php endif; ?>

			<div class="columns large-4">
				<?php 

				$image = get_field('image');
				$size = 'square';
				$thumb = $image['sizes'][ $size ];

				if( !empty($image) ): ?>

					<p><img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" class="img-rounded" /></p>

				<?php endif; ?>
				
				<?php if ( get_field('adresse') || get_field('telephone') ) : ?>
				<ul class="no-bullet list-contact">
					<?php if ( get_field('adresse') ) { echo '<li class="item address"><address>' . get_field('adresse') . '</address></li>'; } ?>
					<?php if ( get_field('telephone') ) { echo '<li class="item tel">' . get_field('telephone') . '</li>'; } ?>
				</ul>
				<?php endif; ?>

			</div>

			<div class="columns large-8">
				<?php if (get_field('subtitle')) : ?>
					<h2 class="cedreo-title subtitle"><?php the_field('subtitle'); ?></h2>
				<?php endif; ?>
				<?php get_template_part('templates/content', 'page'); ?>
				<p class="lead"><i class="fa fa-envelope"></i> Contactez-nous</p>
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
			</div>
		</div>
	</div>

	<?php if ( get_field('display-stories') ) { get_template_part('templates/section', 'stories'); } ?>

	<script type="text/javascript">

		var map, lat, lng;
		
		lat = <?php echo $location['lat']; ?>;
		lng = <?php echo $location['lng']; ?>;
		
		function initMap() {
			var LatLng = {lat: lat, lng: lng};
			var image = '<?php echo get_template_directory_uri(); ?>/dist/images/marker.png';
			
			map = new google.maps.Map(document.getElementById('map'), {
				center: LatLng,
				zoom: 11
			});

			var marker = new google.maps.Marker({
			    position: LatLng,
			    map: map,
			    draggable: true,
    			animation: google.maps.Animation.DROP,
    			icon: image,
			    title: 'Cedreo'
			});

			marker.addListener('click', toggleBounce);
		}

		function toggleBounce() {
		  if (marker.getAnimation() !== null) {
		    marker.setAnimation(null);
		  } else {
		    marker.setAnimation(google.maps.Animation.BOUNCE);
		  }
		}

    </script>

<?php endwhile; ?>
