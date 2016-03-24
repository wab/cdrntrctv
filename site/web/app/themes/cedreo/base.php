<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Breadcrumbs;


?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <div class="site-wrap" id="trigger">
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
        
        <?php if( !is_front_page() ) : ?>
          
          <div class="blog-breadcrumb">
            <div class="row column">
              <?= Breadcrumbs\breadcrumbs(); ?>
            </div>
          </div>

        <?php endif; ?>
        
        <?php if(is_home() || is_archive() || is_single()) : ?>
                  
          <nav class="navigation-categories">
            <div class="row column">
              <ul class="menu">
              <?php wp_list_categories('exclude=14&title_li='); ?>
              </ul>
            </div>
          </nav>

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
        
        <?php
          do_action('get_footer');
          get_template_part('templates/footer');
        ?>

      </div> <!-- push-wrap -->

    <?php get_template_part('templates/menu'); ?>
      
    </div> <!-- site-wrap -->
    
    <?php wp_footer(); ?>
  </body>
</html>
