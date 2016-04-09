<?php
/**
 * Template Name: Page contact
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/page', 'header'); ?>
	<div class="section contenu">
		<div class="row">
			<div class="columns">
				<div id="map"></div>
			</div>
			<div class="columns large-8 end">
				<?php if (get_field('subtitle')) : ?>
					<h2 class="cedreo-title subtitle"><?php the_field('subtitle'); ?></h2>
				<?php endif; ?>
				<?php get_template_part('templates/content', 'page'); ?>
			</div>
		</div>
	</div>

	<script type="text/javascript">

		var map;
		function initMap() {
			var LatLng = {lat: 47.2392585, lng: -1.7303783};
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
