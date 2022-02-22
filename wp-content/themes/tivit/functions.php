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


/**
 * Custom Meta Box
 * Nome: Cases
 */

function add_custom_meta_box() {
  add_meta_box(
    'custom_meta_box', // Nome do meta box
    'Cases', // Titulo do meta box
    'custom_meta_box_callback', // Função para exibir o conteúdo do meta box
    'page', // Tipo de post que o meta box será exibido
    'normal', // Posição do meta box
    'high' // Prioridade do meta box
  );
}

function custom_meta_box_callback( $post ) {

  
  // Verifica se o post tem um valor para o campo custom_meta_box
  $custom_meta_box_value = get_post_meta( $post->ID, 'custom_meta_box', true );
  // Se o valor do campo custom_meta_box estiver vazio, então o valor padrão é '0'
  if ( empty( $custom_meta_box_value ) ) {
    $custom_meta_box_value = '0';
  }
  // Cria um formulário para exibir o valor do campo custom_meta_box
  echo '<label for="custom_meta_box">';
  echo '<input type="checkbox" name="custom_meta_box" id="custom_meta_box" value="1" ' . checked( 1, $custom_meta_box_value, false ) . ' />';
  echo '</label>';
}
add_action('add_meta_boxes', 'add_custom_meta_box');