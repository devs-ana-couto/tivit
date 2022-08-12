<?php

function pb_ac_slide_simple($obj_id, $obj = null, $block, $echo = true)
{
    $generate_element = '';
    $generate_content = '';
    $r_slider = get_sub_field("gd-el-slider-simples-repeter");

    $full_background = get_sub_field("gd-el-header-internal_mask_background_full");
    $metade_top = get_sub_field("gd-el-header-internal_mask_background_50_top");
    $metade_bottom = get_sub_field("gd-el-header-internal_mask_background_50_bottom");

    $paddingTop = get_sub_field("gd-el-header-internal-padding-top");
    $paddindBottom = get_sub_field("gd-el-header-internal-padding-bottom");
    $paddingTopMobile = get_sub_field("gd-el-header-internal-padding-top-mobile");
    $paddindBottomMobile = get_sub_field("gd-el-header-internal-padding-bottom-mobile");

    if ($paddingTop !== "" || $paddingTopMobile !== "") {
        $paddindTopCss = 'padding-top: ' . $paddingTop . 'px !important;';
        $paddindTopMobileCss = 'padding-top: ' . $paddingTopMobile . 'px !important;';
    }
    if ($paddindBottom !== "" || $paddingTopMobile !== "") {
        $paddindBottomCss = 'padding-bottom: ' . $paddindBottom . 'px !important ;';
        $paddindBottomMobileCss = 'padding-bottom: ' . $paddindBottomMobile . 'px !important ;';
    }
    $template = '
    <style>
        #slider-categoria' . $obj_id . ' .carousel-inner{
        -webkit-box-shadow: 0px 0px 20px 2px rgba(0,0,0,0.2) !important; 
        box-shadow: 0px 0px 20px 2px rgba(0,0,0,0.2) !important;
       
        }
        #slider-categoria' . $obj_id . ' {
        ' . $paddindBottomCss . '
			' . $paddindTopCss . '     
        }
        @media screen and (max-width: 991px) {
            #slider-categoria' . $obj_id . ' {
        ' . $paddindBottomMobileCss . '
			' . $paddindTopMobileCss . '     
        }
        }
    </style>
    <section class="container-fluid px-0 slider-projetos solto position-relative">
        <div class="container">
        <div class="col-12 px-0">
            <div id="slider-categoria' . $obj_id . '" class="carousel slide slider-categoria"
                 data-bs-ride="carousel">
                <div class="carousel-indicators">
                    {bullets}
                </div>
                <div class="carousel-inner">
                    {content}
                </div>
                <div class="col-auto position-relative controlador">
                    {arrows}
                </div>
            </div>
        </div>
        </div>
        <div class="card-img-overlay box-background-full" style="background: {full_back};">
            <div class="w-100 h-50" style="background: {meio_top}"></div>
            <div class="w-100 h-50" style="background: {meio_bottom}"></div>
        </div>
    </section> 
    ';
    $content = '
                    <div class="carousel-item {active}">
                        <div class="row justify-content-end d-none d-lg-flex">
                            <div class="col-auto position-absolute h-100 v-mask d-flex justify-content-end">
                                <img class="img-fluid"
                                     src="' . get_template_directory_uri() . '/assets/images/modulos/categoria-slider/mask-slider.svg"
                                     alt="">
                            </div>
                        </div>
                        <div class="row gx-0 h-100 justify-content-between">
                            <div class="col-12 col-lg-4 box-infos p-4 p-lg-5">
                                <div class="container h-100 case-infos d-flex align-items-end">
                                    <div class="row justify-content-start align-items-end">
                                        <div class="col-12 n-acao">
                                        <p>
                                            {action_name}
                                        </p>
                                        </div>
                                        <div class="col-12 title">
                                            <h3 class="title-text">{title}</h3>
                                        </div>
                                        <div class="col-12 box-desc">
                                            <p>
                                                {descript}
                                            </p>
                                        </div>
                                        {tag_box}
                                        <div class="col-auto box-time-slide mt-2 mt-lg-4">
                                            <p>{reading_time}</p>
                                        </div>
                                        {cta_box}
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-8 box-img">
                                <img src="{image}"
                                     class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
    ';


    foreach ($r_slider as $key => $slide) {
        $title = $slide["gd-el-slider-simples-repeter-title"];
        $descript = $slide["gd-el-slider-simples-repeter-descript"];
        $action_name = $slide["gd-el-slider-simples-repeter-action-name"];
        $tag_name = $slide["gd-el-slider-simples-repeter-tag-group"]["gd-el-slider-simples-repeter-tag-name"];
        $tag_link = $slide["gd-el-slider-simples-repeter-tag-group"]["gd-el-slider-simples-repeter-link-tag"];
        $reading_time = $slide["gd-el-slider-simples-repeter-reading-time"];
        $cta_name = $slide["gd-el-slider-simples-repeter-cta-group"]["gd-el-slider-simples-repeter-title-button"];
        $cta_link = $slide["gd-el-slider-simples-repeter-cta-group"]["gd-el-slider-simples-repeter-cta-link"];
        $image = $slide["gd-el-slider-simples-repeter-images"]["url"];

        $active = "";
        $tag_box = "";
        if ($tag_name !== "") {
            $tag_box = '
            <div class="col-auto box-tags mt-2 mt-lg-2">
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item"><a href="' . $tag_link . '">' . $tag_name . '</a></li>
                </ul>
            </div>        
                                            ';
        }

        if ($cta_link !== "") {
            $cta_box = '<div class="col-12 box-link mt-2 mt-lg-4">
                                            <a href="' . $cta_link . '">' . $cta_name . '</a>
                                        </div>';
        }
        if ($key === 0)
            $active = "active";

        $generate_content .=
            str_replace(
                array('{title}', '{descript}', '{action_name}', '{tag_box}',
                    '{reading_time}', '{cta_box}', '{image}', '{active}'),
                array($title, $descript, $action_name, $tag_box, $reading_time,
                    $cta_box, $image, $active),
                $content
            );
    }

    $bullets = '              
        <button type="button" data-bs-target="#slider-categoria{obj_id}" data-bs-slide-to="{id_bullet}"
              {active} aria-current="true" aria-label="Slide {id_bullet}"></button>
              
    ';
    $template_tag = '
     <ul class="list-group list-group-horizontal">
        <li class="list-group-item"><a href="{tag_link}">{tag_name}</a></li>
     </ul>
    ';

    foreach ($r_slider as $key => $slide) {

        $generate_template_tag =
            str_replace(
                array(),
                array(),
                $template_tag
            );
    }

    $generate_bullets = '';
    foreach ($r_slider as $key => $bullet) {
        if (count($r_slider) > 1) {
            $active = '';

            if ($key === 0)
                $active = 'class="active"';

            $generate_bullets .=
                str_replace(
                    array('{active}', '{obj_id}', '{id_bullet}'),
                    array($active, $obj_id, $key),
                    $bullets
                );
        } else {
            break;
        }
    }

    $generate_arrows = '';
    if (count($r_slider) > 1) {
        $arrows = '<button class="carousel-control-prev" type="button"
                            data-bs-target="#slider-categoria{obj_id}"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                            data-bs-target="#slider-categoria{obj_id}"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>';

        $generate_arrows =
            str_replace(
                array('{obj_id}'),
                array($obj_id),
                $arrows
            );
    }
    $generate_element =
        str_replace(
            array('{id}', '{content}', '{bullets}', '{arrows}', '{full_back}', '{meio_top}', '{meio_bottom}'),
            array($obj_id, $generate_content, $generate_bullets, $generate_arrows, $full_background, $metade_top, $metade_bottom),
            $template
        );;

    if ($echo)
        echo $generate_element;

    return $generate_element;

}