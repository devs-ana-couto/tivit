<?php
/**
 *  Equipe
 *
 */
if (!function_exists('ac_equipe_listar')) {
    /**
     * porpagina => Quantos posts por páginas deve retornar
     * pagina => paginacao (inicia-se com 1)
     * comdepoimento => true traz somente os que tem depoimento
     */
    function ac_equipe_listar($attr=array()) {
        $porpagina  = (isset($attr['porpagina']) ? $attr['porpagina'] : -1);
        $pagina     = (isset($attr['pagina'])    ? $attr['pagina']    : 1);
        $depoimento = (isset($attr['comdepoimento']) ? true : false);
        $args      = array (
            'post_type'       => 'equipe',
            'posts_per_page'  => $porpagina * 1,
            'page'            => $pagina * 1,
            'post_status'     => 'publish',
            'orderby'         => 'menu',
            'order'           => 'ASC',
        );
        if ( $depoimento ) {
            $args['meta_key']    = 'equipe_depoimento';
            $args['meta_value']  = '';
            $args['meta_compare'] = '!=';
        }
        $the_query = new WP_Query( $args );
        $resultado = array();
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $identif    = $the_query->post->ID;
            $titulo     = get_the_title();
            // $conteudo   = apply_filters( 'the_content', get_the_content() );
            // $conteudo   = str_replace( ']]>', ']]&gt;', $conteudo );
            // $resumo     = get_the_content();
            // $link       = get_permalink();
            // $dia        = get_the_date();
            // $quem       = get_the_author();
            // $imagem      = '';
            // $teste       = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $conteudo, $encontrou);
            // $imagem      = (isset($encontrou[1][0])) ? $encontrou[1][0] : '';
            $imagem      = get_field('imagem_equipe');
            $atuacao     = get_field('area_de_atuacao_equipe');
            $linkedin    = get_field('url_linkedin');
            $depoimento  = get_field('equipe_depoimento');
            $resultado[] = array(
                'postid'     => $identif,
                'imagem'     => $imagem,
                'titulo'     => $titulo,
                'atuacao'    => $atuacao,
                'linkedin'   => $linkedin,
                'depoimento' => $depoimento,
            );
        }
        wp_reset_query();
        return $resultado;
    }
}


if (!function_exists('ac_bloco_equipe')) {
    function ac_bloco_equipe($attr=array()) {
        $depoimento = (isset($attr['comdepoimento']) ? true : false);
        $dados = ac_equipe_listar($attr);
        $saida  = '';

        if ($depoimento) {
            $saida .= '<div id="pecInterno">';
            $saida .= '<div id="pecInternoDepoimentos" class="lp-tbanks-depoimentos">';
            $saida .= '<div id="recipeCarouselInterno" class="carousel slide" data-bs-ride="carousel">';
            $saida .= '<div class="carousel-inner">';
            for ($ac = 1; $ac < count($dados); $ac++ ) {
                // if ($dados[$ac]['depoimento']!='') {
                    $ativo = ($ac==1) ? 'active' : '';
                    $saida .= '<div class="carousel-item heroslide3 '.$ativo.'">';
                    $saida .= '<div class="container">';
                    $saida .= '<div class="row">';
                    $saida .= '<div class="col-md-12">';
                    $saida .= '<div class="lp-tbanks-depoimentos-content text-center ">';
                    $saida .= '<div class="lp-tbanks-depoimentos-autor">';
                    $saida .= '<img src="'.$dados[$ac]['imagem'].'" alt="Tbanks Saiba Mais">';
                    $saida .= '<h3>'.$dados[$ac]['titulo'].'</h3>';
                    $saida .= '<h4>'.$dados[$ac]['atuacao'].'</h4>';
                    $saida .= '<div class="redes d-flex flex-row justify-content-center align-items-center w-100">';
                    $saida .= '<a href="'.$dados[$ac]['linkedin'].'" target="_blank"><img src="'.get_template_directory_uri().'/assets/images/pessoas-e-carreiras/in.svg" alt="Linkedin" class="img-fluid"></a>';
                    $saida .= '</div>';
                    $saida .= '<p>"'.$dados[$ac]['depoimento'].'"</p>';
                    $saida .= '</div>';
                    $saida .= '</div>';
                    $saida .= '</div>';
                    $saida .= '</div>';
                    $saida .= '</div>';
                    $saida .= '</div>';
                // }
            }
            $saida .= '</div>';
            $saida .= '<div class="d-flex flex-row justify-content-center counter3 mt-3 mobileRelative position-relative">';
            $saida .= '<div class="numactive3"></div><div class="numseparation3"></div><div class="numtotal3"></div>';
            $saida .= '<button class="carousel-control-prev" type="button" data-bs-target="#recipeCarouselInterno" data-bs-slide="prev">';
            $saida .= '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
            $saida .= '<span class="visually-hidden">Previous</span>';
            $saida .= '</button>';
            $saida .= '<button class="carousel-control-next" type="button" data-bs-target="#recipeCarouselInterno" data-bs-slide="next">';
            $saida .= '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
            $saida .= '<span class="visually-hidden">Next</span>';
            $saida .= '</button>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
        } else {
            $saida .= '<div id="pecConheca" class="lp-tbanks-conheca">';
            $saida .= '<div id="triangle-down"></div>';
            $saida .= '<div class="container">';
            $saida .= '<div class="d-flex justify-content-center align-items-center flex-column w-100">';
            $saida .= '<h2 class="title text-center">'.__('CONHEÇA A NOSSA EQUIPE').'</h2>';
            $saida .= '</div>';
            $saida .= '<div id="carouselCustom" class="container-fluid text-center my-3">';
            $saida .= '<div class="row mx-auto my-auto justify-content-center">';
            $saida .= '<div id="esg" class="carousel slide" data-bs-ride="carousel">';
            $saida .= '<div class="carousel-inner" role="listbox">';
            for ($ac = 0; $ac < count($dados); $ac++ ) {
                $ativo = ($ac==0) ? 'active' : '';
                $saida .= '<div class="carousel-item heroslide2 '.$ativo.'">';
                $saida .= '<div class="col-11 col-md-3">';
                $saida .= '<div class="card">';
                $saida .= '<div class="card-img position-relative">';
                $saida .= '<img src="'.$dados[$ac]['imagem'].'" alt="'.$dados[$ac]['titulo'].'" class="img-fluid w-100">';
                $saida .= '<div class="position-absolute tagIn"> <img class="position-absolute imgIn" src="'.get_template_directory_uri().'/assets/images/pessoas-e-carreiras/in-white.svg" alt="Linkedin" class="img-fluid"> </div>';
                $saida .= '</div>';
                $saida .= '<div class="content">';
                $saida .= '<h2>'.$dados[$ac]['titulo'].'</h2>';
                $saida .= '<p>'.$dados[$ac]['atuacao'].'</p>';
                $saida .= '</div>';
                $saida .= '<div class="redes-sociais d-flex justify-content-center flex-row">';
                $saida .= '<a href="'.$dados[$ac]['linkedin'].'" target="_blank"><img src="'.get_template_directory_uri().'/assets/images/pessoas-e-carreiras/in.svg" alt="Linkedin" class="img-fluid"></a>';
                $saida .= '</div>';
                $saida .= '</div>';
                $saida .= '</div>';
                $saida .= '</div>';
            }
            $saida .= '</div>'; //.carousel-inner
            $saida .= '<div class="d-flex justify-content-center mt-5">';
            $saida .= '<a class="carousel-control-prev bg-transparent w-aut" href="#esg" role="button" data-bs-slide="prev">';
            $saida .= '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
            $saida .= '</a>';
            $saida .= '<div class="d-flex flex-row counter2">';
            $saida .= '<div class="numactive2"></div><div class="numseparation2"></div><div class="numtotal2"></div>';
            $saida .= '</div>'; //.counter2
            $saida .= '<a class="carousel-control-next bg-transparent w-aut" href="#esg" role="button" data-bs-slide="next">';
            $saida .= '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
            $saida .= '</a>';
            $saida .= '</div>'; //."d-flex justify-content-center mt-5

            $saida .= '</div>'; //#esg
            $saida .= '</div>'; //.row mx-auto my-auto justify-content-center
            $saida .= '</div>'; //.carouselCustom
            $saida .= '</div>'; //.container
            $saida .= '</div>'; //#pecConheca
        }
        return $saida;
    }
}
add_shortcode( 'ac-bloco-equipe', 'ac_bloco_equipe' );