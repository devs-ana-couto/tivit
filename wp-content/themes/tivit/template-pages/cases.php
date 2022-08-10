<?php /* Template Name: Cases */ ?>
<?php get_header(); ?>

<?php page_bulder_init(get_the_ID(), $post, true); ?>

    <!-- Modal -->
    <!--<div class="modal fade" id="videoOpen" data-bs-keyboard="false" tabindex="-1" aria-labelledby="videoOpenLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
          <script src="https://www.youtube.com/iframe_api"></script>
          <div id="player"></div>
          </div>
        </div>
      </div>
    </div>-->

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
             style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/cases/bannerdesktop.jpg"
        ');">
        <div class="card-img-overlay mask-gradient"></div>
        <div class="d-flex flex-column h-100 justify-content-center position-relative align-items-center">
            <div class="col-10 col-xxl-9 d-flex justify-content-center align-items-center flex-column box-title">
                <p class="desc-title">CASES</p>
                <h1 class="title">Nome do cliente videocase <strong>Lorem ipsum</strong></h1>
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

    <!-- modulo antigo desativado -->
    <!--   <div class="cases-hero position-relative">
        <div class="cases-hero-title">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="zindex textBanner">
                            <h1>Cases</h1>
                            <h2>Nome do cliente videocase Lorem ipsum</h2>
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
        <div class="botaoReels m-0 hide-mobile">
            <button class="open" data-bs-toggle="modal" data-bs-target="#videoOpen">
                Assista ao reel
                <img src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/a-tivit/play.svg" alt="...">
            </button>
        </div>
        <div class="botaoReels m-0 hide-desktop">
            <button class="open" data-bs-toggle="modal" data-bs-target="#videoOpen">
                Assista ao reel
                <img src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/a-tivit/play.svg" alt="...">
            </button>
        </div>
    </div>-->

    <div class="cases-depoimentos text-center">
        <div class="container">
            <div class="row">
                <div class="img">
                    <img src="<?= get_post_meta(get_the_ID(), 'depoimento_imagem-da-pessoa', true); ?>"
                         alt="Depoimento">
                </div>
                <div class="title-autor">
                    <h3><?= get_post_meta(get_the_ID(), 'depoimento_nome', true); ?></h3>
                </div>
                <div class="desc-autor">
                    <p><?= get_post_meta(get_the_ID(), 'depoimento_funcao', true); ?></p>
                </div>
                <div class="depoimento">
                    <p><span>”</span><?= get_post_meta(get_the_ID(), 'depoimento_depoimento', true); ?><span>”</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--<div class="a-tivit-cases cases">
        <div id="hero" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="container">
                <div class="row">
                    <?/*= do_shortcode('[ac-bloco-cases]') */?>
                </div>
            </div>
        </div>
    </div>-->

    <section class="container px-0 slider-projetos solto">
        <div class="col-12 px-0">
            <div id="slider-categoria01" class="carousel slide slider-categoria"
                 data-bs-ride="carousel">
                <!--<div class="carousel-indicators">
                    <button type="button" data-bs-target="#slider-categoria01" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#slider-categoria01" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#slider-categoria01" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>-->
                <?php echo do_shortcode('[ac-bloco-cases]') ?>
            </div>
        </div>
    </section>

    <div class="cases-recentes">
        <!--- Desktop -->
        <div class="container hide-mobile">

            <div class="row">
                <?= do_shortcode('[ac-pagina-cases]') ?>
            </div>

        </div>
        <!--- End Desktop -->
    </div>

    <div class="home-pessoas-e-carreiras inovar">
        <div id="triangle-down"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="home-pessoas-e-carreiras-title">
                        <h2>pronto para inovar?</h2>
                    </div>
                    <div class="botao">
                        <a href="#" class="btn btn-primary">Acesse para saber mais!</a>
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
                videoId: '<?php the_field('assista_ao_reel_cases')?>',
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
            $('button.open').addEventListener('click', playFullscreen);
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