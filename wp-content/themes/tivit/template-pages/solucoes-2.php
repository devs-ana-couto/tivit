<?php /* Template Name: Soluções Novo */ ?>
<?php get_header(); ?>

<!-- Hero banner-->
<div class="services-hero position-relative" style="background: url('<? $detect->isMobile() ? the_field('banner_mobile_psolucoes') : the_field('banner_desktop_psolucoes'); ?>') no-repeat center center; background-size: cover;">
    <div class="services-hero-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center align-items-center flex-column position-relative zindex services-hero-content">
                        <h1><?the_field('pre_chamada_psolucoes');?></h1>
                        <h2><?the_field('chamada_psolucoes');?></h2>
                        <p><?the_field('descricao_psolucoes');?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <div class="customMargin d-flex justify-content-center align-items-center hide-mobile">
      <img class="mask w-100 position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/v_slider_home.svg" alt="mask" />
  </div>

  <div class="maskDiv text-center hide-desktop">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/banner-mask.svg" class="position-absolute mask" alt="Máscara">
  </div>
</div>

<?
    if( have_rows('item_psolucoes') ):
    // Loop through rows.
        for($i=0; have_rows('item_psolucoes'); $i++) : the_row();
        $name_solucao[$i] = get_sub_field('nome_da_solucao');
        $description_solucao[$i] = get_sub_field('descricao_da_solucao');
        $services_solucao[$i] = get_sub_field('servicos');
?>
<div class="<?=$i % 2 == 0 ? 'bgWhite' : 'bgWhite bgGray'?>">
    <div class="container-fluid intro">
        <div>
            <h2><?=$name_solucao[$i]?></h2>
            <p>
                <?=$description_solucao[$i]?>
            </p>
        </div>
    </div>

     <!-- Bloco Carrossel Infinito -->
     <div id="carouselCustom" class="container-fluid solucoes p-0 text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarouselFirstBlock<?=$i?>" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                <?
                    if( have_rows('servicos_da_solucao') ):
                    // Loop through rows.
                        for($x=0; have_rows('servicos_da_solucao'); $x++) : the_row();
                        $name_service[$x] = get_sub_field('nome_do_servico');
                        $description_service[$x] = get_sub_field('descricao_do_servico');

                ?>
                <div class="carousel-item <?=$x==0 ? 'active' : '';?> <?=$i==0 ? 'heroslide' : 'heroslide'.$l=$i+1 ;?>">
                    <div class="col-11 col-md-3">
                        <div class="card">
                            <div class="content">
                                <p class="tag"><?=$name_solucao[$i]?></p>
                                <h2><?=$name_service[$x]?></h2>
                                <div class="w-100 custom-height">
                                    <p><?=$description_service[$x]?></p>
                                </div>
                                <div class="d-flex justify-content-start align-items-end w-100 saibaMais">
                                    <a href="/staged/tivit/solucoes-ativas/" class="d-flex buttonCta w-100">Saiba Mais</a>
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
                    <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarouselFirstBlock<?=$i?>" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <!-- <div class="d-flex flex-row counter">
                        <div class="numactive"></div><div class="numseparation"></div><div class="numtotal"></div>
                    </div> -->
                    <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarouselFirstBlock<?=$i?>" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /// Bloco 1 WHITE -->
<? endfor; endif; ?>

<?php get_footer(); ?>