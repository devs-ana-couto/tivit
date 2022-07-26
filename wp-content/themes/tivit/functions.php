<?php

/**
 * Chamada NavWalker
 */
function register_navwalker()
{
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}

add_action('after_setup_theme', 'register_navwalker');
add_filter('nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3);
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute($atts, $item, $args)
{
    if (is_a($args->walker, 'WP_Bootstrap_Navwalker')) {
        if (array_key_exists('data-toggle', $atts)) {
            unset($atts['data-toggle']);
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

/**
 * Função para carregamento de scripts e estilos
 */
function load_scripts()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/frameworks/css/bootstrap.min.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/frameworks/css/owl.carousel.min.css');
    wp_enqueue_style('owl-carousel-default', get_template_directory_uri() . '/assets/frameworks/css/owl.theme.default.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/frameworks/js/jquery.min.js', array(), '3.6.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/frameworks/js/bootstrap.min.js', array(), '5.1.3', true);
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/frameworks/js/bootstrap.bundle.min.js', array(), '5.1.3', true);
    wp_enqueue_script('owl-caroucel-js', get_template_directory_uri() . '/assets/frameworks/js/owl.carousel.js', array(), '5.1.3', true);
    wp_enqueue_script('tivit-carousel', get_template_directory_uri() . '/assets/js/tivit-carousel.js', array(), '1.0.0', true);
    wp_enqueue_script('tivit', get_template_directory_uri() . '/assets/js/tivit.js', array(), '1.0.0', true);
    wp_enqueue_script('tivit-slider-categoria', get_template_directory_uri() . '/assets/js/slider-ajax.js', array(), '1.0.0', true);

    /*=================================
      Registro de ajax
      =================================*/
    wp_register_script('ac-conteudo', get_template_directory_uri() . '/assets/js/tivit-conteudo.js', array('jquery'), '1.0.0', true);
    $translation_array = array('tivitAjaxUrl' => admin_url('admin-ajax.php'));
    wp_localize_script('ac-conteudo', 'referenciaTivit', $translation_array);
    wp_enqueue_script('ac-conteudo');

}

add_action('wp_enqueue_scripts', 'load_scripts');

/**
 * Função para adicionar o menu
 */
register_nav_menus(
    array(
        'header-menu' => __('Header Menu'),
        'header-menu-02' => __('Header Menu lateral'),
        'landing-menu' => __('Por Indústria'),
        'landing-menu-02' => __('Por Desafio'),
        'mobile-menu' => __('Mobile Menu'),
        'footer-menu' => __('Footer Menu'),
        'footer-menu-copyright' => __('Footer Copyright Menu'),
    )
);

// Include Meta Boxes
require_once(get_template_directory() . '/inc/pages/cases.php');
require_once(get_template_directory() . '/inc/post-types/post-types.php');
require_once(get_template_directory() . '/inc/conteudo.php');
require_once(get_template_directory() . '/inc/cases.php');
require_once(get_template_directory() . '/inc/clientes.php');
require_once(get_template_directory() . '/inc/faq.php');
require_once(get_template_directory() . '/inc/vaga.php');
require_once(get_template_directory() . '/inc/equipe.php');


// Include ACF (Metabox & Options Pages)
require_once(get_template_directory() . '/inc/theme.options.php');


// Include Page.Builders Functions
require_once(get_template_directory() . '/inc/page.builder/page.builder.php');


// Mobile Detect
require_once(get_template_directory() . '/libs/Mobile_Detect.php');

$detect = new Mobile_Detect;

/** Admin Enqueue **/
function admin_queue($hook)
{
    global $post;
    if ($hook == 'post-new.php' || $hook == 'post.php') {
        if ('solucoes' === $post->post_type) {
            wp_enqueue_script('tivit-solucoes', get_bloginfo('template_directory') . '/assets/js/tivit-solucoes.js', 'jquery', '', true);
        }
    }
}

add_action('admin_enqueue_scripts', 'admin_queue');


/*==============================================
    Configura Registros customizaveis
===============================================*/
function ac_customiza($wp_customize)
{
    $wp_customize->add_section('solucoes', array(
        'title' => 'Soluções',
        'priority' => 30,
    ));

    $wp_customize->add_setting('por_servico_port', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, 'por_servico_port', array(
            'label' => 'Por Serviço em português',
            'section' => 'solucoes',
            'settings' => 'por_servico_port',
            'type' => 'textarea',
        )
    ));
    $wp_customize->add_setting('por_servico_eng', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, 'por_servico_eng', array(
            'label' => 'Por Serviço em inglês',
            'section' => 'solucoes',
            'settings' => 'por_servico_eng',
            'type' => 'textarea',
        )
    ));
    $wp_customize->add_setting('por_servico_esp', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, 'por_servico_esp', array(
            'label' => 'Por Serviço em espanhol',
            'section' => 'solucoes',
            'settings' => 'por_servico_esp',
            'type' => 'textarea',
        )
    ));

    $wp_customize->add_setting('por_industria_port', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, 'por_industria_port', array(
            'label' => 'Por Indústria em português',
            'section' => 'solucoes',
            'settings' => 'por_industria_port',
            'type' => 'textarea',
        )
    ));
    $wp_customize->add_setting('por_industria_eng', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, 'por_industria_eng', array(
            'label' => 'Por Indústria em inglês',
            'section' => 'solucoes',
            'settings' => 'por_industria_eng',
            'type' => 'textarea',
        )
    ));
    $wp_customize->add_setting('por_industria_esp', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, 'por_industria_esp', array(
            'label' => 'Por Indústria em espanhol',
            'section' => 'solucoes',
            'settings' => 'por_industria_esp',
            'type' => 'textarea',
        )
    ));

    $wp_customize->add_setting('por_desafio_port', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, 'por_desafio_port', array(
            'label' => 'Por Desafio em português',
            'section' => 'solucoes',
            'settings' => 'por_desafio_port',
            'type' => 'textarea',
        )
    ));
    $wp_customize->add_setting('por_desafio_eng', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, 'por_desafio_eng', array(
            'label' => 'Por Desafio em inglês',
            'section' => 'solucoes',
            'settings' => 'por_desafio_eng',
            'type' => 'textarea',
        )
    ));
    $wp_customize->add_setting('por_desafio_esp', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, 'por_desafio_esp', array(
            'label' => 'Por Desafio em espanhol',
            'section' => 'solucoes',
            'settings' => 'por_desafio_esp',
            'type' => 'textarea',
        )
    ));
}

add_action('customize_register', 'ac_customiza');
