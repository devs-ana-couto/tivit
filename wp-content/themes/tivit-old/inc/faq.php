<?php
/**
 *  FAQ
 *
 */
if (!function_exists('ac_faq_listar')) {
    /**
     * porpagina => Quantos posts por páginas deve retornar
     * pagina => paginacao (inicia-se com 1)
     * categoria => slug da categoria a pesquisar (separar com virgual quando for mais de uma)
     */
    function ac_faq_listar($attr=array()) {
        $porpagina = (isset($attr['porpagina']) ? $attr['porpagina'] : -1);
        $pagina    = (isset($attr['pagina'])    ? $attr['pagina']    : 1);
        $categoria = (isset($attr['categoria']) ? $attr['categoria'] : '');
        $args      = array (
            'post_type'       => 'faq',
            'posts_per_page'  => $porpagina * 1,
            'page'            => $pagina * 1,
            'post_status'     => 'publish',
            'orderby'         => 'menu',
            'order'           => 'ASC',
        );
        if ( $categoria != '' ) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'tipos-faq',
                    'field'    => 'slug',
                    'terms'    => $categoria,
                ),
            );
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
            $imagem      = '';
            $teste       = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $conteudo, $encontrou);
            $imagem      = (isset($encontrou[1][0])) ? $encontrou[1][0] : '';
            $cat_aux    = get_the_terms($identif,'tipos-faq');
            $categorias = array();
            if ((is_array($cat_aux)) && (count($cat_aux)>0)) {
                foreach( $cat_aux as $categoria ) {
                    $categorias[$categoria->term_id] = $categoria->name;
                }
            }
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
            );
        }
        wp_reset_query();
        wp_reset_postdata();
        return $resultado;
    }
}



if (!function_exists('ac_faq_listar_categorias')) {
    function ac_faq_listar_categorias() {
        $args = array (
            'post_type'       => 'post',
            'posts_per_page'  => -1,
        );
        $categorias = array();
        $the_query  = new WP_Query( $args );
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $cat_aux = get_the_terms($identif,'tipos-faq');
            if ((is_array($cat_aux)) && (count($cat_aux)>0)) {
                foreach( $cat_aux as $categoria ) {
                    $categorias[$categoria->slug] = $categoria->name;
                }
            }
        }
        wp_reset_query();
        wp_reset_postdata();
        asort($categorias);
        return $categorias;
    }
}






if (!function_exists('ac_bloco_faq')) {
    function ac_bloco_faq($attr=array()) {
        $dados = ac_faq_listar($attr);
        // $dados = array();

        $saida  = '<div id="contentTdx" class="home-content">';
        $saida .= '<div class="d-flex justify-content-center transitionContent hide-mobile position-absolute"></div>';
        $saida .= '<div id="triangle-down"></div>';
        $saida .= '<div class="container pd">';
        $saida .= '<div class="title">';
        $saida .= '<h2 class="titleText text-center">'.__('NOSSOS CONTEÚDOS').'</h2>';
        $saida .= '</div>';
        $saida .= '<div class="row hide-mobile">';

        $saida  = '<div id="faq" class="d-flex flex-column align-items-center justify-content-center insiderBlock">';
        $saida .= '<div class="d-flex justify-content-center align-items-center flex-column w-100">';
        $saida .= '<h2 class="title text-center">'.__('ainda tem dúvidas? veja as perguntas frequentes:').'</h2>';
        $saida .= '</div>';
        $saida .= '<div class="w-100 block">';
        $saida .= '<div class="accordion accordion-flush" id="accordionFlushExample">';

        for ($ac = 0; $ac < count($dados); $ac++ ) {
            $saida .= '<div class="accordion-item">';
            $saida .= '<h2 class="accordion-header" id="flush-heading'.$ac.'">';
            $saida .= '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse'.$ac.'" aria-expanded="false" aria-controls="flush-collapse'.$ac.'">';
            $saida .= $dados[$ac]['titulo'];
            $saida .= '</button>';
            $saida .= '</h2>';
            $saida .= '<div id="flush-collapse'.$ac.'" class="accordion-collapse collapse" aria-labelledby="flush-heading'.$ac.'" data-bs-parent="#accordionFlushExample">';
            $saida .= '<div class="accordion-body">'.$dados[$ac]['conteudo'].'</div>';
            $saida .= '</div>';
            $saida .= '</div>';
        }
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
        return $saida;
    }
}
add_shortcode( 'ac-bloco-faq', 'ac_bloco_faq' );






if (!function_exists('ac_pagina_faq')) {
    function ac_pagina_faq() {
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
        $dados = ac_faq_listar($arg);
        $t_categorias = ac_faq_listar_categorias();

        $saida  = '<div class="cases-recentes faqs">';

        /* Desktop */
        $saida .= '<div class="container hide-mobile">';

        /* Filtros */
        $saida .= '<div class="row">';
        $saida .= '<div class="col-5">';
        $saida .= '<div class="filtros">';
        $saida .= '<div class="select">';
        $saida .= '<select name="" onchange="ac_faq_selecao(\'\')" class="faq_categoria">';
        $saida .= '<option value="">'.('Filtrar por').'</option>';
        if ((is_array($t_categorias)) && (count($t_categorias)>0)) {
            foreach ($t_categorias as $slug => $nome) {
                $ativo = ($slug == $get_categoria) ? 'selected' : '';
                $saida .= '<option value="'.$slug.'" '.$ativo.'>'.$nome.'</option>';
            }
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
        $saida .= '<div class="row" id="faq-variavel-desktop">';
        for ($ac = 0; $ac < count($dados); $ac++ ) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            if ((is_array($cat_aux)) && (count($cat_aux)>0)) {
                foreach( $cat_aux as $categoria ) {
                    $categorias[] = $categoria;
                }
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
        $saida .= '<div class="divisao">';
        $saida .= '<div class="select">';
        $saida .= '<select name="" onchange="ac_faq_selecao(\'\')" class="faq_categoria_mobile">';
        $saida .= '<option value="">'.('Filtrar por').'</option>';
        if ((is_array($t_categorias)) && (count($t_categorias)>0)) {
            foreach ($t_categorias as $slug => $nome) {
                $ativo = ($slug == $get_categoria) ? 'selected' : '';
                $saida .= '<option value="'.$slug.'" '.$ativo.'>'.$nome.'</option>';
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
        $saida .= '<div class="carousel-inner" id="faq-variavel-mobile">';
        for ($ac = 0; $ac < count($dados); $ac++ ) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            if ((is_array($cat_aux)) && (count($cat_aux)>0)) {
                foreach( $cat_aux as $categoria ) {
                    $categorias[] = $categoria;
                }
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
        $saida .= '<input type="hidden" id="faq_pag" name="faq_pag" value="1"/>';
        return $saida;
    }
}
add_shortcode( 'ac-pagina-faq', 'ac_pagina_faq' );






if (!function_exists('ac_pagina_faq_pesquisa_desktop')) {
    function ac_pagina_faq_pesquisa_desktop() {
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
        $dados = ac_faq_listar($arg);
        $saida = '';
        for ($ac = 0; $ac < count($dados); $ac++ ) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            if ((is_array($cat_aux)) && (count($cat_aux)>0)) {
                foreach( $cat_aux as $categoria ) {
                    $categorias[] = $categoria;
                }
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
add_action( 'wp_ajax_ac_pagina_faq_pesquisa_desktop', 'ac_pagina_faq_pesquisa_desktop' );
add_action( 'wp_ajax_nopriv_ac_pagina_faq_pesquisa_desktop', 'ac_pagina_faq_pesquisa_desktop' );






if (!function_exists('ac_pagina_faq_pesquisa_mobile')) {
    function ac_pagina_faq_pesquisa_mobile() {
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
        $dados = ac_faq_listar($arg);
        $saida = '';
        for ($ac = 0; $ac < count($dados); $ac++ ) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            if ((is_array($cat_aux)) && (count($cat_aux)>0)) {
                foreach( $cat_aux as $categoria ) {
                    $categorias[] = $categoria;
                }
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
add_action( 'wp_ajax_ac_pagina_faq_pesquisa_mobile', 'ac_pagina_faq_pesquisa_mobile' );
add_action( 'wp_ajax_nopriv_ac_pagina_faq_pesquisa_mobile', 'ac_pagina_faq_pesquisa_mobile' );
