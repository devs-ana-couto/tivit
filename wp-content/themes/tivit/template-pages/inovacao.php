<?php /* Template Name: Inovação */ ?>
<?php get_header(); ?>

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

<div id="ventures">
  <div class="d-flex flex-column container w-100 text-center justify-content-center align-items-center">
    <h2>VENTURES</h2>
    <p>A TIVIT Ventures é o nosso braço de compra e criação de empresas. Só no último ano,
      investimos x milhões de reais na transformação de startups! Assim a gente continua sendo relevante para a tecnologia... Todos os dias.</p>
  </div>
</div>

<?php get_footer(); ?>