<?php

require_once('php/wp_bootstrap_navwalker.php');

/*Navigation Menus https://www.yogihosting.com/integrate-bootstrap-menu-wordpress-website/*/
function jah_register_nav_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'jah_register_nav_menu' );
/*End*/

function jah_theme_support() {
  add_theme_support('title-tag');
  add_theme_support('widgets');
  add_theme_support('menus');
  add_theme_support('custom-background');
  add_theme_support('editor-color-palette');
  add_theme_support('editor-gradient-presets');
  add_theme_support('editor-styles');

  /** "Essential" theme support **/
  /** automatic feed link*/
  add_theme_support( 'automatic-feed-links' );

  /** post formats */
  $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
  add_theme_support( 'post-formats', $post_formats);

  /** post thumbnail **/
  add_theme_support( 'post-thumbnails' );

  /** HTML5 support **/
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

  /** refresh widgest **/
  add_theme_support( 'customize-selective-refresh-widgets' );

  /** custom background **/
  $bg_defaults = array(
      'default-image'          => '',
      'default-preset'         => 'default',
      'default-size'           => 'cover',
      'default-repeat'         => 'no-repeat',
      'default-attachment'     => 'scroll',
  );
  add_theme_support( 'custom-background', $bg_defaults );

  /** custom header **/
  $header_defaults = array(
      'default-image'          => '',
      'width'                  => 300,
      'height'                 => 60,
      'flex-height'            => true,
      'flex-width'             => true,
      'default-text-color'     => '',
      'header-text'            => true,
      'uploads'                => true,
  );
  add_theme_support( 'custom-header', $header_defaults );

  /** custom log **/
  add_theme_support( 'custom-logo', array(
      'height'      => 60,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description' ),
  ) );

}
add_action('after_setup_theme', 'jah_theme_support');

function jah_register_styles() {

  wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', array());
  wp_enqueue_style('simple-theme', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');

}
add_action( 'wp_enqueue_scripts', 'jah_register_styles');

function jah_register_scripts() {

  wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.6', true);
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array(), '4', true);

}
add_action( 'wp_enqueue_scripts', 'jah_register_scripts');


/** * Filter the except length to 20 words. */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

?>
