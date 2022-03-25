<?php
/*
 * Page Builder Componentes
 * Gasoline Digital Commom / Bloco de Conteúdo Simples
*/

function pb_bloco_conteudo_simples($obj_id,$obj = null,$block=0,$echo = true){		
	$return = array();
	
	$s_color_of_menu = get_sub_field('gd-el-simple-color-of-menu');						
	$s_color_background = get_sub_field('gd-el-simple-background-color');	
	$s_color_background2 = get_sub_field('gd-el-simple-background-color-two');	
	$s_img_background = get_sub_field('gd-el-simple-background-image');	
	$s_mask = get_sub_field('gd-el-simple-mask');
	if(empty($s_mask)){$s_mask = false;}

	$m_default_margin = get_sub_field('gd-el-simple-margin-padding-default');	
	$m_option_margin = get_sub_field('gd-el-simple-margin-padding-option');	
	$m_personalized_margin = get_sub_field('gd-el-simple-margin-padding-personalized');				

	$s_width = get_sub_field('gd-el-simple-width');	
	$css_container = set_section_width2($s_width);

	$s_height = get_sub_field('gd-el-simple-height');	

	$div_el = "#gd-el-simple-$block-$obj_id";

	$css_id_object =  get_sub_field('gd-el-simple-id');
	$css_content =  get_sub_field('gd-el-simple-css');
	if(empty($css_id_object)){
		$css_id_object = "element-simple-$block-$obj_id";
	}

	$t_color_background = set_background_advanced($div_el,$s_color_background,$s_color_background2,$s_img_background,$s_mask);
	if(empty($s_color_background)){
		$s_color_background = "#fff";
	}
	

	$t_margin_and_padding = "";
	if(!$m_default_margin){
		$t_margin_and_padding = set_margin_personalized($m_personalized_margin, $div_el);
		$m_option_margin = "";
	}


	if($echo){
		echo '<!---- Content Module -->';
		echo '<style>';
		echo $t_color_background;
		echo $t_margin_and_padding;
		echo '</style>';
		echo "<div id=\"$css_id_object\">";
		echo "<section id=\"gd-el-simple-$block-$obj_id\" class=\"box-section height-$s_height  header-coutoman-$s_color_of_menu\">";
		echo "<div class=\"wrapper $m_option_margin\">";
		echo "<div class=\"$css_container\">";
	}	


	$generate_content = "";			
	switch (get_sub_field('gd-el-simple-content-option')) {
		case 'commom':
			$generate_content .= get_sub_field('gd-el-simple-content-option-commom');								
			break;		
		case 'video':					
			$you_link = get_sub_field('gd-el-simple-content-option-video');
			preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $you_link, $match);
			$youtube_id = $match[1];            

            $generate_content .=  '<div class="video-wrapper">';
			$generate_content .=  '<iframe width="560" height="349" src="http://www.youtube.com/embed/'.$youtube_id.'?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>';
			$generate_content .=  '</div>';									
			break;		
		case 'image':						            
			$opt_image = get_sub_field('gd-el-simple-content-option-image');
			$generate_content .=  '<img src="'.$opt_image['url'].'" class="w100">';
			break;					
	}


	if($echo){		
		echo $generate_content;
		echo "</div>";
		echo "</div>";
		echo "</section>";
		echo "</div>";

		echo '<!---- // Content Module -->';
	}
	
	return $generate_content;
}