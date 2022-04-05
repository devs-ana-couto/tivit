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
<div class="related container hide-desktop">
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

<div id="services-intro">
    <div class="container d-flex justify-content-center align-items-center flex-column w-100">
        <div class="text text-center">
            <h2><? the_field('chamada_nuvem_solucoes'); ?></h2>
            <div class="d-flex justify-content-center align-items-center flex-column mt-4 w-100">
                <p><? the_field('descricao_nuvem_solucoes'); ?></p>
            </div>
        </div>
    </div>
</div>

<div id="clouds">
    <div class="container">
        <div class="row">
            <?
                if( have_rows('itens_nuvem_solucoes') ):
                // Loop through rows.
                    for($i=0; have_rows('itens_nuvem_solucoes'); $i++) : the_row();
                    $logo_url_item[$i] = get_sub_field('logo');
                    $name_item[$i] = get_sub_field('nome');
                    $level_item[$i] = get_sub_field('nivel');
                    $certifications_item[$i] = get_sub_field('certificacoes');
                    $acreditacoes_item[$i] = get_sub_field('acreditacoes');
            ?>
            <div class="col-12 col-md-4 hide-mobile">
                <div class="d-flex justify-content-center align-items-center w-100 cloudTitle flex-column position-relative">
                    <h2><?=$name_item[$i]?></h2>
                    <div class="tag">
                        <img class="position-absolute" src="<?=$logo_url_item[$i]?>" alt="mask" />
                    </div>
                    <div class="subtitle">
                        <p>Nível: <strong><?=$level_item[$i]?></strong></p>
                        <p><?=$certifications_item[$i] != '' ? $certifications_item[$i] . ' certificações' : '' ?></p>
                        <p><?=$acreditacoes_item[$i] != '' ? $acreditacoes_item[$i] . ' acreditações' : '' ?></p>
                    </div>
                </div>
            </div>
            

            <!-- Mobile section -->
            <div class="container col-12 col-md-4 customTitleMobile hide-desktop">
              <div class="row">
                <div class="col-6 position-relative d-flex flex-column align-items-center justify-content-center">
                  <p class="w-100">
                    <span>
                      <h2><?=$name_item[$i]?></h2>
                    </span>
                    <img class="tagMobile position-absolute" src="<?=$logo_url_item[$i]?>" width="40" alt="Azure" />
                  </p>
                </div>
                <div class="col-6">
                  <div class="w-100 h-100 d-flex justify-content-start align-items-center">
               
                    <p>Nível: <strong><?=$level_item[$i]?></strong></br>
                    <?=$certifications_item[$i] != '' ? $certifications_item[$i] . ' certificações' : '' ?></br>
                    <?=$acreditacoes_item[$i] != '' ? $acreditacoes_item[$i] . ' acreditações' : '' ?></p>
                     
                  </div>
                </div>
              </div>
            </div>
            <!-- //// Mobile section -->
            <?  endfor; endif; ?>
        </div>
        <div class="divCta text-center">
            <h2 class="cta"><?the_field('chamada_final_nuvem_solucoes');?></h2>
            <a class="buttonCta">Fale com nossos especialistas</a>
        </div>
    </div>
</div>

<div id="middleContent">
    <div class="container">
        <div class="w-100">
            <h2 class="title text-center"><?the_field('chamada_big_numbers_solucoes');?></h2>
        </div>

        <div class="row">

            <div class="col-12 col-md-4"> 
                <div class="bigNumbersTitle">
                    <div class="title">
                        <h2><?the_field('clientes_atendidos_solucoes');?></h2>
                    </div>
                    <div class="subtitle">
                        <p>Clientes<br/> atendidos</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4"> 
                <div class="bigNumbersTitle">
                    <div class="title">
                        <h2>+<?the_field('profissionais_dedicados_a_nuvem_solucoes');?></h2>
                    </div>
                    <div class="subtitle">
                        <p>Profissionais dedicados <br/>à nuvem</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4"> 
                <div class="bigNumbersTitle">
                    <div class="title">
                        <h2><?the_field('certificacoes_de_parceiros_solucoes');?></h2>
                    </div>
                    <div class="subtitle">
                        <p>Certificações de <br/>parceiros</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="diferenciais">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="intro">
                        <h2 class="titleDif"><?the_field('chamada_diferenciais')?></h2>
                        <p class="subtitle"><?the_field('descricao_diferenciais')?></p>
                        <div>
                            <a class="cta">Fale com nossos especialistas</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="content">
                        <div>
                            <h2><?the_field('item_1_nome')?></h2>
                            <p><?the_field('item_1_descricao')?></p>
                        </div>
                        <div>
                            <h2><?the_field('item_2_nome')?></h2>
                            <p><?the_field('item_2_descricao')?></p>
                        </div>
                        <div>
                            <h2><?the_field('item_3_nome')?></h2>
                            <p><?the_field('item_3_descricao')?></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="content">
                        <div>
                            <h2><?the_field('item_4_nome')?></h2>
                            <p><?the_field('item_4_descricao')?></p>
                        </div>
                        <div>
                            <h2><?the_field('item_5_nome')?></h2>
                            <p><?the_field('item_5_descricao')?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="publiccloud position-relative">
        <div id="triangle-down"></div>
        <div>
          <img class="w-100 mask hide-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/solucoes/mask.svg" alt="Mask" />
          <img class="w-100 mask hide-desktop" src="<?php echo get_template_directory_uri(); ?>/assets/images/solucoes/maskmobile.svg" alt="Mask" />
        </div>
          <div class="mainImage text-center m-auto">
            <img class="w-100 hide-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/solucoes/publiccloud.jpg" alt="Public Cloud" />
            <img class="w-100 hide-desktop" src="<?php echo get_template_directory_uri(); ?>/assets/images/solucoes/publiccloudmobile.jpg" alt="Public Cloud" />
          </div>
          <div class="customCloudPosition position-absolute w-100">
            <div class="row custom-direction">
              <div class="col-12 col-md-6 d-flex justify-content-end">
                <div class="h-100">
                  <h2>PUBLIC CLOUD</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div>
                  <img class="w-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/solucoes/play.svg" alt="Play" />
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

<div id="strategy">
  <div class="container">
    <div class="intro">
      <h2><?the_field('chamada_pl_solucoes');?></h2>
      <p><?the_field('descricao_pl_solucoes');?></p>
    </div>
    <div class="row cards hide-mobile">
      <div class="col-12 col-md-4">
        <div class="intro text-center">
          <h3>MIGRAÇÃO</h3>
        </div>
        <? 
            if( have_rows('migracao_pl_solucoes') ):
            // Loop through rows.
                for($i=0; have_rows('migracao_pl_solucoes'); $i++) : the_row();
                $content[$i] = get_sub_field('conteudo');
        ?>
        <div class="card w-100">
          <p><?=$content[$i]?></p>
        </div>
        <? endfor; endif; ?>
      </div>
      <div class="col-12 col-md-4">
        <div class="intro text-center">
          <h3>TRANSFORMAÇÃO</h3>
        </div>
        <? 
            if( have_rows('transformacao_pl_solucoes') ):
            // Loop through rows.
                for($i=0; have_rows('transformacao_pl_solucoes'); $i++) : the_row();
                $content[$i] = get_sub_field('conteudo');
        ?>
        <div class="card w-100">
          <p><?=$content[$i]?></p>
        </div>
        <? endfor; endif; ?>
      </div>
      <div class="col-12 col-md-4">
        <div class="intro text-center">
          <h3>OTIMIZAÇÃO</h3>
        </div>
        <? 
            if( have_rows('otimizacao_pl_solucoes') ):
            // Loop through rows.
                for($i=0; have_rows('otimizacao_pl_solucoes'); $i++) : the_row();
                $content[$i] = get_sub_field('conteudo');
        ?>
        <div class="card w-100">
          <p><?=$content[$i]?></p>
        </div>
        <? endfor; endif; ?>        
      </div>
    </div>

    <!-- Mobile accordion -->
    <div class="accordion hide-desktop" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            MIGRAÇÃO
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <? 
                if( have_rows('migracao_pl_solucoes') ):
                // Loop through rows.
                    for($i=0; have_rows('migracao_pl_solucoes'); $i++) : the_row();
                    $content[$i] = get_sub_field('conteudo');
            ?>
            <div class="card w-100">
            <p><?=$content[$i]?></p>
            </div>
            <? endfor; endif; ?>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            TRANSFORMAÇÃO
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">

            <? 
                if( have_rows('transformacao_pl_solucoes') ):
                // Loop through rows.
                    for($i=0; have_rows('transformacao_pl_solucoes'); $i++) : the_row();
                    $content[$i] = get_sub_field('conteudo');
            ?>
            <div class="card w-100">
            <p><?=$content[$i]?></p>
            </div>
            <? endfor; endif; ?>


          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            OTIMIZAÇÃO
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <? 
                if( have_rows('otimizacao_pl_solucoes') ):
                // Loop through rows.
                    for($i=0; have_rows('otimizacao_pl_solucoes'); $i++) : the_row();
                    $content[$i] = get_sub_field('conteudo');
            ?>
            <div class="card w-100">
            <p><?=$content[$i]?></p>
            </div>
            <? endfor; endif; ?>
          </div>
        </div>
      </div>
    </div>
    <!-- //mobile accordion -->
  </div>
</div>

<!-- Depoimentos -->
<div id="pecDepoimentos" class="lp-tbanks-depoimentos mx-custom">
  <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item heroslide active">
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
      <div class="carousel-item heroslide">
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
      <div class="carousel-item heroslide">
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

<!-- Bloco de Conteúdos -->
<div id="contentServices" class="home-content content-inovacao">
    <div id="triangle-down"></div>
  <div class="container pd">
    <div class="title">
      <h2 class="titleText text-center">CONTEÚDOS RELACIONADOS</h2>
    </div>

    <div class="row hide-mobile">
      <!-- content 1 -->
      <div class="col-12 col-md-4">
        <div class="cardContent p-1"> 
          <div class="img position-relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/artigo1.png" alt="Depoimento">
            <div class="position-absolute tagContent">artigo</div>
          </div>
          <div class="detalhes">
            <span>01/01/2021</span>
            <p class="m-0 h-100">Por <b>Ana Helena Lazaroni</b></p>
          </div>
          <div class="content">
            <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
          </div>
          <div class="autor-time w-100">
            <div class="d-flex flex-row">
              <a href="#">conta híbrida</a>
              <a href="#">varejo</a>
            </div>
            <p>6 minutos de leitura</p>
          </div>
          <div class="acessar">
            <a href="#">acessar artigo</a>
          </div>
        </div>
      </div>
      <!-- // content 1 -->

      <!-- content 2 -->
      <div class="col-12 col-md-4">
        <div class="cardContent p-1">
          <div class="title">
            <h2 class="hide-desktop">cases mais recentes</h2>
          </div>
          <div class="img position-relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/artigo2.png" alt="Depoimento">
            <div class="position-absolute tagContent">press release</div>
          </div>
          <div class="detalhes">
            <span>01/01/2021</span>
            <p class="m-0 h-100">Por <b>Ana Helena Lazaroni</b></p>
          </div>
          <div class="content">
            <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
          </div>
          <div class="autor-time w-100">
            <div class="d-flex flex-row">
              <a href="#">conta híbrida</a>
              <a href="#">varejo</a>
            </div>
            <p>6 minutos de leitura</p>
          </div>
          <div class="acessar">
            <a href="#">acessar artigo</a>
          </div>
        </div>
      </div>
      <!-- // content 2 -->
      <!-- content 3 -->
      <div class="col-12 col-md-4">
        <div class="cardContent p-1">
          <div class="title">
            <h2 class="hide-desktop">cases mais recentes</h2>
          </div>
          <div class="img position-relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/artigo3.png" alt="Depoimento">
            <div class="position-absolute tagContent">artigo</div>
          </div>
          <div class="detalhes">
            <span>01/01/2021</span>
            <p class="m-0 h-100">Por <b>Ana Helena Lazaroni</b></p>
          </div>
          <div class="content">
            <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
          </div>
          <div class="autor-time w-100">
            <div class="d-flex flex-row align-items-center">
              <a href="#">conta híbrida</a>
              <a href="#">varejo</a>
            </div>
            <p>6 minutos de leitura</p>
          </div>
          <div class="acessar">
            <a href="#">acessar artigo</a>
          </div>
        </div>
      </div>
      <!-- // content 3 -->
    </div>

    <!-- mobile slide -->
    <div class="row mx-auto my-auto justify-content-center hide-desktop">
      <div id="contentMobileCarousel" class="carousel slide p-0" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
              <div class="carousel-item heroslide4 content active">
                  <div class="col-11 m-0 p-0">
                    <div class="cardContent p-2"> 
                      <div class="img position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/artigo1.png" alt="Depoimento">
                        <div class="position-absolute tagContent">artigo</div>
                      </div>
                      <div class="detalhes">
                        <span>01/01/2021</span>
                        <p class="m-0 h-100">Por <b>Ana Helena Lazaroni</b></p>
                      </div>
                      <div class="content">
                        <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                      </div>
                      <div class="autor-time w-100">
                        <div class="d-flex flex-row aaa">
                          <a href="#">conta híbrida</a>
                          <a href="#">varejo</a>
                        </div>
                        <p>6 min. de leitura</p>
                      </div>
                      <div class="acessar">
                        <a href="#">acessar artigo</a>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="carousel-item heroslide4 content">
                  <div class="col-11 m-0 p-0">
                    <div class="cardContent p-2">
                      <div class="img position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/artigo2.png" alt="Depoimento">
                        <div class="position-absolute tagContent">press release</div>
                      </div>
                      <div class="detalhes">
                        <span>01/01/2021</span>
                        <p class="m-0 h-100">Por <b>Ana Helena Lazaroni</b></p>
                      </div>
                      <div class="content">
                        <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                      </div>
                      <div class="autor-time w-100">
                        <div class="d-flex flex-row">
                          <a href="#">conta híbrida</a>
                          <a href="#">varejo</a>
                        </div>
                        <p>6 min. de leitura</p>
                      </div>
                      <div class="acessar">
                        <a href="#">acessar artigo</a>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="carousel-item heroslide4 content">
                  <div class="col-11 m-0 p-0">
                    <div class="cardContent p-2">
                      <div class="img position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/artigo3.png" alt="Depoimento">
                        <div class="position-absolute tagContent">artigo</div>
                      </div>
                      <div class="detalhes">
                        <span>01/01/2021</span>
                        <p class="m-0 h-100">Por <b>Ana Helena Lazaroni</b></p>
                      </div>
                      <div class="content">
                        <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                      </div>
                      <div class="autor-time w-100">
                        <div class="d-flex flex-row align-items-center">
                          <a href="#">conta híbrida</a>
                          <a href="#">varejo</a>
                        </div>
                        <p>6 min. de leitura</p>
                      </div>
                      <div class="acessar">
                        <a href="#">acessar artigo</a>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
    </div>

  </div>
</div>

<?php
endwhile; endif;
get_footer();
?>