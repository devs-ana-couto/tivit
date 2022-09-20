<?php
/*
 * Page Builder Componentes
 * AC / Banner 03
*/

function pb_ac_banner_03($obj_id,$obj = null, $block, $echo = true){
	$generate_element = "";

	if( have_rows('ac-pb-banner-03-group',$obj_id) ):
		while ( have_rows('ac-pb-banner-03-group',$obj_id) ) : the_row();
			$c_text = get_sub_field('ac-pb-banner-03-text');			

			$s_color_of_menu = get_sub_field('ac-pb-banner-03-color-of-menu');
			$s_color_font = get_sub_field('ac-pb-banner-03-font-color');	
			$s_color_background = get_sub_field('ac-pb-banner-03-background-color');	
			$s_img_background = get_sub_field('ac-pb-banner-03-background-image');	

			$m_default_margin = get_sub_field('ac-pb-banner-03-margin-padding-default');	
			$m_personalized_margin = get_sub_field('ac-pb-banner-03-margin-padding-personalized');				

 			

			$css_id_object =  get_sub_field('ac-pb-banner-03-id');
			$css_content =  get_sub_field('ac-pb-banner-03-css');
			if(empty($css_id_object)){
				$css_id_object = 'element-banner-03-'.$obj_id;
			}

			$div_el = "#$css_id_object #banner-03-$obj_id";
			
			$t_color_font = set_font_color($div_el.' h1',$s_color_font);
			$t_color_font .= set_font_color($div_el.' p',$s_color_font);
			$t_color_font .= set_font_color($div_el,$s_color_font);
			$t_color_background = set_background_space($div_el,$s_color_background,$s_img_background);
			if(empty($s_color_background)){
				$s_color_background = "#000";
			}
			

			$t_margin_and_padding = "";
			if(!$m_default_margin){
				$t_margin_and_padding = set_margin_personalized($m_personalized_margin, $div_el);
			}


			$template = '	            
	            <!---- AC: Banner 03 Module -->
	            <style>
					
	            	'.$t_color_font.'	            	
	            	'.$t_color_background.'
	            	'.$t_margin_and_padding.'

	            	/* CSS Personalized */
	            	
	            		{css_content}

	            	/* CSS: END Personalized */
	            </style>

	            <div id="{css_id_object}">
					<section id="banner-03-{id}" class="box-content-03 banner-03 header-coutoman-{s_color_of_menu}">
                        <div class="wrapper-bg"></div>
		                <div class="wrapper-filter"></div>
		                <div class="wrapper">
		                    <div class="container content">
		                        <div class="row">                                        
		                            <div class="col-lg-12">
		                                {content}
		                            </div>    
		                        </div>
		                    </div>    
		                    <a href="#page-down" class="page-down"></a>
		                </div>
		            </section>					
		        </div>    
		        <!---- // AC: Banner 03 Module -->
			';		

			$content = '{c_text}';

			$generate_content = 
				str_replace(
					array('{c_text}','{id}','{css_button}'),
					array($c_text,$obj_id,$css_button),
					$content);

			$generate_element = 
				str_replace(
					array('{id}','{css_content}','{css_id_object}','{s_color_of_menu}','{content}'),
					array($obj_id, $css_content,$css_id_object,$s_color_of_menu,$generate_content),
					$template);

			if($echo){
				echo $generate_element;
			}

		endwhile;
	endif;
	
	return $generate_element;
}