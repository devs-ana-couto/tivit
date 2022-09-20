<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>Tivit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <!-- Bootstrap -->
    <!-- CSS -->

    <?php
    // Path: header.php
    wp_head();

    $por_servico_port = get_theme_mod('por_servico_port');
    $por_industria_port = get_theme_mod('por_industria_port');
    $por_desafio_port = get_theme_mod('por_desafio_port');
    $por_servico_eng = get_theme_mod('por_servico_eng');
    $por_industria_eng = get_theme_mod('por_industria_eng');
    $por_desafio_eng = get_theme_mod('por_desafio_eng');
    $por_servico_esp = get_theme_mod('por_servico_esp');
    $por_industria_esp = get_theme_mod('por_industria_esp');
    $por_desafio_esp = get_theme_mod('por_desafio_esp');

    $rel_por_servico = get_terms('por-servico');


    $menu_name = 'landing-menu'; //menu slug
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $rel_por_industria = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));

    $menu_name02 = 'landing-menu-02'; //menu slug
    $locations02 = get_nav_menu_locations();
    $menu02 = wp_get_nav_menu_object($locations02[$menu_name02]);
    $rel_por_desafio = wp_get_nav_menu_items($menu02->term_id, array('order' => 'DESC'));


    function le_subpaginas($tipo_categoria, $valor_categoria)
    {
        $args = array(
            'post_type' => 'solucoes',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'orderby' => 'menu',
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => $tipo_categoria,
                    'field' => 'slug',
                    'terms' => $valor_categoria,
                ),
            ),
        );
        $the_query = new WP_Query($args);
        $resultado = array();
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $identif = $the_query->post->ID;
            $titulo = get_the_title();
            $link = get_permalink();
            $resultado[] = array('titulo' => $titulo, 'link' => $link);
        }
        wp_reset_postdata();
        wp_reset_query();
        return $resultado;
    }

    ?>
</head>
<body <?php body_class(); ?>>
<header class="fixed-top nav-header-new">
    <div class="barra-pesquisa">
        <div class="container">
            <div class="row">
                <div class="d-none order-lg-1 d-md-flex col-md-2 area-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" width="148px"
                         height="21px" class="logo-brand" alt="Logo Tivit">
                </div>
                <div class="col order-2 order-lg-2 col-md-9 area-pesquisar">
                    <form method="get" id="searchform" action="<?php home_url('/'); ?>">
                        <input type="text" id="s" name="s" class="pesquisar"/>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/nav/search-white.svg"
                             class="search-ico" alt="Search Tivit" onclick="jQuery('#searchform').submit()">
                    </form>
                </div>
                <div class="col-auto order-1 order-lg-3 d-flex justify-content-center align-items-center">
                    <button class="btn-close btn-close-white" type="button" onclick="close_bar_search()">
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 d-none d-xl-block">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand bg-transparent">
                    <div class="w-100">
                        <div class="row row-cols-lg-3 justify-content-around">
                            <div class="col-auto d-flex align-items-center">
                                <ul class="navbar-nav"
                                    data-anijs="if: DOMContentLoaded, on: document, do: bounceInLeft animated">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">A TIVIT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" id="solution-link-menu">SOLUÇÕES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">CASES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">CONTEÚDOS</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-auto d-flex justify-content-center align-items-center">
                                <a class="navbar-brand m-0" href="<?php echo get_site_url(); ?>"
                                   data-anijs="if: DOMContentLoaded, on: document, do: bounceInDown animated">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"
                                         width="148px" height="21px" class="logo-brand" alt="Logo Tivit">
                                </a>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav"
                                        data-anijs="if: DOMContentLoaded, on: document, do: bounceInRight animated">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">INOVAÇÃO</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">PESSOAS E CARREIRAS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">CONTATOS</a>
                                        </li>

                                        <!--<li class="nav-item">
                                            <a class="nav-link active" href="#">BR</a>
                                        </li>-->
                                        <!--<li class="nav-item">
                                            <a class="nav-link" href="#">ES</a>
                                        </li>-->
                                        <div class="search">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/nav/search-white.svg"
                                                 alt="Search Tivit" onclick="abre_barra_pesquisa();">
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 d-lg-none mobile">
        <nav class="navbar navbar-dark bg-transparent">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                        data-anijs="if: DOMContentLoaded, on: document, do: bounceInLeft animated">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"
                   data-anijs="if: DOMContentLoaded, on: document, do: bounceInDown animated">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" width="148px"
                         height="21px" class="logo-brand" alt="Logo Tivit">
                </a>
                <div class="search" data-anijs="if: DOMContentLoaded, on: document, do: bounceInRight animated">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/nav/search-white.svg"
                         alt="Search Tivit" onclick="abre_barra_pesquisa();">
                </div>
                <div class="offcanvas offcanvas-start text-bg-dark m-0 menu-expanded-mobile" tabindex="-1"
                     id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <button class="btn-close btn-close-white" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                                data-anijs="if: DOMContentLoaded, on: document, do: bounceInLeft animated">
                        </button>
                        <a class="navbar-brand" href="#"
                           data-anijs="if: DOMContentLoaded, on: document, do: bounceInDown animated">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" width="148px"
                                 height="21px" class="logo-brand" alt="Logo Tivit">
                        </a>
                        <div class="search" data-anijs="if: DOMContentLoaded, on: document, do: bounceInRight animated">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/nav/search-white.svg"
                                 alt="Search Tivit" onclick="abre_barra_pesquisa();">
                        </div>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">A TIVIT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="solution-link-menu" href="#">SOLUÇÕES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">CASES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">CONTEÚDOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">PESSOAS E CARREIRAS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">inovaÇÃO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">CONTATO</a>
                            </li>
                        </ul>
                        <div class="col-12 mt-5 language-box">
                            <div class="row justify-content-center gx-5">
                                <div class="col-auto">
                                    <a href="#" class="active">BR</a>
                                </div>
                                <div class="col-auto">
                                    <a href="#">US</a>
                                </div>
                                <div class="col-auto">
                                    <a href="#">ES</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-5 social-net">
                            <div class="row justify-content-center gx-5">
                                <div class="col-auto social-icon">
                                    <a href="#">
                                        <img height="40" src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/instagram-white.svg" alt="">
                                    </a>
                                </div>
                                <div class="col-auto social-icon">
                                    <a href="#">
                                        <img height="40" src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/linkedin-white.svg" alt="">
                                    </a>
                                </div>
                                <div class="col-auto social-icon">
                                    <a href="#">
                                        <img height="40" src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/facebook-white.svg" alt="">
                                    </a>
                                </div>
                                <div class="col-auto social-icon">
                                    <a href="#">
                                        <img height="40" src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/youtube-white.svg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </nav>
    </div>
</header>

<div class="modal fade" id="open-solution-menu">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>