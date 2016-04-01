<section class="section stories">
	<div class="row column">
		<h2 class="cedreo-title"><span>Nos success</span> stories</h2>
		<div class="owl-carousel stories-carousel">
			<div class="item text-center">
				<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/stories/nexity.png" alt=""></p>
				<p class="lead"><span class="stat" id="n1" data-number="5000">5000</span><br><strong>appartements</strong><br>visualisables en très haute qualité</p>
			</div>
			<div class="item text-center">
				<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/stories/maisons-france-confort.png" alt=""></p>
				<p class="lead"><span class="stat" id="n2" data-number="250">250</span><br><strong>points de vente</strong><br>équipés du logiciel</p>
			</div>
			<div class="item text-center">
				<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/stories/lundia.png" alt=""></p>
				<p class="lead"><span class="stat">x</span><span class="stat" id="n3" data-number="10">10</span><br><strong>le nombre de clients</strong><br>dans toute la France</p>
			</div>
			<div class="item text-center">
				<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/stories/fermob.png" alt=""></p>
				<p class="lead"><span class="stat" id="n4" data-number="95">95</span><span class="stat">%</span><br><strong>de satisfaction client</strong><br>sur l'année 2015</p>
			</div>
			<div class="item text-center">
				<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/stories/nexity.png" alt=""></p>
				<p class="lead"><span class="stat">5000</span><br><strong>appartements</strong><br>visualisables en très haute qualité</p>
			</div>
			<div class="item text-center">
				<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/stories/maisons-france-confort.png" alt=""></p>
				<p class="lead"><span class="stat">250</span><br><strong>points de vente</strong><br>équipés du logiciel</p>
			</div>
		</div>
		<div class="arrows">
			<a href="#" class="prev"><i class="fa fa-chevron-left"></i></a>
			<a href="#" class="next"><i class="fa fa-chevron-right"></i></a>
		</div>
	</div>
</section>

<?php if(is_front_page()): ?>

<section class="section partenaires">
	<div class="row column">
		<h2 class="cedreo-title">Nos <span>partenaires</span></h2>
		<ul class="list no-bullet">
			<li class="item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/partenaires/bamboo.png" alt=""></a></li>
			<li class="item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/partenaires/total.png" alt=""></a></li>
			<li class="item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/partenaires/sodero-gestion.png" alt=""></a></li>
			<li class="item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/partenaires/ministere-education.png" alt=""></a></li>
			<li class="item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/partenaires/reseau-entreprendre.png" alt=""></a></li>
		</ul>
	</div>
</section>

<?php endif; ?>

<footer class="content-info">
  
  <div class="row">
    
    <div class="column medium-6">
    	<?php
		    if (has_nav_menu('footer')) :
		      wp_nav_menu(['theme_location' => 'footer', 'menu_class' => 'nav-footer menu simple']);
		    endif;
		?>
    </div>

    <div class="column medium-2">
    	<?php
		    if (has_nav_menu('lg')) :
		      wp_nav_menu(['theme_location' => 'lg', 'menu_class' => 'menu simple']);
		    endif;
		?>
    </div>

	<div class="column medium-4">
		
		<ul class="reseaux">
			<li>suivez-nous sur :</li>
    		<li><a href="#"><i class="fa fa-twitter"></i> <span class="show-for-sr">Twitter</span></a></li>
			<li><a href="#"><i class="fa fa-facebook"></i> <span class="show-for-sr">Facebook</span></a></a></li>
    	</ul>
	</div>

  </div>
  
</footer>
