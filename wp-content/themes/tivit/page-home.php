<?php get_header(); ?>

<div class="home-hero">

  <div id="hero" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <div class="carousel-inner text-center">
      <div class="carousel-item heroslide active">
        <div class="content">
          <img class="hide-mobile maskImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/img_slider1.jpg" alt="slide1" />
          <img class="hide-mobile mask" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mascara_slider_v.svg" alt="mask" />
          <div class="title position-absolute">
            <h1>Seu futuro, nosso desafio</h1>
          </div>
        </div>
      </div>
      <div class="carousel-item heroslide">
        <div class="content">
          <img class="hide-mobile maskImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/img_slider2.jpg" alt="slide2" />
          <img class="hide-mobile mask" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mascara_slider_v.svg" alt="mask" />
          <div class="title position-absolute">
            <h1>Seu futuro, nosso desafio(2)</h1>
          </div>
        </div>
      </div>
      <div class="carousel-item heroslide">
        <div class="content">
          <img class="hide-mobile maskImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/img_slider3.jpg" alt="slide3" />
          <img class="hide-mobile mask" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mascara_slider_v.svg" alt="mask" />
          <div class="title position-absolute">
            <h1>Seu futuro, nosso desafio(3)</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="navigation">
            <button class="carousel-control-prev hide-mobile" type="button" data-bs-target="#hero" data-bs-slide="prev">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/arrow_left.png" alt="arrow_left">
            </button>
            <div class="d-flex flex-row counter hide-mobile">
              <div class="numactive"></div><div class="numseparation"></div><div class="numtotal"></div>
            </div>
            <button class="carousel-control-next hide-mobile" type="button" data-bs-target="#hero" data-bs-slide="next">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/arrow_right.png" alt="arrow_right">
            </button>
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#hero" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Hero 1"></button>
              <button type="button" data-bs-target="#hero" data-bs-slide-to="1" aria-label="Hero 2"></button>
              <button type="button" data-bs-target="#hero" data-bs-slide-to="2" aria-label="Hero 3"></button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="redes hide-mobile">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/linkedin-white.svg"  alt="Linkedin">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/instagram-white.svg"  alt="Instagram">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/twitter-white.svg"  alt="Twitter">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/youtube-white.svg"  alt="Youtube">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/facebook-white.svg"  alt="Facebook">
        </div>
      </div>
    </div>
  </div>

</div>

<div class="home-intro">
  <div class="w-100 transition">
    <img class="imgtransition position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/trans1flp.svg" alt="transition1">
  </div>
  <div class="container pcustom">
    <div class="row">
      <div class="col-12">
        <div class="arrow text-center">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icons/seta-red.svg" alt="Saiba Mais">
        </div>
        <p class="mt-3">
          Dentre as maiores empresas do Brasil, a <span>TIVIT</span> proporciona soluções flexíveis para 8 a cada 10.
        </p>
        <div class="botao">
          <a href="#" class="btn btn-primary">Saiba Mais</a>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="port">
  <div class="d-flex justify-content-center bgport position-absolute">
  </div>
  <div class="home-portifolio">
    <div class="container">
      <div class="home-portifolio-image">
        <div class="d-flex justify-content-center w-100">
          <div id="triangle-down"></div>
        </div>
        <div class="row customposition">
          <div class="col-12">
            <div class="home-portifolio-content">
                <div class="txt">
                  <h3>Possuímos um portfolio diverso</h3>
                  <a href="#"><p class="active">Meios de pagamento</p></a>
                  <a href="#">
                    <p>Serviços financeiros</p>
                  </a>
                  <a href="#"><p>Manufatura</p></a>
                  <a href="#"><p>Utilities</p></a>
                  <a href="#"><p>Varejo</p></a>
                  <div class="botao">
                    <a href="#" class="btn btn-primary">Conheça nossos produtos</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center mascaraDobra3 hide-mobile">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mascara_banner.svg" alt="banner">
        </div>
      </div>
    </div>
  </div>
</section>

<div class="home-content">
<div class="d-flex justify-content-center transitionContent position-absolute"></div>
<div id="triangle-down"></div>
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
    <div class="d-flex justify-content-center align-items-center btn">
      <button class="btncontent">VER TODOS OS NOSSOS CONTEÚDOS</button>
    </div>
  </div>
</div>

<div class="home-cases">
  <div class="d-flex justify-content-center transitionCases position-absolute"></div>
  <div class="d-flex justify-content-center bgtriangulo position-absolute"></div>
  <div class="container divOpacity">
    <div class="row d-flex justify-content-center align-items-center position-absolute m-0 lr">

      <div class="home-cases-title">
        <h2>Nossos Cases</h2>
        <p class="paragrafo2 hide-mobile">Lorem ipsum dolor sit amet, consectetur.</p>
      </div>
      <div class="col-12">
        <div id="carouselExampleControls" class="carousel slide hide-desktop" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="home-cases-content text-center ">
                      <div class="home-cases-autor">
                        <h3>Nome Cliente 1</h3>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur velit justo, et fermentum purus gravida quis. Pellentesque dapibus dui turpis, non.
                        </p>
                      </div>
                      <div class="botao">
                        <a href="#" class="btn btn-primary">Ver Case</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="home-cases-content text-center ">
                      <div class="home-cases-autor">
                        <h3>Nome Cliente 1</h3>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur velit justo, et fermentum purus gravida quis. Pellentesque dapibus dui turpis, non.
                        </p>
                      </div>
                      <div class="botao">
                        <a href="#" class="btn btn-primary">Ver Case</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="home-cases-content text-center">
                      <div class="home-cases-autor">
                        <h3>Nome Cliente 1</h3>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur velit justo, et fermentum purus gravida quis. Pellentesque dapibus dui turpis, non.
                        </p>
                      </div>
                      <div class="botao">
                        <a href="#" class="btn btn-primary">Ver Case</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="home-cases-content left text-center hide-mobile">
          <div class="row d-flex justify-content-center">
            <div class="d-flex customContainer">
              <div class="col-md-4">
                  <div class="cardCases bg1 m-3">
                    <div class="overlay"></div>
                    <img class="w-100 h-100 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg1.png" alt="backgroundcase1">
                    <div class="textCase">
                    <h3> NOME DO CLIENTE 1 </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur velit justo, et fermentum purus gravida quis.</p>
                      <div class="w-100 d-flex text-left">
                        <a>VER CASE</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="cardCases bg2 m-3">
                    <div class="overlay"></div>
                    <img class="w-100 h-100 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg2.png" alt="backgroundcase2">
                    <div class="textCase">
                    <h3> NOME DO CLIENTE 2 </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur velit justo, et fermentum purus gravida quis.</p>
                      <div class="w-100 d-flex text-left">
                        <a>VER CASE</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="cardCases bg3 m-3">
                    <div class="overlay"></div>
                    <img class="w-100 h-100 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg3.png" alt="backgroundcase3">
                    <div class="textCase">
                    <h3> NOME DO CLIENTE 3 </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur velit justo, et fermentum purus gravida quis.</p>
                      <div class="w-100 d-flex text-left">
                        <a>VER CASE</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="d-flex justify-content-center align-items-center btn mt-4">
                  <button class="btncontent">VER TODOS OS CASES</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<section class="pessoasCarreiras">
  <div class="d-flex justify-content-center transCarreiras position-absolute"></div>
  <div class="d-flex justify-content-center home-pessoas-e-carreiras">
  <div id="triangle-down" class=""></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="home-pessoas-e-carreiras-title">
            <h2>Pessoas e Carreiras</h2>
            <p class="hide-mobile">Você está preparado para o futuro?
            </br>Aqui na TIVIT, temos a resposta que você precisa.</p>
          </div>
          <div class="botao">
            <a href="#">Saiba mais</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="partners">
  <div class="container">
    <div class="title w-100">
      <h2 class="text-center"> Com quem trabalhamos </h2>
    </div>
    <div class="d-flex justify-content-between">
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/anima.svg" alt="Anima logo">
      </a>
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/cielo.svg" alt="Cielo logo">
      </a>
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/google.svg" alt="Google logo">
      </a>
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/itau.svg" alt="Itau logo">
      </a>
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/johnson.svg" alt="Johnson logo">
      </a>
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/nestle.svg" alt="Nestle logo">
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>