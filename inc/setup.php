<?php

if ( ! function_exists( 'anp_network_main_child_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function anp_network_main_child_setup() {
  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   * If you're building a theme based on Activist NetworkTheme v2, use a find and replace
   * to change 'anp-network-main' to the name of your theme in all the template files
   */
  load_theme_textdomain( 'anp-network-main-child', get_stylesheet_directory() . '/languages' );


}
endif; // anp_network_main_child_setup
add_action( 'after_setup_theme', 'anp_network_main_child_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function anp_network_main_child_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'anp_network_main_child_content_width', 640 );
}
add_action( 'after_setup_theme', 'anp_network_main_child_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function anp_network_main_child_widgets_init() {

}
add_action( 'widgets_init', 'anp_network_main_child_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function anp_network_main_child_scripts() {
    $parent_style = 'anp-network-main-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'anp_network_main_child_scripts' );

