<?php if(!is_home() && !is_archive() && !is_singular('post')) : ?>
<?php get_template_part('templates/section', 'stories'); ?>
<?php endif; ?>

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
