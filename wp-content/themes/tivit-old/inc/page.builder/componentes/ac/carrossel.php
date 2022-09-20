<?php
/*
 * Page Builder Componentes
 * AC / Carrossel
*/

function pb_ac_carrossel($obj_id,$obj = null, $block, $echo = true){
	$generate_element = "";

	if( have_rows('ac-pb-carrossel-group',$obj_id) ):
		while ( have_rows('ac-pb-carrossel-group',$obj_id) ) : the_row();
	

			$s_color_of_menu = get_sub_field('ac-pb-carrossel-color-of-menu');
			$s_color_font = get_sub_field('ac-pb-carrossel-font-color');	
			$s_color_background = get_sub_field('ac-pb-carrossel-background-color');	
			$s_img_background = get_sub_field('ac-carrossel-background-image');	

			$m_default_margin = get_sub_field('ac-pb-carrossel-margin-padding-default');	
			$m_personalized_margin = get_sub_field('ac-pb-carrossel-margin-padding-personalized');				

			$width = get_sub_field('ac-pb-carrossel-width');

 			$div_el = "#carrossel-$obj_id";

			$css_id_object =  get_sub_field('ac-pb-carrossel-id');
			$css_content =  get_sub_field('ac-pb-carrossel-css');
			if(empty($css_id_object)){
				$css_id_object = 'element-carrossel-'.$obj_id;
			}

						
			$css_container = set_section_width($width);

			$t_color_font = set_font_color($div_el.' h1',$s_color_font);
			$t_color_font .= set_font_color($div_el.' p',$s_color_font);
			$t_color_font .= set_font_color($div_el,$s_color_font);
			$t_color_background = set_background_mask($div_el,$s_color_background,$s_img_background);
			if(empty($s_color_background)){
				$s_color_background = "#000";
			}
			

			$t_margin_and_padding = "";
			if(!$m_default_margin){
				$t_margin_and_padding = set_margin_personalized($m_personalized_margin, $div_el);
			}

			$carrosel_itens = get_sub_field('ac-pb-carrossel-content');			


			$template = '	            
	            <!---- AC: Carrossel Module -->
	            <style>
					
	            	'.$t_color_font.'	            	
	            	'.$t_color_background.'
	            	'.$t_margin_and_padding.'

	            	/* CSS Personalized */
	            	
	            		{css_content}

	            	/* CSS: END Personalized */
	            </style>

				<div id="{css_id_object}" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
		            <section id="carrossel-{id}" class="box-slider header-coutoman-{s_color_of_menu}">
		                <div class="{css_container}">
		                	<div class="row">
				               	<div class="col-md-12">
					                <ul class="slider-content-list">
					                	{content}
					                </ul>
					            </div>    
				            </div>    
		                </div>
		            </section>		 					 			
		        </div>    

		        <!---- // AC: Carrossel Module -->
			';		

						
			$generate_content = "";			
			foreach($carrosel_itens as $it){
				$generate_content .= '<li class="slider-content-item text-center" id="'.$it['ac-pb-carrossel-content-id'].'">';
				switch ($it['ac-pb-carrossel-content-option']) {
					case 'commom':
						$generate_content .= $it['ac-pb-carrossel-content-option-commom'];								
						break;
					
					case 'video':					
						preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $it['ac-pb-carrossel-content-option-video'], $match);
						$youtube_id = $match[1];
			            

			            $generate_content .=  '<div class="video-wrapper">';
						$generate_content .=  '<iframe width="560" height="349" src="http://www.youtube.com/embed/'.$youtube_id.'?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>';
						$generate_content .=  '</div>';
												
						break;
					
					case 'image':						
			            
						$generate_content .=  '<img src="'.$it['ac-pb-carrossel-content-option-image']['url'].'" class="w100">';

						break;					
				}
				$generate_content .="</li>";									
			}



			$generate_element = 
				str_replace(
					array('{id}','{css_content}','{css_id_object}','{s_color_of_menu}','{content}','{css_container}'),
					array($obj_id, $css_content,$css_id_object,$s_color_of_menu,$generate_content,$css_container),
					$template);

			if($echo){
				echo $generate_element;
			}

		endwhile;
	endif;
	
	return $generate_element;
}