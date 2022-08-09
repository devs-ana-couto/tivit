<?php

function pb_ac_slide_simple($obj_id, $obj = null, $echo = true)
{
    $generate_element = '';
    $generate_content = '';
    $r_slider = get_sub_field("gd-el-slider-simples-repeter");

    $template = '
    <section class="container px-0 slider-projetos solto">
        <div class="col-12 px-0">
            <div id="slider-categoria01" class="carousel slide slider-categoria"
                 data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#slider-categoria01" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#slider-categoria01" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#slider-categoria01" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    {content}
                </div>
                <div class="col-auto position-relative controlador">
                    <button class="carousel-control-prev" type="button"
                            data-bs-target="#slider-categoria01"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                            data-bs-target="#slider-categoria01"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
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
                                            {action_name}
                                        </div>
                                        <div class="col-12 title">
                                            <h3 class="title-text">{title}</h3>
                                        </div>
                                        <div class="col-12 box-desc">
                                            <p>
                                                {descript}
                                            </p>
                                        </div>
                                        <div class="col-auto box-tags mt-2 mt-lg-4">
                                            <ul class="list-group list-group-horizontal">
                                                <li class="list-group-item"><a href="{tag_link}">{tag_name}</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-auto box-time-slide mt-2 mt-lg-4">
                                            <p>{reading_time}</p>
                                        </div>
                                        <div class="col-12 box-link mt-2 mt-lg-4">
                                            <a href="{cta_link}">{cta_name}</a>
                                        </div>
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

        if ($key === 0)
            $active = "active";

        $generate_content .=
            str_replace(
                array('{title}', '{descript}', '{action_name}', '{tag_name}', '{tag_link}',
                    '{reading_time}', '{cta_name}', '{cta_link}', '{image}', '{active}'),
                array($title, $descript, $action_name, $tag_name, $tag_link, $reading_time,
                    $cta_name, $cta_link, $image, $active),
                $content
            );
    }
    $generate_element =
        str_replace(
            array('{id}', '{content}'),
            array($obj_id, $generate_content),
            $template
        );;

    if ($echo)
        echo $generate_element;

    return $generate_element;

}