<?php
get_header();

if(have_posts()) : while(have_posts()) : the_post();

page_bulder_init(get_the_ID(),$post,true);
?>

<!-- Section Banner -->
<section class="banner-cases-item">
    <div class="case-item-background" style="background: url('<? $detect->isMobile() ? the_field('banner_header_mobile_conteudo') : the_field('banner_header_desktop_conteudo'); ?>') no-repeat center center; background-size: cover;display: flex;
    align-items: center;">
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
        <div class="autor">
            <h3>Escrito por: <strong><? the_author() ?></strong></h3>
        </div>
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

<div class="cases-recentes">
  <!--- Desktop -->
  <div class="container hide-mobile">

    <div class="row">
      <?=do_shortcode('[ac-pagina-cases]') ?>
    </div>

  </div>
  <!--- End Desktop -->
</div>

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