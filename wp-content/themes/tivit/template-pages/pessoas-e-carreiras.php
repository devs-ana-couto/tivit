<?php /* Template Name: Pessoas e Carreiras */ ?>
<?php get_header(); ?>

    <section class="container-fluid p-0 header-inner position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 position-relative box-mask">
                    <div class="card-img-overlay p-0 bottom-0">
                        <img class="w-100 d-none d-lg-block"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/header-inner/Vector.svg"
                             alt="">
                        <img class="w-100 d-lg-none"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/header-inner/mask-mobile.svg"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 p-0 box-header position-relative"
             style="background: url('<?php $detect->isMobile() ? the_field('banner_mobile_pc') : the_field('banner_desktop_pc'); ?>')">
            <div class="card-img-overlay mask-gradient"></div>
            <div class="d-flex flex-column h-100 justify-content-center position-relative align-items-center">
                <div class="col-10 col-xxl-9 d-flex justify-content-center align-items-center flex-column box-title">
                    <p class="desc-title"><?php the_field('pre_chamada_pc') ?></p>
                    <h1 class="title"><?php the_field('chamada_pc') ?></h1>
                    <div class="buttoncta mt-4">
                        <a href="<?php the_field('link_cta'); ?>" class="cta text-white"><?php the_field('texto_do_cta'); ?></a>
                    </div>
                </div>
                <div class="col-auto player position-absolute peoples">
                    <p class="customNumbers"><?php the_field('chamada_numeros_pc') ?></p>
                    <div class="d-flex flex-column">
                        <div class="d-none col-12 d-flex justify-content-center flex-column position-relative order-2 order-lg-1">
                            <div class="col-12">
                                <div class="aura"></div>
                            </div>
                            <div class="col-12 d-flex justify-content-center position-absolute">
                                <button data-bs-toggle="modal" data-bs-target="#videoOpen">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-tivit/play.svg"
                                         alt="...">
                                </button>
                            </div>
                        </div>
                        <div class="col-12 d-none order-1 order-lg-2 d-flex justify-content-center">
                            <button class="text-white" data-bs-toggle="modal" data-bs-target="#videoOpen">
                                Assista ao reel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero banner antigo-->
    <!--<div class="pec-hero position-relative"
         style="background: url('<?/* $detect->isMobile() ? the_field('banner_mobile_pc') : the_field('banner_desktop_pc'); */?>') no-repeat center center; background-size: cover;">
        <div class="pec-hero-title">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="zindex position-relative">
                            <h1><?/* the_field('pre_chamada_pc') */?></h1>
                            <h2><?/* the_field('chamada_pc') */?></h2>
                            <div class="buttoncta">
                                <a href="<?/* the_field('link_cta') */?>"><?/* the_field('texto_do_cta') */?></a>
                            </div>
                        </div>
                        <div class="maskDiv text-center hide-desktop">
                            <img src="<?php /*echo get_template_directory_uri(); */?>/assets/images/contato/banner-mask.svg"
                                 class="position-absolute mask" alt="Máscara">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="customMargin d-flex justify-content-center align-items-center hide-mobile">
            <img class="mask w-100 position-absolute"
                 src="<?php /*echo get_template_directory_uri(); */?>/assets/images/esg/v_slider_home.svg" alt="mask"/>
            <p class="customNumbers"><?/* the_field('chamada_numeros_pc') */?></p>
        </div>
    </div>-->

    <div id="pecCounter" class="lp-tbanks-conheca">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="numberMobile hide-desktop">
                        <small><? the_field('chamada_numeros_pc') ?></small>
                    </div>

                    <div class="lp-tbanks-credibilidade text-center">
                        <div class="row">
                            <div class="col-12 col-md-4 hide-mobile">
                                <p class="w-100 position-relative">
                <span>
                  <b><? the_field('nota_glassdoor') ?></b>
                </span>
                                    <img class="tag position-absolute"
                                         src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/glassdoor.svg"
                                         width="60" alt="Glass Door"/>
                                </p>
                                <div class="w-100 d-flex justify-content-center align-items-center">
                                    <p class="custom-text">
                                        <?php _e('Nota Glassdoor'); ?>
                                    </p>
                                </div>
                            </div>

                            <!-- Mobile section -->
                            <div class="col-12 col-md-4 hide-desktop">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="w-100 position-relative">
                    <span>
                      <b><? the_field('nota_glassdoor') ?></b>
                    </span>
                                            <img class="tag position-absolute"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/glassdoor.svg"
                                                 width="60" alt="Glass Door"/>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <div class="w-100 h-100 d-flex justify-content-start align-items-center">
                                            <p class="custom-text">
                                                <?php _e('Nota Glassdoor'); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- //// Mobile section -->

                            <div class="col-12 col-md-4 hide-mobile">
                                <p class="w-100 position-relative">
                                    <span><? the_field('recomendaria_para_um_amigo') ?></span>
                                    <img class="tag position-absolute"
                                         src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/greatplace.svg"
                                         width="60" alt="Great place to work tag"/>
                                </p>
                                <div class="w-100 d-flex justify-content-center align-items-center">
                                    <p class="custom-text">
                                        <?php _e('Recomendaria para um amigo'); ?>
                                    </p>
                                </div>
                            </div>

                            <!-- Mobile section -->
                            <div class="col-12 col-md-4 hide-desktop">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="w-100 position-relative">
                    <span>
                      <b><? the_field('recomendaria_para_um_amigo') ?></b>
                    </span>
                                            <img class="tag position-absolute"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/greatplace.svg"
                                                 width="60" alt="Great place to work tag"/>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                                            <p class="custom-text">
                                                <?php _e('Recomendaria para um amigo'); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- //// Mobile section -->

                            <div class="col-12 col-md-4 hide-mobile">
                                <p>
                                    <span><? the_field('das_vagas_preenchidas_com_promocao_interna') ?></span>
                                </p>
                                <div class="w-100 d-flex justify-content-center align-items-center">
                                    <p class="custom-text">
                                        <?php _e('Das vagas preenchidas com promoção interna'); ?>
                                    </p>
                                </div>
                            </div>

                            <!-- Mobile section -->
                            <div class="col-12 col-md-4 hide-desktop">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="w-100 position-relative">
                    <span>
                      <b><? the_field('das_vagas_preenchidas_com_promocao_interna') ?></b>
                    </span>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                                            <p class="custom-text">
                                                <?php _e('Das vagas preenchidas com promoção interna'); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- //// Mobile section -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="pecConheca" class="lp-tbanks-conheca">
        <div class="container">
            <div class="lp-tbanks-arrow text-center mb-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/icons/seta-red.svg"
                     class="bounce" alt="Tbanks Saiba Mais">
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="lp-tbanks-conheca-content">
                        <p>
                            <? the_field('introducao_numeros_pc'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="pecPort" class="port">
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
                                    if (have_rows('portifolio_lista')) {
                                        for ($i = 0; have_rows('portifolio_lista'); $i++) {
                                            the_row();
                                            echo '<a href="#"><p';
                                            if ($i == 0) echo ' class="active"';
                                            echo '>' . get_sub_field('portifolio_titulo') . '</p></a>';
                                        }
                                    }
                                    ?>
                                    <?php echo get_field('portifolio_call_to_action'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mascaraDobra3 position-absolute hide-desktop">
                            <img class="w-100"
                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/home/portmaskmobile.svg"
                                 alt="mask">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mascaraDobra3 hide-mobile">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mascara_banner.svg"
                             alt="mask">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Valorização -->
    <div id="tdx" class="valorizacao">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center flex-column w-100">
                <h2 class="title text-center">
                    <?php _e('O QUE VALORIZAMOS E VIVENCIAMOS'); ?>
                </h2>
            </div>

            <div class="row hide-mobile mt-2">
                <div class="col-sm-12 col-md-4">
                    <div class="box">
                        <div class="w-100">
                            <div class="w-100 m-auto text-center">
                                <img src="<? the_field('item_1_logo_vv') ?>" alt="design">
                            </div>
                            <h2>
                                <? the_field('item_1_titulo_vv') ?>
                            </h2>
                            <p>
                                <? the_field('item_1_descricao_vv') ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="box">
                        <div class="w-100">
                            <div class="w-100 m-auto text-center">
                                <img src="<? the_field('item_2_logo_vv') ?>" alt="grafico">
                            </div>
                            <h2>
                                <? the_field('item_2_titulo_vv') ?>
                            </h2>
                            <p>
                                <? the_field('item_2_descricao_vv') ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="box">
                        <div class="w-100">
                            <div class="w-100 m-auto text-center">
                                <img src="<? the_field('item_3_logo_vv') ?>" alt="code">
                            </div>
                            <h2>
                                <? the_field('item_3_titulo_vv') ?>
                            </h2>
                            <p>
                                <? the_field('item_3_descricao_vv') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- mobile slide -->
            <div class="row mx-auto my-auto justify-content-center hide-desktop">
                <div id="contentMobileCarousel" class="carousel slide p-0" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item heroslide4 content active">
                            <div class="col-11 m-0 p-0">
                                <div class="box">
                                    <div class="w-100">
                                        <div class="w-100 m-auto text-center">
                                            <img src="<? the_field('item_1_logo_vv') ?>" alt="design">
                                        </div>
                                        <h2>
                                            <? the_field('item_1_titulo_vv') ?>
                                        </h2>
                                        <p>
                                            <? the_field('item_1_descricao_vv') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item heroslide4 content">
                            <div class="col-11 m-0 p-0">
                                <div class="box">
                                    <div class="w-100">
                                        <div class="w-100 m-auto text-center">
                                            <img src="<? the_field('item_2_logo_vv') ?>" alt="design">
                                        </div>
                                        <h2>
                                            <? the_field('item_2_titulo_vv') ?>
                                        </h2>
                                        <p>
                                            <? the_field('item_2_descricao_vv') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item heroslide4 content">
                            <div class="col-11 m-0 p-0">
                                <div class="box">
                                    <div class="w-100">
                                        <div class="w-100 m-auto text-center">
                                            <img src="<? the_field('item_3_logo_vv') ?>" alt="design">
                                        </div>
                                        <h2>
                                            <? the_field('item_3_titulo_vv') ?>
                                        </h2>
                                        <p>
                                            <? the_field('item_3_descricao_vv') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Depoimentos -->
    <div id="pecDepoimentos" class="lp-tbanks-depoimentos">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?
                if (have_rows('depoimentos_pc')):
                    // Loop through rows.
                    for ($i = 0; have_rows('depoimentos_pc'); $i++) : the_row();
                        $imagem_url_item[$i] = get_sub_field('imagem');
                        $name_item[$i] = get_sub_field('nome');
                        $role_item[$i] = get_sub_field('cargo');
                        $linkedin_item[$i] = get_sub_field('linkedin');
                        $github_item[$i] = get_sub_field('github');
                        $instagram_item[$i] = get_sub_field('instagram');
                        $depoimento_item[$i] = get_sub_field('depoimento');
                        ?>
                        <div class="carousel-item heroslide <?= $i == 0 ? 'active' : '' ?>">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="lp-tbanks-depoimentos-content text-center ">
                                            <div class="lp-tbanks-depoimentos-autor">
                                                <img src="<?= $imagem_url_item[$i]; ?>" alt="Tbanks Saiba Mais">
                                                <h3><?= $name_item[$i] ?></h3>
                                                <h4><?= $role_item[$i] ?></h4>
                                                <div class="redes d-flex flex-row justify-content-center align-items-center w-100">
                                                    <a href="<?= $linkedin_item[$i] ?>"><img
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/in.svg"
                                                                alt="Linkedin" class="img-fluid"></a>
                                                    <a href="<?= $github_item[$i] ?>"><img
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/git.svg"
                                                                alt="Git" class="img-fluid"></a>
                                                    <a href="<?= $instagram_item[$i] ?>"><img
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/mundo.svg"
                                                                alt="Mundo" class="img-fluid"></a>
                                                </div>
                                                <p>
                                                    ”<?= $depoimento_item[$i] ?>”
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?
                    endfor;
                endif;
                ?>

            </div>
            <div class="mobileRelative">
                <button class="carousel-control-prev" type="button" data-bs-target="#recipeCarousel"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#recipeCarousel"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                <div class="d-flex flex-row justify-content-center counter mt-3">
                    <div class="numactive"></div>
                    <div class="numseparation"></div>
                    <div class="numtotal"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- O que a TIVIT Oferece -->
    <div id="pecOferece" class="lp-tbanks-conheca">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center flex-column w-100">
                <h2 class="title text-center">
                    <?php _e('O que a tivit oferece'); ?>
                </h2>
            </div>

            <div class="lp-tbanks-services text-center m-0 hide-mobile">

                <div class="row">
                    <?
                    if (have_rows('itens_opc')):
                        // Loop through rows.
                        for ($i = 0; have_rows('itens_opc'); $i++) : the_row();
                            $name_itemp[$i] = get_sub_field('nome');
                            $description_itemp[$i] = get_sub_field('descricao');
                            ?>
                            <div class="col-12 col-md-3">
                                <div class="bg-white">
                                    <h3><?= $name_itemp[$i] ?></h3>
                                    <p><?= $description_itemp[$i] ?></p>
                                </div>
                            </div>
                        <? endfor; endif; ?>

                </div>

            </div>

            <!-- Bloco Mobile Carrossel -->
            <div class="lp-tbanks-services text-center m-0 hide-desktop">
                <div id="carouselCustom" class="container-fluid p-0 text-center my-3">
                    <div class="row mx-auto my-auto justify-content-center">
                        <div id="offerCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <?
                                if (have_rows('itens_opc')):
                                    // Loop through rows.
                                    for ($i = 0; have_rows('itens_opc'); $i++) : the_row();
                                        $name_itemp[$i] = get_sub_field('nome');
                                        $description_itemp[$i] = get_sub_field('descricao');
                                        ?>
                                        <div class="carousel-item heroslide6 <?= $i == 0 ? 'active' : ''; ?>">
                                            <div class="col-11 col-md-3">
                                                <div class="bg-white">
                                                    <h3><?= $name_itemp[$i] ?></h3>
                                                    <p><?= $description_itemp[$i] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <? endfor; endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="insiderBlock d-flex justify-content-center align-items-center flex-column w-100">
                <h2 class="title text-center">
                    <?php _e('Nossos Benefícios'); ?>
                </h2>
            </div>

            <!-- first row -->
            <div class="row hide-mobile">
                <?
                if (have_rows('itens_nb')):
                    // Loop through rows.
                    for ($i = 0; have_rows('itens_nb'); $i++) : the_row();
                        $icone_itemnb[$i] = get_sub_field('icone');
                        $name_itemnb[$i] = get_sub_field('nome');
                        $description_itemnb[$i] = get_sub_field('descricao');
                        ?>
                        <div class="col-sm-12 col-md-4">
                            <div class="box">
                                <div class="d-flex flex-column justify-content-start align-items-center w-100 h-100 margin-auto text-center">
                                    <img src="<?= $icone_itemnb[$i] ?>" alt="Privally">
                                    <div class="content">
                                        <h2><?= $name_itemnb[$i] ?></h2>
                                        <p>
                                            <?= $description_itemnb[$i] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? endfor; endif; ?>

            </div>

            <!-- Bloco Mobile Carrossel -->
            <div id="carouselCustom" class="container-fluid p-0 text-center my-3 hide-desktop">
                <div class="row mx-auto my-auto justify-content-center">
                    <div id="offerCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <?
                            if (have_rows('itens_nb')) {
                                for ($i = 0; have_rows('itens_nb'); $i++) {
                                    the_row();
                                    $icone_itemnb[$i] = get_sub_field('icone');
                                    $name_itemnb[$i] = get_sub_field('nome');
                                    $description_itemnb[$i] = get_sub_field('descricao');
                                    ?>
                                    <div class="carousel-item heroslide5 active">
                                        <div class="col-11 col-md-3">
                                            <div class="box">
                                                <div class="d-flex flex-column justify-content-start align-items-center w-100 h-100 margin-auto text-center">
                                                    <img src="<?php echo $icone_itemnb[$i]; ?>" alt="Privally">
                                                    <div class="content">
                                                        <h2><?php echo $name_itemnb[$i] ?></h2>
                                                        <p>
                                                            <?php echo $description_itemnb[$i] ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Conheça a nossa equipe -->
<?= do_shortcode('[ac-bloco-equipe]'); ?>

    </div>
    </div>

<?php get_footer(); ?>