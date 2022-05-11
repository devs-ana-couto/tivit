<?php /* Template Name: A Tivit */ ?>
<?php get_header(); ?>

<div class="a-tivit-hero position-relative" style="background: url('<? $detect->isMobile() ? the_field('banner_mobile_ativit') : the_field('banner_desktop_ativit'); ?>') no-repeat center center; background-size: cover;">
  <div class="a-tivit-hero-title">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <div class="zindex textBanner">
              <h1><? the_field('pre_chamada_ativit');?></h1>
              <h2><? the_field('chamada_ativit');?></h2>
            </div>
            <div class="maskDiv text-center hide-desktop">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/banner-mask.svg" class="position-absolute mask" alt="Máscara">
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="customMargin d-flex justify-content-center align-items-center hide-mobile">
      <img class="mask w-100 position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/v_slider_home.svg" alt="mask" />
  </div>
  <div class="botaoReels m-0 hide-mobile">
    <a href="#">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/play.svg" alt="...">
      <p>Assista ao reel</p>
    </a>
  </div>
  <div class="botaoReels m-0 hide-desktop">
    <a href="#">
      <p>Assista ao reel</p>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/play.svg" alt="...">
    </a>
  </div>
</div>

<div class="a-tivit-sobre">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p>
        <? the_field('introducao_ativit');?>
        </p>
      </div>
    </div>
  </div>
</div>

<div class="a-tivit-carousel hide-desktop">
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
</div>


<?=do_shortcode('[ac-bloco-cases]')?>

<div class="a-tivit-inovacao">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <div class="content text-center">
          <h2>Como a TIVIT tem inovado?</h2>
          <p class="paragrafo3">Investir em pessoas e ideias faz parte do nosso DNA. Entendemos que a transformação digital e a busca por inovação se fazem a partir da antecipação das tendências do mercado. Para compor nossa atuação, contamos com soluções personalizadas e áreas como TIVIT Ventures, TBanks, TIVIT Labs e Tdx.</p>
        </div>

        <div class="row">

          <div class="col-md-1"></div>
          <div class="col-12 col-md-5">
            <div class="card">
              <div class="card-content" style="
                background: url('<? $detect->isMobile() ? '' : the_field('logo_1_ativit'); ?>');
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center;
                height: 85px;
                mix-blend-mode: luminosity;
                max-width: 100%;">
                <p class="hide-mobile">O TIVIT Labs é o hub de inovação da TIVIT.</p>
                <img src="<? the_field('logo_1_ativit'); ?>" class="hide-desktop" alt="Tivit Inovação">
                <a href="#">conheça a tivit labs <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow-red.svg" alt="Saiba Mais"></a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-5">
            <div class="card">
              <div class="card-content" style="
                background: url('<? $detect->isMobile() ? '' : the_field('logo_2_ativit'); ?>');
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center;
                height: 85px;
                mix-blend-mode: luminosity;
                max-width: 100%;">
                <p class="hide-mobile">A Ventures é a vertical de investimentos e aquisições da TIVIT.</p>
                <img src="<? the_field('logo_2_ativit'); ?>" class="hide-desktop" alt="Tivit Experts">
                <div class="pt-4 pt-md-0"><a href="#">conheça a ventures <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow-red.svg" alt="Saiba Mais"></a></div>
              </div>
            </div>
          </div>
          
        </div>

        <div class="botao">
          <a href="#">saiba mais sobre inovação</a>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="a-tivit-experts hide-desktop">
  <div class="container  p-md-auto">

    <div class="row">
      <div class="col-12">
        <div class="a-tivit-experts-title text-center">
          <h2>Experts</h2>
        </div>
      </div>
    </div>

    <div class="hide-mobile">
      <div class="row">
        <div class="col-6">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/experts/01.svg" alt="Tivit Experts">
        </div>
        <div class="col-6">
          <div class="a-tivit-experts-desc">
            <h3>fulano de tal da silva</h3>
            <p class="paragrafo3">Área de atuação lorem ipsum</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/experts/02.svg" alt="Tivit Experts">
        </div>
        <div class="col-6">
          <div class="a-tivit-experts-desc">
            <h3>fulano de tal da silva</h3>
            <p class="paragrafo3">Área de atuação lorem ipsum</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/experts/03.svg" alt="Tivit Experts">
        </div>
        <div class="col-6">
          <div class="a-tivit-experts-desc">
            <h3>fulano de tal da silva</h3>
            <p class="paragrafo3">Área de atuação lorem ipsum</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/experts/04.svg" alt="Tivit Experts">
        </div>
        <div class="col-6">
          <div class="a-tivit-experts-desc">
            <h3>fulano de tal da silva</h3>
            <p class="paragrafo3">Área de atuação lorem ipsum</p>
          </div>
        </div>
      </div>

    </div>

    <!-- Conheça a nossa equipe -->
    <div id="pecConheca" class="lp-tbanks-conheca">
      <!-- Bloco Carrossel Infinito -->
      <div id="carouselCustom" class="text-center hide-desktop my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="esg" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item heroslide4 active">
                    <div class="col-11 col-md-3">
                        <div class="card">
                            <div class="card-img position-relative">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/customer1.svg" alt="Blog 1" class="img-fluid w-100">
                                <div class="position-absolute tagIn"> <img class="position-absolute imgIn" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in-white.svg" alt="Linkedin" class="img-fluid"> </div>
                            </div>
                            <div class="content">
                              <h2>fulano de tal da silva</h2>
                              <p>Área de atuação lorem ipsum</p>
                            </div>
                            <div class="redes-sociais d-flex justify-content-center flex-row">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Blog 3" class="img-fluid">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Blog 3" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item heroslide4">
                    <div class="col-11 col-md-3">
                        <div class="card">
                            <div class="card-img position-relative">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/customer2.svg" alt="Blog 2" class="img-fluid w-100">
                              <div class="position-absolute tagIn"> <img class="position-absolute imgIn" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in-white.svg" alt="Linkedin" class="img-fluid"> </div>
                            </div>
                            <div class="content">
                              <h2>fulano de tal da silva</h2>
                              <p>Área de atuação lorem ipsum</p>
                            </div>
                            <div class="redes-sociais d-flex justify-content-center flex-row">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Blog 3" class="img-fluid">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Blog 3" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item heroslide4">
                    <div class="col-11 col-md-3">
                        <div class="card">
                            <div class="card-img position-relative">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/customer3.svg" alt="Blog 3" class="img-fluid w-100">
                              <div class="position-absolute tagIn"> <img class="position-absolute imgIn" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in-white.svg" alt="Linkedin" class="img-fluid"> </div>
                            </div>
                            <div class="content">
                              <h2>fulano de tal da silva</h2>
                              <p>Área de atuação lorem ipsum</p>
                            </div>
                            <div class="redes-sociais d-flex justify-content-center flex-row">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Blog 3" class="img-fluid">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Blog 3" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item heroslide4">
                    <div class="col-11 col-md-3">
                        <div class="card">
                            <div class="card-img position-relative">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/customer4.svg" alt="Blog 2" class="img-fluid w-100">
                              <div class="position-absolute tagIn"> <img class="position-absolute imgIn" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in-white.svg" alt="Linkedin" class="img-fluid"> </div>
                            </div>
                            <div class="content">
                              <h2>fulano de tal da silva</h2>
                              <p>Área de atuação lorem ipsum</p>
                            </div>
                            <div class="redes-sociais d-flex justify-content-center flex-row">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Blog 3" class="img-fluid">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Blog 3" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item heroslide4">
                    <div class="col-11 col-md-3">
                        <div class="card">
                            <div class="card-img position-relative">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/customer1.svg" alt="Blog 3" class="img-fluid w-100">
                              <div class="position-absolute tagIn"> <img class="position-absolute imgIn" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in-white.svg" alt="Linkedin" class="img-fluid"> </div>
                            </div>
                            <div class="content">
                              <h2>fulano de tal da silva</h2>
                              <p>Área de atuação lorem ipsum</p>
                            </div>
                            <div class="d-flex justify-content-center flex-row">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Blog 3" class="img-fluid">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Blog 3" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="d-flex justify-content-center mt-5">
              <a class="carousel-control-prev bg-transparent w-aut" href="#esg" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              </a>
              <div class="d-flex flex-row counter2">
                <div class="numactive2"></div><div class="numseparation2"></div><div class="numtotal2"></div>
              </div>
              <a class="carousel-control-next bg-transparent w-aut" href="#esg" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
              </a>
            </div> -->
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="a-tivit-experts hide-mobile text-center">
  <div class="container">

    <div class="row">
      <div class="col-12">
        <div class="a-tivit-experts-title text-center">
          <h2>Experts</h2>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-md-3">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/experts/01-desktop.svg" alt="Tivit Experts">
        <div class="a-tivit-experts-desc">
          <h3>fulano de tal da silva</h3>
          <p class="paragrafo3">Área de atuação lorem ipsum</p>
        </div>
      </div>
      
      <div class="col-md-3">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/experts/02-desktop.svg" alt="Tivit Experts">
        <div class="a-tivit-experts-desc">
          <h3>fulano de tal da silva</h3>
          <p class="paragrafo3">Área de atuação lorem ipsum</p>
        </div>
      </div>
      
      <div class="col-md-3">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/experts/03-desktop.svg" alt="Tivit Experts">
        <div class="a-tivit-experts-desc">
          <h3>fulano de tal da silva</h3>
          <p class="paragrafo3">Área de atuação lorem ipsum</p>
        </div>
      </div>

      <div class="col-md-3">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/experts/04-desktop.svg" alt="Tivit Experts">
        <div class="a-tivit-experts-desc">
          <h3>fulano de tal da silva</h3>
          <p class="paragrafo3">Área de atuação lorem ipsum</p>
        </div>
      </div>

    </div>

  </div>
</div>

<div id="esgTivit" class="esg carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="container">
    <div class="row">
      <div class="lp-tbanks-confira lp-tdx">

        <div id="triangle-down"></div>

        <div class="carousel-inner">
        
          <div class="row columnReverseMobile">
            <div class="col-12 col-md-6 lp-tbanks-confira-bg-right lp-tdx-confira-bg-right">
              <div class="lp-tbanks-confira-content">
                <h3>
                <strong>ESG:</strong></br>
                sustentabilidade, diversidade e responsabilidade.
              </h3>
              </div>
            </div>

            <div class="col-12 col-md-6">

              <div class="carousel-item heroslide2 active">
                <div class="col-12 lp-tbanks-confira-bg-left slide1 hide-mobile">
                  <div class="lp-tbanks-confira-carousel">
                    <h2>MASP SP</h2>
                    <p class="paragrafo3">
                      Apoiar o Masp é contribuir para a manutenção de uma das mais relevantes instituições culturais do país e foi por isso que escolhemos apoiá-lo em 2019.
                    </p>
                  </div>
                </div>
                <div class="col-12 lp-tbanks-confira-bg-mobile hide-desktop">
                  <div class="position-relative">
                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tdx/mobileslide1.svg" alt="Mobile Slide 1">
                    <div class="lp-tbanks-confira-carousel d-flex flex-column justify-content-center">
                      <h2>MASP SP</h2>
                      <p class="paragrafo3">
                        Apoiar o Masp é contribuir para a manutenção de uma das mais relevantes instituições culturais do país e foi por isso que escolhemos apoiá-lo em 2019.
                      </p>
                      <a>CONHEÇA A AÇÃO</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-item heroslide2">
                <div class="col-12 lp-tbanks-confira-bg-left  hide-mobile">
                  <div class="lp-tbanks-confira-carousel">
                    <h2>MASP SP</h2>
                    <p class="paragrafo3">
                      Apoiar o Masp é contribuir para a manutenção de uma das mais relevantes instituições culturais do país e foi por isso que escolhemos apoiá-lo em 2019.
                    </p>
                  </div>
                </div>
                <div class="col-12 lp-tbanks-confira-bg-mobile hide-desktop">
                  <div class="position-relative">
                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tdx/mobileslide1.svg" alt="Mobile Slide 1">
                    <div class="lp-tbanks-confira-carousel d-flex flex-column justify-content-center h-100 position-absolute">
                      <h2>MASP SP</h2>
                      <p class="paragrafo3">
                        Apoiar o Masp é contribuir para a manutenção de uma das mais relevantes instituições culturais do país e foi por isso que escolhemos apoiá-lo em 2019.
                      </p>
                      <a>CONHEÇA A AÇÃO</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-item heroslide2">
                <div class="col-12 lp-tbanks-confira-bg-left slide1 hide-mobile">
                  <div class="lp-tbanks-confira-carousel">
                    <h2>MASP SP</h2>
                    <p class="paragrafo3">
                      Apoiar o Masp é contribuir para a manutenção de uma das mais relevantes instituições culturais do país e foi por isso que escolhemos apoiá-lo em 2019.
                    </p>
                  </div>
                </div>
                <div class="col-12 lp-tbanks-confira-bg-mobile hide-desktop">
                  <div class="position-relative">
                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tdx/mobileslide1.svg" alt="Mobile Slide 1">
                    <div class="lp-tbanks-confira-carousel d-flex flex-column justify-content-center h-100 position-absolute">
                      <h2>MASP SP</h2>
                      <p class="paragrafo3">
                        Apoiar o Masp é contribuir para a manutenção de uma das mais relevantes instituições culturais do país e foi por isso que escolhemos apoiá-lo em 2019.
                      </p>
                      <a>CONHEÇA A AÇÃO</a>
                    </div>
                  </div>
                </div>

              </div>

            </div> 

            <div class="col-12 col-md-6">
              <div class="navigation">
                <button class="carousel-control-prev" type="button" data-bs-target="#esgTivit" data-bs-slide="prev">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/arrow_left.png" alt="arrow_left">
                </button>
                <div class="d-flex flex-row counter2">
                  <div class="numactive2"></div><div class="numseparation2"></div><div class="numtotal2"></div>
                </div>
                <button class="carousel-control-next" type="button" data-bs-target="#esgTivit" data-bs-slide="next">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/arrow_right.png" alt="arrow_right">
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
        <div class="title">
          <h2>Certificações</h2>
        </div>
        <div class="desc">
          <p class="paragrafo3">
            Nossa expertise é garantida e certificada por diversas organizações de atuação nacional e internacional. Com mais de 20 anos de mercado, acumulamos excelência no que há de mais importante.
          </p>
        </div>
      </div>
    </div>

    <div id="ativitClientes" class="lp-tbanks-logo-clientes mt-0 mt-md-5">
      <div class="row">
        <div class="col-12">
          <div class="lp-tbanks-logo-clientes-content text-center">
            <div class="text-center my-3">
              <div class="row mx-auto my-auto justify-content-center">
                  <div id="ativitCustomerCarousel" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner" role="listbox">
                        <div class="carousel-item heroslide3 customers active">
                            <div class="col-6 col-md-3">
                                <div class="h-100">
                                    <div class="m-3">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/certificacoes/gptw1.svg" alt="Gptw">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item heroslide3 customers">
                            <div class="col-6 col-md-3">
                                <div class="h-100">
                                    <div class="m-3">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/certificacoes/abes1.svg" alt="Abes">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item heroslide3 customers">
                            <div class="col-6 col-md-3">
                                <div class="h-100">
                                    <div class="m-3">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/certificacoes/cmmi1.svg" alt="Cmmi">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item heroslide3 customers">
                            <div class="col-6 col-md-3">
                                <div class="h-100">
                                    <div class="m-3">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/certificacoes/hdi1.svg" alt="Hdi">
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="w-100 position-relative mt-2">
                        <a class="carousel-control-prev bg-transparent w-aut" href="#ativitCustomerCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>  
                        <div class="d-flex flex-row justify-content-center counter3 mt-3">
                          <div class="numactive3"></div><div class="numseparation3"></div><div class="numtotal3"></div>
                        </div>
                        <a class="carousel-control-next bg-transparent w-aut" href="#ativitCustomerCarousel" role="button" data-bs-slide="next">
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
          <h2>pronto para inovar?</h2>
        </div>
        <div class="botao">
          <a href="#" class="btn btn-primary">Fale com a gente!</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>