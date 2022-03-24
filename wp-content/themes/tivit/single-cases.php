<?php
get_header();
require_once 'libs/Mobile_Detect.php';
$detect = new Mobile_Detect;

if(have_posts()) : while(have_posts()) : the_post();
?>

<!-- Section Banner -->
<section class="banner-cases-item">
    <div class="case-item-background" style="background: url('<? $detect->isMobile() ? the_field('banner_mobile') : the_field('banner_desktop'); ?>') no-repeat center center; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="case-item-content">
                        <h2>Cliente: <strong><? the_field('nome_do_cliente'); ?></strong></h2>
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="case-item-logos">
                        <div class="row">
                            <div class="col-4 col-md-3">
                                <img src="<? the_field('logo_01'); ?>" alt="">
                            </div>
                            <div class="col-7 col-md-5">
                                <img src="<? the_field('logo_02'); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Empresa -->
<section class="empresa-cases-item">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-md-1">
                <h2>Sobre o cliente</h2>
            </div>
            <div class="col-4 hide-desktop">
                <img src="<? the_field('logo_da_empresa'); ?>" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 offset-md-1">
                <p class="paragrafo2"><? the_field('descricao'); ?></p>
            </div>
            <div class="col-4 hide-mobile offset-md-1">
                <img src="<? the_field('logo_da_empresa'); ?>" alt="">
            </div>
            <div class="col-12 col-md-3 offset-md-1">
                <a href="contato" class="btn-entre-em-contato">Entre em Contato</a>
            </div>
            <div class="col-12 col-md-3">
                <a href="<? the_field('download'); ?>" class="btn-download">Download <img src="<?php echo get_template_directory_uri(); ?>/assets/images/custom-post-types/cases/save_alt.svg" alt="..."></a>
            </div>
        </div>
    </div>
</section>

<!-- Section Destaques -->
<section class="destaques-cases-item">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <h2>Destaques do projeto</h2>
                <div class="row">   
                    <?php
                    // Check rows exists.
                    if( have_rows('adicione_seus_destaques') ):
                        // Loop through rows.
                        for($i=0; have_rows('adicione_seus_destaques'); $i++) : the_row();
                            $icon_url[$i] = get_sub_field('icone');
                            $description[$i] = get_sub_field('texto');
                        ?>


                        <div class="col-12 col-md-4">
                            <div class="box">
                                <div class="col-3 text-center">
                                    <img src="<?=$icon_url[$i];?>" alt="">
                                </div>
                                <div class="col-9">
                                    <h3><?=$description[$i];?></h3>
                                </div>
                            </div>
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
</section>

<!-- Section Desafio -->
<section class="desafio-cases-item">
    <div class="container">
        <div class="row">
            <div class="col-11 offset-md-1">
                <h2>Desafio</h2>
            </div>
            <div class="col-12 col-md-8">
                <div class="box">
                    <div class="row">
                        <div class="col-md-11 offset-md-1">
                            <p class="paragrafo2"><?the_field('texto_desafio');?></p>
                        </div>
                    </div>
                </div>
            </div>
            
        <div class="col-12 col-md-3 offset-md-1">
            <?php 
                if(have_rows('depoimento')) :
                    while(have_rows('depoimento')) : the_row();
                        $texto = get_sub_field('texto');
                        $autor = get_sub_field('autor');
                        $funcao = get_sub_field('funcao');
                    ?>

                    <div class="depoimento">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/custom-post-types/cases/aspas.svg" alt="...">
                        <p><?=$texto;?></p>
                        <h3><?=$autor;?></h3>
                        <h4><?=$funcao;?></h4>
                    </div>

                    <?
                    endwhile;
                endif;
            ?>
        </div>
        </div>

    </div>
</section>

<!-- Section Serviços Nuvem -->
<section class="nuvem-cases-item">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Serviços gerenciados na nuvem</h2>
            </div>
        </div>
        <?php
        // Check rows exists.
        if( have_rows('servico_nuvem') ):
            // Loop through rows.
            for($i=0; have_rows('servico_nuvem'); $i++) : the_row();
                $icon_url[$i] = get_sub_field('icone');
                $description[$i] = get_sub_field('texto');
            ?>
        <div class="servico-item">
            <div class="row">
                <div class="col-12 col-md-2 offset-md-1">
                    <div class="logo text-center">
                        <img src="<?=$icon_url[$i];?>" alt="..."></a>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="box">
                        <p class="paragrafo3">
                            <?=$description[$i];?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php
            // End loop.
            endfor;
            endif;
        ?>
    </div>
</section>

<!-- Section Diferenciais e Beneficios -->
<section class="diferenciais-cases-item">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-11 offset-md-1">
                <h2>DIFERENCIAIS E BENEFÍCIOS</h2>
                <div class="row">
                <?php
                // Check rows exists.
                if( have_rows('diferenciais_e_beneficios') ):
                    // Loop through rows.
                    for($i=0; have_rows('diferenciais_e_beneficios'); $i++) : the_row();
                        $icon_url[$i] = get_sub_field('icone');
                        $description[$i] = get_sub_field('texto');
                    ?>

                  <div class="col-12 col-md-4">
                    <div class="box">
                      <p class="paragrafo3">
                          <?=$description[$i];?>
                      </p>
                    </div>
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
</section>

<!-- Section Citação -->
<section class="citacao-cases-item">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div id="triangle-down"></div>
                <div class="box">
                    <p><? the_field('texto_de_citacao'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Vídeo -->
<section class="video-cases-item">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <? the_field('video'); ?>
            </div>
        </div>
    </div>
</section>

<!-- Section Depoimento -->
<section class="depoimento-cases-item">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <?php
                // Check rows exists.   
                if( have_rows('depoimento_2') ):
                    // Loop through rows.
                    for($i=0; have_rows('depoimento_2'); $i++) : the_row();
                        $photo_url[$i] = get_sub_field('imagem');
                        $text[$i] = get_sub_field('texto');
                        $d_name[$i] = get_sub_field('nome');
                        $role[$i] = get_sub_field('cargo');
                ?>
                <div class="box text-center">
                    <img src="<?=$photo_url[$i];?>" alt="">
                    <h4><?=$d_name[$i];?></h4>
                    <h5><?=$role[$i];?></h5>
                    <p class="paragrafo3">
                        <span class="red">”</span><?=$text[$i];?><span class="red">”</span>
                    </p>
                </div>
            <?php
                // End loop.
                endfor;
                endif;
            ?>
            </div>
        </div>
    </div>
</section>

<!-- Section Conteúdo -->
<section class="conteudo-cases-item">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
            <?php
                // Check rows exists.   
                if( have_rows('conteudo') ):
                    // Loop through rows.
                    for($i=0; have_rows('conteudo'); $i++) : the_row();
                        $text[$i] = get_sub_field('texto');
                ?>
                <div class="box">
                    <?=$text[$i];?>      
                </div>
            <?php
                // End loop.
                endfor;
                endif;
            ?>
            </div>
        </div>
    </div>
</section>

<!-- Section Links Externos -->
<section class="links-externos-cases-item">
    <div class="container">
        <?php
            if($detect->isMobile()){
                echo '<div class="row mx-auto my-auto justify-content-center">
                        <div id="paymentMobileCarousel" class="carousel slide p-0" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">';

            }else{
                echo '<div class="row">';
            }

            // Check rows exists.   
            if( have_rows('links_externos') ):
                // Loop through rows.
                for($i=0; have_rows('links_externos'); $i++) : the_row();
                    $link_category[$i] = get_sub_field('categoria');
                    $link_title[$i] = get_sub_field('titulo');
                    $link_description[$i] = get_sub_field('descricao');
                    $link_url[$i] = get_sub_field('url_do_link');
            ?>
        
            <!-- Desktop -->
            <div class="col-12 col-md-4 hide-mobile">
                <div class="box">
                    <div class="category">
                        <span><?=$link_category[$i]?></span>
                    </div>
                    <div class="title">
                        <h3><?=$link_title[$i]?></h3>
                    </div>
                    <div class="description">
                        <p><?=$link_description[$i]?></p>
                    </div>
                    <div class="button">
                        <a href="<?=$link_url[$i]?>" target="_blank" class="btn btn-primary">Leia mais</a>
                    </div>
                </div>
            </div>
            
            <!-- Mobile slide -->
            <div class="carousel-item col-md-4 hide-desktop heroslide4 payment <?=$i == 0 ? 'active' : '';?>">
                <div class="col-11 m-0 p-0">
                    <div class="box">
                        <div class="category">
                            <span><?=$link_category[$i]?></span>
                        </div>
                        <div class="title">
                            <h3><?=$link_title[$i]?></h3>
                        </div>
                        <div class="description">
                            <p><?=$link_description[$i]?></p>
                        </div>
                        <div class="button">
                            <a href="<?=$link_url[$i]?>" target="_blank" class="btn btn-primary">Leia mais</a>
                        </div>
                    </div>
                </div>
            </div>
                    
            <?php
                // End loop.
                endfor;
                endif;
            
            if($detect->isMobile()){
                echo '</div>
                    </div>
                </div>';
            }else{
                echo '</div>';
            }
        ?>            
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