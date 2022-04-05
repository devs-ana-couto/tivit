<?php /* Template Name: Soluções */ ?>
<?php get_header(); ?>

<!-- Hero banner-->
<div class="services-hero position-relative">
  <div class="services-hero-title">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="d-flex justify-content-center align-items-center flex-column position-relative zindex">
            <h1>SOLUÇÕES</h1>
            <h2 class="hide-mobile">POR SERVIÇOS E PRODUTOS</h2>
            <p class="hide-mobile">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed massa at eros elementum posuere ut et elit. Nulla consequat sapien vestibulum, hendrerit ante in, fermentum eros.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="customMargin d-flex justify-content-center align-items-center hide-mobile">
      <img class="mask w-100 position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/v_slider_home.svg" alt="mask" />
  </div>
  <div class="container services-hero-content hide-desktop">
    <h2>POR SERVIÇOS E PRODUTOS</h2>
    <p class="hide-desktop">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed massa at eros elementum posuere ut et elit. Nulla consequat sapien vestibulum, hendrerit ante in, fermentum eros.</p>
  </div>

  <div class="maskDiv text-center hide-desktop">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/banner-mask.svg" class="position-absolute mask" alt="Máscara">
  </div>
</div>

<!-- Bloco 1 WHITE -->
<div class="bgWhite">
    <div class="container-fluid intro">
        <div>
            <h2>cloud solutions</h2>
            <p>
                Para empresas que buscam capacidade de escalonamento com agilidade de implantação e custos de infraestrutura sob demanda, 
                a solução está nos Serviços de Public Cloud da TIVIT.
            </p>
        </div>
    </div>

     <!-- Bloco Carrossel Infinito -->
     <div id="carouselCustom" class="container-fluid solucoes p-0 text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarouselFirstBlock" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                <div class="carousel-item heroslide active">
                    <div class="col-11 col-md-3">
                        <div class="card">
                            <div class="content">
                                <p class="tag">CLOUD SOLUTIONS</p>
                                <h2>PUBLIC CLOUDS</h2>
                                <div class="w-100 custom-height">
                                    <p>Descritivo breve lorem ipsum dolor.</p>
                                </div>
                                <div class="d-flex justify-content-start align-items-end w-100 saibaMais">
                                    <a href="/staged/tivit/solucoes-ativas/" class="d-flex buttonCta w-100">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item heroslide">
                    <div class="col-11 col-md-3">
                        <div class="card">
                            <div class="content">
                                <p class="tag">CLOUD SOLUTIONS</p>
                                <h2>CLOUD MANAGED SERVICES</h2>
                                <div class="w-100 custom-height">
                                    <p>Descritivo breve lorem ipsum dolor.</p>
                                </div>
                                <div class="d-flex justify-content-start align-items-end w-100 saibaMais">
                                    <a href="/staged/tivit/solucoes-ativas/" class="d-flex buttonCta w-100">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item heroslide">
                    <div class="col-11 col-md-3">
                        <div class="card">
                            <div class="content">
                                <p class="tag">CLOUD SOLUTIONS</p>
                                <h2>CLOUD PROFESSIONAL SERVICES</h2>
                                <div class="w-100 custom-height">
                                    <p>Descritivo breve lorem ipsum dolor.</p>
                                </div>
                                <div class="d-flex justify-content-start align-items-end w-100 saibaMais">
                                    <a href="/staged/tivit/solucoes-ativas/" class="d-flex buttonCta w-100">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item heroslide">
                    <div class="col-11 col-md-3">
                        <div class="card">
                            <div class="content">
                                <p class="tag">CLOUD SOLUTIONS</p>
                                <h2>PRIVATE SERVICES</h2>
                                <div class="w-100 custom-height">
                                    <p>Descritivo breve lorem ipsum dolor.</p>
                                </div>
                                <div class="d-flex justify-content-start align-items-end w-100 saibaMais">
                                    <a href="/staged/tivit/solucoes-ativas/" class="d-flex buttonCta w-100">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item heroslide">
                    <div class="col-11 col-md-3">
                        <div class="card">
                            <div class="content">
                                <p class="tag">CLOUD SOLUTIONS</p>
                                <h2>LOREM IPSUM SERVICES</h2>
                                <div class="w-100 custom-height">
                                    <p>Descritivo breve lorem ipsum dolor.</p>
                                </div>
                                <div class="d-flex justify-content-start align-items-end w-100 saibaMais">
                                    <a href="/staged/tivit/solucoes-ativas/" class="d-flex buttonCta w-100">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>

            <div class="d-flex position-absolute controls">
                    <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarouselFirstBlock" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <!-- <div class="d-flex flex-row counter">
                        <div class="numactive"></div><div class="numseparation"></div><div class="numtotal"></div>
                    </div> -->
                    <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarouselFirstBlock" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            
            </div>
        </div>
    </div>
</div>
<!-- /// Bloco 1 WHITE -->

<!-- Bloco 2 CINZA -->
<div class="bgWhite bgGray">
    <div class="container-fluid intro">
        <div>
            <h2>CYBERSECURITY</h2>
            <p>
                Para empresas que buscam capacidade de escalonamento com agilidade de implantação e custos de infraestrutura sob demanda, 
                a solução está nos Serviços de Public Cloud da TIVIT.
            </p>
        </div>
    </div>

     <!-- Bloco Carrossel Infinito -->
     <div id="carouselCustom" class="container-fluid solucoes p-0 text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarouselSecBlock" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                <div class="carousel-item heroslide2 active">
                    <div class="col-11 col-md-3">
                        <div class="card">
                            <div class="content">
                                <p class="tag">CYBERSECURITY</p>
                                <h2>MDR</h2>
                                <div class="w-100 custom-height">
                                    <p>Descritivo breve lorem ipsum dolor.</p>
                                </div>
                                <div class="d-flex justify-content-start align-items-end w-100 saibaMais">
                                    <a href="/staged/tivit/solucoes-ativas/" class="d-flex buttonCta w-100">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item heroslide2">
                    <div class="col-11 col-md-3">
                        <div class="card">
                            <div class="content">
                                <p class="tag">CYBERSECURITY</p>
                                <h2>DEV SEC OPS</h2>
                                <div class="w-100 custom-height">
                                    <p>Descritivo breve lorem ipsum dolor.</p>
                                </div>
                                <div class="d-flex justify-content-start align-items-end w-100 saibaMais">
                                    <a href="/staged/tivit/solucoes-ativas/" class="d-flex buttonCta w-100">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item heroslide2">
                    <div class="col-11 col-md-3">
                        <div class="card">
                            <div class="content">
                                <p class="tag">CYBERSECURITY</p>
                                <h2>THREAT INTELL</h2>
                                <div class="w-100 custom-height">
                                    <p>Descritivo breve lorem ipsum dolor.</p>
                                </div>
                                <div class="d-flex justify-content-start align-items-end w-100 saibaMais">
                                    <a href="/staged/tivit/solucoes-ativas/" class="d-flex buttonCta w-100">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item heroslide2">
                    <div class="col-11 col-md-3">
                        <div class="card">
                            <div class="content">
                                <p class="tag">CYBERSECURITY</p>
                                <h2>CONSULTING</h2>
                                <div class="w-100 custom-height">
                                    <p>Descritivo breve lorem ipsum dolor.</p>
                                </div>
                                <div class="d-flex justify-content-start align-items-end w-100 saibaMais">
                                    <a href="/staged/tivit/solucoes-ativas/" class="d-flex buttonCta w-100">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item heroslide2">
                    <div class="col-11 col-md-3">
                        <div class="card">
                            <div class="content">
                                <p class="tag">CYBERSECURITY</p>
                                <h2>LOREM IPSUM SERVICES</h2>
                                <div class="w-100 custom-height">
                                    <p>Descritivo breve lorem ipsum dolor.</p>
                                </div>
                                <div class="d-flex justify-content-start align-items-end w-100 saibaMais">
                                    <a href="/staged/tivit/solucoes-ativas/" class="d-flex buttonCta w-100">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

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
<!-- /// Bloco 2 CINZA -->
<?php get_footer(); ?>