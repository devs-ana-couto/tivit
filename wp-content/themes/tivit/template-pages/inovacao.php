<?php /* Template Name: Inovação */ ?>
<?php get_header(); ?>

<?php page_bulder_init(get_the_ID(),$post,true);?>

    <!-- modulo antigo desativado -->
    <!--<div class="inovacao-hero"
         style="background: url('<? /* $detect->isMobile() ? the_field('header_mobile_inovacao') : the_field('header_desktop_inovacao'); */ ?>') no-repeat center center; background-size: cover;">

        <div class="inovacao-hero-title">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative zindex">
                            <h1><? /* the_field('pre_chamada_inovacao'); */ ?></h1>
                            <h2 class="hide-mobile"><? /* the_field('chamada_inovacao'); */ ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="customMargin d-flex justify-content-center align-items-center hide-mobile">
            <img class="mask w-100 position-absolute"
                 src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/esg/v_slider_home.svg" alt="mask"/>
        </div>
        <div class="inovacao-hero-content hide-desktop">
            <h2><? /* the_field('chamada_inovacao'); */ ?></h2>
        </div>

        <div class="maskDiv text-center hide-desktop">
            <img src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/contato/banner-mask.svg"
                 class="position-absolute mask" alt="Máscara">
        </div>

    </div>-->

    <!-- Introdução abaixo do Hero-->
    <div class="inovacao-intro">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>
                        <? the_field('introducao_inovacao'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bloco Ventures -->
    <div id="ventures">
        <div class="d-flex flex-column container w-100 text-center justify-content-center align-items-center">
            <h2><? the_field('chamada_inovacao_ventures'); ?></h2>
            <p><? the_field('descricao_inovacao_ventures'); ?></p>
        </div>
        <div class="container mt-3 mb-3 mt-md-5 mb-md-5">

            <div class="row">
                <?
                if (have_rows('logo_inovacao_ventures')):
                    // Loop through rows.
                    for ($i = 0; have_rows('logo_inovacao_ventures'); $i++) : the_row();
                        $logo_url[$i] = get_sub_field('logo');
                        $cta_texto[$i] = get_sub_field('cta_texto');
                        $cta_url[$i] = get_sub_field('cta_url');
                        ?>
                        <div class="col-sm-12 col-md-4 mt-3">
                            <div class="box">
                                <div class="d-flex justify-content-custom text-center">
                                    <img src="<?= $logo_url[$i] ?>" alt="Privally">
                                </div>
                                <div class="chamada">
                                    <a href="<?= $cta_url[$i] ?>"><?= $cta_texto[$i] ?></a>
                                </div>
                            </div>
                        </div>
                    <? endfor; endif; ?>
            </div>

            <!-- <div class="esconder-por-hora">
      <div class="aboveBlock d-flex justify-content-center">
        <div class="textAbove">
          <p>Juntas, nossas marcas tem skills para atender nossos clientes com diversas soluções:</p>
        </div>
      </div>
      <div class="w-100">
        <div class="d-flex justify-content-center flex-row services">
          <?
            if (have_rows('skills_inovacao_ventures')):
                // Loop through rows.
                for ($i = 0; have_rows('skills_inovacao_ventures'); $i++) : the_row();
                    $skill[$i] = get_sub_field('skill');
                    ?>
          <em><?= $skill[$i] ?></em>

        <? endfor; endif; ?>
        </div>
      </div>
    </div> -->

            <div class="d-flex justify-content-center mt-5 w-100">
                <a href="/staged/tivit/ventures" class="button">CONHEÇA MAIS SOBRE VENTURES</a>
            </div>
            <div id="triangle-down"></div>
        </div>
    </div>

    <!-- Bloco TivitLabs -->
    <div id="tivitLabs" class="container">
        <div class="w-100 margin-auto text-center">
            <img src="<? the_field('logo_labs_inovacao'); ?>" alt="Tivit Labs">
        </div>
        <div class="d-flex justify-content-center subText">
            <p class="text-center">
                <? the_field('descricao_labs_inovacao'); ?>
            </p>
        </div>
    </div>

    <!-- Bloco Carrossel Infinito -->
    <div id="carouselCustom" class="container-fluid p-0 text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?
                    if (have_rows('itens_labs_inovacao')):
                        // Loop through rows.
                        for ($i = 0; have_rows('itens_labs_inovacao'); $i++) : the_row();
                            $img_url[$i] = get_sub_field('imagem_item_inovacao');
                            $title_item[$i] = get_sub_field('titulo_item_inovacao');
                            $description[$i] = get_sub_field('descricao_item_inovacao');
                            ?>
                            <div class="carousel-item heroslide <?= $i == 0 ? 'active' : '' ?>">
                                <div class="col-11 col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="<?= $img_url[$i] ?>" alt="Blog 1" class="img-fluid w-100">
                                        </div>
                                        <div class="content">
                                            <h2><?= $title_item[$i] ?></h2>
                                            <p><?= $description[$i] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <? endfor; endif; ?>
                </div>
                <div class="d-flex justify-content-center mt-3 mt-md-5">
                    <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                       data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <div class="d-flex flex-row counter">
                        <div class="numactive"></div>
                        <div class="numseparation"></div>
                        <div class="numtotal"></div>
                    </div>
                    <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                       data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="btnLabsCta">
        <div class="cta">
            <a href="<? the_field('cta_url_inovacao') ?>" class="button"><? the_field('cta_texto_inovacao') ?></a>
        </div>
    </div>

    <!-- Bloco CTA Tour -->
    <div id="tour">
        <div class="image-background position-relative">
            <img src="<? $detect->isMobile() ? the_field('imagem_de_fundo_labs3d_inovacao_mob') : the_field('imagem_de_fundo_labs3d_inovacao_desk'); ?>"
                 alt="background" class="img-fluid w-100">
            <!-- <div class="position-absolute w-100">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/maskinovation.svg" alt="mask" class="img-fluid w-100">
    </div> -->
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 txt position-absolute">
                <h2 class="textLabs">
                    <? the_field('titulo_labs3d_inovacao') ?>
                </h2>
                <p>
                    <? the_field('descricao_labs3d_inovacao') ?>
                </p>
                <a href="<? the_field('cta_url_labs3d_inovacao') ?>">
                    <? the_field('cta_texto_labs3d_inovacao') ?>
                </a>
            </div>
        </div>
    </div>


    <!-- TDX -->
    <div id="tdx">
        <div class="container">
            <div class="w-100 text-center m-auto">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao/tdx.svg" alt="tdx">
            </div>
            <div class="d-flex justify-content-center align-items-center flex-column w-100">
                <p class="subtitle text-center">
                    Nascida da tecnologia, a Tdx veio trazer mais. Pesquisamos, investigamos e nos atualizamos o tempo
                    todo para encontrar a melhor forma do seu negócio ser digital.
                </p>
            </div>

            <div class="row mt-5 hide-mobile">
                <?php
                // Check rows exists.
                if (have_rows('logos_tdx_inovacao')):
                    // Loop through rows.
                    for ($i = 0; have_rows('logos_tdx_inovacao'); $i++) : the_row();
                        $logo_tdx[$i] = get_sub_field('logo');
                        $title_tdx[$i] = get_sub_field('titulo');
                        $description_tdx[$i] = get_sub_field('descricao');
                        ?>
                        <div class="col-sm-12 col-md-3">
                            <div class="box">
                                <div class="w-100">
                                    <div class="w-100 m-auto text-center">
                                        <img src="<?= $logo_tdx[$i] ?>" alt="design">
                                    </div>
                                    <h2>
                                        <?= $title_tdx[$i] ?>
                                    </h2>
                                    <p>
                                        <?= $description_tdx[$i] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <? endfor; endif; ?>

            </div>

            <!-- mobile slide -->
            <div class="row mx-auto my-auto justify-content-center mt-3 mt-md-0 hide-desktop">
                <div id="tdxMobileCarousel" class="carousel slide p-0" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <?php
                        // Check rows exists.
                        if (have_rows('logos_tdx_inovacao')):
                            // Loop through rows.
                            for ($i = 0; have_rows('logos_tdx_inovacao'); $i++) : the_row();
                                $logo_tdx[$i] = get_sub_field('logo');
                                $title_tdx[$i] = get_sub_field('titulo');
                                $description_tdx[$i] = get_sub_field('descricao');
                                ?>
                                <div class="carousel-item heroslide3 tdx <?= $i == 0 ? 'active' : ''; ?>">
                                    <div class="col-11 m-0 p-0">
                                        <div class="box">
                                            <div class="w-100">
                                                <div class="w-100 m-auto text-center">
                                                    <img src="<?= $logo_tdx[$i] ?>" alt="design">
                                                </div>
                                                <h2>
                                                    <?= $title_tdx[$i] ?>
                                                </h2>
                                                <p>
                                                    <?= $description_tdx[$i] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? endfor; endif; ?>
                    </div>
                </div>
            </div>

            <div class="cta w-100 d-flex align-items-center justify-content-center">
                <a href="<? the_field('cta_url_tdx_inovacao') ?>"
                   class="button"><? the_field('cta_texto_tdx_inovacao') ?></a>
            </div>
        </div>
    </div>

    <!-- Bloco de Conteúdos -->
    <div id="contentTdx" class="home-content content-inovacao">
        <div id="triangle-down"></div>
        <?= do_shortcode('[ac-bloco-conteudo]'); ?>
    </div>
    </div>
<?php get_footer(); ?>