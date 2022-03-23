<?php
/*
 * Page Builder Componentes
 * Iframe
*/

function pb_iframe_full($obj_id,$obj = null,$block=0,$echo = true){	
	$generate_element = "";

	$c_url = get_sub_field('gd-el-iframe-url');
	$id = 'gd-el-iframe-full_-src-'.$block;
	$generate_element = '	            
        <!---- Iframe Full  -->
        <section class="box-iframe-full header-coutoman-dark" id="gd-el-iframe-full-'.$block.'">
            <iframe src="'.$c_url.'" class="w100 no-border p-0 m-0" id="'.$id.'"></iframe>
        </section>     
		<style>
			#'.$id.'{
				height:100vh; min-height:1067px; border:0px; margin:0px; padding:0px;  overflow:hidden;
			}
			
			@media (min-width: 1024px) {
				#'.$id.'{
					height:100vh; min-height:994px; border:0px; margin:0px; padding:0px;  overflow:hidden;
				}
			
			}	
		</style>
        <script>
		    // Selecting the iframe element
		    var iframe = document.getElementById("'.$id.'");    
		    // Adjusting the iframe height onload event
		    iframe.onload = function(){
				setInterval(function(){ 
					iframe.style.height = iframe.contentWindow.document.body.scrollHeight + "px";
				 }, 1000);        
		    }
	    </script>           
        <!---- // Iframe Module -->';		

	if($echo){
		echo $generate_element;
	}


	return $generate_element;
}