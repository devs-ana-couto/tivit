<?php
get_header();

if(have_posts()) : while(have_posts()) : the_post();
?>

<!-- Hero banner-->
<div class="services-hero position-relative" style="background: url('<? $detect->isMobile() ? the_field('banner_mobile_solucoes') : the_field('banner_desktop_solucoes'); ?>') no-repeat center center; background-size: cover;">
  <div class="services-hero-title">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="position-relative zindex">
            <h1><? the_field('pre_chamada_solucoes'); ?></h1>
            <h2 class="hide-mobile"><? the_field('chamada_solucoes'); ?></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="customMargin d-flex justify-content-center align-items-center hide-mobile">
      <img class="mask w-100 position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/v_slider_home.svg" alt="mask" />
  </div>
  <div class="services-hero-content hide-desktop">
    <h2><? the_field('chamada_solucoes'); ?></h2>
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
          <?
            $categories = get_categories();
                foreach($categories as $category) {
          ?>
          <span><?=$category->name?></span>
          <? } ?>
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
<div class="related container hide-desktop">
  <div class="row">
    <div class="col-12">
      <div class="d-flex flex-column align-items-center justify-content-center w-100">
        <p>Ofertado por:</p>
      </div>
      <div class="d-flex flex-row align-items-center justify-content-center w-100">
        <?
            $categories = get_categories();
                foreach($categories as $category) {
          ?>
          <span><?=$category->name?></span>
        <? } ?>
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
<? 
  $introduction = '/components/introduction.php';
  $clouds = '/components/clouds.php';
  $bigNumbers = '/components/bigNumbers.php';
  $diff = '/components/differentials.php';
  $publicCloud =  '/components/publicCloud.php';
  $strategy = '/components/strategy.php';
  $testimonials = '/components/testimonials.php';
  $content_page = '/components/content.php';
?>

<section id="main-solutions">
  <!-- Intro -->
  <div id="services-intro">
    <?
        include get_template_directory() . $introduction;
        include get_template_directory() . $clouds;
        include get_template_directory() . $bigNumbers;
        include get_template_directory() . $diff;
        include get_template_directory() . $publicCloud;
        include get_template_directory() . $strategy;
        include get_template_directory() . $testimonials;
        include get_template_directory() . $content_page;
    ?>

  </div>
  <!-- //intro -->

  <!-- Clouds -->
  <div id="clouds">

  </div>
  <!-- //Clouds -->

  <!-- Middle Content -->
  <div id="middleContent">
    
    
  </div>
  <!-- //Middle Content -->

  <!-- Stratregy -->
  <div id="strategy">
    
  </div>
  <!-- //Stratregy  -->

  <!-- Depoiments -->
  
  <!-- //Depoiments  -->

  <!-- Content -->
  
  <!-- //Content  -->
</section>

<?php
endwhile; endif;
get_footer();
?>