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
    function ac_cases_listar($attr = array())
    {
        $porpagina = (isset($attr['porpagina']) ? $attr['porpagina'] : 5);
        $pagina = (isset($attr['pagina']) ? $attr['pagina'] : 1);
        $categoria = (isset($attr['categoria']) ? $attr['categoria'] : '');
        $etiqueta = (isset($attr['etiqueta']) ? $attr['etiqueta'] : '');
        $args = array(
            'post_type' => 'cases',
            'posts_per_page' => $porpagina * 1,
            'page' => $pagina * 1,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
        );
        if ($categoria != '') {
            $args['category_name'] = $categoria;
        }
        if ($etiqueta != '') {
            $args['tag'] = $etiqueta;
        }
        $the_query = new WP_Query($args);
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $identif = $the_query->post->ID;
            $titulo = get_the_title();
            $cases = apply_filters('the_content', get_the_content());
            $cases = str_replace(']]>', ']]&gt;', $cases);
            $resumo = get_the_content();
            $link = get_permalink();
            $dia = get_the_date();
            $quem = get_the_author();
            $cliente = get_field('nome_do_cliente');
            $bgmobile = get_field('banner_mobile');
            $bgdesktop = get_field('banner_desktop');
            $tleitura = get_field('tempo_de_leitura');
            $chamada = get_field('chamada_sobre');
            $imagem = '';
            $teste = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $cases, $encontrou);
            $imagem = (isset($encontrou[1][0])) ? $encontrou[1][0] : '';
            $cat_aux = get_the_category();
            $categorias = array();
            if (is_array($cat_aux) || is_object($cat_aux)) {
                foreach ($cat_aux as $categoria) {
                    $categorias[$categoria->term_id] = $categoria->name;
                }
            }
            $etiquetas = get_the_tags($identif);
            $resultado[] = array(
                'postid' => $identif,
                'postdate' => $dia,
                'link' => $link,
                'imagem' => $imagem,
                'cases' => $cases,
                'quem' => $quem,
                'resumo' => $resumo,
                'titulo' => $titulo,
                'categorias' => $categorias,
                'etiquetas' => $etiquetas,
                'cliente' => $cliente,
                'bgmobile' => $bgmobile,
                'bgdesktop' => $bgdesktop,


            );
        }
        wp_reset_query();
        return $resultado;
    }
}


if (!function_exists('ac_cases_listar_categorias')) {
    function ac_cases_listar_categorias()
    {
        $args = array(
            'post_type' => 'cases',
            'posts_per_page' => -1,
        );
        $categorias = array();
        $the_query = new WP_Query($args);
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $cat_aux = get_the_category();
            if (is_array($cat_aux) || is_object($cat_aux)) {
                foreach ($cat_aux as $categoria) {
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
    function ac_cases_listar_tags($attr = array())
    {
        $categoria = (isset($attr['categoria']) ? $attr['categoria'] : '');
        $args = array(
            'post_type' => 'cases',
            'posts_per_page' => -1,
        );
        if ($categoria != '') {
            $args['category_name'] = $categoria;
        }
        $etiquetas = array();
        $the_query = new WP_Query($args);
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $identif = $the_query->post->ID;
            $etiq_aux = get_the_tags($identif);
            if (is_array($etiq_aux) || is_object($etiq_aux)) {
                foreach ($etiq_aux as $etiqueta) {
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
    function ac_bloco_cases()
    {
        $arg['porpagina'] = 3;
        $arg['pagina'] = 1;
        $dados = ac_cases_listar($arg);

        $saida = '';
        $saida .= '<div class="carousel-indicators">';
        for ($ac = 0; $ac < count($dados); $ac++) {
            if ($ac === 0) {
                $bulletAtivo = 'class="active"';
            }
            $saida .= '<button type="button" data-bs-target="#slider-categoria01" data-bs-slide-to="' . $ac . '"
                            ' . $bulletAtivo . ' aria-current="true" aria-label="'. $dados[$ac]['titulo'] .'"></button>';

        }
        $saida .= '</div>';
        $saida .= '<div class="carousel-inner">';
        for ($ac = 0; $ac < count($dados); $ac++) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            if (is_array($cat_aux) || is_object($cat_aux)) {
                foreach ($cat_aux as $categoria) {
                    $categorias[] = $categoria;
                }
            }
            $etiquetas = array();
            $etq_aux = $dados[$ac]['etiquetas'];
            $classEtiqueta = 'd-none';
            if (is_array($etq_aux) || is_object($etq_aux)) {
                foreach ($etq_aux as $etiqueta) {
                    $etiquetas[] = $etiqueta->name;
                    $classEtiqueta = "d-block";
                }
            }


            $saida .= '<div class="carousel-item' . ($ac == 0 ? ' active' : '') . '">';

            $saida .= '
                <div class="row justify-content-end d-none d-lg-flex">
                   <div class="col-auto position-absolute h-100 v-mask d-flex justify-content-end">
                       <img class="img-fluid"
                           src="' . get_template_directory_uri() . '/assets/images/modulos/categoria-slider/mask-slider.svg"
                              alt="">
                   </div>
                </div>
            ';

            $saida .= '<div class="row gx-0 h-100 justify-content-between">';
            $saida .= '<div class="col-12 col-lg-4 box-infos p-4 p-lg-5">';
            $saida .= '<div class="container h-100 case-infos d-flex align-items-end">';
            $saida .= '<div class="row justify-content-start align-items-end">';
            $saida .= '<div class="col-12 n-acao">';
            $saida .= '<p>Nome da ação: <strong>' . $dados[$ac]['cliente'] . '</strong></p>';
            $saida .= '</div>';
            $saida .= '<div class="col-12 title">';
            $saida .= '<h3 class="title-text">' . $dados[$ac]['titulo'] . '</h3>';
            $saida .= '</div>';
            $saida .= '<div class="col-12 box-desc">';
            $saida .= '<p></p>';
            $saida .= '</div>';
            $saida .= '<div class="col-auto box-tags mt-2 mt-lg-4 ' . $classEtiqueta . '">';
            $saida .= '<ul class="list-group list-group-horizontal">';
            $saida .= '<li class="list-group-item"><a href="#">' . $etiqueta . '</a></li>';
            $saida .= '</ul>';
            $saida .= '</div>';
            $saida .= '<div class="col-12 box-link mt-2 mt-lg-4">';
            $saida .= '<a href="#">VER AÇÃO</a>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '<div class="col-12 col-lg-8 box-img">';
            $saida .= '<img src="' . $dados[$ac]['bgdesktop'] . '"
                                     class="d-block w-100" alt="...">';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';

        }
        $saida .= '</div>';
        $saida .= '<div class="col-auto position-relative controlador">';
        $saida .= '<button class="carousel-control-prev" type="button"
                            data-bs-target="#slider-categoria01"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>';
        $saida .= '<button class="carousel-control-next" type="button"
                            data-bs-target="#slider-categoria01"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>';
        $saida .= '</div>';
        $saida .= '';
        $saida .= '';


        return $saida;
    }
}
add_shortcode('ac-bloco-cases', 'ac_bloco_cases');

if (!function_exists('ac_bloco_home_cases')) {
    function ac_bloco_home_cases()
    {
        $arg['porpagina'] = 3;
        $arg['pagina'] = 1;
        $dados = ac_cases_listar($arg);

        $saida = "";

        $saida .= '<div class="home-cases-content left text-center">';
        $saida .= '<div class="row d-flex justify-content-center">';
        $saida .= '<div class="d-flex flex-wrap customContainer">';

        for ($ac = 0; $ac < count($dados); $ac++) {
            $saida .= '<div class="col-12 col-lg-4" onclick="redirect_article(\'' . $dados[$ac]['link'] . '\')" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">';
            $saida .= '<div class="card border-0 cardCases bg1 m-3 position-relative" style="background-image: url(\'' . $dados[$ac]['bgdesktop'] . ' \')">';
            $saida .= '<div class="card-img-overlay overlay d-flex align-content-end flex-wrap">';
            $saida .= '<div class="card-body border-0 p-0  ">';


            $saida .= '<div class="textCase">';
            $saida .= '<h3>' . $dados[$ac]['cliente'] . '</h3>';
            $saida .= '<p>' .  $dados[$ac]['titulo']. '</p>';
            $saida .= '</div>';

            $saida .= '</div>';
            $saida .= '<div class="card-footer w-100 border-0 px-0">';
            $saida .= '<div class="box-link-cta">';
            $saida .= '<a href="' . $dados[$ac]['link'] . '" class="p-0">VER CASE</a>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
        }


        $saida .= '</div>';


        $saida .= '<div class="col-12">';
        $saida .= '<div class="d-flex justify-content-center align-items-center box-btn mt-4">';
        $saida .= '<button class="btncontent"><a href="/staged/tivit/cases">VER TODOS OS CASES</a></button>';

        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';

        return $saida;
    }
}
add_shortcode('ac_bloco_home_cases', 'ac_bloco_home_cases');




/***
 * [ac-pagina-cases categorias="categoria1,categoria2" fundo="claro" quantidade="3" vejamais=false]Título[/ac-pagina-cases]
 *
 * Sendo:
 *   categorias: listar os slugs das categorias a listar separadas por virgula
 *   fundo: "claro" ou "escuro" determina qual a cor do fundo do componente, padrão é "claro"
 *   quantidade: quantos cards serão mostrados, padrão é 3
 *   vejamais: true/false se deve aparecer o botao "veja mais" ou não
 *   Título: texto que aparecerá como titulo do componente
 *
***/
if (!function_exists('ac_pagina_cases')) {
    function ac_pagina_cases( $atts, $content = null ) {
        $conteudo_bloco = apply_filters( 'the_content', $content );
        $conteudo_bloco = str_replace( ']]>', ']]&gt;', $conteudo_bloco );
        $categorias_bloco = (isset($atts['categorias'])) ? $atts['categorias'] : '';
        $fundo = (isset($atts['fundo'])) ? $atts['fundo'] : 'claro';
        $quantidade = (isset($atts['quantidade'])) ? intval($atts['quantidade']) : 3;
        $vejamais = (isset($atts['vejamais'])) ? $atts['vejamais'] : false;
        if ($quantidade==0) $quantidade = 3;
        $cor_fundo = ($fundo=='escuro') ? 'ac_bloco_conteudo_escuro' : 'ac_bloco_conteudo_claro';
        if ($vejamais=="true") {
            $vejamais = true;
        } else {
            $vejamais = false;
        }

        $args = array(
            'post_type' => 'cases',
            'posts_per_page' => $quantidade,
            'page' => 1,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
        );
        if ($categorias_bloco != '') {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'areas-de-interesse-tools',
                    'field'    => 'slug',
                    'terms'    => $categorias_bloco,
                )
            );
        }
        $the_query = new WP_Query($args);
        $dados = array();
        $categoria_lista = array();
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $identif = $the_query->post->ID;
            $titulo = get_the_title();
            $conteudo = apply_filters('the_content', get_the_content());
            $conteudo = str_replace(']]>', ']]&gt;', $conteudo);
            $resumo = get_the_content();
            $link = get_permalink();
            $dia = get_the_date();
            $quem = get_the_author();
            $cliente = get_field('nome_do_cliente');
            $bgmobile = get_field('banner_mobile');
            $bgdesktop = get_field('banner_desktop');
            // $tleitura = get_field('tempo_de_leitura');
            // $chamada = get_field('chamada_sobre');
            $imagem = '';
            $teste = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $conteudo, $encontrou);
            $imagem = (isset($encontrou[1][0])) ? $encontrou[1][0] : '';
            // $cat_aux = get_the_category();
            $cat_aux = get_the_terms($identif, 'areas-de-interesse-tools');
            $categorias = array();
            if (is_array($cat_aux) || is_object($cat_aux)) {
                foreach ($cat_aux as $categoria) {
                    $categorias[$categoria->slug] = $categoria->name;
                    $categoria_lista[$categoria->slug] = $categoria->name;
                }
            }
            $etiquetas = get_the_tags($identif);
            $dados[] = array(
                'postid' => $identif,
                'postdate' => $dia,
                'link' => $link,
                'imagem' => $imagem,
                'quem' => $quem,
                'resumo' => $resumo,
                'conteudo' => $conteudo,
                'titulo' => $titulo,
                'categorias' => $categorias,
                'etiquetas' => $etiquetas,
                'cliente' => $cliente,
                'bhmobile' => $bgmobile,
                'bhdesktop' => $bgdesktop,
            );
        }
        wp_reset_query();
        asort($categoria_lista);

        $saida  = '';
        // $saida .= '<div class="ac_bloco_conteudo '.$cor_fundo.'"><div id="triangle-down"></div>';
        $saida .= '<div class="ac_bloco_conteudo '.$cor_fundo.'">';
        $saida .= '<div class="container pd" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">';
        $saida .= '<input id="ac_bloco_conteudo_quantidade" type="hidden" value="'.$quantidade.'">';
        $saida .= '<input id="ac_bloco_conteudo_pagina" type="hidden" value="1">';
        $saida .= '<div class="title"><h2 class="titleText text-center">'.$content.'</h2></div>';

        if ($vejamais) {
            $saida .= '<div class="row">';
            $saida .= '<div class="col-12">';
            $saida .= '<div class="assuntos">';
            $saida .= '<h4>'.__('escolha um ou mais assuntos', 'tivit').'</h4>';
            $saida .= '<a href="#" class="active conteudo_etiqueta conteudo_etiqueta_todos" onclick="ac_conteudo_lista_categoria_case(\'todos\')" data-conteudo="">'.__('Todos', 'tivit').'</a>';
            foreach ($categoria_lista as $chave => $valor) {
                $saida .= '<a href="#" class="conteudo_etiqueta conteudo_etiqueta_'.$chave.'" data-conteudo="'.$chave.'" onclick="ac_conteudo_lista_categoria_case(\''.$chave.'\')">'.$valor.'</a>';
            }
            $saida .= '</div>'; //.assuntos
            $saida .= '</div>'; //.col
            $saida .= '</div>'; //.row
        }


        $saida .= '<div class="row ac_bloco_conteudo_resultado">';
        for ($ac = 0; $ac < count($dados); $ac++) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            if ((is_array($cat_aux)) && (count($cat_aux) > 0)) {
                foreach ($cat_aux as $categoria) {
                    $categorias[] = $categoria;
                }
            }
            $saida .= '<div class="col-12 col-md-4" onclick="redirect_article(\''.$dados[$ac]['link'] .'\')">';
            $saida .= '<div class="card cardContent p-1 h-100 bg-transparent border-0" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">';
            $saida .= '<div class="img position-relative"  onclick="redirect_article(\''.$dados[$ac]['link'] .'\')">';
            $saida .= '<img src="' . $dados[$ac]['bhdesktop'] . '" alt="' . $dados[$ac]['titulo'] . '">';
            /*$saida .= '<div class="position-absolute tagContent">' . $categorias[0] . '</div>';*/
            $saida .= '</div>'; //.img
            $saida .= '<div class="card-body"  onclick="redirect_article(\''.$dados[$ac]['link'] .'\')">';
            /*$saida .= '<div class="detalhes">';
            $saida .= '<span>' . $dados[$ac]['postdate'] . '</span>';
            $saida .= '<p class="m-0 h-100">' . __('Por', 'tivit') . ' <b>' . $dados[$ac]['quem'] . '</b></p>';
            $saida .= '</div>'; //.detalhes*/
            $saida .= '<div class="content"><h3>' . $dados[$ac]['titulo'] . '</h3></div>';
            $saida .= '</div>'; //.card-body
            $saida .= '<div class="card-footer box-link-cta">';
            $saida .= '<a href="'.$dados[$ac]['link'] .'" class="btn">Veja mais</a>';
            $saida .= '</div>';
            $saida .= '</div>'; //.card
            $saida .= '</div>';
        }
        $saida .= '</div>'; //.row


        if ($vejamais) {
            $saida .= '<div class="row" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">';
            $saida .= '<div class="col-12">';
            $saida .= '<div class="vejamais">';
            $saida .= '<a href="#" class="btn" onclick="ac_conteudo_mais_case();return false;">'.__('Carregar mais', 'tivit').'</a>';
            $saida .= '</div>'; //.vejamais
            $saida .= '</div>'; //.col
            $saida .= '</div>'; //.row
        }

        //FECHA COMPONENTE
        $saida .= '</div>'; //.container
        $saida .= '</div>'; //.ac_bloco_conteudo

        if ($vejamais) {
            $saida .= '<script>';
            $saida .= 'function ac_conteudo_lista_categoria_case(categ) {';
            $saida .=   'jQuery(".conteudo_etiqueta").removeClass("active");';
            $saida .=   'jQuery(".conteudo_etiqueta_"+categ).addClass("active");';
            $saida .=   'jQuery("#ac_bloco_conteudo_pagina").val("1");';
            $saida .=   'ac_conteudo_lista_case();';
            $saida .= '}';
            $saida .= 'function ac_conteudo_mais_case() {';
            $saida .=   'var pag = jQuery("#ac_bloco_conteudo_pagina").val();';
            $saida .=   'var pag = parseInt(pag) + 1;';
            $saida .=   'jQuery("#ac_bloco_conteudo_pagina").val(pag);';
            $saida .=   'ac_conteudo_lista_case();';
            $saida .= '}';
            $saida .= 'function ac_conteudo_lista_case() {';
            $saida .=   'var pag = jQuery("#ac_bloco_conteudo_pagina").val();';
            $saida .=   'var qtd = jQuery("#ac_bloco_conteudo_quantidade").val();';
            $saida .=   'var cat = jQuery(".conteudo_etiqueta.active").attr("data-conteudo");';
            $saida .=   'var data = {';
            $saida .=       'action: "ac_pagina_case_pesquisa",';
            $saida .=       'pagina: pag,';
            $saida .=       'quantidade: qtd,';
            $saida .=       'categoria: cat,';
            $saida .=   '};';
            $saida .=   'jQuery.post(referenciaTivit.tivitAjaxUrl, data, function (response) {';
            $saida .=       'var returnedData = JSON.parse(response);';
            $saida .=       'if (pag==1) {';
            $saida .=         'jQuery(".ac_bloco_conteudo_resultado").html(returnedData[0]);';
            $saida .=         'jQuery(".ac_bloco_conteudo_resultado_mobile").html(returnedData[1]);';
            $saida .=       '} else {';
            $saida .=         'var c1 = jQuery(".ac_bloco_conteudo_resultado").html();';
            $saida .=         'jQuery(".ac_bloco_conteudo_resultado").html(c1 + returnedData[0]);';
            $saida .=         'var c2 = jQuery(".ac_bloco_conteudo_resultado_mobile").html();';
            $saida .=         'jQuery(".ac_bloco_conteudo_resultado_mobile").html(c2 + returnedData[1]);';
            $saida .=       '}';
            $saida .=   '});';
            $saida .= '}';
            $saida .= '</script>';
        }

        return $saida;
    }
}
add_shortcode('ac-pagina-cases', 'ac_pagina_cases');


if (!function_exists('ac_pagina_case_pesquisa_desktop')) {
    function ac_pagina_case_pesquisa_desktop() {
        $arg = array();
        $pagina = (isset($_POST['pagina'])) ? intval($_POST['pagina']) : 1;
        $quanti = (isset($_POST['quantidade'])) ? intval($_POST['quantidade']) : 15;
        $catego = (isset($_POST['categoria'])) ? $_POST['categoria'] : '';
        if ($pagina<0) $pagina = 1;
        if ($quanti<0) $quanti = 15;

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => $quanti,
            'offset' => ($pagina-1) * $quanti,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
        );
        if ($catego != '') {
            $args['category_name'] = $catego;
        }
        $the_query = new WP_Query($args);
        $dados = array();
        $categoria_lista = array();
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $identif = $the_query->post->ID;
            $titulo = get_the_title();
            $conteudo = apply_filters('the_content', get_the_content());
            $conteudo = str_replace(']]>', ']]&gt;', $conteudo);
            $resumo = get_the_content();
            $link = get_permalink();
            $dia = get_the_date();
            $quem = get_the_author();

            $bhdesktop = get_field('banner_header_desktop_conteudo');
            $bhmobile = get_field('banner_header_mobile_conteudo');
            $imagem = '';
            $teste = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $conteudo, $encontrou);
            $imagem = (isset($encontrou[1][0])) ? $encontrou[1][0] : '';
            $cat_aux = get_the_category();
            $categorias = array();
            if ((is_array($cat_aux)) && (count($cat_aux) > 0)) {
                foreach ($cat_aux as $categoria) {
                    $categorias[$categoria->slug] = $categoria->name;
                    $categoria_lista[$categoria->slug] = $categoria->name;
                }
            }
            $dados[] = array(
                'postid' => $identif,
                'postdate' => $dia,
                'link' => $link,
                'imagem' => $imagem,
                'conteudo' => $conteudo,
                'quem' => $quem,
                'resumo' => $resumo,
                'titulo' => $titulo,
                'categorias' => $categorias,
                'etiquetas' => $etiquetas,
                'bhdesktop' => $bhdesktop,
                'bhmobile' => $bhmobile,
            );
        }
        wp_reset_query();

        $saida = '';
        for ($ac = 0; $ac < count($dados); $ac++) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            if ((is_array($cat_aux)) && (count($cat_aux) > 0)) {
                foreach ($cat_aux as $categoria) {
                    $categorias[] = $categoria;
                }
            }
            $saida .= '<div class="col-12 col-md-4" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">';
            $saida .= '<div class="card cardContent p-1 h-100 bg-transparent border-0">';
            $saida .= '<div class="img position-relative">';
            $saida .= '<img src="'.$dados[$ac]['bhdesktop'].'" alt="'.$dados[$ac]['titulo'].'">';
            $saida .= '<div class="position-absolute tagContent">'.$categorias[0].'</div>';
            $saida .= '</div>'; //.img
            $saida .= '<div class="card-body">';
            $saida .= '<div class="detalhes">';
            $saida .= '<span>' . $dados[$ac]['postdate'] . '</span>';
            $saida .= '<p class="m-0 h-100">' . __('Por') . ' <b>' . $dados[$ac]['quem'] . '</b></p>';
            $saida .= '</div>'; //.detalhes
            $saida .= '<div class="content"><h3>' . $dados[$ac]['titulo'] . '</h3></div>';
            $saida .= '</div>'; //.card-body
            $saida .= '<div class="card-footer border-0 bg-transparent">';
            $saida .= '<div class="acessar"><a href="' . $dados[$ac]['link'] . '">' . __('acessar artigo') . '</a></div>';
            $saida .= '</div>'; //.card-footer
            $saida .= '</div>'; //.card
            $saida .= '</div>'; //.col-12
        }
        $retorno[0] = $saida;

        $saida = '';
        for ($ac = 0; $ac < count($dados); $ac++) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            if ((is_array($cat_aux)) && (count($cat_aux) > 0)) {
                foreach ($cat_aux as $categoria) {
                    $categorias[] = $categoria;
                }
            }
            $saida .= '<div class="carousel-item heroslide4 content ' . ($ac == 0 ? 'active' : '') . '">';
            $saida .= '<div class="col-12 m-0 p-0">';
            $saida .= '<div class="cardContent p-2 h-100">';
            $saida .= '<div class="img position-relative">';
            $saida .= '<img src="' . $dados[$ac]['bhmobile'] . '" alt="' . $dados[$ac]['titulo'] . '">';
            $saida .= '<div class="position-absolute tagContent">' . $categorias[0] . '</div>';
            $saida .= '</div>'; //.img
            $saida .= '<div class="detalhes">';
            $saida .= '<span>' . $dados[$ac]['postdate'] . '</span>';
            $saida .= '<p class="m-0 h-100">' . __('Por') . ' <b>' . $dados[$ac]['quem'] . '</b></p>';
            $saida .= '</div>'; //.detalhes
            $saida .= '<div class="content"><h3>' . $dados[$ac]['titulo'] . '</h3></div>';
            $saida .= '<div class="acessar"><a href="' . $dados[$ac]['link'] . '">' . __('acessar artigo') . '</a></div>';
            $saida .= '</div>'; //.cardContent
            $saida .= '</div>'; //.col-12
            $saida .= '</div>'; //.carousel-item
        }
        $retorno[1] = $saida;

        echo json_encode($retorno);
        die();
        return;
    }
}
add_action('wp_ajax_ac_pagina_case_pesquisa', 'ac_pagina_case_pesquisa_desktop');
add_action('wp_ajax_nopriv_ac_pagina_case_pesquisa', 'ac_pagina_case_pesquisa_desktop');
