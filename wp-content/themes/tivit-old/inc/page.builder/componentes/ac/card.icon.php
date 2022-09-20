<?php
function pb_ac_card_icon($obj_id, $obj = null, $block, $echo = true)
{
    $generate_element = "";

    $title = get_sub_field("gd-el-card-icon-title");

    $s_background_color = get_sub_field("gd-el-card-icon-background-color");

    $r_number = get_sub_field("gd-el-card-icon-cols-number");

    $c_css_configs = get_sub_field("gd-el-card-icon-cards-configs");
    if(!empty($c_css_configs)){
        $c_css = '.box-card-icons .box-cards .card .card-body{
            background: '. $c_css_configs["gd-el-card-icon-cards-backgroung-color"].';
            border: 1px solid '. $c_css_configs["gd-el-card-icon-cards-border-color"] .';
        }';
    }


    $cta = get_sub_field("gd-el-card-icon-cta-global");
    $css_cta = "";
    if (!empty($cta['gd-el-card-icon-cta-global-link'])) {
        $content_cta = '<a href="' . $cta['gd-el-card-icon-cta-global-link'] . '" class="btn btn-tivit1"> ' . $cta['gd-el-card-icon-cta-global-text'] . '</a>';
        $cta_background_cta = $cta['gd-el-card-icon-cta-global-button-color'];
        $cta_text_color_cta = $cta['gd-el-card-icon-cta-global-color-text'];


        $css_cta = '.box-card-icons .btn-tivit1 {
	            	    background: ' . $cta_background_cta . ' !important; 
	            	    color: ' . $cta_text_color_cta . ' !important;           
	            	}
	            	.box-card-icons .btn-tivit1:hover{
	            	    background: ' . $cta_text_color_cta . ' !important; 
	            	    color: ' . $cta_background_cta . '	!important;         
	            	}';
    }


    $template = '

    <style>
        
        
        '. $c_css .'
        ' . $css_cta .'
    </style>
    <section class="container-fluid box-card-icons px-lg-0" style="background: '. $s_background_color .';" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
        <div class="container">
            <div class="col d-flex justify-content-center box-title-top">
            {title}    
            </div>
            <div class="col box-cards h-100">
                <div class="row row-cols-1 row-cols-lg-'.$r_number.' gy-4 g-lg-4 p-1  px-lg-5">
                    {content}
                </div>
            </div>
            <div class="col box-cta d-flex justify-content-center">
            ' . $content_cta . '
            </div>
        </div>
    </section>
    
    
    
    ';

    $content = '
                    <div class="col card" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                        <div class="card-body d-flex flex-wrap align-items-center px-4 px-lg-5">
                            <div class="row">
                                <div class="col-12 col-lg-auto d-flex d-lg-block justify-content-center box-img">
                                    <img src="{card_icon}"
                                         alt="">
                                </div>
                                <div class="col">
                                    {card_titulo}
                                    {card_text}
                                </div>
                            </div>
                        </div>
                    </div>
    ';


    $generate_content = "";

    while (have_rows("gd-el-card-icon-itens", $obj_id)) : the_row();
        $icon = get_sub_field("gd-el-card-icon-itens-icon");
        $c_titulo = get_sub_field("gd-el-card-icon-itens-title");
        $c_text = get_sub_field("gd-el-card-icon-itens-desc");

        $generate_content .=
            str_replace(
                array('{card_icon}', '{card_titulo}', '{card_text}'),
                array($icon['url'], $c_titulo, $c_text),
                $content
            );

    endwhile;

    $generate_element =
        str_replace(
            array('{id}', '{title}', '{content}'),
            array($obj_id, $title, $generate_content),
            $template
        );
    if ($echo) {
        echo $generate_element;
    }
    return $generate_element;
}