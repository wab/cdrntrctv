<header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>" title="retour à l'accueil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo-brand.png" alt="<?php bloginfo('name'); ?>"></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
      <ul class="nav nav-inline">
        <!-- <li class="nav-item"><a class="nav-link" href="#">languages</a></li> -->
        <li class="nav-item">
          <button class="hamburger hamburger--elastic toggle-nav" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
            <span class="txt text-uppercase">menu <small>(hit ESC)</small></span>
          </button>
        </li>
      </ul>
    </nav>
  </div>
</header>
