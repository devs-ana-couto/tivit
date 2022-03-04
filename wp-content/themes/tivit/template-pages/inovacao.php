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

<?php get_footer(); ?>