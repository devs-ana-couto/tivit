<?php /* Template Name: Labs */ ?>
<?php get_header(); ?>

<!-- Hero banner-->
<div class="labs-hero position-relative">
  <div class="labs-hero-title">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="d-flex justify-content-center align-items-center flex-column position-relative zindex">
            <h1>TIVIT LABS</h1>
            <h2 class="hide-mobile">Juntos, transformamos ideias em soluções</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="customMargin d-flex justify-content-center align-items-center hide-mobile">
      <img class="mask w-100 position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/v_slider_home.svg" alt="mask" />
  </div>
  <div class="labs-hero-content hide-desktop">
    <h2>Juntos, transformamos ideias em soluções</h2>
  </div>

  <div class="maskDiv text-center hide-desktop">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/banner-mask.svg" class="position-absolute mask" alt="Máscara">
  </div>
</div>

<div id="intro-labs">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center w-100">
            <div class="text">
                <h2>
                    Incubadora que soluciona. O <strong>TIVIT Labs</strong> é um hub de inovação tecnológica que segue e cria tendências de alto impacto.
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="container titleCarousel">
    <h2>
        Pilares de atuação do Labs
    </h2>
</div>
<!-- Bloco Carrossel Infinito -->
<div id="carouselCustom" class="container-fluid labs p-0 text-center my-3">
  <div class="row mx-auto my-auto justify-content-center">
      <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item heroslide3 active">
                <div class="col-11 col-md-3">
                    <div class="card">
                        <div class="content">
                        <h2>Produtização</h2>
                        <p>Desenvolvimento, teste e validação de novas soluções de acordo com as demandas dos clientes e tendências de mercado.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item heroslide3">
                <div class="col-11 col-md-3">
                    <div class="card">
                        <div class="content">
                        <h2>Meetups</h2>
                        <p>Realização de eventos e encontros para criar uma comunidade de executivos, profissionais de tecnologia e pesquisadores com ideias e objetivos comuns.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item heroslide3">
                <div class="col-11 col-md-3">
                    <div class="card">
                        <div class="content">
                        <h2>Hackatons</h2>
                        <p>Promoção de maratonas de desenvolvimento para resolução de problemas de negócio, geração de novas ideias e compartilhamento de conhecimento junto ao público externo.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item heroslide3">
                <div class="col-11 col-md-3">
                    <div class="card">
                        <div class="content">
                        <h2>Startup <br> Pitch Day</h2>
                        <p>Aproximação do ecossistema de startups para apresentação e análise de novas propostas de negócio, com potencial de aceleração pela TIVIT.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item heroslide3">
                <div class="col-11 col-md-3">
                    <div class="card">
                        <div class="content">
                        <h2>Academy</h2>
                        <p>Divisão de conhecimentos e novas metodologias. Transformar as pessoas e dar o impulso para novas skills profissionais.</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
      <div class="d-flex justify-content-center mt-3 mt-md-5">
        <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <div class="d-flex flex-row counter3">
          <div class="numactive3"></div><div class="numseparation3"></div><div class="numtotal3"></div>
        </div>
        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
    </div>
</div>


<div id="timeline">
    <div class="container titleCarousel">
        <h2>
            Timeline de incubação e aceleração do TIVIT Labs
        </h2>
        <p>
            Nosso processo de concepção e desenvolvimento é composto por cinco etapas principais
        </p>
    </div>

    <!-- Bloco Carrossel Infinito -->
<div id="carouselCustom" class="container-fluid timelineCarousel p-0 text-center">
  <div class="row mx-auto my-auto justify-content-center">
      <div id="recipeCarouselTimeLine" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item heroslide2 active">
                <div class="col-11 col-md-3">
                    <div class="card">
                        <div class="card-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/labs/slide3.jpg" alt="Blog 1" class="img-fluid w-100">
                        </div>
                        <div class="content">
                        <h2>Ideação</h2>
                        <p>Design Thinking para levantamento de problemas e negócio e possíveis soluções.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item heroslide2">
                <div class="col-11 col-md-3">
                    <div class="card">
                         <div class="card-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/labs/slide2.jpg" alt="Blog 1" class="img-fluid w-100">
                        </div>
                        <div class="content">
                        <h2>Inception</h2>
                        <p>Definição de produto/solução, arquitetura, features e plano da esteira de desenvolvimento.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item heroslide2">
                <div class="col-11 col-md-3">
                    <div class="card">
                        <div class="card-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/labs/slide4.jpg" alt="Blog 1" class="img-fluid w-100">
                        </div>
                        <div class="content">
                        <h2>BM & Growth</h2>
                        <p>Pesquisa de mercado e tendências, análise de concorrentes, definição do modelo de negócio, plano de lançamento e go-to-market digital do produto.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item heroslide2">
                <div class="col-11 col-md-3">
                    <div class="card">
                        <div class="card-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/labs/slide2.jpg" alt="Blog 1" class="img-fluid w-100">
                        </div>
                        <div class="content">
                        <h2>BP</h2>
                        <p>Levantamento da viabilidade financeira, precificação, planejamento de recursos, investimentos e retorno.</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
      <div class="d-flex justify-content-center mt-3 mt-md-5">
        <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarouselTimeLine" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <div class="d-flex flex-row counter2">
          <div class="numactive2"></div><div class="numseparation2"></div><div class="numtotal2"></div>
        </div>
        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarouselTimeLine" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
    </div>
    </div>
</div>

<div id="virtual">
    <div class="container titleCarousel">
        <h2>
            Confira as ideias que já concebemos. Explore os Projetos do Labs
        </h2>
    </div>

    <div>
        <div class="a-tivit-cases cases labs">
            <div id="hero" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="container">

                    <div class="row">
                        <div class="carousel-inner">
                        <div class="carousel-item heroslide active fundo1">
                            <div class="col-12 col-md-6">
                            <div class="detalhes">
                                <div class="autor-time">
                                <p>Cliente: <strong>Ana Helena Lazaroni</strong></p>
                                </div>
                            </div>
                            <div class="content">
                                <h2>grupo malwee embarca na nuvem do google cloud rumo ao caminho da indústria  4.0 com apoio da tivit</h2>
                            </div>
                            <div class="tag">
                                <a href="#">conta híbrida</a>
                                <a href="#">varejo</a>
                            </div>
                            <div class="acessar">
                                <a href="#">acessar case <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow.svg" class="hide-desktop" alt="Saiba Mais"></a>
                            </div>
                            </div>
                        </div>
                        <div class="carousel-item heroslide fundo2">
                            <div class="col-12 col-md-6">
                            <div class="detalhes">
                                <div class="autor-time">
                                <p>Cliente: <strong>Ana Helena Lazaroni</strong></p>
                                </div>
                            </div>
                            <div class="content">
                                <h2>grupo malwee embarca na nuvem do google cloud rumo ao caminho da indústria  4.0 com apoio da tivit</h2>
                            </div>
                            <div class="tag">
                                <a href="#">conta híbrida</a>
                                <a href="#">varejo</a>
                            </div>
                            <div class="acessar">
                                <a href="#">acessar case <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow.svg" class="hide-desktop" alt="Saiba Mais"></a>
                            </div>
                            </div>
                        </div>
                        <div class="carousel-item heroslide fundo3">
                            <div class="col-12 col-md-6">
                            <div class="detalhes">
                                <div class="autor-time">
                                <p>Cliente: <strong>Ana Helena Lazaroni</strong></p>
                                </div>
                            </div>
                            <div class="content">
                                <h2>grupo malwee embarca na nuvem do google cloud rumo ao caminho da indústria  4.0 com apoio da tivit</h2>
                            </div>
                            <div class="tag">
                                <a href="#">conta híbrida</a>
                                <a href="#">varejo</a>
                            </div>
                            <div class="acessar">
                                <a href="#">acessar case <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow.svg" class="hide-desktop" alt="Saiba Mais"></a>
                            </div>
                            </div>
                        </div>
                        <div class="carousel-item heroslide fundo3">
                            <div class="col-12 col-md-6">
                            <div class="detalhes">
                                <div class="autor-time">
                                <p>Cliente: <strong>Ana Helena Lazaroni</strong></p>
                                </div>
                            </div>
                            <div class="content">
                                <h2>grupo malwee embarca na nuvem do google cloud rumo ao caminho da indústria  4.0 com apoio da tivit</h2>
                            </div>
                            <div class="tag">
                                <a href="#">conta híbrida</a>
                                <a href="#">varejo</a>
                            </div>
                            <div class="acessar">
                                <a href="#">acessar case <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow.svg" class="hide-desktop" alt="Saiba Mais"></a>
                            </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="navigation">
                            <button class="carousel-control-prev" type="button" data-bs-target="#hero" data-bs-slide="prev">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/arrow_left.png" alt="arrow_left">
                            </button>
                            <div class="d-flex flex-row counter">
                                <div class="numactive"></div><div class="numseparation"></div><div class="numtotal"></div>
                            </div>
                            <button class="carousel-control-next" type="button" data-bs-target="#hero" data-bs-slide="next">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/arrow_right.png" alt="arrow_right">
                            </button>
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#content" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Content 1"></button>
                                <button type="button" data-bs-target="#content" data-bs-slide-to="1" aria-label="Content 2"></button>
                                <button type="button" data-bs-target="#content" data-bs-slide-to="2" aria-label="Content 3"></button>
                                <button type="button" data-bs-target="#content" data-bs-slide-to="3" aria-label="Content 4"></button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<!-- Bloco de Conteúdos -->
<div id="contentTdx" class="home-content content-inovacao">
  <div class="container pd">
    <div class="title">
      <h2 class="titleText text-center">Últimas notícias do Labs</h2>
    </div>

    <div class="row hide-mobile">
      <!-- content 1 -->
      <div class="col-12 col-md-4">
        <div class="cardContent p-1"> 
          <div class="img position-relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/artigo1.png" alt="Depoimento">
            <div class="position-absolute tagContent">artigo</div>
          </div>
          <div class="detalhes">
            <span>01/01/2021</span>
            <p class="m-0 h-100">Por <b>Ana Helena Lazaroni</b></p>
          </div>
          <div class="content">
            <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
          </div>
          <div class="autor-time w-100">
            <div class="d-flex flex-row">
              <a href="#">conta híbrida</a>
              <a href="#">varejo</a>
            </div>
            <p>6 minutos de leitura</p>
          </div>
          <div class="acessar">
            <a href="#">acessar artigo</a>
          </div>
        </div>
      </div>
      <!-- // content 1 -->

      <!-- content 2 -->
      <div class="col-12 col-md-4">
        <div class="cardContent p-1">
          <div class="title">
            <h2 class="hide-desktop">cases mais recentes</h2>
          </div>
          <div class="img position-relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/artigo2.png" alt="Depoimento">
            <div class="position-absolute tagContent">press release</div>
          </div>
          <div class="detalhes">
            <span>01/01/2021</span>
            <p class="m-0 h-100">Por <b>Ana Helena Lazaroni</b></p>
          </div>
          <div class="content">
            <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
          </div>
          <div class="autor-time w-100">
            <div class="d-flex flex-row">
              <a href="#">conta híbrida</a>
              <a href="#">varejo</a>
            </div>
            <p>6 minutos de leitura</p>
          </div>
          <div class="acessar">
            <a href="#">acessar artigo</a>
          </div>
        </div>
      </div>
      <!-- // content 2 -->
      <!-- content 3 -->
      <div class="col-12 col-md-4">
        <div class="cardContent p-1">
          <div class="title">
            <h2 class="hide-desktop">cases mais recentes</h2>
          </div>
          <div class="img position-relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/artigo3.png" alt="Depoimento">
            <div class="position-absolute tagContent">artigo</div>
          </div>
          <div class="detalhes">
            <span>01/01/2021</span>
            <p class="m-0 h-100">Por <b>Ana Helena Lazaroni</b></p>
          </div>
          <div class="content">
            <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
          </div>
          <div class="autor-time w-100">
            <div class="d-flex flex-row align-items-center">
              <a href="#">conta híbrida</a>
              <a href="#">varejo</a>
            </div>
            <p>6 minutos de leitura</p>
          </div>
          <div class="acessar">
            <a href="#">acessar artigo</a>
          </div>
        </div>
      </div>
      <!-- // content 3 -->
    </div>

    <!-- mobile slide -->
    <div class="row mx-auto my-auto justify-content-center hide-desktop">
      <div id="contentMobileCarousel" class="carousel slide p-0" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
              <div class="carousel-item heroslide4 content active">
                  <div class="col-11 m-0 p-0">
                    <div class="cardContent p-2"> 
                      <div class="img position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/artigo1.png" alt="Depoimento">
                        <div class="position-absolute tagContent">artigo</div>
                      </div>
                      <div class="detalhes">
                        <span>01/01/2021</span>
                        <p class="m-0 h-100">Por <b>Ana Helena Lazaroni</b></p>
                      </div>
                      <div class="content">
                        <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                      </div>
                      <div class="autor-time w-100">
                        <div class="d-flex flex-row aaa">
                          <a href="#">conta híbrida</a>
                          <a href="#">varejo</a>
                        </div>
                        <p>6 min. de leitura</p>
                      </div>
                      <div class="acessar">
                        <a href="#">acessar artigo</a>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="carousel-item heroslide4 content">
                  <div class="col-11 m-0 p-0">
                    <div class="cardContent p-2">
                      <div class="img position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/artigo2.png" alt="Depoimento">
                        <div class="position-absolute tagContent">press release</div>
                      </div>
                      <div class="detalhes">
                        <span>01/01/2021</span>
                        <p class="m-0 h-100">Por <b>Ana Helena Lazaroni</b></p>
                      </div>
                      <div class="content">
                        <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                      </div>
                      <div class="autor-time w-100">
                        <div class="d-flex flex-row">
                          <a href="#">conta híbrida</a>
                          <a href="#">varejo</a>
                        </div>
                        <p>6 min. de leitura</p>
                      </div>
                      <div class="acessar">
                        <a href="#">acessar artigo</a>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="carousel-item heroslide4 content">
                  <div class="col-11 m-0 p-0">
                    <div class="cardContent p-2">
                      <div class="img position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/artigo3.png" alt="Depoimento">
                        <div class="position-absolute tagContent">artigo</div>
                      </div>
                      <div class="detalhes">
                        <span>01/01/2021</span>
                        <p class="m-0 h-100">Por <b>Ana Helena Lazaroni</b></p>
                      </div>
                      <div class="content">
                        <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                      </div>
                      <div class="autor-time w-100">
                        <div class="d-flex flex-row align-items-center">
                          <a href="#">conta híbrida</a>
                          <a href="#">varejo</a>
                        </div>
                        <p>6 min. de leitura</p>
                      </div>
                      <div class="acessar">
                        <a href="#">acessar artigo</a>
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

<!-- Pornto para Inovar? -->
<div class="home-pessoas-e-carreiras inovar labs">
  <div id="triangle-down"></div>
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