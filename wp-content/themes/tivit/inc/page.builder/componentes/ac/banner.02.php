<?php
/*
 * Page Builder Componentes
 * AC / Banner 02
*/

function pb_ac_banner_02($obj_id,$obj = null,$echo = true){	
	$generate_element = "";

	if( have_rows('ac-pb-banner-02-group',$obj_id) ):
		while ( have_rows('ac-pb-banner-02-group',$obj_id) ) : the_row();
			$c_title = get_sub_field('ac-pb-banner-02-title');			

			$s_color_of_menu = get_sub_field('ac-pb-banner-02-color-of-menu');
			$s_color_font = get_sub_field('ac-pb-banner-02-font-color');	
			$s_color_background = get_sub_field('ac-pb-banner-02-background-color');	
			$s_img_background = get_sub_field('ac-pb-banner-02-background-image');	
			$s_mask = get_sub_field('ac_pb_banner-02-mask');
			
			
			$m_default_margin = get_sub_field('ac-pb-banner-02-margin-padding-default');	
			$m_personalized_margin = get_sub_field('ac-pb-banner-02-margin-padding-personalized');				

 			$div_el = "#banner-02-$obj_id";

			$css_id_object =  get_sub_field('ac-pb-banner-02-id');
			$css_content =  get_sub_field('ac-pb-banner-02-css');
			if(empty($css_id_object)){
				$css_id_object = 'element-banner-02-'.$obj_id;
			}

			
			$t_color_font = set_font_color($div_el.' h1',$s_color_font);
			$t_color_background = set_background($div_el,$s_color_background,$s_img_background);
			if(empty($s_color_background)){
				$s_color_background = "#fff";
			}
			if($s_mask){
				$t_color_background .= remove_mask($div_el,$s_mask);
			}
			

			$t_margin_and_padding = "";
			if(!$m_default_margin){
				$t_margin_and_padding = set_margin_personalized($m_personalized_margin, $div_el);
			}


			$template = '	            
	            <!---- AC: Banner 02 Module -->
	            <style>
					
	            	'.$t_color_font.'	            	
	            	'.$t_color_background.'
	            	'.$t_margin_and_padding.'

	            	/* CSS Personalized */
	            	
	            		{css_content}

	            	/* CSS: END Personalized */
	            </style>

	            <div id="{css_id_object}">
					<section id="banner-02-{id}" class="header-page banner-02  header-coutoman-{s_color_of_menu}">
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
		        <!---- // AC: Banner 02 Module -->
			';		

			$content = '{c_title}';

			$generate_content = 
				str_replace(
					array('{c_title}','{id}','{css_button}'),
					array($c_title,$obj_id,$css_button),
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