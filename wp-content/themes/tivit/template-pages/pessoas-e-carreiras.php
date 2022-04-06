<?php /* Template Name: Pessoas e Carreiras */ ?>
<?php get_header(); ?>

<!-- Hero banner-->
<div class="pec-hero position-relative" style="background: url('<? $detect->isMobile() ? the_field('banner_mobile_pc') : the_field('banner_desktop_pc'); ?>') no-repeat center center; background-size: cover;">
  <div class="pec-hero-title">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <div class="zindex position-relative">
                <h1><?the_field('pre_chamada_pc')?></h1>
                <h2><?the_field('chamada_pc')?></h2>
                <div class="buttoncta">
                  <a href="<?the_field('link_cta')?>"><?the_field('texto_do_cta')?></a>
                </div>
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
      <p class="customNumbers"><?the_field('chamada_numeros_pc')?></p>
  </div>
</div>

<div id="pecCounter" class="lp-tbanks-conheca">
  <div class="container">
    <div class="row">
      <div class="col-12">

      <div class="numberMobile hide-desktop">
        <small><?the_field('chamada_numeros_pc')?></small>
      </div>

        <div class="lp-tbanks-credibilidade text-center">
          <div class="row">
            <div class="col-12 col-md-4 hide-mobile">
              <p class="w-100 position-relative">
                <span>
                  <b><?the_field('nota_glassdoor')?></b>
                </span>
                <img class="tag position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/glassdoor.svg" width="60" alt="Glass Door" />
              </p>
              <div class="w-100 d-flex justify-content-center align-items-center">
                  <p class="custom-text">
                    Nota Glassdoor
                  </p>
              </div>
            </div>

            <!-- Mobile section -->
            <div class="col-12 col-md-4 hide-desktop">
              <div class="row">
                <div class="col-6">
                  <p class="w-100 position-relative">
                    <span>
                      <b><?the_field('nota_glassdoor')?></b>
                    </span>
                    <img class="tag position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/glassdoor.svg" width="60" alt="Glass Door" />
                  </p>
                </div>
                <div class="col-6">
                  <div class="w-100 h-100 d-flex justify-content-start align-items-center">
                      <p class="custom-text">
                        Nota Glassdoor
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- //// Mobile section -->

            <div class="col-12 col-md-4 hide-mobile">
              <p class="w-100 position-relative">
                <span><?the_field('recomendaria_para_um_amigo')?></span>
                <img class="tag position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/greatplace.svg" width="60" alt="Great place to work tag" />
              </p>
              <div class="w-100 d-flex justify-content-center align-items-center">
                  <p class="custom-text">
                    Recomendaria para um amigo
                  </p>
              </div>
            </div>

            <!-- Mobile section -->
            <div class="col-12 col-md-4 hide-desktop">
              <div class="row">
                <div class="col-6">
                  <p class="w-100 position-relative">
                    <span>
                      <b><?the_field('recomendaria_para_um_amigo')?></b>
                    </span>
                    <img class="tag position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/greatplace.svg" width="60" alt="Great place to work tag" />
                  </p>
                </div>
                <div class="col-6">
                  <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                      <p class="custom-text">
                        Recomendaria para um amigo
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- //// Mobile section -->

            <div class="col-12 col-md-4 hide-mobile">
              <p>
                <span><?the_field('das_vagas_preenchidas_com_promocao_interna')?></span>
              </p>
              <div class="w-100 d-flex justify-content-center align-items-center">
                  <p class="custom-text">
                    Das vagas preenchidas com promoção interna
                  </p>
              </div>
            </div>  

            <!-- Mobile section -->
            <div class="col-12 col-md-4 hide-desktop">
              <div class="row">
                <div class="col-6">
                  <p class="w-100 position-relative">
                    <span>
                      <b><?the_field('das_vagas_preenchidas_com_promocao_interna')?></b>
                    </span>
                  </p>
                </div>
                <div class="col-6">
                  <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                      <p class="custom-text">
                        Das vagas preenchidas com promoção interna
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- //// Mobile section -->

          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div id="pecConheca" class="lp-tbanks-conheca">
    <div class="container">
        <div class="lp-tbanks-arrow text-center mb-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/icons/seta-red.svg" class="bounce" alt="Tbanks Saiba Mais">
        </div>
        <div class="row">
            <div class="col-12">

                <div class="lp-tbanks-conheca-content">
                    <p>
                      <?the_field('introducao_numeros_pc');?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="pecPort" class="port">
  <div class="home-portifolio">
    <div class="container">
      <div class="home-portifolio-image">
        <div class="d-flex justify-content-center w-100">
          <div id="triangle-down"></div>
        </div>
        <div class="row customposition position-relative">
          <div class="col-12">
            <div class="home-portifolio-content">
                <div class="txt">
                  <h3 class="hide-mobile">conheça nossos programas</h3>
                  <a href="#"><p class="active">TIVIT MULTICLOUD</p></a>
                  <a href="#"><p>ACELERA DEVS</p></a>
                  <a href="#"><p>Programa de Aceleração de Carreira + MOMENTO UP</p></a>
                  <a href="#"><p>Instituto TIVIT</p></a>
                  <div class="d-flex justify-content-center align-items-center flex-column hide-desktop">
                    <div class="cta">
                      <small>Na TIVIT, o Programa de Aceleração de Carreiras, nosso PAC, acontece de verdade! Ele
                      foi desenvolvido para proporcionar a todos colaboradores a possibilidade de crescer
                      profissionalmente dentro da TIVIT. </small>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-12 hide-mobile">
            <p class="position-absolute desc"> Na TIVIT, o Programa de Aceleração de Carreiras, nosso PAC, acontece de verdade! Ele
              foi desenvolvido para proporcionar a todos colaboradores a possibilidade de crescer
              profissionalmente dentro da TIVIT. </p>
        </div>
          <div class="d-flex justify-content-center mascaraDobra3 position-absolute hide-desktop">
            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/portmaskmobile.svg" alt="mask">
          </div>
        </div>
        <div class="d-flex justify-content-center mascaraDobra3 hide-mobile">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mascara_banner.svg" alt="mask">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Valorização -->
<div id="tdx" class="valorizacao">
  <div class="container">
    <div class="d-flex justify-content-center align-items-center flex-column w-100">
      <h2 class="title text-center"> 
        O QUE VALORIZAMOS E VIVENCIAMOS
      </h2>
    </div>

    <div class="row hide-mobile mt-2">
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="w-100">
            <div class="w-100 m-auto text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/atendente-icon.svg" alt="design">
            </div>
            <h2>
              Carreira e Reconhecimento
            </h2>
            <p>
              Aqui as oportunidades são reais e acontecem! 
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="w-100">
            <div class="w-100 m-auto text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mouse-icon.svg" alt="grafico">
            </div>
            <h2>
              Desenvolvimento e Aprendizagem
            </h2>
            <p>
              Seu desenvolvimento é prioridade para nós!
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="w-100">
            <div class="w-100 m-auto text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/like-icon.svg" alt="code">
            </div>
            <h2>
              Clima e Engajamento
            </h2>
            <p>
              Aqui o Clima é leve e descontraído!
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- mobile slide -->
    <div class="row mx-auto my-auto justify-content-center hide-desktop">
      <div id="contentMobileCarousel" class="carousel slide p-0" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
              <div class="carousel-item heroslide4 content active">
                <div class="col-11 m-0 p-0">
                  <div class="box">
                    <div class="w-100">
                      <div class="w-100 m-auto text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/atendente-icon.svg" alt="design">
                      </div>
                      <h2>
                        Carreira e Reconhecimento
                      </h2>
                      <p>
                        Aqui as oportunidades são reais e acontecem! 
                      </p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="carousel-item heroslide4 content">
                <div class="col-11 m-0 p-0">
                  <div class="box">
                    <div class="w-100">
                      <div class="w-100 m-auto text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mouse-icon.svg" alt="grafico">
                      </div>
                      <h2>
                        Desenvolvimento e Aprendizagem
                      </h2>
                      <p>
                        Seu desenvolvimento é prioridade para nós!
                      </p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="carousel-item heroslide4 content">
                <div class="col-11 m-0 p-0">
                  <div class="box">
                    <div class="w-100">
                      <div class="w-100 m-auto text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/like-icon.svg" alt="code">
                      </div>
                      <h2>
                        Clima e Engajamento
                      </h2>
                      <p>
                        Aqui o Clima é leve e descontraído!
                      </p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>

  </div>
</div>

<!-- Depoimentos -->
<div id="pecDepoimentos" class="lp-tbanks-depoimentos">
  <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item heroslide active">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="lp-tbanks-depoimentos-content text-center ">
                <div class="lp-tbanks-depoimentos-autor">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/cliente.svg" alt="Tbanks Saiba Mais">
                  <h3>Fulano de Tal da Silva</h3>
                  <h4>Desenvolvedor Jr.</h4>
                  <div class="redes d-flex flex-row justify-content-center align-items-center w-100">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in.svg" alt="Linkedin" class="img-fluid">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Git" class="img-fluid">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Mundo" class="img-fluid">
                  </div>
                  <p>
                  ”Através de um serviço modular, de contratação sob demanda, a TIVIT coloca sua expertise reconhecida em toda a América Latina Lorem ipsum dolor sit amet.”
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item heroslide">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
            <div class="lp-tbanks-depoimentos-content text-center ">
                <div class="lp-tbanks-depoimentos-autor">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/cliente.svg" alt="Tbanks Saiba Mais">
                  <h3>Fulano de Tal da Silva</h3>
                  <h4>Desenvolvedor Jr.</h4>
                  <div class="redes d-flex flex-row justify-content-center align-items-center w-100">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in.svg" alt="Linkedin" class="img-fluid">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Git" class="img-fluid">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Mundo" class="img-fluid">
                  </div>
                  <p>
                  ”Através de um serviço modular, de contratação sob demanda, a TIVIT coloca sua expertise reconhecida em toda a América Latina Lorem ipsum dolor sit amet.”
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item heroslide">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="lp-tbanks-depoimentos-content text-center ">
                <div class="lp-tbanks-depoimentos-autor">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/cliente.svg" alt="Tbanks Saiba Mais">
                  <h3>Fulano de Tal da Silva</h3>
                  <h4>Desenvolvedor Jr.</h4>
                  <div class="redes d-flex flex-row justify-content-center align-items-center w-100">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in.svg" alt="Linkedin" class="img-fluid">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Git" class="img-fluid">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Mundo" class="img-fluid">
                  </div>
                  <p>
                  ”Através de um serviço modular, de contratação sob demanda, a TIVIT coloca sua expertise reconhecida em toda a América Latina Lorem ipsum dolor sit amet.”
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mobileRelative">
      <button class="carousel-control-prev" type="button" data-bs-target="#recipeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#recipeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      <div class="d-flex flex-row justify-content-center counter mt-3">
        <div class="numactive"></div><div class="numseparation"></div><div class="numtotal"></div>
      </div>
    </div>
  </div>
</div>

<!-- O que a TIVIT Oferece -->
<div id="pecOferece" class="lp-tbanks-conheca">
  <div class="container">
    <div class="d-flex justify-content-center align-items-center flex-column w-100">
      <h2 class="title text-center"> 
        O que a tivit oferece
      </h2>
    </div>

    <div class="lp-tbanks-services text-center m-0 hide-mobile">      
 
      <div class="row">

        <div class="col-12 col-md-3">
          <div class="bg-white">
            <h3>Plano de carreira</h3>
            <p>Valorizamos e proporcionamos o seu desenvolvimento.Conte com a gente para que você decole na sua carreira.</p>
          </div>
        </div>
        <div class="col-12 col-md-3">
          <div class="bg-white">
            <h3>Pulses e Avaliação & Feedback 360°</h3>
            <p>Saber onde está e onde quer chegar é fundamental em nossa vida. Por isso, a avaliação, comunicação e feedback estão em nosso DNA para evolução e crescimento profissional.</p>
          </div>
        </div>

        <div class="col-12 col-md-3">
          <div class="bg-white">
            <h3>Comitês da Janela de Mérito</h3>
            <p>Comitê semestral dedicado a falar sobre quem está se destacando para aplicação de um mérito finaceiro, afinal, queremos ver seu crescimento aqui dentro.</p>
          </div>
        </div>

        <div class="col-12 col-md-3">
          <div class="bg-white">
            <h3>TechnoTIVIT</h3>
            <p>Com mais de 400 cursos disponíveis, aprendizado, certificação e desenvolvimento profissional estão em nosso dia a dia.</p>
          </div>
        </div>

      </div>

      <div class="row marginC">

        <div class="col-12 col-md-3">
          <div class="bg-white">
            <h3>TIVIT Community</h3>
            <p>Nossa Comunidade Técnica para incentivo a inovação e o crescimento coletivo, compartilhando conhecimentos dentro de uma comunidade orgânica e diversa.</p>
          </div>
        </div>
        <div class="col-12 col-md-3">
          <div class="bg-white">
            <h3>TIVIT CLUB</h3>
            <p>Programa de parcerias de benefícios com descontos exclusivos em vários segmentos para os nossos colaboradores.</p>
          </div>
        </div>

        <div class="col-12 col-md-3">
          <div class="bg-white">
            <h3>Vivaz</h3>
            <p>O programa de Qualidade de Vida de A a Z, com lives voltadas para a qualidade de vida, Newsletters mensais , informes médicos semanais em nossos canais de comunicação.</p>
          </div>
        </div>

        <div class="col-12 col-md-3">
          <div class="bg-white">
            <h3>Trabalho Remoto</h3>
            <p>Se o seu trabalho pode ser feito de casa, estaremos conectados, mesmo que distantes, mas com o mesmo propósito.</p>
          </div>
        </div>

      </div>

    </div>

    <!-- Bloco Mobile Carrossel -->
    <div class="lp-tbanks-services text-center m-0 hide-desktop"> 
      <div id="carouselCustom" class="container-fluid p-0 text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="offerCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item heroslide6 active">
                  <div class="col-11 col-md-3">
                    <div class="bg-white">
                      <h3>Plano de carreira</h3>
                      <p>Valorizamos e proporcionamos o seu desenvolvimento.Conte com a gente para que você decole na sua carreira.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item heroslide6">
                  <div class="col-11 col-md-3">
                    <div class="bg-white">
                      <h3>Pulses e Avaliação & Feedback 360°</h3>
                      <p>Saber onde está e onde quer chegar é fundamental em nossa vida. Por isso, a avaliação, comunicação e feedback estão em nosso DNA para evolução e crescimento profissional.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item heroslide6">
                  <div class="col-11 col-md-3">
                    <div class="bg-white">
                      <h3>Comitês da Janela de Mérito</h3>
                      <p>Comitê semestral dedicado a falar sobre quem está se destacando para aplicação de um mérito finaceiro, afinal, queremos ver seu crescimento aqui dentro.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item heroslide6">
                  <div class="col-11 col-md-3">
                    <div class="bg-white">
                      <h3>TechnoTIVIT</h3>
                      <p>Com mais de 400 cursos disponíveis, aprendizado, certificação e desenvolvimento profissional estão em nosso dia a dia.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item heroslide6">
                  <div class="col-11 col-md-3">
                    <div class="bg-white">
                      <h3>TIVIT Community</h3>
                      <p>Nossa Comunidade Técnica para incentivo a inovação e o crescimento coletivo, compartilhando conhecimentos dentro de uma comunidade orgânica e diversa.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item heroslide6">
                  <div class="col-11 col-md-3">
                    <div class="bg-white">
                      <h3>TIVIT CLUB</h3>
                      <p>Programa de parcerias de benefícios com descontos exclusivos em vários segmentos para os nossos colaboradores.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item heroslide6">
                  <div class="col-11 col-md-3">
                    <div class="bg-white">
                      <h3>Vivaz</h3>
                      <p>O programa de Qualidade de Vida de A a Z, com lives voltadas para a qualidade de vida, Newsletters mensais , informes médicos semanais em nossos canais de comunicação.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item heroslide6">
                  <div class="col-11 col-md-3">
                    <div class="bg-white">
                      <h3>Trabalho Remoto</h3>
                      <p>Se o seu trabalho pode ser feito de casa, estaremos conectados, mesmo que distantes, mas com o mesmo propósito.</p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="insiderBlock d-flex justify-content-center align-items-center flex-column w-100">
      <h2 class="title text-center"> 
        Nossos Benefícios
      </h2>
    </div>

    <!-- first row -->
    <div class="row hide-mobile">
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="d-flex flex-column justify-content-start align-items-center w-100 h-100 margin-auto text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/heart.svg" alt="Privally">
            <div class="content">
              <h2>CESTA DE BENEFÍCIOS</h2>
              <p>
                Vale Refeição/Alimentação<br>
                Vale transporte<br>
                Estacionamento
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="d-flex flex-column justify-content-start align-items-center w-100 h-100 margin-auto text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/hand-heart.svg" alt="Iambda">
            <div class="content">
              <h2>CUIDADO & APOIO</h2>
              <p>
                Auxílio Creche<br>
                Auxílio Home Office<br>
                Parcerias com Universidades e Escolas de Idioma<br>
                Campanha #EUINDICO<br>
                PPR - Programa de Participação nos Resultados
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="d-flex flex-column justify-content-start align-items-center w-100 h-100 margin-auto text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/shield.svg" alt="Stone Age">
            <div class="content">
              <h2>SAÚDE & VIDA</h2>
              <p>
                Plano de Saúde<br>
                Plano Odontológico<br>
                Convênio Farmácia<br>
                Seguro de Vida
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bloco Mobile Carrossel -->
    <div id="carouselCustom" class="container-fluid p-0 text-center my-3 hide-desktop">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="offerCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item heroslide5 active">
                  <div class="col-11 col-md-3">
                    <div class="box">
                      <div class="d-flex flex-column justify-content-start align-items-center w-100 h-100 margin-auto text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/heart.svg" alt="Privally">
                        <div class="content">
                          <h2>CESTA DE BENEFÍCIOS</h2>
                          <p>
                            Vale Refeição/Alimentação<br>
                            Vale transporte<br>
                            Estacionamento
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item heroslide5">
                  <div class="col-11 col-md-3">
                    <div class="box">
                      <div class="d-flex flex-column justify-content-start align-items-center w-100 h-100 margin-auto text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/hand-heart.svg" alt="Iambda">
                        <div class="content">
                          <h2>CUIDADO & APOIO</h2>
                          <p>
                            Auxílio Creche<br>
                            Auxílio Home Office<br>
                            Parcerias com Universidades e Escolas de Idioma<br>
                            Campanha #EUINDICO<br>
                            PPR - Programa de Participação nos Resultados
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item heroslide5">
                  <div class="col-11 col-md-3">
                    <div class="box">
                      <div class="d-flex flex-column justify-content-start align-items-center w-100 h-100 margin-auto text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/shield.svg" alt="Stone Age">
                        <div class="content">
                          <h2>SAÚDE & VIDA</h2>
                          <p>
                            Plano de Saúde<br>
                            Plano Odontológico<br>
                            Convênio Farmácia<br>
                            Seguro de Vida
                          </p>
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
</div>

<!-- Conheça a nossa equipe -->
<div id="pecConheca" class="lp-tbanks-conheca">
<div id="triangle-down"></div>
  <div class="container">
    <div class="d-flex justify-content-center align-items-center flex-column w-100">
      <h2 class="title text-center"> 
        CONHEÇA A NOSSA EQUIPE
      </h2>
    </div>

    <!-- Bloco Carrossel Infinito -->
    <div id="carouselCustom" class="container-fluid text-center my-3">
      <div class="row mx-auto my-auto justify-content-center">
          <div id="esg" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item heroslide2 active">
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
              <div class="carousel-item heroslide2">
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
              <div class="carousel-item heroslide2">
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
              <div class="carousel-item heroslide2">
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
              <div class="carousel-item heroslide2">
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
          <div class="d-flex justify-content-center mt-5">
            <a class="carousel-control-prev bg-transparent w-aut" href="#esg" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <div class="d-flex flex-row counter2">
              <div class="numactive2"></div><div class="numseparation2"></div><div class="numtotal2"></div>
            </div>
            <a class="carousel-control-next bg-transparent w-aut" href="#esg" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>

<!-- depoimentos internos -->
<div id="pecInterno">

  <div id="pecInternoDepoimentos" class="lp-tbanks-depoimentos">
    <div id="recipeCarouselInterno" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item heroslide3 active">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="lp-tbanks-depoimentos-content text-center ">
                  <div class="lp-tbanks-depoimentos-autor">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/cliente.svg" alt="Tbanks Saiba Mais">
                    <h3>Fulano de Tal da Silva</h3>
                    <h4>CTO, trabalha há 5 anos na TIVIT.</h4>
                    <div class="redes d-flex flex-row justify-content-center align-items-center w-100">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in.svg" alt="Linkedin" class="img-fluid">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Git" class="img-fluid">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Mundo" class="img-fluid">
                    </div>
                    <p>
                    ”Através de um serviço modular, de contratação sob demanda, a TIVIT coloca sua expertise reconhecida em toda a América Latina Lorem ipsum dolor sit amet.”
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item heroslide3">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
              <div class="lp-tbanks-depoimentos-content text-center ">
                  <div class="lp-tbanks-depoimentos-autor">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/cliente.svg" alt="Tbanks Saiba Mais">
                    <h3>Fulano de Tal da Silva</h3>
                    <h4>CTO, trabalha há 5 anos na TIVIT.</h4>
                    <div class="redes d-flex flex-row justify-content-center align-items-center w-100">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in.svg" alt="Linkedin" class="img-fluid">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Git" class="img-fluid">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Mundo" class="img-fluid">
                    </div>
                    <p>
                    ”Através de um serviço modular, de contratação sob demanda, a TIVIT coloca sua expertise reconhecida em toda a América Latina Lorem ipsum dolor sit amet.”
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item heroslide3">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="lp-tbanks-depoimentos-content text-center ">
                  <div class="lp-tbanks-depoimentos-autor">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/cliente.svg" alt="Tbanks Saiba Mais">
                    <h3>Fulano de Tal da Silva</h3>
                    <h4>CTO, trabalha há 5 anos na TIVIT.</h4>
                    <div class="redes d-flex flex-row justify-content-center align-items-center w-100">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in.svg" alt="Linkedin" class="img-fluid">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Git" class="img-fluid">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Mundo" class="img-fluid">
                    </div>
                    <p>
                    ”Através de um serviço modular, de contratação sob demanda, a TIVIT coloca sua expertise reconhecida em toda a América Latina Lorem ipsum dolor sit amet.”
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex flex-row justify-content-center counter3 mt-3 mobileRelative position-relative">
        <div class="numactive3"></div><div class="numseparation3"></div><div class="numtotal3"></div>
        <button class="carousel-control-prev" type="button" data-bs-target="#recipeCarouselInterno" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#recipeCarouselInterno" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

</div>

<div id="pecVagas">
  <div id="triangle-down"></div>
  <div class="container">
    <div class="d-flex justify-content-center align-items-center flex-column w-100">
      <h2 class="title text-center"> 
        VAGAS
      </h2>
    </div>
    <div class="row items m-0 m-md-auto">
      <div class="col-sm-12 col-md-4">
        <div class="card">
          <small>Profissional iniciante</small>
          <h2>Package Consultant-SAP BW Analytics</h2>
          <p>Descritivo breve lorem ipsum dolor.</p>
          <a>confira esta vaga</a>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="card">
          <small>Profissional iniciante</small>
          <h2>Package Consultant-SAP BW Analytics</h2>
          <p>Descritivo breve lorem ipsum dolor.</p>
          <a>confira esta vaga</a>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="card">
          <small>Profissional iniciante</small>
          <h2>Package Consultant-SAP BW Analytics</h2>
          <p>Descritivo breve lorem ipsum dolor.</p>
          <a>confira esta vaga</a>
        </div>
      </div>
    </div>
    <div class="btnCta d-flex justify-content-center align-items-center w-100">
      <a>
        Ver todas AS VAGAS
      </a>
    </div>

    <div id="faq" class="d-flex flex-column align-items-center justify-content-center insiderBlock">
      <div class="d-flex justify-content-center align-items-center flex-column w-100">
        <h2 class="title text-center"> 
          ainda tem dúvidas? veja as perguntas frequentes:
        </h2>
      </div>

      <div class="w-100 block">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Plano de carreira, regime de trabalho e benefícios?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Com o que a TIVIT trabalha?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Onde ficam os escritórios da TIVIT?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                Quais são as unidades de negócios (BUs) da TIVIT?
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php get_footer(); ?>