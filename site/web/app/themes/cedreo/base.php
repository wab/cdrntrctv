<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Breadcrumbs;


?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
      <!--[if IE]>
        <div class="alert alert-warning">
          <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
        </div>
      <![endif]-->
       <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>

      <div class="push-wrap">

        <?php if(is_home() || is_archive() && !is_post_type_archive('logiciels') || is_singular('post')) : ?>


          <div class="banshadow">
            <header class="page-header section">

              <?php if( !is_singular('post') ) : ?>
                <h1 class="page-title cedreo-title">l'Actualité <span>Cedreo</span></h1>
              <?php else: ?>
                <p class="h1 page-title cedreo-title">l'Actualité <span>Cedreo</span></p>
              <?php endif; ?>

              <?= Breadcrumbs\breadcrumbs(); ?>

            </header>
          </div>

        <?php get_template_part('templates/menu', 'categories'); ?>

        <?php endif; ?>

        <div class="container" role="document">

            <main class="main">
              <?php include Wrapper\template_path(); ?>
            </main><!-- /.main -->

            <?php if (Setup\display_sidebar()) : ?>

              <aside class="sidebar">
                <?php include Wrapper\sidebar_path(); ?>
              </aside><!-- /.sidebar -->
            <?php endif; ?>

        </div><!-- /.container -->


        <div class="cookies-message text-center">
        <?php  _e( 'Ce site utilise Google Analytics. En continuant à naviguer, vous nous autorisez à déposer des cookies à des fins de mesure d’audience.', 'sage' ); ?>
           <a class="button tiny hollow"><i class="fa fa-check"></i> <?php _e('Accepter', 'sage'); ?></a>
        </div>

        <?php
          do_action('get_footer');
          get_template_part('templates/footer');
        ?>

      </div> <!-- push-wrap -->

    <?php get_template_part('templates/menu'); ?>

    <?php wp_footer(); ?>

    <?php get_template_part('templates/marketing'); ?>
  </body>
</html>
