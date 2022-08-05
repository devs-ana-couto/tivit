<?php /* Template Name: Contato */ ?>
<?php get_header(); ?>

<?php page_bulder_init(get_the_ID(),$post,true);?>

    <!-- Banner -->
    <section class="container-fluid p-0 header-inner position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 position-relative box-mask">
                    <div class="card-img-overlay p-0 bottom-0">
                        <img class="w-100 d-none d-lg-block"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/header-inner/Vector.svg"
                             alt="">
                        <img class="w-100 d-lg-none"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/header-inner/mask-mobile.svg"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 p-0 box-header position-relative"
             style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/contato/banner.jpg');">
            <div class="card-img-overlay mask-gradient"></div>
            <div class="d-flex flex-column h-100 justify-content-center position-relative align-items-center">
                <div class="col-10 col-xxl-9 d-flex justify-content-center align-items-center flex-column box-title">
                    <p class="desc-title">Contato</p>
                    <h1 class="title">Comece a transformar o seu negócio</h1>
                </div>
                <div class="col-auto player position-absolute d-none">
                    <div class="d-flex flex-column">
                        <div class="col-12 d-flex justify-content-center flex-column position-relative order-2 order-lg-1">
                            <div class="col-12">
                                <div class="aura"></div>
                            </div>
                            <div class="col-12 d-flex justify-content-center position-absolute">
                                <button  data-bs-toggle="modal" data-bs-target="#videoOpen">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/play.svg"
                                         alt="...">
                                </button>
                            </div>
                        </div>
                        <div class="col-12 order-1 order-lg-2 d-flex justify-content-center">
                            <button class="text-white" data-bs-toggle="modal" data-bs-target="#videoOpen">
                                Assista ao reel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Antigo -->
    <!-- Hero banner-->
    <!--<div class="esg-hero contato-hero position-relative">
        <div class="esg-hero-title">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="zindex position-relative">
                            <h1>Contato</h1>
                            <h2 class="hide-mobile">Comece a transformar o seu negócio</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="customMargin d-flex justify-content-center align-items-center hide-mobile">
            <img class="mask w-100 position-absolute"
                 src="<?php /*echo get_template_directory_uri(); */?>/assets/images/esg/v_slider_home.svg" alt="mask"/>
        </div>
        <div class="contato-hero-content hide-desktop">
            <h2>Comece a transformar o seu negócio</h2>
        </div>
        <div class="maskDiv text-center hide-desktop">
            <img src="<?php /*echo get_template_directory_uri(); */?>/assets/images/contato/banner-mask.svg"
                 class="position-absolute mask" alt="Máscara">
        </div>
    </div>-->

    <!-- Intro -->
    <div class="contato-intro">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- <p class="hide-desktop">Entre em contato com a <span>TIVIT</span> para solicitar um orçamento ou tirar dúvidas sobre nossas soluções</p> -->
                    <p>Compartilhe seu desafio e receba uma solução personalizada.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulário de Contato -->
    <div class="contato-formulario">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?= do_shortcode('[contact-form-7 id="112" title="Página Contato"]'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Pessoas e Carreiras -->
    <div class="home-pessoas-e-carreiras">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="home-pessoas-e-carreiras-title">
                        <h2>TRABALHE CONOSCO</h2>
                        <p>Para envio de CV, veja nossa área de carreiras</p>
                    </div>
                    <div class="botao">
                        <a href="#" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contato-canais">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>ou entre em contato pelos nossos canais:</h2>
                </div>
                <div class="col-12 col-md-6">
                    <div class="borda">
                        <div class="contato-canais-item">
                            <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/phone.svg"
                                    alt="Telefone"><? the_field('telefone', 'option'); ?></p>
                            <!-- <p class="hide-desktop"><strong>Ligar</strong> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/arrow_forward.svg" alt="Ligar"></p> -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="borda socials">

                        <? if (get_field('instagram', 'option') != "") { ?>
                            <a href="<? the_field('instagram', 'option'); ?>" target="_blank"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/instagram-white.svg"
                                        alt="Instagram"></a>
                        <? } ?>

                        <? if (get_field('linkedin', 'option') != "") { ?>
                            <a href="<? the_field('linkedin', 'option'); ?>" target="_blank"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/linkedin-white.svg"
                                        alt="Linkedin"></a>
                        <? } ?>

                        <? if (get_field('facebook', 'option') != "") { ?>
                            <a href="<? the_field('facebook', 'option'); ?>" target="_blank"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/facebook-white.svg"
                                        alt="Facebook"></a>
                        <? } ?>

                        <? if (get_field('twitter', 'option') != "") { ?>
                            <a href="<? the_field('twitter', 'option'); ?>" target="_blank"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/twitter-white.svg"
                                        alt="Twitter"></a>
                        <? } ?>

                        <? if (get_field('youtube', 'option') != "") { ?>
                            <a href="<? the_field('youtube', 'option'); ?>" target="_blank"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/youtube-white.svg"
                                        alt="Youtube"></a>
                        <? } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>