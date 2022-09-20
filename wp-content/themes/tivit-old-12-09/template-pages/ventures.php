<?php /* Template Name: Ventures */ ?>
<?php get_header(); ?>

<?php page_bulder_init(get_the_ID(),$post,true);?>

<!-- Hero banner-->
<div class="ventures-hero position-relative" style="background: url('<? $detect->isMobile() ? the_field('banner_mobile_ventures') : the_field('banner_desktop_ventures'); ?>') no-repeat center center; background-size: cover;">
  <div class="ventures-hero-title">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="d-flex justify-content-center align-items-center flex-column position-relative zindex">
            <h1><?the_field('pre_chamada_ventures');?></h1>
            <h2 class="hide-mobile"><?the_field('chamada_ventures');?></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="customMargin d-flex justify-content-center align-items-center hide-mobile">
      <img class="mask w-100 position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/v_slider_home.svg" alt="mask" />
  </div>
  <div class="ventures-hero-content hide-desktop">
    <h2><?the_field('chamada_ventures');?></h2>
  </div>

  <div class="maskDiv text-center hide-desktop">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/banner-mask.svg" class="position-absolute mask" alt="Máscara">
  </div>
</div>


<!-- Sobre -->
<div class="a-tivit-sobre ventures">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?the_field('chamada_para_conteudo');?>
      </div>
    </div>
  </div>
</div>


<!-- TDX Ventures -->
<div id="tdx" class="tdx ventures">
  <div class="container">
    <div class="title w-100 text-center m-auto">
      <h2><?the_field('chamada_como_investimos');?></h2>
    </div>

    <div class="row mt-2 hide-mobile">
      <div class="col-sm-12 col-md-3">
        <div class="box">
          <div class="w-100">
            <div class="w-100 m-auto text-center">
            <img src="<?the_field('item_1_-_logo')?>" alt="<?the_field('item_1_-_nome')?>">
            </div>
            <h2>
              <?the_field('item_1_-_nome')?>
            </h2>
            <p>
            <?the_field('item_1_-_descricao')?>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-3">
        <div class="box">
          <div class="w-100">
            <div class="w-100 m-auto text-center">
            <img src="<?the_field('item_2_-_logo')?>" alt="<?the_field('item_2_-_nome')?>">
            </div>
            <h2>
              <?the_field('item_2_-_nome')?>
            </h2>
            <p>
            <?the_field('item_2_-_descricao')?>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-3">
        <div class="box">
          <div class="w-100">
            <div class="w-100 m-auto text-center">
              <img src="<?the_field('item_3_-_logo')?>" alt="<?the_field('item_3_-_nome')?>">
            </div>
            <h2>
              <?the_field('item_3_-_nome')?>
            </h2>
            <p>
            <?the_field('item_3_-_descricao')?>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-3">
        <div class="box">
          <div class="w-100">
            <div class="w-100 m-auto text-center">
            <img src="<?the_field('item_4_-_logo')?>" alt="<?the_field('item_4_-_nome')?>">
            </div>
            <h2>
              <?the_field('item_4_-_nome')?>
            </h2>
            <p>
            <?the_field('item_4_-_descricao')?>
          </div>
        </div>
      </div>
    </div>

    <!-- mobile slide -->
    <div class="row mx-auto my-auto justify-content-center mt-3 mt-md-0 hide-desktop">
      <div id="tdxMobileCarousel" class="carousel slide p-0" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item heroslide3 tdx active">
            <div class="col-11 m-0 p-0">
              <div class="box">
                <div class="w-100">
                  <div class="w-100 m-auto text-center">
                    <img src="<?the_field('item_1_-_logo')?>" alt="<?the_field('item_1_-_nome')?>">
                  </div>
                  <h2>
                    <?the_field('item_1_-_nome')?>
                  </h2>
                  <p>
                    <?the_field('item_1_-_descricao')?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item heroslide3 tdx">
            <div class="col-11 m-0 p-0">
              <div class="box">
                <div class="w-100">
                  <div class="w-100 m-auto text-center">
                    <img src="<?the_field('item_2_-_logo')?>" alt="<?the_field('item_2_-_nome')?>">
                  </div>
                  <h2>
                    <?the_field('item_2_-_nome')?>
                  </h2>
                  <p>
                    <?the_field('item_2_-_descricao')?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item heroslide3 tdx">
            <div class="col-11 m-0 p-0">
              <div class="box">
                <div class="w-100">
                  <div class="w-100 m-auto text-center">
                    <img src="<?the_field('item_3_-_logo')?>" alt="<?the_field('item_3_-_nome')?>">
                  </div>
                  <h2>
                    <?the_field('item_3_-_nome')?>
                  </h2>
                  <p>
                    <?the_field('item_3_-_descricao')?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item heroslide3 tdx">
            <div class="col-11 m-0 p-0">
              <div class="box">
                <div class="w-100">
                  <div class="w-100 m-auto text-center">
                    <img src="<?the_field('item_4_-_logo')?>" alt="<?the_field('item_4_-_nome')?>">
                  </div>
                  <h2>
                    <?the_field('item_4_-_nome')?>
                  </h2>
                  <p>
                    <?the_field('item_4_-_descricao')?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="cta w-100 d-flex align-items-center justify-content-center">
      <a href="<?the_field('cta_url_como_investimos')?>" class="button"><?the_field('cta_texto_como_investimos')?></a>
    </div>
  </div>
</div>


<!-- Bloco Ventures -->
<div id="ventures">
  <div class="d-flex flex-column container w-100 text-center justify-content-center align-items-center">
    <?the_field('chamada_e_descricao_ventures')?>
  </div>
  <div class="container mt-5 mb-5">
    <!-- first row -->
    <div class="row">

    <?php
      // Check rows exists.
      if( have_rows('empresas_ventures') ):
          // Loop through rows.
          for($i=0; have_rows('empresas_ventures'); $i++) : the_row();
            $imagem_de_fundo[$i] = get_sub_field('logo');
            $campo_de_texto[$i] = get_sub_field('descricao');
            $texto_cta[$i] = get_sub_field('cta_texto');
            $url_cta[$i] = get_sub_field('cta_url');
      ?>
        <div class="col-sm-12 col-md-4 mb-5">
          <div class="box">
            <div class="d-flex justify-content-center align-items-center w-100  margin-auto text-center">
              <img src="<?=$imagem_de_fundo[$i]?>" alt="Privally">
            </div>
            <?=$campo_de_texto[$i]?>
            <a href="<?=$url_cta[$i]?>" class="botao_ventures"><?=$texto_cta[$i]?></a>
          </div>
        </div>
      <?
        endfor;
        endif;

      ?>
  </div>
  </div>
</div>

<!-- Bloco de Conteúdos -->
<div id="contentTdx" class="home-content content-inovacao">
  <div id="triangle-down"></div>
    <?=do_shortcode('[ac-bloco-conteudo]');?>
  </div>
</div>

<!-- Próximas apresentações -->
<section class="apresentacoes text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?the_field('chamada_apresentacao_ventures')?>
      </div>
    </div>

    <div class="row mt-5 hide-mobile">
      <div class="col-4">
        <div class="box">
          <?the_field('apresentacao_1_ventures')?>
        </div>
      </div>
      <div class="col-4">
        <div class="box">
          <?the_field('apresentacao_2_ventures')?>
        </div>
      </div>
      <div class="col-4">
        <div class="box">
          <?the_field('apresentacao_3_ventures')?>
        </div>
      </div>
    </div>

    <!-- Carousel mobile -->
    <div class="row mx-auto my-auto justify-content-center hide-desktop">
      <div id="contentMobileCarousel" class="carousel slide p-0" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
              <div class="carousel-item heroslide2 content active">
                  <div class="col-11 m-0 p-0">
                    <div class="box">
                      <h3>
                        10/10/2021
                      </h3>
                      <p class="paragrafo3">Nesse dia lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                  </div>
              </div>
              <div class="carousel-item heroslide2 content">
                  <div class="col-11 m-0 p-0">
                    <div class="box">
                      <h3>
                        15/10/2021
                      </h3>
                      <p class="paragrafo3">Nesse dia lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                  </div>
              </div>
              <div class="carousel-item heroslide2 content">
                  <div class="col-11 m-0 p-0">
                    <div class="box">
                      <h3>
                        02/11/2021
                      </h3>
                      <p class="paragrafo3">Nesse dia lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                  </div>
              </div>
          </div>
      </div>
    </div>


  </div>
</section>

<!-- Cases -->
<div class="a-tivit-cases cases ventures">
  <div id="hero" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="container">
      <div class="row">
        <div class="title">
          <h2 class="text-center">A atuação da Ventures empreende com e para você. Conheça nossos cases:</h2>
        </div>
        <?=do_shortcode('[ac-bloco-cases]')?>
      </div>
    </div>
  </div>
</div>


<!-- Pornto para Inovar? -->
<div class="home-pessoas-e-carreiras inovar">
  <!-- <div id="triangle-down"></div> -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="home-pessoas-e-carreiras-title">
          <h2>pronto para inovar?</h2>
        </div>
        <div class="botao">
          <a href="#" class="btn btn-primary">Fale com a gente!</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>