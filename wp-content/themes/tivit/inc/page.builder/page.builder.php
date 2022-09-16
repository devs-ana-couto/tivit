<?php
/*
 * Page Builder Componentes
*/
require_once('componentes/ac/banner.home.php');
require_once('componentes/ac/banner.interno.php');
require_once('componentes/ac/banner.01.php');
require_once('componentes/ac/banner.02.php');
require_once('componentes/ac/banner.03.php');
require_once('componentes/ac/banner.04.php');
require_once('componentes/ac/banner.05.php');
require_once('componentes/ac/banner.06.php');
require_once('componentes/ac/big.number.php');
require_once('componentes/ac/diferencial.php');
require_once('componentes/ac/chamada.php');
require_once('componentes/ac/carrossel.php');
require_once('componentes/ac/lista.logos.01.php');
require_once('componentes/ac/formulario.php');
require_once('componentes/ac/conteudo.relacionado.php');
require_once('componentes/ac/planejamento.php');
require_once('componentes/ac/beneficios.php');
require_once('componentes/ac/video.php');
require_once('componentes/ac/card.icon.php');
require_once('componentes/ac/bloco.intro.php');
require_once('componentes/ac/slider-simple.php');
require_once('componentes/ac/header.internal.php');
require_once('componentes/ac/depoimentos.php');
require_once('componentes/ac/cards.hover.php');
require_once('componentes/ac/slider.cases.php');
require_once('componentes/ac/slider.logos.php');
require_once('componentes/ac/cards.logo.top.php');
require_once('componentes/ac/portfolio.php');
require_once('componentes/ac/slider.content.php');
require_once('componentes/ac/cards.vagas.php');
require_once('componentes/ac/accordion.php');
require_once('componentes/ac/nossos.canais.php');

require_once('componentes/bloco.conteudo.php');
require_once('componentes/bloco.conteudo.simples.php');
require_once('componentes/video.full.php');
require_once('componentes/image.full.php');
require_once('componentes/gallery.php');
require_once('componentes/iframe.php');
require_once('componentes/shortcode.php');


function page_bulder_init($obj_id, $obj = null, $echo = true)
{
    $return = array();
    $block = 0;
    // check if the flexible content field has rows of data
    if (have_rows('gd-elements', $obj_id)):
        if ($echo) echo '<div id="pb-generated-' . $obj_id . '">';
        // loop through the rows of data
        while (have_rows('gd-elements', $obj_id)) : the_row();
            $layout = get_row_layout();
            // echo $layout;
            switch ($layout) {
                case 'gd-ac-banner-home':
                    $return[$layout] = pb_ac_banner_home($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-header-interno':
                    $return[$layout] = pb_ac_banner_interno($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-banner-01':
                    $return[$layout] = pb_ac_banner_01($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-banner-02':
                    $return[$layout] = pb_ac_banner_02($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-banner-03':
                    $return[$layout] = pb_ac_banner_03($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-banner-04':
                    $return[$layout] = pb_ac_banner_04($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-banner-05':
                    $return[$layout] = pb_ac_banner_05($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-banner-06':
                    $return[$layout] = pb_ac_banner_06($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-big-numbers':
                    $return[$layout] = pb_ac_big_number($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-diferenciais':
                    $return[$layout] = pb_ac_diferencial($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-chamada':
                    $return[$layout] = pb_ac_chamada($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-lista-logos-01':
                    $return[$layout] = pb_ac_lista_logos_01($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-formulario':
                    $return[$layout] = pb_ac_formulario($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-conteudo-relacionado':
                    $return[$layout] = pb_ac_conteudo_relacionado($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-planejamento':
                    $return[$layout] = pb_ac_planejamento($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-beneficios':
                    $return[$layout] = pb_ac_beneficios($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-video':
                    $return[$layout] = pb_ac_video($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-carrossel':
                    $return[$layout] = pb_ac_carrossel($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-element-section':
                    $return[$layout] = pb_bloco_conteudo($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-element-simple':
                    $return[$layout] = pb_bloco_conteudo_simples($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-element-video-full':
                    $return[$layout] = pb_video_full($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-element-imagem-full':
                    $return[$layout] = pb_image_full($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-element-gallery':
                    $return[$layout] = pb_gallery($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-element-iframe':
                    $return[$layout] = pb_iframe_full($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-shortcode':
                    $return[$layout] = ac_shortcode($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-card-icon':
                    $return[$layout] = pb_ac_card_icon($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-bloco-intro':
                    $return[$layout] = pb_ac_bloco_intro($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-slider-simple':
                    $return[$layout] = pb_ac_slide_simple($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-header-internal-mask':
                    $return[$layout] = pb_ac_header_internal_mask($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-depoimentos':
                    $return[$layout] = pb_ac_depoimentos($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-cards-hover':
                    $return[$layout] = pb_ac_cards_hover($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-slider-slider-cases':
                    $return[$layout] = pb_ac_slider_cases($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-slider-logo':
                    $return[$layout] = pb_ac_slide_logos($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-card-image-top':
                    $return[$layout] = pb_ac_card_imagem_top($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-portfolio':
                    $return[$layout] = pb_ac_portfolio($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-slider-content':
                    $return[$layout] = pb_ac_slider_content($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-cards-vacancies':
                    $return[$layout] = pb_ac_vacancies($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-accordion':
                    $return[$layout] = pb_ac_accordion($obj_id, $obj, $block, $echo);
                    break;
                case 'gd-ac-nossos-canais':
                    $return[$layout] = pb_ac_nossos_canais($obj_id, $obj, $block, $echo);
                    break;

            }
            $block++;
        endwhile;
        if ($echo) echo '</div>';
        return $return;
    else :

        // no layouts found
        return $return;

    endif;
}


function set_margin_personalized($margins, $div_el)
{
    if (!is_array($margins)) {
        return "";
    }

    $t_margin_and_padding = "
		$div_el{margin-top:{mtm}px; margin-bottom:{mbm}px;}
		$div_el .wrapper{padding-top:{ptm}px; padding-bottom:{pbm}px;}

		@media (min-width: 992px) {
			$div_el{margin-top:{mt}px; margin-bottom:{mb}px;}
			$div_el .wrapper{padding-top:{pt}px; padding-bottom:{pb}px;}
		}";

    if (empty($margins[0])) {
        array_shift($margins);
    }


    $t_margin_and_padding = str_replace(
        array('{mt}', '{mb}', '{pt}', '{pb}', '{mtm}', '{mbm}', '{ptm}', '{pbm}'),
        $margins,
        $t_margin_and_padding
    );

    return $t_margin_and_padding;
}


function set_background($div_el, $background_color = '', $background_image = '', $mask = false)
{
    $t_color_background = "";
    if (!empty($background_color)) {
        $t_color_background = "$div_el{background:$background_color;}";
    }

    if (!empty($background_image)) {
        $t_color_background = "$div_el{background:url('" . $background_image['url'] . "') center center $background_color; background-attachment:fixed; background-size:cover; background-repeat:no-repeat; }";
    }

    if ($mask) {
        $t_color_background .= "$div_el .wrapper{background-color: rgba(0,0,0,0.5); }";
    }


    return $t_color_background;
}

function remove_mask($div_el, $remove_mask)
{
    if ($remove_mask) {
        $t_color_background = "$div_el .wrapper{background:none; }";
    }

    return $t_color_background;
}

function set_background_space($div_el, $background_color = '', $background_image = '', $mask = false)
{
    $t_color_background = "";
    if (!empty($background_color)) {
        $t_color_background .= "$div_el{background:$background_color;}";
    }

    if (!empty($background_image)) {
        $t_color_background .= "$div_el .wrapper-bg{background:url('" . $background_image['url'] . "') center center $background_color;  background-size:cover; background-repeat:no-repeat; }";
    }

    return $t_color_background;
}

function set_background_commom($div_el, $background_color = '', $background_image = '', $mask = false)
{
    $t_color_background = "";
    if (!empty($background_color)) {
        $t_color_background .= "$div_el{background:$background_color;}";
    }

    if (!empty($background_image)) {
        $t_color_background .= "$div_el .container{background-image:url('" . $background_image['url'] . "'); background-color:$background_color; }";
    }

    return $t_color_background;
}


function set_background_advanced($div_el, $background_color = '', $background_color2 = '', $background_image = '', $mask = false)
{

    $t_color_background = "";
    if (!empty($background_color) && empty($background_color2)) {
        $t_color_background .= "$div_el{background:$background_color;}";
    }

    if (!empty($background_color) && !empty($background_color2)) {
        $rgb_color_1 = implode(",", hexToRgb($background_color));
        $rgb_color_2 = implode(",", hexToRgb($background_color2));

        $t_color_background .= "$div_el{
			background: rgb($rgb_color_1); /* Old browsers */
			background: -moz-linear-gradient(top,  rgba($rgb_color_1) 50%, rgba($rgb_color_2,1) 50%); /* FF3.6-15 */
			background: -webkit-linear-gradient(top,  rgba($rgb_color_1) 50%,rgba($rgb_color_2,1) 50%); /* Chrome10-25,Safari5.1-6 */
			background: linear-gradient(to bottom,  rgba($rgb_color_1) 50%,rgba($rgb_color_2,1) 50%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='$background_color', endColorstr='$background_color2',GradientType=0 ); /* IE6-9 */
		}";
    }

    if (!empty($background_image)) {
        $t_color_background .= "$div_el .wrapper-bg{background:url('" . $background_image['url'] . "') center center $background_color;  background-size:cover; background-repeat:no-repeat; }";
    }

    return $t_color_background;


}


function set_background_mask($div_el, $background_color = '', $background_image = '')
{
    $t_color_background = "";
    if (!empty($background_color)) {
        $t_color_background = "$div_el{background:$background_color;}";
    }

    if (!empty($background_image)) {
        $t_color_background .= "$div_el .bg{background:url('" . $background_image['url'] . "') center center; background-repeat:no-repeat; width: 100%;    min-height: 110vh;    height: 100%;    background-size: cover;    position: absolute;    top: 0px;    left: 0px;    background-blend-mode: multiply;    opacity: 0.1; }";
    }


    return $t_color_background;
}

function set_font_color($div_el, $font_color)
{
    $t_color_font = "";
    if (!empty($font_color)) {
        $t_color_font = "$div_el{ color:$font_color !important;}";
    }

    return $t_color_font;
}


function set_all_font_color($div_el, $font_color)
{
    $t_color_font = "";
    if (!empty($font_color)) {
        $t_color_font = "$div_el, $div_el h1, $div_el h2, $div_el h3, $div_el h4, $div_el h5, $div_el h6, $div_el h7, $div_el p, $div_el span{ color:$font_color !important;}";
    }

    return $t_color_font;
}

function set_button_color($div_el, $color_button = "", $color_background = "")
{
    $t_color_button = "";
    if (!empty($color_button)) {
        $t_color_button = "$div_el{ border: 1px solid $color_button; color: $color_button; background-color:transparent; }
			$div_el:hover{ border: 1px solid $color_background; color: $color_background; background-color:$color_button; }";
    }

    return $t_color_button;
}


function set_section_width($_width)
{
    $container_css = "";
    switch ($_width) {
        case 'full':
            $container_css = "";
            break;
        case 'expanded':
            $container_css = "container";
            break;
        case 'content':
            $container_css = "container content";
            break;
    }
    return $container_css;
}


function set_section_width2($_width)
{
    $container_css = "";
    switch ($_width) {
        case 'full':
            $container_css = "";
            break;
        case 'expanded':
            $container_css = "container-fluid";
            break;
        case 'content':
            $container_css = "container content";
            break;
    }
    return $container_css;
}


function set_col_grid($prefix, $opts = "")
{

    $css = "";

    if (!is_array($opts)) {
        $es = get_sub_field($prefix . 'es');
        $sm = get_sub_field($prefix . 'sm');
        $md = get_sub_field($prefix . 'md');
        $lg = get_sub_field($prefix . 'lg');
        $xl = get_sub_field($prefix . 'xl');
    } else {
        $es = $opts[$prefix . 'es'];
        $sm = $opts[$prefix . 'sm'];
        $md = $opts[$prefix . 'md'];
        $lg = $opts[$prefix . 'lg'];
        $xl = $opts[$prefix . 'xl'];
    }


    if (!empty($es)) {
        $css .= ' col-es-' . $es;
    }
    if (!empty($sm)) {
        $css .= ' col-sm-' . $sm;
    }
    if (!empty($md)) {
        $css .= ' col-md-' . $md;
    }
    if (!empty($lg)) {
        $css .= ' col-lg-' . $lg;
    }
    if (!empty($xl)) {
        $css .= ' col-xl-' . $xl;
    }


    return $css;
}
