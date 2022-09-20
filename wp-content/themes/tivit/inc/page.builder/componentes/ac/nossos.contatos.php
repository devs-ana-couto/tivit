<?php
function pb_ac_nossos_canais($obj_id, $obj = null, $block, $echo = true)
{
    $generate_element = '';
    $css_id = rand(0, 1000000);

    $c_title = get_sub_field('gd-ac-nossos-canais-title-container');
    $c_telefone = get_sub_field('gd-ac-nossos-canais-telefone');
    $c_instagram = get_sub_field('gd-ac-nossos-canais-instagram');
    $c_linkedin = get_sub_field('gd-ac-nossos-canais-linkedin');
    $c_facebook = get_sub_field('gd-ac-nossos-canais-facebook');
    $c_twitter = get_sub_field('gd-ac-nossos-canais-twitter');
    $c_youtube = get_sub_field('gd-ac-nossos-canais-youtube');

    $c_padding_top = get_sub_field('gd-ac-nossos-canais-style-marge-internal-top');
    $c_padding_bottom = get_sub_field('gd-ac-nossos-canais-style-marge-internal-bottom');
    $c_padding_top_mobile = get_sub_field('gd-ac-nossos-canais-style-marge-internal-top-mobile');
    $c_padding_bottom_mobile = get_sub_field('gd-ac-nossos-canais-style-marge-internal-bottom-mobile');

    $c_background = get_sub_field('gd-ac-nossos-canais-style-background-container');
    $c_color_link_text_color = get_sub_field('gd-ac-nossos-canais-style-color-link-text');

    $t_instagram = $t_linkedin = $t_facebook = $t_twitter = $t_youtube = '';
    if ($c_instagram != "") {
        $t_instagram = '<a href="{c_instagram}" target="_blank"><img src="'.get_template_directory_uri().'/assets/icons/social/instagram-white.svg" alt="Instagram"></a>';
    }
    if ($c_linkedin != "") {
        $t_linkedin = '<a href="{c_linkedin}" target="_blank"><img src="'.get_template_directory_uri().'/assets/icons/social/linkedin-white.svg" alt="Linkedin"></a>';
    }
    if ($c_facebook != "") {
        $t_facebook = '<a href="{c_facebook}" target="_blank"><img src="'.get_template_directory_uri().'/assets/icons/social/facebook-white.svg" alt="Facebook"></a>';
    }
    if ($c_twitter != "") {
        $t_twitter = '<a href="{c_twitter}" target="_blank"><img src="'.get_template_directory_uri().'/assets/icons/social/twitter-white.svg" alt="Twitter"></a>';
    }
    if ($c_youtube != "") {
        $t_youtube = '<a href="{c_youtube}" target="_blank"><img src="'.get_template_directory_uri().'/assets/icons/social/youtube-white.svg" alt="Youtube"></a>';
    }


    $template = '
    <style>
        #contato-canais-{css_id}{
            padding-top: {padding_top}px;
            padding-bottom: {padding_bottom}px;
            background: {background};
            color: {color_link_text_color};
        }
        @media screen and (max-width: 991px){
            #contato-canais-{css_id}{
                padding-top: {padding_top_mobile}px;
                padding-bottom: {padding_bottom_mobile}px;
            }
        }
    </style>
    <div class="contato-canais" id="contato-canais-{css_id}">
        <div class="container">
            <div class="row">
<<<<<<< HEAD
                <div class="col-12" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                    {title_container}
                </div>
                <div class="col-12 col-md-6" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                    <div class="borda">
                        <div class="contato-canais-item">
                            <p><img src="' . get_template_directory_uri() . '/assets/images/contato/phone.svg" alt="Telefone">{c_telefone}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
=======
                <div class="col-12">
                    {title_container}
                </div>
                <div class="col-12 col-md-6">
                    <div class="borda">
                        <div class="contato-canais-item">
                            <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/phone.svg" alt="Telefone">{c_telefone}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
>>>>>>> main
                    <div class="borda socials">
                        {t_instagram}
                        {t_linkedin}
                        {t_facebook}
                        {t_twitter}
                        {t_youtube}
                    </div>
                </div>
            </div>
        </div>
    </div>
    ';


    $generate_element =
        str_replace(
            array('{id}', '{title_container}', '{css_id}', '{padding_top}', '{padding_bottom}', '{padding_top_mobile}', '{padding_bottom_mobile}','{background}', '{color_link_text_color}','{c_telefone}', '{t_instagram}', '{t_linkedin}', '{t_facebook}', '{t_twitter}', '{t_youtube}'
            ),
            array($obj_id, $c_title, $css_id, $c_padding_top, $c_padding_bottom,
<<<<<<< HEAD
                $c_padding_top_mobile, $c_padding_bottom_mobile, $c_background, $c_color_link_text_color, $c_telefone, $t_instagram, $t_linkedin, $t_facebook, $t_twitter, $t_youtube),
            $template
        );
=======
            $c_padding_top_mobile, $c_padding_bottom_mobile, $c_background, $c_color_link_text_color, $c_telefone, $t_instagram, $t_linkedin, $t_facebook, $t_twitter, $t_youtube),
            $template
            );
>>>>>>> main

    if ($echo) {
        echo $generate_element;
    }


    return $generate_element;
}