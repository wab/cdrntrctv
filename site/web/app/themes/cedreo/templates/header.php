<header class="banner">
  <div class="row">
    <div class="columns">
       <a class="brand" href="<?= esc_url(home_url('/')); ?>" title="retour à l'accueil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo-brand.png" alt="<?php bloginfo('name'); ?>"></a>
    </div>
    <div class="columns">
      <button class="hamburger hamburger--elastic toggle-nav" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
        <span class="txt text-uppercase">menu <small class="show-for-large">(press ESC)</small></span>
      </button>
    </div>
  </div>
</header>
