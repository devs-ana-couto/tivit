<?php
function pb_ac_chamada_fim_page($obj_id, $obj = null, $block, $echo = true)
{
    $generate_element = '';
    $css_id = rand(0, 1000000);
    $img_container = get_sub_field('gd-ac-end-page-image');
    $c_text = get_sub_field('gd-ac-end-page-text');
    $c_cta_group = get_sub_field('gd-ac-end-page-cta');
    $cta_link = $c_cta_group['gd-ac-end-page-cta-link'];
    $cta_text = $c_cta_group['gd-ac-end-page-cta-text'];

    $c_padding_top = get_sub_field('gd-ac-end-page-padding-top');
    $c_padding_top_mobile = get_sub_field('gd-ac-end-page-padding-top-mobile');
    $c_padding_bottom = get_sub_field('gd-ac-end-page-padding-top-mobile');
    $c_padding_bottom_mobile = get_sub_field('gd-ac-end-page-padding-bottom-mobile');

    $c_button_color = $c_cta_group['gd-ac-end-page-cta-background'];
    $c_button_color_hover = $c_cta_group['gd-ac-end-page-cta-background-hover'];
    $c_button_text_color = $c_cta_group['gd-ac-end-page-cta-textcolor'];
    $template = '

    <style>
        #box-chamada-pagina-{css_id}{
            padding-top: '. $c_padding_top .'px;
            padding-bottom: '. $c_padding_bottom .'px ;
        }
        @media screen and (max-width: 991px){
            #box-chamada-pagina-{css_id}{
                padding-top: '. $c_padding_top_mobile . 'px;
                padding-bottom: ' . $c_padding_bottom_mobile .'px ;
            }
        }
         #box-chamada-pagina-{css_id} .cta__geral{
            background: '. $c_button_color .';
            color: '. $c_button_text_color .';
         }
          #box-chamada-pagina-{css_id} .cta__geral:hover{
            background: '. $c_button_color_hover . ';
          }
    </style>
    <section class="container-fluid box-chamada-pagina position-relative" id="box-chamada-pagina-{css_id}"
             style="background-image: url(\'{img_container}\');
background-repeat: no-repeat; background-size: cover; background-position: center center;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8 box-title px-lg-0 d-flex align-items-center justify-content-center flex-column fadeInUp animated"
             style="z-index: 1048" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal" style="z-index: 1054;">
            <div class="col-auto fadeInUp animated" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                {c_text}
            </div>
            <div class="col-auto fadeInUp animated" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                <div class="mt-5">
                    <a href="{cta_link}" class="btn btn-primary cta__geral" target="">
                       {cta_text}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-img-overlay box-mask-cases-new"></div>
</section>
    ';


    $generate_element =
        str_replace(
            array('{id}', '{img_container}', '{c_text}', '{cta_link}', '{cta_text}', '{css_id}'),
            array($obj_id, $img_container, $c_text, $cta_link, $cta_text, $css_id),
            $template);

    if ($echo) {
        echo $generate_element;
    }
    return $generate_element;
}