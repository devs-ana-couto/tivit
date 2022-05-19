<?php /* Template Name: Ventures */ ?>

<?php get_header(); ?>
<!-- Hero banner-->
<div class="ventures-hero position-relative" style="background: url('<? $detect->isMobile() ? the_field('banner_mobile_ventures') : the_field('banner_desktop_ventures'); ?>') no-repeat center center; background-size: cover;">
  <div class="ventures-hero-title">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="d-flex justify-content-center align-items-center flex-column position-relative zindex">
            <h1><?the_field('pre_chamada_ventures');?></h1>
            <h2 class="hide-mobile"><?the_field('chamada_ventures');?></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="customMargin d-flex justify-content-center align-items-center hide-mobile">
      <img class="mask w-100 position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/v_slider_home.svg" alt="mask" />
  </div>
  <div class="ventures-hero-content hide-desktop">
    <h2><?the_field('chamada_ventures');?></h2>
  </div>

  <div class="maskDiv text-center hide-desktop">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/banner-mask.svg" class="position-absolute mask" alt="Máscara">
  </div>
</div>


<!-- Sobre -->
<div class="a-tivit-sobre ventures">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?the_field('chamada_para_conteudo');?>
      </div>
    </div>
  </div>
</div>


<!-- TDX Ventures -->
<div id="tdx" class="tdx ventures">
  <div class="container">
    <div class="title w-100 text-center m-auto">
      <h2><?the_field('chamada_como_investimos');?></h2>
    </div>

    <div class="row mt-2 hide-mobile">
      <div class="col-sm-12 col-md-3">
        <div class="box">
          <div class="w-100">
            <div class="w-100 m-auto text-center">
            <img src="<?the_field('item_1_-_logo')?>" alt="<?the_field('item_1_-_nome')?>">
            </div>
            <h2>
              <?the_field('item_1_-_nome')?>
            </h2>
            <p>
            <?the_field('item_1_-_descricao')?>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-3">
        <div class="box">
          <div class="w-100">
            <div class="w-100 m-auto text-center">
            <img src="<?the_field('item_2_-_logo')?>" alt="<?the_field('item_2_-_nome')?>">
            </div>
            <h2>
              <?the_field('item_2_-_nome')?>
            </h2>
            <p>
            <?the_field('item_2_-_descricao')?>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-3">
        <div class="box">
          <div class="w-100">
            <div class="w-100 m-auto text-center">
              <img src="<?the_field('item_3_-_logo')?>" alt="<?the_field('item_3_-_nome')?>">
            </div>
            <h2>
              <?the_field('item_3_-_nome')?>
            </h2>
            <p>
            <?the_field('item_3_-_descricao')?>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-3">
        <div class="box">
          <div class="w-100">
            <div class="w-100 m-auto text-center">
            <img src="<?the_field('item_4_-_logo')?>" alt="<?the_field('item_4_-_nome')?>">
            </div>
            <h2>
              <?the_field('item_4_-_nome')?>
            </h2>
            <p>
            <?the_field('item_4_-_descricao')?>
          </div>
        </div>
      </div>
    </div>

    <!-- mobile slide -->
    <div class="row mx-auto my-auto justify-content-center mt-3 mt-md-0 hide-desktop">
      <div id="tdxMobileCarousel" class="carousel slide p-0" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item heroslide3 tdx active">
            <div class="col-11 m-0 p-0">
              <div class="box">
                <div class="w-100">
                  <div class="w-100 m-auto text-center">
                    <img src="<?the_field('item_1_-_logo')?>" alt="<?the_field('item_1_-_nome')?>">
                  </div>
                  <h2>
                    <?the_field('item_1_-_nome')?>
                  </h2>
                  <p>
                    <?the_field('item_1_-_descricao')?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item heroslide3 tdx">
            <div class="col-11 m-0 p-0">
              <div class="box">
                <div class="w-100">
                  <div class="w-100 m-auto text-center">
                    <img src="<?the_field('item_2_-_logo')?>" alt="<?the_field('item_2_-_nome')?>">
                  </div>
                  <h2>
                    <?the_field('item_2_-_nome')?>
                  </h2>
                  <p>
                    <?the_field('item_2_-_descricao')?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item heroslide3 tdx">
            <div class="col-11 m-0 p-0">
              <div class="box">
                <div class="w-100">
                  <div class="w-100 m-auto text-center">
                    <img src="<?the_field('item_3_-_logo')?>" alt="<?the_field('item_3_-_nome')?>">
                  </div>
                  <h2>
                    <?the_field('item_3_-_nome')?>
                  </h2>
                  <p>
                    <?the_field('item_3_-_descricao')?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item heroslide3 tdx">
            <div class="col-11 m-0 p-0">
              <div class="box">
                <div class="w-100">
                  <div class="w-100 m-auto text-center">
                    <img src="<?the_field('item_4_-_logo')?>" alt="<?the_field('item_4_-_nome')?>">
                  </div>
                  <h2>
                    <?the_field('item_4_-_nome')?>
                  </h2>
                  <p>
                    <?the_field('item_4_-_descricao')?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="cta w-100 d-flex align-items-center justify-content-center">
      <a href="<?the_field('cta_url_como_investimos')?>" class="button"><?the_field('cta_texto_como_investimos')?></a>
    </div>
  </div>
</div>


<!-- Bloco Ventures -->
<div id="ventures">
  <div class="d-flex flex-column container w-100 text-center justify-content-center align-items-center">
    <h2>EMPRESAS NA VENTURES</h2>
    <p>A TIVIT Ventures é o nosso braço de compra e criação de empresas. Só no último ano,
      investimos x milhões de reais na transformação de startups! Assim a gente continua sendo relevante para a tecnologia... Todos os dias.</p>
  </div>
  <div class="container mt-5 mb-5">
    <!-- first row -->
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="d-flex justify-content-center align-items-center w-100  margin-auto text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/privally.svg" alt="Privally">
          </div>
          <p>A Privally é a primeira startup a entrar para a TIVIT Ventures, focada em gerenciamento de segurança. Como acontece em todas as aquisições, suas operações continuarão a atuar de forma independente.</p>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="d-flex justify-content-center align-items-center w-100  margin-auto text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/iambda.svg" alt="Iambda">
          </div>
          <p>A Privally é a primeira startup a entrar para a TIVIT Ventures, focada em gerenciamento de segurança. Como acontece em todas as aquisições, suas operações continuarão a atuar de forma independente.</p>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="d-flex justify-content-center align-items-center w-100  margin-auto text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/stoneage.svg" alt="Stone Age">
          </div>
          <p>A Privally é a primeira startup a entrar para a TIVIT Ventures, focada em gerenciamento de segurança. Como acontece em todas as aquisições, suas operações continuarão a atuar de forma independente.</p>
        </div>
      </div>
    </div>
    <!-- sec row -->
    <div class="row mt-0 mt-md-4">
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="d-flex justify-content-center align-items-center w-100  margin-auto text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/devapi.svg" alt="Dev API">
          </div>
          <p>A Privally é a primeira startup a entrar para a TIVIT Ventures, focada em gerenciamento de segurança. Como acontece em todas as aquisições, suas operações continuarão a atuar de forma independente.</p>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="d-flex justify-content-center align-items-center w-100  margin-auto text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/tbanks.svg" alt="TBanks">
          </div>
          <p>A Privally é a primeira startup a entrar para a TIVIT Ventures, focada em gerenciamento de segurança. Como acontece em todas as aquisições, suas operações continuarão a atuar de forma independente.</p>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="d-flex justify-content-center align-items-center w-100  margin-auto text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/cybersec.svg" alt="Cyber Security">
          </div>
          <p>A Privally é a primeira startup a entrar para a TIVIT Ventures, focada em gerenciamento de segurança. Como acontece em todas as aquisições, suas operações continuarão a atuar de forma independente.</p>
        </div>
      </div>
    </div>

    <div id="triangle-down"></div>
  </div>
</div>

<!-- Bloco de Conteúdos -->
<div id="contentTdx" class="home-content content-inovacao">
<div id="triangle-down"></div>
  <div class="container pd">
    <div class="title">
      <h2 class="titleText text-center">NOSSOS CONTEÚDOS</h2>
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


<!-- Próximas apresentações -->
<section class="apresentacoes text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>prÓximas apresentaçÕes de startups</h2>
        <p class="paragrafo2">Conheça ainda mais de perto o que fazemos. Marque na sua agenda os nossos próximos encontros para inovar.</p>
      </div>
    </div>

    <div class="row mt-5 hide-mobile">
      <div class="col-4">
        <div class="box">
          <h3>
            10/10/2021
          </h3>
          <p class="paragrafo3">Nesse dia lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
      </div>
      <div class="col-4">
        <div class="box">
          <h3>
            15/10/2021
          </h3>
          <p class="paragrafo3">Nesse dia lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
      </div>
      <div class="col-4">
        <div class="box">
          <h3>
            02/11/2021
          </h3>
          <p class="paragrafo3">Nesse dia lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
      </div>
    </div>

    <!-- Carousel mobile -->
    <div class="row mx-auto my-auto justify-content-center hide-desktop">
      <div id="contentMobileCarousel" class="carousel slide p-0" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
              <div class="carousel-item heroslide2 content active">
                  <div class="col-11 m-0 p-0">
                    <div class="box">
                      <h3>
                        10/10/2021
                      </h3>
                      <p class="paragrafo3">Nesse dia lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                  </div>
              </div>
              <div class="carousel-item heroslide2 content">
                  <div class="col-11 m-0 p-0">
                    <div class="box">
                      <h3>
                        15/10/2021
                      </h3>
                      <p class="paragrafo3">Nesse dia lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                  </div>
              </div>
              <div class="carousel-item heroslide2 content">
                  <div class="col-11 m-0 p-0">
                    <div class="box">
                      <h3>
                        02/11/2021
                      </h3>
                      <p class="paragrafo3">Nesse dia lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    

  </div>
</section>


<!-- Cases -->
<div class="a-tivit-cases cases ventures">
  <div id="hero" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="container">
      <div class="row">
        <div class="title">
          <h2 class="text-center">A atuação da Ventures empreende com e para você. Conheça nossos cases:</h2>
        </div>
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
                <a>conta híbrida</a>
                <a>varejo</a>
              </div>
              <div class="acessar">
                <a href="#">acessar case <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow.svg" class="hide-desktop" alt="Saiba Mais"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow-red.svg" class="hide-mobile" alt="Saiba Mais"></a>
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
                <a>conta híbrida</a>
                <a>varejo</a>
              </div>
              <div class="acessar">
                <a href="#">acessar case <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow.svg" class="hide-desktop" alt="Saiba Mais"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow-red.svg" class="hide-mobile" alt="Saiba Mais"></a>
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
                <a>conta híbrida</a>
                <a>varejo</a>
              </div>
              <div class="acessar">
                <a href="#">acessar case <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow.svg" class="hide-desktop" alt="Saiba Mais"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow-red.svg" class="hide-mobile" alt="Saiba Mais"></a>
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
                <a>conta híbrida</a>
                <a>varejo</a>
              </div>
              <div class="acessar">
                <a href="#">acessar case <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow.svg" class="hide-desktop" alt="Saiba Mais"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow-red.svg" class="hide-mobile" alt="Saiba Mais"></a>
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


<!-- Pornto para Inovar? -->
<div class="home-pessoas-e-carreiras inovar">
  <!-- <div id="triangle-down"></div> -->
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