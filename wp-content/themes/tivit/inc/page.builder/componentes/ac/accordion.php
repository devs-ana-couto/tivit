<?php
function pb_ac_accordion($obj_id, $obj = null, $block, $echo = true)
{
    $generate_element = "";
    $css_id = rand(0, 100000);

    $c_title = get_sub_field('gd-el-accordion-title-container');
    $c_repiter = get_sub_field('gd-el-accordion-repiter');

    $c_padding_top = get_sub_field('gd-el-accordio-padding-top');
    $c_padding_top_mobile = get_sub_field('gd-el-accordio-padding-top-mobile');
    $c_padding_bottom = get_sub_field('gd-el-accordio-padding-bottom');
    $c_padding_bottom_mobile = get_sub_field('gd-el-accordio-padding-bottom-mobile');

    $c_background = get_sub_field('gd-el-accordion-background');
    $c_border_color_bottom = get_sub_field('gd-el-accordion-border-bottom-color');

    $c_color_expanded_icon = get_sub_field('gd-el-accordio-expanded-test');

    if($c_color_expanded_icon){
        $icon = get_template_directory_uri() . '/assets/icons/nav/add-white.svg';
    }else{
        $icon = get_template_directory_uri() . '/assets/icons/nav/add.svg';
    }

    $template = '
    <style>
        #box-accordion-{css_id}{
            padding-top: {padding_top}px;
            padding-bottom: {padding_bottom}px;
            background-color: {background_container};
        }
        @media screen and (max-width: 991px) {
            #box-accordion-{css_id}{
                padding-top: {padding_bottom}px;
                padding-bottom: {padding_bottom_mobile}px;
            }
        }
         #box-accordion-{css_id} .accordion-item{
            border: none;
            border-bottom: 1px solid {border_bottom_color};
        }
        #box-accordion-{css_id} .accordion-item .accordion-button:after{
            background-image: url("{icon}");
        }
    </style>
    <section class="container-fluid box-accordion" id="box-accordion-{css_id}">
        <div class="container" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
            <div class="row row-cols-1">
                <div class="col-12 box-vagas-title d-flex my-5 justify-content-center">
                    {title_container}
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="accordion accordion-flush" id="accordionFlushExample">                   
                        {content}  
                    </div>
                </div>
            </div>
        </div>
    </section>
    ';
    $content = '
        <div class="accordion-item" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
            <div class="accordion-header" id="flush-heading{key}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{key}" aria-expanded="false" aria-controls="flush-collapse{key}">
                    {title}
                </button>
            </div>
            <div id="flush-collapse{key}" class="accordion-collapse collapse" aria-labelledby="flush-heading{key}" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    {text_internal}
                </div>
            </div>
        </div>
    ';
    $generate_content = '';

    foreach ($c_repiter as $key => $accordion) {
        $title_acc = $accordion['gd-el-accordion-repiter-title'];
        $internal_acc = $accordion['gd-el-accordion-repiter-internal-content'];
        $generate_content .=
            str_replace(
                array('{key}', '{title}', '{text_internal}'),
                array($key, $title_acc, $internal_acc),
                $content
            );
    }

    $generate_element =
        str_replace(
            array('{id}', '{css_id}', '{title_container}', '{content}', 
                '{padding_top}', '{padding_top_mobile}', '{padding_bottom}', '{padding_bottom_mobile}',
            '{background_container}', '{border_bottom_color}', '{icon}'),
            array($obj_id, $css_id, $c_title, $generate_content, 
                $c_padding_top, $c_padding_top_mobile, $c_padding_bottom, $c_padding_bottom_mobile,
                $c_background, $c_border_color_bottom, $icon),
            $template
        );

    if ($echo) {
        echo $generate_element;
    }
    return $generate_element;
}