<?php /* Template Name: Contato */ ?>
<?php get_header(); ?>

<!-- Banner -->

<!-- Hero banner-->
<div class="esg-hero contato-hero position-relative">
  <div class="esg-hero-title">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <div class="zindex position-relative">
                <h1>Contato</h1>
                <h2 class="hide-mobile">Comece a transformar o seu negócio</h2>
            </div>
            <div class="customMargin d-flex justify-content-center align-items-center hide-mobile">
                <img class="mask w-100 position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/v_slider_home.svg" alt="mask" />
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contato-hero-content hide-desktop">
    <h2>Comece a transformar o seu negócio</h2>
  </div>

  <div class="maskDiv text-center hide-desktop">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/banner-mask.svg" class="position-absolute mask" alt="Máscara">
  </div>

</div>

<!-- Intro -->
<div class="contato-intro">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- <p class="hide-desktop">Entre em contato com a <span>TIVIT</span> para solicitar um orçamento ou tirar dúvidas sobre nossas soluções</p> -->
        <p>Compartilhe seu desafio e receba uma solução personalizada.</p>
      </div>
    </div>
  </div>
</div>

<!-- Formulário de Contato -->
<div class="contato-formulario">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?=do_shortcode('[contact-form-7 id="112" title="Página Contato"]');?>
      </div>
    </div>
  </div>
</div>

<!-- Pessoas e Carreiras -->
<div class="home-pessoas-e-carreiras">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="home-pessoas-e-carreiras-title">
          <h2>TRABALHE CONOSCO</h2>
          <p>Para envio de CV, veja nossa área de carreiras</p>
        </div>
        <div class="botao">
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>
  </div>
</div>  


<div class="contato-canais">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>ou entre em contato pelos nossos canais:</h2>
      </div>
      <div class="col-12 col-md-6">
        <div class="borda">
          <div class="contato-canais-item">
            <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/phone.svg" alt="Telefone"> +55 (11) 3757-2222</p>
            <!-- <p class="hide-desktop"><strong>Ligar</strong> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/arrow_forward.svg" alt="Ligar"></p> -->
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="borda socials">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/instagram-white.svg" alt="Ligar">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/linkedin-white.svg" alt="Ligar">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/facebook-white.svg" alt="Ligar">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/twitter-white.svg" alt="Ligar">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/youtube-white.svg" alt="Ligar">
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>