<?php /* Template Name: ESG */ ?>
<?php get_header(); ?>

<!-- Hero banner-->
<div class="esg-hero position-relative" style="background: url('<? $detect->isMobile() ? the_field('banner_mobile_esg') : the_field('banner_desktop_esg'); ?>') no-repeat center center; background-size: cover;">
  <div class="esg-hero-title">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <div class="zindex position-relative">
                <h1><?the_field('pre_chamada_esg')?></h1>
                <h2><?the_field('chamada_esg')?></h2>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="customMargin d-flex justify-content-center align-items-center hide-mobile">
      <img class="mask w-100 position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/v_slider_home.svg" alt="mask" />
  </div>
  <div class="maskDiv text-center hide-desktop">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/banner-mask.svg" class="position-absolute mask" alt="Máscara">
  </div>
</div>

<div id="esgCounter" class="lp-tbanks-conheca">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <div class="lp-tbanks-credibilidade text-center">
          <div class="row">
            <div class="col-12 col-md-3">
              <p>
                <span>
                  <b><?the_field('valor_1')?></b>
                </span>
              </p>
              <div class="w-100 d-flex justify-content-center align-items-center">
                  <p class="custom-text">
                    <?the_field('label_1')?>
                  </p>
              </div>
            </div>

            <div class="col-12 col-md-3">
              <p>
                <span><?the_field('valor_2')?></span>
              </p>
              <div class="w-100 d-flex justify-content-center align-items-center">
                  <p class="custom-text">
                    <?the_field('label_2')?>
                  </p>
              </div>
            </div>

            <div class="col-12 col-md-3">
              <p>
                <span><?the_field('valor_3')?></span>
              </p>
              <div class="w-100 d-flex justify-content-center align-items-center">
                  <p class="custom-text">
                    <?the_field('label_3')?>
                  </p>
              </div>
            </div>  

            <div class="col-12 col-md-3">
              <p>
                <span><?the_field('valor_4')?></span>
              </p>
              <div class="w-100 d-flex justify-content-center align-items-center">
                  <p class="custom-text">
                    <?the_field('label_4')?>
                  </p>
              </div>
            </div> 

          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div id="esgConheca" class="lp-tbanks-conheca">
    <div class="container">
        <div class="lp-tbanks-arrow text-center mb-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/icons/seta-red.svg" class="bounce" alt="Tbanks Saiba Mais">
        </div>
        <div class="row">
            <div class="col-12">

                <div class="lp-tbanks-conheca-content">
                  <?the_field('intro_chamada_esg')?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Projetos por Categoria -->
<div id="projetos">
  <div id="triangle-down"></div>
  <div class="container">
      <div class="text">
        <h2>PROJETOS POR CATEGORIA</h2>
      </div>
      <div class="w-100 tab">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">cultura e responsabilidade social</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">programas ambientais</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">diversidade</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">capacitação</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Educação</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div id="carouselProjetos" class="carousel slide mt-5" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner position-relative">
                <div class="carousel-item heroslide active">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/slide1.jpg" class="d-block w-100" alt="Slide1">
                  <div class="d-flex h-100 justify-content-start align-items-end">
                    <div class="textslide position-absolute">
                      <small>Nome da ação: <strong>Lorem Ipsum</strong></small>
                      <h2>Masp sp</h2>
                      <div class="d-flex justify-content-start">
                        <p>Apoiar o Masp é contribuir para a manutenção de uma das mais relevantes instituições culturais do país e foi por isso que escolhemos apoiá-lo em 2019.</p>
                      </div>
                      <div class="mt-2">
                        <span class="tag">CULTURA E RESPONSABILIDADE SOCIAL</span>
                        <span class="info">10 minutos de leitura</span>
                      </div>
                      <div class="mt-4">
                        <a>VER AÇÃO</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item heroslide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/slide1.jpg" class="d-block w-100" alt="Slide1">
                </div>
                <div class="carousel-item heroslide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/slide1.jpg" class="d-block w-100" alt="Slide1">
                </div>
              </div>
              <div class="w-100">
                <div class="custom position-absolute">
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselProjetos" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselProjetos" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  </button>
                  <div class="d-flex flex-row justify-content-center counter mt-3">
                    <div class="numactive"></div><div class="numseparation"></div><div class="numtotal"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div>
      </div>
  </div>
</div>

<!-- Cultura -->
<div id="cultura">
  <div class="container">
    <div class="text">
      <h2 class="text">outros projetos de cultura e responsabilidade social</h2>
    </div>
    <div class="row mx-auto my-auto justify-content-center mt-4">
      <div id="cultureCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item heroslide2 active">
                <div class="col-md-4">
                    <div class="w-100 p-3">
                        <div class="card-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/group1.jpg" alt="Blog 1" class="img-fluid w-100">
                        </div>
                        <div class="content">
                          <h2>exposição (im)permanência</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                          <a class="cta">conheça a ação</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item heroslide2">
                <div class="col-md-4">
                    <div class="w-100 p-3">
                        <div class="card-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/group2.jpg" alt="Blog 2" class="img-fluid w-100">
                        </div>
                        <div class="content">
                          <h2>piaf e brecht, a vida em vermelho</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                          <a class="cta">conheça a ação</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item heroslide2">
                <div class="col-md-4">
                    <div class="w-100 p-3">
                        <div class="card-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/group3.jpg" alt="Blog 3" class="img-fluid w-100">
                        </div>
                        <div class="content">
                          <h2>festival hackatudo</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                          <a class="cta">conheça a ação</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item heroslide2">
                <div class="col-md-4">
                    <div class="w-100 p-3">
                        <div class="card-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/group2.jpg" alt="Blog 2" class="img-fluid w-100">
                        </div>
                        <div class="content">
                          <h2>piaf e brecht, a vida em vermelho</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                          <a class="cta">conheça a ação</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item heroslide2">
                <div class="col-md-4">
                    <div class="w-100 p-3">
                        <div class="card-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/group3.jpg" alt="Blog 3" class="img-fluid w-100">
                        </div>
                        <div class="content">
                          <h2>festival hackatudo</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                          <a class="cta">conheça a ação</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative d-flex justify-content-center mt-5">
          <a class="carousel-control-prev bg-transparent w-aut" href="#cultureCarousel" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </a>
          <div class="d-flex flex-row counter2">
            <div class="numactive2"></div><div class="numseparation2"></div><div class="numtotal2"></div>
          </div>
          <a class="carousel-control-next bg-transparent w-aut" href="#cultureCarousel" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bloco de Conteúdos -->
<div id="esgContent" class="home-content content-inovacao">
  <div id="triangle-down"></div>
  <?=do_shortcode('[ac-bloco-conteudo]');?>
</div>

<?php get_footer(); ?>