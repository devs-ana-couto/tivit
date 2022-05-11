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
        <?=do_shortcode('[ac-bloco-cases]')?>
      </div>
    </div>
  </div>
</div>

<div class="cases-recentes">
  <!--- Desktop -->
  <div class="container hide-mobile">

  <div class="row">
    <?=do_shortcode('[ac-pagina-cases]') ?>
  </div>
</div>
<!--- End Desktop -->
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