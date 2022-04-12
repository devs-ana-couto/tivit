<?php
get_header();

if(have_posts()) : while(have_posts()) : the_post();
?>

<!-- Section Banner -->
<section class="banner-cases-item">
    <div class="case-item-background" style="background: url('<? $detect->isMobile() ? the_field('banner_header_mobile_conteudo') : the_field('banner_header_desktop_conteudo'); ?>') no-repeat center center; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="case-item-content">
                        <h2>Artigo</h2>
                        <h1><?php the_title(); ?></h1>
                        <h3>Tempo de leitura: <strong><? the_field('tempo_de_leitura')?> minutos</strong></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="conteudo">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <? the_content(); ?>
      </div>
    </div>
  </div>
</section>

<!-- Section Newsletter -->
<section class="newsletter-cases-item">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?=do_shortcode('[contact-form-7 id="220" title="Newsletter"]');?>
            </div>
        </div>
    </div>
</section>

<!-- Section Cases Recentes -->
<section class="cases-recentes">
  <!--- Desktop -->
  <div class="container hide-mobile">

    <div class="row">
      <div class="col-7">
        <div class="assuntos">
          <h4>escolha um ou mais assuntos</h4>
          <a href="#" class="active">Todos</a>
          <a href="#">press release</a>
          <a href="#">conta híbrida</a>
          <a href="#">varejo</a>
          <a href="#">financeiro</a>
          <a href="#">agro</a>
          <a href="#">manufatura</a>
          <a href="#">cloud</a>
          <a href="#">meios de pagamento</a>
          <a href="#">tdx</a>
          <a href="#">CYBERSECURIty</a>
          <a href="#">utilities</a>
          <a href="#">serviços financeiros</a>
        </div>
      </div>
      <div class="col-5">
        <div class="filtros">
          <div class="select">
            <select name="">
              <option value="">Filtrar por</option>
              <option value="">Mais recentes</option>
              <option value="">Mais antigos</option>
              <option value="">A-Z</option>
              <option value="">Z-A</option>
            </select>
          </div>

          <div class="search">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/nav/search-white.svg" alt="Search Tivit"></a>
          </div>
        </div>
      </div>
    </div>



    <div class="row">
      <?php

      for($i = 0; $i < 6; $i++){
      ?>
        <div class="col-12 col-md-4">
          <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/cases/01.svg" alt="Depoimento">
          </div>
          <div class="autor-time">
            <p>Cliente: <b>Nome cliente</b></p>
          </div>
          <div class="content">
            <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
          </div>
          <div class="detalhes">
            <a href="#">conta híbrida</a>
            <a href="#">varejo</a>
          </div>
          <div class="acessar">
            <a href="#">acessar case <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow.svg" class="hide-desktop" alt="Saiba Mais"></a>
          </div>
        </div>    
      <?php
      }
      ?>
    </div>


  </div>
  <!--- End Desktop -->

  <!--- Mobile -->
  <div id="cases" class="carousel slide carousel-fade hide-desktop" data-bs-ride="carousel">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="filtros">
            
            <div class="select">
              <select name="">
                <option value="">escolha um ou mais assuntos</option>
                <option value="">Mais recentes</option>
                <option value="">Mais antigos</option>
                <option value="">A-Z</option>
                <option value="">Z-A</option>
              </select>
            </div>          

            <div class="divisao">
              <div class="select">
                <select name="">
                  <option value="">Filtrar por</option>
                  <option value="">Mais recentes</option>
                  <option value="">Mais antigos</option>
                  <option value="">A-Z</option>
                  <option value="">Z-A</option>
                </select>
              </div>

              <div class="search">
                <a href="#">Buscar <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/nav/search-white.svg" alt="Search Tivit"></a>
              </div>
            </div>

          </div>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="col-12 col-md-4">
              <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/cases/01.svg" alt="Depoimento">
              </div>
              <div class="autor-time">
                <p>Cliente: <strong>Nome do cliente</strong></p>
              </div>
              <div class="content">
                <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
              </div>
              <div class="detalhes">
                <a href="#">conta híbrida</a>
                <a href="#">varejo</a>
              </div>

              <div class="acessar">
                <a href="#">acessar case <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow-red.svg" class="hide-desktop" alt="Saiba Mais"></a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-12 col-md-4">
              <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/cases/01.svg" alt="Depoimento">
              </div>
              <div class="autor-time">
                <p>Cliente: <strong>Nome do cliente</strong></p>
              </div>
              <div class="content">
                <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
              </div>
              <div class="detalhes">
                <a href="#">conta híbrida</a>
                <a href="#">varejo</a>
              </div>

              <div class="acessar">
                <a href="#">acessar case <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow-red.svg" class="hide-desktop" alt="Saiba Mais"></a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-12 col-md-4">
              <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/cases/01.svg" alt="Depoimento">
              </div>
              <div class="autor-time">
                <p>Cliente: <strong>Nome do cliente</strong></p>
              </div>
              <div class="content">
                <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
              </div>
              <div class="detalhes">
                <a href="#">conta híbrida</a>
                <a href="#">varejo</a>
              </div>

              <div class="acessar">
                <a href="#">acessar case <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow-red.svg" class="hide-desktop" alt="Saiba Mais"></a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-12 col-md-4">
              <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cases/cases/01.svg" alt="Depoimento">
              </div>
              <div class="autor-time">
                <p>Cliente: <strong>Nome do cliente</strong></p>
              </div>
              <div class="content">
                <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
              </div>
              <div class="detalhes">
                <a href="#">conta híbrida</a>
                <a href="#">varejo</a>
              </div>

              <div class="acessar">
                <a href="#">acessar case <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/arrow-red.svg" class="hide-desktop" alt="Saiba Mais"></a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6">
            <div class="slider-cases">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#cases" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Cases 1">1</button>
                <button type="button" data-bs-target="#cases" data-bs-slide-to="1" aria-label="Cases 2">2</button>
                <button type="button" data-bs-target="#cases" data-bs-slide-to="2" aria-label="Cases 3">3</button>
                <button type="button" data-bs-target="#cases" data-bs-slide-to="3" aria-label="Cases 4">4</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--- End Mobile -->
</section>

<!-- Section Inovar -->
<section class="home-pessoas-e-carreiras inovar">
  <div id="triangle-down"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="home-pessoas-e-carreiras-title">
          <h2>pronto para inovar?</h2>
        </div>
        <div class="botao">
          <a href="#" class="btn btn-primary">Acesse para saber mais!</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
endwhile; endif;
get_footer();
?>