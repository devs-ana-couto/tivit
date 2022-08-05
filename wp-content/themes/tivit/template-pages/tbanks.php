<?php /* Template Name: Landing Tbanks */ ?>
<?php get_header(); ?>

<?php page_bulder_init(get_the_ID(),$post,true);?>

<div class="lp-tbanks-hero position-relative" style="background: url('<? $detect->isMobile() ? the_field('banner_mobile_tbanks') : the_field('banner_desktop_tbanks'); ?>')">
  <div class="container">
    <div class="row">
      <div class="col-md-12 d-flex flex-column align-items-center lp-banks-hero-content text-center">
        <img class="fade-in-bottom" src="<? the_field('logo_tbanks') ?>" alt="Tbanks powered by TIVIT">
        <h1 class="fade-in-bottom"><? the_field('chamada_tbanks') ?></h1>
      </div>
      <div>
        <div class="position-relative mt-5"><img class="d-flex m-auto grafismo w-100 hide-desktop" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/mobgraf.svg" alt="Tbanks"></div>
        <img class="grafismos position-absolute hide-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/grafismos.svg" alt="Graf">
      </div>
    </div>
  </div>
</div>

<div class="lp-tbanks-conheca">
  <div class="container">

    <div class="lp-tbanks-arrow text-center mb-5">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/icons/seta-purple.svg" class="bounce" alt="Tbanks Saiba Mais">
    </div>

    <div class="row">
      <div class="col-12">

        <div class="lp-tbanks-conheca-content">
          <p>
            <?the_field('introducao_tbanks')?>
          </p>
        </div>

      </div>

      <div class="lp-tbanks-services text-center">
        <div class="">
          <div class="d-flex flex-column justify-content-center align-items-center w-100 mb-5">
            <h2 class="title text-center">
              <? the_field('chamada_nossas_plataformas') ?>
            </h2>
            <div class="sub d-flex flex-column justify-content-center align-items-center w-100">
              <span class="subtitle">
                <? the_field('descricao_nossas_plataformas') ?>
              </span>
            </div>
          </div>
          <div class="row hide-mobile">
          <?php
          // Check rows exists.
          if( have_rows('plataformas') ):
              // Loop through rows.
              for($i=0; have_rows('plataformas'); $i++) : the_row();
                  $title_plataforma[$i] = get_sub_field('titulo');
                  $description_plataforma[$i] = get_sub_field('descricao');
              ?>
            <div class="col-12 col-md-3">
              <div class="bg-white">
                <h3 class="mb-5"><?=$title_plataforma[$i]?></h3>
                <p><?=$description_plataforma[$i] ?></p>
              </div>
            </div>
            <? endfor; endif; ?>

            <!-- <div class="col-12 mt-5">
              <p>
                Integre todos os seus recebimentos de arrecadação em um só lugar.<br/>
                Você não precisa mais trabalhar com vários bancos.
              </p>
              <div class="img">
                <img class="fade-in-bottom" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/integre.svg" alt="Tbanks powered by TIVIT">
              </div>
            </div> -->

          </div>

          <!-- mobile slide -->
          <div class="row mx-auto my-auto justify-content-center hide-desktop">
            <div id="serviceMobileCarousel" class="carousel slide p-0" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item heroslide3 services active">
                        <div class="col-11 m-0 p-0">
                          <div class="bg-white">
                            <h3 class="mb-5">PSTI</h3>
                            <p>Provedor de Serviços de Tecnologia da Informação homologado pelo Banco Central.</p>
                          </div>
                        </div>
                    </div>
                    <div class="carousel-item heroslide3 services">
                        <div class="col-11 m-0 p-0">
                          <div class="bg-white">
                            <h3>API Gateway</h3>
                            <p>Plataforma de integração financeira e Open Banking.</p>
                          </div>
                        </div>
                    </div>
                    <div class="carousel-item heroslide3 services">
                        <div class="col-11 m-0 p-0">
                          <div class="bg-white">
                            <h3>TBanks Payments</h3>
                            <p>Conta Digital da TIVIT para pagamentos de contas, Utilities e PIX.</p>
                          </div>
                        </div>
                    </div>
                    <div class="carousel-item heroslide3 services">
                        <div class="col-11 m-0 p-0">
                          <div class="bg-white">
                            <h3>Banking as a Service</h3>
                            <p>Oferta completa de Serviços Financeiros.</p>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 position-relative">
                  <a class="carousel-control-prev bg-transparent w-aut" href="#serviceMobileCarousel" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  </a>
                  <div class="d-flex flex-row justify-content-center counter3 mt-3">
                    <div class="numactive3"></div><div class="numseparation3"></div><div class="numtotal3"></div>
                  </div>
                  <a class="carousel-control-next bg-transparent w-aut" href="#serviceMobileCarousel" role="button" data-bs-slide="next">
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

<!-- <div class="lp-tbanks-beneficios text-center">
  <div class="container">
    <div class="triangle">
      <div id="triangle-down-1" class="col-4"></div>
      <div class="col-4"></div>
      <div id="triangle-down-2" class="col-4"></div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="lp-tbanks-beneficios-title">
          <h2>Benefícios para o seu negócio</h2>
        </div>
        <div class="lp-tbanks-beneficios-content">
          <div class="lp-tbanks-beneficios-content-box">
            <div class="row">

              <div class="col-12 col-md-4 hover">
                <div class="lp-tbanks-beneficios-content-box-title">
                  <p>01</p>
                </div>
                <div class="lp-tbanks-beneficios-content-box-content">
                  <p>Integração com os principais sistemas de gestão (ERPs) por meio de APIs</p>
                </div>
              </div>

              <div class="col-12 col-md-4 hover">
                <div class="lp-tbanks-beneficios-content-box-title">
                  <p>02</p>
                </div>
                <div class="lp-tbanks-beneficios-content-box-content">
                  <p>Conta digital e serviços de pagamentos e recebimentos: débito automático, boletos com código de barras, PIX, entre outros.</p>
                </div>
              </div>

              <div class="col-12 col-md-4 hover">
                <div class="lp-tbanks-beneficios-content-box-title">
                  <p>03</p>
                </div>
                <div class="lp-tbanks-beneficios-content-box-content">
                  <p>Gestão eficaz do fluxo de caixa, com transações processadas na nuvem, automação dos processos financeiros, redução de tempo, correção de erros de registros, administração de estoque e redução de custos com processos operacionais.</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<!-- <div class="lp-tbanks-pix">
  <div class="container">
    <div class="row">
      <div class="col-1 col-md-1 hide-mobile">
        <img class="ab1" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/retangle1.svg" alt="Tbanks">
      </div>
      <div class="col-12 col-md-3 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/pix.svg" alt="Tbanks PIX">
      </div>
      <div class="col-12 col-md-6">
        <h3>Não espere mais para receber pagamentos.</h3>
        <p>Com o TBankS, a empresa recebe e administra pagamentos em tempo real, com PIX Cobrança e PIX Varejo.</p>
      </div>
      <div class="col-2 col-md-2 text-center hide-mobile">
        <img class="ab2" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/retangle2.svg" alt="Tbanks">
      </div>
    </div>
  </div>
</div> -->

<div id="tbanks-pix">
  <div class="container tbanks-bg-pix position-relative">
    <div class="row">
      <div class="col-12 col-md-4">
        <div class="pix"><img src="<? the_field('imagem_pix'); ?>" alt="Tbanks PIX"></div>
        <div class="fclass position-relative mt-4 mb-4 mt-md-5 mb-md-0"><img class="grafismo" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/gh.svg" alt="Tbanks"></div>
      </div>
      <div class="col-12 col-md-5">
        <div class="pix-text w-100">
          <h3><? the_field('titulo_pix'); ?></h3>
          <p><? the_field('texto_pix'); ?></p>
          <div>
            <div class="custom-w-mobile mt-0 mt-md-5 pt-3">
              <a> Conheça toda a ação </a>
              <div class="position-relative mt-4 mb-0"><img class="grafismo hide-desktop" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/gh.svg" alt="Tbanks"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="grafismo-vert d-flex justify-content-end hide-mobile"><img class="text-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/grafismopix.svg" alt="Tbanks Grafismo Vertical"></div>
      </div>
    </div>
  </div>
</div>

<div class="lp-tbanks-tecnologia-pagamentos">
  <div class="container">
    <div class="lp-tbanks-tecnologia-pagamentos-title">
      <h2>Última tecnologia em pagamentos</h2>
    </div>
    <div class="row hide-mobile">

      <div class="col-12 col-md-4">
        <div class="border-tec">
          <div class="lp-tbanks-tecnologia-pagamentos-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/icons/taxas.svg" alt="Tbanks">
          </div>
          <div class="lp-tbanks-tecnologia-pagamentos-content">
            <p>Taxas de transação mais baratas</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="border-tec">
          <div class="lp-tbanks-tecnologia-pagamentos-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/icons/relogio.svg" alt="Tbanks">
          </div>
          <div class="lp-tbanks-tecnologia-pagamentos-content">
            <p>Informações em tempo real das operações</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="border-tec">
          <div class="lp-tbanks-tecnologia-pagamentos-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/icons/aviso.svg" alt="Tbanks">
          </div>
          <div class="lp-tbanks-tecnologia-pagamentos-content">
            <p>Avisos de movimentações bancárias</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="border-tec">
          <div class="lp-tbanks-tecnologia-pagamentos-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/icons/faturamento.svg" alt="Tbanks">
          </div>
          <div class="lp-tbanks-tecnologia-pagamentos-content">
            <p>Faturamento em <br> tempo real</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="border-tec">
          <div class="lp-tbanks-tecnologia-pagamentos-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/icons/dashboard.svg" alt="Tbanks">
          </div>
          <div class="lp-tbanks-tecnologia-pagamentos-content">
            <p>Dashboard de gestão de operações</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="border-tec">
          <div class="lp-tbanks-tecnologia-pagamentos-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/icons/sistema.svg" alt="Tbanks">
          </div>
          <div class="lp-tbanks-tecnologia-pagamentos-content">
            <p>Sistema intuitivo <br> e unificado</p>
          </div>
        </div>
      </div>

    </div>

    <!-- mobile slide -->
    <div class="row mx-auto my-auto justify-content-center hide-desktop">
      <div id="paymentMobileCarousel" class="carousel slide p-0" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
              <div class="carousel-item heroslide4 payment active">
                  <div class="col-11 m-0 p-0">
                    <div class="border-tec">
                      <div class="lp-tbanks-tecnologia-pagamentos-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/icons/taxas.svg" alt="Tbanks">
                      </div>
                      <div class="lp-tbanks-tecnologia-pagamentos-content">
                        <p>Taxas de transação mais baratas</p>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="carousel-item heroslide4 payment">
                  <div class="col-11 m-0 p-0">
                    <div class="border-tec">
                      <div class="lp-tbanks-tecnologia-pagamentos-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/icons/relogio.svg" alt="Tbanks">
                      </div>
                      <div class="lp-tbanks-tecnologia-pagamentos-content">
                        <p>Informações em tempo real das operações</p>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="carousel-item heroslide4 payment">
                  <div class="col-11 m-0 p-0">
                    <div class="border-tec">
                      <div class="lp-tbanks-tecnologia-pagamentos-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/icons/aviso.svg" alt="Tbanks">
                      </div>
                      <div class="lp-tbanks-tecnologia-pagamentos-content">
                        <p>Avisos de movimentações bancárias</p>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="carousel-item heroslide4 payment">
                  <div class="col-11 m-0 p-0">
                    <div class="border-tec">
                      <div class="lp-tbanks-tecnologia-pagamentos-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/icons/faturamento.svg" alt="Tbanks">
                      </div>
                      <div class="lp-tbanks-tecnologia-pagamentos-content">
                        <p>Faturamento em <br> tempo real</p>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="carousel-item heroslide4 payment">
                  <div class="col-11 m-0 p-0">
                    <div class="border-tec">
                      <div class="lp-tbanks-tecnologia-pagamentos-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/icons/dashboard.svg" alt="Tbanks">
                      </div>
                      <div class="lp-tbanks-tecnologia-pagamentos-content">
                        <p>Dashboard de gestão de operações</p>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="carousel-item heroslide4 payment">
                  <div class="col-11 m-0 p-0">
                    <div class="border-tec">
                      <div class="lp-tbanks-tecnologia-pagamentos-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/icons/sistema.svg" alt="Tbanks">
                      </div>
                      <div class="lp-tbanks-tecnologia-pagamentos-content">
                        <p>Sistema intuitivo <br> e unificado</p>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
          <div class="w-100 position-relative mt-4">
            <a class="carousel-control-prev bg-transparent w-aut" href="#paymentMobileCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <div class="d-flex flex-row justify-content-center counter4 mt-3">
              <div class="numactive4"></div><div class="numseparation4"></div><div class="numtotal4"></div>
            </div>
            <a class="carousel-control-next bg-transparent w-aut" href="#paymentMobileCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
          </div>
      </div>
    </div>

  </div>
</div>

<div class="lp-tbanks-depoimentos container">
  <div class="lp-tbanks-depoimentos-title hide-mobile">
    <h2>Benefícios para clientes</h2>
  </div>
  <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item heroslide active">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="lp-tbanks-depoimentos-content text-center ">
                <div class="lp-tbanks-depoimentos-autor">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/cliente.svg" alt="Tbanks Saiba Mais">
                  <h3>André Correia</h3>
                  <h4>Diretor da Tivit</h4>
                  <p>
                  ”A chegada do Open Banking traz uma grande oportunidade para a renovação do sistema financeiro brasileiro. A TIVIT, como uma das maiores empresas de tecnologia do país, usa sua expertise para ser protagonista neste mercado.”
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
                  <h3>André Correia</h3>
                  <h4>Diretor da Tivit</h4>
                  <p>
                  ”A chegada do Open Banking traz uma grande oportunidade para a renovação do sistema financeiro brasileiro. A TIVIT, como uma das maiores empresas de tecnologia do país, usa sua expertise para ser protagonista neste mercado.”
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
                  <h3>André Correia</h3>
                  <h4>Diretor da Tivit</h4>
                  <p>
                  ”A chegada do Open Banking traz uma grande oportunidade para a renovação do sistema financeiro brasileiro. A TIVIT, como uma das maiores empresas de tecnologia do país, usa sua expertise para ser protagonista neste mercado.”
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mobile-relative">
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
          <h2>Reduza custos e fuja da burocracia.<br>Fale com nossos especialistas.</h2>
          <!-- <p class="paragrafo2">Solicite um contato dos nossos especialistas sem compromisso ainda hoje.</p> -->
        </div>
        <div class="form">
          <?php echo do_shortcode('[contact-form-7 id="25" title="Contato TbankS"]'); ?>
          <div class="privacidade">A TIVIT tem o compromisso de proteger a sua privacidade e nós usaremos suas informações pessoais somente para fornecer os produtos e serviços que você solicitou. Ocasionalmente, gostaríamos de contatá-lo sobre novos assuntos que possam ser do seu interesse. Você pode cancelar o recebimento dessas comunicações quando quiser. Para conhecer seus direitos e maiores detalhes de como a TIVIT trata dados pessoais, confira nossa Política de Privacidade.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>