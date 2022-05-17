<?php /* Template Name: Pessoas e Carreiras */ ?>
<?php get_header(); ?>

<!-- Hero banner-->
<div class="pec-hero position-relative" style="background: url('<? $detect->isMobile() ? the_field('banner_mobile_pc') : the_field('banner_desktop_pc'); ?>') no-repeat center center; background-size: cover;">
  <div class="pec-hero-title">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <div class="zindex position-relative">
                <h1><?the_field('pre_chamada_pc')?></h1>
                <h2><?the_field('chamada_pc')?></h2>
                <div class="buttoncta">
                  <a href="<?the_field('link_cta')?>"><?the_field('texto_do_cta')?></a>
                </div>
            </div>
            <div class="maskDiv text-center hide-desktop">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/banner-mask.svg" class="position-absolute mask" alt="Máscara">
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="customMargin d-flex justify-content-center align-items-center hide-mobile">
      <img class="mask w-100 position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/v_slider_home.svg" alt="mask" />
      <p class="customNumbers"><?the_field('chamada_numeros_pc')?></p>
  </div>
</div>

<div id="pecCounter" class="lp-tbanks-conheca">
  <div class="container">
    <div class="row">
      <div class="col-12">

      <div class="numberMobile hide-desktop">
        <small><?the_field('chamada_numeros_pc')?></small>
      </div>

        <div class="lp-tbanks-credibilidade text-center">
          <div class="row">
            <div class="col-12 col-md-4 hide-mobile">
              <p class="w-100 position-relative">
                <span>
                  <b><?the_field('nota_glassdoor')?></b>
                </span>
                <img class="tag position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/glassdoor.svg" width="60" alt="Glass Door" />
              </p>
              <div class="w-100 d-flex justify-content-center align-items-center">
                  <p class="custom-text">
                    Nota Glassdoor
                  </p>
              </div>
            </div>

            <!-- Mobile section -->
            <div class="col-12 col-md-4 hide-desktop">
              <div class="row">
                <div class="col-6">
                  <p class="w-100 position-relative">
                    <span>
                      <b><?the_field('nota_glassdoor')?></b>
                    </span>
                    <img class="tag position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/glassdoor.svg" width="60" alt="Glass Door" />
                  </p>
                </div>
                <div class="col-6">
                  <div class="w-100 h-100 d-flex justify-content-start align-items-center">
                      <p class="custom-text">
                        Nota Glassdoor
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- //// Mobile section -->

            <div class="col-12 col-md-4 hide-mobile">
              <p class="w-100 position-relative">
                <span><?the_field('recomendaria_para_um_amigo')?></span>
                <img class="tag position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/greatplace.svg" width="60" alt="Great place to work tag" />
              </p>
              <div class="w-100 d-flex justify-content-center align-items-center">
                  <p class="custom-text">
                    Recomendaria para um amigo
                  </p>
              </div>
            </div>

            <!-- Mobile section -->
            <div class="col-12 col-md-4 hide-desktop">
              <div class="row">
                <div class="col-6">
                  <p class="w-100 position-relative">
                    <span>
                      <b><?the_field('recomendaria_para_um_amigo')?></b>
                    </span>
                    <img class="tag position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/greatplace.svg" width="60" alt="Great place to work tag" />
                  </p>
                </div>
                <div class="col-6">
                  <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                      <p class="custom-text">
                        Recomendaria para um amigo
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- //// Mobile section -->

            <div class="col-12 col-md-4 hide-mobile">
              <p>
                <span><?the_field('das_vagas_preenchidas_com_promocao_interna')?></span>
              </p>
              <div class="w-100 d-flex justify-content-center align-items-center">
                  <p class="custom-text">
                    Das vagas preenchidas com promoção interna
                  </p>
              </div>
            </div>

            <!-- Mobile section -->
            <div class="col-12 col-md-4 hide-desktop">
              <div class="row">
                <div class="col-6">
                  <p class="w-100 position-relative">
                    <span>
                      <b><?the_field('das_vagas_preenchidas_com_promocao_interna')?></b>
                    </span>
                  </p>
                </div>
                <div class="col-6">
                  <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                      <p class="custom-text">
                        Das vagas preenchidas com promoção interna
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- //// Mobile section -->

          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div id="pecConheca" class="lp-tbanks-conheca">
    <div class="container">
        <div class="lp-tbanks-arrow text-center mb-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/icons/seta-red.svg" class="bounce" alt="Tbanks Saiba Mais">
        </div>
        <div class="row">
            <div class="col-12">
                <div class="lp-tbanks-conheca-content">
                    <p>
                      <?the_field('introducao_numeros_pc');?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="pecPort" class="port">
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
                  <h3 class="hide-mobile">conheça nossos programas</h3>
                  <a href="#"><p class="active">TIVIT MULTICLOUD</p></a>
                  <a href="#"><p>ACELERA DEVS</p></a>
                  <a href="#"><p>Programa de Aceleração de Carreira + MOMENTO UP</p></a>
                  <a href="#"><p>Instituto TIVIT</p></a>
                  <div class="d-flex justify-content-center align-items-center flex-column hide-desktop">
                    <div class="cta">
                      <small>Na TIVIT, o Programa de Aceleração de Carreiras, nosso PAC, acontece de verdade! Ele
                      foi desenvolvido para proporcionar a todos colaboradores a possibilidade de crescer
                      profissionalmente dentro da TIVIT. </small>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-12 hide-mobile">
            <p class="position-absolute desc"> Na TIVIT, o Programa de Aceleração de Carreiras, nosso PAC, acontece de verdade! Ele
              foi desenvolvido para proporcionar a todos colaboradores a possibilidade de crescer
              profissionalmente dentro da TIVIT. </p>
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

<!-- Valorização -->
<div id="tdx" class="valorizacao">
  <div class="container">
    <div class="d-flex justify-content-center align-items-center flex-column w-100">
      <h2 class="title text-center">
        O QUE VALORIZAMOS E VIVENCIAMOS
      </h2>
    </div>

    <div class="row hide-mobile mt-2">
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="w-100">
            <div class="w-100 m-auto text-center">
              <img src="<? the_field('item_1_logo_vv') ?>" alt="design">
            </div>
            <h2>
                <? the_field('item_1_titulo_vv') ?>
            </h2>
            <p>
                <? the_field('item_1_descricao_vv') ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="w-100">
            <div class="w-100 m-auto text-center">
              <img src="<? the_field('item_2_logo_vv') ?>" alt="grafico">
            </div>
            <h2>
                <? the_field('item_2_titulo_vv') ?>
            </h2>
            <p>
                <? the_field('item_2_descricao_vv') ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="box">
          <div class="w-100">
            <div class="w-100 m-auto text-center">
              <img src="<? the_field('item_3_logo_vv') ?>" alt="code">
            </div>
            <h2>
                <? the_field('item_3_titulo_vv') ?>
            </h2>
            <p>
                <? the_field('item_3_descricao_vv') ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- mobile slide -->
    <div class="row mx-auto my-auto justify-content-center hide-desktop">
      <div id="contentMobileCarousel" class="carousel slide p-0" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">

              <div class="carousel-item heroslide4 content active">
                <div class="col-11 m-0 p-0">
                  <div class="box">
                    <div class="w-100">
                      <div class="w-100 m-auto text-center">
                        <img src="<? the_field('item_1_logo_vv') ?>" alt="design">
                      </div>
                      <h2>
                      <? the_field('item_1_titulo_vv') ?>
                      </h2>
                      <p>
                      <? the_field('item_1_descricao_vv') ?>
                      </p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="carousel-item heroslide4 content">
                <div class="col-11 m-0 p-0">
                  <div class="box">
                    <div class="w-100">
                      <div class="w-100 m-auto text-center">
                        <img src="<? the_field('item_2_logo_vv') ?>" alt="design">
                      </div>
                      <h2>
                      <? the_field('item_2_titulo_vv') ?>
                      </h2>
                      <p>
                      <? the_field('item_2_descricao_vv') ?>
                      </p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="carousel-item heroslide4 content">
                <div class="col-11 m-0 p-0">
                  <div class="box">
                    <div class="w-100">
                      <div class="w-100 m-auto text-center">
                        <img src="<? the_field('item_3_logo_vv') ?>" alt="design">
                      </div>
                      <h2>
                      <? the_field('item_3_titulo_vv') ?>
                      </h2>
                      <p>
                      <? the_field('item_3_descricao_vv') ?>
                      </p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>

  </div>
</div>

<!-- Depoimentos -->
<div id="pecDepoimentos" class="lp-tbanks-depoimentos">
  <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?
            if( have_rows('depoimentos_pc') ):
            // Loop through rows.
                for($i=0; have_rows('depoimentos_pc'); $i++) : the_row();
                $imagem_url_item[$i] = get_sub_field('imagem');
                $name_item[$i] = get_sub_field('nome');
                $role_item[$i] = get_sub_field('cargo');
                $linkedin_item[$i] = get_sub_field('linkedin');
                $github_item[$i] = get_sub_field('github');
                $instagram_item[$i] = get_sub_field('instagram');
                $depoimento_item[$i] = get_sub_field('depoimento');
        ?>
        <div class="carousel-item heroslide <?=$i==0 ? 'active' : ''?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="lp-tbanks-depoimentos-content text-center ">
                            <div class="lp-tbanks-depoimentos-autor">
                                <img src="<?=$imagem_url_item[$i];  ?>" alt="Tbanks Saiba Mais">
                                <h3><?=$name_item[$i]?></h3>
                                <h4><?=$role_item[$i]?></h4>
                                <div class="redes d-flex flex-row justify-content-center align-items-center w-100">
                                    <a href="<?=$linkedin_item[$i]?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in.svg" alt="Linkedin" class="img-fluid"></a>
                                    <a href="<?=$github_item[$i]?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Git" class="img-fluid"></a>
                                    <a href="<?=$instagram_item[$i]?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Mundo" class="img-fluid"></a>
                                </div>
                                <p>
                                ”<?=$depoimento_item[$i]?>”
                                </p>
                            </div>
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

<!-- O que a TIVIT Oferece -->
<div id="pecOferece" class="lp-tbanks-conheca">
  <div class="container">
    <div class="d-flex justify-content-center align-items-center flex-column w-100">
      <h2 class="title text-center">
        O que a tivit oferece
      </h2>
    </div>

    <div class="lp-tbanks-services text-center m-0 hide-mobile">

      <div class="row">
        <?
            if( have_rows('itens_opc') ):
            // Loop through rows.
                for($i=0; have_rows('itens_opc'); $i++) : the_row();
                $name_itemp[$i] = get_sub_field('nome');
                $description_itemp[$i] = get_sub_field('descricao');
        ?>
        <div class="col-12 col-md-3">
          <div class="bg-white">
            <h3><?=$name_itemp[$i]?></h3>
            <p><?=$description_itemp[$i]?></p>
          </div>
        </div>
        <? endfor; endif; ?>

      </div>

    </div>

    <!-- Bloco Mobile Carrossel -->
    <div class="lp-tbanks-services text-center m-0 hide-desktop">
      <div id="carouselCustom" class="container-fluid p-0 text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="offerCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <?
                    if( have_rows('itens_opc') ):
                    // Loop through rows.
                        for($i=0; have_rows('itens_opc'); $i++) : the_row();
                        $name_itemp[$i] = get_sub_field('nome');
                        $description_itemp[$i] = get_sub_field('descricao');
                ?>
                <div class="carousel-item heroslide6 <?=$i==0 ? 'active' : '';?>">
                  <div class="col-11 col-md-3">
                    <div class="bg-white">
                      <h3><?=$name_itemp[$i]?></h3>
                      <p><?=$description_itemp[$i]?></p>
                    </div>
                  </div>
                </div>
                <? endfor; endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="insiderBlock d-flex justify-content-center align-items-center flex-column w-100">
      <h2 class="title text-center">
        Nossos Benefícios
      </h2>
    </div>

    <!-- first row -->
    <div class="row hide-mobile">
        <?
            if( have_rows('itens_nb') ):
            // Loop through rows.
                for($i=0; have_rows('itens_nb'); $i++) : the_row();
                $icone_itemnb[$i] = get_sub_field('icone');
                $name_itemnb[$i] = get_sub_field('nome');
                $description_itemnb[$i] = get_sub_field('descricao');
        ?>
        <div class="col-sm-12 col-md-4">
            <div class="box">
                <div class="d-flex flex-column justify-content-start align-items-center w-100 h-100 margin-auto text-center">
                    <img src="<?=$icone_itemnb[$i]?>" alt="Privally">
                    <div class="content">
                        <h2><?=$name_itemnb[$i]?></h2>
                        <p>
                            <?=$description_itemnb[$i]?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <? endfor; endif; ?>

    </div>

    <!-- Bloco Mobile Carrossel -->
    <div id="carouselCustom" class="container-fluid p-0 text-center my-3 hide-desktop">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="offerCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item heroslide5 active">
                  <div class="col-11 col-md-3">
                    <div class="box">
                      <div class="d-flex flex-column justify-content-start align-items-center w-100 h-100 margin-auto text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/heart.svg" alt="Privally">
                        <div class="content">
                          <h2>CESTA DE BENEFÍCIOS</h2>
                          <p>
                            Vale Refeição/Alimentação<br>
                            Vale transporte<br>
                            Estacionamento
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item heroslide5">
                  <div class="col-11 col-md-3">
                    <div class="box">
                      <div class="d-flex flex-column justify-content-start align-items-center w-100 h-100 margin-auto text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/hand-heart.svg" alt="Iambda">
                        <div class="content">
                          <h2>CUIDADO & APOIO</h2>
                          <p>
                            Auxílio Creche<br>
                            Auxílio Home Office<br>
                            Parcerias com Universidades e Escolas de Idioma<br>
                            Campanha #EUINDICO<br>
                            PPR - Programa de Participação nos Resultados
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item heroslide5">
                  <div class="col-11 col-md-3">
                    <div class="box">
                      <div class="d-flex flex-column justify-content-start align-items-center w-100 h-100 margin-auto text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/shield.svg" alt="Stone Age">
                        <div class="content">
                          <h2>SAÚDE & VIDA</h2>
                          <p>
                            Plano de Saúde<br>
                            Plano Odontológico<br>
                            Convênio Farmácia<br>
                            Seguro de Vida
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>

  </div>
</div>

<!-- Conheça a nossa equipe -->
<div id="pecConheca" class="lp-tbanks-conheca">
    <div id="triangle-down"></div>
  <div class="container">
    <div class="d-flex justify-content-center align-items-center flex-column w-100">
      <h2 class="title text-center">
        CONHEÇA A NOSSA EQUIPE
      </h2>
    </div>

    <!-- Bloco Carrossel Infinito -->
    <div id="carouselCustom" class="container-fluid text-center my-3">
      <div class="row mx-auto my-auto justify-content-center">
          <div id="esg" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item heroslide2 active">
                  <div class="col-11 col-md-3">
                      <div class="card">
                          <div class="card-img position-relative">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/customer1.svg" alt="Blog 1" class="img-fluid w-100">
                              <div class="position-absolute tagIn"> <img class="position-absolute imgIn" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in-white.svg" alt="Linkedin" class="img-fluid"> </div>
                          </div>
                          <div class="content">
                            <h2>fulano de tal da silva</h2>
                            <p>Área de atuação lorem ipsum</p>
                          </div>
                          <div class="redes-sociais d-flex justify-content-center flex-row">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Blog 3" class="img-fluid">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Blog 3" class="img-fluid">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="carousel-item heroslide2">
                  <div class="col-11 col-md-3">
                      <div class="card">
                          <div class="card-img position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/customer2.svg" alt="Blog 2" class="img-fluid w-100">
                            <div class="position-absolute tagIn"> <img class="position-absolute imgIn" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in-white.svg" alt="Linkedin" class="img-fluid"> </div>
                          </div>
                          <div class="content">
                            <h2>fulano de tal da silva</h2>
                            <p>Área de atuação lorem ipsum</p>
                          </div>
                          <div class="redes-sociais d-flex justify-content-center flex-row">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Blog 3" class="img-fluid">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Blog 3" class="img-fluid">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="carousel-item heroslide2">
                  <div class="col-11 col-md-3">
                      <div class="card">
                          <div class="card-img position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/customer3.svg" alt="Blog 3" class="img-fluid w-100">
                            <div class="position-absolute tagIn"> <img class="position-absolute imgIn" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in-white.svg" alt="Linkedin" class="img-fluid"> </div>
                          </div>
                          <div class="content">
                            <h2>fulano de tal da silva</h2>
                            <p>Área de atuação lorem ipsum</p>
                          </div>
                          <div class="redes-sociais d-flex justify-content-center flex-row">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Blog 3" class="img-fluid">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Blog 3" class="img-fluid">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="carousel-item heroslide2">
                  <div class="col-11 col-md-3">
                      <div class="card">
                          <div class="card-img position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/customer4.svg" alt="Blog 2" class="img-fluid w-100">
                            <div class="position-absolute tagIn"> <img class="position-absolute imgIn" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in-white.svg" alt="Linkedin" class="img-fluid"> </div>
                          </div>
                          <div class="content">
                            <h2>fulano de tal da silva</h2>
                            <p>Área de atuação lorem ipsum</p>
                          </div>
                          <div class="redes-sociais d-flex justify-content-center flex-row">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Blog 3" class="img-fluid">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Blog 3" class="img-fluid">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="carousel-item heroslide2">
                  <div class="col-11 col-md-3">
                      <div class="card">
                          <div class="card-img position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/customer1.svg" alt="Blog 3" class="img-fluid w-100">
                            <div class="position-absolute tagIn"> <img class="position-absolute imgIn" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in-white.svg" alt="Linkedin" class="img-fluid"> </div>
                          </div>
                          <div class="content">
                            <h2>fulano de tal da silva</h2>
                            <p>Área de atuação lorem ipsum</p>
                          </div>
                          <div class="d-flex justify-content-center flex-row">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Blog 3" class="img-fluid">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Blog 3" class="img-fluid">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="d-flex justify-content-center mt-5">
            <a class="carousel-control-prev bg-transparent w-aut" href="#esg" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <div class="d-flex flex-row counter2">
              <div class="numactive2"></div><div class="numseparation2"></div><div class="numtotal2"></div>
            </div>
            <a class="carousel-control-next bg-transparent w-aut" href="#esg" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>

<!-- depoimentos internos -->
<div id="pecInterno">

  <div id="pecInternoDepoimentos" class="lp-tbanks-depoimentos">
    <div id="recipeCarouselInterno" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item heroslide3 active">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="lp-tbanks-depoimentos-content text-center ">
                  <div class="lp-tbanks-depoimentos-autor">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/cliente.svg" alt="Tbanks Saiba Mais">
                    <h3>Fulano de Tal da Silva</h3>
                    <h4>CTO, trabalha há 5 anos na TIVIT.</h4>
                    <div class="redes d-flex flex-row justify-content-center align-items-center w-100">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in.svg" alt="Linkedin" class="img-fluid">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Git" class="img-fluid">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Mundo" class="img-fluid">
                    </div>
                    <p>
                    ”Através de um serviço modular, de contratação sob demanda, a TIVIT coloca sua expertise reconhecida em toda a América Latina Lorem ipsum dolor sit amet.”
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item heroslide3">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
              <div class="lp-tbanks-depoimentos-content text-center ">
                  <div class="lp-tbanks-depoimentos-autor">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/cliente.svg" alt="Tbanks Saiba Mais">
                    <h3>Fulano de Tal da Silva</h3>
                    <h4>CTO, trabalha há 5 anos na TIVIT.</h4>
                    <div class="redes d-flex flex-row justify-content-center align-items-center w-100">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in.svg" alt="Linkedin" class="img-fluid">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Git" class="img-fluid">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Mundo" class="img-fluid">
                    </div>
                    <p>
                    ”Através de um serviço modular, de contratação sob demanda, a TIVIT coloca sua expertise reconhecida em toda a América Latina Lorem ipsum dolor sit amet.”
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item heroslide3">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="lp-tbanks-depoimentos-content text-center ">
                  <div class="lp-tbanks-depoimentos-autor">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/cliente.svg" alt="Tbanks Saiba Mais">
                    <h3>Fulano de Tal da Silva</h3>
                    <h4>CTO, trabalha há 5 anos na TIVIT.</h4>
                    <div class="redes d-flex flex-row justify-content-center align-items-center w-100">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in.svg" alt="Linkedin" class="img-fluid">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg" alt="Git" class="img-fluid">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg" alt="Mundo" class="img-fluid">
                    </div>
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
      <div class="d-flex flex-row justify-content-center counter3 mt-3 mobileRelative position-relative">
        <div class="numactive3"></div><div class="numseparation3"></div><div class="numtotal3"></div>
        <button class="carousel-control-prev" type="button" data-bs-target="#recipeCarouselInterno" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#recipeCarouselInterno" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

</div>

<div id="pecVagas">
  <div id="triangle-down"></div>
  <div class="container">
    <div class="d-flex justify-content-center align-items-center flex-column w-100">
      <h2 class="title text-center">
        VAGAS
      </h2>
    </div>
    <div class="row items m-0 m-md-auto">
      <div class="col-sm-12 col-md-4">
        <div class="card">
          <small>Profissional iniciante</small>
          <h2>Package Consultant-SAP BW Analytics</h2>
          <p>Descritivo breve lorem ipsum dolor.</p>
          <a>confira esta vaga</a>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="card">
          <small>Profissional iniciante</small>
          <h2>Package Consultant-SAP BW Analytics</h2>
          <p>Descritivo breve lorem ipsum dolor.</p>
          <a>confira esta vaga</a>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="card">
          <small>Profissional iniciante</small>
          <h2>Package Consultant-SAP BW Analytics</h2>
          <p>Descritivo breve lorem ipsum dolor.</p>
          <a>confira esta vaga</a>
        </div>
      </div>
    </div>
    <div class="btnCta d-flex justify-content-center align-items-center w-100">
      <a>
        Ver todas AS VAGAS
      </a>
    </div>

    <?php echo do_shortcode('[ac-bloco-faq]'); ?>

  </div>
</div>

<?php get_footer(); ?>