<?php
/**
 *  Conteudo
 *
 */
if (!function_exists('ac_conteudo_listar')) {
    /**
     * porpagina => Quantos posts por páginas deve retornar
     * pagina => paginacao (inicia-se com 1)
     * categoria => slug da categoria a pesquisar (separar com virgual quando for mais de uma)
     * etiqueta => slug da tag a pesquisar (separar com virgual quando for mais de uma)
     */
    function ac_conteudo_listar($attr=array()) {
        $porpagina = (isset($attr['porpagina']) ? $attr['porpagina'] : 5);
        $pagina    = (isset($attr['pagina'])    ? $attr['pagina']    : 1);
        $categoria = (isset($attr['categoria']) ? $attr['categoria'] : '');
        $etiqueta  = (isset($attr['etiqueta'])  ? $attr['etiqueta']  : '');
        $args      = array (
            'post_type'       => 'post',
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
            $conteudo   = apply_filters( 'the_content', get_the_content() );
            $conteudo   = str_replace( ']]>', ']]&gt;', $conteudo );
            $resumo     = get_the_content();
            $link       = get_permalink();
            $dia        = get_the_date();
            $quem       = get_the_author();
            $bhdesktop  = get_field('banner_header_desktop_conteudo');
            $bhmobile   = get_field('banner_header_mobile_conteudo');
            $tleitura   = get_field('tempo_de_leitura');
            $chamada    = get_field('chamada_sobre_cases');
            $imagem      = '';
            $teste       = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $conteudo, $encontrou);
            $imagem      = (isset($encontrou[1][0])) ? $encontrou[1][0] : '';
            $cat_aux    = get_the_category();
            $categorias = array();
            foreach( $cat_aux as $categoria ) {
                $categorias[$categoria->term_id] = $categoria->name;
            }
            $etiquetas = get_the_tags($identif);
            $resultado[] = array(
                'postid'     => $identif,
                'postdate'   => $dia,
                'link'       => $link,
                'imagem'     => $imagem,
                'conteudo'   => $conteudo,
                'quem'       => $quem,
                'resumo'     => $resumo,
                'titulo'     => $titulo,
                'categorias' => $categorias,
                'etiquetas'  => $etiquetas,
                'bhdesktop'  => $bhdesktop,
                'bhmobile'   => $bhmobile,
                'tleitura'   => $tleitura,
                'chamada'    => $chamada,
            );
        }
        wp_reset_query();
        return $resultado;
    }
}



if (!function_exists('ac_conteudo_listar_categorias')) {
    function ac_conteudo_listar_categorias() {
        $args = array (
            'post_type'       => 'post',
            'posts_per_page'  => -1,
        );
        $categorias = array();
        $the_query  = new WP_Query( $args );
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $cat_aux = get_the_category();
            foreach( $cat_aux as $categoria ) {
                $categorias[$categoria->slug] = $categoria->name;
            }
        }
        wp_reset_query();
        asort($categorias);
        return $categorias;
    }
}



if (!function_exists('ac_conteudo_listar_tags')) {
    /**
     * categoria => slug da categoria a pesquisar (separar com virgual quando for mais de uma)
     */
    function ac_conteudo_listar_tags($attr=array()) {
        $categoria = (isset($attr['categoria']) ? $attr['categoria'] : '');
        $args = array (
            'post_type'       => 'post',
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
            foreach( $etiq_aux as $etiqueta ) {
                $etiquetas[$etiqueta->slug] = $etiqueta->name;
            }
        }
        wp_reset_query();
        asort($etiquetas);
        return $etiquetas;
    }
}






if (!function_exists('ac_bloco_conteudo')) {
    function ac_bloco_conteudo() {
        $arg['porpagina'] = 3;
        $arg['pagina']    = 1;
        $dados = ac_conteudo_listar($arg);

        $saida  = '<div id="contentTdx" class="home-content content-inovacao">';
        $saida .= '<div id="triangle-down"></div>';
        $saida .= '<div class="container pd">';
        $saida .= '<div class="title">';
        $saida .= '<h2 class="titleText text-center">'.__('NOSSOS CONTEÚDOS').'</h2>';
        $saida .= '</div>';
        $saida .= '<div class="row hide-mobile">';
        for ($ac = 0; $ac < count($dados); $ac++ ) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            foreach( $cat_aux as $categoria ) {
                $categorias[] = $categoria;
            }
            $etiquetas  = array();
            $etq_aux = $dados[$ac]['etiquetas'];
            foreach( $etq_aux as $etiqueta ) {
                $etiquetas[] = $etiqueta->name;
            }
            $saida .= '<div class="col-12 col-md-4">';
            $saida .= '<div class="cardContent p-1">';
            $saida .= '<div class="img position-relative">';
            $saida .= '<img src="'.$dados[$ac]['bhdesktop'].'" alt="Depoimento">';
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
            $saida .= '<p>'.$dados[$ac]['tleitura'].' '.__('minutos de leitura').'</p>';
            $saida .= '</div>';
            $saida .= '<div class="acessar">';
            $saida .= '<a href="'.$dados[$ac]['link'].'">'.__('acessar artigo').'</a>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
        }
        $saida .= '</div>';
        $saida .= '<div class="row mx-auto my-auto justify-content-center hide-desktop">';
        $saida .= '<div id="contentMobileCarousel" class="carousel slide p-0" data-bs-ride="carousel">';
        $saida .= '<div class="carousel-inner" role="listbox">';
        for ($ac = 0; $ac < count($dados); $ac++ ) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            foreach( $cat_aux as $categoria ) {
                $categorias[] = $categoria;
            }
            $etiquetas  = array();
            $etq_aux = $dados[$ac]['etiquetas'];
            foreach( $etq_aux as $etiqueta ) {
                $etiquetas[] = $etiqueta->name;
            }
            $saida .= '<div class="carousel-item heroslide4 content active">';
            $saida .= '<div class="col-11 m-0 p-0">';
            $saida .= '<div class="cardContent p-2">';
            $saida .= '<div class="img position-relative">';
            $saida .= '<img src="'.$dados[$ac]['bhmobile'].'" alt="Depoimento">';
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
            $saida .= '<div class="d-flex flex-row aaa">';
            for ($k=0; $k<count($etiquetas); $k++) {
                $saida .= '<a href="#">'.$etiquetas[$k].'</a>';
            }
            $saida .= '</div>';
            $saida .= '<p>'.$dados[$ac]['tleitura'].' '.__('minutos de leitura').'</p>';
            $saida .= '</div>';
            $saida .= '<div class="acessar">';
            $saida .= '<a href="'.$dados[$ac]['link'].'">'.__('acessar artigo').'</a>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
        }
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
        return $saida;
    }
}
add_shortcode( 'ac-bloco-conteudo', 'ac_bloco_conteudo' );






if (!function_exists('ac_pagina_conteudo')) {
    function ac_pagina_conteudo() {
        $arg = array();
        if (isset($_GET['pagina'])) {
            $arg['pagina'] = $_GET['pagina'] + 1;
            $get_pagina = $_GET['pagina'] + 1;
        }
        $get_categoria = '';
        if (isset($_GET['categoria'])) {
            $arg['categoria'] = $_GET['categoria'];
            $get_categoria = $_GET['categoria'];
        }
        $get_etiqueta = array();
        if (isset($_GET['etiqueta'])) {
            $arg['etiqueta']  = $_GET['etiqueta'];
            $get_etiqueta = explode(',',$_GET['etiqueta']);
        }
        $dados = ac_conteudo_listar($arg);
        $t_categorias = ac_conteudo_listar_categorias();
        $t_etiquetas = ac_conteudo_listar_tags($arg);

        $saida  = '<div class="cases-recentes conteudos">';

        /* Desktop */
        $saida .= '<div class="container hide-mobile">';

        /* Filtros */
        $saida .= '<div class="row">';
        $saida .= '<div class="col-7">';
        $saida .= '<div class="assuntos">';
        $saida .= '<h4>'._('escolha um ou mais assuntos').'</h4>';
        $ativo = (count($get_etiqueta)==0) ? 'active' : '';
        $saida .= '<a href="#" class="'.$ativo.' conteudo_etiqueta conteudo_etiqueta_todos" onclick="ac_conteudo_selecao(\'todos\')">'.__('Todos').'</a>';
        foreach ($t_etiquetas as $slug => $nome) {
            $ativo = (in_array($slug, $get_etiqueta)) ? 'active' : '';
            $saida .= '<a href="#" class="'.$ativo.' conteudo_etiqueta conteudo_etiqueta_'.$slug.'" data-conteudo="'.$slug.'" onclick="ac_conteudo_selecao(\''.$slug.'\')">'.$nome.'</a>';
        }
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '<div class="col-5">';
        $saida .= '<div class="filtros">';
        $saida .= '<div class="select">';
        $saida .= '<select name="" onchange="ac_conteudo_selecao(\'\')" class="conteudo_categoria">';
        $saida .= '<option value="">'.('Filtrar por').'</option>';
        foreach ($t_categorias as $slug => $nome) {
            $ativo = ($slug == $get_categoria) ? 'selected' : '';
            $saida .= '<option value="'.$slug.'" '.$ativo.'>'.$nome.'</option>';
        }
        $saida .= '</select>';
        $saida .= '</div>';
        // $saida .= '<div class="search">';
        // $saida .= '<a href="#"><img src="'.get_template_directory_uri().'/assets/icons/nav/search-white.svg" alt="Search Tivit"></a>';
        // $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';

        /* Conteudos */
        $saida .= '<div class="row" id="conteudo-variavel-desktop">';
        for ($ac = 0; $ac < count($dados); $ac++ ) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            foreach( $cat_aux as $categoria ) {
                $categorias[] = $categoria;
            }
            $etiquetas  = array();
            $etq_aux = $dados[$ac]['etiquetas'];
            foreach( $etq_aux as $etiqueta ) {
                $etiquetas[] = $etiqueta->name;
            }
            $saida .= '<div class="col-12 col-md-4">';
            $saida .= '<div class="cardContent p-1">';
            $saida .= '<div class="img position-relative">';
            $saida .= '<img src="'.$dados[$ac]['bhdesktop'].'" alt="Depoimento">';
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
            $saida .= '<p>'.$dados[$ac]['tleitura'].' '.__('minutos de leitura').'</p>';
            $saida .= '</div>';
            $saida .= '<div class="acessar">';
            $saida .= '<a href="'.$dados[$ac]['link'].'">'.__('acessar artigo').'</a>';
            $saida .= '</div>';
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
        $saida .= '<select name="" onchange="ac_conteudo_selecao(\'\')" class="conteudo_etiqueta_mobile" multiple>';
        $saida .= '<option value="">'._('escolha um ou mais assuntos').'</option>';
        foreach ($t_etiquetas as $slug => $nome) {
            $ativo = (in_array($slug, $get_etiqueta)) ? 'selected' : '';
            $saida .= '<option value="'.$slug.'" '.$ativo.'>'.$nome.'</option>';
        }
        $saida .= '</select>';
        $saida .= '</div>';
        $saida .= '<div class="divisao">';
        $saida .= '<div class="select">';
        $saida .= '<select name="" onchange="ac_conteudo_selecao(\'\')" class="conteudo_categoria_mobile">';
        $saida .= '<option value="">'.('Filtrar por').'</option>';
        foreach ($t_categorias as $slug => $nome) {
            $ativo = ($slug == $get_categoria) ? 'selected' : '';
            $saida .= '<option value="'.$slug.'" '.$ativo.'>'.$nome.'</option>';
        }
        $saida .= '</select>';
        $saida .= '</div>';
        $saida .= '<div class="search">';
        $saida .= '<a href="#"><img src="'.get_template_directory_uri().'/assets/icons/nav/search-white.svg" alt="Search Tivit"></a>';
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '<div class="carousel-inner" id="conteudo-variavel-mobile">';
        for ($ac = 0; $ac < count($dados); $ac++ ) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            foreach( $cat_aux as $categoria ) {
                $categorias[] = $categoria;
            }
            $etiquetas  = array();
            $etq_aux = $dados[$ac]['etiquetas'];
            foreach( $etq_aux as $etiqueta ) {
                $etiquetas[] = $etiqueta->name;
            }
            $saida .= '<div class="carousel-item heroslide4 content active">';
            $saida .= '<div class="col-11 m-0 p-0">';
            $saida .= '<div class="cardContent p-2">';
            $saida .= '<div class="img position-relative">';
            $saida .= '<img src="'.$dados[$ac]['bhmobile'].'" alt="Depoimento">';
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
            $saida .= '<div class="d-flex flex-row aaa">';
            for ($k=0; $k<count($etiquetas); $k++) {
                $saida .= '<a href="#">'.$etiquetas[$k].'</a>';
            }
            $saida .= '</div>';
            $saida .= '<p>'.$dados[$ac]['tleitura'].' '.__('minutos de leitura').'</p>';
            $saida .= '</div>';
            $saida .= '<div class="acessar">';
            $saida .= '<a href="'.$dados[$ac]['link'].'">'.__('acessar artigo').'</a>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
        }
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '<input type="hidden" id="conteudo_pag" name="conteudo_pag" value="1"/>';
        return $saida;
    }
}
add_shortcode( 'ac-pagina-conteudo', 'ac_pagina_conteudo' );






if (!function_exists('ac_pagina_conteudo_pesquisa_desktop')) {
    function ac_pagina_conteudo_pesquisa_desktop() {
        $arg = array();
        if (isset($_POST['pagina'])) {
            $arg['pagina'] = $_POST['pagina'] + 1;
            $get_pagina = $_POST['pagina'] + 1;
        }
        $get_categoria = '';
        if (isset($_POST['categoria'])) {
            $arg['categoria'] = $_POST['categoria'];
            $get_categoria = $_POST['categoria'];
        }
        $get_etiqueta = array();
        if (isset($_POST['etiqueta'])) {
            $arg['etiqueta']  = $_POST['etiqueta'];
            $get_etiqueta = explode(',',$_POST['etiqueta']);
        }
        $dados = ac_conteudo_listar($arg);
        $saida = '';
        for ($ac = 0; $ac < count($dados); $ac++ ) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            foreach( $cat_aux as $categoria ) {
                $categorias[] = $categoria;
            }
            $etiquetas  = array();
            $etq_aux = $dados[$ac]['etiquetas'];
            foreach( $etq_aux as $etiqueta ) {
                $etiquetas[] = $etiqueta->name;
            }
            $saida .= '<div class="col-12 col-md-4">';
            $saida .= '<div class="cardContent p-1">';
            $saida .= '<div class="img position-relative">';
            $saida .= '<img src="'.$dados[$ac]['bhdesktop'].'" alt="Depoimento">';
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
            $saida .= '<p>'.$dados[$ac]['tleitura'].' '.__('minutos de leitura').'</p>';
            $saida .= '</div>';
            $saida .= '<div class="acessar">';
            $saida .= '<a href="'.$dados[$ac]['link'].'">'.__('acessar artigo').'</a>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
        }
        echo $saida;
        die();
        return;
    }
}
add_action( 'wp_ajax_ac_pagina_conteudo_pesquisa_desktop', 'ac_pagina_conteudo_pesquisa_desktop' );
add_action( 'wp_ajax_nopriv_ac_pagina_conteudo_pesquisa_desktop', 'ac_pagina_conteudo_pesquisa_desktop' );






if (!function_exists('ac_pagina_conteudo_pesquisa_mobile')) {
    function ac_pagina_conteudo_pesquisa_mobile() {
        $arg = array();
        if (isset($_POST['pagina'])) {
            $arg['pagina'] = $_POST['pagina'] + 1;
            $get_pagina = $_POST['pagina'] + 1;
        }
        $get_categoria = '';
        if (isset($_POST['categoria'])) {
            $arg['categoria'] = $_POST['categoria'];
            $get_categoria = $_POST['categoria'];
        }
        $get_etiqueta = array();
        if (isset($_POST['etiqueta'])) {
            $arg['etiqueta']  = $_POST['etiqueta'];
            $get_etiqueta = explode(',',$_POST['etiqueta']);
        }
        // print_r($arg);
        $dados = ac_conteudo_listar($arg);
        $saida = '';
        for ($ac = 0; $ac < count($dados); $ac++ ) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            foreach( $cat_aux as $categoria ) {
                $categorias[] = $categoria;
            }
            $etiquetas  = array();
            $etq_aux = $dados[$ac]['etiquetas'];
            foreach( $etq_aux as $etiqueta ) {
                $etiquetas[] = $etiqueta->name;
            }
            $saida .= '<div class="carousel-item heroslide4 content active">';
            $saida .= '<div class="col-11 m-0 p-0">';
            $saida .= '<div class="cardContent p-2">';
            $saida .= '<div class="img position-relative">';
            $saida .= '<img src="'.$dados[$ac]['bhmobile'].'" alt="Depoimento">';
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
            $saida .= '<div class="d-flex flex-row aaa">';
            for ($k=0; $k<count($etiquetas); $k++) {
                $saida .= '<a href="#">'.$etiquetas[$k].'</a>';
            }
            $saida .= '</div>';
            $saida .= '<p>'.$dados[$ac]['tleitura'].' '.__('minutos de leitura').'</p>';
            $saida .= '</div>';
            $saida .= '<div class="acessar">';
            $saida .= '<a href="'.$dados[$ac]['link'].'">'.__('acessar artigo').'</a>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
        }
        echo $saida;
        die();
        return;
    }
}
add_action( 'wp_ajax_ac_pagina_conteudo_pesquisa_mobile', 'ac_pagina_conteudo_pesquisa_mobile' );
add_action( 'wp_ajax_nopriv_ac_pagina_conteudo_pesquisa_mobile', 'ac_pagina_conteudo_pesquisa_mobile' );
