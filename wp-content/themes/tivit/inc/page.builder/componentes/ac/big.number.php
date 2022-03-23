<?php
/*
 * Page Builder Componentes
 * AC / Big Number
*/

function pb_ac_big_number($obj_id,$obj = null,$echo = true){	
	$generate_element = "";

	if( have_rows('ac-pb-big-numbers-group',$obj_id) ):
		while ( have_rows('ac-pb-big-numbers-group',$obj_id) ) : the_row();
	
			$c_text = get_sub_field('ac-pb-big-numbers-text');			

			$s_color_of_menu = get_sub_field('ac-pb-big-numbers-color-of-menu');
			$s_color_font = get_sub_field('ac-pb-big-numbers-font-color');	
			$s_color_background = get_sub_field('ac-pb-big-numbers-background-color');	
			$s_img_background = get_sub_field('ac-big-numbers-background-image');	

			$m_default_margin = get_sub_field('ac-pb-big-numbers-margin-padding-default');	
			$m_personalized_margin = get_sub_field('ac-pb-big-numbers-margin-padding-personalized');				

 			$div_el = "#big-numbers-$obj_id";

			$css_id_object =  get_sub_field('ac-pb-big-numbers-id');
			$css_content =  get_sub_field('ac-pb-big-numbers-css');
			if(empty($css_id_object)){
				$css_id_object = 'element-big-numbers-'.$obj_id;
			}

			
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

			$numbers = get_sub_field('ac-pb-big-numbers-itens');
			$cols = 12 / count($numbers);

			$template = '	            
	            <!---- AC: Big Numbers Module -->
	            <style>
					
	            	'.$t_color_font.'	            	
	            	'.$t_color_background.'
	            	'.$t_margin_and_padding.'

	            	/* CSS Personalized */
	            	
	            		{css_content}

	            	/* CSS: END Personalized */
	            </style>

				<div id="{css_id_object}">
		 			<section id="big-numbers-{id}" class="box-numbers  header-coutoman-{s_color_of_menu}">
		                <div class="bg"></div>
		                <div class="wrapper centered">
		                    <div class="container content">
		                        <div class="row m-bottom-x4">                                        
		                            <div class="col-md-12">
		                                {c_text}
		                                <br/><br/>
		                            </div>
		                        </div>                     
		                        <div class="row m-top-x6">
		                        	{content}
		                        </div>
		                     </div>
		                 </div>
		            </section>
		        </div>    
	           
		        <!---- // AC: Big Numbers Module -->
			';		

						
			$content = '
                <div class="col-md-{cols} text-center">
                    <h1>{number}</h1>
                    <p class="paragraph-02">{label}</p>
                </div>
			';			

			$generate_content = "";			
			foreach($numbers as $it){

				$generate_content .= 
					str_replace(
						array('{label}','{number}','{cols}'),
						array($it['ac-pb-big-numbers-itens-label'],$it['ac-pb-big-numbers-itens-value'],$cols),
						$content);				
			}



			$generate_element = 
				str_replace(
					array('{id}','{c_text}','{css_content}','{css_id_object}','{s_color_of_menu}','{content}'),
					array($obj_id, $c_text,$css_content,$css_id_object,$s_color_of_menu,$generate_content),
					$template);

			if($echo){
				echo $generate_element;
			}

		endwhile;
	endif;
	
	return $generate_element;
}