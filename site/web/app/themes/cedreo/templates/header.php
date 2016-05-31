<header class="banner">
  <div class="row column">
    <div class="text-left">
       <a class="brand" href="<?php bloginfo('url'); ?>/" title="retour à l'accueil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo-cedreo.svg" width="250" alt="<?php bloginfo('name'); ?>"></a>
    </div>
    <div class="text-right">
      
      <button class="hamburger hamburger--elastic toggle-nav" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
        <span class="txt">menu <small class="show-for-large">(press ESC)</small></span>
      </button>
      <?php
          if (has_nav_menu('lg')) :
            wp_nav_menu(['theme_location' => 'lg', 'menu_class' => 'menu simple lg show-for-medium']);
          endif;
      ?>
    </div>
  </div>
</header>
