<?php

/**
 * Chamada NavWalker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
  if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
    if ( array_key_exists( 'data-toggle', $atts ) ) {
      unset( $atts['data-toggle'] );
      $atts['data-bs-toggle'] = 'dropdown';
    }
  }
  return $atts;
}

/**
 * Função para carregamento de scripts e estilos
 */
function load_scripts(){
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.css');

  wp_enqueue_script('jquery', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.min.js', array(), '3.6.0', true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.js', array(), '5.1.3', true);
  wp_enqueue_script('tivit', get_template_directory_uri() . '/assets/js/tivit.js', array(), '1.0.0', true);


  
}
add_action('wp_enqueue_scripts', 'load_scripts');

/**
 * Função para adicionar o menu
 */
register_nav_menus( 
  array(
    'header-menu' => __('Header Menu'),
    'footer-menu' => __('Footer Menu'),
    'footer-menu-copyright' => __('Footer Copyright Menu'),
  )
);

// Inclui os arquivos de meta box
include_once( get_template_directory() . '/inc/pages/cases.php' );
include_once( get_template_directory() . '/inc/post-types/post-types.php' );