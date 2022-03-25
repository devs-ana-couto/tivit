<?php
/*
 * Page Builder Componentes
 * AC / Banner 5
*/

function pb_ac_banner_05($obj_id,$obj = null,$echo = true){	
	$generate_element = "";

	if( have_rows('ac-pb-banner-05-group',$obj_id) ):
		while ( have_rows('ac-pb-banner-05-group',$obj_id) ) : the_row();
			$c_content = get_sub_field('ac-pb-banner-05-text');			

			$s_color_of_menu = get_sub_field('ac-pb-banner-05-color-of-menu');
			$s_color_font = get_sub_field('ac-pb-banner-05-font-color');	
			$s_color_background = get_sub_field('ac-pb-banner-05-background-color');	
			$s_img_background = get_sub_field('ac-pb-banner-05-background-image');	

			$m_default_margin = get_sub_field('ac-pb-banner-05-margin-padding-default');	
			$m_personalized_margin = get_sub_field('ac-pb-banner-05-margin-padding-personalized');				

 			$div_el = "#header-page-insights";

			$css_id_object =  get_sub_field('ac-pb-banner-05-id');
			$css_content =  get_sub_field('ac-pb-banner-05-css');
			if(empty($css_id_object)){
				$css_id_object = 'element-banner-05-'.$obj_id;
			}

			
			$t_color_font = set_font_color($div_el.' h1',$s_color_font);
			$t_color_font .= set_font_color($div_el.' p',$s_color_font);
			$t_color_font .= set_font_color($div_el,$s_color_font);
			$t_color_background = set_background_commom($div_el,$s_color_background,$s_img_background);
			if(empty($s_color_background)){
				$s_color_background = "#000";
			}
			

			$t_margin_and_padding = "";
			if(!$m_default_margin){
				$t_margin_and_padding = set_margin_personalized($m_personalized_margin, $div_el);
			}


			$template = '	            
	            <!---- AC: Banner 05 Module -->
	            <style>
					
	            	'.$t_color_font.'	            	
	            	'.$t_color_background.'
	            	'.$t_margin_and_padding.'

	            	/* CSS Personalized */
	            	
	            		{css_content}

	            	/* CSS: END Personalized */
	            </style>

	            <div id="{css_id_object}">
					<section id="header-page-insights" class="header-page box-content-05 banner-05 header-coutoman-{s_color_of_menu}">
	                    <div class="wrapper">
	                        <div class="container">
	                            <div class="row">                                        
	                                <div class="col-lg-12 text-center">
        								<div class="titles">
	                                    	{c_content}
	                                    </div>
	                                </div>
	                            </div>
	                        </div>    
	                        <a href="#page-down" class="page-down"></a>
	                    </div>
		            </section>					
		        </div>    
		        <!---- // AC: Banner 05 Module -->
			';		

			$generate_element = 
				str_replace(
					array('{id}','{css_content}','{css_id_object}','{s_color_of_menu}','{c_content}'),
					array($obj_id, $css_content,$css_id_object,$s_color_of_menu,$c_content),
					$template);

			if($echo){
				echo $generate_element;
			}

		endwhile;
	endif;
	
	return $generate_element;
}