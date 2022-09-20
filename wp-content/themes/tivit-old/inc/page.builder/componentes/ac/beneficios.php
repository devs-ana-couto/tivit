<?php
/*
 * Page Builder Componentes
 * AC / Beneficios
*/

function pb_ac_beneficios($obj_id, $obj = null, $block, $echo = true)
{
    $generate_element = "";


    $c_text = get_sub_field('gd-el-simple-content');

    $s_color_background = get_sub_field('gd-el-simple-background-color');
    $s_img_background = get_sub_field('gd-el-simple-background-image');

    $m_default_margin = get_sub_field('gd-el-simple-margin-padding-default');
    $m_personalized_margin = get_sub_field('gd-el-simple-margin-padding-personalized');

    $css_id_object = get_sub_field('gd-el-simple-id');
    $css_content = get_sub_field('gd-el-simple-css');
    if (empty($css_id_object)) {
        $css_id_object = 'element-lista-logo-' . $obj_id;
    }
    $div_el = $css_id_object;


    $t_color_font = set_font_color($div_el . ' h1', $s_color_font);
    $t_color_font .= set_font_color($div_el . ' p', $s_color_font);
    $t_color_font .= set_font_color($div_el, $s_color_font);
    $t_color_background = set_background_mask($div_el, $s_color_background, $s_img_background);
    if (empty($s_color_background)) {
        $s_color_background = "#000";
    }


    $t_margin_and_padding = "";
    if (!$m_default_margin) {
        $t_margin_and_padding = set_margin_personalized($m_personalized_margin, $div_el);
    }

    $colunas = get_sub_field('gd-el-beneficios-itens');
    $cols = 12 / count($colunas);

    $content_cta = "";
    $cta = get_sub_field("gd-el-beneficios-cta");
    if (!empty($cta["gd-el-beneficios-cta-link"])) {

        $cta_text_color_cta = $cta['gd-el-beneficios-cta-text-color'];
        $cta_background_cta = $cta['gd-el-beneficios-cta-background'];

        $content_cta = '
            <div class="row justify-content-center">
                <div class="col-8 mt-5 d-flex justify-content-center">
                    <a href="' . $cta["gd-el-beneficios-cta-link"] . '" class="btn btn-tivit1">' . $cta["gd-el-beneficios-cta-link-text"] . '</a>
                </div>
            </div>';
    }


    $template = '
	            <!---- AC: Beneficios Module -->
	            <style>

	            	' . $t_color_font . '
	            	' . $t_color_background . '
	            	' . $t_margin_and_padding . '

	            	/* CSS Personalized */

	            		{css_content}

	            	/* CSS: END Personalized */
	            	
	            	.manegement-services .btn-tivit1 {
	            	    background: ' . $cta_background_cta . ' !important; 
	            	    color: ' . $cta_text_color_cta . ' !important;           
	            	}
	            	.manegement-services .btn-tivit1:hover{
	            	    background: ' . $cta_text_color_cta . ' !important; 
	            	    color: ' . $cta_background_cta . '	!important;         
	            	}
	            	
	            </style>

				
    <section class="container-fluid manegement-services" style="background: ' . $s_color_background . ';" id="{css_id_object}" 
    data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 box-title mb-3">
                    {c_text}
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-center gap-5 mt-5 mb-3">
            {content}                          
            </div>
            ' . $content_cta . '
        </div>
    </section>
		        <!---- // AC: Beneficios Module -->
			';

    $content = '
                <div class="col-11 col-lg-8 box-card" style="background: " data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                    <div class="row gap-4 justify-content-center">
                        <div class="col-12 col-lg-auto d-flex align-items-center justify-content-center {i_order}">
                            <img src="{icone}"
                                 class="img-card" alt="{desc_alt}">
                        </div>
                        <div class="col box-infos {c_order}" style="background: {c_background}; {i_position} ">
                            {texto}
                        </div>
                    </div>
                </div>
				';

    $generate_content = "";
    while (have_rows('gd-el-beneficios-itens', $obj_id)) : the_row();
        $imagem = get_sub_field('gd-el-beneficios-itens-icone');

        $i_position = get_sub_field("gd-el-beneficios-itens-icon-position");
        $c_background = get_sub_field("gd-el-beneficios-itens-backgroung-card");
        $c_border_color = get_sub_field("gd-el-beneficios-itens-cor-borda");
        $card_text = get_sub_field('gd-el-beneficios-itens-texto');

        if ($i_position === "Esquerda") {
            $i_position = "border-left: 3px solid " . $c_border_color . " !important;";
            $i_order = "order-lg-1";
            $c_order = "order-lg-2";
        } else {
            $i_position = "border-right: 3px solid " . $c_border_color . " !important;";
            $i_order = "order-lg-2";
            $c_order = "order-lg-1";
        }
        $generate_content .=
            str_replace(
                array('{icone}', '{desc_alt}', '{texto}', '{cols}', '{i_position}', '{i_order}', '{c_order}', '{c_background}'),
                array($imagem['url'], $imagem['alt'], $card_text, $cols, $i_position, $i_order, $c_order,
                    $c_background),
                $content);
    endwhile;


    $generate_element =
        str_replace(
            array('{id}', '{c_text}', '{css_content}', '{css_id_object}', '{s_color_of_menu}', '{content}'),
            array($obj_id, $c_text, $css_content, $css_id_object, $s_color_of_menu, $generate_content),
            $template);

    if ($echo) {
        echo $generate_element;
    }


    return $generate_element;
}