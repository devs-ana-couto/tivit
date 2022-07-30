<?php
/*
 * Page Builder Componentes
 * AC / Video
*/

function pb_ac_video($obj_id,$obj = null,$echo = true){
	$generate_element = "";


			$c_text = get_sub_field('gd-el-simple-content');

			$s_color_background = get_sub_field('gd-el-simple-background-color');
			$s_img_background = get_sub_field('gd-el-simple-background-image');

			$m_default_margin = get_sub_field('gd-el-simple-margin-padding-default');
			$m_personalized_margin = get_sub_field('gd-el-simple-margin-padding-personalized');

			$css_id_object =  get_sub_field('gd-el-simple-id');
			$css_content =  get_sub_field('gd-el-simple-css');
			if(empty($css_id_object)){
				$css_id_object = 'element-lista-logo-'.$obj_id;
			}
 			$div_el = $css_id_object;


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

			$video = get_sub_field('gd-el-video-id');
			$video_imagem_desk_array = get_sub_field('gd-el-video-imagem-desktop');
			$video_imagem_mobi_array = get_sub_field('gd-el-video-imagem-mobile');
			$video_imagem_desk = $video_imagem_desk_array['url'];
			$video_imagem_mobi = $video_imagem_mobi_array['url'];

			$template = '
	            <!---- AC: video Module -->
	            <style>

	            	'.$t_color_font.'
	            	'.$t_color_background.'
	            	'.$t_margin_and_padding.'

	            	/* CSS Personalized */

	            		{css_content}

	            	/* CSS: END Personalized */
	            </style>
                

                
				<div id="main-solutions">
					<div id="{css_id_object}">
						<div class="gap">
							<div class="container">
								<div class="publiccloud position-relative">
									<div id="triangle-down"></div>
									<div>
										<img class="w-100 mask hide-mobile" src="'.get_template_directory_uri().'/assets/images/solucoes/mask.svg" alt="Mask" />
										<img class="w-100 mask hide-desktop" src="'.get_template_directory_uri().'/assets/images/solucoes/maskmobile.svg" alt="Mask" />
									</div>
									<div class="mainImage text-center m-auto">
										<img class="w-100 hide-mobile" src="{video_imagem_desk}" alt="..." />
										<img class="w-100 hide-desktop" src="{video_imagem_mobi}" alt="..." />
									</div>
									<div class="customCloudPosition position-absolute w-100">
										<div class="row custom-direction">
											<div class="col-12 col-md-6 d-flex justify-content-end">
											<div class="h-100">
												{c_text}
											</div>
											</div>
											<div class="col-12 col-md-6">
												<div>
													<button class="open" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
														<img class="w-auto" src="'.get_template_directory_uri().'/assets/images/solucoes/play.svg" alt="Play" />
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
						<div class="modal-body">
							<script src="https://www.youtube.com/iframe_api"></script>
							<div id="player"></div>
						</div>
						</div>
					</div>
				</div>

				<script>
					var player, iframe;
					var $ = document.querySelector.bind(document);

					function onYouTubeIframeAPIReady() {
						player = new YT.Player("player", {
							height: "400",
							width: "100%",
							videoId: "{video}",
							events: {
								"onReady": onPlayerReady
							}
						});
					}

					function onPlayerReady(event) {
						var player = event.target;
						iframe = $("#player");
						setupListener();
					}

					function setupListener (){
						$("button.open").addEventListener("click", playFullscreen);
					}

					function playFullscreen (){
						player.playVideo();
						var requestFullScreen = iframe.requestFullScreen || iframe.mozRequestFullScreen || iframe.webkitRequestFullScreen;
						if (requestFullScreen) {
							requestFullScreen.bind(iframe)();
						}
					}
				</script>

		        <!---- // AC: video Module -->
			';

			$content = '
				<div class="servico-item">
					<div class="row">
						<div class="col-12 col-md-2 offset-md-1">
							<div class="logo text-center">
								<img src="{icone}" alt="..."></a>
							</div>
						</div>
						<div class="col-12 col-md-8">
							<div class="box">
								<p class="paragrafo3">
									{texto}
								</p>
							</div>
						</div>
					</div>
				</div>
				';

			$generate_content = "";
			while ( have_rows('gd-el-video-itens',$obj_id) ) : the_row();
				$imagem = get_sub_field('gd-el-video-itens-icone');
				$generate_content .=
				str_replace(
					array('{icone}','{texto}','{cols}'),
					array($imagem['url'],get_sub_field('gd-el-video-itens-texto'),$cols),
					$content);
			endwhile;



			$generate_element =
				str_replace(
					array('{id}','{c_text}','{css_content}','{css_id_object}','{s_color_of_menu}','{content}','{video}','{video_imagem_desk}','{video_imagem_mobi}'),
					array($obj_id, $c_text,$css_content,$css_id_object,$s_color_of_menu,$generate_content,$video,$video_imagem_desk,$video_imagem_mobi),
					$template);

			if($echo){
				echo $generate_element;
			}


	return $generate_element;
}