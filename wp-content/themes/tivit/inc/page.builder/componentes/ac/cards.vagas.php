<?php
function pb_ac_vacancies($obj_id, $obj = null, $block, $echo = true)
{
    $generate_element = '';
    $css_id = rand(0, 1000000);

    $c_title = get_sub_field('gd-el-cards-vacancies-title-container');
    $c_repiter = get_sub_field('gd-el-cards-vacancies-repiter');
    $c_link_global = get_sub_field('gd-el-cards-vacancies-link-global');

    $c_padding_top = get_sub_field('gd-el-cards-vacancies-style-marge-internal-top');
    $c_padding_bottom = get_sub_field('gd-el-cards-vacancies-style-marge-internal-bottom');
    $c_padding_top_mobile = get_sub_field('gd-el-cards-vacancies-style-marge-internal-top-mobile');
    $c_padding_bottom_mobile = get_sub_field('gd-el-cards-vacancies-style-marge-internal-bottom-mobile');

    $c_background = get_sub_field('gd-el-cards-vacancies-style-background-container');
    $c_border_color = get_sub_field('gd-el-cards-vacancies-style-border-color-card');

    $c_text_color_card = get_sub_field('gd-el-cards-vacancies-style-color-text-cards');

    $c_color_link_global = get_sub_field('gd-el-cards-vacancies-style-color-link-global');
    $c_color_link_global_hover = get_sub_field('gd-el-cards-vacancies-style-color-link-global-hover');

    $c_color_link_text_color = get_sub_field('gd-el-cards-vacancies-style-color-link-text');
    $template = '
    <style>
        #box-vagas-{css_id}{
            padding-top: {padding_top}px;
            padding-bottom: {padding_bottom}px;
            background: {background};
        }
        @media screen and (max-width: 991px){
            #box-vagas-{css_id}{
                padding-top: {padding_top_mobile}px;
                padding-bottom: {padding_bottom_mobile}px;
            }
        }
        #box-vagas-{css_id} .box-card .card{
            border: 1px solid {border_color};
        }
        #box-vagas-{css_id} .card *{
            color: {color_text_card} !important;
        }
        #box-vagas-{css_id} .card a:hover{
           color: #F20024 !important;
        }

        #box-vagas-{css_id} .btn-tivit1{
            background-color: {color_link_global};
            color: {color_link_text_color};
        }
        #box-vagas-{css_id} .btn-tivit1:hover{
            background-color: {color_link_global_hover};
        }

    </style>
    <section class="container-fluid box-vagas" id="box-vagas-{css_id}">
        <div class="container" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
            <div class="row row-cols-1">
                <div class="col-12 box-vagas-title d-flex justify-content-center">
                    <h3>{title_container}</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3">
                {content}
            </div>
            <div class="row justify-content-center">
                <div class="col-auto mt-5">
                    <a href="{link_global}" class="btn btn-tivit1">'.__('VER TODAS AS VAGAS','tivit').'</a>
                </div>
            </div>
        </div>
    </section>
    ';

    $content = '
                <div class="col box-card mt-5">
                    <div class="card h-100" style="">
                        <div class="card-body">
                            <p class="card-text card-vaga">{card_level}</p>
                            <h5 class="card-title">{card_title}</h5>
                            <p class="card-text">{card_desc}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{card_link}" class="btn cta-conteudo2">'.__('confira esta vaga','tivit').'</a>
                        </div>
                    </div>
                </div>
    ';

    $generate_content = '';

    foreach ($c_repiter as $key => $card) {
        $card_level = $card['gd-el-cards-vacancies-repiter-level-vac'];
        $card_title = $card['gd-el-cards-vacancies-repiter-name-vac'];
        $card_desc = $card['gd-el-cards-vacancies-repiter-desc-vac'];
        $card_link = $card['gd-el-cards-vacancies-repiter-link-vac'];
        $generate_content .=
            str_replace(
                array('{card_level}', '{card_title}', '{card_desc}', '{card_link}'),
                array($card_level, $card_title, $card_desc, $card_link),
                $content
            );
    }


    $generate_element =
        str_replace(
            array('{id}', '{title_container}', '{content}', '{link_global}', '{css_id}',
                '{padding_top}', '{padding_bottom}', '{padding_top_mobile}', '{padding_bottom_mobile}',
                '{background}', '{border_color}', '{color_text_card}', '{color_link_global}',
                '{color_link_global_hover}', '{color_link_text_color}'),
            array($obj_id, $c_title, $generate_content, $c_link_global, $css_id,
                $c_padding_top, $c_padding_bottom, $c_padding_top_mobile, $c_padding_bottom_mobile,
                $c_background, $c_border_color, $c_text_color_card, $c_color_link_global,
                $c_color_link_global_hover, $c_color_link_text_color),
            $template);

    if ($echo) {
        echo $generate_element;
    }


    return $generate_element;
}