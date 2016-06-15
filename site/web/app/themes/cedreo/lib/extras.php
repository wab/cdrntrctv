<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


/**
 * Disable Emojicons()
 */

function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

}

add_action( 'init', __NAMESPACE__ . '\\disable_wp_emojicons' );

function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

// Custom logo on login page
function custom_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            width: 50%;
            height: 150px;
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo-cedreo-interactive-b.png);
            background-size: 100%;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts',  __NAMESPACE__ . '\\custom_login_logo' );

// rename post to actus
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Actualités';
    $submenu['edit.php'][5][0] = 'Actualités';
    $submenu['edit.php'][10][0] = 'Ajouter une actualité';
    echo '';
}
add_action( 'admin_menu', __NAMESPACE__ . '\\change_post_menu_label' );

// hide admin bar
function my_function_admin_bar() {
    return false;
}
add_filter( 'show_admin_bar' , __NAMESPACE__ . '\\my_function_admin_bar');


// add login link in footer menu
function add_login_logout_link($items, $args) {
  if( $args->theme_location == 'footer')  {
        $loginoutlink = wp_loginout($_SERVER['REQUEST_URI'], false); 
        $items .= '<li>'. $loginoutlink .'</li>'; 
  }
  return $items; 
}
//add_filter('wp_nav_menu_items', __NAMESPACE__ . '\\add_login_logout_link', 10, 2);


// Async load
function load_async_scripts($url) {
  if ( strpos( $url, '#asyncload') === false )
      return $url;
  else if ( is_admin() )
      return str_replace( '#asyncload', '', $url );
  else
return str_replace( '#asyncload', '', $url )."' async='async"; 
}
add_filter( 'clean_url', __NAMESPACE__ . '\\load_async_scripts', 11, 1 );


// Remove types metabox

function rm_metabox() {

    return false;
}
add_filter( 'types_information_table', __NAMESPACE__ .'\\rm_metabox' );
