<?php
/*
 * Page Builder Componentes
 * Gallery
*/

function pb_gallery($obj_id,$obj = null,$block=0,$echo = true){	
	$generate_element = "";

	//$photos = get_sub_field('gd-el-gallery-all');
	$t = get_sub_field('gd-el-gallery-margin-top');
	$b = get_sub_field('gd-el-gallery-margin-bottom');
	$tb = "";
	if(!empty($t)){
		$tb .= "margin-top:".$t."px; ";
	}
	if(!empty($b)){
		$tb .= "margin-bottom:".$b."px; ";
	}


	$generate_element = '	            
        <!---- Gallery Module -->
        <section class="box-gallery header-coutoman-dark" id="gd-el-gallery-'.$block.'" style="'.$tb.'">        
            <div class="container content photo-gallery">
				{content}
			</div>
        </section>
        <!---- // Gallery Module -->
	';		
	$photos = "";
	if( have_rows('gd-el-gallery-all',$obj_id) ):
	    $photos .= '<div class="row">';
	    while ( have_rows('gd-el-gallery-all',$obj_id) ) : the_row();
			$img = get_sub_field('gd-el-gallery-url');
			$css = "";
			$only = false;
			if(get_sub_field('gd-el-gallery-size') == "entire"){
				$photos .= '<div class="col-lg-12 ">';
				$only = true;
			}else{
				$photos .= '<div class="col-lg-6 ">';
				$css = 'horizontal';
			}
			$photos .= '<div class="box-photo">';
			$photos .= '<img class="'.$css.'" src="'.$img['url'].'">';	
			$photos .= '</div>';
			$photos .= '</div>';
	    endwhile;	    
	    $photos .= '</div>';
	endif;

	$generate_element = str_replace('{content}',$photos,$generate_element);

	if($echo){
		echo $generate_element;
	}


	return $generate_element;
}