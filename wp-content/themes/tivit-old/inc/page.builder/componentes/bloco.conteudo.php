<?php
/*
 * Page Builder Componentes
 * Gasoline Digital Commom / Bloco de Conteúdo
*/

function pb_bloco_conteudo($obj_id,$obj = null,$block=0,$echo = true){		
	$return = array();
	
	$s_color_of_menu = get_sub_field('gd-el-section-color-of-menu');						
	$s_color_background = get_sub_field('gd-el-section-background-color');	
	$s_img_background = get_sub_field('gd-el-section-background-image');	
	$s_mask = get_sub_field('gd-el-section-mask');
	if(empty($s_mask)){$s_mask = false;}

	$m_default_margin = get_sub_field('gd-el-section-margin-padding-default');	
	$m_option_margin = get_sub_field('gd-el-section-margin-padding-option');	
	$m_personalized_margin = get_sub_field('gd-el-section-margin-padding-personalized');				

	$s_width = get_sub_field('gd-el-section-width');	
	$css_container = set_section_width($s_width);

	$s_height = get_sub_field('gd-el-section-height');	

	$div_el = "#gd-el-section-$block-$obj_id";

	$css_id_object =  get_sub_field('gd-el-section-id');
	$css_content =  get_sub_field('gd-el-section-css');
	if(empty($css_id_object)){
		$css_id_object = "element-section-$block-$obj_id";
	}

	$t_color_background = set_background($div_el,$s_color_background,$s_img_background,$s_mask);
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
		echo $css_content;
		echo '</style>';
		echo "<div id=\"$css_id_object\">";
		echo "<section id=\"gd-el-section-$block-$obj_id\" class=\"box-section height-$s_height  header-coutoman-$s_color_of_menu\" data-anijs=\"if: scroll, on: window, do: fadeInUp animated, before: scrollReveal\">";
		echo "<div class=\"wrapper $m_option_margin\">";
		echo "<div class=\"$css_container\">";
	}

	$col = 0;
	if( have_rows('gd-el-section-content',$obj_id) ):
		while ( have_rows('gd-el-section-content',$obj_id) ) : the_row();

			$layout = get_row_layout();			

			switch ($layout) {
				case 'colunas':
					$return[$layout] = pb_bc_colunas($obj_id,$obj,$block,$echo);
					break;				
			}			

			$col++;
		endwhile;

	endif;

	if($echo){
		echo "</div>";
		echo "</div>";
		echo "</section>";
		echo "</div>";

		echo '<!---- // Content Module -->';
	}


	
	return $return;
}


function pb_bc_colunas($obj_id,$obj = null,$block=0,$echo = true){
	$generate_element = "";
	$col = 0;

	$t = get_sub_field('gd-el-section-content-grid-margin-top');
	$b = get_sub_field('gd-el-section-content-grid-margin-bottom');
	$tb = "";
	if(!empty($t)){
		$tb .= "margin-top:".$t."px; ";
	}
	if(!empty($b)){
		$tb .= "margin-bottom:".$b."px; ";
	}


	if($echo){
		echo "<div class=\"row\" style=\"$tb\">";
	}	

	if( have_rows('gd-el-section-content-grid',$obj_id) ):
		while ( have_rows('gd-el-section-content-grid',$obj_id) ) : the_row();
			
			$c_text = get_sub_field('gd-el-section-content-grid-text');			
			
			$s_color_background = get_sub_field('gd-el-section-content-grid-background-color');	
			$s_img_background = get_sub_field('gd-el-section-content-grid-background-image');	

			$s_color_font = get_sub_field('gd-el-section-content-grid-font-color');	

			$sz_grid_size = get_sub_field('gd-el-section-content-grid-size');	
			$sz_grid_size_device = get_sub_field('gd-el-section-content-grid-size-deviced');				
			$sz_grid_size_device_all = get_sub_field('gd-el-section-content-grid-size-all');				


 			$div_el = "#element-section-content-grid-$col-$block-$obj_id";

			$css_id_object =  get_sub_field('gd-el-section-content-grid-id');
			$css_content =  get_sub_field('gd-el-section-content-grid-css');
			if(empty($css_id_object)){
				$css_id_object = "element-section-content-grid-$col-$block-$obj_id";
			}

			
			$t_color_font = set_all_font_color($div_el,$s_color_font);
			$t_color_background = set_background($div_el,$s_color_background,$s_img_background);
			if(empty($s_color_background)){
				$s_color_background = "#fff";
			}
			
			
			$css_grid_size = " col-lg-".$sz_grid_size;
			if($sz_grid_size_device){
				$css_grid_size = set_col_grid("gd-el-section-content-grid-size-",$sz_grid_size_device_all);
			}
			

			$generate_element = '	            
	            <!---- Coluna Module -->
	            <style>
					
	            	'.$t_color_font.'	            	
	            	'.$t_color_background.'	            	

	            	/* CSS Personalized */
	            	
	            		'.$css_content.'

	            	/* CSS: END Personalized */
	            </style>
				<div id="'.$css_id_object.'" class="box-section-col '.$css_grid_size.'">
					'.$c_text.'
				</div>    
		        <!---- Coluna Module -->
			';		

			

			if($echo){
				echo $generate_element;
			}
			$col++;

		endwhile;
	endif;
	
	if($echo){
		echo "</div>";
	}	

	return $generate_element;
		
}