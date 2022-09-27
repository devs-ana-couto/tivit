<?php
/**
 *  Vaga
 *
 */
if (!function_exists('ac_vaga_listar')) {
    /**
     * porpagina => Quantos posts por páginas deve retornar
     * pagina => paginacao (inicia-se com 1)
     */
    function ac_vaga_listar($attr=array()) {
        $porpagina = (isset($attr['porpagina']) ? $attr['porpagina'] : -1);
        $pagina    = (isset($attr['pagina'])    ? $attr['pagina']    : 1);
        $args      = array (
            'post_type'       => 'vaga',
            'posts_per_page'  => $porpagina * 1,
            'page'            => $pagina * 1,
            'post_status'     => 'publish',
            'orderby'         => 'menu',
            'order'           => 'ASC',
        );
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
            $resultado[] = array(
                'postid'     => $identif,
                'postdate'   => $dia,
                'link'       => $link,
                'imagem'     => $imagem,
                'conteudo'   => $conteudo,
                'quem'       => $quem,
                'resumo'     => $resumo,
                'titulo'     => $titulo,
            );
        }
        wp_reset_query();
        wp_reset_postdata();
        return $resultado;
    }
}






if (!function_exists('ac_bloco_vaga')) {
    function ac_bloco_vaga() {
        $dados = ac_vaga_listar();

        $saida .= '<div id="pecVagas">';
        $saida .= '<div id="triangle-down"></div>';
        $saida .= '<div class="container">';
        $saida .= '<div class="d-flex justify-content-center align-items-center flex-column w-100">';
        $saida .= '<h2 class="title text-center">'.__('VAGAS','tivit').'</h2>';
        $saida .= '</div>';
        $saida .= '<div class="row items m-0 m-md-auto">';

        for ($ac = 0; $ac < count($dados); $ac++ ) {
            $saida .= '<div class="col-sm-12 col-md-4">';
            $saida .= '<div class="card">';
            $saida .= $dados[$ac]['conteudo'];
            $saida .= '</div>';
            $saida .= '</div>';
        }
        $saida .= '</div>';
        $saida .= '<div class="btnCta d-flex justify-content-center align-items-center w-100">';
        $saida .= '<a href="https://jobs.kenoby.com/tivit" target="_blank">'.__('Ver todas AS VAGAS','tivit').'</a>';
        $saida .= '</div>';
        return $saida;
    }
}
add_shortcode( 'ac-bloco-vaga', 'ac_bloco_vaga' );
