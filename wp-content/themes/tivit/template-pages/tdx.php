<?php /* Template Name: Landing TDX */ ?>
<?php get_header(); ?>

<?php page_bulder_init(get_the_ID(),$post,true);?>

<div class="lp-tbanks-hero lp-tdx-hero" style="background: url('<? $detect->isMobile() ? the_field('banner_mobile') : the_field('banner_desktop'); ?>') no-repeat center center; background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 lp-banks-hero-content text-center">
        <img class="fade-in-bottom" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tdx/tdxlogo.svg" alt="Tdx powered by TIVIT">
        <div class="alignBannerText">
          <h1 class="fade-in-bottom"><? the_field('chamada'); ?></h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="lp-tbanks-conheca">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <div class="lp-tbanks-conheca-content lp-tdx-conheca-content">
          <p>
            <? the_field('conteudo'); ?>
          </p>
        </div>

        <div class="lp-tbanks-credibilidade text-center">
          <div class="row">
            <div class="col-12 col-md-4">
              <p>
                <span>
                  <strong><? the_field('paises'); ?></strong>
                </span>
                </br>
                Países
              </p>
            </div>

            <div class="col-12 col-md-4">
              <p>
                <span>+<? the_field('pessoas'); ?></span>
                </br>
                Pessoas
              </p>
            </div>

            <div class="col-12 col-md-4">
              <p>
                <span>+<? the_field('clientes'); ?></span>
                </br>
                Clientes
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="lp-tdx-conheca">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 text-center">
        <img class="fade-in-bottom" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tdx/tdx-conheca.png" alt="Tdx powered by TIVIT">
      </div>
      <div class="col-12 col-md-6">
        <div class="lp-tdx-conheca-content">
          <h2><? the_field('titulo_conheca'); ?></h2>
          <? the_field('texto_conheca'); ?>
          <div class="mt-0 mt-md-5">
            <a class="buttoncta"> CONHEÇA A TDX </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="lp-tdx-parceiros text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="lp-tdx-parceiros-content">
          <h2>Parceiros</h2>
        </div>
        <div class="mt-5">
          <div class="row d-flex justify-content-center align-items-center">
            <?php
                // Check rows exists.
                if( have_rows('parceiros_tdx') ):
                    // Loop through rows.
                    for($i=0; have_rows('parceiros_tdx'); $i++) : the_row();
                        $imagem_url[$i] = get_sub_field('imagem');
                ?>
                <div class="col-12 col-md-3 mt-5 mt-md-0">
                    <img class="fade-in-bottom" src="<?=$imagem_url[$i];?>" alt="Parceiros">
                </div>

            <?php
                // End loop.
                endfor;
                endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bloco de Cases -->
<div id="cases" class="esg carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="container">
    <div class="row">
      <div class="lp-tbanks-confira lp-tdx">

        <div id="triangle-down"></div>

        <div class="carousel-inner">

          <div class="row columnReverseMobile">
            <div class="col-12 col-md-6 lp-tbanks-confira-bg-right lp-tdx-confira-bg-right">
              <div class="lp-tbanks-confira-content">
                <h3>
                Cases de sucesso <br> da <strong>TDX</strong>
                </h3>
              </div>
            </div>

            <div class="col-12 col-md-6">

              <div class="carousel-item heroslide active">
                <div class="col-12 lp-tbanks-confira-bg-left slide1 hide-mobile">
                  <div class="lp-tbanks-confira-carousel">
                    <h2>cnh industrial</h2>
                    <p class="paragrafo3">
                      Plataforma digital mobile desenvolvida de ponta a ponta, com serviços para concessionárias: simulações de crédito, captação, envio e aprovação de documentos.
                    </p>
                  </div>
                </div>
                <div class="col-12 lp-tbanks-confira-bg-mobile hide-desktop">
                  <div class="position-relative">
                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tdx/mobileslide1.svg" alt="Mobile Slide 1">
                    <div class="lp-tbanks-confira-carousel d-flex flex-column justify-content-center h-100 position-absolute">
                      <h2>cnh industrial</h2>
                      <p class="paragrafo3">
                        Plataforma digital mobile desenvolvida de ponta a ponta, com serviços para concessionárias: simulações de crédito, captação, envio e aprovação de documentos.
                      </p>
                      <a>CONHEÇA A AÇÃO</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-item heroslide">
                <div class="col-12 lp-tbanks-confira-bg-left  hide-mobile">
                  <div class="lp-tbanks-confira-carousel">
                    <h2>cnh industrial</h2>
                    <p class="paragrafo3">
                      Plataforma digital mobile desenvolvida de ponta a ponta, com serviços para concessionárias: simulações de crédito, captação, envio e aprovação de documentos.
                    </p>
                  </div>
                </div>
                <div class="col-12 lp-tbanks-confira-bg-mobile hide-desktop">
                  <div class="position-relative">
                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tdx/mobileslide1.svg" alt="Mobile Slide 1">
                    <div class="lp-tbanks-confira-carousel d-flex flex-column justify-content-center h-100 position-absolute">
                      <h2>cnh industrial</h2>
                      <p class="paragrafo3">
                        Plataforma digital mobile desenvolvida de ponta a ponta, com serviços para concessionárias: simulações de crédito, captação, envio e aprovação de documentos.
                      </p>
                      <a>CONHEÇA A AÇÃO</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-item heroslide">
                <div class="col-12 lp-tbanks-confira-bg-left slide1 hide-mobile">
                  <div class="lp-tbanks-confira-carousel">
                    <h2>cnh industrial</h2>
                    <p class="paragrafo3">
                      Plataforma digital mobile desenvolvida de ponta a ponta, com serviços para concessionárias: simulações de crédito, captação, envio e aprovação de documentos.
                    </p>
                  </div>
                </div>
                <div class="col-12 lp-tbanks-confira-bg-mobile hide-desktop">
                  <div class="position-relative">
                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tdx/mobileslide1.svg" alt="Mobile Slide 1">
                    <div class="lp-tbanks-confira-carousel d-flex flex-column justify-content-center h-100 position-absolute">
                      <h2>cnh industrial</h2>
                      <p class="paragrafo3">
                        Plataforma digital mobile desenvolvida de ponta a ponta, com serviços para concessionárias: simulações de crédito, captação, envio e aprovação de documentos.
                      </p>
                      <a>CONHEÇA A AÇÃO</a>
                    </div>
                  </div>
                </div>

              </div>

            </div>

            <div class="col-12 col-md-6">
              <div class="navigation">
                <button class="carousel-control-prev" type="button" data-bs-target="#cases" data-bs-slide="prev">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/arrow_left.png" alt="arrow_left">
                </button>
                <div class="d-flex flex-row counter">
                  <div class="numactive"></div><div class="numseparation"></div><div class="numtotal"></div>
                </div>
                <button class="carousel-control-next" type="button" data-bs-target="#cases" data-bs-slide="next">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/arrow_right.png" alt="arrow_right">
                </button>
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#esg" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Content 1"></button>
                  <button type="button" data-bs-target="#esg" data-bs-slide-to="1" aria-label="Content 2"></button>
                  <button type="button" data-bs-target="#esg" data-bs-slide-to="2" aria-label="Content 3"></button>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>

<div class="lp-tdx-como-fazemos text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="lp-tdx-como-fazemos-content">
            <h2><? the_field('titulo_como_fazemos'); ?></h2>
            <? the_field('texto_como_fazemos'); ?>
        </div>
        <img class="fade-in-bottom" src="<?= $detect->isMobile() ? the_field('grafico_mobile_como_fazemos') : the_field('grafico_desktop_como_fazemos');?>" alt="Como fazemos TDX">
      </div>
    </div>
  </div>
</div>

<div class="lp-tdx-metodologia text-center">
  <div class="container">

    <div class="lp-tdx-metodologia-content">

      <?
      $entrega_de_valor = get_field('entrega_de_valor');
      if($entrega_de_valor): ?>
      <h2><?=$entrega_de_valor['titulo'] ?></h2>
      <p class="paragrafo2">
      <?=$entrega_de_valor['descricao'] ?>
      </p>

    </div>
    <?php
        if($detect->isMobile()){
            echo '<div class="row mx-auto my-auto justify-content-center"><div id="valuesMobileCarousel" class="carousel slide p-0 hide-desktop" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">';
        }else{
            echo '<div class="row">';
        }

        $count = count($entrega_de_valor['item']);
        if($entrega_de_valor['item']):
            // Loop through rows.
            for($i=0; $i < $count; $i++) : the_row();
                $icone_entrega[$i] = $entrega_de_valor['item'][$i]['icone'];
                $title_entrega[$i] = $entrega_de_valor['item'][$i]['titulo'];
                $description_entrega[$i] = $entrega_de_valor['item'][$i]['descricao'];
                $itens_entrega[$i] = $entrega_de_valor['item'][$i]['itens'];
      ?>
        <div class="col-12 col-md-6 bl hide-mobile">
            <div class="card">
                <img class="fade-in-bottom" src="<?=$icone_entrega[$i]?>" alt="Tdx powered by TIVIT">

                <h3> <?=$title_entrega[$i]?> </h3>
                <div class="d-flex justify-content-center align-items-center w-100">
                <p class="paragrafo3 mx"><?=$description_entrega[$i]?></p>
                </div>
                <div class="paragrafo3 list text-center">
                <?=$itens_entrega[$i]?>
                </div>
                <!-- Divisor -->
                <div class="divisor"></div>
            </div>
        </div>

        <!-- mobile slide -->
        <div class="carousel-item heroslide4 hide-desktop values <?=$i == 0 ? 'active' : '';?>">
            <div class="col-11 m-0 p-0">
                <div class="card">
                    <img class="fade-in-bottom" src="<?=$icone_entrega[$i]?>" alt="Tdx powered by TIVIT">
                    <h3> <?=$title_entrega[$i]?> </h3>
                    <div class="d-flex justify-content-center align-items-center w-100">
                    <p class="paragrafo3 mx"><?=$description_entrega[$i]?></p>
                    </div>
                    <div class="paragrafo3 list text-center">
                    <?=$itens_entrega[$i]?>
                    </div>
                </div>
            </div>
        </div>

        <?
            endfor;
            endif;
            endif;

            if($detect->isMobile()){
                echo '</div>
                    </div>
                </div>';
            }else{
                echo '</div>';
            }
        ?>



    <div class="hide-desktop mt-4">
    <div class="w-100 position-relative mt-4">
        <a class="carousel-control-prev bg-transparent w-aut" href="#valuesMobileCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <div class="d-flex flex-row justify-content-center counter4 mt-3">
            <div class="numactive4"></div>
            <div class="numseparation4"></div>
            <div class="numtotal4"></div>
        </div>
        <a class="carousel-control-next bg-transparent w-aut" href="#valuesMobileCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
      <a class="btn">Conheça todas nossas soluções</a>
    </div>

    <div class="col-12 hide-mobile">
        <a href="#" class="btn btn-conheca">Conheça todas nossas soluções</a>
    </div>


  </div>
</div>

<div class="lp-tbanks-logo-clientes mt-0 mt-md-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="lp-tbanks-logo-clientes-content text-center">
          <h2>Nossos Clientes</h2>
          <div class="container text-center my-3">
            <div class="row mx-auto my-auto justify-content-center">
                <div id="customerCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item heroslide2 customers active">
                            <div class="col-6 col-md-2">
                                <div class="h-100">
                                    <div class="m-3">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/logos/brf.svg" alt="Logo BRF">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item heroslide2 customers">
                            <div class="col-6 col-md-2">
                                <div class="h-100">
                                    <div class="m-3">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/logos/notre-dame.svg" alt="Logo Notredame">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item heroslide2 customers">
                            <div class="col-6 col-md-2">
                                <div class="h-100">
                                    <div class="m-3">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/logos/zurich.svg" alt="Logo Zurich">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item heroslide2 customers">
                            <div class="col-6 col-md-2">
                                <div class="h-100">
                                    <div class="m-3">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/logos/banco-bv.svg" alt="Logo Banco BV">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item heroslide2 customers">
                            <div class="col-6 col-md-2">
                                <div class="h-100">
                                    <div class="m-3">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/logos/ipiranga.svg" alt="Logo Ipiranga">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item heroslide2 customers">
                            <div class="col-6 col-md-2">
                                <div class="h-100">
                                    <div class="m-3">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/logos/grupo-boticario.svg" alt="Logo Boticario">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item heroslide2 customers">
                            <div class="col-6 col-md-2">
                                <div class="h-100">
                                    <div class="m-3">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/logos/sem-parar.svg" alt="Logo Sem Parar">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item heroslide2 customers">
                            <div class="col-6 col-md-2">
                                <div class="h-100">
                                    <div class="m-3">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/logos/grupo-energisa.svg" alt="Logo Energisa">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item heroslide2 customers">
                            <div class="col-6 col-md-2">
                                <div class="h-100">
                                    <div class="m-3">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/logos/porto-seguro.svg" alt="Logo Porto Seguro">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item heroslide2 customers">
                            <div class="col-6 col-md-2">
                                <div class="h-100">
                                    <div class="m-3">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/logos/fmc.svg" alt="Logo FMC">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item heroslide2 customers">
                            <div class="col-6 col-md-2">
                                <div class="h-100">
                                    <div class="m-3">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/logos/cnh-industrial.svg" alt="Logo CNH Industrial">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 position-relative mt-2">
                      <a class="carousel-control-prev bg-transparent w-aut" href="#customerCarousel" role="button" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      </a>
                      <div class="d-flex flex-row justify-content-center counter2 mt-3">
                        <div class="numactive2"></div><div class="numseparation2"></div><div class="numtotal2"></div>
                      </div>
                      <a class="carousel-control-next bg-transparent w-aut" href="#customerCarousel" role="button" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      </a>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="lp-tbanks-form">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="lp-tbanks-title text-center">
          <h2>Dê o primeiro passo para sua transformação digital. <br> Fale com nossos especialistas.</h2>
          <p class="paragrafo2">Solicite um contato dos nossos especialistas sem compromisso ainda hoje.</p>
        </div>
        <div class="form">
          <?php echo do_shortcode('[contact-form-7 id="66" title="Contato Tdx"]'); ?>
          <div class="privacidade">A TIVIT tem o compromisso de proteger a sua privacidade e nós usaremos suas informações pessoais somente para fornecer os produtos e serviços que você solicitou. Ocasionalmente, gostaríamos de contatá-lo sobre novos assuntos que possam ser do seu interesse. Você pode cancelar o recebimento dessas comunicações quando quiser. Para conhecer seus direitos e maiores detalhes de como a TIVIT trata dados pessoais, confira nossa Política de Privacidade.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bloco de Conteúdos -->
<div id="contentTdx" class="home-content content-inovacao">
  <div id="triangle-down"></div>
  <div class="container pd">
    <div class="title">
      <h2 class="titleText text-center">NOSSOS CONTEÚDOS</h2>
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
            <p class="m-0 h-100">Por <strong>Ana Helena Lazaroni</strong></p>
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
            <p class="m-0 h-100">Por <strong>Ana Helena Lazaroni</strong></p>
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
            <p class="m-0 h-100">Por <strong>Ana Helena Lazaroni</strong></p>
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
              <div class="carousel-item heroslide3 content active">
                  <div class="col-11 m-0 p-0">
                    <div class="cardContent p-2">
                      <div class="img position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/artigo1.png" alt="Depoimento">
                        <div class="position-absolute tagContent">artigo</div>
                      </div>
                      <div class="detalhes">
                        <span>01/01/2021</span>
                        <p class="m-0 h-100">Por <strong>Ana Helena Lazaroni</strong></p>
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
              <div class="carousel-item heroslide3 content">
                  <div class="col-11 m-0 p-0">
                    <div class="cardContent p-2">
                      <div class="img position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/artigo2.png" alt="Depoimento">
                        <div class="position-absolute tagContent">press release</div>
                      </div>
                      <div class="detalhes">
                        <span>01/01/2021</span>
                        <p class="m-0 h-100">Por <strong>Ana Helena Lazaroni</strong></p>
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
              <div class="carousel-item heroslide3 content">
                  <div class="col-11 m-0 p-0">
                    <div class="cardContent p-2">
                      <div class="img position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/artigo3.png" alt="Depoimento">
                        <div class="position-absolute tagContent">artigo</div>
                      </div>
                      <div class="detalhes">
                        <span>01/01/2021</span>
                        <p class="m-0 h-100">Por <strong>Ana Helena Lazaroni</strong></p>
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

<?php get_footer(); ?>