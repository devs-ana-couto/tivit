<?php
/*
 * Page Builder Componentes
 * Vídeo Full
*/

function pb_video_full($obj_id,$obj = null,$block=0,$echo = true){
	$generate_element = "";

	$c_url = get_sub_field('gd-el-video-full-url');
	$auto = get_sub_field('gd-el-video-full-autoplay');
	$loop = get_sub_field('gd-el-video-full-loop');
	$controls = get_sub_field('gd-el-video-full-controls');
	$t = get_sub_field('gd-el-video-full-url-margin-top');
	$b = get_sub_field('gd-el-video-full-url-margin-bottom');
	$tb = "";
	if(!empty($t)){
		$tb .= "margin-top:".$t."px; ";
	}
	if(!empty($b)){
		$tb .= "margin-bottom:".$b."px; ";
	}

	$autoplay = "";
	if($auto){
		$autoplay = "&autoplay=1&mute=1";
		// $autoplay = "autoplay;";
	}

	$autoloop = "";
	if($loop){
		$autoloop = "&loop=1";
	}

	$autocontrols = "";
	if($controls){
		$autocontrols = "?controls=0&showinfo=0&autohide=1";
	}

	preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $c_url, $match);
	$youtube_id = $match[1];

	// $generate_element = '
    //     <!---- Video Full Module -->
    //     <section class="box-video-full header-coutoman-dark" id="gd-el-video-full-'.$block.'" style="'.$tb.'">
    //         <div class="video-wrapper">
	// 			<iframe width="560" height="349" src="http://www.youtube.com/embed/'.$youtube_id.'?rel=0&hd=1'.$autoplay.$autoloop.$autocontrols.'" frameborder="0" allowfullscreen></iframe>
	// 		</div>
    //     </section>
    //     <!---- // Video Full Module -->
	// ';

	$generate_element = '	            
        <!---- Video Full Module -->
        <section class="box-video-full header-coutoman-dark" id="gd-el-video-full-'.$block.'" style="'.$tb.'">
            <div class="video-wrapper">
				<iframe width="560" height="315" 
				src="https://www.youtube.com/embed/'.$youtube_id.'?oi=1'.$autoplay.$autocontrols.'&loop=1" 
				frameborder="0" allowfullscreen></iframe>
			</div>
        </section>
        <!---- // Video Full Module -->
	';


	if($echo){
		echo $generate_element;
	}


	return $generate_element;
}