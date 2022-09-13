<?php
function pb_ac_slide_logos($obj_id, $obj = null, $block, $echo = true)
{
    $generate_element = '';

    $c_title = get_sub_field("gd-el-slider-logo-title-container");
    $c_descript = get_sub_field("gd-el-slider-logo-descript-container");

    $r_slider = get_sub_field("gd-el-slider-logos-repiter");

    $grayScale = get_sub_field("gd-el-slider-logo-style-grayscale");
    $idRand = md5(rand(0, 1000));

    $s_background = get_sub_field("gd-el-slider-logo-style-background");
    $s_color_bullets = get_sub_field("gd-el-slider-logo-style-bullets-colors");

    $s_paddingTop = get_sub_field("gd-el-slider-logo-style-padding-top");
    $s_paddingTopMobile = get_sub_field("gd-el-slider-logo-style-padding-top-mobile");

    $s_paddingBottom = get_sub_field("gd-el-slider-logo-style-padding-bottom");
    $s_paddingBottomMobile = get_sub_field("gd-el-slider-logo-style-padding-bottom-mobile");

    if($grayScale){
        $css_grayScale = '
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
            filter: gray; /* IE */';
        $css_grayScale_hover = '
            -webkit-filter: unset;
            filter: unset;
            filter: unset; /* IE */
        ';
    }

    $template = '
    <style>
        #box-parceiros-{idRand}{
            background-color: {css_background};
            padding-top: {css_padding_top}px !important;
            padding-bottom: {css_padding_bottom}px !important;
         }
         @media screen and (max-width: 991px) {
            #box-parceiros-{idRand}{
               padding-top: {css_padding_top_mobile}px !important;
               padding-bottom: {css_padding_bottom_mobile}px !important;
            }
         }
        #box-parceiros-{idRand} .slider-parceiros .item img{
            '. $css_grayScale .'
        } 
        #box-parceiros-{idRand} .slider-parceiros .item img:hover{
            '. $css_grayScale_hover .'
        }
        #box-parceiros-{idRand} .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
            background: {css_bullets} !important;
        }
        
    </style>
    
    <section class="container-fluid px-0 box-parceiros" id="box-parceiros-{idRand}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 box-title" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                    {title}
                </div>
                <div class="col-12 col-lg-8 mt-3 mt-lg-4 box-descript"  data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                    {descript}
                </div>
                <div class="col-12 box-slider">
                    <div class="owl-carousel owl-theme slider-parceiros"  data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                        {content}

                    </div>
                </div>
            </div>
        </div>
    </section>';

    $content = '
         <div class="item" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
            {openLink}
                <img src="{image}" alt="">
            {closeLink}
         </div>
    ';

    $generate_content = '';
    foreach ($r_slider as $key => $slide):
        $image = $slide['gd-el-slider-logo-repiter-image']['url'];
        $link = $slide['gd-el-slider-logo-repiter-link'];

        $openLink = '';
        $closeLink = '';
        if($link !== ""){
            $openLink = '<a href="'. $link .'">';
            $closeLink = '</a>';
        }

        $generate_content .=
            str_replace(
                array('{image}', '{link}', '{openLink}', '{closeLink}'),
                array($image, $link, $openLink, $closeLink),
                $content
            )
        ;
    endforeach;

    $generate_element =
        str_replace(
            array('{id}', '{title}', '{descript}', '{content}', '{idRand}',
                '{css_background}', '{css_bullets}', '{css_padding_top}', '{css_padding_top_mobile}',
                '{css_padding_bottom}', '{css_padding_bottom_mobile}'),
            array($obj_id, $c_title, $c_descript, $generate_content, $idRand,
            $s_background, $s_color_bullets, $s_paddingTop, $s_paddingTopMobile,
                $s_paddingBottom, $s_paddingBottomMobile),
            $template
        );

    if ($echo)
        echo $generate_element;

    return $generate_element;
}