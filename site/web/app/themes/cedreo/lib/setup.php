<?php

namespace Roots\Sage\Setup;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  // Enable features from Soil when plugin is activated
  // https://roots.io/plugins/soil/
  add_theme_support('soil-clean-up');
  add_theme_support('soil-nav-walker');
  add_theme_support('soil-nice-search');
  add_theme_support('soil-jquery-cdn');
  add_theme_support('soil-relative-urls');
  //add_theme_support('soil-js-to-footer');
  add_theme_support('soil-disable-asset-versioning');
  add_theme_support('soil-disable-trackbacks');
  add_theme_support('soil-google-analytics', 'UA-16868440-1');

  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'secteurs' => __('Activity Area', 'cedreo')
  ]);

  register_nav_menus([
    'logiciels' => __('Software', 'cedreo')
  ]);

  register_nav_menus([
    'cedreo' => __('Company', 'cedreo')
  ]);
  
  register_nav_menus([
    'footer' => __('Pied de page', 'cedreo')
  ]);

  register_nav_menus([
    'lg' => __('langues', 'cedreo')
  ]);

  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size( 570, 280, true );
  add_image_size( 'banner', 1200, 500, true );
  add_image_size( 'square', 400, 400, true );
  add_image_size( 'testimony', 125, 125, true );
  add_image_size( 'equipe', 360, 480, true );


  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Use main stylesheet for visual editor
  // To add custom styles edit /assets/styles/layouts/_tinymce.scss
  add_editor_style(Assets\asset_path('styles/main.css'));
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'sage'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Footer', 'sage'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {
  static $display;

  isset($display) || $display = !in_array(true, [
    // The sidebar will NOT be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    is_404(),
    is_front_page(),
    is_page(),
    is_page_template('template-custom.php'),
    is_singular('logiciels'),
    is_post_type_archive( 'logiciels' )
  ]);

  return apply_filters('sage/display_sidebar', $display);
}

/**
 * Theme assets
 */
function assets() {
  wp_register_style('gfonts', 'https://fonts.googleapis.com/css?family=Lato:400,700', false, null);
  wp_register_style('main', Assets\asset_path('styles/main.css'), ['gfonts'], false, null);

  wp_register_script('modernizr', Assets\asset_path('scripts/modernizr.js'), [], null, false);
  wp_register_script('main', Assets\asset_path('scripts/main.js'), ['jquery'], true, true);
  wp_register_script('lazyload', Assets\asset_path('scripts/lazyload.js'), [], null, false);
  wp_register_script('gmaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBPoKVn0MG03hVa3sQTmN-YM8qBW-LNog0&callback=initMap', ['jquery'], null, true);

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  if (is_page_template('page-contact.php')) {
    wp_enqueue_script('gmaps');
  }

  wp_enqueue_style('main');

  wp_enqueue_script('modernizr');
  wp_enqueue_script('lazyload');
  wp_enqueue_script('main');

}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);

// Async load
function wsds_defer_scripts( $tag, $handle, $src ) {

  // The handles of the enqueued scripts we want to defer
  $defer_scripts = array( 
    'modernizr',
    'main'
  );

    if ( in_array( $handle, $defer_scripts ) ) {
        return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
    }
    
    return $tag;
} 
add_filter( 'script_loader_tag', __NAMESPACE__ .'\\wsds_defer_scripts', 10, 3 );

// Async load
function wsds_async_scripts( $tag, $handle, $src ) {

  // The handles of the enqueued scripts we want to defer
  $defer_scripts = array( 
    
  );

    if ( in_array( $handle, $defer_scripts ) ) {
        return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
    }
    
    return $tag;
} 
add_filter( 'script_loader_tag', __NAMESPACE__ .'\\wsds_async_scripts', 10, 3 );

