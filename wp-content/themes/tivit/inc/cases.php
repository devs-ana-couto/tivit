<?php
/**
 *  Cases
 *
 */
if (!function_exists('ac_cases_listar')) {
    /**
     * porpagina => Quantos posts por páginas deve retornar
     * pagina => paginacao (inicia-se com 1)
     * categoria => slug da categoria a pesquisar (separar com virgual quando for mais de uma)
     * etiqueta => slug da tag a pesquisar (separar com virgual quando for mais de uma)
     */
    function ac_cases_listar($attr=array()) {
        $porpagina = (isset($attr['porpagina']) ? $attr['porpagina'] : 5);
        $pagina    = (isset($attr['pagina'])    ? $attr['pagina']    : 1);
        $categoria = (isset($attr['categoria']) ? $attr['categoria'] : '');
        $etiqueta  = (isset($attr['etiqueta'])  ? $attr['etiqueta']  : '');
        $args      = array (
            'post_type'       => 'cases',
            'posts_per_page'  => $porpagina * 1,
            'page'            => $pagina * 1,
            'post_status'     => 'publish',
            'orderby'         => 'date',
            'order'           => 'DESC',
        );
        if ( $categoria != '' ) {
            $args['category_name'] = $categoria;
        }
        if ( $etiqueta != '' ) {
            $args['tag'] = $etiqueta;
        }
        $the_query = new WP_Query( $args );
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $identif    = $the_query->post->ID;
            $titulo     = get_the_title();
            $cases   = apply_filters( 'the_content', get_the_content() );
            $cases   = str_replace( ']]>', ']]&gt;', $cases );
            $resumo     = get_the_content();
            $link       = get_permalink();
            $dia        = get_the_date();
            $quem       = get_the_author();
            $cliente  = get_field('nome_do_cliente');
            $bgmobile   = get_field('banner_mobile');
            $bgdesktop   = get_field('banner_desktop');
            $tleitura   = get_field('tempo_de_leitura');
            $chamada    = get_field('chamada_sobre');
            $imagem      = '';
            $teste       = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $cases, $encontrou);
            $imagem      = (isset($encontrou[1][0])) ? $encontrou[1][0] : '';
            $cat_aux    = get_the_category();
            $categorias = array();
            if (is_array($cat_aux) || is_object($cat_aux)) {
                foreach( $cat_aux as $categoria ) {
                    $categorias[$categoria->term_id] = $categoria->name;
                }
            }
            $etiquetas = get_the_tags($identif);
            $resultado[] = array(
                'postid'     => $identif,
                'postdate'   => $dia,
                'link'       => $link,
                'imagem'     => $imagem,
                'cases'   => $cases,
                'quem'       => $quem,
                'resumo'     => $resumo,
                'titulo'     => $titulo,
                'categorias' => $categorias,
                'etiquetas'  => $etiquetas,
                'cliente'  => $cliente,
                'bgmobile'   => $bgmobile,
                'bgdesktop'  => $bgdesktop,

                
            );
        }
        wp_reset_query();
        return $resultado;
    }
}


if (!function_exists('ac_cases_listar_categorias')) {
    function ac_cases_listar_categorias() {
        $args = array (
            'post_type'       => 'cases',
            'posts_per_page'  => -1,
        );
        $categorias = array();
        $the_query  = new WP_Query( $args );
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $cat_aux = get_the_category();
            if (is_array($cat_aux) || is_object($cat_aux)) {
                foreach( $cat_aux as $categoria ) {
                    $categorias[$categoria->slug] = $categoria->name;
                }
            }
        }
        wp_reset_query();
        asort($categorias);
        return $categorias;
    }
}


if (!function_exists('ac_cases_listar_tags')) {
    /**
     * categoria => slug da categoria a pesquisar (separar com virgual quando for mais de uma)
     */
    function ac_cases_listar_tags($attr=array()) {
        $categoria = (isset($attr['categoria']) ? $attr['categoria'] : '');
        $args = array (
            'post_type'       => 'cases',
            'posts_per_page'  => -1,
        );
        if ( $categoria != '' ) {
            $args['category_name'] = $categoria;
        }
        $etiquetas = array();
        $the_query  = new WP_Query( $args );
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $identif   = $the_query->post->ID;
            $etiq_aux = get_the_tags($identif);
            if (is_array($etiq_aux) || is_object($etiq_aux)) {
                foreach( $etiq_aux as $etiqueta ) {
                    $etiquetas[$etiqueta->slug] = $etiqueta->name;
                }
            }
        }
        wp_reset_query();
        asort($etiquetas);
        return $etiquetas;
    }
}


if (!function_exists('ac_bloco_cases')) {
    function ac_bloco_cases() {
        $arg['porpagina'] = 3;
        $arg['pagina']    = 1;
        $dados = ac_cases_listar($arg);

        $saida .= '<div class="carousel-inner">';
        for ($ac = 0; $ac < count($dados); $ac++ ) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            if (is_array($cat_aux) || is_object($cat_aux)) {
                foreach( $cat_aux as $categoria ) {
                    $categorias[] = $categoria;
                }
            }
            $etiquetas  = array();
            $etq_aux = $dados[$ac]['etiquetas'];
            if (is_array($etq_aux) || is_object($etq_aux)) {
                foreach( $etq_aux as $etiqueta ) {
                    $etiquetas[] = $etiqueta->name;
                }
            }
            $saida .= '<div class="carousel-item heroslide'.($ac == 0 ? ' active' : '').'" style="background: url('.$dados[$ac]['bgdesktop'].'); background-repeat: no-repeat; height:560px; background-size: cover">';
             
            
            $saida .= '<div class="col-12 col-md-6">';
            $saida .= '<div class="detalhes">';
            $saida .= '<div class="autor-time">';
            $saida .= '<p>Cliente: <strong>'.$dados[$ac]['cliente'].'</strong></p>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '<div class="content">';
            $saida .= '<h2>'.$dados[$ac]['titulo'].'</h2>';
            $saida .= '</div>';
            $saida .= '<div class="acessar">';
            $saida .= '<a href="'.$dados[$ac]['link'].'">'.__('ver mais').'<img src="'.get_template_directory_uri().'/assets/images/a-tivit/arrow.svg" class="hide-desktop" alt="Saiba Mais"><img src="'.get_template_directory_uri().'/assets/images/a-tivit/arrow-red.svg" class="hide-mobile" alt="Saiba Mais"></a>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
        }
        $saida .= '<div class="col-12 col-md-6">';
        $saida .= '<div class="navigation '.($ac <= 1 ? ' hide-mobile hide-desktop' : '').'">';
        $saida .= '<button class="carousel-control-prev" type="button" data-bs-target="#hero" data-bs-slide="prev">';
        $saida .= '<img src="'.get_template_directory_uri().'/assets/icons/navegacao/arrow_left.png" alt="arrow_left">';
        $saida .= '<div class="d-flex flex-row counter">';
        $saida .= '<div class="numactive"></div><div class="numseparation"></div><div class="numtotal"></div>';
        $saida .= '</div>';
        $saida .= '<button class="carousel-control-next" type="button" data-bs-target="#hero" data-bs-slide="next">';
        $saida .= '<img src="'.get_template_directory_uri().'/assets/icons/navegacao/arrow_right.png" alt="arrow_right">';
        $saida .= '</button>';
        $saida .= '<div class="carousel-indicators">';
        for ($ac = 0; $ac < count($dados); $ac++ ) {
            $saida .= '<button type="button" data-bs-target="#hero" data-bs-slide-to="'.$ac.'" class="'.($ac == 0 ? 'active' : '').'"aria-current="true" aria-label="Content 1"></button>';
        }

        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';

        return $saida;
    }
}
add_shortcode( 'ac-bloco-cases', 'ac_bloco_cases' );

if (!function_exists('ac_bloco_home_cases')) {
    function ac_bloco_home_cases() {
        $arg['porpagina'] = 3;
        $arg['pagina']    = 1;
        $dados = ac_cases_listar($arg);

        $saida .= '<div class="col-12">';
        $saida .= '<div id="labs" class="carousel slide position-relative hide-desktop" data-bs-ride="carousel">';
        $saida .= '<div class="carousel-inner" role="listbox">';
        for ($ac = 0; $ac < count($dados); $ac++ ) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            if (is_array($cat_aux) || is_object($cat_aux)) {
                foreach( $cat_aux as $categoria ) {
                    $categorias[] = $categoria;
                }
            }
            $etiquetas  = array();
            $etq_aux = $dados[$ac]['etiquetas'];
            if (is_array($etq_aux) || is_object($etq_aux)) {
                foreach( $etq_aux as $etiqueta ) {
                    $etiquetas[] = $etiqueta->name;
                }
            }
            $saida .= '<div class="carousel-item heroslide2 '.($ac==0 ? 'active' : '').'">';            
            $saida .= '<div class="row">';
            $saida .= '<div class="col-12">';
            $saida .= '<div class="cardCases bg1 m-2 position-relative">';
            $saida .= '<div class="overlay"></div>';
            $saida .= '<img class="w-100 h-100 img-fluid" src="'.$dados[$ac]['bgmobile'].'" alt="backgroundcase1">';
            $saida .= '<div class="textCase">';
            $saida .= '<h3>'.$dados[$ac]['titulo'].'</h3>';
            $saida .= '<p>'.$dados[$ac]['resumo'].'</p>';
            $saida .= '<div class="w-100 d-flex text-left">';
            $saida .= '<a href="'.$dados[$ac]['link'].'">VER MAIS</a>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';

        }
        $saida .= '</div>';

        $saida .= '<div class="navigation '.($ac <= 1 ? ' hide-mobile hide-desktop' : '').' w-100">';
        $saida .= '<div class="d-flex justify-content-center align-items-center">';
        $saida .= '<button class="carousel-control-prev" type="button" data-bs-target="#labs" data-bs-slide="prev">';
        $saida .= '<img src="'.get_template_directory_uri().'/assets/icons/navegacao/arrow_left.png" alt="arrow_left">';
        $saida .= '</button>';
        $saida .= '<div class="d-flex flex-row counter2">';
        $saida .= '<div class="numactive2"></div><div class="numseparation2"></div><div class="numtotal2"></div>';
        $saida .= '</div>';
        $saida .= '<button class="carousel-control-next" type="button" data-bs-target="#labs" data-bs-slide="next">';
        $saida .= '<img src="'.get_template_directory_uri().'/assets/icons/navegacao/arrow_right.png" alt="arrow_right">';
        $saida .= '</button>';
        $saida .= '</div>';
        $saida .= '</div>';

        $saida .= '</div>';
        $saida .= '</div>';

        $saida .= '<div class="home-cases-content left text-center hide-mobile">';
        $saida .= '<div class="row d-flex justify-content-center">';
        $saida .= '<div class="d-flex customContainer">';

        for($ac = 0; $ac < count($dados); $ac++){
            $saida .= '<div class="col-md-4">';
            $saida .= '<div class="cardCases bg1 m-3">';
            $saida .= '<div class="overlay"></div>';
            $saida .= '<img src="'.$dados[$ac]['bgdesktop'].'" alt="backgroundcase1">';
            $saida .= '<div class="textCase">';
            $saida .= '<h3>'.$dados[$ac]['titulo'].'</h3>';
            $saida .= '<p>'.$dados[$ac]['resumo'].'</p>';
            $saida .= '<div class="w-100 d-flex text-left mt-3">';
            $saida .= '<a href="'.$dados[$ac]['link'].'">VER CASE</a>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
        }



        $saida .= '</div>';


        $saida .= '<div class="col-12">';
        $saida .= '<div class="d-flex justify-content-center align-items-center btn mt-4">';
        $saida .= '<button class="btncontent"><a href="/staged/tivit/cases">VER TODOS OS CASES</a></button>';

        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
        return $saida;
    }
}
add_shortcode( 'ac_bloco_home_cases', 'ac_bloco_home_cases' );


if (!function_exists('ac_pagina_cases')) {
    function ac_pagina_cases() {
        $arg = array();
        if (isset($_GET['pagina'])) {
            $arg['pagina'] = $_GET['pagina'] + 1;
            $get_pagina = $_GET['pagina'] + 1;
        }
        $get_categoria = '';
        if (isset($_GET['categoria'])) {
            $arg['categoria'] = $_GET['categoria'];
            $get_categoria = explode(',',$_GET['categoria']);
        }
        $get_etiqueta = array();
        if (isset($_GET['etiqueta'])) {
            $arg['etiqueta']  = $_GET['etiqueta'];
            $get_etiqueta = explode(',',$_GET['etiqueta']);
        }
        $dados = ac_cases_listar($arg);
        $t_categorias = ac_cases_listar_categorias();
        $t_etiquetas = ac_cases_listar_tags($arg);


        $saida .= '<div class="col-7">';
        $saida .= '<div class="assuntos">';
        $saida .= '<h4>'._('escolha um ou mais assuntos').'</h4>';
        $ativo = (count($get_etiqueta)==0) ? 'active' : '';
        $saida .= '<a href="#" class="'.$ativo.'">'.__('Todos').'</a>';
        if (is_array($t_etiquetas) || is_object($t_etiquetas)) {
            foreach ($t_etiquetas as $slug => $nome) {
                $ativo = (in_array($slug, $get_etiqueta)) ? 'active' : '';
                $saida .= '<a href="#" class="'.$ativo.'">'.$slug.'</a>';
            }
        }
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '<div class="col-5">';
        $saida .= '<div class="filtros">';
        $saida .= '<div class="select">';
        $saida .= '<select name="">';
        $saida .= '<option value="">'.('Filtrar por').'</option>';
        if (is_array($t_categorias) || is_object($t_categorias)) {
            foreach ($t_categorias as $slug => $nome) {
                $ativo = (in_array($slug, $get_etiqueta)) ? 'selected' : '';
                $saida .= '<option value="" '.$ativo.'>'.$slug.'</option>';
            }
        }
        $saida .= '</select>';
        $saida .= '</div>';
        $saida .= '<div class="search">';
        $saida .= '<a href="#"><img src="'.get_template_directory_uri().'/assets/icons/nav/search-white.svg" alt="Search Tivit"></a>';
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';

        /* cases */
        $saida .= '<div class="row">';
        for ($ac = 0; $ac < count($dados); $ac++ ) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            if (is_array($cat_aux) || is_object($cat_aux)) {
                foreach( $cat_aux as $categoria ) {
                    $categorias[] = $categoria;
                }
            }
            $etiquetas  = array();
            $etq_aux = $dados[$ac]['etiquetas'];
            if (is_array($etq_aux) || is_object($etq_aux)) {
                foreach( $etq_aux as $etiqueta ) {
                    $etiquetas[] = $etiqueta->name;
                }
            }
            $saida .= '<div class="col-12 col-md-4">';
            $saida .= '<div class="img">';
            $saida .= '<img src="'.$dados[$ac]['bgdesktop'].'" alt="'.$dados[$ac]['titulo'].'">';
            $saida .= '</div>';
            $saida .= '<div class="autor-time">';
            $saida .= '<p><b>'.$dados[$ac]['postdate'].'</b></p>';
            $saida .= '</div>';
            $saida .= '<div class="content">';
            $saida .= '<h3>'.$dados[$ac]['titulo'].'</h3>';
            $saida .= '</div>';
            $saida .= '<div class="acessar">';
            $saida .= '<a href="'.$dados[$ac]['link'].'">Ver mais <img src="'.get_template_directory_uri().'/assets/images/a-tivit/arrow.svg" class="hide-desktop" alt="Saiba Mais"></a>';
            $saida .= '</div>';
            $saida .= '</div>';
        }
        $saida .= '</div>';
        $saida .= '</div>';


      /* Mobile */
      $saida .= '<div id="cases" class="carousel slide carousel-fade hide-desktop" data-bs-ride="carousel">';
      $saida .= '<div class="container">';
      $saida .= '<div class="row">';
      $saida .= '<div class="col-12">';

      /* Filtros */
      $saida .= '<div class="filtros">';
      $saida .= '<div class="select">';
      $saida .= '<select name="">';
      $saida .= '<option value="">'._('escolha um ou mais assuntos').'</option>';
      for ($ac=0; $ac<count($t_etiquetas); $ac++) {
          $ativo = (in_array($t_etiquetas[$ac], $get_etiqueta)) ? 'selected' : '';
          $saida .= '<option value="" '.$ativo.'">'.$t_etiquetas[$ac].'</option>';
      }
      $saida .= '</select>';
      $saida .= '</div>';
      $saida .= '<div class="divisao">';
      $saida .= '<div class="select">';
      $saida .= '<select name="">';
      $saida .= '<option value="">'.('Filtrar por').'</option>';
      for ($ac=0; $ac<count($t_categorias); $ac++) {
          $ativo = (in_array($t_categorias[$ac], $t_categorias)) ? 'selected' : '';
          $saida .= '<option value="" '.$ativo.'>'.$t_categorias[$ac].'</option>';
      }
      $saida .= '</select>';
      $saida .= '</div>';
      $saida .= '<div class="search">';
      $saida .= '<a href="#"><img src="'.get_template_directory_uri().'/assets/icons/nav/search-white.svg" alt="Search Tivit"></a>';
      $saida .= '</div>';
      $saida .= '</div>';
      $saida .= '</div>';
      $saida .= '</div>';
      $saida .= '<div class="carousel-inner">';
      for ($ac = 0; $ac < count($dados); $ac++ ) {
          $categorias = array();
          $cat_aux = $dados[$ac]['categorias'];
          if (is_array($cat_aux) || is_object($cat_aux)) {
              foreach( $cat_aux as $categoria ) {
                  $categorias[] = $categoria;
              }
          }
          $etiquetas  = array();
          $etq_aux = $dados[$ac]['etiquetas'];
          if (is_array($etq_aux) || is_object($etq_aux)) {
              foreach( $etq_aux as $etiqueta ) {
                  $etiquetas[] = $etiqueta->name;
              }
          }
          $saida .= '<div class="carousel-item'.($ac==0 ? ' active' : '').'">';
          $saida .= '<div class="col-11 m-0 p-0">';
          $saida .= '<div class="cardContent p-2">';
          $saida .= '<div class="img position-relative">';
          $saida .= '<img src="'.$dados[$ac]['bgmobile'].'" alt="Depoimento">';
          $saida .= '<div class="position-absolute tagContent">'.$categorias[0].'</div>';
          $saida .= '</div>';
          $saida .= '<div class="detalhes">';
          $saida .= '<span>'.$dados[$ac]['postdate'].'</span>';
          $saida .= '<p class="m-0 h-100">'.__('Por').' <b>'.$dados[$ac]['quem'].'</b></p>';
          $saida .= '</div>';
          $saida .= '<div class="content">';
          $saida .= '<h3>'.$dados[$ac]['titulo'].'</h3>';
          $saida .= '</div>';
          $saida .= '<div class="autor-time w-100">';
          $saida .= '<div class="d-flex flex-row">';
          for ($k=0; $k<count($etiquetas); $k++) {
              $saida .= '<a href="#">'.$etiquetas[$k].'</a>';
          }
          $saida .= '</div>';
          $saida .= '</div>';
          $saida .= '<div class="acessar">';
          $saida .= '<a href="'.$dados[$ac]['link'].'">'.__('ver mais').'</a>';
          $saida .= '</div>';
          $saida .= '</div>';
          $saida .= '</div>';
          $saida .= '</div>';
      }
      $saida .= '</div>';
      $saida .= '</div>';
      return $saida;

    }
}
add_shortcode( 'ac-pagina-cases', 'ac_pagina_cases' );
