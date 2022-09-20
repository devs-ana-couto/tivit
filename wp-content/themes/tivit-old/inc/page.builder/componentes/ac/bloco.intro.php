<?php

function pb_ac_bloco_intro($obj_id, $obj = null, $block, $echo = true)
{
    $generate_element = "";
    $css_id = md5(rand(0, 1000));
    if (have_rows("gd-ac-bloco-intro-bloco-1", $obj_id)):
        while (have_rows("gd-ac-bloco-intro-bloco-1", $obj_id)):the_row();

            $b1_text = get_sub_field("gd-ac-bloco-intro-bloco-1-text");
            $b1_image_array = get_sub_field("gd-ac-bloco-intro-bloco-1-image");
            if(!empty($b1_image_array['url'])){
            $b1_image = '
            <div class="col-12 my-5 my-lg-auto d-flex justify-content-center">
                <img src="' . $b1_image_array["url"] . '" class="logo-tivit my-4" style="min-height: 40px;" alt="">
            </div>';
            }
            if (have_rows("gd-ac-bloco-intro-bloco-1-cta", $obj_id)):
                while (have_rows("gd-ac-bloco-intro-bloco-1-cta", $obj_id)):the_row();
                    $b1_cta_link = get_sub_field("gd-ac-bloco-intro-bloco-1-cta-link");
                    $b1_cta_text = get_sub_field("gd-ac-bloco-intro-bloco-1-cta-texto");
                    $b1_cta_bg_color = get_sub_field("gd-ac-bloco-intro-bloco-1-cta-background");
                    $b1_cta_border_color = get_sub_field("gd-ac-bloco-intro-bloco-1-cta-border-color");
                    $b1_cta_text_color = get_sub_field("gd-ac-bloco-intro-bloco-1-cta-text-color");

                    $b1_css = '
                        .box-intro-{css_id}-refatorado .modulo .btn-tivit1 {
                            background: ' . $b1_cta_bg_color . ';
                            border: 1px solid ' . $b1_cta_border_color . ';
                            color: ' . $b1_cta_text_color . ';
                        }
                        .box-intro-{css_id}-refatorado .modulo .btn-tivit1:hover {
                            background: ' . $b1_cta_text_color . ';
                            border: 1px solid ' . $b1_cta_bg_color . ';
                            color: ' . $b1_cta_bg_color . ';
                        }
                    ';
                    if (!empty($b1_cta_link) && !empty($b1_cta_text)):
                        $content_btn = ' 
                    <div class="col-12 my-5 my-lg-auto mt-lg-4 d-flex justify-content-center justify-content-lg-start">
                  <a href="' . $b1_cta_link . '" class="btn btn-tivit1">' . $b1_cta_text . '</a>
                    </div>';
                    endif;

                endwhile;
            endif;

        endwhile;
    endif;
    if (have_rows("gd-ac-bloco-intro-bloco-2", $obj_id)):
        while (have_rows("gd-ac-bloco-intro-bloco-2", $obj_id)):the_row();

            $b2_text = get_sub_field("gd-ac-bloco-intro-bloco-2-text");
            $b2_image_array = get_sub_field("gd-ac-bloco-intro-bloco-2-image");
            if(!empty($b2_image_array['url'])){
            $b2_image = '
           <div class="col-12 my-5 mt-lg-4 d-flex justify-content-center">
                  
                <img src="' . $b2_image_array["url"] . '" class="logo-tivit my-4" height="" style="min-height: 40px;" alt="">
            </div>';
            }
            if (have_rows("gd-ac-bloco-intro-bloco-2-cta", $obj_id)):
                while (have_rows("gd-ac-bloco-intro-bloco-2-cta", $obj_id)):the_row();
                    $b2_cta_link = get_sub_field("gd-ac-bloco-intro-bloco-2-cta-link");
                    $b2_cta_text = get_sub_field("gd-ac-bloco-intro-bloco-2-cta-texto");
                    $b2_cta_bg_color = get_sub_field("gd-ac-bloco-intro-bloco-2-cta-background");
                    $b2_cta_border_color = get_sub_field("gd-ac-bloco-intro-bloco-2-cta-border-color");
                    $b2_cta_text_color = get_sub_field("gd-ac-bloco-intro-bloco-2-cta-text-color");

                    $b2_css = '
                        .box-intro-{css_id}-refatorado .modulo .btn-tivit1 {
                            background: ' . $b2_cta_bg_color . ';
                            border: 1px solid ' . $b2_cta_border_color . ';
                            color: ' . $b2_cta_text_color . ';
                        }
                        .box-intro-{css_id}-refatorado .modulo .btn-tivit1:hover {
                            background: ' . $b2_cta_text_color . ';
                            border: 1px solid ' . $b2_cta_bg_color . ';
                            color: ' . $b2_cta_bg_color . ';
                        }
                    ';
                    if (!empty($b2_cta_link) && !empty($b2_cta_text)):
                        $content_btn2 = ' 
                     <div class="col-12 my-5 my-lg-auto mt-lg-4 d-flex justify-content-center justify-content-lg-start">
                    <a href="' . $b2_cta_link . '" class="btn btn-tivit1">' . $b2_cta_text . '</a>
                    </div>';
                    endif;

                endwhile;
            endif;

        endwhile;
    endif;

    $s_mask_test = get_sub_field("gd-ac-bloco-intro-bloco-mask");

    if($s_mask_test) {
        $s_mask = '<div class="card-img-overlay box-mask w-100 h-100"></div>';
    }

    $s_bg_color = get_sub_field("cor_de_fundogd-ac-bloco-intro-background");

    if(!empty($s_bg_color)){
        $css_bg_color = "background:" . $s_bg_color ." ;";
    }
    $s_bg_image = get_sub_field("gd-ac-bloco-intro-bloco-background-image");

    if(!empty($s_bg_image)){
        $css_bg_color = "";
        $s_image = '
        background: url("' .$s_bg_image['url'] . '");
        background-repeat: no-repeat; 
        background-size: cover;
        background-position: top center;
        ';
    }

    $template = '
    <style>
        ' . $b1_css . '
        ' . $b2_css . '
        
        .box-intro-{css_id}-refatorado {
            '. $css_bg_color .'
            '. $s_image .'
        }
    </style>
    <section class="container-fluid px-0 box-intro box-intro-{css_id}-refatorado position-relative"
             data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">

<div class="container">
    <div class="row row-cols-1 row-cols-lg-2 g-lg-5 gy-lg-0">
        <div class="col modulo flex-wrap d-flex justify-content-center justify-content-lg-start align-items-center">
          {b1_img}
          {b1_text}
          {content_btn}
        </div>
        <div class="col modulo  d-flex flex-wrap justify-content-start align-items-center">
          {b2_img}
          {b2_text}
          {content_btn2}
        </div>
    </div>
</div>
<!--opicional mascara, caso deseje ocutar adcione o d-none -->
'. $s_mask .'
</section>

';

    $generate_element =
        str_replace(
            array('{id}', '{b1_text}', '{content_btn}', '{b1_img}', '{b2_text}', '{content_btn2}', '{b2_img}', '{css_id}'),
            array($obj_id, $b1_text, $content_btn, $b1_image, $b2_text, $content_btn2, $b2_image, $css_id),
            $template
        );

    if ($echo) {
        echo $generate_element;
    }
    return $generate_element;

}