<?php /* Template Name: Contato */ ?>
<?php get_header(); ?>

<!-- Banner -->
<div class="contato-hero">

  <div class="contato-hero-title">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Contato</h1>
          <h2 class="hide-mobile">Comece a transformar o seu negócio</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="contato-hero-content hide-desktop">
    <h2>Chamada contato lorem ipsum</h2>
  </div>

  <div class="arrow text-center mt-5 hide-desktop">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icons/seta-red.svg" class="bounce" alt="Saiba Mais">
  </div>

</div>

<!-- Intro -->
<div class="contato-intro">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p class="hide-desktop">Entre em contato com a <span>TIVIT</span> para solicitar um orçamento ou tirar dúvidas sobre nossas soluções</p>
        <p class="hide-mobile">Compartilhe seu desafio e receba uma solução personalizada.</p>
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
            <p><strong>Ligar</strong> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/arrow_forward.svg" alt="Ligar"></p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="borda socials">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/instagram-white.svg" alt="Ligar"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/linkedin-white.svg" alt="Ligar"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/facebook-white.svg" alt="Ligar"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/youtube-white.svg" alt="Ligar">
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>