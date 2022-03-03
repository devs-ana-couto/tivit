<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<div class="home-hero">

  <div id="hero" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <div class="carousel-inner text-center">
      <div class="carousel-item heroslide active">
        <div class="content">
          <img class="hide-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/slider1.png" alt="slide1" />
          <div class="title position-absolute">
            <h1>Seu futuro, nosso desafio</h1>   
          </div>       
        </div>
      </div>
      <div class="carousel-item heroslide">
        <div class="content">
          <img class="hide-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/slider2.png" alt="slide2" />
          <div class="title position-absolute">
            <h1>Seu futuro, nosso desafio(2)</h1>   
          </div>       
        </div>
      </div>
      <div class="carousel-item heroslide">
        <div class="content">
          <img class="hide-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/slider1.png" alt="slide3" />
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
            <button class="carousel-control-prev" type="button" data-bs-target="#hero" data-bs-slide="prev">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/arrow_left.png" alt="arrow_left">
            </button>
            <div class="d-flex flex-row counter hide-mobile">
              <div class="numactive"></div><div class="numseparation"></div><div class="numtotal"></div>
            </div>
            <button class="carousel-control-next" type="button" data-bs-target="#hero" data-bs-slide="next">
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
    <img class="img-fluid imgtransition position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/trans1.svg"  alt="transition1">
  </div>
  <div class="container pcustom">
    <div class="row">
      <div class="col-12">
        <div class="to  text-center">
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
      <div class="row">
        <div class="col-12">
          <div class="home-portifolio-content">
              <div class="txt">
              <h3>Possuímos um portifólio diverso</h3>
              <p>Meios de pagamento <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icons/arrow-right-red.svg" class="hide-arrow" alt="Meios de pagamento"></p>
              <p>Serviços financeiros <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icons/arrow-right-red.svg" class="hide-arrow" alt="Serviços financeiros"></p>
              <p>Manufatura <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icons/arrow-right-red.svg" class="hide-arrow" alt="Manufatura"></p>
              <p>Utilities <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icons/arrow-right-red.svg" class="hide-arrow" alt="Utilities"></p>
              <p>Varejo <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icons/arrow-right-red.svg" class="hide-arrow" alt="Varejo"></p>
              <div class="botao">
                <a href="#" class="btn btn-primary">Conheça nossos produtos</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="home-cases">
  <div class="container">
    <div class="row">
      <div class="home-cases-title">
        <h2>Nossos Cases</h2>
        <p class="paragrafo2 hide-mobile">Lorem ipsum dolor sit amet, consectetur.</p>
      </div>
      <div class="col-12 col-md-6">
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
        <div class="col-md-6 hide-mobile">
          <div class="home-cases-content right text-center">
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

<div class="home-pessoas-e-carreiras">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="home-pessoas-e-carreiras-title">
          <h2>Pessoas e Carreiras</h2>
          <p class="hide-mobile">Você está preparado para o futuro? 
          </br>Aqui na TIVIT, temos a resposta que você precisa.</p>
        </div>
        <div class="botao">
          <a href="#" class="btn btn-primary">Acesse para saber mais</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>