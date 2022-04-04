<?php /* Template Name: Cases */ ?>
<?php get_header(); ?>

<div class="cases-hero position-relative">
  <div class="cases-hero-title">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <div class="zindex textBanner">
              <h1>Cases</h1>
              <h2>Nome do cliente videocase Lorem ipsum</h2>
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

<div class="cases-depoimentos text-center">
  <div class="container">
    <div class="row">
      <div class="img">
        <img src="<?=get_post_meta( get_the_ID(), 'depoimento_imagem-da-pessoa', true );?>" alt="Depoimento">
      </div>
      <div class="title-autor">
          <h3><?=get_post_meta( get_the_ID(), 'depoimento_nome', true );?></h3>
      </div>
      <div class="desc-autor">
          <p><?=get_post_meta( get_the_ID(), 'depoimento_funcao', true );?></p>
      </div>
      <div class="depoimento">
          <p><span>”</span><?=get_post_meta( get_the_ID(), 'depoimento_depoimento', true );?><span>”</span></p>
      </div>
    </div>
  </div>
</div>

<div class="a-tivit-cases cases">
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

<div class="cases-recentes">
  <!--- Desktop -->
  <div class="container hide-mobile">

    <div class="row">
      <div class="col-7">
        <div class="assuntos">
          <h4>escolha um ou mais assuntos</h4>
          <a href="#" class="active">Todos</a>
          <a href="#">press release</a>
          <a href="#">conta híbrida</a>
          <a href="#">varejo</a>
          <a href="#">financeiro</a>
          <a href="#">agro</a>
          <a href="#">manufatura</a>
          <a href="#">cloud</a>
          <a href="#">meios de pagamento</a>
          <a href="#">tdx</a>
          <a href="#">CYBERSECURIty</a>
          <a href="#">utilities</a>
          <a href="#">serviços financeiros</a>
        </div>
      </div>
      <div class="col-5">
        <div class="filtros">
          <div class="select">
            <select name="">
              <option value="">Filtrar por</option>
              <option value="">Mais recentes</option>
              <option value="">Mais antigos</option>
              <option value="">A-Z</option>
              <option value="">Z-A</option>
            </select>
          </div>

          <div class="search">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/nav/search-white.svg" alt="Search Tivit"></a>
          </div>
        </div>
      </div>
    </div>



    <div class="row">
      <?php

      for($i = 0; $i < 6; $i++){
      ?>
        <div class="col-12 col-md-4">
          <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/cases/01.svg" alt="Depoimento">
          </div>
          <div class="autor-time">
            <p>Cliente: <b>Nome cliente</b></p>
          </div>
          <div class="content">
            <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
          </div>
          <div class="detalhes">
            <a href="#">conta híbrida</a>
            <a href="#">varejo</a>
          </div>
          <div class="acessar">
            <a href="#">acessar case <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow.svg" class="hide-desktop" alt="Saiba Mais"></a>
          </div>
        </div>    
      <?php
      }
      ?>
    </div>


  </div>
  <!--- End Desktop -->

  <!--- Mobile -->
  <div id="cases" class="carousel slide carousel-fade hide-desktop" data-bs-ride="carousel">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="filtros">
            
            <div class="select">
              <select name="">
                <option value="">escolha um ou mais assuntos</option>
                <option value="">Mais recentes</option>
                <option value="">Mais antigos</option>
                <option value="">A-Z</option>
                <option value="">Z-A</option>
              </select>
            </div>          

            <div class="divisao">
              <div class="select">
                <select name="">
                  <option value="">Filtrar por</option>
                  <option value="">Mais recentes</option>
                  <option value="">Mais antigos</option>
                  <option value="">A-Z</option>
                  <option value="">Z-A</option>
                </select>
              </div>

              <div class="search">
                <a href="#">Buscar <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/nav/search-white.svg" alt="Search Tivit"></a>
              </div>
            </div>

          </div>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="col-12 col-md-4">
              <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/cases/01.svg" alt="Depoimento">
              </div>
              <div class="autor-time">
                <p>Cliente: <strong>Nome do cliente</strong></p>
              </div>
              <div class="content">
                <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
              </div>
              <div class="detalhes">
                <a href="#">conta híbrida</a>
                <a href="#">varejo</a>
              </div>

              <div class="acessar">
                <a href="#">acessar case <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow-red.svg" class="hide-desktop" alt="Saiba Mais"></a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-12 col-md-4">
              <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/cases/01.svg" alt="Depoimento">
              </div>
              <div class="autor-time">
                <p>Cliente: <strong>Nome do cliente</strong></p>
              </div>
              <div class="content">
                <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
              </div>
              <div class="detalhes">
                <a href="#">conta híbrida</a>
                <a href="#">varejo</a>
              </div>

              <div class="acessar">
                <a href="#">acessar case <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow-red.svg" class="hide-desktop" alt="Saiba Mais"></a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-12 col-md-4">
              <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/cases/01.svg" alt="Depoimento">
              </div>
              <div class="autor-time">
                <p>Cliente: <strong>Nome do cliente</strong></p>
              </div>
              <div class="content">
                <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
              </div>
              <div class="detalhes">
                <a href="#">conta híbrida</a>
                <a href="#">varejo</a>
              </div>

              <div class="acessar">
                <a href="#">acessar case <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow-red.svg" class="hide-desktop" alt="Saiba Mais"></a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-12 col-md-4">
              <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/cases/01.svg" alt="Depoimento">
              </div>
              <div class="autor-time">
                <p>Cliente: <strong>Nome do cliente</strong></p>
              </div>
              <div class="content">
                <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
              </div>
              <div class="detalhes">
                <a href="#">conta híbrida</a>
                <a href="#">varejo</a>
              </div>

              <div class="acessar">
                <a href="#">acessar case <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow-red.svg" class="hide-desktop" alt="Saiba Mais"></a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6">
            <div class="slider-cases">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#cases" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Cases 1">1</button>
                <button type="button" data-bs-target="#cases" data-bs-slide-to="1" aria-label="Cases 2">2</button>
                <button type="button" data-bs-target="#cases" data-bs-slide-to="2" aria-label="Cases 3">3</button>
                <button type="button" data-bs-target="#cases" data-bs-slide-to="3" aria-label="Cases 4">4</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--- End Mobile -->
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

<?php get_footer(); ?>