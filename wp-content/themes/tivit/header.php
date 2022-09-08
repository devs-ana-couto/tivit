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
<header class="fixed-top header frontpage">
    <div class="barra-pesquisa">
        <div class="container">
            <div class="row">
                <div class="d-none d-md-flex col-md-2 area-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" width="148px"
                         height="21px" class="logo-brand" alt="Logo Tivit">
                </div>
                <div class="col-12 col-md-10 area-pesquisar">
                    <form method="get" id="searchform" action="<?php home_url('/'); ?>">
                        <input type="text" id="s" name="s" class="pesquisar"/>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/nav/search-white.svg"
                             class="search-ico" alt="Search Tivit" onclick="jQuery('#searchform').submit()">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-xl navbar-light" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-2 col-md-5 header-menu">
                    <div class="hide-mobile">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'header-menu',
                            'depth' => 1, // 1 = no dropdowns, 2 = with dropdowns.
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'bs-example-navbar-collapse-1',
                            'menu_class' => 'navbar-nav mr-auto',
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker(),
                        ));
                        ?>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                            aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'tivit'); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="col-8 col-md-2 header-logo">
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" width="148px"
                             height="21px" class="logo-brand" alt="Logo Tivit">
                    </a>
                </div>

                <div class="col-4 col-md-5 header-menu hide-mobile">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu-02',
                        'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'bs-example-navbar-collapse-1',
                        'menu_class' => 'navbar-nav mr-auto',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker(),
                    ));
                    ?>
                    <div class="search">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/nav/search-white.svg"
                             alt="Search Tivit" onclick="abre_barra_pesquisa();">
                    </div>
                </div>
                <!-- <div class="col-4 col-md-1 header-options">
                  <div class="language">
                    <a href="#"><p class="en">EN</p></a>
                    <a href="#"><p class="es">ES</p></a>
                  </div>



                </div> -->

                <div class="col-2 hide-desktop search">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/nav/search-white.svg"
                         class="search-ico" alt="Search Tivit" onclick="abre_barra_pesquisa();">
                </div>
            </div>

            <div class="solution-menu position-absolute hide-mobile">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-tabs " id="myTab" role="tablist">
                                <!-- <li class="nav-item inicial" role="presentation">
                                   <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Por serviços e produtos</button>
                                 </li>-->
                                <!--<li class="nav-item central" role="presentation">
                                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Por indústria</button>
                                </li>
                                <li class="nav-item final" role="presentation">
                                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">POR DESAFIO</button>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active pt-5" id="home" role="tabpanel"
                             aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="textLeft">
                                        <h2><?php _e('Conheça as soluções da TIVIT por <strong>Serviços e Produtos.</strong>'); ?></h2>
                                        <p><?php echo $por_servico_port; ?></p>
                                        <!-- <a href="<? /*get_site_url()*/ ?>/staged/tivit/solucoes" class="buttonintro"><?php /*_e('ver todas as solucoes'); */ ?></a>-->
                                    </div>
                                </div>
                                <div class="col-md-9">
<?php
$menu = wp_get_nav_menu_object( 'solucoes' );
$menu_items = wp_get_nav_menu_items($menu->term_id);
$menus = array();
for ($mm=0; $mm<count($menu_items); $mm++) {
    $eu =  $menu_items[$mm]->ID;
    $pai = $menu_items[$mm]->menu_item_parent;
    $oque = array('link'=>$menu_items[$mm]->url, 'titulo'=>$menu_items[$mm]->title);
    if ($pai>0) {
        $menus[$pai]['submenu'][] = $oque;
    } else {
        $menus[$eu] = $oque;
    }
}
// print_r($menus);
echo '<div class="row">';
$ss=0;
foreach ($menus as $chave => $conteudo) {
    if ($ss > 2) {
        $mt5= "mt-lg-5";
    }
    echo '<div class="col-md-4 ' . $mt5 .'">';
    echo '<div class="textMenu">';
    echo '<h2><a href="'.$conteudo['link'].'">'.$conteudo['titulo'].'</a></h2>';
    echo '<div class="menu-solucoes-cloud-solutions-container"><ul id="menu-solucoes-cloud-solutions" class="menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">';
    $list_por_servico = $conteudo['submenu'];
    foreach ($list_por_servico as $key => $submenu) {
            echo '<li id="menu-item-'.$key.'" class="menu-item menu-item-type-post_type menu-item-object-solucoes menu-item-'.$key.' nav-item">';
            echo '<a itemprop="url" href="' . $submenu['link'] . '" class="nav-link">';
            echo '<span itemprop="name">' . $submenu['titulo'] . '</span></a></li>';

    }
    echo '</ul></div>';
    echo '</div>';
    echo '</div>';
    $ss++;
}
// echo '</div>';
// echo '</div>';
// echo '</div>';
echo '</div>';
?>
                                <div class="row" style="display:none;">
                                        <?php

                                        for ($ss = 0; $ss < count($rel_por_servico); $ss++) {
                                            if ($ss > 2) {
                                                $mt5= "pt-lg-5 bt-1-w";
                                            }
                                            echo '<div class="col-md-4 ' . $mt5 .'">';
                                            echo '<div class="textMenu">';
                                            echo '<h2>' . $rel_por_servico[$ss]->name . '</h2>';
                                            echo '<div class="menu-solucoes-cloud-solutions-container"><ul id="menu-solucoes-cloud-solutions" class="menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">';
                                            $list_por_servico = le_subpaginas('por-servico', $rel_por_servico[$ss]->slug);
                                            for ($ps = 0; $ps < count($list_por_servico); $ps++) {

                                                    echo '<li id="menu-item-530" class="menu-item menu-item-type-post_type menu-item-object-solucoes menu-item-530 nav-item">';
                                                    echo '<a itemprop="url" href="' . $list_por_servico[$ps]['link'] . '" class="nav-link">';
                                                    echo '<span itemprop="name">' . $list_por_servico[$ps]['titulo'] . '</span></a></li>';

                                            }
                                            echo '</ul></div>';
                                            echo '</div>';
                                            echo '</div>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="textLeft pt-5">
                                        <h2><?php _e('Conheça as soluções da TIVIT por <strong>INDÚSTRIA</strong>'); ?></h2>
                                        <p><?php echo $por_industria_port; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <?php
                                        for ($si = 0; $si < count($rel_por_industria); $si++) {

                                            echo '<div class="col-md-4">';
                                            echo '<a href="' . $rel_por_industria[$si]->url . '">';
                                            echo '<div class="textMenuCard mt-5">';
                                            echo '<h2>' . $rel_por_industria[$si]->title . '</h2>';
                                            echo '<p>' . $rel_por_industria[$si]->description . '</p>';
                                            echo '</div>';
                                            echo '</a>';
                                            echo '</div>';

                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="textLeft pt-5">
                                        <h2><?php _e('Conheça as soluções da TIVIT por <strong>DESAFIO</strong>'); ?></h2>
                                        <p><?php echo $por_desafio_port; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <?php
                                        for ($sd = 0; $sd < count($rel_por_desafio); $sd++) {
                                            echo '<div class="col-md-4">';
                                            echo '<a href="' . $rel_por_desafio[$sd]->url . '">';
                                            echo '<div class="textMenuCard mt-5">';
                                            echo '<h2><a>' . $rel_por_desafio[$sd]->title . '</a></h2>';
                                            echo '<p>' . $rel_por_desafio[$sd]->description . '</p>';
                                            echo '</div>';
                                            echo '</a>';
                                            echo '</div>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center hide-desktop">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'mobile-menu',
                    'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'bs-example-navbar-collapse-1',
                    'menu_class' => 'navbar-nav mr-auto',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker(),
                ));
                ?>
            </div>

            <div class="solutions-service-mobile por-servicos-e-produtos">
                <div class="container hide-desktop">
                    <div class="intro">
                        <h3><?php _e('soluções'); ?></h3>
                        <h2><?php _e('POR SERVIÇOS E PRODUTOS'); ?></h2>
                        <p><?php echo $por_servico_port; ?></p>
                        <a href="/solucoes"><?php _e('VER TODAS AS SOLUÇÕES'); ?></a>
                    </div>
                    <hr class="w-100"/>

                    <div class="textMenu">
                        <div class="row">
                            <?php
                            for ($ss = 0; $ss < count($rel_por_servico); $ss++) {
                                echo '<div class="textMenu">';
                                echo '<div class="row">';
                                echo '<div class="col-1 d-flex justify-content-center">';
                                echo '<div><h2>' . $rel_por_servico[$ss]->name . '</h2></div>';
                                echo '</div>';
                                echo '<div class="col-11"><ul>';
                                $list_por_servico = le_subpaginas('por-servico', $rel_por_servico[$ss]->slug);
                                for ($ps = 0; $ps < count($list_por_servico); $ps++) {
                                    echo '<a itemprop="url" href="' . $list_por_servico[$ps]['link'] . '" class="nav-link">';
                                    echo '<li>';
                                    echo $list_por_servico[$ps]['titulo'] . '</li></a>';
                                }
                                echo '</ul></div>';
                                echo '<hr class="w-100" />';
                                echo '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="languages">
                        <div class="row">
                            <div class="col-6">
                                <div class="title">
                                    <h2>ENGLISH</h2>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="title">
                                    <h2>ESPAÑOL</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="solutions-service-mobile-cards por-industria">
                <div class="container hide-desktop">
                    <div class="intro">
                        <h3><?php _e('soluções'); ?></h3>
                        <h2><?php _e('POR INDÚSTRIA'); ?></h2>
                        <p><?php echo $por_industria_port; ?></p>
                    </div>

                    <?php
                    for ($si = 0; $si < count($rel_por_industria); $si++) {
                        echo '<div class="cardMenu">';
                        echo '<div class="row">';
                        echo '<div class="col-12">';
                        echo '<h2><a>' . ($rel_por_industria[$si]->id) . '</a></h2>';
                        echo '<p>' . ($rel_por_industria[$si]->description) . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                    <div class="languages">
                        <div class="row">
                            <div class="col-6">
                                <div class="title">
                                    <h2>ENGLISH</h2>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="title">
                                    <h2>ESPAÑOL</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="solutions-service-mobile-cards por-desafios">
                <div class="container hide-desktop">
                    <div class="intro">
                        <h3><?php _e('soluções'); ?></h3>
                        <h2><?php _e('POR DESAFIO'); ?></h2>
                        <p><?php echo $por_desafio_port; ?></p>
                    </div>

                    <?php
                    for ($sd = 0; $sd < count($rel_por_desafio); $sd++) {
                        echo '<a href="' . $rel_por_desafio[$sd]->url . '">';
                        echo '<div class="cardMenu">';
                        echo '<div class="row">';
                        echo '<div class="col-12">';
                        echo '<h2><a>' . $rel_por_desafio[$sd]->title . '</a></h2>';
                        echo '<p>' . $rel_por_desafio[$sd]->description . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</a>';
                    }
                    ?>
                    <div class="languages">
                        <div class="row">
                            <div class="col-6">
                                <div class="title">
                                    <h2>ENGLISH</h2>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="title">
                                    <h2>ESPAÑOL</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </nav>
</header>

