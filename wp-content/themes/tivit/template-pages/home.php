<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<?php

page_bulder_init(get_the_ID(), $post, true);

if (!$detect->isMobile()) {
    $carouselFade = 'carousel-fade';
}

?>

    <section class="home-hero position-relative" id="header-home-scroll">
        <div id="hero" class="carousel slide <?php echo $carouselFade; ?> position-relative" data-bs-ride="carousel">
            <div class="carousel-inner text-center">
                <?php
                // Check rows exists.
                if (have_rows('slider_hero')):
                    // Loop through rows.
                    for ($i = 0; have_rows('slider_hero'); $i++) : the_row();
                        $banner_desktop_url[$i] = get_sub_field('banner_desktop');
                        $banner_mobile_url[$i] = get_sub_field('banner_mobile');
                        $chamada[$i] = get_sub_field('chamada');
                        $cta[$i] = get_sub_field("slider-cta");
                        $cta_text[$i] = get_sub_field("slider-cta-text");
                        if ($detect->isMobile()) {
                            $imgStyle = "background-image: url('$banner_desktop_url[$i]')";
                        }
                        ?>
                        <div class="carousel-item heroslide <?= $i == 0 ? 'active' : '' ?>">
                            <div class="content position-relative mt-0" style="<?php echo $imgStyle; ?>">
                                <img class="maskImg w-100 hide-mobile" src="<?= $banner_desktop_url[$i] ?>"
                                     alt="Imagem do Slider"/>
                                <img class="mask d-none d-lg-block mask-desk red active"
                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mascara_slider_v.svg"
                                     alt="mask"/>
                                <img class="mask d-none d-lg-block mask-desk white"
                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mascara_slider_v_white.svg"
                                     alt="mask"/>
                                <div class="card-img-overlay mask-mobile d-lg-none"></div>
                                <div class="title h-100 d-flex justify-content-center flex-wrap align-items-center position-absolute">
                                    <div class="col-12">
                                    <?= $chamada[$i] ?>
                                    <?php
                                    if ($cta[$i] !== "") {
                                        ?>
                                        <div class="botao">

                                            <a class="btn btn-primary"
                                               href="<?php echo $cta[$i]; ?>"><?php echo $cta_text[$i] ?></a>
                                        </div>
                                    <?php } ?>
                                </div>
                                </div>

                            </div>
                        </div>
                    <?php
                        // End loop.
                    endfor;
                endif;
                ?>
            </div>
            <div class="col-auto controladores position-absolute">
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <div class="col-auto d-none d- d-lg-flex align-items-center px-5 px-lg-3">
                        <button class="carousel-control-prev" type="button" data-bs-target="#hero" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                    </div>
                    <div class="col-auto p-0">
                        <div class="carousel-indicators position-relative m-0">
                            <?php
                            // Check rows exists.
                            if (have_rows('slider_hero')):
                                // Loop through rows.
                                for ($i = 0; have_rows('slider_hero'); $i++) : the_row();
                                    $banner_desktop_url[$i] = get_sub_field('banner_desktop');
                                    $banner_mobile_url[$i] = get_sub_field('banner_mobile');
                                    $chamada[$i] = get_sub_field('chamada');
                                    $cta[$i] = get_sub_field("slider-cta");
                                    $active = "";
                                    $current = "";
                                    if ($i === 0) {
                                        $active = ' class="active" ';
                                        $current = ' aria-current="true" ';
                                    }
                                    ?>
                                    <button type="button"
                                            data-bs-target="#hero"
                                            data-bs-slide-to="<?php echo $i; ?>"
                                        <?php echo $active; ?>
                                        <?php echo $current; ?>
                                            aria-label="Slide <?php echo $i; ?>"></button>
                                <?php
                                    // End loop.
                                endfor;
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-flex align-items-center px-5 px-lg-3">
                        <button class="carousel-control-next" type="button" data-bs-target="#hero" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="col-12">
                <div class="redes hide-mobile">
                    <?php if (get_field('instagram', 'option') != "") { ?>
                        <a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/instagram-white.svg"
                                    alt="Instagram"></a>
                    <?php } ?>

                    <?php if (get_field('linkedin', 'option') != "") { ?>
                        <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/linkedin-white.svg"
                                    alt="Linkedin"></a>
                    <?php } ?>

                    <?php if (get_field('facebook', 'option') != "") { ?>
                        <a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/facebook-white.svg"
                                    alt="Facebook"></a>
                    <?php } ?>

                    <?php if (get_field('twitter', 'option') != "") { ?>
                        <a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/twitter-white.svg"
                                    alt="Twitter"></a>
                    <?php } ?>

                    <?php if (get_field('youtube', 'option') != "") { ?>
                        <a href="<?php the_field('youtube', 'option'); ?>" target="_blank"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/youtube-white.svg"
                                    alt="Youtube"></a>
                    <?php } ?>
                </div>
            </div>

        </div>
        <div class="col-12 d-none position-relative box-arrow d-lg-flex justify-content-center">
            <div class="arrow slider-arrow-back text-center position-absolute">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icons/seta-red.svg"
                     alt="Saiba Mais">
            </div>
        </div>
    </section>
    <div data-anime="background-color" data-anime-color="#990017" data-animeted-color="#FFF">
        <section class="home-intro">
            <!--<div class="w-100 transition">
            <img class="imgtransition position-absolute hide-mobile"
                 src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/home/trans1flp.svg"
                 alt="transition1">
        </div>-->
            <div class="col-12 position-relative box-arrow"
                 data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                <div class="arrow text-center position-absolute">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icons/seta-red.svg"
                         alt="Saiba Mais">
                </div>
            </div>
            <div class="container pcustom active"
                 data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <div class="mt-4">
                            <?php the_field('texto_de_introducao') ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5 p-lg-5 box-z-index">
                                        <div class="d-flex align-items-end p-3 py-5 p-lg-5 h-100">
                                            <div class="col text-display fadein">
                                                <p>Na TIVIT, o Programa de Aceleração de Carreiras, nosso PAC, acontece
                                                    de
                                                    verdade! Ele
                                                    foi desenvolvido para proporcionar a todos colaboradores a
                                                    possibilidade
                                                    de crescer
                                                    profissionalmente dentro da TIVIT.</p>
                                                <a href="">Conheça nossos produtos</a>
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
    </div
    <section id="contentTdx" class="home-content content-inovacao"
             data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
        <?= do_shortcode('[ac-bloco-conteudo fundo="escuro" dataanime="background-color" 
        dataanimecolor="#FFF" dataanimetedcolor="#262626"]Nossos conteúdos[/ac-bloco-conteudo]'); ?>
    </section>

    <section data-anime="background-color" data-anime-color="#262626" data-animeted-color="#000"
             class="container-fluid box-news-cards dark-theme box-news-cards-cases">
        <div class="container">

            <div class="row" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                <div class="col-12 box-title">
                    <h2>Nossos Cases</h2>
                </div>
            </div>
            <?= do_shortcode('[ac_bloco_home_cases]'); ?>
        </div>
    </section>

    <section data-anime="background-color" data-anime-color="#990017" data-animeted-color="#FFF"
             class="container-fluid box-chamada-pagina position-relative"
             style="background-color: ;
                     background-image: url('<?php the_field('background_desktop_pc'); ?>');
                     background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 box-title px-lg-0 d-flex align-items-center justify-content-center flex-column fadeInUp animated"
                     style="z-index: 1048"
                     data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                    <div class="col-auto fadeInUp animated"
                         data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                        <?php the_field('texto_pc') ?>
                    </div>
                    <div class="col-auto fadeInUp animated"
                         data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                        <div class="mt-5">
                            <a href="<?php the_field('url_cta_pc'); ?>" class="btn btn-primary cta__geral"
                               target=""><?php the_field('texto_cta_pc') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-img-overlay box-mask-cases-new"></div>
    </section>

    <section data-anime="background-color" data-anime-color="#FFF" data-animeted-color="#FFF"
             class="container-fluid px-lg-0 box-nosso-clientes"
             style="background: white;">
        <?= do_shortcode('[ac-bloco-clientes]'); ?>
    </section>


<?php get_footer(); ?>