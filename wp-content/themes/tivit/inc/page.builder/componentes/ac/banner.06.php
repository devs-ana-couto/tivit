<?php
/*
 * Page Builder Componentes
 * AC / Banner 6
*/

function pb_ac_banner_06($obj_id,$obj = null,$echo = true){	
	$generate_element = "";

	if( have_rows('ac-pb-banner-06-group',$obj_id) ):
		while ( have_rows('ac-pb-banner-06-group',$obj_id) ) : the_row();
			$c_content = get_sub_field('ac-pb-banner-06-text');			
			$c_title = get_sub_field('ac-pb-banner-06-title');			

			$s_color_of_menu = get_sub_field('ac-pb-banner-06-color-of-menu');
			$s_color_font = get_sub_field('ac-pb-banner-06-font-color');	
			$s_color_background = get_sub_field('ac-pb-banner-06-background-color');	
			$s_img_background = get_sub_field('ac-pb-banner-06-background-image');	

			$m_default_margin = get_sub_field('ac-pb-banner-06-margin-padding-default');	
			$m_personalized_margin = get_sub_field('ac-pb-banner-06-margin-padding-personalized');				

 			$div_el = "#header-page-tools";

			$css_id_object =  get_sub_field('ac-pb-banner-06-id');
			$css_content =  get_sub_field('ac-pb-banner-06-css');
			if(empty($css_id_object)){
				$css_id_object = 'element-banner-06-'.$obj_id;
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
	            <!---- AC: Banner 06 Module -->
	            <style>
					
	            	'.$t_color_font.'	            	
	            	'.$t_color_background.'
	            	'.$t_margin_and_padding.'

	            	/* CSS Personalized */
	            	
	            		{css_content}

	            	/* CSS: END Personalized */
	            </style>

	            <div id="{css_id_object}">
					<section id="header-page-tools" class="header-page box-content-06 banner-06 header-coutoman-{s_color_of_menu}">
	                    <div class="wrapper top">
	                        <div class="container">
	                            <div class="row">                                        
	                                <div class="col-lg-12 text-center">
        								<div class="titles">
	                                    	<div class="letters">
	                                    		{c_title}
	                                    	</div>
	                                    	{c_content}
	                                    </div>
	                                </div>
	                            </div>
	                        </div>    
	                        <a href="#page-down" class="page-down"></a>
	                    </div>
		            </section>					
		        </div>    
		        <!---- // AC: Banner 06 Module -->
			';		

			$generate_element = 
				str_replace(
					array('{id}','{css_content}','{css_id_object}','{s_color_of_menu}','{c_content}','{c_title}'),
					array($obj_id, $css_content,$css_id_object,$s_color_of_menu,$c_content,$c_title),
					$template);

			if($echo){
				echo $generate_element;
			}

		endwhile;
	endif;
	
	return $generate_element;
}