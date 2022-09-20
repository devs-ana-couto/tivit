<?php
/*
 * Page Builder Componentes
 * AC / Big Number
*/

function pb_ac_big_number($obj_id, $obj = null, $block, $echo = true)
{
    $generate_element = "";
    $s_cols_per_rows = get_sub_field("gd-el-big-numbers-cols-numbers");
    $c_background_half_top = get_sub_field("gd-el-big-numbers-half-background");
    if (have_rows('ac-pb-big-numbers-group', $obj_id)):
        while (have_rows('ac-pb-big-numbers-group', $obj_id)) : the_row();

            $c_text = get_sub_field('ac-pb-big-numbers-text');

            $s_color_of_menu = get_sub_field('ac-pb-big-numbers-color-of-menu');
            $s_color_font = get_sub_field('ac-pb-big-numbers-font-color');
            $s_color_background = get_sub_field('ac-pb-big-numbers-background-color');
            $s_img_background = get_sub_field('ac-big-numbers-background-image');


            $m_default_margin = get_sub_field('ac-pb-big-numbers-margin-padding-default');
            $m_personalized_margin = get_sub_field('ac-pb-big-numbers-margin-padding-personalized');

            $div_el = "#element-big-numbers-$obj_id";

            $css_id_object = get_sub_field('ac-pb-big-numbers-id');
            $css_content = get_sub_field('ac-pb-big-numbers-css');
            if (empty($css_id_object)) {
                $css_id_object = 'element-big-numbers-' . $obj_id;
            }


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

            $numbers = get_sub_field('ac-pb-big-numbers-itens');
            $cols = 12 / count($numbers);
            $cols2 = count($numbers) / 2;
            if ($cols2 > 3) {
                $colLimiter = 3;
            } else {
                $colLimiter = round($cols2);
            }

            $template = '
	            <!---- AC: Big Numbers Module -->
	            <style>

	            	' . $t_color_font . '
	            	' . $t_color_background . '
	            	' . $t_margin_and_padding . '

	            	/* CSS Personalized */

	            		{css_content}

	            	/* CSS: END Personalized */
	            </style>
	            

     
								
                <section class="container-fluid px-lg-0 box-big-number position-relative" style="background: ' . $s_color_background . '"
                data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
        <!-- mascara 50% color top permitir que o usuario passar a cor desejada  através do style background -->
        <div class="card-img-overlay h-50 fundo-50-top" style="background-color: {half_top_background};"></div>
        <!-- o titulo é opicinal, caso o usurio não passe nenhum titulo, adiconar a classe
        d-none no container abaixo -->
        <div class="container">
            <div class="col d-flex justify-content-center box-title-top">
              {c_text}
            </div>
        </div>
        <!-- aqui se incia os container cards -->
        <div class="container-fluid p-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 box-cards">
                        <!-- passar o numero de colunas no row-cols-lg-numero, recomendado no máximo 3 colunas -->
                        <div class="row row-cols-1 row-cols-lg-' . $s_cols_per_rows . ' align-items-stretch g-4">
                           {content}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
		       
			';


            $content = '
                <div class="col" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                               <div class="card h-100">
                                    <div class="card-body p-0">
                                        <h5 class="card-title" style="color: ' . $s_color_font . '">{number}</h5>
                                        <p class="card-text">{label}</p>
                                    </div>
                                </div>
                            </div>
			';

            $generate_content = "";
            foreach ($numbers as $it) {
                $generate_content .=
                    str_replace(
                        array('{label}', '{number}', '{cols}'),
                        array($it['ac-pb-big-numbers-itens-label'], $it['ac-pb-big-numbers-itens-value'], $cols),
                        $content);
            }


            $generate_element =
                str_replace(
                    array('{id}', '{c_text}', '{css_content}', '{css_id_object}', '{s_color_of_menu}', '{content}', '{half_top_background}'),
                    array($obj_id, $c_text, $css_content, $css_id_object, $s_color_of_menu, $generate_content, $c_background_half_top),
                    $template);

            if ($echo) {
                echo $generate_element;
            }

        endwhile;
    endif;

    return $generate_element;
}