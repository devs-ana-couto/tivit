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

        $saida .= '<div class="a-tivit-cases cases ctivit">';
        $saida .= '<div id="hero" class="carousel slide carousel-fade" data-bs-ride="carousel">';
        $saida .= '<div class="container">';
        $saida .= '<div class="row">';
        $saida .= '<div class="title">';
        $saida .= '<h2 class="text-center">'.__('Confira o que nossas parcerias estratégicas já fizeram!').'</h2>';
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
            $saida .= '<a href="#">'.__('acessar case').'<img src="'.get_template_directory_uri().'/assets/images/a-tivit/arrow.svg" class="hide-desktop" alt="Saiba Mais"><img src="'.get_template_directory_uri().'/assets/images/a-tivit/arrow-red.svg" class="hide-mobile" alt="Saiba Mais"></a>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
        }
        $saida .= '<div class="col-12 col-md-6">';
        $saida .= '<div class="navigation">';
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
            $saida .= '<button type="button" data-bs-target="#content" data-bs-slide-to="'.$ac.'" class="'.($ac == 0 ? 'active' : '').'"aria-current="true" aria-label="Content 1"></button>';
            
        }

        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
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

