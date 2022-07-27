<?php
/*
 * Page Builder Componentes
 * AC / Big Number
*/

function pb_ac_diferencial($obj_id,$obj = null,$echo = true){
	$generate_element = "";

	if( have_rows('ac-pb-diferenciais-group',$obj_id) ):
		while ( have_rows('ac-pb-diferenciais-group',$obj_id) ) : the_row();

			$c_text = get_sub_field('ac-pb-diferenciais-text');

			$s_color_of_menu = get_sub_field('ac-pb-diferenciais-color-of-menu');
			$s_color_font = get_sub_field('ac-pb-diferenciais-font-color');
			$s_color_background = get_sub_field('ac-pb-diferenciais-background-color');
			$s_img_background = get_sub_field('ac-diferenciais-background-image');

			$m_default_margin = get_sub_field('ac-pb-diferenciais-margin-padding-default');
			$m_personalized_margin = get_sub_field('ac-pb-diferenciais-margin-padding-personalized');

 			$div_el = "#element-diferenciais-$obj_id";

			$css_id_object =  get_sub_field('ac-pb-diferenciais-id');
			$css_content =  get_sub_field('ac-pb-diferenciais-css');
			if(empty($css_id_object)){
				$css_id_object = 'element-diferenciais-'.$obj_id;
			}


			$t_color_font = set_font_color($div_el.' h1',$s_color_font);
			$t_color_font .= set_font_color($div_el.' p',$s_color_font);
			$t_color_font .= set_font_color($div_el,$s_color_font);
			$t_color_background = set_background_mask($div_el,$s_color_background,$s_img_background);
			if(empty($s_color_background)){
				$s_color_background = "#000";
			}


			$t_margin_and_padding = "";
			if(!$m_default_margin){
				$t_margin_and_padding = set_margin_personalized($m_personalized_margin, $div_el);
			}

			$numbers = get_sub_field('ac-pb-diferenciais-itens');
			$cols = 12 / count($numbers);

			$template = '
	            <!---- AC: Diferenciais Module -->
	            <style>

	            	'.$t_color_font.'
	            	'.$t_color_background.'
	            	'.$t_margin_and_padding.'

	            	/* CSS Personalized */

	            		{css_content}

	            	/* CSS: END Personalized */
	            </style>


				<div id="main-solutions">
				<div class="gap" id="{css_id_object}">
					<div class="container">
						<div class="w-100">
							{c_text}
						</div>

						<div class="row">
							{content}
						</div>
					</div>
				</div>
				</div>
		        <!---- // AC: Diferenciais Module -->
			';


			$content = '
                <div class="col-md-{cols} text-center">
					<div class="bigNumbersTitle">
						<div class="title">
							<h2>{number}</h2>
						</div>
						<div class="subtitle">
							<p>{label}</p>
						</div>
					</div>
                </div>
			';

			$generate_content = "";
			foreach($numbers as $it){

				$generate_content .=
					str_replace(
						array('{label}','{number}','{cols}'),
						array($it['ac-pb-diferenciais-itens-label'],$it['ac-pb-diferenciais-itens-value'],$cols),
						$content);
			}



			$generate_element =
				str_replace(
					array('{id}','{c_text}','{css_content}','{css_id_object}','{s_color_of_menu}','{content}'),
					array($obj_id, $c_text,$css_content,$css_id_object,$s_color_of_menu,$generate_content),
					$template);

			if($echo){
				echo $generate_element;
			}

		endwhile;
	endif;

	return $generate_element;
}