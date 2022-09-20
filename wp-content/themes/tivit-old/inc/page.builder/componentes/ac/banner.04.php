<?php
/*
 * Page Builder Componentes
 * AC / Banner 04
*/

function pb_ac_banner_04($obj_id,$obj = null, $block, $echo = true){
	$generate_element = "";

	if( have_rows('ac-pb-banner-04-group',$obj_id) ):
		while ( have_rows('ac-pb-banner-04-group',$obj_id) ) : the_row();
			$c_title_left = get_sub_field('ac-pb-banner-04-title-left');			
			$c_title_right = get_sub_field('ac-pb-banner-04-title-right');			
			$c_image = get_sub_field('ac-pb-banner-04-image');	

			$s_color_of_menu = get_sub_field('ac-pb-banner-04-color-of-menu');
			$s_color_font = get_sub_field('ac-pb-banner-04-font-color');	
			$s_color_background = get_sub_field('ac-pb-banner-04-background-color');	
			$s_img_background = get_sub_field('ac-pb-banner-04-background-image');	

			$m_default_margin = get_sub_field('ac-pb-banner-04-margin-padding-default');	
			$m_personalized_margin = get_sub_field('ac-pb-banner-04-margin-padding-personalized');				

 			$div_el = "#banner-04-$obj_id";

			$css_id_object =  get_sub_field('ac-pb-banner-04-id');
			$css_content =  get_sub_field('ac-pb-banner-04-css');
			if(empty($css_id_object)){
				$css_id_object = 'element-banner-04-'.$obj_id;
			}

			
			$t_color_font = set_font_color($div_el.' h1',$s_color_font);
			$t_color_font .= set_font_color($div_el.' p',$s_color_font);
			$t_color_font .= set_font_color($div_el,$s_color_font);
			$t_color_background = set_background($div_el,$s_color_background,$s_img_background);
			if(empty($s_color_background)){
				$s_color_background = "#000";
			}
			

			$t_margin_and_padding = "";
			if(!$m_default_margin){
				$t_margin_and_padding = set_margin_personalized($m_personalized_margin, $div_el);
			}


			$template = '	            
	            <!---- AC: Banner 04 Module -->
	            <style>
					
	            	'.$t_color_font.'	            	
	            	'.$t_color_background.'
	            	'.$t_margin_and_padding.'

	            	/* CSS Personalized */
	            	
	            		{css_content}

	            	/* CSS: END Personalized */
	            </style>

	            <div id="{css_id_object}">
					<section id="banner-04-{id}" class="header-page box-content-04 banner-04 header-coutoman-{s_color_of_menu}">
	                    <div class="wrapper">
	                        <div class="container">
	                            <div class="row">                                        
	                                <div class="col-lg-12 text-center">
	                                    {c_title_left}
	                                    <img class="m-top-x4 m-bottom-x4" src="{c_image}">
	                                    {c_title_right}
	                                </div>
	                            </div>
	                        </div>    
	                        <a href="#page-down" class="page-down"></a>
	                    </div>
		            </section>					
		        </div>    
		        <!---- // AC: Banner 04 Module -->
			';		



			$generate_element = 
				str_replace(
					array('{id}','{css_content}','{css_id_object}','{s_color_of_menu}','{c_title_left}','{c_title_right}','{c_image}'),
					array($obj_id, $css_content,$css_id_object,$s_color_of_menu,$c_title_left,$c_title_right,$c_image['url']),
					$template);

			if($echo){
				echo $generate_element;
			}

		endwhile;
	endif;
	
	return $generate_element;
}