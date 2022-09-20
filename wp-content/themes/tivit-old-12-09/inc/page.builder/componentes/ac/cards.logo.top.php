<?php
function pb_ac_card_imagem_top($obj_id, $obj = null, $block, $echo = true)
{

    $generate_element = '';


    $r_cards = get_sub_field("gd-el-card-image-top-content-repiter");

    $c_title = get_sub_field("gd-el-card-image-top-title-container");
    $c_descript = get_sub_field("gd-el-card-image-top-descript-container");
    $c_cards_cols = get_sub_field("gd-el-card-image-top-style-cards-cols");
    $c_background = get_sub_field("gd-el-card-image-top-style-background-container");

    $cc_background_color = get_sub_field("gd-el-card-image-top-style-background-card");
    $cc_border_color = get_sub_field("gd-el-card-image-top-style-border-color-cards");

    $geradorId = "card-only-text-" . md5(rand(1, 1000));

    $s_padding_top = get_sub_field("gd-el-card-image-top-style-padding-top");
    $s_padding_top_mobile = get_sub_field("gd-el-card-image-top-style-padding-top-mobile");
    $s_padding_bottom = get_sub_field("gd-el-card-image-top-style-padding-bottom");
    $s_padding_bottom_mobile = get_sub_field("gd-el-card-image-top-style-padding-bottom-mobile");

    $cta_link = get_sub_field("gd-el-card-image-top-cta-link");
    $cta_color_text = get_sub_field("gd-el-card-image-top-cta-text-color");
    $cta_background = get_sub_field("gd-el-card-image-top-cta-button-color");
    $cta_color_text_hover = get_sub_field("gd-el-card-image-top-cta-text-color-hover");
    $cta_background_hover = get_sub_field("gd-el-card-image-top-cta-button-color-hover");

    $template = '
    <style>
        #{css_id}{
            background: {background_container};
            padding-top: {padding_top}px;
            padding-bottom: {padding_bottom}px;
        }
        #{css_id} .box-cards .card{
            background: {card_background};
            border: 1px solid {card_border_color};
        }
        @media screen and (max-width: 991px) {
            #{css_id}{
                padding-top: {padding_top_mobile}px;
                padding-bottom: {paddding_bottom_mobile}px;
            }
        }
        #{css_id} .btn-tivit1 {
            background: {cta_background} !important;
            color: {cta_color} !important;
        }
        #{css_id} .btn-tivit1:hover{
            background: {cta_background_hover} !important;
            color: {cta_color_hover} !important;
        }
    </style>
    <section class="container-fluid px-lg-0 card-only-text cards-images-centred" id="{css_id}">
        <div class="container"  data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
            <div class="row row-cols-1 justify-content-center">
                <div class="col-12 box-title d-flex flex-wrap justify-content-center">
                    <div class="col-8 d-flex justify-content-center mb-3"  data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                        {container_title}
                    </div>
                    <div class="col-8 d-flex justify-content-center"  data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                        {container_descript}
                    </div>
                </div>
                <div class="col-12 box-cards  mt-5">
                    <!-- passa row-col-lg-number  a quantidade de colunas que o usuario
                    deseja sendo no maximo row-cols-lg-4 e no minimo row-cols-lg-2 -->
                    <div class="row  row-cols-1 row-cols-lg-{cards-cols} g-4 justify-content-center"  data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                        {content}
                    </div>
                </div>
            </div>
            {cta_content}
        </div>
    </section>
    
    ';

    $content_template = '
                        <div class="col" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="col box-card-text d-flex justify-content-center flex-wrap">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="{image_card}"
                                                 alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            {title_card}
                                        </div>
                                        <div class="col-10 card-text d-flex justify-content-center">
                                            {desc_card}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    ';
    foreach ($r_cards as $key => $card) {
        $title = $card['gd-el-card-image-top-content-title'];
        $image = $card['gd-el-card-image-top-content-image']['url'];
        $desc_card = $card['gd-el-card-image-top-content-descript'];


        $generate_content .= str_replace(
            array('{title_card}', '{image_card}', '{desc_card}'),
            array($title, $image, $desc_card),
            $content_template
        );
    }

    $cta_template = '
            <div class="col-12 cta-card mt-5"  data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                <div class="row row-cols-1 justify-content-center">
                    <div class="col-auto">
                        <a href="{cta_link}" class="btn btn-tivit1">{cta_text}</a>
                    </div>
                </div>
            </div>
    ';

    if ($cta_link !== "") {
        $cta_text = get_sub_field("gd-el-card-image-top-cta-text-button");
        $generate_template_cta =
            str_replace(
                array('{cta_link}', '{cta_text}'),
                array($cta_link, $cta_text),
                $cta_template
            );
    }

    $generate_element =
        str_replace(
            array('{obj_id}', '{container_title}', '{container_descript}', '{content}', '{cards-cols}', '{background_container}',
                '{css_id}', '{card_background}', '{card_border_color}', '{padding_top}', '{padding_top_mobile}', '{padding_bottom}',
                '{paddding_bottom_mobile}', '{cta_content}', '{cta_background}', '{cta_color}', '{cta_background_hover}', '{cta_color_hover}'),
            array($obj_id, $c_title, $c_descript, $generate_content, $c_cards_cols, $c_background,
                $geradorId, $cc_background_color, $cc_border_color, $s_padding_top, $s_padding_top_mobile, $s_padding_bottom,
                $s_padding_bottom_mobile, $generate_template_cta, $cta_background, $cta_color_text, $cta_background_hover, $cta_color_text_hover),
            $template
        );

    if ($echo)
        echo $generate_element;

    return $generate_element;
}