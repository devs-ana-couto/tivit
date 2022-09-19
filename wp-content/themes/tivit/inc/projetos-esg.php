<?php
/**
 *  Projetos ESG
 *
 */
if (!function_exists('projetos_esg')) {
    function projetos_esg( $atts, $content = null ) {
        $conteudo_bloco = apply_filters( 'the_content', $content );
        $conteudo_bloco = str_replace( ']]>', ']]&gt;', $conteudo_bloco );

        $args = array(
            'post_type' => 'projetos',
            'posts_per_page' => -1,
            'page' => 1,
            'post_status' => 'publish',
            'orderby' => 'menu',
            'order' => 'ASC',
        );
        $the_query = new WP_Query($args);
        $dados = array();
        $tcategorias = array();
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $identif    = $the_query->post->ID;
            $titulo     = get_the_title();
            $projeto    = apply_filters('the_content', get_the_content());
            $projeto1   = str_replace(']]>', ']]&gt;', $projeto);
            $resumo     = get_the_content();
            $link       = get_permalink();
            $dia        = get_the_date();
            $quem       = get_the_author();
            $tleitura   = get_field('projeto-esg-readtime');
            $thumb_f    = '';
            $thumb_m    = '';
            $thumb_t    = '';
            if ( has_post_thumbnail()) {
                $thumb_id   = get_post_thumbnail_id();
                $thumb_url  = wp_get_attachment_image_src($thumb_id,'full', true);
                $thumb_f    = $thumb_url[0];
                $thumb_url  = wp_get_attachment_image_src($thumb_id,'medium', true);
                $thumb_m    = $thumb_url[0];
                $thumb_url  = wp_get_attachment_image_src($thumb_id,'thumbnail', true);
                $thumb_t    = $thumb_url[0];
            }
            $cat_aux    = get_the_terms($identif, 'categorias-esg');
            $categorias = array();
            if (is_array($cat_aux) || is_object($cat_aux)) {
                foreach ($cat_aux as $categoria) {
                    $categorias[] = array($categoria->name, $categoria->slug);
                    $tcategorias[$categoria->slug] = array($categoria->name, $categoria->description);
                }
            }
            // $etiquetas = get_the_tags($identif);
            $dados[] = array(
                'postid'     => $identif,
                'postdate'   => $dia,
                'link'       => $link,
                'imagem'     => $imagem,
                'projeto'    => $projeto,
                'quem'       => $quem,
                'resumo'     => $resumo,
                'titulo'     => $titulo,
                'tleitura'   => $tleitura,
                'categorias' => $categorias,
                'imagef'     => $thumb_f,
                'imagem'     => $thumb_m,
                'imaget'     => $thumb_t,
            );
        }
        wp_reset_query();

        $saida  = '';
        $saida .= '<section class="container-fluid px-0 slider-categoria" style="background: #f4f6f7">
        <div class="container">
            <div class="row row-cols-1 justify-content-center">
                <div class="col-auto box-title">
                    <h3 class="title">'.$content.'</h3>
                </div>
                <div class="col-12 menu-categoria">
                    <ul class="nav justify-content-lg-center justify-content-start">';
        // $saida .= '<div class="col-12 menu-categoria">';
        // $saida .= '<ul class="nav justify-content-lg-center justify-content-start">';
        $cx = 1;
        foreach ($tcategorias as $catslug => $catdados) {
            $saida .= '<li class="col-auto  nav-item order-'.$cx.'">';
            $ativo = ($cx==1) ? 'active' : '';
            $saida .= '<a class="nav-link '.$ativo.'" id="'.$catslug.'" aria-current="page" onclick="defineAtivo(\''.$catslug.'\')">'.$catdados[0].'</a>';
            $saida .= '<input type="hidden" id="desc-'.$catslug.'" value="'.$catdados[1].'" />';
            $saida .= '</li>';
            $cx++;
        }
        $saida .= '</ul>';
        $saida .= '</div>'; //.menu-categoria
        $saida .= '</div>'; //.row

        $saida .= '<div class="col-12 box-slider">
                <section class="container px-0 slider-projetos" style="background: #262626">
                    <div class="row">
                        <div id="slider-categoria" class="carousel slide p-0 carousel-fade"
                             data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#slider-categoria" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#slider-categoria" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#slider-categoria" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#slider-categoria" data-bs-slide-to="3"
                                        aria-label="Slide 4"></button>
                            </div>

                            <div class="col-auto position-relative controlador">
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#slider-categoria"
                                        data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#slider-categoria"
                                        data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <div class="col-12 box-article-slider">
                <div class="row justify-content-center">
                    <div class="col-auto box-title">
                        <h3 class="title" id="title-articles-slider">outros projetos de cultura e responsabilidade
                            social</h3>
                    </div>
                    <div class="col-12 box-news-slider px-lg-0" id="boxArticles">


                        <div id="carousel-articles" class="carousel slide carousel-dark position-relative"
                             data-bs-ride="carousel"
                             data-bs-interval="30000">
                            <div class="col-12 controladores position-absolute">
                                <div class="row row-cols- justify-content-center">
                                    <div class="col-auto d-flex align-items-center">
                                        <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carousel-articles"
                                                data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                    </div>
                                    <div class="col-auto p-0">
                                        <div class="carousel-indicators"></div>
                                    </div>
                                    <div class="col-auto d-flex align-items-center">
                                        <button class="carousel-control-next" type="button"
                                                data-bs-target="#carousel-articles"
                                                data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>';
        $pjson = array();
        for ($x=0; $x<count($dados); $x++) {
            $pjson[] = array(
                'title' => $dados[$x]['titulo'],
                'action' => $dados[$x]['categorias'][0][0],
                'desc' => htmlentities(strip_tags($dados[$x]['projeto'])),
                'tag' => $dados[$x]['categorias'][0][0],
                'readtime' => $dados[$x]['tleitura'],
                'img' => $dados[$x]['imagef'],
                'category' => $dados[$x]['categorias'][0][1],
                'link' => $dados[$x]['link'],
            );
        }
        $saida .= '<input type="hidden" id="projeto_json" name="projeto_json" value="'.json_encode($pjson).'" />';
        $saida .= '<script type="text/javascript" id="contact-form-7-js-extra">';
        $saida .= '/* <![CDATA[ */';
        $saida .= 'var projeto_json_txt = '.json_encode($pjson).';';
        $saida .= '/* ]]> */';
        $saida .= '</script>';
        // $saida .= '</section>';

        // echo $saida;
        return $saida;
    }
}
add_shortcode('projetos-esg', 'projetos_esg');
