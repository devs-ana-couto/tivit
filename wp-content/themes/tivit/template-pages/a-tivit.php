<?php /* Template Name: A Tivit */ ?>
<?php get_header(); ?>

<?php page_bulder_init(get_the_ID(),$post,true);?>

    <!-- Modal -->
    <div class="modal fade" id="videoOpen" data-bs-keyboard="true" tabindex="-1" aria-labelledby="videoOpenLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <script src="https://www.youtube.com/iframe_api"></script>
                    <div id="player"></div>
                </div>
            </div>
        </div>
    </div>


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
             style="background: url('<?php $detect->isMobile() ? the_field('banner_mobile_ativit') : the_field('banner_desktop_ativit'); ?>);">
            <div class="card-img-overlay mask-gradient"></div>
            <div class="d-flex flex-column h-100 justify-content-center position-relative align-items-center">
                <div class="col-10 col-xxl-9 d-flex justify-content-center align-items-center flex-column box-title">
                    <p class="desc-title">QUEM SOMOS</p>
                    <h1 class="title">A TIVIT transforma pessoas e tecnologia com expertise em <strong>soluções de ponta
                            a ponta.</strong></h1>
                </div>
                <div class="col-auto player position-absolute">
                    <div class="d-flex flex-column">
                        <div class="col-12 d-flex justify-content-center flex-column position-relative order-2 order-lg-1">
                            <div class="col-12">
                                <div class="aura"></div>
                            </div>
                            <div class="col-12 d-flex justify-content-center position-absolute">
                                <button data-bs-toggle="modal" data-bs-target="#videoOpen">
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
    <!-- Modulo Antigo -->
    <!-- <div class="a-tivit-hero position-relative"
         style="background: url('<?php /*$detect->isMobile() ? the_field('banner_mobile_ativit') : the_field('banner_desktop_ativit'); */ ?>') no-repeat center center; background-size: cover;">
        <div class="a-tivit-hero-title">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="zindex textBanner">
                            <h1><?php /*the_field('pre_chamada_ativit'); */ ?></h1>
                            <h2><?php /*the_field('chamada_ativit'); */ ?></h2>
                        </div>
                        <div class="maskDiv text-center hide-desktop">
                            <img src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/contato/banner-mask.svg"
                                 class="position-absolute mask" alt="Máscara">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="customMargin d-flex justify-content-center align-items-center hide-mobile">
            <img class="mask w-100 position-absolute"
                 src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/esg/v_slider_home.svg" alt="mask"/>
        </div>
        <div class="box-aura position-absolute m-0 hide-mobile d-flex justify-content-center align-items-center">
            <div class="aura"></div>
        </div>
        <div class="botaoReels m-0 hide-mobile d-flex justify-content-center align-items-center">
            <button class="open" data-bs-toggle="modal" data-bs-target="#videoOpen">
                <img src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/a-tivit/play.svg" alt="...">
                <span>Assista ao reel</span>
            </button>
        </div>
        <div class="botaoReels m-0 hide-desktop">
            <button class="open" data-bs-toggle="modal" data-bs-target="#videoOpen">
                Assista ao reel

                <img src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/a-tivit/play.svg" alt="...">
            </button>
            <a href="#" class="open" data-bs-toggle="modal" data-bs-target="#videoOpen">teste</a>
        </div>
    </div>-->

    <div class="a-tivit-sobre">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>
                        <?php the_field('introducao_ativit'); ?>
                    </p>
                    <?php
                    if (the_field('cta_url_ativit') != "") {
                        ?>
                        <div class="botao">
                            <a href="<?php the_field('cta_url_ativit'); ?>"><?php the_field('cta_texto_ativit') ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="a-tivit-carousel hide-desktop">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">

      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/seta-slider.svg" class="d-block arrow-slider" alt="...">

      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">2000</button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">2004</button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">2009</button>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/mask-slider.svg" class="d-block mask-slider" alt="...">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/slider-01.png" class="d-block w-100" alt="...">
        <div class="content">
          <p>
            A Proceda é adquirida e chega com experiência em missão crítica. É criada a marca TIVIT.
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/slider-01.png" class="d-block w-100" alt="...">
        <div class="content">
          <p>
          A Proceda é adquirida e chega com experiência em missão crítica. É criada a marca TIVIT.
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/slider-01.png" class="d-block w-100" alt="...">
        <div class="content">
          <p>
          A Proceda é adquirida e chega com experiência em missão crítica. É criada a marca TIVIT.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="a-tivit-carousel-desktop" class=" position-relative hide-mobile">
  <div class="slider-for">
    <div class="sliderimage">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/picture1.jpg" class="d-block w-100" alt="...">
      <div class="overlay"></div>
    </div>
    <div class="sliderimage">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/picture2.jpg" class="d-block w-100" alt="...">
      <div class="overlay"></div>
    </div>
    <div class="sliderimage">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/picture1.jpg" class="d-block w-100" alt="...">
      <div class="overlay"></div>
    </div>
    <div class="sliderimage">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/picture2.jpg" class="d-block w-100" alt="...">
      <div class="overlay"></div>
    </div>
    <div class="sliderimage">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/picture1.jpg" class="d-block w-100" alt="...">
      <div class="overlay"></div>
    </div>
  </div>
  <div class="maskCarousel position-absolute w-100">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/slidermask.svg" class="d-block" alt="...">
  </div>
  <div class="slider-nav">
    <div>1998</div>
    <div>2000</div>
    <div>2004</div>
    <div>2009</div>
    <div>2010</div>
  </div>
</div> -->

    <div class="a-tivit-cases cases ctivit">
    <div id="hero" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h2 class="text-center">Confira o que nossas parcerias estratégicas já fizeram!</h2>
                </div>
                <?= do_shortcode('[ac-bloco-cases]') ?>
            </div>
        </div>
    </div>

    <div class="a-tivit-inovacao">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="content">
                        <?php the_field('chamada_inovacao_ativit') ?>
                    </div>

                    <div class="row">

                        <div class="col-md-1"></div>
                        <div class="col-12 col-md-5">
                            <div class="card">
                                <div class="card-content" style="
                                        background: url('<?php $detect->isMobile() ? '' : the_field('logo_1_ativit'); ?>');
                                        background-size: contain;
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        height: 85px;
                                        mix-blend-mode: luminosity;
                                        max-width: 100%;
                                        min-width: 100%;">
                                    <p class="hide-mobile"><?php the_field('texto_logo_1_ativit') ?></p>
                                    <img src="<?php the_field('logo_1_ativit'); ?>" class="hide-desktop"
                                         alt="Tivit Inovação">
                                    <a href="<?php the_field('url_logo_1_ativit') ?>">conheça a tivit labs <img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow-red.svg"
                                                alt="Saiba Mais"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-5">
                            <div class="card">
                                <div class="card-content" style="
                                        background: url('<?php $detect->isMobile() ? '' : the_field('logo_2_ativit'); ?>');
                                        background-size: contain;
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        height: 85px;
                                        mix-blend-mode: luminosity;
                                        max-width: 100%;
                                        min-width: 100%;">
                                    <p class="hide-mobile"><?php the_field('texto_logo_2_ativit') ?></p>
                                    <img src="<?php the_field('logo_2_ativit'); ?>" class="hide-desktop"
                                         alt="Tivit Experts">
                                    <div class="pt-4 pt-md-0"><a href="<?php the_field('url_logo_2_ativit') ?>">conheça
                                            a
                                            ventures <img
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow-red.svg"
                                                    alt="Saiba Mais"></a></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="botao">
                        <a href="<?php the_field('cta_url2_ativit') ?>"><?php the_field('cta_texto2_ativit') ?></a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Conheça a nossa equipe -->
   <!-- --><?/*= do_shortcode('[ac-bloco-equipe]'); */?>

    <!-- Bloco ESG + SLIDER -->
    <div id="esgTivit" class="esg a-tivit carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="container">
            <div class="row">
                <div class="lp-tbanks-confira lp-tdx">

                    <div id="triangle-down"></div>

                    <div class="carousel-inner">

                        <div class="row columnReverseMobile">
                            <div class="col-12 col-md-6 lp-tbanks-confira-bg-right lp-tdx-confira-bg-right">
                                <div class="lp-tbanks-confira-content">
                                    <?php the_field('chamada_esg_ativit') ?>
                                    <a href="<?php the_field('esg_cta_texto_url') ?>"><?php the_field('esg_cta_texto') ?></a>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <?php
                                // Check rows exists.
                                if (have_rows('slider_esg')):
                                    // Loop through rows.
                                    for ($i = 0; have_rows('slider_esg'); $i++) : the_row();
                                        $imagem_de_fundo[$i] = get_sub_field('imagem_de_fundo');
                                        $campo_de_texto[$i] = get_sub_field('campo_de_texto');
                                        $texto_cta[$i] = get_sub_field('texto_cta');
                                        $url_cta[$i] = get_sub_field('url_cta');
                                        ?>
                                        <div class="carousel-item heroslide4 <?= $i == 0 ? 'active' : ''; ?>">
                                            <div class="col-12 lp-tbanks-confira-bg-left slide1 hide-mobile"
                                                 style="background: url('<?= $imagem_de_fundo[$i]; ?>') no-repeat center center; background-size: cover;">
                                                <div class="lp-tbanks-confira-carousel">
                                                    <?= $campo_de_texto[$i]; ?>
                                                    <a href="<?= $url_cta[$i]; ?>"><?= $texto_cta[$i]; ?></a>
                                                </div>
                                            </div>
                                            <div class="col-12 lp-tbanks-confira-bg-mobile hide-desktop"
                                                 style="background: url('<?= $imagem_de_fundo[$i]; ?>') no-repeat center center; background-size: cover;">
                                                <div class="position-relative">
                                                    <img class="w-100"
                                                         src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tdx/mobileslide1.svg"
                                                         alt="Mobile Slide 1">
                                                    <div class="lp-tbanks-confira-carousel d-flex flex-column justify-content-center">
                                                        <?= $campo_de_texto[$i]; ?>
                                                        <a href="<?= $url_cta[$i]; ?>"><?= $texto_cta[$i]; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    endfor;
                                endif;
                                ?>

                            </div>

                            <div class="col-12 col-md-6">
                                <div class="navigation <?= count(get_field('slider_esg')) == 1 ? 'hide-desktop hide-mobile' : '' ?>">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#esgTivit"
                                            data-bs-slide="prev">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/arrow_left.png"
                                             alt="arrow_left">
                                    </button>
                                    <div class="d-flex flex-row counter4">
                                        <div class="numactive4"></div>
                                        <div class="numseparation4"></div>
                                        <div class="numtotal4"></div>
                                    </div>
                                    <button class="carousel-control-next" type="button" data-bs-target="#esgTivit"
                                            data-bs-slide="next">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/arrow_right.png"
                                             alt="arrow_right">
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="a-tivit-certificacoes text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php the_field('chamada_certificacoes_ativit') ?>
                </div>
            </div>

            <div id="ativitClientes" class="lp-tbanks-logo-clientes mt-0">
                <div class="row">
                    <div class="col-12">
                        <div class="lp-tbanks-logo-clientes-content text-center">
                            <div class="text-center my-3">
                                <div class="row mx-auto my-auto justify-content-center">
                                    <div id="ativitCustomerCarousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <?
                                            if (have_rows('certificacoes_ativit')):
                                                // Loop through rows.
                                                for ($i = 0; have_rows('certificacoes_ativit'); $i++) : the_row();
                                                    $img_url[$i] = get_sub_field('logo');
                                                    ?>
                                                    <div class="carousel-item heroslide3 customers <?= $i == 0 ? 'active' : '' ?>">
                                                        <div class="col-6 col-md-3">
                                                            <div class="h-100">
                                                                <div class="m-3">
                                                                    <img src="<?= $img_url[$i] ?>" alt="Gptw">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                endfor;
                                            endif;
                                            ?>
                                        </div>
                                        <div class="w-100 position-relative mt-2">
                                            <a class="carousel-control-prev bg-transparent w-aut"
                                               href="#ativitCustomerCarousel" role="button" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            </a>
                                            <div class="d-flex flex-row justify-content-center counter3 mt-3">
                                                <div class="numactive3"></div>
                                                <div class="numseparation3"></div>
                                                <div class="numtotal3"></div>
                                            </div>
                                            <a class="carousel-control-next bg-transparent w-aut"
                                               href="#ativitCustomerCarousel" role="button" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="home-pessoas-e-carreiras inovar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="home-pessoas-e-carreiras-title">
                        <?php the_field('chamada_final_ativit') ?>
                    </div>
                    <div class="botao">
                        <a href="<?php the_field('cta_url_final_ativit') ?>"
                           class="btn btn-primary"><?php the_field('cta_texto_final_ativit') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var player, iframe;
        var $ = document.querySelector.bind(document);

        // init player
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '400',
                width: '100%',
                videoId: '<?php the_field('assista_ao_reel')?>',
                events: {
                    'onReady': onPlayerReady
                }
            });
        }

        // when ready, wait for clicks
        function onPlayerReady(event) {
            var player = event.target;
            iframe = $('#player');
            setupListener();
        }

        function setupListener() {
            $('button.open').click(playFullscreen);
        }

        function playFullscreen() {
            player.playVideo();//won't work on mobile

            var requestFullScreen = iframe.requestFullScreen || iframe.mozRequestFullScreen || iframe.webkitRequestFullScreen;
            if (requestFullScreen) {
                requestFullScreen.bind(iframe)();
            }
        }

        const myModalEl = document.getElementById('videoOpen');
        myModalEl.addEventListener('hidden.bs.modal', event => {
            player.pauseVideo();
        });
        myModalEl.addEventListener('shown.bs.modal', event => {
            player.playVideo();
        });

    </script>

<?php get_footer(); ?>