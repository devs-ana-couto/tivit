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
  <!-- <div class="related hide-mobile">
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
  </div> -->
  <!-- /// only for his page DESKTOP -->
</div>

<!-- only for this page MOBILE -->
<!-- <div class="related container hide-desktop">
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
</div> -->
<!-- /// only for his page MOBILE -->

<? 

    $introduction = '/components/introduction.php';

    $clouds = '/components/clouds.php';
    $clouds_order = get_field('posicao_no_layout');

    $cta = '/components/cta.php';
    $cta_order = get_field('posicao_no_layout_cta');

    $bigNumbers = '/components/bigNumbers.php';
    $bigNumbers_order = get_field('posicao_no_layout_big_numbers');

    $diff = '/components/differentials.php';
    $diff_order = get_field('posicao_no_layout_nd');

    $publicCloud =  '/components/publicCloud.php';
    // $publicCloud_order = get_field('posicao_no_layout_planejamento');

    $strategy = '/components/strategy.php';
    $strategy_order = get_field('posicao_no_layout_planejamento');

    $testimonials = '/components/testimonials.php';
    $testimonials_order = get_field('posicionamento_no_layout_depoimentos');

    $extra = '/components/extra.php';
    $extra_order = get_field('posicao_no_layout_extra');

    $content_page = '/components/content.php';



?>

<section id="main-solutions">
  <!-- Intro -->
  <div id="services-intro">
    <? include get_template_directory() . $introduction; ?>
  </div>
  <!-- //intro -->

  <!-- Clouds -->
  <div id="clouds">
  <?
        if($clouds_order == 1) {
            if(get_field('exibir_clouds') == true){
                include get_template_directory() . $clouds;
            }
        }elseif($bigNumbers_order == 1) {
            if(get_field('exibir_bigNumbers') == true){
                include get_template_directory() . $bigNumbers;
            }
        }elseif($diff_order == 1) {
            if(get_field('exibir_diff') == true){
                include get_template_directory() . $diff;
            }
        }elseif($publicCloud_order == 1) {
            if(get_field('exibir_publicCloud') == true){
                include get_template_directory() . $publicCloud;
            }
        }elseif($strategy_order == 1) {
            if(get_field('exibir_strategy') == true){
                include get_template_directory() . $strategy;
            }
        }elseif($testimonials_order == 1) {
            if(get_field('exibir_testimonials') == true){
                include get_template_directory() . $testimonials;
            }
        }elseif($content_page_order == 1) {
            if(get_field('exibir_content_page') == true){
                include get_template_directory() . $content_page;
            }
        }elseif($cta_order == 1) {
            if(get_field('exibir_cta') == true){
                include get_template_directory() . $cta;
            }
        }elseif($extra_order == 1) {
            if(get_field('exibir_extra') == true){
                include get_template_directory() . $extra;
            }
        }
    ?> 
    <?
        if($clouds_order == 2) {
            if(get_field('exibir_clouds') == true){
                include get_template_directory() . $clouds;
            }
        }elseif($bigNumbers_order == 2) {
            if(get_field('exibir_bigNumbers') == true){
                include get_template_directory() . $bigNumbers;
            }
        }elseif($diff_order == 2) {
            if(get_field('exibir_diff') == true){
                include get_template_directory() . $diff;
            }
        }elseif($publicCloud_order == 2) {
            if(get_field('exibir_publicCloud') == true){
                include get_template_directory() . $publicCloud;
            }
        }elseif($strategy_order == 2) {
            if(get_field('exibir_strategy') == true){
                include get_template_directory() . $strategy;
            }
        }elseif($testimonials_order == 2) {
            if(get_field('exibir_testimonials') == true){
                include get_template_directory() . $testimonials;
            }
        }elseif($content_page_order == 2) {
            if(get_field('exibir_content_page') == true){
                include get_template_directory() . $content_page;
            }
        }elseif($cta_order == 2) {
            if(get_field('exibir_cta') == true){
                include get_template_directory() . $cta;
            }
        }elseif($extra_order == 2) {
            if(get_field('exibir_extra') == true){
                include get_template_directory() . $extra;
            }
        }
    ?> 
  </div>
  <!-- //Clouds -->

  <!-- Middle Content -->
  <div id="middleContent">
  <?
        if($clouds_order == 3) {
            if(get_field('exibir_clouds') == true){
                include get_template_directory() . $clouds;
            }
        }elseif($bigNumbers_order == 3) {
            if(get_field('exibir_bigNumbers') == true){
                include get_template_directory() . $bigNumbers;
            }
        }elseif($diff_order == 3) {
            if(get_field('exibir_diff') == true){
                include get_template_directory() . $diff;
            }
        }elseif($publicCloud_order == 3) {
            if(get_field('exibir_publicCloud') == true){
                include get_template_directory() . $publicCloud;
            }
        }elseif($strategy_order == 3) {
            if(get_field('exibir_strategy') == true){
                include get_template_directory() . $strategy;
            }
        }elseif($testimonials_order == 3) {
            if(get_field('exibir_testimonials') == true){
                include get_template_directory() . $testimonials;
            }
        }elseif($content_page_order == 3) {
            if(get_field('exibir_content_page') == true){
                include get_template_directory() . $content_page;
            }
        }elseif($cta_order == 3) {
            if(get_field('exibir_cta') == true){
                include get_template_directory() . $cta;
            }
        }elseif($extra_order == 3) {
            if(get_field('exibir_extra') == true){
                include get_template_directory() . $extra;
            }
        }
    ?>   

<?
        if($clouds_order == 4) {
            if(get_field('exibir_clouds') == true){
                include get_template_directory() . $clouds;
            }
        }elseif($bigNumbers_order == 4) {
            if(get_field('exibir_bigNumbers') == true){
                include get_template_directory() . $bigNumbers;
            }
        }elseif($diff_order == 4) {
            if(get_field('exibir_diff') == true){
                include get_template_directory() . $diff;
            }
        }elseif($publicCloud_order == 4) {
            if(get_field('exibir_publicCloud') == true){
                include get_template_directory() . $publicCloud;
            }
        }elseif($strategy_order == 4) {
            if(get_field('exibir_strategy') == true){
                include get_template_directory() . $strategy;
            }
        }elseif($testimonials_order == 4) {
            if(get_field('exibir_testimonials') == true){
                include get_template_directory() . $testimonials;
            }
        }elseif($content_page_order == 4) {
            if(get_field('exibir_content_page') == true){
                include get_template_directory() . $content_page;
            }
        }elseif($cta_order == 4) {
            if(get_field('exibir_cta') == true){
                include get_template_directory() . $cta;
            }
        }elseif($extra_order == 4) {
            if(get_field('exibir_extra') == true){
                include get_template_directory() . $extra;
            }
        }
    ?> 
  </div>
  <!-- //Middle Content -->

  <!-- Stratregy -->
  <div id="strategy">

  <?
        if($clouds_order == 5) {
            if(get_field('exibir_clouds') == true){
                include get_template_directory() . $clouds;
            }
        }elseif($bigNumbers_order == 5) {
            if(get_field('exibir_bigNumbers') == true){
                include get_template_directory() . $bigNumbers;
            }
        }elseif($diff_order == 5) {
            if(get_field('exibir_diff') == true){
                include get_template_directory() . $diff;
            }
        }elseif($publicCloud_order == 5) {
            if(get_field('exibir_publicCloud') == true){
                include get_template_directory() . $publicCloud;
            }
        }elseif($strategy_order == 5) {
            if(get_field('exibir_strategy') == true){
                include get_template_directory() . $strategy;
            }
        }elseif($testimonials_order == 5) {
            if(get_field('exibir_testimonials') == true){
                include get_template_directory() . $testimonials;
            }
        }elseif($content_page_order == 5) {
            if(get_field('exibir_content_page') == true){
                include get_template_directory() . $content_page;
            }
        }elseif($cta_order == 5) {
            if(get_field('exibir_cta') == true){
                include get_template_directory() . $cta;
            }
        }elseif($extra_order == 5) {
            if(get_field('exibir_extra') == true){
                include get_template_directory() . $extra;
            }
        }
    ?> 
  </div>
  <!-- //Stratregy  -->

  <!-- Depoiments -->
  <?
        if($clouds_order == 6) {
            if(get_field('exibir_clouds') == true){
                include get_template_directory() . $clouds;
            }
        }elseif($bigNumbers_order == 6) {
            if(get_field('exibir_bigNumbers') == true){
                include get_template_directory() . $bigNumbers;
            }
        }elseif($diff_order == 6) {
            if(get_field('exibir_diff') == true){
                include get_template_directory() . $diff;
            }
        }elseif($publicCloud_order == 6) {
            if(get_field('exibir_publicCloud') == true){
                include get_template_directory() . $publicCloud;
            }
        }elseif($strategy_order == 6) {
            if(get_field('exibir_strategy') == true){
                include get_template_directory() . $strategy;
            }
        }elseif($testimonials_order == 6) {
            if(get_field('exibir_testimonials') == true){
                include get_template_directory() . $testimonials;
            }
        }elseif($content_page_order == 6) {
            if(get_field('exibir_content_page') == true){
                include get_template_directory() . $content_page;
            }
        }elseif($cta_order == 6) {
            if(get_field('exibir_cta') == true){
                include get_template_directory() . $cta;
            }
        }elseif($extra_order == 6) {
            if(get_field('exibir_extra') == true){
                include get_template_directory() . $extra;
            }
        }
    ?> 
    <?
        if($clouds_order == 7) {
            if(get_field('exibir_clouds') == true){
                include get_template_directory() . $clouds;
            }
        }elseif($bigNumbers_order == 7) {
            if(get_field('exibir_bigNumbers') == true){
                include get_template_directory() . $bigNumbers;
            }
        }elseif($diff_order == 7) {
            if(get_field('exibir_diff') == true){
                include get_template_directory() . $diff;
            }
        }elseif($publicCloud_order == 7) {
            if(get_field('exibir_publicCloud') == true){
                include get_template_directory() . $publicCloud;
            }
        }elseif($strategy_order == 7) {
            if(get_field('exibir_strategy') == true){
                include get_template_directory() . $strategy;
            }
        }elseif($testimonials_order == 7) {
            if(get_field('exibir_testimonials') == true){
                include get_template_directory() . $testimonials;
            }
        }elseif($content_page_order == 7) {
            if(get_field('exibir_content_page') == true){
                include get_template_directory() . $content_page;
            }
        }elseif($cta_order == 7) {
            if(get_field('exibir_cta') == true){
                include get_template_directory() . $cta;
            }
        }elseif($extra_order == 7) {
            if(get_field('exibir_extra') == true){
                include get_template_directory() . $extra;
            }
        }
    ?> 
  <!-- //Depoiments  -->

  <!-- Content -->  
    <?
        include get_template_directory() . $content_page;
    ?>
  <!-- //Content  -->
</section>

<?php
endwhile; endif;
get_footer();
?>