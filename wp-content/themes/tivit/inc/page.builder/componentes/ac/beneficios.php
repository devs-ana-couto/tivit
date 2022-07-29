<?php
/*
 * Page Builder Componentes
 * AC / Beneficios
*/

function pb_ac_beneficios($obj_id,$obj = null,$echo = true){
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

			$colunas = get_sub_field('gd-el-beneficios-itens');
			$cols = 12 / count($colunas);

			$template = '
	            <!---- AC: Beneficios Module -->
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
						<section class="nuvem-cases-item">
							<div class="container">
								<div class="row">
									<div class="col-12">
										<h2>{c_text}</h2>
									</div>
								</div>
								{content}
							</div>
						</section>
					</div>
				</div>

		        <!---- // AC: Beneficios Module -->
			';

			$content = '
				<div class="servico-item">
					<div class="row">
						<div class="col-12 col-md-2 offset-md-1">
							<div class="logo text-center">
								<img src="{icone}" alt="..."></a>
							</div>
						</div>
						<div class="col-12 col-md-8">
							<div class="box">
								<p class="paragrafo3">
									{texto}
								</p>
							</div>
						</div>
					</div>
				</div>
				';

			$generate_content = "";
			while ( have_rows('gd-el-beneficios-itens',$obj_id) ) : the_row();
				$imagem = get_sub_field('gd-el-beneficios-itens-icone');
				$generate_content .=
				str_replace(
					array('{icone}','{texto}','{cols}'),
					array($imagem['url'],get_sub_field('gd-el-beneficios-itens-texto'),$cols),
					$content);
			endwhile;



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