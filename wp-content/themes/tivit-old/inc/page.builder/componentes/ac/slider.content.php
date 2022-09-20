<?php
function pb_ac_slider_content($obj_id, $obj = null, $block, $echo = true){
    $generate_element = '';

    $c_title = get_sub_field("gd-el-slider-content-title-container");
    $c_desc = get_sub_field("gd-el-slider-content-desc-container");

    $r_cards = get_sub_field("gd-el-slider-content-repiter");

    $css_id = "owl-notices" . md5(rand(0, 1000));

    $padding_top = get_sub_field("gd-el-slider-content-style-padding-top");
    $padding_top_mobile = get_sub_field("gd-el-slider-content-style-padding-top-mobile");
    $padding_bottom = get_sub_field("gd-el-slider-content-style-padding-bottom");
    $padding_bottom_mobile = get_sub_field("gd-el-slider-content-style-padding-bottom-mobile");

    $container_background = get_sub_field("gd-el-slider-content-style-background-container");
    $card_background = get_sub_field("gd-el-slider-content-style-background-cards");

    $cta_text = get_sub_field("gd-el-slider-content-cta-text");
    $cta_link = get_sub_field("gd-el-slider-content-cta-link");

    $cta_color_text = get_sub_field("gd-el-slider-content-cta-color-text");
    $cta_color_text_hover = get_sub_field("gd-el-slider-content-cta-color-text-hover");

    $background_cta = get_sub_field("gd-el-slider-content-cta-background");
    $background_cta_hover = get_sub_field("gd-el-slider-content-cta-background-hover");

    $template = '

    <style>
        #{css_id}{
            background-color: {container_background};
            padding-top: {padding_top}px !important;
            padding-bottom: {padding_top}px !important;
        }
        @media screen and (max-width: 991px) {
            padding-top: {padding_top_mobile}px !important;
            padding-bottom: {padding_bottom_mobile}px !important;
        }
        #{css_id} .card{
            background: {card_background};
        }
        #{css_id} .box-cta a{
            background: {background_cta};
            color: {cta_color};
        }
        #{css_id} .box-cta a:hover{
            background: {background_cta_hover};
            color: {cta_color_hover};
        }
    </style>
    <section class="container-fluid p-0 owl-notices" id="{css_id}" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 box-title">
               {title_container}
            </div>
            <div class="col-12 col-lg-8 box-descript mt-5 mb-5">
                {desc_container}
            </div>
            <div class="col-12 box-content">
                <div class="owl-carousel owl-theme content-notices">
                    {content}
                </div>
            </div>
            {cta_box}
        </div>
    </div>
</section>
<script src="' . get_template_directory_uri() .'/assets/frameworks/js/owl.carousel.min.js"></script>
<script>
    var $ = jQuery;
    $(".content-notices").owlCarousel({
        loop: false,
        margin:30,
        autoWidth: true,
        dots: true,
        //nav:true,
        //autoWidth: true,
        //stagePadding: Number,
        responsive:{
            0:{
                items:2,
                margin:20,
                dots: false,
                stagePadding: 50,
            },
            1024:{
                items:3,
            }
        }
    })
</script>
    ';
    $content = '
    <div class="item h-100">
        {monta_link}
            <div class="card h-100">
                <div class="card-img">
                    <img src="{c_image}" alt="" class="img-fluid w-100">
                </div>
                <div class="card-body">
                    {c_title}
                    {c_desc}
                </div>
            </div>
        {fecha_link}
    </div>
    ';

    $generate_content = "";
    foreach ($r_cards as $key => $card){

        $c_image = $card['gd-el-slider-content-repiter-imagem']['url'];
        $card_title = $card['gd-el-slider-content-repiter-title'];
        $card_desc = $card['gd-el-slider-content-repiter-descript'];
        $c_link = $card['gd-el-slider-content-repiter-link-card'];

        $monta_link = "";
        $fecha_link = "";
        if($c_link !== ""){
            $monta_link =  '<a href="'. $c_link .'">';
            $fecha_link = '</a>';
        }

        $generate_content .=
            str_replace(
                array('{c_image}', '{c_title}', '{c_desc}', '{c_link}', '{monta_link}', '{fecha_link}'),
                array($c_image, $card_title, $card_desc, $c_link, $monta_link, $fecha_link),
                $content
            )
        ;
    }

    $cta_box = '
        <div class="col-12 box-cta d-flex justify-content-center">
                <a href="{cta_link}" class="btn btn-tivit1">{cta_text}</a>
            </div>
        ';

    $generate_cta = "";
    if($cta_link !== ""){

        $generate_cta =
            str_replace(
                array('{cta_text}', '{cta_link}'),
                array($cta_text, $cta_link),
                $cta_box
            );

    }


    $generate_element =
        str_replace(
            array('{obj_id}', '{content}', '{title_container}', '{desc_container}', '{css_id}',
                '{padding_top}', '{padding_bottom}', '{padding_top_mobile}', '{padding_bottom_mobile}', '{container_background}',
                '{card_background}', '{cta_box}', '{cta_color}', '{cta_color_hover}', '{background_cta}', '{background_cta_hover}'),
            array($obj_id, $generate_content, $c_title, $c_desc, $css_id, $padding_top, $padding_bottom,
                $padding_top_mobile, $padding_bottom_mobile, $container_background, $card_background,
                $generate_cta, $cta_color_text, $cta_color_text_hover, $background_cta, $background_cta_hover),
            $template
        )
    ;

    if($echo)
        echo $generate_element;

    return $generate_element;
}