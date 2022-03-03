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
<div id="tivitLabs">

</div>

<?php get_footer(); ?>