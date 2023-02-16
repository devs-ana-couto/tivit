<?php
/*
 * Page Builder Componentes
 * AC / Banner Home
*/

function pb_ac_home_portifolio($obj_id, $obj = null, $block='', $echo = true){
	global $detect;
	?>
        <section class="container-fluid px-lg-0 portfolio port mb-5">
            <div class="d-flex justify-content-center bgport active position-absolute"></div>
            <div class="container home-portifolio active">
                <div class="home-portifolio-image p-0">
                    <!--<div class="d-flex justify-content-center w-100">
                        <div id="triangle-down"></div>
                    </div>-->
                    <div class="row row-cols-1">
                        <?php
                        /* if ($detect->isMobile()) {
                             $mascara = get_template_directory_uri() . "/assets/images/home/portmaskmobile.svg";
                         } else {
                         }*/
                        $mascara = get_template_directory_uri() . "/assets/images/home/mascara_banner.svg";
                        ?>
                        <div class="col-12 portfolio__box position-relative"
                             data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                            <!--<div class="d-flex justify-content-center w-100">
                                <div id="triangle-down"></div>
                            </div>-->
                            <div class="card-img-overlay"
                                 style="background: url('<?php echo $mascara; ?>');">
                            </div>
                            <div class="col-12  box__mask h-100">
                                <div class="row h-100 row-cols-1 row-cols-lg-auto">
                                    <div class="col-12 col-lg-7 p-lg-5 box-z-index">
                                        <div class="mask__links py-5 px-0 p-lg-5 h-100">
                                            <div class="d-flex align-content-center h-100">
                                                <div class="col-12">
                                                    <div class="col links__title">
                                                        <h3>
                                                            <?php echo get_field('titulo_portifolio'); ?>
                                                        </h3>
                                                    </div>
                                                    <div class="col-12 col-lg-auto mt-5">
                                                        <?php
                                                        if (have_rows('portifolio_lista')) {
                                                            for ($i = 0; have_rows('portifolio_lista'); $i++) {
                                                                the_row();
                                                                $bg = "";
                                                                if ($detect->isMobile()) {
                                                                    $bg = "'" . get_sub_field("portifolio_imagem_mobile") . "'";
                                                                } else {
                                                                    $bg = "'" . get_sub_field("portifolio_imagem") . "'";
                                                                }
                                                                $active = "";
                                                                if ($i === 0) {
                                                                    $active = "active";
                                                                }
                                                                echo '<div id="port' . $i . '" class="">';
                                                                echo '<div class="d-none" id="portfolio__img__url-' . $i . '" data-img="' . $bg . '"></div>';
                                                                echo '<div class="d-none" id="portfolio__desc-' . $i . '">' . get_sub_field("portifolio_lista_desc") . '</div>';
                                                                echo '<div class="d-none" id="portfolio__link__url-' . $i . '">' . get_sub_field("portifolio_lista_cta") . '</div>';
                                                                echo '<div class="d-none" id="portfolio__link__text-' . $i . '">' . get_sub_field("portifolio_lista_cta_text") . '</div>';
                                                                echo '<button id="' . $i . '" class="links--a ' . $active . ' w-100"
                                                            onclick="infosPortfolio(' . $bg . ', ' . $i . ')">' . get_sub_field('portifolio_titulo') . '</button>';
                                                                echo '</div>';
                                                            }
                                                        }
                                                        ?>
                                                        <?php
                                                        $cta = get_field("portifolio_call_to_action_geral");
                                                        if (isset($cta['portifolio_call_to_action_link'])) {
                                                            if ($cta['portifolio_call_to_action_link'] !== ""): ?>
                                                                <div class="col-12 col-lg-auto mt-5 d-flex justify-content-center justify-content-lg-start flex-wrap">
                                                                    <a href="<?php echo $cta['portifolio_call_to_action_link']; ?>"
                                                                    class="btn btn-primary links__cta--geral"
                                                                    style="background-color: <?php echo $cta['portifolio_call_to_action_cor_fundo']; ?>; color: <?php echo $cta['portifolio_call_to_action_cor_texto']; ?>; ">
                                                                        <?php echo $cta['portifolio_call_to_action_text']; ?>
                                                                    </a>
                                                                </div>
                                                            <?php
                                                            endif;
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5 p-lg-5 box-z-index">
                                        <div class="d-flex align-items-end p-3 py-5 p-lg-5 h-100">
                                            <div class="col text-display fadein">
                                                <!-- <p>Na TIVIT, o Programa de Aceleração de Carreiras, nosso PAC, acontece
                                                    de
                                                    verdade! Ele
                                                    foi desenvolvido para proporcionar a todos colaboradores a
                                                    possibilidade
                                                    de crescer
                                                    profissionalmente dentro da TIVIT.</p>
                                                <a href="">Conheça nossos produtos</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
	return;
}