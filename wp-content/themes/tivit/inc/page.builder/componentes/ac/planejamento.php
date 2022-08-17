<?php
/*
 * Page Builder Componentes
 * AC / Planejamento
*/

function pb_ac_planejamento($obj_id, $obj = null, $block, $echo = true)
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
    $t_color_border = get_sub_field("gd-el-simple-bortder-color-cards");


    $t_margin_and_padding = "";
    if (!$m_default_margin) {
        $t_margin_and_padding = set_margin_personalized($m_personalized_margin, $div_el);
    }

    $colunas = get_sub_field('gd-el-planejamento-itens');
    $cols = 12 / count($colunas);

    if ($cols >= 4) {
        $colsLimiter = 4;
    } else {
        $colsLimiter = $cols + 1;
    }

    $content_cta = "";
    $c_box_url = get_sub_field("gd-el-box-cta");
    $c_url_cta = $c_box_url['gd-el-box-url-cta'];
    if (!empty($c_url_cta)) {
        $c_titulo_cta = $c_box_url['gd-el-box-titulo-cta'];
        $c_text_color_cta = $c_box_url['gd-el-box-color-text'];
        $c_background_cta = $c_box_url['gd-el-box-bg-text'];

        $content_cta = '
         <div class="col-12 cta-card mt-5">
                <div class="row row-cols-1 justify-content-center">
                    <div class="col-auto">
                        <a href="' . $c_url_cta . '" class="btn btn-tivit1" style=" ">' . $c_titulo_cta . '</a>
                    </div>
                </div>
            </div>
        ';
    }

    $template = '
	            <!---- AC: Planejamento Module -->
	            <style>

	            	' . $t_color_font . '
	            	' . $t_color_background . '
	            	' . $t_margin_and_padding . '

	            	/* CSS Personalized */

	            		{css_content}

	            	/* CSS: END Personalized */
	            	.card-only-text .btn-tivit1 {
	            	    background: ' . $c_background_cta .' !important; 
	            	    color: '. $c_text_color_cta . ' !important;           
	            	}
	            	.card-only-text .btn-tivit1:hover{
	            	    background: ' . $c_text_color_cta.' !important; 
	            	    color: '. $c_background_cta  . '	!important;         
	            	}
	            </style>


				
    <section class="container-fluid px-lg-0 card-only-text" style="background: '. $s_color_background .';">
        <div class="container">
            <div class="row row-cols-1 justify-content-center">
                <div class="col box-title">
                 <div class="row justify-content-center">         
                     <div class="col-12 col-lg-8">              
                        {c_text}
                   </div>    
                  </div>     
                </div>
            </div>
            <div class="col-12 box-cards  mt-5">
                <div class="row  row-cols-1 row-cols-lg-' . $colsLimiter . ' g-4 justify-content-center">
                {content}
                </div>
            </div>
           '. $content_cta . '
        </div>
    </section>
    
		        <!---- // AC: Planejamento Module -->
			';


    $content = '
				
				<div class="col">
                        <div class="card h-100" style="border-left-color: ' . $t_color_border . ';">
                            <div class="card-header">                           
                                {titulo}                                               
                            </div>
                            <div class="card-body">
                                <div class="col box-card-text">
                                    {miolo}
                                </div>
                            </div>
                        </div>
                    </div>
				
				';

    $generate_content = "";
    // foreach($colunas as $it){
    while (have_rows('gd-el-planejamento-itens', $obj_id)) : the_row();
        $titulo = get_sub_field('gd-el-planejamento-itens-titulo');
        $miolo = '';
        while (have_rows('gd-el-planejamento-itens-boxes', $obj_id)) : the_row();
            $miolo .= get_sub_field('gd-el-planejamento-itens-boxes-box');
        endwhile;
        $generate_content .=
            str_replace(
                array('{titulo}', '{miolo}', '{cols}'),
                array($titulo, $miolo, $cols),
                $content);
    endwhile;
    // endif;


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