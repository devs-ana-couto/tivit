<?php
/*
 * Page Builder Componentes
 * AC / Big Number
*/

function pb_ac_lista_logos_01($obj_id,$obj = null, $block, $echo = true){
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

			$numbers = get_sub_field('gd-lista-logos-01-group');
			// var_dump($numbers);
			$cols = 12 / count($numbers);

			$template = '
	            <!---- AC: Lista Logos 01 Module -->
	            <style>

	            	'.$t_color_font.'
	            	'.$t_color_background.'
	            	'.$t_margin_and_padding.'

	            	/* CSS Personalized */

	            		{css_content}

	            	/* CSS: END Personalized */
	            </style>


				<div id="main-solutions" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
					<div class="gap" id="{css_id_object}">
						<div class="container">
							<div class="row">
								<div class="col-12 mb-5 text-center">
								{c_text}
								</div>
								{content}
							</div>
						</div>
					</div>
				</div>

		        <!---- // AC: Lista Logos 01 Module -->
			';


			$content = '
                <div class="col-12 col-md-{cols} mt-5" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
					<div class="d-flex justify-content-center align-items-center w-100 cloudTitle flex-column position-relative">
						<h2>{nome}</h2>
						<div class="tag">
							<img class="position-absolute" src="{logo}" alt="mask" />
						</div>
						<div class="subtitle">
							<p>{conteudo}</p>
						</div>
					</div>
                </div>
				';

			$generate_content = "";
			// foreach($numbers as $it){
			// if( have_rows('gd-lista-logos-01-group',$obj_id) ):
				while ( have_rows('gd-lista-logos-01-group',$obj_id) ) : the_row();
				$imagem = get_sub_field('gd-lista-logos-01-logo');
				$generate_content .=
					str_replace(
						array('{logo}','{nome}','{conteudo}','{cols}'),
						array($imagem['url'],get_sub_field('gd-lista-logos-01-nome'),get_sub_field('gd-lista-logos-01-conteudo'),$cols),
						$content);
				endwhile;
			// endif;
						// }



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