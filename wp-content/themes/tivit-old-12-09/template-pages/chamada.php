<?php
/*
 * Page Builder Componentes
 * AC / Chamada
*/

function pb_ac_chamada($obj_id, $obj = null, $echo = true)
{
    global $detect;
    $generate_element = "";
    $c_title = get_sub_field('gd-el-simple-content');
    $c_title_clean = strip_tags($c_title);
    $c_button_tittle = get_sub_field('gt-el-simple-botao');
    $c_button_link_array = get_sub_field('gd-el-simple-url');

    $s_color_background = get_sub_field('gd-el-simple-background-color');
    $s_img_background_array = get_sub_field('gd-el-simple-background-image');
    $s_img_background_mobile_array = get_sub_field(' gd-el-simple-background-image-mobile');
    $s_img_background = $detect->isMobile() ? $s_img_background_mobile_array['url'] : $s_img_background_array['url'];
    $bgColor = "background-color: $s_color_background;";
    $bgImg = "background-image: $s_img_background;";

    $css_id_object = get_sub_field('gd-el-simple-id');
    $css_content = get_sub_field('gd-el-simple-css');
    if (empty($css_id_object)) {
        $css_id_object = 'element-chamada-' . $obj_id;
    }
    $div_el = '#' . $css_id_object;

    // $t_color_font = set_font_color($div_el.' h1',$s_color_font);
    // $t_color_font .= set_font_color($div_el.' p',$s_color_font);
    // $t_color_font .= set_font_color($div_el,$s_color_font);
    // $t_color_background = set_background_mask($div_el,$s_color_background,$s_img_background);
    if (empty($s_color_background)) {
        $s_color_background = "#FFF";
    }
    $t_color_background = $div_el . '{background-image: url(\'' . $s_img_background . '\'); background-repeat:no-repeat; background-position:center center; background-size: cover; background-color:' . $s_color_background . '}';

    $t_margin_and_padding = "";
    if (!$m_default_margin) {
        $t_margin_and_padding = set_margin_personalized($m_personalized_margin, $div_el);
    }


    $c_button_target = "_self";
    if ($c_button_link_array) {
        $c_button_link = $c_button_link_array['url'];
        $c_button_target = $c_button_link_array['target'];
        $c_button = '<div class="mt-5"><a href="' . $c_button_link . '" class="btn btn-primary cta__geral" target="' . $c_button_target . '">' . $c_button_tittle . '</a></div>';
    } else {
        $c_button = '';
    }

    if (empty($s_color_background)) {
        $s_color_background = "#fff";
    }

    $template = '
		<!---- AC: Chamada Module -->
		<style>
			' . $t_color_background . '
			' . $t_margin_and_padding . '

			/* CSS Personalized */

				{css_content}

			/* CSS: END Personalized */
		</style>

		<section class="container-fluid box-chamada-pagina" style="'. $bgColor .''. $bgImg .'" id="{css_id_object}">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 box-title px-lg-0 d-flex align-items-center justify-content-center flex-wrap" style="z-index: 1048">
                {c_title}
                {c_button}
            </div>
            </div>
        </div>
    </section>
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
            array('{id}', '{css_content}', '{css_id_object}', '{s_color_of_menu}', '{c_position}', '{content}', '{s_img_background}', '{c_title}', '{c_button_link}', '{c_button_target}', '{c_button_tittle}', '{c_button}'),
            array($obj_id, $css_content, $css_id_object, $s_color_of_menu, $c_position, $generate_content, $s_img_background, $c_title, $c_button_link, $c_button_target, $c_button_tittle, $c_button),
            $template);

    if ($echo) {
        echo $generate_element;
    }

    // endwhile;
    // endif;

    return $generate_element;
}