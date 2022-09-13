<?php
/**
 *  Clientes
 *
 */
if (!function_exists('ac_clientes_listar')) {
    /**
     * porpagina => Quantos posts por páginas deve retornar
     * pagina => paginacao (inicia-se com 1)
     * categoria => slug da categoria a pesquisar (separar com virgual quando for mais de uma)
     * etiqueta => slug da tag a pesquisar (separar com virgual quando for mais de uma)
     */
    function ac_clientes_listar($attr=array()) {
        $porpagina = (isset($attr['porpagina']) ? $attr['porpagina'] : 5);
        $pagina    = (isset($attr['pagina'])    ? $attr['pagina']    : 1);
        $categoria = (isset($attr['categoria']) ? $attr['categoria'] : '');
        $etiqueta  = (isset($attr['etiqueta'])  ? $attr['etiqueta']  : '');
        $args      = array (
            'post_type'       => 'clientes',
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
            $titulo     = $the_query->post->post_title;
            $link       = get_field('link_cliente');
            $imagem     = get_field('imagem_cliente');
            $etiquetas = get_the_tags($identif);
            $resultado[] = array(
                'postid'     => $identif,
                'link'       => $link,
                'imagem'     => $imagem,
                'titulo'     => $titulo,       
            );
        }
        wp_reset_query();
        return $resultado;
    }
}

if (!function_exists('ac_bloco_clientes')) {
    function ac_bloco_clientes() {
        $arg['porpagina'] = 6;
        $arg['pagina']    = 1;
        $dados = ac_clientes_listar($arg);

        $saida = '<div class="container">';
        $saida .= '<div class="row justify-content-center">';

        $saida .= '<div class="col-auto box-title mt-5">';
        $saida .= '<h2>Com quem trabalhamos</h2>';
        $saida .= '</div>';

        $saida .= '<div class="col-12 box-slider">';
        $saida .= '<div class="row justify-content-start row-cols-3 row-cols-lg-4">';
        for ($ac = 0; $ac < count($dados); $ac++ ) {
            $saida .= '<div class="col box-img"   data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">';
            $saida .= '<a href="'.$dados[$ac]['link'].'">';
            $saida .= '<img src="'.$dados[$ac]['imagem'].'" alt="Logo da '.$dados[$ac]['titulo'].'">';
            $saida .= '</a>';
            $saida .= '</div>';
        }
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';


        return $saida;
    }
}
/*if (!function_exists('ac_bloco_clientes')) {
    function ac_bloco_clientes() {
        $arg['porpagina'] = 6;
        $arg['pagina']    = 1;  
        $dados = ac_clientes_listar($arg);


        $saida .= '<div class="container">';
        $saida .= '<div class="title w-100" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">';
        $saida .= '<h2 class="text-center">Com quem trabalhamos</h2>';
        $saida .= '</div>';
        $saida .= '<div class="d-flex justify-content-between hide-mobile" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">';
        for ($ac = 0; $ac < count($dados); $ac++ ) {
            $saida .= '<a href="'.$dados[$ac]['link'].'">';
            $saida .= '<img src="'.$dados[$ac]['imagem'].'" alt="Logo da '.$dados[$ac]['titulo'].'">';
            $saida .= '</a>';
        }
        $saida .= '</div>';

        $saida .= '<div class="row mx-auto my-auto justify-content-center hide-desktop">';
        $saida .= '<div id="customerCarouselHome" class="carousel slide" data-bs-ride="carousel">';
        $saida .= '<div class="carousel-inner" role="listbox">';
        for($ac = 0; $ac < count($dados); $ac++) {
            $saida .= ' <div class="carousel-item heroslide3 customers '.($ac == 0 ? 'active' : '').'">';
            $saida .= '<div class="col-6 col-md-2">';
            $saida .= '<div class="h-100">';
            $saida .= '<div class="m-3">';
            $saida .= '<img src="'.$dados[$ac]['imagem'].'" alt="Logo '.$dados[$ac]['titulo'].'">';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
        }
        $saida .= '</div>';

        $saida .= '<div class="w-100 position-relative mt-2">';
        $saida .= '<a class="carousel-control-prev bg-transparent w-aut" href="#customerCarouselHome" role="button" data-bs-slide="prev">';
        $saida .= '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
        $saida .= '</a>';
        $saida .= '<div class="d-flex flex-row justify-content-center counter3 mt-3">';
        $saida .= '<div class="numactive3"></div><div class="numseparation3"></div><div class="numtotal3"></div>';
        $saida .= '</div>';
        $saida .= '<a class="carousel-control-next bg-transparent w-aut" href="#customerCarouselHome" role="button" data-bs-slide="next">';
        $saida .= '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
        $saida .= '</a>';
        $saida .= '</div>';

        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';

        return $saida;
    }
}*/
add_shortcode( 'ac-bloco-clientes', 'ac_bloco_clientes' );