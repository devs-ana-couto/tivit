<?php /* Template Name: Labs */ ?>
<?php get_header(); ?>

<!-- Hero banner-->
<div class="labs-hero position-relative" style="background: url('<? $detect->isMobile() ? the_field('banner_mobile_tivit_labs') : the_field('banner_desktop_tivit_labs'); ?>') no-repeat center center; background-size: cover;">
  <div class="labs-hero-title">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="d-flex justify-content-center align-items-center flex-column position-relative zindex">
            <h1><?the_field('pre_chamada_tivit_labs')?></h1>
            <h2 class="hide-mobile"><?the_field('chamada_tivit_labs')?></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="customMargin d-flex justify-content-center align-items-center hide-mobile">
      <img class="mask w-100 position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/v_slider_home.svg" alt="mask" />
  </div>
  <div class="labs-hero-content hide-desktop">
    <h2><?the_field('chamada_tivit_labs')?></h2>
  </div>

  <div class="maskDiv text-center hide-desktop">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/banner-mask.svg" class="position-absolute mask" alt="Máscara">
  </div>
</div>

<div id="intro-labs">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center w-100">
            <div class="text">
            <?the_field('texto_tivit_labs')?>
            </div>
        </div>
    </div>
</div>

<div class="container titleCarousel">
    <h2>
      <?the_field('chamada_pilares_tivit_labs')?>
    </h2>
</div>
<!-- Bloco Carrossel Infinito -->
<div id="carouselCustom" class="container-fluid labs p-0 text-center my-3">
  <div class="row mx-auto my-auto justify-content-center">
      <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <? 
            if( have_rows('itens_de_atuacao_pilares_tivit_labs') ):
            // Loop through rows.
                for($i=0; have_rows('itens_de_atuacao_pilares_tivit_labs'); $i++) : the_row();
                $conteudo[$i] = get_sub_field('conteudo');
          ?>
          <div class="carousel-item heroslide3 <?=$i==0 ? 'active' : ''?>">
              <div class="col-11 col-md-3">
                  <div class="card">
                      <div class="content">
                      <?=$conteudo[$i]?>
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


<div id="timeline">
    <div class="container titleCarousel">
        <h2>
            Timeline de incubação e aceleração do TIVIT Labs
        </h2>
        <p>
            Nosso processo de concepção e desenvolvimento é composto por cinco etapas principais
        </p>
    </div>

    <!-- Bloco Carrossel Infinito -->
<div id="carouselCustom" class="container-fluid timelineCarousel p-0 text-center">
  <div class="row mx-auto my-auto justify-content-center">
      <div id="recipeCarouselTimeLine" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item heroslide2 active">
                <div class="col-11 col-md-3">
                    <div class="card">
                        <div class="card-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/labs/slide3.jpg" alt="Blog 1" class="img-fluid w-100">
                        </div>
                        <div class="content">
                        <h2>Ideação</h2>
                        <p>Design Thinking para levantamento de problemas e negócio e possíveis soluções.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item heroslide2">
                <div class="col-11 col-md-3">
                    <div class="card">
                         <div class="card-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/labs/slide2.jpg" alt="Blog 1" class="img-fluid w-100">
                        </div>
                        <div class="content">
                        <h2>Inception</h2>
                        <p>Definição de produto/solução, arquitetura, features e plano da esteira de desenvolvimento.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item heroslide2">
                <div class="col-11 col-md-3">
                    <div class="card">
                        <div class="card-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/labs/slide4.jpg" alt="Blog 1" class="img-fluid w-100">
                        </div>
                        <div class="content">
                        <h2>BM & Growth</h2>
                        <p>Pesquisa de mercado e tendências, análise de concorrentes, definição do modelo de negócio, plano de lançamento e go-to-market digital do produto.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item heroslide2">
                <div class="col-11 col-md-3">
                    <div class="card">
                        <div class="card-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/labs/slide2.jpg" alt="Blog 1" class="img-fluid w-100">
                        </div>
                        <div class="content">
                        <h2>BP</h2>
                        <p>Levantamento da viabilidade financeira, precificação, planejamento de recursos, investimentos e retorno.</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
      <div class="d-flex justify-content-center mt-3 mt-md-5">
        <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarouselTimeLine" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <div class="d-flex flex-row counter2">
          <div class="numactive2"></div><div class="numseparation2"></div><div class="numtotal2"></div>
        </div>
        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarouselTimeLine" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
    </div>
    </div>
</div>

<div class="a-tivit-cases cases">
  <div id="hero" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="container">
      <div class="row">
        <div class="title">
          <h2 class="text-center">Confira o que nossas parcerias estratégicas já fizeram!</h2>
        </div>
        <?=do_shortcode('[ac-bloco-cases]')?>
    </div>
  </div>
</div>

<!-- Bloco de Conteúdos -->
<div id="contentTdx" class="home-content content-inovacao">
  <div id="triangle-down"></div>
    <?=do_shortcode('[ac-bloco-conteudo]');?>
  </div>
</div>

</div>

<!-- Pornto para Inovar? -->
<div class="home-pessoas-e-carreiras inovar labs">
  <div id="triangle-down"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="home-pessoas-e-carreiras-title">
          <h2><?the_field('chamada_inovar_labs')?></h2>
        </div>
        <div class="botao">
          <a href="<?the_field('urlCta_inovar_labs')?>" class="btn btn-primary"><?the_field('textocta_inovar_labs')?></a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>