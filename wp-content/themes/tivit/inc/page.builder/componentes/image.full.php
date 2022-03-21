<?php
/*
 * Page Builder Componentes
 * Image Full
*/

function pb_image_full($obj_id,$obj = null,$block=0,$echo = true){	
	$generate_element = "";

	$c_url = get_sub_field('gd-el-image-full-url');
	$t = get_sub_field('gd-el-image-full-url-margin-top');
	$b = get_sub_field('gd-el-image-full-url-margin-bottom');
	$tb = "";
	if(!empty($t)){
		$tb .= "margin-top:".$t."px; ";
	}
	if(!empty($b)){
		$tb .= "margin-bottom:".$b."px; ";
	}

	$generate_element = '	            
        <!---- Image Full Module -->
        <section class="box-image-full header-coutoman-dark" id="gd-el-image-full-'.$block.'" style="'.$tb.'">
            <img src="'.$c_url['url'].'" class="w100">
        </section>        
        <!---- // Image Full Module -->';		

	if($echo){
		echo $generate_element;
	}


	return $generate_element;
}