<?php /* Template Name: Inovação */ ?>
<?php get_header(); ?>

<!-- Hero banner-->
<div class="inovacao-hero">
  <div class="inovacao-hero-title">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1><?=get_post_meta( get_the_ID(), 'inovacao_pre-chamada', true );?></h1>
          <h2 class="hide-mobile"><?=get_post_meta( get_the_ID(), 'inovacao_chamada', true );?></h2>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Introdução abaixo do Hero-->
<div class="inovacao-intro">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p>
          Inovação para a <span>TIVIT</span> é se reinventar sem nunca se perder.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Bloco Ventures -->
<div id="ventures">
  <div class="d-flex flex-column container w-100 text-center justify-content-center align-items-center">
    <h2>VENTURES</h2>
    <p>A TIVIT Ventures é o nosso braço de compra e criação de empresas. Só no último ano,
      investimos x milhões de reais na transformação de startups! Assim a gente continua sendo relevante para a tecnologia... Todos os dias.</p>
  </div>
  <div class="container mt-5 mb-5">
    <!-- first row -->
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="d-flex justify-content-center align-items-center w-100 h-100 margin-auto text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/privally.svg" alt="Privally">
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="d-flex justify-content-center align-items-center w-100 h-100 margin-auto text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/iambda.svg" alt="Iambda">
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="d-flex justify-content-center align-items-center w-100 h-100 margin-auto text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/stoneage.svg" alt="Stone Age">
          </div>
        </div>
      </div>
    </div>
    <!-- sec row -->
    <div class="row mt-4">
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="d-flex justify-content-center align-items-center w-100 h-100 margin-auto text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/devapi.svg" alt="Dev API">
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="d-flex justify-content-center align-items-center w-100 h-100 margin-auto text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/tbanks.svg" alt="TBanks">
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="d-flex justify-content-center align-items-center w-100 h-100 margin-auto text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/cybersec.svg" alt="Cyber Security">
          </div>
        </div>
      </div>
    </div>

    <div class="aboveBlock d-flex justify-content-center">
      <div class="textAbove">
        <p>Juntas, nossas marcas tem skills para atender nossos clientes com diversas soluções:</p>
      </div>
    </div>
    <div class="w-100"> 
      <div class="d-flex justify-content-center flex-row services">
        <em>CLOUD SERVICES</em>
        <em>CYBERSECURITY</em>
        <em>DESIGN DE SOLUÇÕES</em>
        <em>TECHFIN</em>
        <em>DATA CENTER E FULL OUTSOURCING</em>
        <em>RODUTOS DIGITAIS</em>
        <em>DATA</em>
      </div>
    </div>
    <div class="d-flex justify-content-center mt-5 w-100">
      <a class="button">Conheça mais sobre ventures</a>
    </div>
    <div id="triangle-down"></div>
  </div>
</div>

<!-- Bloco TivitLabs -->
<div id="tivitLabs" class="container">
  <div class="w-100 margin-auto text-center">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/labs.svg" alt="Tivit Labs">
  </div>
  <div class="d-flex justify-content-center subText">
    <p class="text-center">
     O TIVIT Labs é o nosso cérebro de inovação. Com ele, ajudamos clientes a desenvolverem novas tecnologias e soluções personalizadas. 
      Para que a aprendizagem seja contínua, lançamos mão do Labs Academy, programa que fomenta ainda mais esse ecossistema de ideias.
    </p>
  </div>
</div>

<!-- Bloco Carrossel Infinito -->
<div id="carouselCustom" class="container-fluid text-center my-3">
  <div class="row mx-auto my-auto justify-content-center">
      <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item heroinovacao active">
              <div class="col-md-3">
                  <div class="card">
                      <div class="card-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/blog1.jpg" alt="Blog 1" class="img-fluid w-100">
                      </div>
                      <div class="content">
                        <h2>Produtização</h2>
                        <p>Desenvolvimento, teste e validação de novas soluções de acordo com as demandas dos clientes e tendências de mercado.</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="carousel-item heroinovacao">
              <div class="col-md-3">
                  <div class="card">
                      <div class="card-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/blog2.jpg" alt="Blog 2" class="img-fluid w-100">
                      </div>
                      <div class="content">
                        <h2>Meetups</h2>
                        <p>Realização de eventos e encontros para criar uma comunidade de executivos, profissionais de tecnologia e pesquisadores com ideias e objetivos comuns.</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="carousel-item heroinovacao">
              <div class="col-md-3">
                  <div class="card">
                      <div class="card-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/blog3.jpg" alt="Blog 3" class="img-fluid w-100">
                      </div>
                      <div class="content">
                        <h2>Hackatons</h2>
                        <p>Promoção de maratonas de desenvolvimento para resolução de problemas de negócio, geração de novas ideias e compartilhamento de conhecimento junto ao público externo.</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="carousel-item heroinovacao">
              <div class="col-md-3">
                  <div class="card">
                      <div class="card-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/blog2.jpg" alt="Blog 2" class="img-fluid w-100">
                      </div>
                      <div class="content">
                        <h2>Startup</h2>
                        <p>Aproximação do ecossistema de startups para apresentação e análise de novas propostas de negócio, com potencial de aceleração pela TIVIT.</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="carousel-item heroinovacao">
              <div class="col-md-3">
                  <div class="card">
                      <div class="card-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/blog3.jpg" alt="Blog 3" class="img-fluid w-100">
                      </div>
                      <div class="content">
                        <h2>Produtização</h2>
                        <p>Desenvolvimento, teste e validação de novas soluções de acordo com as demandas dos clientes e tendências de mercado.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="d-flex justify-content-center mt-5">
        <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <div class="d-flex flex-row counterInovacao hide-mobile">
          <div class="numactiveinovacao"></div><div class="numseparationinovacao"></div><div class="numtotalinovacao"></div>
        </div>
        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Bloco CTA Tour -->
<div id="tour">
  <div class="image-background position-relative">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/backgroundinovation.jpg" alt="background" class="img-fluid w-100">
    <!-- <div class="position-absolute w-100">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/maskinovation.svg" alt="mask" class="img-fluid w-100">
    </div> -->
    <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 txt position-absolute">
      <h2 class="textLabs">
        Conheça o LABS
      </h2>
      <p>
        Faça um tour 3D na nossa incubadora de ideias!
      </p>
      <a>
        começar o tour
      </a>
    </div>
  </div>
</div>

<!-- Bloco de labs -->
<div id="labs" class="esg carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="container">
    <div class="row">
      <div class="lp-tbanks-confira lp-tdx">

        <div class="carousel-inner">
        
          <div class="row">
            <div class="col-12 col-md-6 lp-tbanks-confira-bg-right lp-tdx-confira-bg-right">
              <div class="lp-tbanks-confira-content">
                <h3>
                Conheça os projetos em destaque da <strong>TIVIT Labs</strong>
                </h3>
                <a class="button">
                    CONHEÇA MAIS SOBRE A TIVIT LABS
                </a>
              </div>
            </div>

            <div class="col-12 col-md-6">

              <div class="carousel-item heroslide3 active">
                <div class="col-12 lp-tbanks-confira-bg-left slide1 hide-mobile">
                  <div class="lp-tbanks-confira-carousel">
                    <h2>IVI Virtual Employee</h2>
                    <p class="paragrafo3">
                      Mais que um bot: quase humana. A IVI é a colaboradora virtual da TIVIT que nasceu em 2018.
                    </p>
                  </div>
                </div>
                <!-- <div class="col-12 lp-tbanks-confira-bg-mobile hide-desktop">
                </div> -->
              </div>

              <div class="carousel-item heroslide3">
                <div class="col-12 lp-tbanks-confira-bg-left  hide-mobile">
                  <div class="lp-tbanks-confira-carousel">
                    <h2>MASP SP</h2>
                    <p class="paragrafo3">
                      Mais que um bot: quase humana. A IVI é a colaboradora virtual da TIVIT que nasceu em 2018.
                    </p>
                  </div>
                </div>
                <!-- <div class="col-12 lp-tbanks-confira-bg-mobile hide-desktop">
                </div> -->
              </div>

              <div class="carousel-item heroslide3">
                <div class="col-12 lp-tbanks-confira-bg-left slide1 hide-mobile">
                  <div class="lp-tbanks-confira-carousel">
                    <h2>MASP SP</h2>
                    <p class="paragrafo3">
                      Mais que um bot: quase humana. A IVI é a colaboradora virtual da TIVIT que nasceu em 2018.
                    </p>
                  </div>
                </div>
                <!-- <div class="col-12 lp-tbanks-confira-bg-mobile hide-desktop">
                </div> -->

              </div>

            </div>

            <div class="col-12 col-md-6">
              <div class="navigation">
                <button class="carousel-control-prev" type="button" data-bs-target="#labs" data-bs-slide="prev">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/arrow_left.png" alt="arrow_left">
                </button>
                <div class="d-flex flex-row counter3">
                  <div class="numactive3"></div><div class="numseparation3"></div><div class="numtotal3"></div>
                </div>
                <button class="carousel-control-next" type="button" data-bs-target="#labs" data-bs-slide="next">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/arrow_right.png" alt="arrow_right">
                </button>
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#esg" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Content 1"></button>
                  <button type="button" data-bs-target="#esg" data-bs-slide-to="1" aria-label="Content 2"></button>
                  <button type="button" data-bs-target="#esg" data-bs-slide-to="2" aria-label="Content 3"></button>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>

<!-- TDX -->
<div id="tdx">
  <div class="container">
    <div class="w-100 text-center m-auto">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/tdx.svg" alt="tdx">
    </div>
    <div class="d-flex justify-content-center align-items-center flex-column w-100">
      <p class="subtitle text-center"> 
        Nascida da tecnologia, a Tdx veio trazer mais. Pesquisamos, investigamos e nos atualizamos o tempo todo para encontrar a melhor forma do seu negócio ser digital.
      </p>
    </div>
    <div class="row mt-2">
      <div class="col-sm-12 col-md-3">
        <div class="box">
          <div class="w-100">
            <div class="w-100 m-auto text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/icodesign.svg" alt="design">
            </div>
            <h2>
              Design, Produtos e Plataformas
            </h2>
            <p>
              Ampliamos horizontes e garantimos a travessia do início ao fim da jornada.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-3">
        <div class="box">
          <div class="w-100">
            <div class="w-100 m-auto text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/icografico.svg" alt="grafico">
            </div>
            <h2>
              Data & Analytics
            </h2>
            <p>
              Democratizamos tecnologias e inovações do mercado em contextos reais.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-3">
        <div class="box">
          <div class="w-100">
            <div class="w-100 m-auto text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/icocode.svg" alt="code">
            </div>
            <h2>
              Modernização e Otimização de Legado
            </h2>
            <p>
              Mudar é difícil, contudo, para tornar o processo simples, apoiamos e direcionamos pessoas e negócios durante toda a jornada.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-3">
        <div class="box">
          <div class="w-100">
            <div class="w-100 m-auto text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/icogrow.svg" alt="grow">
            </div>
            <h2>
              Sustentação e Crescimento
            </h2>
            <p>
              Oferecemos serviços e plataformas que garantem clareza e segurança para cenários e ambientes complexos.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="cta w-100 d-flex align-items-center justify-content-center">
      <a class="button">CONHEÇA A TDX</a>
    </div>
  </div>
</div>

<!-- Bloco de Conteúdos -->
<div class="home-content content-inovacao">
  <div class="container pd">
    <div class="title">
      <h2 class="titleText text-center">NOSSOS CONTEÚDOS</h2>
    </div>
    <div class="row">
      <!-- content 1 -->
      <div class="col-12 col-md-4">
        <div class="cardContent p-1"> 
          <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/artigo1.png" alt="Depoimento">
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
          <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/artigo2.png" alt="Depoimento">
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
          <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/artigo3.png" alt="Depoimento">
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
  </div>
</div>

<?php get_footer(); ?>