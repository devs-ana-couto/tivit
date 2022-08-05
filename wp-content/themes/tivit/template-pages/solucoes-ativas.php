<?php /* Template Name: Soluções Ativas */ ?>
<?php get_header(); ?>

<?php page_bulder_init(get_the_ID(),$post,true);?>

<!-- Hero banner-->
<div class="services-hero position-relative">
  <div class="services-hero-title">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="position-relative zindex">
            <h1>CLOUD SERVICES</h1>
            <h2 class="hide-mobile">PUBLIC CLOUD</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="customMargin d-flex justify-content-center align-items-center hide-mobile">
      <img class="mask w-100 position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/v_slider_home.svg" alt="mask" />
  </div>
  <div class="services-hero-content hide-desktop">
    <h2>PUBLIC CLOUD</h2>
  </div>

  <div class="maskDiv text-center hide-desktop">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/banner-mask.svg" class="position-absolute mask" alt="Máscara">
  </div>

  <!-- only for this page DESKTOP -->
  <div class="related hide-mobile">
    <div class="row w-100">
      <div class="col-6">
        <div class="d-flex flex-row align-items-center justify-content-center w-100">
          <p>Ofertado por:</p>
          <span>TDX</span>
          <span>STONE AGE</span>
        </div>
      </div>
      <div class="col-6">
        <div class="d-flex flex-row align-items-center justify-content-center w-100">
          <p>Ofertas relacionadas:</p>
          <span>DIGITAL PAYMENTS</span>
          <span>DIGITAL BUSINESS</span>
          <span>CYBERSECURITY</span>
        </div>
      </div>
    </div>
  </div>
  <!-- /// only for his page DESKTOP -->
</div>

<!-- only for this page MOBILE -->
<div class="related hide-desktop">
  <div class="row">
    <div class="col-12">
      <div class="d-flex flex-column align-items-center justify-content-center w-100">
        <p>Ofertado por:</p>
      </div>
      <div class="d-flex flex-row align-items-center justify-content-center w-100">
        <span>TDX</span>
        <span>STONE AGE</span>
      </div>
    </div>
    <div class="col-12 mt-3">
      <div class="d-flex flex-column align-items-center justify-content-center w-100">
        <p>Ofertas relacionadas:</p>
      </div>
      <div class="d-flex flex-row align-items-center justify-content-center w-100">
        <span>DIGITAL PAYMENTS</span>
        <span>DIGITAL BUSINESS</span>
      </div>
    </div>
  </div>
</div>
<!-- /// only for his page MOBILE -->

<section id="main-solutions">
  <!-- Intro -->
  <div id="services-intro">
    <?php include get_template_directory() . '/components/introduction.php'; ?>
  </div>
  <!-- //intro -->

  <!-- Clouds -->
  <div id="clouds">
    <?php include get_template_directory() . '/components/clouds.php'; ?>
  </div>
  <!-- //Clouds -->

  <!-- Middle Content -->
  <div id="middleContent">
    <?php include get_template_directory() . '/components/bigNumbers.php'; ?>
    <?php include get_template_directory() . '/components/differentials.php'; ?>
    <?php include get_template_directory() . '/components/publicCloud.php'; ?>
  </div>
  <!-- //Middle Content -->

  <!-- Stratregy -->
  <div id="strategy">
    <?php include get_template_directory() . '/components/strategy.php'; ?>
  </div>
  <!-- //Stratregy  -->

  <!-- Depoiments -->
  <?php include get_template_directory() . '/components/depoiments.php'; ?>
  <!-- //Depoiments  -->

  <!-- Content -->
  <?php include get_template_directory() . '/components/content.php'; ?>
  <!-- //Content  -->
</section>

<?php get_footer(); ?>