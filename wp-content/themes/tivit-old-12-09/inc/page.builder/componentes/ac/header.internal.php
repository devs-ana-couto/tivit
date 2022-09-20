<?php


function pb_ac_header_internal_mask($obj_id, $obj = null, $block, $echo = true)
{
    $generate_element = '';

    $h_image = get_sub_field("gd-el-header-internal_mask_image");
    $h_title = get_sub_field("gd-el-header-internal_mask_title");
    $h_cat_page = get_sub_field("gd-el-header-internal_mask_cat_page");
    $h_small_text = get_sub_field("gd-el-header-internal_mask_text_small_mask");
    $h_video = get_sub_field("gd-el-header-internal_mask_video");
    $h_video_text = get_sub_field("gd-el-header-internal_mask_video_text");

    $cta_group = get_sub_field("gd-el-header-internal_mask_group_cta");
    $cta_name = $cta_group["gd-el-header-internal_mask_group_cta_name"];
    $cta_link = $cta_group["gd-el-header-internal_mask_group_cta_link"];

    $active_mask = "";
    $mask_v = get_sub_field("gd-el-header-internal_mask_active");

    if(!$mask_v)
        $active_mask = "d-none";

    $template = '
    
    <!-- Header Inner -->
    <section class="container-fluid p-0 header-inner position-relative">
        <div class="container {active_mask}">
            <div class="row justify-content-center">
                <div class="col-12 position-relative box-mask">
                    <div class="card-img-overlay p-0 bottom-0 ">
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
             style="background: url({image});">
                <div class="card-img-overlay mask-gradient"></div>
                    <div class="d-flex flex-column h-100 justify-content-center position-relative align-items-center">
                        <div class="col-10 col-xxl-9 d-flex justify-content-center align-items-center flex-column box-title">
                            <p class="desc-title">{cat_page}</p>
                            <h1 class="title">{title}</h1>
                            {cta_box}
                        </div>
                        {html_player}
                        {small_text}
                    </div>
                </div>
        </section>

    ';

    $template_player = '
    <div class="col-auto player position-absolute" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
        <div class="d-flex flex-column">
            <div class="col-12 d-flex justify-content-center flex-column position-relative order-2 order-lg-1">
                <div class="col-12">
                    <div class="aura"></div>
                </div>
                <div class="col-12 d-flex justify-content-center position-absolute">
                    <button data-bs-toggle="modal" data-bs-target="#videoOpen{id}">
                        <img src="' . get_template_directory_uri() . '/assets/images/a-tivit/play.svg"
                             alt="...">
                    </button>
                </div>
            </div>
            <div class="col-12 order-1 order-lg-2 d-flex justify-content-center">
                <button class="text-white" data-bs-toggle="modal" data-bs-target="#videoOpen{id}">
                    {video_text}
                </button>
            </div>
        </div>
    </div>
    {modal_player}
    ';



    $generate_template_player = '';
    $generate_modal_player = '';
    $generate_small_text = '';

    if ($h_video !== "") {
        $modal_player = '<!-- Modal -->
    <div class="modal fade" id="videoOpen{id}" data-bs-keyboard="true" tabindex="-1" aria-labelledby="videoOpenLabel"
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
    <!-- Script header inner necessário para funcionar -->
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

    const myModalEl = document.getElementById("videoOpen{id}");
    myModalEl.addEventListener("hidden.bs.modal", event => {
        player.pauseVideo();
    });
    myModalEl.addEventListener("shown.bs.modal", event => {
        player.playVideo();
    });

</script>
    ';
        $generate_template_player =
            str_replace(
                array('{id}', '{video_text}'),
                array($obj_id, $h_video_text),
                $template_player
            );
        $generate_modal_player =
            str_replace(
                array('{video}', '{id}'),
                array($h_video, $obj_id),
                $modal_player
            );

    }

    if($cta_link !== ""){
        $template_cta = '
            <div class="buttoncta mt-4">
                <a href="{cta_link}" class="cta text-white" target="_blank">{cta_name}</a>
            </div>
';

        $generate_template_cta =
            str_replace(
                array('{cta_link}', '{cta_name}'),
                array($cta_link, $cta_name),
                $template_cta
            )
        ;
    }
    if($h_small_text !== ''){
        $template_small_text = '
        <div class="col-auto player position-absolute peoples">
            <p class="customNumbers">{small_text}</p>             
        </div>
        ';
        $generate_small_text =
            str_replace(
                array('{small_text}'),
                array($h_small_text),
                $template_small_text
            )
        ;
    }

    $generate_element =
        str_replace(
            array('{id}', '{title}', '{image}', '{cat_page}',
                '{html_player}', '{modal_player}', '{small_text}', '{cta_box}', '{active_mask}'),
            array($obj_id, $h_title, $h_image['url'], $h_cat_page,
                $generate_template_player, $generate_modal_player, $generate_small_text,
                $generate_template_cta, $active_mask),
            $template
        );

    if ($echo) {
        echo $generate_element;
    }
    return $generate_element;

}