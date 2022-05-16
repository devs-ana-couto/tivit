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

<<<<<<< HEAD
  <?=do_shortcode('[ac-bloco-conteudo]');?>
             
=======

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


    <div class="d-flex justify-content-center align-items-center btn">
      <button class="btncontent">VER TODOS OS NOSSOS CONTEÚDOS</button>
    </div>
  </div>
>>>>>>> f616d72d338fb44b603535800002c2e36d5d4926
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
<<<<<<< HEAD
      <?=do_shortcode('[ac_bloco_home_cases]');?>
=======
      <div class="col-12">
        <div id="labs" class="carousel slide position-relative hide-desktop" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item heroslide2 active">

              <div class="row">
                <div class="col-12">
                  <div class="cardCases bg1 m-2 position-relative">
                    <div class="overlay"></div>
                    <img class="w-100 h-100 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg1.png" alt="backgroundcase1">
                    <div class="textCase">
                    <h3> NOME DO CLIENTE 1 </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur velit justo, et fermentum purus gravida quis.</p>
                      <div class="w-100 d-flex text-left">
                        <a>VER CASE</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="carousel-item heroslide2">

              <div class="row">
                <div class="col-12">
                  <div class="cardCases bg2 m-2 position-relative">
                    <div class="overlay"></div>
                    <img class="w-100 h-100 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg2.png" alt="backgroundcase2">
                    <div class="textCase">
                    <h3> NOME DO CLIENTE 2 </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur velit justo, et fermentum purus gravida quis.</p>
                      <div class="w-100 d-flex text-left">
                        <a>VER CASE</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="carousel-item heroslide2">

              <div class="row">
                <div class="col-12">
                  <div class="cardCases bg3 m-2 position-relative">
                    <div class="overlay"></div>
                    <img class="w-100 h-100 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg3.png" alt="backgroundcase3">
                    <div class="textCase">
                    <h3> NOME DO CLIENTE 3 </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur velit justo, et fermentum purus gravida quis.</p>
                      <div class="w-100 d-flex text-left">
                        <a>VER CASE</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>

          <div class="navigation w-100">
            <div class="d-flex justify-content-center align-items-center">
              <button class="carousel-control-prev" type="button" data-bs-target="#labs" data-bs-slide="prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/arrow_left.png" alt="arrow_left">
              </button>
              <div class="d-flex flex-row counter2">
                <div class="numactive2"></div><div class="numseparation2"></div><div class="numtotal2"></div>
              </div>
              <button class="carousel-control-next" type="button" data-bs-target="#labs" data-bs-slide="next">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/arrow_right.png" alt="arrow_right">
              </button>
            </div>
          </div>


        </div>

        <div class="home-cases-content left text-center hide-mobile">
          <div class="row d-flex justify-content-center">
            <div class="d-flex customContainer">
              <div class="col-md-4">
                  <div class="cardCases bg1 m-3">
                    <div class="overlay"></div>
                    <img class="w-100 h-100 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg1.png" alt="backgroundcase1">
                    <div class="textCase">
                    <h3> NOME DO CLIENTE 1 </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur velit justo, et fermentum purus gravida quis.</p>
                      <div class="w-100 d-flex text-left">
                        <a>VER CASE</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="cardCases bg2 m-3">
                    <div class="overlay"></div>
                    <img class="w-100 h-100 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg2.png" alt="backgroundcase2">
                    <div class="textCase">
                    <h3> NOME DO CLIENTE 2 </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur velit justo, et fermentum purus gravida quis.</p>
                      <div class="w-100 d-flex text-left">
                        <a>VER CASE</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="cardCases bg3 m-3">
                    <div class="overlay"></div>
                    <img class="w-100 h-100 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bg3.png" alt="backgroundcase3">
                    <div class="textCase">
                    <h3> NOME DO CLIENTE 3 </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur velit justo, et fermentum purus gravida quis.</p>
                      <div class="w-100 d-flex text-left">
                        <a>VER CASE</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="d-flex justify-content-center align-items-center btn mt-4">
                  <button class="btncontent"><a href="/staged/tivit/cases">VER TODOS OS CASES</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
>>>>>>> f616d72d338fb44b603535800002c2e36d5d4926
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


<<<<<<< HEAD
=======
    <div class="row mx-auto my-auto justify-content-center hide-desktop">
      <div id="customerCarouselHome" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
              <div class="carousel-item heroslide3 customers active">
                  <div class="col-6 col-md-2">
                      <div class="h-100">
                          <div class="m-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/anima.svg" alt="Anima logo">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="carousel-item heroslide3 customers">
                  <div class="col-6 col-md-2">
                      <div class="h-100">
                          <div class="m-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/cielo.svg" alt="Cielo logo">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="carousel-item heroslide3 customers">
                  <div class="col-6 col-md-2">
                      <div class="h-100">
                          <div class="m-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/google.svg" alt="Google logo">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="carousel-item heroslide3 customers">
                  <div class="col-6 col-md-2">
                      <div class="h-100">
                          <div class="m-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/itau.svg" alt="Itau logo">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="carousel-item heroslide3 customers">
                  <div class="col-6 col-md-2">
                      <div class="h-100">
                          <div class="m-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/johnson.svg" alt="Johnson logo">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="carousel-item heroslide3 customers">
                <div class="col-6 col-md-2">
                    <div class="h-100">
                        <div class="m-3">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/nestle.svg" alt="Nestle logo">
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="w-100 position-relative mt-2">
            <a class="carousel-control-prev bg-transparent w-aut" href="#customerCarouselHome" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <div class="d-flex flex-row justify-content-center counter3 mt-3">
              <div class="numactive3"></div><div class="numseparation3"></div><div class="numtotal3"></div>
            </div>
            <a class="carousel-control-next bg-transparent w-aut" href="#customerCarouselHome" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
          </div>
      </div>
  </div>
  </div>
</section>
>>>>>>> f616d72d338fb44b603535800002c2e36d5d4926

<?php get_footer(); ?>