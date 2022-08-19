<?php
function pb_ac_cards_hover($obj_id, $obj = null, $block, $echo = true)
{
    $generate_element = '';

    $c_title = get_sub_field("gd-el-cards-hover-title");
    $c_descript = get_sub_field("gd-el-cards-hover-descript");
    $c_rows = get_sub_field("gd-el-cards-hover-rows");

    $s_cards = get_sub_field("gd-el-cards-hover-repiter");

    $s_background = get_sub_field("gd-el-cards-hover-style-backgroud-color");
    $s_card_background = get_sub_field("gd-el-cards-hover-style-background-cards");
    $s_border_color = get_sub_field("gd-el-cards-hover-style-border-colors-cards");

    $paddingTop = get_sub_field("gd-el-cards-hover-style-padding-top");
    $paddingTopMobile = get_sub_field("gd-el-cards-hover-style-padding-top-mobile");
    $paddingBottom = get_sub_field("gd-el-cards-hover-style-padding-bottom");
    $paddingBottomMobile = get_sub_field("gd-el-cards-hover-style-padding-bottom-mobile");

    $cta_group = get_sub_field("gd-el-cards-hover-card-group");
    $cta_text = $cta_group['gd-el-cards-hover-cta-geral-text'];
    $cta_link = $cta_group['gd-el-cards-hover-cta-geral-link'];
    $cta_background = $cta_group['gd-el-cards-hover-cta-geral-background'];
    $cta_text_color = $cta_group['gd-el-cards-hover-cta-geral-color-text'];

    $cta_background_hover = $cta_group['gd-el-cards-hover-cta-geral-background-hover'];
    $cta_text_color_hover = $cta_group['gd-el-cards-hover-cta-geral-text-hover'];

    $template = '
    <style>
        #card_hover_{id}{
            padding-top: {paddingTop}px !important;
            padding-bottom: {paddingBottom}px !important;
            background: {backgroundContainer};
        }
        @media screen and (max-width: 991px) {
        #card_hover_{id}{
            padding-top: {paddingTopMobile}px !important;
            padding-bottom: {paddingBottomMobile}px !important;
        }
        }
        #card_hover_{id} .card{
            background: {backgroundCard};
            border-color: {borderColorCard};
        }
        #card_hover_{id} a.cta_container{
            background: {cta_container_background} !important;
            color: {cta_container_color} !important;
        }
        #card_hover_{id} a.cta_container:hover{
        background: {cta_color_hover} !important; 
        color: {cta_text_hover} !important;
    </style>

    <section class="container-fluid p-lg-0 card-hover" id="card_hover_{id}">
        <div class="container">
            <div class="row row-cols-1 justify-content-center">
                <div class="col-12 col-lg-8 box-title">
                    {container_title}
                </div>
                <div class="col-12 col-lg-8 box-descript">
                    {container_descript}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-{rows_number} justify-content-center row-card">
                {content}
            </div>
        </div>
        {cta_container}
    </section>
    ';
    $template_cta_container = '
        <div class="col-12 d-flex justify-content-center mt-5">
            <a href="{cta_link}" class="btn btn-tivit1 cta_container">{cta_text}</a>
        </div>
    ';
    $generate_cta_container = '';
    if($cta_link !== ""){
    $generate_cta_container =
        str_replace(
            array('{cta_link}', '{cta_text}'),
            array($cta_link, $cta_text),
            $template_cta_container
        );

    }
    $container = '
    <div class="col box-card p-3" id="card-{id}" onmouseover="cardHoverOn(\'card-{id}\')"
                     onmouseleave="cardHoverLeave(\'card-{id}\')">
                    <div class="d-flex flex-wrap h-100 justify-content-center align-items-center card p-4">
                        <div class="col-12 d-flex flex-wrap justify-content-center box-imagem">
                            {card_image}
                            {title_hover}
                        </div>
                        <div class="col-12 d-flex justify-content-center flex-wrap infos">
                            <div class="col-12">
                                {card_descript}
                            </div>
                           {cta_group}
                        </div>
                    </div>
                </div>
    ';

    $generate_content = '';
    foreach ($s_cards as $key => $card) {
        $card_image = $card['gd-el-cards-hover-card-image']['url'];
        $card_descript = $card['gd-el-cards-hover-card-descript'];
        $card_cta_link = $card['gd-el-cards-hover-card-cta-group']['gd-el-cards-hover-card-cta-link'];
        $card_cta_text = $card['gd-el-cards-hover-card-cta-group']['gd-el-cards-hover-card-cta-text'];

        $card_title_hover = $card['gd-el-cards-hover-card-title'];


        if(!empty($card_image)){
            $card_title_hover = "";
            $card_image = '<img src="' . $card_image . '" alt="">';
        }
        if ($card_cta_link !== "") {
            $generate_link = '<div class="col-12 d-flex justify-content-center">
                                <a href="' . $card_cta_link . '" class="link">' . $card_cta_text . '</a>
                            </div>';
        }
        $generate_content .=
            str_replace(
                array('{card_image}', '{card_descript}', '{cta_group}', '{id}', '{title_hover}'),
                array($card_image, $card_descript, $generate_link, $key, $card_title_hover),
                $container
            );
    }


    $generate_element =
        str_replace(
            array('{id}', '{container_title}', '{container_descript}', '{rows_number}', '{content}', '{paddingTop}',
                '{paddingBottom}', '{paddingTopMobile}', '{paddingBottomMobile}', '{backgroundContainer}',
                '{backgroundCard}', '{borderColorCard}', '{cta_container}', '{cta_container_background}',
                '{cta_container_color}', '{cta_color_hover}', '{cta_text_hover}'),
            array($obj_id, $c_title, $c_descript, $c_rows, $generate_content, $paddingTop, $paddingBottom,
                $paddingTopMobile, $paddingBottomMobile, $s_background, $s_card_background,
                $s_border_color, $generate_cta_container, $cta_background, $cta_text_color, $cta_background_hover,
                $cta_text_color_hover),
            $template
        );
    if ($echo)
        echo $generate_element;

    return $generate_element;


}