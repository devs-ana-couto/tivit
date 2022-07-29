<?php
/*
 * Page Builder Componentes
 * AC / Planejamento
*/

function pb_ac_planejamento($obj_id,$obj = null,$echo = true){
	$generate_element = "";


			$c_text = get_sub_field('gd-el-simple-content');

			$s_color_background = get_sub_field('gd-el-simple-background-color');
			$s_img_background = get_sub_field('gd-el-simple-background-image');

			$m_default_margin = get_sub_field('gd-el-simple-margin-padding-default');
			$m_personalized_margin = get_sub_field('gd-el-simple-margin-padding-personalized');

			$css_id_object =  get_sub_field('gd-el-simple-id');
			$css_content =  get_sub_field('gd-el-simple-css');
			if(empty($css_id_object)){
				$css_id_object = 'element-lista-logo-'.$obj_id;
			}
 			$div_el = $css_id_object;


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

			$colunas = get_sub_field('gd-el-planejamento-itens');
			$cols = 12 / count($colunas);

			$template = '
	            <!---- AC: Planejamento Module -->
	            <style>

	            	'.$t_color_font.'
	            	'.$t_color_background.'
	            	'.$t_margin_and_padding.'

	            	/* CSS Personalized */

	            		{css_content}

	            	/* CSS: END Personalized */
	            </style>


				<div id="main-solutions">
					<div id="{css_id_object}">
						<div id="strategy">
							<div class="container">
								<div class="row intro">
									<div class="col-12 mb-5 text-center">{c_text}</div>
								</div>
								<div class="row cards">
									{content}
								</div>
							</div>
						</div>
					</div>
				</div>

		        <!---- // AC: Planejamento Module -->
			';


			$content = '
                <div class="col-12 col-md-{cols} mt-5">
					<div class="intro text-center"><h3>{titulo}</h3></div>
					{miolo}
				</div>
				';

			$generate_content = "";
			// foreach($colunas as $it){
				while ( have_rows('gd-el-planejamento-itens',$obj_id) ) : the_row();
					$titulo = get_sub_field('gd-el-planejamento-itens-titulo');
					$miolo = '';
					while ( have_rows('gd-el-planejamento-itens-boxes',$obj_id) ) : the_row();
						$miolo .= '<div class="card w-100">'.get_sub_field('gd-el-planejamento-itens-boxes-box').'</div>';
					endwhile;
					$generate_content .=
					str_replace(
						array('{titulo}','{miolo}','{cols}'),
						array($titulo,$miolo,$cols),
						$content);
				endwhile;
			// endif;



			$generate_element =
				str_replace(
					array('{id}','{c_text}','{css_content}','{css_id_object}','{s_color_of_menu}','{content}'),
					array($obj_id, $c_text,$css_content,$css_id_object,$s_color_of_menu,$generate_content),
					$template);

			if($echo){
				echo $generate_element;
			}


	return $generate_element;
}