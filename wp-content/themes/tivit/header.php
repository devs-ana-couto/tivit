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
    $url_atual = $_SERVER['REQUEST_URI'];
    if (strpos($_SERVER['REQUEST_URI'], '/en/') === false) {
        if (strpos($_SERVER['REQUEST_URI'], '/es/') === false) {
            $idioma = 'PT';
        } else {
            $idioma = 'ES';
        }
    // } elseif (strpos($_SERVER['REQUEST_URI'], '/es/') === false) {
    //     $idioma = 'ES';
    } else {
        $idioma = 'EN';
    }


    if ($idioma=='PT') {
        $por_servico_port = get_theme_mod('por_servico_port');
    } elseif ($idioma=='ES') {
        $por_servico_port = get_theme_mod('por_servico_esp');
    } else {
        $por_servico_port = get_theme_mod('por_servico_eng');
    }
    // $por_industria_port = get_theme_mod('por_industria_port');
    // $por_desafio_port = get_theme_mod('por_desafio_port');
    $por_servico_eng = get_theme_mod('por_servico_eng');
    // $por_industria_eng = get_theme_mod('por_industria_eng');
    // $por_desafio_eng = get_theme_mod('por_desafio_eng');
    $por_servico_esp = get_theme_mod('por_servico_esp');
    // $por_industria_esp = get_theme_mod('por_industria_esp');
    // $por_desafio_esp = get_theme_mod('por_desafio_esp');

    $rel_por_servico = get_terms('por-servico');


    $menu_name = 'landing-menu'; //menu slug
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    if (isset($menu->term_id)) {
        $rel_por_industria = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));
    } else {
        $rel_por_industria = array();
    }

    $menu_name02 = 'landing-menu-02'; //menu slug
    $locations02 = get_nav_menu_locations();
    $menu02 = wp_get_nav_menu_object($locations02[$menu_name02]);
    if (isset($menu02->term_id)) {
        $rel_por_desafio = wp_get_nav_menu_items($menu02->term_id, array('order' => 'DESC'));
    } else {
        $rel_por_desafio = array();
    }


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
<style>
/* latin-ext */
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(<?php echo get_template_directory_uri(); ?>/assets/fonts/titillium_web_300_le.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(<?php echo get_template_directory_uri(); ?>/assets/fonts/titillium_web_300_l.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(<?php echo get_template_directory_uri(); ?>/assets/fonts/titillium_web_400_le.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(<?php echo get_template_directory_uri(); ?>/assets/fonts/titillium_web_400_l.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(<?php echo get_template_directory_uri(); ?>/assets/fonts/titillium_web_600_le.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(<?php echo get_template_directory_uri(); ?>/assets/fonts/titillium_web_600_l.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(<?php echo get_template_directory_uri(); ?>/assets/fonts/titillium_web_700_le.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(<?php echo get_template_directory_uri(); ?>/assets/fonts/titillium_web_700_l.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Viga';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(<?php echo get_template_directory_uri(); ?>/assets/fonts/viga_400_le.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Viga';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(<?php echo get_template_directory_uri(); ?>/assets/fonts/viga_400_l.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5MZ555T');</script>
<!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?>>
<script type="text/javascript" id="PrivallyApp" src="https://app.privally.global/app.js" pid="71bce7-9fb716" async></script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5MZ555T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<input type="hidden" id="change_icon_hamburguer_color_tbanks" name="change_icon_hamburguer_color_tbanks" value="<?php echo get_template_directory_uri(); ?>/assets/icons/nav/hamburguer-white.svg" />
<input type="hidden" id="change_icon_search_color_tbanks" name="change_icon_search_color_tbanks" value="<?php echo get_template_directory_uri(); ?>/assets/icons/navsearch-white.svg" />
<input type="hidden" id="change_logo_on_scroll_desktop" name="change_logo_on_scroll_desktop" value="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" />
<input type="hidden" id="change_logo_on_scroll_desktop_original" name="change_logo_on_scroll_desktop_original" value="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" />
<input type="hidden" id="change_icon_hamburguer_color_tdx" name="change_icon_hamburguer_color_tdx" value="<?php echo get_template_directory_uri(); ?>/assets/icons/nav/hamburguer-white.svg" />
<input type="hidden" id="change_icon_search_color_tdx" name="change_icon_search_color_tdx" value="<?php echo get_template_directory_uri(); ?>/assets/icons/nav/search-white.svgg" />


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
        <div class="container" data-anijs="if: DOMContentLoaded, on: document, do:  fadeInDown animated">
            <div class="row">
                <nav class="navbar navbar-expand bg-transparent">
                    <div class="w-100">
                        <div class="row justify-content-around">
                            <div class="col-auto d-flex align-items-center">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'header-menu',
                                    'depth' => 1, // 1 = no dropdowns, 2 = with dropdowns.
                                    'container' => '',
                                    'container_class' => '',
                                    'container_id' => '',
                                    'menu_class' => 'navbar-nav mr-auto',
                                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker' => new WP_Bootstrap_Navwalker(),
                                ));

                                ?>
                                <!--<ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">A TIVIT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link solution-link-menu" href="#"
                                           id="solution-link-menu">SOLUÇÕES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">CASES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">CONTEÚDOS</a>
                                    </li>
                                </ul>-->
                            </div>
                            <div class="col-auto d-flex justify-content-center align-items-center">
                                <a class="navbar-brand m-0" href="<?php echo get_site_url(); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"
                                         width="148px" height="21px" class="logo-brand" alt="Logo Tivit">
                                </a>
                            </div>
                            <div class="col-auto d-flex align-items-center">

                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'header-menu-02',
                                        'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                        'container' => '',
                                        'container_class' => '',
                                        'container_id' => '',
                                        'menu_class' => 'navbar-nav mr-auto',
                                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker' => new WP_Bootstrap_Navwalker(),
                                    ));
                                    ?>
                                    <ul class="navbar-nav">

                                        <!--<li class="nav-item">
                                            <a class="nav-link" href="#">INOVAÇÃO</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">PESSOAS E CARREIRAS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">CONTATOS</a>
                                        </li>-->

                                        <li class="nav-item nav-language">
                                            <?php
                                            if ($idioma != 'PT') {
                                                echo '<a href="'.get_permalink(pll_get_post(get_the_ID(),'pt')).'" class="nav-language">BR</a> / ';
                                            }
                                            if ($idioma != 'EN') {
                                                echo '<a href="'.get_permalink(pll_get_post(get_the_ID(),'en')).'" class="nav-language">EN</a>';
                                            }
                                            if ($idioma == 'PT') {
                                                echo ' / ';
                                            }
                                            if ($idioma != 'ES') {
                                                echo '<a href="'.get_permalink(pll_get_post(get_the_ID(),'es')).'" class="nav-language">ES</a>';
                                            }
                                            ?>
                                        </li>
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
    <div class="container-fluid p-0 d-xl-none mobile">
        <nav class="navbar navbar-dark bg-transparent">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#canvaMenuMobile" aria-controls="canvaMenuMobile">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" width="148px"
                         height="21px" class="logo-brand" alt="Logo Tivit">
                </a>
                <div class="search">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/nav/search-white.svg"
                         alt="Search Tivit" onclick="abre_barra_pesquisa();">
                </div>
                <div class="offcanvas offcanvas-start text-bg-dark m-0 menu-expanded-mobile" tabindex="-1"
                     id="canvaMenuMobile" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <button class="btn-close btn-close-white" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#canvaMenuMobile" aria-controls="offcanvasDarkNavbar">
                        </button>
                        <a class="navbar-brand" href="<?php echo get_site_url(); ?>"
                           data-anijs="if: DOMContentLoaded, on: document, do: bounceInDown animated">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" width="148px"
                                 height="21px" class="logo-brand" alt="Logo Tivit">
                        </a>
                        <div class="search" data-anijs="if: DOMContentLoaded, on: document, do: bounceInRight animated">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/nav/search-white.svg"
                                 alt="Search Tivit" onclick="abre_barra_pesquisa();">
                        </div>
                    </div>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'mobile-menu',
                        'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container' => 'div',
                        'container_class' => 'offcanvas-body',
                        'container_id' => '',
                        'menu_class' => 'navbar-nav justify-content-end flex-grow-1 pe-3',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker(),
                    ));
                    ?>
                    <!--<div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">A TIVIT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link solution-link-menu" id="solution-link-menu" href="#">SOLUÇÕES</a>
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

                    </div>-->
                    <div class="offcanvas-footer">
                        <div class="col-12  language-box">
                            <a href="<?php echo get_permalink(pll_get_post(get_the_ID(),'pt')); ?>" class="active">BR</a>
                            /
                            <a href="<?php echo get_permalink(pll_get_post(get_the_ID(),'en')); ?>">EN</a>
                            /
                            <a href="<?php echo get_permalink(pll_get_post(get_the_ID(),'es')); ?>">ES</a>
                        </div>
                        <div class="col-12 mt-5 social-net">
                            <div class="row justify-content-center gx-5">
                                <div class="col-auto social-icon">
                                    <a href="#">
                                        <img height="40"
                                             src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/instagram-white.svg"
                                             alt="">
                                    </a>
                                </div>
                                <div class="col-auto social-icon">
                                    <a href="#">
                                        <img height="40"
                                             src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/linkedin-white.svg"
                                             alt="">
                                    </a>
                                </div>
                                <div class="col-auto social-icon">
                                    <a href="#">
                                        <img height="40"
                                             src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/facebook-white.svg"
                                             alt="">
                                    </a>
                                </div>
                                <div class="col-auto social-icon">
                                    <a href="#">
                                        <img height="40"
                                             src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/youtube-white.svg"
                                             alt="">
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

<div class="modal fade" id="open-solution-menu" tabindex="-1" aria-labelledby="modalSolution">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header p-0 nav-header-new">
                <div class="container-fluid p-0 d-none d-xl-block">
                    <div class="container" data-anijs="if: DOMContentLoaded, on: document, do:  fadeInDown animated">
                        <div class="row">
                            <nav class="navbar navbar-expand bg-transparent">
                                <div class="w-100">
                                    <!-- <div class="row row-cols-lg-3 justify-content-around"> -->
                                    <div class="row justify-content-around">
                                        <div class="col-auto d-flex align-items-center">
                                            <?php
                                            wp_nav_menu(array(
                                                'theme_location' => 'header-menu',
                                                'depth' => 1, // 1 = no dropdowns, 2 = with dropdowns.
                                                'container' => '',
                                                'container_class' => '',
                                                'container_id' => '',
                                                'menu_class' => 'navbar-nav mr-auto',
                                                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                                'walker' => new WP_Bootstrap_Navwalker(),
                                            ));

                                            ?>
                                        </div>
                                        <div class="col-auto d-flex justify-content-center align-items-center">
                                            <a class="navbar-brand m-0" href="<?php echo get_site_url(); ?>">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"
                                                     width="148px" height="21px" class="logo-brand" alt="Logo Tivit">
                                            </a>
                                        </div>
                                        <div class="col-auto d-flex align-items-center">
                                            <div class="collapse navbar-collapse" id="navbarNav">
                                                <?php
                                                wp_nav_menu(array(
                                                    'theme_location' => 'header-menu-02',
                                                    'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                                    'container' => '',
                                                    'container_class' => '',
                                                    'container_id' => '',
                                                    'menu_class' => 'navbar-nav mr-auto',
                                                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                                    'walker' => new WP_Bootstrap_Navwalker(),
                                                ));
                                                ?>
                                                <ul class="navbar-nav">
                                                    <li class="nav-item nav-language">
                                                        <?php
                                                        if ($idioma != 'PT') {
                                                            echo '<a href="'.get_permalink(pll_get_post(get_the_ID(),'pt')).'" class="nav-language">BR</a> / ';
                                                        }
                                                        if ($idioma != 'EN') {
                                                            echo '<a href="'.get_permalink(pll_get_post(get_the_ID(),'en')).'" class="nav-language">EN</a>';
                                                        }
                                                        if ($idioma == 'PT') {
                                                            echo ' / ';
                                                        }
                                                        if ($idioma != 'ES') {
                                                            echo '<a href="'.get_permalink(pll_get_post(get_the_ID(),'es')).'" class="nav-language">ES</a>';
                                                        }
                                                        ?>
                                                    </li>
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
                <div class="container-fluid p-0 d-xl-none mobile">
                    <nav class="navbar navbar-dark bg-transparent">
                        <div class="container-fluid">
                            <div class="d-flex w-100 justify-content-between">
                                <div class="col-auto d-flex justify-content-center align-items-center">
                                    <button class="btn-close btn-close-white" type="button"
                                            onclick="closeAllMenu()"></button>
                                </div>
                                <div class="col d-flex justify-content-center align-items-center">
                                    <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"
                                             width="148px"
                                             height="21px" class="logo-brand" alt="Logo Tivit">
                                    </a>
                                </div>
                                <div class="col-auto d-flex justify-content-center align-items-center">
                                    <div class="search">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/nav/search-white.svg"
                                             alt="Search Tivit" onclick="abre_barra_pesquisa();">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 box-title pb-4 mb-2">
                            <div class="d-flex flex-wrap">
                                <div class="col-1 d-flex d-xl-none align-items-center">
                                    <button type="button" class="btn-close btn-arrow-back" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="col-11">
                                    <button type="button" class="d-xl-none mb-xl-auto btn  title-mobile"  data-bs-dismiss="modal"
                                            aria-label="Close"><?php _e('SOLUÇÕES','tivit'); ?></button>
                                </div>
                                <div class="col-10 mt-2 offset-1 offset-xl-0">
                                <p><?php echo $por_servico_port; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <?php
                        $locations = get_nav_menu_locations();
                        // print_r($locations);
                        // $menu = wp_get_nav_menu_object('solucoes');
                        $menu = wp_get_nav_menu_object($locations['menu-solucoes']);
                        $menu_items = wp_get_nav_menu_items($menu->term_id);
                        $menus = array();
                        for ($mm = 0; $mm < count($menu_items); $mm++) {
                            $eu = $menu_items[$mm]->ID;
                            $pai = $menu_items[$mm]->menu_item_parent;
                            $oque = array('link' => $menu_items[$mm]->url, 'titulo' => $menu_items[$mm]->title);
                            if ($pai > 0) {
                                $menus[$pai]['submenu'][] = $oque;
                            } else {
                                $menus[$eu] = $oque;
                            }
                        }
                        // print_r($menus);
                        echo '<div class="row row-cols-1 row-cols-xl-4 justify-content-xl-between gx-3">';
                        $ss = 0;
                        $indexConteudo = 0;
                        foreach ($menus as $chave => $conteudo) {
                            $mt = 'mt-4 mb-4 mb-xl-auto mt-xl-4';
                            if($indexConteudo > 3){
                                $mt = 'mt-4 mb-4 mb-xl-auto mt-xl-0';
                            }
                            $indexConteudo++;
                            echo '<div class="col box-list-solutions p-0 mb-4">';
                            echo '<div class="textMenu ' . $mt . '">';
                            echo '<h2><a href="' . $conteudo['link'] . '">' . $conteudo['titulo'] . '</a></h2>';
                            echo '<div class="menu-solucoes-cloud-solutions-container">
                                    <ul id="menu-solucoes-cloud-solutions" class="menu"
                                    itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">';
                            $list_por_servico = isset($conteudo['submenu']) ? $conteudo['submenu'] : array();
                            foreach ($list_por_servico as $key => $submenu) {
                                echo '<li id="menu-item-' . $key . '" class="menu-item menu-item-type-post_type menu-item-object-solucoes menu-item-' . $key . ' nav-item">';
                                echo '<a itemprop="url" href="' . $submenu['link'] . '" class="nav-link">';
                                echo $submenu['titulo'] . '</a></li>';

                            }
                            echo '</ul>
                            </div>';
                            echo '</div>';
                            echo '</div>';
                            $ss++;
                        }
                        // echo '</div>';
                        // echo '</div>';
                        // echo '</div>';
                        echo '</div>';
                        ?>
                    </div>
                    <div class="col-12 mt-5 mb-5 d-xl-none language-box">
                        <div class="row justify-content-center gx-5">
                            <div class="col-auto">
                                <a href="<?php echo get_permalink(pll_get_post(get_the_ID(),'pt')); ?>" class="active">BR</a>
                            </div>
                            <div class="col-auto">
                                <a href="<?php echo get_permalink(pll_get_post(get_the_ID(),'en')); ?>">EN</a>
                            </div>
                            <div class="col-auto">
                                <a href="<?php echo get_permalink(pll_get_post(get_the_ID(),'es')); ?>">ES</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5 d-xl-none mb-3 social-net">
                        <div class="row justify-content-center gx-5">
                            <div class="col-auto social-icon">
                                <a href="#">
                                    <img height="40"
                                         src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/instagram-white.svg"
                                         alt="">
                                </a>
                            </div>
                            <div class="col-auto social-icon">
                                <a href="#">
                                    <img height="40"
                                         src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/linkedin-white.svg"
                                         alt="">
                                </a>
                            </div>
                            <div class="col-auto social-icon">
                                <a href="#">
                                    <img height="40"
                                         src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/facebook-white.svg"
                                         alt="">
                                </a>
                            </div>
                            <div class="col-auto social-icon">
                                <a href="#">
                                    <img height="40"
                                         src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/youtube-white.svg"
                                         alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>