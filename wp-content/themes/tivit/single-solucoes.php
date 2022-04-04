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
            <h2 class="title text-center">chamada sobre big numbers lipsum</h2>
        </div>
        <div class="row hide-mobile">
            <div class="col-12 col-md-4">
                <div class="d-flex justify-content-center align-items-center w-100 bigNumbersTitle flex-column position-relative">
                    <h2>XXX</h2>
                    <div class="subtitle">
                        Clientes atendidos 
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="d-flex justify-content-center align-items-center w-100 bigNumbersTitle flex-column position-relative">
                    <h2>+600</h2>
                    <div class="subtitle">
                        Profissionais dedicados à nuvem 
                    </div>
                </div>       
            </div>
            <div class="col-12 col-md-4">
                <div class="d-flex justify-content-center align-items-center w-100 bigNumbersTitle flex-column position-relative">
                    <h2>XX</h2>
                    <div class="subtitle">
                        Certificações de parceiros 
                    </div>
                </div>     
            </div>
        </div>

        <!-- mobile row -->
        <div class="row hide-desktop">
            <div class="col-12">
                <div class="row bigNumbersTitle">
                    <div class="col-6">
                        <h2>XXX</h2>
                    </div>
                    <div class="col-6">
                        <div class="subtitle">
                            Clientes atendidos 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row bigNumbersTitle">
                    <div class="col-6">
                        <h2>+600</h2>
                    </div>
                    <div class="col-6">
                        <div class="subtitle">
                            Profissionais dedicados à nuvem 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row bigNumbersTitle">
                    <div class="col-6">
                        <h2>XX</h2>
                    </div>
                    <div class="col-6">
                        <div class="subtitle">
                            Certificações de parceiros
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="diferenciais">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="intro">
                        <h2 class="titleDif">NOSSOS DIFERENCIAIS</h2>
                        <p class="subtitle">Aconselhamos nossos clientes na escolha da melhor solução. Somos provedores multicloud e entregamos nuvens híbridas de verdade.</p>
                        <div>
                            <a class="cta">Fale com nossos especialistas</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="content">
                        <div>
                            <h2>Cultura</h2>
                            <p>Apoiamos a transformação integral do cliente, conduzindo-o numa jornada de evolução contínua e atenta às necessidades de cada empresa.</p>
                        </div>
                        <div>
                            <h2>Parcerias sólidas</h2>
                            <p>Somos certificados e experientes na implantação e gestão dos principais players de nuvem.</p>
                        </div>
                        <div>
                            <h2>Agilidade</h2>
                            <p>Proporcionamos serviços eficientes, com maior qualidade e velocidade, utilizando conceitos como AiOPs, Agile, DevOps e ferramentas de última geração.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="content">
                        <div>
                            <h2>Portfólio</h2>
                            <p>Temos expertise nas camadas de infraestrutura, cloud, plataformas e soluções digitais, com competências específicas e diferenciadas para cada parceiro.</p>
                        </div>
                        <div>
                            <h2>Consultoria</h2>
                            <p>Somos flexíveis às demandas dos clientes. Nossa equipe de especialistas entrega a melhor solução para o seu negócio.</p>
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
      <h2>O ponto de partida de nossos projetos inclui o levantamento do ambiente, entendimento do negócio, identificação de riscos e avaliação de viabilidade técnica e financeira.</h2>
      <p>Nesta etapa de assessment, definimos, validamos e planejamos a estratégia adequada ao seu negócio, seja ela: </p>
    </div>
    <div class="row cards hide-mobile">
      <div class="col-12 col-md-4">
        <div class="intro text-center">
          <h3>MIGRAÇÃO</h3>
        </div>
        <div class="card w-100">
          <p>Criamos e implementamos as <b>estratégias de negócio</b> e as tecnologias necessárias, com equipes especializadas e práticas comprovadas, para garantir uma migração para a nuvem segura e eficaz.</p>
        </div>
        <div class="card w-100">
          <p>Aplicamos os pilares do Well-Architected: <b>Excelência Operacional, Segurança, Confiabilidade, Performance e Custos.</b></p>
        </div>
        <div class="card w-100">
          <p>Seguimos o guia de implantação <b>T-CAF</b> (TIVIT Cloud Adoption Framework) orientado pelas diretrizes de cada parceiro.</p>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="intro text-center">
          <h3>TRANSFORMAÇÃO</h3>
        </div>
        <div class="card w-100">
          <p>Transforme seu negócio com arquiteturas <b>“cloud native”</b> e modernização de aplicações.</p>
        </div>
        <div class="card w-100">
          <p>Implantamos processos de disaster recovery em nuvem para construir soluções confiáveis. Mesmo diante de uma falha na infraestrutura de TI, o DRaaS possibilita que os sistemas <b>prossigam operando sem interrupções.</b></p>
        </div>
        <div class="card w-100">
          <p>Também implementamos <b>soluções de DaaS</b> em nuvem pública, entregando de forma rápida e sem complicação os benefícios de uma plataforma gerenciada de estações de trabalho e aplicações virtualizadas.</p>
        </div>
        <div class="card w-100">
          <p>Realizamos projetos de <b>migração e transformação de banco de dados</b> para otimizar o uso de recursos e o licenciamento em plataformas de BD em nuvem.</p>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="intro text-center">
          <h3>OTIMIZAÇÃO</h3>
        </div>
        <div class="card w-100">
          <p>Aumentamos o <b>valor de sua nuvem,</b> otimizando o uso de recursos, eliminando desafios e avaliando cenários de contratação.</p>
        </div>
        <div class="card w-100">
          <p>No projeto de <b>curta-duração</b> (mínimo um mês), aplicamos as melhores práticas de gerenciamento financeiro em nuvem.</p>
        </div>
        <div class="card w-100">
          <p>Assuma o <b>controle de seus gastos</b> e direcione os investimentos em TI de forma adequada.</p>
        </div>
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
            <div class="card w-100">
              <p>Criamos e implementamos as <b>estratégias de negócio</b> e as tecnologias necessárias, com equipes especializadas e práticas comprovadas, para garantir uma migração para a nuvem segura e eficaz.</p>
            </div>
            <div class="card w-100">
              <p>Aplicamos os pilares do Well-Architected: <b>Excelência Operacional, Segurança, Confiabilidade, Performance e Custos.</b></p>
            </div>
            <div class="card w-100">
              <p>Seguimos o guia de implantação <b>T-CAF</b> (TIVIT Cloud Adoption Framework) orientado pelas diretrizes de cada parceiro.</p>
            </div>
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
            <div class="card w-100">
              <p>Transforme seu negócio com arquiteturas <b>“cloud native”</b> e modernização de aplicações.</p>
            </div>
            <div class="card w-100">
              <p>Implantamos processos de disaster recovery em nuvem para construir soluções confiáveis. Mesmo diante de uma falha na infraestrutura de TI, o DRaaS possibilita que os sistemas <b>prossigam operando sem interrupções.</b></p>
            </div>
            <div class="card w-100">
              <p>Também implementamos <b>soluções de DaaS</b> em nuvem pública, entregando de forma rápida e sem complicação os benefícios de uma plataforma gerenciada de estações de trabalho e aplicações virtualizadas.</p>
            </div>
            <div class="card w-100">
              <p>Realizamos projetos de <b>migração e transformação de banco de dados</b> para otimizar o uso de recursos e o licenciamento em plataformas de BD em nuvem.</p>
            </div>
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
            <div class="card w-100">
              <p>Aumentamos o <b>valor de sua nuvem,</b> otimizando o uso de recursos, eliminando desafios e avaliando cenários de contratação.</p>
            </div>
            <div class="card w-100">
              <p>No projeto de <b>curta-duração</b> (mínimo um mês), aplicamos as melhores práticas de gerenciamento financeiro em nuvem.</p>
            </div>
            <div class="card w-100">
              <p>Assuma o <b>controle de seus gastos</b> e direcione os investimentos em TI de forma adequada.</p>
            </div>
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