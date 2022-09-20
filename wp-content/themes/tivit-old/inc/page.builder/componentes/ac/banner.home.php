<?php
/*
 * Page Builder Componentes
 * AC / Banner Home
*/

function pb_ac_banner_home($obj_id,$obj = null, $block, $echo = true){
	$generate_element = "";
	if( have_rows('ac-pb-banner-home-group',$obj_id) ):
		while ( have_rows('ac-pb-banner-home-group',$obj_id) ) : the_row();
			$c_title = get_sub_field('ac-pb-banner-home-text');			
			$c_title_clean = strip_tags($c_title);
			$c_position = get_sub_field('ac-pb-banner-home-position-text');
			$c_button_tittle = get_sub_field('ac-pb-banner-home-button-label');
			$c_button_link_array = get_sub_field('ac-pb-banner-home-button-link');
			$c_button_remove = get_sub_field('ac-pb-banner-home-button-remove');
			
			$c_image = get_sub_field('ac-pb-banner-home-image');

			$s_color_of_menu = get_sub_field('ac-pb-banner-home-color-of-menu');
			$s_color_font = get_sub_field('ac-pb-banner-home-font-color');	
			$s_color_background = get_sub_field('ac-pb-banner-home-background-color');	
			$s_color_button = get_sub_field('ac-pb-banner-home-button-color');	
			$s_img_background = get_sub_field('ac-pb-banner-home-background-image');	

			$m_default_margin = get_sub_field('ac-pb-banner-home-margin-padding-default');	
			$m_personalized_margin = get_sub_field('ac-pb-banner-home-margin-padding-personalized');				

 			$div_el = "#banner-home-$obj_id";

			$css_id_object =  get_sub_field('ac-pb-banner-home-id');
			$css_content =  get_sub_field('ac-pb-banner-home-css');
			if(empty($css_id_object)){
				$css_id_object = 'element-banner-home-'.$obj_id;
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
			
			$t_color_button = set_button_color($div_el.' a.read-more', $s_color_button, $s_color_background);
			$css_button = "";
			if(empty($s_color_button))$css_button = "btn-negative";  
			

			$t_margin_and_padding = "";
			if(!$m_default_margin){
				$t_margin_and_padding = set_margin_personalized($m_personalized_margin, $div_el);
			}


			$template = '	            
	            <!---- AC: Banner Home Module -->
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
		            <section id="banner-home-{id}" class="banner-main header-coutoman-{s_color_of_menu}">
		                <div class="wrapper">
		                    <div class="centered">
		                        <div class="container content">
		                            <div class="row">                                        
		                                <div class="col-lg-12 banner-main-text-{c_position}">
		                                {content}
		                                </div>    
		                            </div>
		                        </div>
		                    </div>    
		                    <a href="#page-down" class="page-down"></a>
		                </div>
		            </section>			
		        </div>    
		        <!---- // AC: Banner Home Module -->
			';		

			$content = '
	            <div class="image-area for-mobile" data-aos-delay="800" data-aos="fade-down" data-aos-anchor="#banner-home-{id}" >
	                <img src="{img}" alt="{c_title_clean}">    
	            </div>
	            <div class="clear w100 block"></div>

	            {c_title}

				{c_button}

	            <div class="image-area for-device" data-aos-delay="800" data-aos="fade-left">
	                <img src="{img}" alt="{c_title_clean}">
	            </div>';

			$button = '<a href="{c_button_link}" target="{c_button_target}" class="btn {css_button} read-more"><b>{c_button_tittle}</b></a>';	
			if($c_button_remove){
				$button = "";
			}
			
			$generate_button = 
				str_replace(
					array('{c_button_tittle}','{c_button_link}','{c_button_target}','{c_title}','{c_title_clean}','{img}','{id}','{css_button}'),
					array($c_button_tittle,$c_button_link,$c_button_target,$c_title,$c_title_clean,$c_image['url'],$obj_id,$css_button),
					$button);

			
			$generate_content = 
				str_replace(
					array('{c_button_tittle}','{c_button_link}','{c_button_target}','{c_title}','{c_title_clean}','{img}','{id}','{css_button}','{c_button}'),
					array($c_button_tittle,$c_button_link,$c_button_target,$c_title,$c_title_clean,$c_image['url'],$obj_id,$css_button,$generate_button),
					$content);

			$generate_element = 
				str_replace(
					array('{id}','{css_content}','{css_id_object}','{s_color_of_menu}','{c_position}','{content}'),
					array($obj_id, $css_content,$css_id_object,$s_color_of_menu,$c_position,$generate_content,$generate_button),
					$template);

			if($echo){
				echo $generate_element;
			}

		endwhile;
	endif;
	
	return $generate_element;
}