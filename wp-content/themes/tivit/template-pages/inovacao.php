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

  <div class="inovacao-hero-content hide-desktop">
    <h2>Nome do cliente videocase Lorem ipsum</h2>
  </div>

  <div class="botao hide-desktop">
    <a href="#" class="btn btn-primary">Assista ao Reel</a>
  </div>

  <div class="arrow text-center hide-desktop">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icons/seta-red.svg" class="bounce" alt="Saiba Mais">
  </div>
  
</div>

<?php get_footer(); ?>