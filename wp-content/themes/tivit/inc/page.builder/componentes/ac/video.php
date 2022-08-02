<?php
/*
 * Page Builder Componentes
 * AC / Video
*/

function pb_ac_video($obj_id, $obj = null, $echo = true)
{
    $generate_element = "";


    $c_text = get_sub_field('gd-el-simple-content');

    $s_color_background = get_sub_field('gd-el-simple-background-color');
    $s_img_background = get_sub_field('gd-el-simple-background-image');

    $m_default_margin = get_sub_field('gd-el-simple-margin-padding-default');
    $m_personalized_margin = get_sub_field('gd-el-simple-margin-padding-personalized');

    $css_id_object = get_sub_field('gd-el-simple-id');
    $css_content = get_sub_field('gd-el-simple-css');
    if (empty($css_id_object)) {
        $css_id_object = 'element-lista-logo-' . $obj_id;
    }
    $div_el = $css_id_object;


    $t_color_font = set_font_color($div_el . ' h1', $s_color_font);
    $t_color_font .= set_font_color($div_el . ' p', $s_color_font);
    $t_color_font .= set_font_color($div_el, $s_color_font);
    $t_color_background = set_background_mask($div_el, $s_color_background, $s_img_background);
    if (empty($s_color_background)) {
        $s_color_background = "#000";
    }


    $t_margin_and_padding = "";
    if (!$m_default_margin) {
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

	            	' . $t_color_font . '
	            	' . $t_color_background . '
	            	' . $t_margin_and_padding . '

	            	/* CSS Personalized */

	            		{css_content}

	            	/* CSS: END Personalized */
	            </style>
        <section class="container-fluid box-videos position-relative" id="{css_id_object}" style="background: white;">
                <div class="card-img-overlay h-100 d-flex align-items-center mask-50per">
                    <div class="w-100 h-50" style="background: ' . $s_color_background . '; "></div>
                 </div>
                <div class="d-flex justify-content-center">
                <div class="col-11 col-lg-9">
                    <div class="container box-dados position-relative p-4"
                     style="background: url(' . $video_imagem_desk . ');">
                        <div class="row row-box justify-content-center align-items-center h-100">
                            <div class="col-12 col-lg-6 box-infos order-2 order-lg-1">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-10 col-lg-8">
                                        ' . $c_text . '
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 box-infos order-1 order-lg-2 d-flex justify-content-center">
                                <div class="col-auto player">
                                    <div class="d-flex flex-column">
                                        <div class="col-12 d-flex justify-content-center flex-column position-relative order-2 order-lg-1">
                                            <div class="col-12">
                                                <div class="aura"></div>
                                            </div>
                                        <div class="col-12 d-flex justify-content-center position-absolute">
                                            <button data-bs-toggle="modal" data-bs-target="#videoOpen">
                                                <img src="' . get_template_directory_uri() . '/assets/images/modulos/videos//player.svg"
                                                alt="...">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-img-overlay mask-video-img"></div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="videoOpen" data-bs-keyboard="true" tabindex="-1" aria-labelledby="videoOpenLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <script src="https://www.youtube.com/iframe_api"></script>
                    <div id="player"></div>
                </div>
            </div>
        </div>
    </div>
  
    </section>
        
    <script>
        var player, iframe;
        var $ = document.querySelector.bind(document);

        // init player
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

        // when ready, wait for clicks
        function onPlayerReady(event) {
            var player = event.target;
            iframe = $("#player");
            setupListener();
        }

        function setupListener() {
            $("button.open").click(playFullscreen);
        }

        function playFullscreen() {
            player.playVideo();//won"t work on mobile

            var requestFullScreen = iframe.requestFullScreen || iframe.mozRequestFullScreen || iframe.webkitRequestFullScreen;
            if (requestFullScreen) {
                requestFullScreen.bind(iframe)();
            }
        }

        const myModalEl = document.getElementById("videoOpen");
        myModalEl.addEventListener("hidden.bs.modal", event => {
            player.pauseVideo();
        });
        myModalEl.addEventListener("shown.bs.modal", event => {
            player.playVideo();
        });

    </script>
  

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
    while (have_rows('gd-el-video-itens', $obj_id)) : the_row();
        $imagem = get_sub_field('gd-el-video-itens-icone');
        $generate_content .=
            str_replace(
                array('{icone}', '{texto}', '{cols}'),
                array($imagem['url'], get_sub_field('gd-el-video-itens-texto'), $cols),
                $content);
    endwhile;


    $generate_element =
        str_replace(
            array('{id}', '{c_text}', '{css_content}', '{css_id_object}', '{s_color_of_menu}', '{content}', '{video}', '{video_imagem_desk}', '{video_imagem_mobi}'),
            array($obj_id, $c_text, $css_content, $css_id_object, $s_color_of_menu, $generate_content, $video, $video_imagem_desk, $video_imagem_mobi),
            $template);

    if ($echo) {
        echo $generate_element;
    }


    return $generate_element;
}