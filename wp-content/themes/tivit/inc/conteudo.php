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
    function ac_conteudo_listar($attr = array())
    {
        $porpagina = (isset($attr['porpagina']) ? $attr['porpagina'] : 5);
        $pagina = (isset($attr['pagina']) ? $attr['pagina'] : 1);
        $categoria = (isset($attr['categoria']) ? $attr['categoria'] : '');
        $etiqueta = (isset($attr['etiqueta']) ? $attr['etiqueta'] : '');
        $args = array(
            'post_type' => 'post',
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
            $conteudo = apply_filters('the_content', get_the_content());
            $conteudo = str_replace(']]>', ']]&gt;', $conteudo);
            $resumo = get_the_content();
            $link = get_permalink();
            $dia = get_the_date();
            $quem = get_the_author();
            $bhdesktop = get_field('banner_header_desktop_conteudo');
            $bhmobile = get_field('banner_header_mobile_conteudo');
            $tleitura = get_field('tempo_de_leitura');
            $chamada = get_field('chamada_sobre_cases');
            $imagem = '';
            $teste = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $conteudo, $encontrou);
            $imagem = (isset($encontrou[1][0])) ? $encontrou[1][0] : '';
            $cat_aux = get_the_category();
            $categorias = array();
            if ((is_array($cat_aux)) && (count($cat_aux) > 0)) {
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
                'conteudo' => $conteudo,
                'quem' => $quem,
                'resumo' => $resumo,
                'titulo' => $titulo,
                'categorias' => $categorias,
                'etiquetas' => $etiquetas,
                'bhdesktop' => $bhdesktop,
                'bhmobile' => $bhmobile,
                'tleitura' => $tleitura,
                'chamada' => $chamada,
            );
        }
        wp_reset_query();
        wp_reset_postdata();
        return $resultado;
    }
}

if (!function_exists('ac_conteudo_listar_esg')) {
    /**
     * porpagina => Quantos posts por páginas deve retornar
     * pagina => paginacao (inicia-se com 1)
     * categoria => slug da categoria a pesquisar (separar com virgual quando for mais de uma)
     * etiqueta => slug da tag a pesquisar (separar com virgual quando for mais de uma)
     */
    function ac_conteudo_listar_esg($attr = array())
    {
        $porpagina = (isset($attr['porpagina']) ? $attr['porpagina'] : 5);
        $pagina = (isset($attr['pagina']) ? $attr['pagina'] : 1);
        $categoria = (isset($attr['categoria']) ? $attr['categoria'] : '');
        $etiqueta = (isset($attr['etiqueta']) ? $attr['etiqueta'] : '');
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => $porpagina * 1,
            'page' => $pagina * 1,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'category_name' => 'projeto',
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
            $conteudo = apply_filters('the_content', get_the_content());
            $conteudo = str_replace(']]>', ']]&gt;', $conteudo);
            $resumo = get_the_content();
            $link = get_permalink();
            $dia = get_the_date();
            $quem = get_the_author();
            $bhdesktop = get_field('banner_header_desktop_conteudo');
            $bhmobile = get_field('banner_header_mobile_conteudo');
            $tleitura = get_field('tempo_de_leitura');
            $chamada = get_field('chamada_sobre_cases');
            $imagem = '';
            $teste = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $conteudo, $encontrou);
            $imagem = (isset($encontrou[1][0])) ? $encontrou[1][0] : '';
            $cat_aux = get_the_category();
            $categorias = array();
            if ((is_array($cat_aux)) && (count($cat_aux) > 0)) {
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
                'conteudo' => $conteudo,
                'quem' => $quem,
                'resumo' => $resumo,
                'titulo' => $titulo,
                'categorias' => $categorias,
                'etiquetas' => $etiquetas,
                'bhdesktop' => $bhdesktop,
                'bhmobile' => $bhmobile,
                'tleitura' => $tleitura,
                'chamada' => $chamada,
            );
        }
        wp_reset_query();
        wp_reset_postdata();
        return $resultado;
    }
}


if (!function_exists('ac_conteudo_listar_categorias')) {
    function ac_conteudo_listar_categorias()
    {
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
        );
        $categorias = array();
        $the_query = new WP_Query($args);
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $cat_aux = get_the_category();
            if ((is_array($cat_aux)) && (count($cat_aux) > 0)) {
                foreach ($cat_aux as $categoria) {
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


if (!function_exists('ac_conteudo_listar_tags')) {
    /**
     * categoria => slug da categoria a pesquisar (separar com virgual quando for mais de uma)
     */
    function ac_conteudo_listar_tags($attr = array())
    {
        $categoria = (isset($attr['categoria']) ? $attr['categoria'] : '');
        $args = array(
            'post_type' => 'post',
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
            if ((is_array($etiq_aux)) && (count($etiq_aux) > 0)) {
                foreach ($etiq_aux as $etiqueta) {
                    $etiquetas[$etiqueta->slug] = $etiqueta->name;
                }
            }
        }
        wp_reset_query();
        wp_reset_postdata();
        asort($etiquetas);
        return $etiquetas;
    }
}


/***
 * [ac-bloco-conteudo categorias="categoria1,categoria2" fundo="claro" quantidade="3" vejamais=false]Título[/ac-bloco-conteudo]
 *
 * Sendo:
 *   categorias: listar os slugs das categorias a listar separadas por virgula
 *   fundo: "claro" ou "escuro" determina qual a cor do fundo do componente, padrão é "claro"
 *   quantidade: quantos cards serão mostrados, padrão é 3
 *   vejamais: true/false se deve aparecer o botao "veja mais" ou não
 *   Título: texto que aparecerá como titulo do componente
 *
***/
if (!function_exists('ac_bloco_conteudo')) {
    function ac_bloco_conteudo( $atts, $content = null ) {
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
        // $cor_fundo = ($fundo=='escuro') ? 'home-content' : 'cases-recentes';

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => $quantidade,
            'page' => 1,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
        );
        if ($categorias_bloco != '') {
            $args['category_name'] = $categorias_bloco;
        }
        // if ($etiqueta != '') {
        //     $args['tag'] = $etiqueta;
        // }
        $the_query = new WP_Query($args);
        $dados = array();
        $categoria_lista = array();
        // print_r($the_query);
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
            // $tleitura = get_field('tempo_de_leitura');
            // $chamada = get_field('chamada_sobre_cases');
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
            // $etiquetas = get_the_tags($identif);
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
                // 'tleitura' => $tleitura,
                // 'chamada' => $chamada,
            );
        }
        wp_reset_query();
        asort($categoria_lista);
        // print_r($categoria_lista);

        $saida  = '';
        $saida .= '<div class="ac_bloco_conteudo '.$cor_fundo.'"><div id="triangle-down"></div>';
        $saida .= '<div class="container pd" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">';
        $saida .= '<input id="ac_bloco_conteudo_quantidade" type="hidden" value="'.$quantidade.'">';
        $saida .= '<input id="ac_bloco_conteudo_pagina" type="hidden" value="1">';
        $saida .= '<div class="title"><h2 class="titleText text-center">'.$content.'</h2></div>';

        if ($vejamais) {
            $saida .= '<div class="row">';
            $saida .= '<div class="col-12">';
            $saida .= '<div class="assuntos">';
            $saida .= '<h4>'.__('escolha um ou mais assuntos', 'tivit').'</h4>';
            $saida .= '<a href="#" class="active conteudo_etiqueta conteudo_etiqueta_todos" onclick="ac_conteudo_lista_categoria(\'todos\')" data-conteudo="">'.__('Todos', 'tivit').'</a>';
            foreach ($categoria_lista as $chave => $valor) {
                $saida .= '<a href="#" class="conteudo_etiqueta conteudo_etiqueta_'.$chave.'" data-conteudo="'.$chave.'" onclick="ac_conteudo_lista_categoria(\''.$chave.'\')">'.$valor.'</a>';
            }
            $saida .= '</div>'; //.assuntos
            $saida .= '</div>'; //.col
            $saida .= '</div>'; //.row
        }


        $saida .= '<div class="row hide-mobile ac_bloco_conteudo_resultado">';
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
        $saida .= '</div>'; //.row

        // MOBILE
        $saida .= '<div class="row mx-auto my-auto justify-content-center hide-desktop" arua-hidden="true" style="background-color:'.$cor_fundo.';">';
        $saida .= '<div id="contentMobileCarousel" class="carousel slide p-0" data-bs-ride="carousel">';
        $saida .= '<div class="carousel-inner ac_bloco_conteudo_resultado_mobile" role="listbox">';
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
        $saida .= '</div>'; //.carousel-inner
        $saida .= '</div>'; //.carousel
        $saida .= '</div>'; //.row

        if ($vejamais) {
            $saida .= '<div class="row">';
            $saida .= '<div class="col-12">';
            $saida .= '<div class="vejamais">';
            $saida .= '<a href="#" class="active conteudo_etiqueta conteudo_etiqueta_todos" onclick="ac_conteudo_mais();return false;">'.__('Carregar mais', 'tivit').'</a>';
            $saida .= '</div>'; //.vejamais
            $saida .= '</div>'; //.col
            $saida .= '</div>'; //.row
        }

        //FECHA COMPONENTE
        $saida .= '</div>'; //.container
        $saida .= '</div>'; //.ac_bloco_conteudo

        if ($vejamais) {
            $saida .= '<script>';
            $saida .= 'function ac_conteudo_lista_categoria(categ) {';
            $saida .=   'jQuery(".conteudo_etiqueta").removeClass("active");';
            $saida .=   'jQuery(".conteudo_etiqueta_"+categ).addClass("active");';
            $saida .=   'jQuery("#ac_bloco_conteudo_pagina").val("1");';
            $saida .=   'ac_conteudo_lista();';
            $saida .= '}';
            $saida .= 'function ac_conteudo_mais() {';
            $saida .=   'var pag = jQuery("#ac_bloco_conteudo_pagina").val();';
            $saida .=   'var pag = parseInt(pag) + 1;';
            $saida .=   'jQuery("#ac_bloco_conteudo_pagina").val(pag);';
            $saida .=   'ac_conteudo_lista();';
            $saida .= '}';
            $saida .= 'function ac_conteudo_lista() {';
            $saida .=   'var pag = jQuery("#ac_bloco_conteudo_pagina").val();';
            $saida .=   'var qtd = jQuery("#ac_bloco_conteudo_quantidade").val();';
            $saida .=   'var cat = jQuery(".conteudo_etiqueta.active").attr("data-conteudo");';
            $saida .=   'var data = {';
            $saida .=       'action: "ac_pagina_conteudo_pesquisa",';
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
add_shortcode('ac-bloco-conteudo', 'ac_bloco_conteudo');


if (!function_exists('ac_bloco_conteudo_esg')) {
    function ac_bloco_conteudo_esg()
    {
        $arg['porpagina'] = 3;
        $arg['pagina'] = 1;
        $dados = ac_conteudo_listar_esg($arg);


        $saida .= '<div class="container pd">';
        $saida .= '<div class="title">';
        $saida .= '<h2 class="titleText text-center">' . __('ÚLTIMOS PROJETOS') . '</h2>';
        $saida .= '</div>';
        $saida .= '<div class="row hide-mobile">';
        for ($ac = 0; $ac < count($dados); $ac++) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            if ((is_array($cat_aux)) && (count($cat_aux) > 0)) {
                foreach ($cat_aux as $categoria) {
                    $categorias[] = $categoria;
                }
            }
            $etiquetas = array();
            $etq_aux = $dados[$ac]['etiquetas'];
            if ((is_array($etq_aux)) && (count($etq_aux) > 0)) {
                foreach ($etq_aux as $etiqueta) {
                    $etiquetas[] = $etiqueta->name;
                }
            }
            $saida .= '<div class="col-12 col-md-4"  data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">';
            $saida .= '<div class="cardContent p-1">';
            $saida .= '<div class="img position-relative">';
            $saida .= '<img src="' . $dados[$ac]['bhdesktop'] . '" alt="Depoimento">';
            $saida .= '<div class="position-absolute tagContent">' . $categorias[0] . '</div>';
            $saida .= '</div>';
            $saida .= '<div class="detalhes">';
            $saida .= '<span>' . $dados[$ac]['postdate'] . '</span>';
            $saida .= '<p class="m-0 h-100">' . __('Por') . ' <b>' . $dados[$ac]['quem'] . '</b></p>';
            $saida .= '</div>';
            $saida .= '<div class="content">';
            $saida .= '<h3>' . $dados[$ac]['titulo'] . '</h3>';
            $saida .= '</div>';
            $saida .= '<div class="autor-time w-100">';
            $saida .= '<div class="d-flex flex-row">';
            for ($k = 0; $k < count($etiquetas); $k++) {
                $saida .= '<a href="#">' . $etiquetas[$k] . '</a>';
            }
            $saida .= '</div>';
            $saida .= '<p>' . $dados[$ac]['tleitura'] . ' ' . __('minutos de leitura') . '</p>';
            $saida .= '</div>';
            $saida .= '<div class="acessar">';
            $saida .= '<a href="' . $dados[$ac]['link'] . '">' . __('acessar artigo') . '</a>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
        }
        $saida .= '</div>';
        $saida .= '<div class="row mx-auto my-auto justify-content-center hide-desktop">';
        $saida .= '<div id="contentMobileCarousel" class="carousel slide p-0" data-bs-ride="carousel">';
        $saida .= '<div class="carousel-inner" role="listbox">';
        for ($ac = 0; $ac < count($dados); $ac++) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            if ((is_array($cat_aux)) && (count($cat_aux) > 0)) {
                foreach ($cat_aux as $categoria) {
                    $categorias[] = $categoria;
                }
            }
            $etiquetas = array();
            $etq_aux = $dados[$ac]['etiquetas'];
            if ((is_array($etq_aux)) && (count($etq_aux) > 0)) {
                foreach ($etq_aux as $etiqueta) {
                    $etiquetas[] = $etiqueta->name;
                }
            }
            $saida .= '<div class="carousel-item heroslide4 content ' . ($ac == 0 ? 'active' : '') . '">';
            $saida .= '<div class="col-11 m-0 p-0">';
            $saida .= '<div class="cardContent p-2">';
            $saida .= '<div class="img position-relative">';
            $saida .= '<img src="' . $dados[$ac]['bhmobile'] . '" alt="Depoimento">';
            $saida .= '<div class="position-absolute tagContent">' . $categorias[0] . '</div>';
            $saida .= '</div>';
            $saida .= '<div class="detalhes">';
            $saida .= '<span>' . $dados[$ac]['postdate'] . '</span>';
            $saida .= '<p class="m-0 h-100">' . __('Por') . ' <b>' . $dados[$ac]['quem'] . '</b></p>';
            $saida .= '</div>';
            $saida .= '<div class="content">';
            $saida .= '<h3>' . $dados[$ac]['titulo'] . '</h3>';
            $saida .= '</div>';
            $saida .= '<div class="autor-time w-100">';
            $saida .= '<div class="d-flex flex-row aaa">';
            for ($k = 0; $k < count($etiquetas); $k++) {
                $saida .= '<a href="#">' . $etiquetas[$k] . '</a>';
            }
            $saida .= '</div>';
            $saida .= '<p>' . $dados[$ac]['tleitura'] . ' ' . __('minutos de leitura') . '</p>';
            $saida .= '</div>';
            $saida .= '<div class="acessar">';
            $saida .= '<a href="' . $dados[$ac]['link'] . '">' . __('acessar artigo') . '</a>';
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
add_shortcode('ac-bloco-conteudo-esg', 'ac_bloco_conteudo_esg');


if (!function_exists('ac_bloco_header_conteudo')) {
    function ac_bloco_header_conteudo()
    {
        $arg['porpagina'] = 3;
        $arg['pagina'] = 1;
        $dados = ac_conteudo_listar($arg);
        $saida = '';
        //var_dump($dados);

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
            if (is_array($etq_aux) || is_object($etq_aux)) {
                foreach ($etq_aux as $etiqueta) {
                    $etiquetas[] = $etiqueta->name;
                }
            }

            $saida .= '<div class="carousel-item position-relative ' . ($ac == 0 ? 'active' : '') . '" id="carousel-' .  $ac .'">';
            $saida .= '<div class="position-absolute h-100 w-100 box-infos-slider">';
            $saida .= '<div class="col-12 h-100 d-flex justify-content-center align-items-center">';
            $saida .= '<div class="col-12 col-lg-6 infos d-flex flex-column justify-content-center">';
            $saida .= '<small>01/09/2021</small>';
            $saida .= '<h1>' . $dados[$ac]['titulo'] . '</h1>';
            $saida .= '<p>Escrito por: <strong>' . $dados[$ac]['quem'] . '</strong></p>';
            $saida .= '<div class="col-12 d-flex justify-content-center pt-4">';
            $saida .= '<a href="' . $dados[$ac]['link'] . '" class="btn btn-tivit1">Ver matéria</a>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '</div>';
            $saida .= '<img id="imagem-'. $ac . '"
                                 src="'. $dados[$ac]['bhdesktop'] . '"
                                 class="d-none w-100 h-100" alt="...">';
            $saida .= '</div>';

        }
        $saida .= '</div>';

        $saida .= '<button class="carousel-control-prev d-none d-lg-block" type="button"
                            data-bs-target="#carouselHeaderSlider"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>';
        $saida .= '<button class="carousel-control-next d-none d-lg-block" type="button"
                            data-bs-target="#carouselHeaderSlider"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>';

        $saida .= '<div class="carousel-indicators">';
        for ($ac = 0; $ac < count($dados); $ac++) {
             $saida .= '<button type="button" data-bs-target="#carouselHeaderSlider" data-bs-slide-to="' . $ac . '" class="' . ($ac == 0 ? 'active' : '') . '"
                                aria-current="true" aria-label="Slide '. $ac .'"></button>';
        }
        return $saida;
    }
}
add_shortcode('ac_bloco_header_conteudo', 'ac_bloco_header_conteudo');


if (!function_exists('ac_pagina_conteudo')) {
    function ac_pagina_conteudo()
    {
        $arg = array();
        if (isset($_GET['pagina'])) {
            $arg['pagina'] = $_GET['pagina'] + 1;
            $get_pagina = $_GET['pagina'] + 1;
        }
        $get_categoria = '';
        if (isset($_GET['categoria'])) {
            $arg['categoria'] = $_GET['categoria'];
            $get_categoria = explode(',', $_GET['categoria']);
        }
        $get_etiqueta = array();
        if (isset($_GET['etiqueta'])) {
            $arg['etiqueta'] = $_GET['etiqueta'];
            $get_etiqueta = explode(',', $_GET['etiqueta']);
        }
        $dados = ac_conteudo_listar($arg);
        $t_categorias = ac_conteudo_listar_categorias();
        $t_etiquetas = ac_conteudo_listar_tags($arg);


        $saida .= '<div class="col-7">';
        $saida .= '<div class="assuntos">';
        $saida .= '<h4>' . _('escolha um ou mais assuntos') . '</h4>';
        $ativo = (count($get_etiqueta) == 0) ? 'active' : '';
        $saida .= '<a href="#" class="' . $ativo . ' conteudo_etiqueta conteudo_etiqueta_todos" onclick="ac_conteudo_selecao(\'todos\')">' . __('Todos') . '</a>';
        if ((is_array($t_etiquetas)) && (count($t_etiquetas) > 0)) {
            foreach ($t_etiquetas as $slug => $nome) {
                $ativo = (in_array($slug, $get_etiqueta)) ? 'active' : '';
                $saida .= '<a href="#" class="' . $ativo . ' conteudo_etiqueta conteudo_etiqueta_' . $slug . '" data-conteudo="' . $slug . '" onclick="ac_conteudo_selecao(\'' . $slug . '\')">' . $nome . '</a>';
            }
        }
        $saida .= '</div>';
        $saida .= '</div>';

        $saida .= '</div>';

        /* Conteudos */
        $saida .= '<div class="row">';
        for ($ac = 0; $ac < count($dados); $ac++) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            if ((is_array($cat_aux)) && (count($cat_aux) > 0)) {
                foreach ($cat_aux as $categoria) {
                    $categorias[] = $categoria;
                }
            }
            $etiquetas = array();
            $etq_aux = $dados[$ac]['etiquetas'];
            if ((is_array($etq_aux)) && (count($etq_aux) > 0)) {
                foreach ($etq_aux as $etiqueta) {
                    $etiquetas[] = $etiqueta->name;
                }
            }
            $saida .= '<div class="col-12 col-md-4"  data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">';
            $saida .= '<div class="img">';
            $saida .= '<img src="' . $dados[$ac]['bhdesktop'] . '" alt="' . $dados[$ac]['titulo'] . '">';
            $saida .= '</div>';
            $saida .= '<div class="detalhes">';
            $saida .= '<span>' . $dados[$ac]['postdate'] . '</span>';
            $saida .= '<p class="m-0 h-100">' . __('Por') . ' <b>' . $dados[$ac]['quem'] . '</b></p>';
            $saida .= '</div>';
            $saida .= '<div class="content">';
            $saida .= '<h3>' . $dados[$ac]['titulo'] . '</h3>';
            $saida .= '</div>';
            $saida .= '<div class="acessar">';
            $saida .= '<a href="' . $dados[$ac]['link'] . '">acessar artigo <img src="' . get_template_directory_uri() . '/assets/images/a-tivit/arrow.svg" class="hide-desktop" alt="Saiba Mais"></a>';
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
        $saida .= '<option value="">' . _('escolha um ou mais assuntos') . '</option>';
        if ((is_array($t_etiquetas)) && (count($t_etiquetas) > 0)) {
            foreach ($t_etiquetas as $slug => $nome) {
                $ativo = (in_array($slug, $get_etiqueta)) ? 'selected' : '';
                $saida .= '<option value="' . $slug . '" ' . $ativo . '>' . $nome . '</option>';
            }
        }
        $saida .= '</select>';
        $saida .= '</div>';
        $saida .= '<div class="divisao">';
        $saida .= '<div class="select">';
        $saida .= '<select name="">';
        $saida .= '<option value="">' . ('Filtrar por') . '</option>';
        if ((is_array($t_categorias)) && (count($t_categorias) > 0)) {
            foreach ($t_categorias as $slug => $nome) {
                $ativo = ($slug == $get_categoria) ? 'selected' : '';
                $saida .= '<option value="' . $slug . '" ' . $ativo . '>' . $nome . '</option>';
            }
        }
        $saida .= '</select>';
        $saida .= '</div>';
        $saida .= '<div class="search">';
        $saida .= '<a href="#"><img src="' . get_template_directory_uri() . '/assets/icons/nav/search-white.svg" alt="Search Tivit"></a>';
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '</div>';
        $saida .= '<div class="carousel-inner">';
        for ($ac = 0; $ac < count($dados); $ac++) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            if ((is_array($cat_aux)) && (count($cat_aux) > 0)) {
                foreach ($cat_aux as $categoria) {
                    $categorias[] = $categoria;
                }
            }
            $etiquetas = array();
            $etq_aux = $dados[$ac]['etiquetas'];
            if ((is_array($etq_aux)) && (count($etq_aux) > 0)) {
                foreach ($etq_aux as $etiqueta) {
                    $etiquetas[] = $etiqueta->name;
                }
            }
            $saida .= '<div class="carousel-item heroslide4 content active">';
            $saida .= '<div class="col-11 m-0 p-0">';
            $saida .= '<div class="cardContent p-2">';
            $saida .= '<div class="img position-relative">';
            $saida .= '<img src="' . $dados[$ac]['bhmobile'] . '" alt="Depoimento">';
            $saida .= '<div class="position-absolute tagContent">' . $categorias[0] . '</div>';
            $saida .= '</div>';
            $saida .= '<div class="detalhes">';
            $saida .= '<span>' . $dados[$ac]['postdate'] . '</span>';
            $saida .= '<p class="m-0 h-100">' . __('Por') . ' <b>' . $dados[$ac]['quem'] . '</b></p>';
            $saida .= '</div>';
            $saida .= '<div class="content">';
            $saida .= '<h3>' . $dados[$ac]['titulo'] . '</h3>';
            $saida .= '</div>';
            $saida .= '<div class="autor-time w-100">';
            $saida .= '<div class="d-flex flex-row aaa">';
            for ($k = 0; $k < count($etiquetas); $k++) {
                $saida .= '<a href="#">' . $etiquetas[$k] . '</a>';
            }
            $saida .= '</div>';
            $saida .= '<p>' . $dados[$ac]['tleitura'] . ' ' . __('minutos de leitura') . '</p>';
            $saida .= '</div>';
            $saida .= '<div class="acessar">';
            $saida .= '<a href="' . $dados[$ac]['link'] . '">' . __('acessar artigo') . '</a>';
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
add_shortcode('ac-pagina-conteudo', 'ac_pagina_conteudo');


if (!function_exists('ac_pagina_conteudo_pesquisa_desktop')) {
    function ac_pagina_conteudo_pesquisa_desktop() {
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
add_action('wp_ajax_ac_pagina_conteudo_pesquisa', 'ac_pagina_conteudo_pesquisa_desktop');
add_action('wp_ajax_nopriv_ac_pagina_conteudo_pesquisa', 'ac_pagina_conteudo_pesquisa_desktop');


if (!function_exists('ac_pagina_conteudo_pesquisa_mobile')) {
    function ac_pagina_conteudo_pesquisa_mobile()
    {
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
            $arg['etiqueta'] = $_POST['etiqueta'];
            $get_etiqueta = explode(',', $_POST['etiqueta']);
        }
        // print_r($arg);
        $dados = ac_conteudo_listar($arg);
        $saida = '';
        for ($ac = 0; $ac < count($dados); $ac++) {
            $categorias = array();
            $cat_aux = $dados[$ac]['categorias'];
            if ((is_array($cat_aux)) && (count($cat_aux) > 0)) {
                foreach ($cat_aux as $categoria) {
                    $categorias[] = $categoria;
                }
            }
            $etiquetas = array();
            $etq_aux = $dados[$ac]['etiquetas'];
            if ((is_array($etq_aux)) && (count($etq_aux) > 0)) {
                foreach ($etq_aux as $etiqueta) {
                    $etiquetas[] = $etiqueta->name;
                }
            }
            $saida .= '<div class="carousel-item heroslide4 content active">';
            $saida .= '<div class="col-11 m-0 p-0">';
            $saida .= '<div class="cardContent p-2">';
            $saida .= '<div class="img position-relative">';
            $saida .= '<img src="' . $dados[$ac]['bhmobile'] . '" alt="Depoimento">';
            $saida .= '<div class="position-absolute tagContent">' . $categorias[0] . '</div>';
            $saida .= '</div>';
            $saida .= '<div class="detalhes">';
            $saida .= '<span>' . $dados[$ac]['postdate'] . '</span>';
            $saida .= '<p class="m-0 h-100">' . __('Por') . ' <b>' . $dados[$ac]['quem'] . '</b></p>';
            $saida .= '</div>';
            $saida .= '<div class="content">';
            $saida .= '<h3>' . $dados[$ac]['titulo'] . '</h3>';
            $saida .= '</div>';
            $saida .= '<div class="autor-time w-100">';
            $saida .= '<div class="d-flex flex-row aaa">';
            for ($k = 0; $k < count($etiquetas); $k++) {
                $saida .= '<a href="#">' . $etiquetas[$k] . '</a>';
            }
            $saida .= '</div>';
            $saida .= '<p>' . $dados[$ac]['tleitura'] . ' ' . __('minutos de leitura') . '</p>';
            $saida .= '</div>';
            $saida .= '<div class="acessar">';
            $saida .= '<a href="' . $dados[$ac]['link'] . '">' . __('acessar artigo') . '</a>';
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
add_action('wp_ajax_ac_pagina_conteudo_pesquisa_mobile', 'ac_pagina_conteudo_pesquisa_mobile');
add_action('wp_ajax_nopriv_ac_pagina_conteudo_pesquisa_mobile', 'ac_pagina_conteudo_pesquisa_mobile');
