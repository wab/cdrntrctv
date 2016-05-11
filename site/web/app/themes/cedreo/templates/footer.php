<?php if(!is_home() && !is_archive() && !is_singular('post')) : ?>
<?php get_template_part('templates/section', 'stories'); ?>
<?php endif; ?>

<?php if(is_front_page()): ?>

  <?php get_template_part('templates/section', 'partenaires'); ?>

<?php endif; ?>

<footer class="content-info">
  
  <div class="row">
    
    <div class="columns medium-3">
      <p class="text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo-cedreo-interactive-w.png" width="200" alt="<?php bloginfo('name'); ?>"></p>
    	<a href="#" class="button expanded primary hollow"><i class="fa fa-phone"></i> 02.90.10.10.10</a>
    	<a href="#" class="button expanded primary"><i class="fa fa-envelope"></i> Contactez-nous !</a>
    	<a href="#" class="button expanded primary"><i class="fa fa-twitter"></i> <span>Twitter</span></a>
      <a href="#" class="button expanded primary"><i class="fa fa-facebook"></i> <span>Facebook</span></a></a>
		  <a href="#" class="button expanded primary"><i class="fa fa-instagram"></i> <span>Instagram</span></a></a>
    </div>

    <div class="columns medium-5 large-4 large-offset-1">
    	<h2 class="sitemap-title">Les secteurs d'activité</h2>
    	<?php wp_nav_menu(['theme_location' => 'secteurs', 'menu_class' => 'menu vertical']); ?>
      <hr>
      <h2 class="sitemap-title">Nos solutions logicielles</h2>
      <?php wp_nav_menu(['theme_location' => 'logiciels', 'menu_class' => 'menu vertical']); ?>
    </div>
    <div class="columns medium-4 large-3 large-offset-1">
    	<h2 class="sitemap-title">Cedreo</h2>
    	<?php wp_nav_menu(['theme_location' => 'cedreo', 'menu_class' => 'menu vertical']); ?>
      <hr>
      <?php
        if (has_nav_menu('footer')) :
          wp_nav_menu(['theme_location' => 'footer', 'menu_class' => 'menu vertical']);
        endif;
      ?>
    </div>


  </div>
  
</footer>
