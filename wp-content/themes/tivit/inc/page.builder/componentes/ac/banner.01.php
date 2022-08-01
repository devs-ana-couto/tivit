<?php
/*
 * Page Builder Componentes
 * AC / Banner 01
*/

function pb_ac_banner_01($obj_id,$obj = null,$echo = true){	
	$generate_element = "";

	if( have_rows('ac-pb-banner-01-group',$obj_id) ):
		while ( have_rows('ac-pb-banner-01-group',$obj_id) ) : the_row();
			$c_title = get_sub_field('ac-pb-banner-01-title');			
			$c_subtitle = get_sub_field('ac-pb-banner-01-subtitle');						
			$c_button_remove = get_sub_field('ac-pb-banner-01-button-remove');
			$c_button_tittle = get_sub_field('ac-pb-banner-01-button-label');
			$c_button_link_array = get_sub_field('ac-pb-banner-01-button-link');
			

			$s_color_of_menu = get_sub_field('ac-pb-banner-01-color-of-menu');
			$s_color_font = get_sub_field('ac-pb-banner-01-font-color');	
			$s_color_background = get_sub_field('ac-pb-banner-01-background-color');	
			$s_color_button = get_sub_field('ac-pb-banner-01-button-color');	
			$s_img_background = get_sub_field('ac-pb-banner-01-background-image');	
			$s_mask = get_sub_field('ac-pb-banner-01-mask');
			
			$m_default_margin = get_sub_field('ac-pb-banner-01-margin-padding-default');	
			$m_personalized_margin = get_sub_field('ac-pb-banner-01-margin-padding-personalized');				

 			$div_el = "#banner-01-$obj_id";

			$css_id_object =  get_sub_field('ac-pb-banner-01-id');
			$css_content =  get_sub_field('ac-pb-banner-01-css');
			if(empty($css_id_object)){
				$css_id_object = 'element-banner-01-'.$obj_id;
			}

			$c_button_target = "_self";
			if($c_button_link_array){
				$c_button_link = $c_button_link_array['url'];
				$c_button_target = $c_button_link_array['target'];
			}

			
			$t_color_font = set_font_color($div_el.' h1',$s_color_font);
			$t_color_background = set_background($div_el,$s_color_background,$s_img_background);
			if(empty($s_color_background)){
				$s_color_background = "#fff";
			}
			if($s_mask){
				$t_color_background .= remove_mask($div_el,$s_mask);
			}
			
			
			$t_color_button = set_button_color($div_el.' a.read-more', $s_color_button, $s_color_background);
			$css_button = "";
			if(empty($s_color_button))$css_button = "btn-transparent"; 
			

			$t_margin_and_padding = "";
			if(!$m_default_margin){
				$t_margin_and_padding = set_margin_personalized($m_personalized_margin, $div_el);
			}


			$template = '	            
	            <!---- AC: Banner 01 Module -->
	            <style>
					
	            	'.$t_color_font.'
	            	'.$t_color_button.'
	            	'.$t_color_background.'
	            	'.$t_margin_and_padding.'

	            	/* CSS Personalized */
	            	
	            		{css_content}

	            	/* CSS: END Personalized */
	            </style>

	            <div id="{css_id_object}">
					<section id="banner-01-{id}" class="banner banner-01 scrollify header-coutoman-{s_color_of_menu}">
		                <div class="wrapper">
		                    <div class="centered">
		                        <div class="container content">
		                            <div class="row">                                        
		                                <div class="col-md-12">
		                                	{content}
											{button}
		                                </div>    
		                            </div>
		                        </div>    
		                    </div>                            
		                    <a href="#page-down" class="page-down"></a>
		                </div>
		            </section>		            		            		
		        </div>    
		        <!---- // AC: Banner 01 Module -->
			';		

			$content = '
                <span class="paragraph-01">
                    {c_subtitle}
                </span>
                <br/>
                {c_title}';
			

			$button = '<br/><br/>
                <a href="{c_button_link}"  target="{c_button_target}" class="btn {css_button} read-more"><b>{c_button_tittle}</b></a>';	
			
			$generate_content = 
				str_replace(
					array('{c_button_tittle}','{c_button_link}','{c_button_target}','{c_title}','{c_subtitle}','{id}','{css_button}'),
					array($c_button_tittle,$c_button_link,$c_button_target,$c_title,$c_subtitle,$obj_id,$css_button),
					$content);

			$generate_button = 
				str_replace(
					array('{c_button_tittle}','{c_button_link}','{c_button_target}','{c_title}','{c_subtitle}','{id}','{css_button}'),
					array($c_button_tittle,$c_button_link,$c_button_target,$c_title,$c_subtitle,$obj_id,$css_button),
					$button);
					
			if($c_button_remove){
				$generate_button = "";
			}	
			
			$generate_element = 
				str_replace(
					array('{id}','{css_content}','{css_id_object}','{s_color_of_menu}','{content}','{button}'),
					array($obj_id, $css_content,$css_id_object,$s_color_of_menu,$generate_content,$generate_button),
					$template);

			if($echo){
				echo $generate_element;
			}

		endwhile;
	endif;
	
	return $generate_element;
}