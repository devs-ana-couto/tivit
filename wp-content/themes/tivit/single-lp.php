<?php
get_header();

if(have_posts()) : while(have_posts()) : the_post();
?>


<!-- Hero banner-->
<div class="unfolding-hero position-relative" style="background: url('<? $detect->isMobile() ? the_field('banner_-_mobile_lp') : the_field('banner_-_desktop_lp'); ?>') no-repeat center center; background-size: cover;">
  <div class="unfolding-hero-title">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="position-relative zindex">
            <h1><?the_field('pre_chamada_lp')?></h1>
            <h2 class="hide-mobile"><?the_title();?></h2>
            <p class="hide-mobile"><?the_field('descricao_lp')?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="customMargin d-flex justify-content-center align-items-center hide-mobile">
      <img class="mask w-100 position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/v_slider_home.svg" alt="mask" />
  </div>
  <div class="unfolding-hero-content hide-desktop">
    <h2><?the_field('pre_chamada_lp')?></h2>
    <p class="hide-desktop"><?the_field('descricao_lp')?></p>
  </div>

  <div class="maskDiv text-center hide-desktop">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/banner-mask.svg" class="position-absolute mask" alt="Máscara">
  </div>

</div>

<div class="dark-bg">
    <div id="intro-unfolding">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center w-100">
                <div class="text">
                    <?the_field('texto_de_introducao_lp')?>
                </div>
            </div>
        </div>
    </div>

    <div id="middleContent" class="unfolding">
        <div class="container">
            <div class="w-100">
                <h2 class="title text-center"><?the_field('chamada_big_numbers_lp')?></h2>
            </div>
            <div class="row hide-mobile">
                <div class="col-12 col-md-3">
                    <div class="d-flex justify-content-center align-items-center w-100 bigNumbersTitle flex-column position-relative">
                        <h2><?the_field('item_01_-_numeros_lp')?></h2>
                        <div class="subtitle">
                            <?the_field('item_01_-_label_lp')?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="d-flex justify-content-center align-items-center w-100 bigNumbersTitle flex-column position-relative">
                        <h2><?the_field('item_02_-_numeros_lp')?></h2>
                        <div class="subtitle">
                        <?the_field('item_02_-_label_lp')?>
                        </div>
                    </div>       
                </div>
                <div class="col-12 col-md-3">
                    <div class="d-flex justify-content-center align-items-center w-100 bigNumbersTitle flex-column position-relative">
                        <h2><?the_field('item_03_-_numeros_lp')?></h2>
                        <div class="subtitle">
                        <?the_field('item_03_-_label_lp')?> 
                        </div>
                    </div>     
                </div>
                <div class="col-12 col-md-3">
                    <div class="d-flex justify-content-center align-items-center w-100 bigNumbersTitle flex-column position-relative">
                        <h2><?the_field('item_04_-_numeros_lp')?></h2>
                        <div class="subtitle">
                            <?the_field('item_04_-_label_lp')?>
                        </div>
                    </div>     
                </div>
            </div>

            <!-- mobile row -->
            <div class="row hide-desktop">
                <div class="col-12">
                    <div class="row bigNumbersTitle">
                        <div class="col-6">
                            <h2><?the_field('item_01_-_numeros_lp')?></h2>
                        </div>
                        <div class="col-6">
                            <div class="subtitle">
                                <?the_field('item_01_-_label_lp')?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row bigNumbersTitle">
                        <div class="col-6">
                            <h2><?the_field('item_02_-_numeros_lp')?></h2>
                        </div>
                        <div class="col-6">
                            <div class="subtitle">
                                <?the_field('item_02_-_label_lp')?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row bigNumbersTitle">
                        <div class="col-6">
                            <h2><?the_field('item_03_-_numeros_lp')?></h2>
                        </div>
                        <div class="col-6">
                            <div class="subtitle">
                                <?the_field('item_03_-_label_lp')?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row bigNumbersTitle">
                        <div class="col-6">
                            <h2><?the_field('item_04_-_numeros_lp')?></h2>
                        </div>
                        <div class="col-6">
                            <div class="subtitle">
                                <?the_field('item_04_-_label_lp')?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="cases-unfolding">
    <div class="custom-bg w-100">
        <div class="container titleCarousel">
            <h2>
                CASES DE MEIOS DE PAGAMENTOS
            </h2>
        </div>
    </div>

    <div>
        <div class="a-tivit-cases cases labs">
            <div id="hero" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="container">
                    <div class="row">
                        <?=do_shortcode('[ac-bloco-cases]')?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="bgWhite bgGray unfolding">
    <div class="container-fluid intro">
        <div>
            <h2><?the_field('chamada_carousel_lp')?></h2>
            <?the_field('descricao_carousel_lp')?>
        </div>
    </div>

     <!-- Bloco Carrossel Infinito -->
     <div id="carouselCustom" class="container-fluid solucoes p-0 text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarouselSecBlock" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner" role="listbox">
                    <?php
                        // Check rows exists.
                        if( have_rows('carousel_01_lp') ):
                            // Loop through rows.
                            for($i=0; have_rows('carousel_01_lp'); $i++) : the_row();
                                $categoria[$i] = get_sub_field('categoria');
                                $nome[$i] = get_sub_field('nome');
                                $descricao[$i] = get_sub_field('descricao');
                                $link_cta[$i] = get_sub_field('link_cta');
                    ?>
                        <div class="carousel-item heroslide2 global <?=$i==0 ? 'active' : '';?>">
                            <div class="col-11 col-md-3">
                                <div class="card">
                                    <div class="content">
                                        <p class="tag"><?=$categoria[$i]?></p>
                                        <h2><?=$nome[$i]?></h2>
                                        <div class="w-100 custom-height">
                                            <?=$descricao[$i]?>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-end w-100 saibaMais">
                                            <a href="<?=$link_cta[$i];?>" class="d-flex buttonCta w-100">Saiba Mais</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? 
                        endfor;
                        endif;
                    ?>
                </div>

                <div class="d-flex position-absolute controls">
                    <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarouselSecBlock" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <!-- <div class="d-flex flex-row counter">
                        <div class="numactive"></div><div class="numseparation"></div><div class="numtotal"></div>
                    </div> -->
                    <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarouselSecBlock" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            
            </div>
        </div>
    </div>
</div>

<div class="introTitle">
    <div class="container titleCarousel">
        <h2>
            <?the_field('chamada_carousel_02_lp')?>
        </h2>
    </div>
</div>
<!-- Bloco Carrossel Infinito -->
<div id="carouselCustom" class="container-fluid labs p-0 text-center my-3">
  <div class="row mx-auto my-auto justify-content-center">
      <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <?php
                // Check rows exists.
                if( have_rows('carousel_02_lp') ):
                    // Loop through rows.
                    for($i=0; have_rows('carousel_02_lp'); $i++) : the_row();
                        $titulo[$i] = get_sub_field('titulo');
                        $descricao[$i] = get_sub_field('descricao');
            ?>
            <div class="carousel-item heroslide3 global2 <?=$i==0 ? 'active' : '';?>">
                <div class="col-11 col-md-3">
                    <div class="card">
                        <div class="content">
                        <h2><?=$titulo[$i]?></h2>
                        <p><?=$descricao[$i]?></p>
                        </div>
                    </div>
                </div>
            </div>
            <? 
                endfor;
                endif;
            ?>

        </div>
      </div>
      <div class="d-flex justify-content-center mt-3 mt-md-5">
        <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <div class="d-flex flex-row counter3">
          <div class="numactive3"></div><div class="numseparation3"></div><div class="numtotal3"></div>
        </div>
        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
    </div>
</div>

<div class="container diferenciais">
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="intro">
                <?the_field('chamada_nd_lp')?>
                <div>
                    <a href="<?the_field('cta_link_nd_lp')?>" class="cta"><?the_field('cta_texto_nd_lp')?></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="row">
                <?
                    if( have_rows('itens_nd_lp') ):
                    // Loop through rows.
                        for($i=0; have_rows('itens_nd_lp'); $i++) : the_row();
                        $texto[$i] = get_sub_field('texto');
                ?>
                <div class="col-12 col-md-6">
                    <div class="content">
                        <div>
                            <?=$texto[$i]?>
                        </div>
                    </div>
                </div>
                <? endfor; endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- Depoimentos -->
<div id="pecDepoimentos" class="lp-tbanks-depoimentos mx-custom">
  <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item heroslide4 active">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="lp-tbanks-depoimentos-content text-center ">
                <div class="lp-tbanks-depoimentos-autor">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/cliente.svg" alt="Tbanks Saiba Mais">
                  <h3>Fulano de Tal da Silva</h3>
                  <h4>Desenvolvedor Jr.</h4>
                  <p>
                  ”Através de um serviço modular, de contratação sob demanda, a TIVIT coloca sua expertise reconhecida em toda a América Latina Lorem ipsum dolor sit amet.”
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item heroslide4">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
            <div class="lp-tbanks-depoimentos-content text-center ">
                <div class="lp-tbanks-depoimentos-autor">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/cliente.svg" alt="Tbanks Saiba Mais">
                  <h3>Fulano de Tal da Silva</h3>
                  <h4>Desenvolvedor Jr.</h4>
                  <p>
                  ”Através de um serviço modular, de contratação sob demanda, a TIVIT coloca sua expertise reconhecida em toda a América Latina Lorem ipsum dolor sit amet.”
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item heroslide4">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="lp-tbanks-depoimentos-content text-center ">
                <div class="lp-tbanks-depoimentos-autor">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/cliente.svg" alt="Tbanks Saiba Mais">
                  <h3>Fulano de Tal da Silva</h3>
                  <h4>Desenvolvedor Jr.</h4>
                  <p>
                  ”Através de um serviço modular, de contratação sob demanda, a TIVIT coloca sua expertise reconhecida em toda a América Latina Lorem ipsum dolor sit amet.”
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mobileRelative">
      <button class="carousel-control-prev" type="button" data-bs-target="#recipeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#recipeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      <div class="d-flex flex-row justify-content-center counter mt-3">
        <div class="numactive"></div><div class="numseparation"></div><div class="numtotal"></div>
      </div>
    </div>
  </div>
</div>

<div id="contatoUnfolding" class="lp-tbanks-form">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="w-100 d-flex justify-content-center align-items-center h-100 cta">
                    <h2><strong>PRONTO PARA INOVAR?</strong> FALE COM NOSSOS ESPECIALISTAS</h2>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="form">
                    <?php echo do_shortcode('[contact-form-7 id="66" title="Contato Desdobramentos"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
endwhile; endif;
get_footer();
?>