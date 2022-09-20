<?php
function pb_ac_portfolio($obj_id, $obj = null, $block, $echo = true)
{

    $generate_element = '';

    $c_title = get_sub_field("gd-el-portfolio-name");
    $r_itens = get_sub_field("gd-ac-portfolio-itens");

    $css_id = "css_id_portfolio-" . md5(rand(0, 1000));

    $mascara_mobile = get_template_directory_uri() . "/assets/images/home/portmaskmobile.svg";
    $mascara = get_template_directory_uri() . "/assets/images/home/mascara_banner.svg";

    $padding_top = get_sub_field("gd-el-portfolio-padding-top");
    $padding_top_mobile = get_sub_field("gd-el-portfolio-padding-top-mobile");
    $padding_bottom = get_sub_field("gd-el-portfolio-padding-bottom");
    $padding_bottom_mobile = get_sub_field("gd-el-portfolio-padding-bottom-mobile");

    $template = '
    <style>
        #{css_id}{
            padding-top: {padding_top}px;
            padding-bottom: {padding_bottom}px;
        }
        #{css_id} .mask-default{
            background: url({mascara});
            background-size: cover !important;
            background-repeat: no-repeat !important;
        }
        @media screen and (max-width: 991px) {
            #{css_id}{
                padding-top: {padding_top_mobile}px;
                padding-bottom: {padding_bottom_mobile}px;
            }
            #{css_id} .mask-default{
                background: url({mascara-mobile}) !important;
                background-size: cover !important;
                background-repeat: no-repeat !important;
            }
        }
        #{css_id} .home-portifolio{
            height: unset !important;
            margin-bottom: unset !important;
            
        }
    </style>
    <section class="container-fluid px-lg-0 portfolio port" id="{css_id}" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
    <div class="d-flex justify-content-center bgport position-absolute active"></div>
    <div class="container home-portifolio active">
        <div class="home-portifolio-image p-0">
            <div class="d-flex justify-content-center w-100">
                <div id="triangle-down"></div>
            </div>
            <div class="row row-cols-1">
            
                <div class="col-12 portfolio__box position-relative fadein">
                    <div class="d-flex justify-content-center w-100">
                        <div id="triangle-down"></div>
                    </div>

                    <div class="card-img-overlay mask-default">
                    </div>
                    <div class="col-12  box__mask h-100">
                        <div class="row h-100 row-cols-1 row-cols-lg-auto">
                            <div class="col-12 col-lg-7 p-lg-5 box-z-index">
                                <div class="mask__links py-5 px-0 p-lg-5 h-100">
                                    <div class="d-flex align-content-center h-100">
                                        <div class="col-12">
                                            <div class="col links__title">
                                                {title}
                                            </div>
                                            <div class="col-12 col-lg-auto mt-5">
                                                {content}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 p-lg-5 box-z-index">
                                <div class="d-flex align-items-end p-3 py-5 p-lg-5 h-100">
                                    <div class="col text-display fadein"><p class="fadein">Somos especialistas em nuvem
                                        e entregamos soluções fim a fim para acelerar jornadas transformacionais em
                                        todos os níveis de maturidade digital.</p><a
                                            href="https://www.anacouto.com.br/staged/tivit/solucoes/cloud-solutions/"
                                            class="fadein">Cloud Solutions</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    ';

    $content = '
    <div id="port-{id}" class="">
        <div class="d-none" id="portfolio__img__url-{id}"
        data-img="{img}"></div>
        <div class="d-none" id="portfolio__desc-{id}">
           {desc}
        </div>
        <div class="d-none" id="portfolio__link__url-{id}">
             {link}
        </div>
        <div class="d-none" id="portfolio__link__text-{id}">{cta_text}</div>
        <button id="{id}" class="links--a active w-100"
         onclick="infosPortfolio(\'{img}\', {id})">
             {name}
         </button>
    </div>
    ';
    $generate_content = '';

    foreach ($r_itens as $key => $item) {
        $i_name = $item['gd-ac-portfolio-itens-name'];
        $i_desc = $item['gd-ac-portfolio-itens-desc-item'];
        $i_link = $item['gd-ac-portfolio-itens-cta-link'];
        $i_img = $item['gd-ac-portfolio-itens-image']['url'];
        $cta_text = $item['gd-ac-portfolio-itens-cta-text'];
        $generate_content .=
            str_replace(
                array('{id}', '{name}', '{desc}', '{link}', '{img}', '{cta_text}'),
                array($key, $i_name, $i_desc, $i_link, $i_img, $cta_text),
                $content
            );
    }

    $generate_element =
        str_replace(
            array('{obj_id}', '{title}', '{content}', '{mascara}', '{mascara-mobile}', '{css_id}',
                '{padding_top}', '{padding_top_mobile}', '{padding_bottom}', '{padding_bottom_mobile}'),
            array($obj_id, $c_title, $generate_content, $mascara, $mascara_mobile, $css_id,
                $padding_top, $padding_top_mobile, $padding_bottom, $padding_bottom_mobile),
            $template
        );

    if ($echo)
        echo $generate_element;

    return $generate_element;
}