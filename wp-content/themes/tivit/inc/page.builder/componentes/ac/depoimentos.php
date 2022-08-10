<?php

function pb_ac_depoimentos($obj_id, $obj = null, $block, $echo = true)
{

    $generate_element = '';

    $c_title = get_sub_field("gd-el-depositions-title");

    $s_background_color = 'transparent';

    $mode_dark = get_sub_field("gd-el-depositions-dark-mode");

    $c_padding_top = get_sub_field("gd-el-depositions-padding-top");
    $c_padding_bottom = get_sub_field("gd-el-depositions-padding-bottom");


    $c_mobile_padding_top = get_sub_field("gd-el-depositions-mobile-padding-top");
    $c_mobile_padding_bottom = get_sub_field("gd-el-depositions-mobile-padding-bottom");

    $paddingTop = $c_padding_top;
    $paddingBottom = $c_padding_bottom;

    $class_dark = '';
    if ($mode_dark) {
        $s_background_color = '#262626';
        $class_dark = "alternative";
    }


    $template = '
    <style>
        #box-f-client{id}{
            background: {bg_container};
            padding-top: {padding_top}px;
            padding-bottom: {padding_bottom}px;
            
        }
        @media screen and (max-width: 991px){
                #box-f-client{id}{
                    padding-top: {mobile_padding_top}px;
                    padding-bottom: {mobile_padding_bottom}px;
                }
            }
    </style>
     <section class="container-fluid px-lg-0 box-feedback-cliente {classAlt}" id="box-f-client{id}">
        <div class="container">
            {title_container}
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div id="feedbackSlider{id}" class="carousel carousel-dark slide feedbackSlider"
                         data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            {bullets}                         
                        </div>
                        <div class="carousel-inner">
                            {content}
                        </div>
                        {arrows}                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    ';

    $template_title = '
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 box-title d-flex justify-content-center">
                    <h3 class="title">{title}</h3>
                </div>
            </div>
    ';

    $generate_title = "";
    if ($c_title !== "") {
        $generate_title =
            str_replace(
                array('{title}'),
                array($c_title),
                $template_title
            );
    }

    $bullets = '
        <button type="button" data-bs-target="#feedbackSlider{id}" data-bs-slide-to="{key}" class="{active}"
                                    aria-current="true" aria-label="Slide {key}"></button>
    ';

    $content = '
                            <div class="carousel-item {active}">
                                <div class="row">
                                    <div class="col-12 box-img d-flex justify-content-center">
                                        <img src="{photo_client}"
                                             class="d-block" alt="...">
                                    </div>
                                    <div class="col-12 info-user  d-flex flex-column justify-content-center">
                                        <p><strong>{name_client}</strong></p>
                                        <p>{role_client}</p>
                                    </div>
                                    <div class="col-12 box-feedback d-flex justify-content-center">
                                        <p>{text_client}</p>
                                    </div>
                                </div>
                            </div>
    
    ';

    $count_dep = 0;
    $r_slider = get_sub_field("gd-el-depositions-repiter");
    foreach ($r_slider as $key => $slide):
        $active = '';

        if ($count_dep === 0) {
            $active = "active";
        }

        $photo_client = $slide['gd-el-depositions-image-client']["url"];
        $name_client = $slide["gd-el-depositions-name-client"];
        $role_client = $slide['gd-el-depositions-role-client'];
        $text_client = $slide['gd-el-depositions-text-client'];

        $generate_content .=
            str_replace(
                array('{active}', '{photo_client}', '{name_client}', '{role_client}', '{text_client}'),
                array($active, $photo_client, $name_client, $role_client, $text_client),
                $content
            );


        if (count($r_slider) > 1) {
            $generate_bullets .=
                str_replace(
                    array('{id}', '{active}', '{key}'),
                    array($obj_id, $active, $key),
                    $bullets
                );
        }


        $count_dep++;
    endforeach;
    if (count($r_slider) > 1) {
        $arrows = '
        <button class="carousel-control-prev d-none d-lg-block" type="button"
                                data-bs-target="#feedbackSlider{id}"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next d-none d-lg-block" type="button"
                                data-bs-target="#feedbackSlider{id}"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
        ';
        $generate_arrows =
            str_replace(
                array('{id}'),
                array($obj_id),
                $arrows
            );
    }


    $generate_element =
        str_replace(
            array('{id}', '{bg_container}', '{title_container}',
                '{classAlt}', '{padding_top}', '{padding_bottom}', '{content}', '{bullets}',
                '{arrows}', '{mobile_padding_top}', '{mobile_padding_bottom}'),
            array($obj_id, $s_background_color, $generate_title,
                $class_dark, $c_padding_top, $c_padding_bottom, $generate_content,
                $generate_bullets, $generate_arrows, $c_mobile_padding_top, $c_mobile_padding_bottom),
            $template
        );
    if ($echo) {
        echo $generate_element;
    }
    return $generate_element;

}
