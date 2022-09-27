<?php
function pb_ac_timeline($obj_id, $obj = null, $block, $echo = true)
{
    $generate_element = '';
    $generate_content = '';

    $r_time = get_sub_field('gd-el-timeline-events');

    $css_id = rand(0, 100000);

    $s_background = get_sub_field('gd-el-timeline-style-background');
    $s_padding_top = get_sub_field('gd-el-timeline-style-padding-top');
    $s_padding_top_mobile = get_sub_field('gd-el-timeline-style-padding-top-mobile');
    $s_padding_bottom = get_sub_field('gd-el-timeline-style-padding-bottom');
    $s_padding_bottom_mobile = get_sub_field('gd-el-timeline-style-padding-bottom-mobile');


    $template = '
    <style>
        .timeline-new-{css_id}{
            background-color: {bg_global};
            padding-top: {padding_top}px;
            padding-bottom: {padding_bottom}px;          
        }
        @media screen and (max-width: 991px) {
        .timeline-new-{css_id}{
                padding-top: {padding_top_mobile}px;
                padding-bottom: {padding_bottom_mobile}px;
            }
        }
    </style>
     <section class="container-fluid timeline-new timeline-new-{css_id}" id="timeline-new">
        <div class="container" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">

            <div class="d-none itens-time-line" id="itens-time-line">
                {content}
            </div>

            <div class="row d-xxl-none">
                <div class="col-12 controller mobile position-relative">
                    <div class="card-img-overlay mask-red">
                        <p></p>
                    </div>
                    <div class="col-12 h-100 box-controller d-flex justify-content-between align-content-center" style="z-index: 1060; ">
                        <button type="button" onclick="lastItem()" class="last">
                            <img src=" ' . get_template_directory_uri() . '/assets/images/timeline/arrow_back.svg" alt="">
                        </button>
                        <button type="button" onclick="nextItem()" class="next">
                            <img src=" ' . get_template_directory_uri() . '/assets/images/timeline/arrow_forward.svg" alt="">
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 position-relative">
                    <div class="row justify-content-between">
                        <div class="col-4 d-none d-xxl-block preview-timeline img-left position-relative">
                            <div class="card-img-overlay preview-mask"></div>
                        </div>
                        <div class="col-4 d-none d-xxl-block preview-timeline img-right position-relative">
                            <div class="card-img-overlay preview-mask"></div>
                        </div>
                    </div>

                    <div class="row justify-content-center row-active">
                        <div class="col-12 col-xxl-10 active">
                            <div class="w-100 h-100 d-none d-xxl-block position-relative">
                                <div class="card-img-overlay v-shadow"></div>
                                <div class="card-img-overlay mask-red mask-red-desk">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-none d-xxl-flex justify-content-center row-active row-desc">
                        <div class="col-auto desc-active mt-4">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 controller d-none d-xxl-block">
                    <div class="row justify-content-center position-relative">
                        <div class="col-auto position-absolute box-controller" style="z-index: 1060; ">
                            <button type="button" onclick="lastItem()" class="last">
                                <img src=" ' . get_template_directory_uri() . '/assets/images/timeline/arrow_back.svg" alt="">
                            </button>
                            <button type="button" onclick="nextItem()" class="next">
                                <img src=" ' . get_template_directory_uri() . '/assets/images/timeline/arrow_forward.svg" alt="">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 controller d-flex d-xxl-none justify-content-center align-content-center flex-wrap">
                    <div class="col-12 col-lg-10 d-flex justify-content-center desc-active mobile-desc">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ';

    $content = '
    <div class="item">
        <img src="{img}" alt="">
        <div class="data">{year}</div>
        <div class="desc">
            {desc}
        </div>
    </div>
    ';

    foreach ($r_time as $key => $time) :
        $img = $time['gd-el-timeline-image']['url'];
        $year = $time['gd-el-timeline-events-year'];
        $desc = $time['gd-el-timeline-events-desc'];

        $generate_content .= str_replace(
            array('{img}', '{year}', '{desc}'),
            array($img, $year, $desc),
            $content
        );
    endforeach;


    $generate_element =
        str_replace(
            array('{id}', '{content}', '{css_id}', '{bg_global}', '{padding_top}', '{padding_bottom}'
            , '{padding_top_mobile}', '{padding_bottom_mobile}'),
            array($obj_id, $generate_content, $css_id, $s_background, $s_padding_top, $s_padding_bottom
            , $s_padding_top_mobile, $s_padding_bottom_mobile),
            $template
        );
    if ($echo)
        echo $generate_element;
    return $generate_element;
}