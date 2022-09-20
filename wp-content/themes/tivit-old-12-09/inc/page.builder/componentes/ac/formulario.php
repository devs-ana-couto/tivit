<?php
/*
 * Page Builder Componentes
 * AC / Formulario
*/

function pb_ac_formulario($obj_id,$obj = null, $block, $echo = true){
	global $detect;
	$generate_element = "";
	$c_title = get_sub_field('gd-el-simple-content');
	$c_title_clean = strip_tags($c_title);
	$c_formulario = get_sub_field('gt-el-simple-contact-form');

	$s_color_background = get_sub_field('gd-el-simple-background-color');
	$s_img_background_array = get_sub_field('gd-el-simple-background-image');
	$s_img_background_mobile_array = get_sub_field(' gd-el-simple-background-image-mobile');
	$s_img_background = $detect->isMobile() ? $s_img_background_mobile_array['url'] :  $s_img_background_array['url'];

	$css_id_object =  get_sub_field('gd-el-simple-id');
	$css_content =  get_sub_field('gd-el-simple-css');
	if(empty($css_id_object)){
		$css_id_object = 'element-formulario-'.$obj_id;
	}
	$div_el = '#'.$css_id_object;

	// $t_color_font = set_font_color($div_el.' h1',$s_color_font);
	// $t_color_font .= set_font_color($div_el.' p',$s_color_font);
	// $t_color_font .= set_font_color($div_el,$s_color_font);
	// $t_color_background = set_background_mask($div_el,$s_color_background,$s_img_background);
	if(empty($s_color_background)){
		$s_color_background = "#FFF";
	}
	$t_color_background = $div_el.'{background-image: url(\''.$s_img_background.'\'); background-repeat:no-repeat; background-position:center center; background-size: cover; background-color:'.$s_color_background.'}';

	$t_margin_and_padding = "";
	if(!$m_default_margin){
		$t_margin_and_padding = set_margin_personalized($m_personalized_margin, $div_el);
	}

	$c_form = "echo do_shortcode('".$c_formulario."')";

	$template = '
		<!---- AC: Formulario Module -->
		<style>
			'.$t_color_background.'
			'.$t_margin_and_padding.'

			/* CSS Personalized */

				{css_content}

			/* CSS: END Personalized */
		</style>

		<div id="main-solutions" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
			<div class="lp-tbanks-form" id="{css_id_object}">
			<div id="contatoUnfolding">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-4">
							<div class="w-100 d-flex justify-content-center align-items-center h-100 cta">
								{c_title}
							</div>
						</div>
						<div class="col-12 col-md-8">
							<div class="form">
								'.do_shortcode($c_formulario).'
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>

	';

	// $content = '
	// 	<div class="image-area for-mobile" data-aos-delay="800" data-aos="fade-down" data-aos-anchor="#banner-home-{id}" >
	// 		<img src="{img}" alt="{c_title_clean}">
	// 	</div>
	// 	<div class="clear w100 block"></div>

	// 	{c_title}

	// 	{c_button}

	// 	<div class="image-area for-device" data-aos-delay="800" data-aos="fade-left">
	// 		<img src="{img}" alt="{c_title_clean}">
	// 	</div>';

	// $button = '<a href="{c_button_link}" target="{c_button_target}" class="btn {css_button} read-more"><b>{c_button_tittle}</b></a>';
	// if($c_button_remove){
	// 	$button = "";
	// }

			// $generate_button =
			// 	str_replace(
			// 		array('{c_button_tittle}','{c_button_link}','{c_button_target}','{c_title}','{c_title_clean}','{img}','{id}','{css_button}'),
			// 		array($c_button_tittle,$c_button_link,$c_button_target,$c_title,$c_title_clean,$c_image['url'],$obj_id,$css_button),
			// 		$button);


			// $generate_content =
			// 	str_replace(
			// 		array('{c_button_tittle}','{c_button_link}','{c_button_target}','{c_title}','{c_title_clean}','{img}','{id}','{css_button}','{c_button}'),
			// 		array($c_button_tittle,$c_button_link,$c_button_target,$c_title,$c_title_clean,$c_image['url'],$obj_id,$css_button,$generate_button),
			// 		$content);

			$generate_element =
				str_replace(
					array('{id}','{css_content}','{css_id_object}','{s_color_of_menu}','{c_position}','{content}','{s_img_background}','{c_title}','{c_button_link}','{c_button_target}','{c_button_tittle}','{c_button}','{c_form}'),
					array($obj_id, $css_content,$css_id_object,$s_color_of_menu,$c_position,$generate_content,$s_img_background,$c_title,$c_button_link,$c_button_target,$c_button_tittle,$c_button,$c_form),
					$template);

			if($echo){
				echo $generate_element;
			}

		// endwhile;
	// endif;

	return $generate_element;
}