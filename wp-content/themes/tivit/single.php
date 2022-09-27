<?php
get_header();

if(have_posts()) : while(have_posts()) : the_post();

?>

<!-- Section Banner -->
<section class="banner-cases-item position-relative">
    <div class="case-item-background" style="background: url('<? $detect->isMobile() ? the_field('banner_header_mobile_conteudo') : the_field('banner_header_desktop_conteudo'); ?>') no-repeat center center; background-size: cover;display: flex;
    align-items: center;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5" style="    z-index: 1054;">
                    <div class="case-item-content">
                        <h2>Artigo</h2>
                        <h1><?php the_title(); ?></h1>
                        <h3>Tempo de leitura: <strong><? the_field('tempo_de_leitura')?> minutos</strong></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-img-overlay box-mask-cases-new" style="z-index: 0"></div>
</section>
<?php

    page_bulder_init(get_the_ID(),$post,true);

    ?>
<section class="conteudo">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-8">
        <div class="autor">
            <h3>Escrito por: <strong><? the_author() ?></strong></h3>
        </div>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<!-- Section Newsletter -->
<!--<section class="newsletter-cases-item">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?/*=do_shortcode('[contact-form-7 id="220" title="Newsletter"]');*/?>
            </div>
        </div>
    </div>
</section>-->

<div class="cases-recentes">
  <!--- Desktop -->
  <div class="container hide-mobile">

    <div class="row">
      <?=do_shortcode('[ac-bloco-conteudo fundo="escuro"]Conteúdos Relacionais[/ac-bloco-conteudo]') ?>
    </div>

  </div>
  <!--- End Desktop -->
</div>

<?php
endwhile; endif;
get_footer();
?>