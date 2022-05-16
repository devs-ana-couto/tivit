<?php
/**
 *  Equipe
 *
 */
if (!function_exists('ac_equipe_listar')) {
    /**
     * porpagina => Quantos posts por páginas deve retornar
     * pagina => paginacao (inicia-se com 1)
     * categoria => slug da categoria a pesquisar (separar com virgual quando for mais de uma)
     * etiqueta => slug da tag a pesquisar (separar com virgual quando for mais de uma)
     */
    function ac_equipe_listar($attr=array()) {
        $porpagina = (isset($attr['porpagina']) ? $attr['porpagina'] : 5);
        $pagina    = (isset($attr['pagina'])    ? $attr['pagina']    : 1);
        $categoria = (isset($attr['categoria']) ? $attr['categoria'] : '');
        $etiqueta  = (isset($attr['etiqueta'])  ? $attr['etiqueta']  : '');
        $args      = array (
            'post_type'       => 'equipe',
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
            $nome       = $the_query->post->post_title;
            $atuacao       = get_field('area_de_atuacao_equipe');
            $linkedin_url  = get_field('url_linkedin');
            $imagem     = get_field('imagem_equipe');
            $resultado[] = array(
                'postid'   => $identif,
                'nome'     => $nome,
                'linkedin_url'  => $linkedin_url,
                'imagem'   => $imagem,
                'atuacao' => $atuacao
            );
        }
        wp_reset_query();
        return $resultado;
    }
}


if (!function_exists('ac_bloco_equipe')) {
    function ac_bloco_equipe() {
        $arg['porpagina'] = 3;
        $arg['pagina']    = 1;  
        $dados = ac_equipe_listar($arg);


        $saida .= '<div id="pecConheca" class="lp-tbanks-conheca">';
        $saida .= '<div id="triangle-down"></div>';
        $saida .= '<div class="container">';
        $saida .= '<div class="d-flex justify-content-center align-items-center flex-column w-100">';
        $saida .= '<h2 class="title text-center">CONHEÇA A NOSSA EQUIPE</h2>';
        $saida .= '</div>';
        //  <!-- Bloco Carrossel Infinito -->
        $saida .= '<div id="carouselCustom" class="container-fluid text-center my-3">';
        $saida .= '<div class="row mx-auto my-auto justify-content-center">';
        $saida .= '<div id="esg" class="carousel slide" data-bs-ride="carousel">';
        $saida .= '<div class="carousel-inner" role="listbox">';
        
        for($ac = 0; $ac < count($dados); $ac++) {
            $saida .= '<div class="carousel-item heroslide2 '. ($ac==0 ? 'active' : '') .'">';
            $saida .= '<div class="col-11 col-md-3">';
            $saida .= '<div class="card">';
            $saida .= '<div class="card-img position-relative">';
            $saida .= '<img src="'.$dados[$ac]['imagem'].'" alt="'.$dados[$ac]['nome'].'" class="img-fluid w-100">';
            $saida .= '<div class="position-absolute tagIn"><img class="position-absolute imgIn" src="'.get_template_directory_uri().'/assets/images/pessoas-e-carreiras/in-white.svg" alt="Linkedin" class="img-fluid"></div>';
            $saida .= '</div>';
            $saida .= '<div class="content">';
            $saida .= '<h2>'.$dados[$ac]['nome'].'</h2>';
            $saida .= '<p>'.$dados[$ac]['atuacao'].'</p>';
            $saida .= '</div>';
            $saida .= '<div class="redes-sociais d-flex justify-content-center flex-row">';
            $saida .= '<img src="'.get_template_directory_uri().'/assets/images/pessoas-e-carreiras/git.svg" alt="Blog 3" class="img-fluid">';
            $saida .= '<img src="'.get_template_directory_uri().'/assets/images/pessoas-e-carreiras/mundo.svg" alt="Blog 3" class="img-fluid">';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
        }
        $saida .= '</div>';
        $saida .= '<div class="d-flex justify-content-center mt-5">';
        $saida .= '<a class="carousel-control-prev bg-transparent w-aut" href="#esg" role="button" data-bs-slide="prev">';
        $saida .= '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
        $saida .= '</a>';
        $saida .= '<div class="d-flex flex-row counter2">';
        $saida .= '<div class="numactive2"></div><div class="numseparation2"></div><div class="numtotal2"></div>';
        $saida .= '<a class="carousel-control-next bg-transparent w-aut" href="#esg" role="button" data-bs-slide="next">';
        $saida .= '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
        $saida .= '</a>';
        
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
add_shortcode( 'ac-bloco-equipe', 'ac_bloco_equipe' );