<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<section class="home-hero">

  <div id="hero" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <div class="carousel-inner text-center">
        <?php
            // Check rows exists.
            if( have_rows('slider_hero') ):
                // Loop through rows.
                for($i=0; have_rows('slider_hero'); $i++) : the_row();
                    $banner_desktop_url[$i] = get_sub_field('banner_desktop');
                    $banner_mobile_url[$i] = get_sub_field('banner_mobile');
                    $chamada[$i] = get_sub_field('chamada');
        ?>
        <div class="carousel-item heroslide <?=$i==0 ? 'active' : ''?>">
            <div class="content">
                <img class="hide-mobile maskImg" src="<?=$banner_desktop_url[$i]?>" alt="Imagem do Slider" />
                <img class="hide-mobile mask" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mascara_slider_v.svg" alt="mask" />
                <div class="title position-absolute">
                    <h1><?=$chamada[$i]?></h1>
                </div>
            </div>
        </div>
        <?php
            // End loop.
            endfor;
            endif;
        ?>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="navigation">
            <button class="carousel-control-prev hide-mobile" type="button" data-bs-target="#hero" data-bs-slide="prev">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/arrow_left.png" alt="arrow_left">
            </button>
            <div class="d-flex flex-row counter hide-mobile">
              <div class="numactive"></div>
              <div class="numseparation"></div>
              <div class="numtotal"></div>
            </div>
            <button class="carousel-control-next hide-mobile" type="button" data-bs-target="#hero" data-bs-slide="next">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/arrow_right.png" alt="arrow_right">
            </button>
            <div class="carousel-indicators">
                <?php
                    if( have_rows('slider_hero') ):
                    // Loop through rows.
                        for($i=0; have_rows('slider_hero'); $i++) : the_row();
                ?>
              <button type="button" data-bs-target="#hero" data-bs-slide-to="<?=$i?>" <?=$i==0 ? 'class="active" aria-current="true"' : 'class=""' ?> aria-label="Hero"></button>
              <?php
                endfor; endif;  ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="redes hide-mobile">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/linkedin-white.svg"  alt="Linkedin">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/instagram-white.svg"  alt="Instagram">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/twitter-white.svg"  alt="Twitter">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/youtube-white.svg"  alt="Youtube">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/facebook-white.svg"  alt="Facebook">
        </div>
      </div>
    </div>
  </div>

</section>

<div class="home-intro">
  <div class="w-100 transition">
    <img class="imgtransition position-absolute hide-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/trans1flp.svg" alt="transition1">
  </div>
  <div class="container pcustom">
    <div class="row">
      <div class="col-12">
        <div class="arrow text-center">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icons/seta-red.svg" alt="Saiba Mais">
        </div>
        <p class="mt-3">
          <? the_field('texto_de_introducao') ?>
        </p>
      </div>
    </div>
  </div>
</div>

<section class="port">
  <div class="d-flex justify-content-center bgport position-absolute">
  </div>
  <div class="home-portifolio">
    <div class="container">
      <div class="home-portifolio-image">
        <div class="d-flex justify-content-center w-100">
          <div id="triangle-down"></div>
        </div>
        <div class="row customposition position-relative">
          <div class="col-12">
            <div class="home-portifolio-content">
                <div class="txt">
                  <h3><?php echo get_field('titulo_portifolio'); ?></h3>
                <?php
                    if( have_rows('portifolio_lista') ){
                        for($i=0; have_rows('portifolio_lista'); $i++) {
                          the_row();
                          echo '<a href="#"><p';
                          if ($i==0) echo ' class="active"';
                          echo '>'.get_sub_field('portifolio_titulo').'</p></a>';
                        }
                      }
                ?>
                <?php echo get_field('portifolio_call_to_action'); ?>
                  <!-- <a href="#"><p class="active">Meios de pagamento</p></a>
                  <a href="#">
                    <p>Serviços financeiros</p>
                  </a>
                  <a href="#"><p>Manufatura</p></a>
                  <a href="#"><p>Utilities</p></a>
                  <a href="#"><p>Varejo</p></a> -->
                  <!-- <div class="botao">
                    <a href="#" class="btn btn-primary">Conheça nossos produtos</a>
                  </div> -->
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center mascaraDobra3 position-absolute hide-desktop">
            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/portmaskmobile.svg" alt="mask">
          </div>
        </div>
        <div class="d-flex justify-content-center mascaraDobra3 hide-mobile">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mascara_banner.svg" alt="mask">
        </div>
      </div>
    </div>
  </div>
</section>

<div class="home-content">

  <div class="d-flex justify-content-center transitionContent hide-mobile position-absolute"></div>
  <div id="triangle-down"></div>

  <?=do_shortcode('[ac-bloco-conteudo]');?>
             
</div>


<div class="home-cases">
  <div class="d-flex justify-content-center transitionCases position-absolute hide-mobile"></div>
  <div class="d-flex justify-content-center bgtriangulo position-absolute"></div>
  <div class="container divOpacity">
    <div class="row d-flex justify-content-center align-items-center position-absolute m-0 lr">

      <div class="home-cases-title">
        <h2>Nossos Cases</h2>
        <p class="paragrafo2">Lorem ipsum dolor sit amet, consectetur.</p>
      </div>
      <?=do_shortcode('[ac_bloco_home_cases]');?>
    </div>
  </div>
</div>

<section class="partners">
  <?=do_shortcode('[ac-bloco-clientes]');?>
</section>


<section class="pessoasCarreiras">
  <div class="d-flex justify-content-center transCarreiras position-absolute hide-mobile"></div>
  <div class="d-flex justify-content-center home-pessoas-e-carreiras">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="home-pessoas-e-carreiras-title">
            <h2>Pessoas e Carreiras</h2>
            <p class="">Você está preparado para o futuro?
            </br>Aqui na TIVIT, temos a resposta que você precisa.</p>
          </div>
          <div class="botao">
            <a href="#">Saiba mais</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>