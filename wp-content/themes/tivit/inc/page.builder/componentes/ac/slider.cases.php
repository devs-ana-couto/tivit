<?php
function pb_ac_slider_cases($obj_id, $obj = null, $block, $echo = true)
{
    $generate_element = '';

    $c_title = get_sub_field("gd-el-slider-cases-title");
    $c_descript = get_sub_field("gd-el-slider-cases-descript");
    $c_background = get_sub_field("gd-el-slider-cases-background");

    $global_background = get_sub_field("gd-el-slider-cases-style-background");
    $global_background_bottom_half = get_sub_field("gd-el-slider-cases-style-background-50per-bottom");

    $c_cta_group = get_sub_field("gd-el-slider-cases-global-cta-group");
    $cta_text = $c_cta_group['gd-el-slider-cases-cta-text'];
    $cta_link = $c_cta_group['gd-el-slider-cases-cta-link-slider'];

    $s_cta_background = $c_cta_group['gd-el-slider-cases-cta-background'];
    $s_cta_background_hover = $c_cta_group['gd-el-slider-cases-cta-background-hover'];
    $s_cta_color_text = $c_cta_group['gd-el-slider-cases-cta-color-text'];
    $s_cta_color_text_hover = $c_cta_group['gd-el-slider-cases-cta-color-text-hover'];
    $s_cta_border_color = $c_cta_group['gd-el-slider-cases-cta-border-color'];
    $s_cta_border_color_hover = $c_cta_group['gd-el-slider-cases-cta-border-color-hover'];

    $s_cta_bullets_color = $c_cta_group['gd-el-slider-cases-color-bullets'];

    $paddingTop = get_sub_field("gd-el-slider-cases-style-padding-top");
    $paddingTopMobile = get_sub_field("gd-el-slider-cases-style-padding-top-mobile");
    $paddingBottom = get_sub_field("gd-el-slider-cases-style-padding-bottom");
    $paddingBottomMobile = get_sub_field("gd-el-slider-cases-style-padding-bottom-mobile");
    $s_background_container = get_sub_field("gd-el-slider-cases-style-background");

    $r_slider = get_sub_field("gd-el-slider-cases-sliders");
    $template = '
    <style>
        #case_slider_{id}{
            background: {background_global};
            padding-top: {paddingTop}px !important;
            padding-bottom: {paddingBottom}px !important;
        }
        #case_slider_{id} .cta-theme{
            background: {cta_background};
            color: {cta_color_text};
            border: 1px solid {s_cta_border_color};
        }
        #case_slider_{id} .cta-theme:hover{
            background: {cta_background_hover};
            color: {cta_color_text_hover};
            border: 1px solid {s_cta_border_color_hover};
        }
        #case_slider_{id} .carousel-indicators [data-bs-target] {
            background-color: {bullets_color};
        }
        
        @media screen and (max-width: 991px) {
        #case_slider_{id}{
            padding-top: {paddingTopMobile}px !important;
            padding-bottom: {paddingBottomMobile}px !important;
        }
        }
    </style>
    <section class="container-fluid px-lg-0 box-slider position-relative" id="case_slider_{id}">
    <div class="card-img-overlay h-100 bg-slider d-flex align-items-end">
            <div class="h-50 w-100 box-50per" style="background: {background_half_color};"></div>
        </div>
        <div class="container position-relative shadow-lg">
            <div class="card-img-overlay box-mask">
                <div class="col-auto mask d-flex justify-content-end d-none d-lg-flex">
                    <img src="' . get_template_directory_uri() . '/assets/images/modulos/slider/mask.svg"
                         alt="">
                </div>
            </div>

            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col box-solid p-lg-0">
                    <div class="col-12 box-title-solid h-100" style="background: #F14517;">
                        {title}
                        {descript}
                        {cta_global}
                    </div>
                </div>


                <div class="col case-sliders position-relative p-lg-0">
                    <button class="carousel-control-prev" type="button" data-bs-target="#slider-base-modular-{id}"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#slider-base-modular-{id}"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    <div id="slider-base-modular-{id}" class="carousel slide position-relative" data-bs-ride="true">
                         <div class="carousel-indicators">
                            {bullets}
                        </div>
                        <div class="carousel-inner">
                            {content}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    ';

    $template_cta_global = '
        <a href="{cta_link}" class="btn cta-theme">{cta_text}</a>
    ';

    $generate_cta_global = '';
    if ($cta_link !== "") {
        $generate_cta_global =
            str_replace(
                array('{cta_text}', '{cta_link}'),
                array($cta_text, $cta_link),
                $template_cta_global
            );
    }
    $content = '            
    <div class="carousel-item {active} position-relative">
        <div class="row row-cols-1">
            <div class="col box-images p-lg-0">
                <div class="col-12">
                    <div class="card bg-dark text-white position-relative">
                        <img class="img-fluid h-100"
                            src="{image}"
                            alt="">
                        <div class="card-img-overlay d-flex justify-content-end align-items-end ">
                            <div class="col box-text d-flex flex-wrap justify-content-end">
                                {title}
                                {descript}
                                {cta_slider}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';

    foreach ($r_slider as $key => $slide):
        $image = $slide['gd-el-slider-cases-slide-image']['url'];
        $title = $slide['gd-el-slider-cases-slide-title'];
        $descript = $slide['gd-el-slider-cases-slide-descript'];
        $cta_slider_group = $slide['gd-el-slider-cases-slide-cta-group'];
        $cta_slider_group_link = $cta_slider_group['gd-el-slider-cases-slide-cta-group-link'];
        $cta_slider_group_text = $cta_slider_group['gd-el-slider-cases-slide-cta-group-text'];

        $generate_cta = '';
        if ($cta_slider_group_link !== "") {
            $generate_cta = '
            <div class="col-12 d-flex justify-content-end">
            <a href="' . $cta_slider_group_link . '" class="btn cta-slider">
            ' . $cta_slider_group_text .
                '</a>
            </div>';
        }

        $active = '';
        if ($key === 0)
            $active = "active";

        $generate_content .=
            str_replace(
                array('{id}', '{active}', '{image}', '{title}', '{descript}', '{cta_slider}'),
                array($key, $active, $image, $title, $descript, $generate_cta),
                $content
            );
    endforeach;

    $template_controler_bullets = '
    <button type="button" data-bs-target="#slider-base-modular-{obj_id}" data-bs-slide-to="{key}"
            {active} aria-current="true" aria-label="Slide {key}"></button>
    ';

    $generate_controller_bullets = '';
    foreach ($r_slider as $key => $bullet):
    $active = '';
    if($key === 0)
        $active = 'class="active"';

    $generate_controller_bullets .=
        str_replace(
            array('{obj_id}', '{key}', '{active}'),
            array($obj_id, $key, $active),
            $template_controler_bullets
            );
    endforeach;

    $generate_element =
        str_replace(
            array('{id}', '{cta_global}', '{title}', '{descript}', '{background_global}',
                '{background_half_color}', '{content}', '{bullets}', '{cta_background}', '{cta_color_text}',
                '{s_cta_border_color}', '{cta_background_hover}', '{cta_color_text_hover}',
                '{s_cta_border_color_hover}', '{bullets_color}', '{paddingTop}', '{paddingBottom}',
                '{paddingTopMobile}', '{paddingBottomMobile}', '{background_global}'),
            array($obj_id, $generate_cta_global, $c_title, $c_descript, $global_background,
                $global_background_bottom_half, $generate_content, $generate_controller_bullets
            , $s_cta_background, $s_cta_color_text, $s_cta_border_color, $s_cta_background_hover,
                $s_cta_color_text_hover, $s_cta_border_color_hover, $s_cta_bullets_color, $paddingTop,
                $paddingBottom, $paddingTopMobile, $paddingBottomMobile,  $s_background_container),
            $template
        );
    if ($echo)
        echo $generate_element;

    return $generate_element;
}