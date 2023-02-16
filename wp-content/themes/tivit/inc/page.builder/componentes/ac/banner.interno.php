<?php
/*
 * Page Builder Componentes
 * AC / Banner Home
*/

function pb_ac_banner_interno($obj_id, $obj = null, $block, $echo = true)
{
    global $detect;
    $generate_element = "";
    // var_dump(have_rows('gd-header-interno',$obj_id));
    // if( have_rows('gd-header',$obj_id) ):
    // while ( have_rows('gd-header',$obj_id) ) : the_row();
    $c_title = get_sub_field('gd-el-simple-content');
    $c_title_clean = strip_tags($c_title);
    // $c_position = get_sub_field('ac-pb-banner-home-position-text');
    $c_button_tittle = get_sub_field('gt-el-simple-botao');
    $c_button_link_array = get_sub_field('gd-el-simple-video');
    // $c_button_remove = get_sub_field('ac-pb-banner-home-button-remove');
// echo '$c_title='.$c_title.'<br>';
// echo '$c_button_tittle='.$c_button_tittle.'<br>';
// echo '$c_button_link_array='.$c_button_link_array.'<br>';

    // $c_image = get_sub_field('gd-el-simple-background-image');

    // $s_color_of_menu = get_sub_field('ac-pb-banner-home-color-of-menu');
    // $s_color_font = get_sub_field('ac-pb-banner-home-font-color');
    $s_color_background = get_sub_field(' gd-el-simple-background-color');
    // $s_color_button = get_sub_field('ac-pb-banner-home-button-color');
    $s_img_background_array = get_sub_field('gd-el-simple-background-image');
    $s_img_background_mobile_array = get_sub_field(' gd-el-simple-background-image-mobile');
    $s_img_background = $s_img_background_array['url'];
    //$s_img_background = $detect->isMobile() ? $s_img_background_mobile_array['url'] :  $s_img_background_array['url'];
// echo '$s_color_background='.$s_color_background.'<br>';
// echo '$s_img_background='.$s_img_background.'<br>';

    // $m_default_margin = get_sub_field('ac-pb-banner-home-margin-padding-default');
    // $m_personalized_margin = get_sub_field('ac-pb-banner-home-margin-padding-personalized');

    // $div_el = "#banner-home-$obj_id";

    $css_id_object = get_sub_field('gd-el-simple-id');
    $css_content = get_sub_field('gd-el-simple-css');
    if (empty($css_id_object)) {
        $css_id_object = 'element-banner-interno-' . $obj_id;
        // $css_id_object = $obj_id;
    }
// echo '$css_id_object='.$css_id_object.'<br>';
// echo '$css_content='.$css_content.'<br>';

    $c_button_target = "_self";
    //if ($c_button_link_array) {
      //  $c_button_link = $c_button_link_array['url'];
       // $c_button_target = $c_button_link_array['target'];
    //}


    // $t_color_font = set_font_color($div_el.' h1',$s_color_font);
    // $t_color_background = set_background($div_el,$s_color_background,$s_img_background);
    if (empty($s_color_background)) {
        $s_color_background = "#fff";
    }
    $t_color_font = '';
    $t_color_button = '';
    $t_color_background = '';
    $t_margin_and_padding = '';

    // $t_color_button = set_button_color($div_el.' a.read-more', $s_color_button, $s_color_background);
    // $css_button = "";
    // if(empty($s_color_button))$css_button = "btn-negative";


    // $t_margin_and_padding = "";
    // if(!$m_default_margin){
    // 	$t_margin_and_padding = set_margin_personalized($m_personalized_margin, $div_el);
    // }
    $modal = '';
    $script = '';

    if (!empty($c_button_link_array)) {
        $modal = '
                <div class="modal fade" id="videoHeader" data-bs-keyboard="true" tabindex="-1" aria-labelledby="videoOpenLabel"
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
    </div>';
        $script = '
        <script>
        var player, iframe;
        var $ = document.querySelector.bind(document);

        // init player
        function onYouTubeIframeAPIReady() {
            player = new YT.Player("player", {
                height: "400",
                width: "100%",
                videoId: "'. $c_button_link_array .'",
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

        const myModalEl = document.getElementById("videoHeader");
        myModalEl.addEventListener("hidden.bs.modal", event => {
            player.pauseVideo();
        });
        myModalEl.addEventListener("shown.bs.modal", event => {
            player.playVideo();
        });

    </script>
        ';

        $player = '

        <div class="col-auto player position-absolute">
                                    <div class="d-flex flex-column">
                                        <div class="col-12 d-flex justify-content-center flex-column position-relative order-2 order-lg-1">
                                            <div class="col-12">
                                            <div class="aura"></div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center position-absolute">
                                            <button data-bs-toggle="modal" data-bs-target="#videoHeader">
                                                <img src="' . get_template_directory_uri() . '/assets/images/a-tivit/play.svg"
                                                alt="...">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-12 order-1 order-lg-2 d-flex justify-content-center">
                                        <button class="text-white" data-bs-toggle="modal" data-bs-target="#videoHeader">
                                            Assista ao reel
                                        </button>
                                    </div>
                                </div>';

    }

    $player = (isset($player)) ? $player : '';
    $template = '
	            <!---- AC: Banner Home Module -->
	            <style>

	            	' . $t_color_font . '
	            	' . $t_color_button . '
	            	' . $t_color_background . '
	            	' . $t_margin_and_padding . '

	            	/* CSS Personalized */

	            		{css_content}

	            	/* CSS: END Personalized */
	            </style>



                <section class="container-fluid p-0 header-inner position-relative">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 position-relative box-mask">
                                <div class="card-img-overlay p-0 bottom-0">
                                    <img class="w-100 d-none d-lg-block"
                                        src="' . get_template_directory_uri() . '/assets/images/header-inner/Vector.svg"
                                         alt="">
                                    <img class="w-100 d-lg-none"
                                        src="' . get_template_directory_uri() . '/assets/images/header-inner/mask-mobile.svg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-0 box-header position-relative"
                        style="background: url(\'{s_img_background}\') no-repeat center center; background-size: cover;">
                            <!--<div class="card-img-overlay mask-gradient"></div>-->
                            <div class="d-flex flex-column h-100 justify-content-center position-relative align-items-center">
                                <div class="col-10 col-xxl-9 d-flex justify-content-center align-items-center flex-column box-title">
                                   {c_title}
                                </div>
                                '. $player .'
                            </div>
                        </div>
                    </div>
                </section>
        '. $modal .'
        '. $script .'

';

    // $content = '
    //     <div class="image-area for-mobile" data-aos-delay="800" data-aos="fade-down" data-aos-anchor="#banner-home-{id}" >
    //         <img src="{img}" alt="{c_title_clean}">
    //     </div>
    //     <div class="clear w100 block"></div>

    //     {c_title}

    // 	{c_button}

    //     <div class="image-area for-device" data-aos-delay="800" data-aos="fade-left">
    //         <img src="{img}" alt="{c_title_clean}">
    //     </div>';

    // $button = '<a href="{c_button_link}" target="{c_button_target}" class="btn {css_button} read-more"><b>{c_button_tittle}</b></a>';
    // if($c_button_remove){
    // 	$button = "";
    // }

    // $generate_button =
    // 	str_replace(
    // 		array('{c_button_tittle}','{c_button_link}','{c_button_target}','{c_title}','{c_title_clean}','{img}','{id}','{css_button}'),
    // 		array($c_button_tittle,$c_button_link,$c_button_target,$c_title,$c_title_clean,$c_image['url'],$obj_id,$css_button),
    // 		$button);


    // $generate_content =
    // 	str_replace(
    // 		array('{c_button_tittle}','{c_button_link}','{c_button_target}','{c_title}','{c_title_clean}','{img}','{id}','{css_button}','{c_button}'),
    // 		array($c_button_tittle,$c_button_link,$c_button_target,$c_title,$c_title_clean,$c_image['url'],$obj_id,$css_button,$generate_button),
    // 		$content);

    $s_color_of_menu = $c_position = $generate_content = '';

    $generate_element =
        str_replace(
            array('{id}', '{css_content}', '{css_id_object}', '{s_color_of_menu}', '{c_position}', '{content}', '{s_img_background}', '{c_title}'),
            array($obj_id, $css_content, $css_id_object, $s_color_of_menu, $c_position, $generate_content, $s_img_background, $c_title),
            $template);

    if ($echo) {
        echo $generate_element;
    }

    // endwhile;
    // endif;

    return $generate_element;
}