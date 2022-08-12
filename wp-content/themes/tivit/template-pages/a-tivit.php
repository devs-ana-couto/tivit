<?php /* Template Name: A Tivit */ ?>
<?php get_header(); ?>

<?php page_bulder_init(get_the_ID(), $post, true); ?>

    <!-- Conheça a nossa equipe -->
    <!-- --><? /*= do_shortcode('[ac-bloco-equipe]'); */ ?>

    <!-- Bloco ESG + SLIDER -->
    <div id="esgTivit" class="esg a-tivit carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="container">
            <div class="row">
                <div class="lp-tbanks-confira lp-tdx">

                    <div id="triangle-down"></div>

                    <div class="carousel-inner">

                        <div class="row columnReverseMobile">
                            <div class="col-12 col-md-6 lp-tbanks-confira-bg-right lp-tdx-confira-bg-right">
                                <div class="lp-tbanks-confira-content">
                                    <?php the_field('chamada_esg_ativit') ?>
                                    <a href="<?php the_field('esg_cta_texto_url') ?>"><?php the_field('esg_cta_texto') ?></a>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <?php
                                // Check rows exists.
                                if (have_rows('slider_esg')):
                                    // Loop through rows.
                                    for ($i = 0; have_rows('slider_esg'); $i++) : the_row();
                                        $imagem_de_fundo[$i] = get_sub_field('imagem_de_fundo');
                                        $campo_de_texto[$i] = get_sub_field('campo_de_texto');
                                        $texto_cta[$i] = get_sub_field('texto_cta');
                                        $url_cta[$i] = get_sub_field('url_cta');
                                        ?>
                                        <div class="carousel-item heroslide4 <?= $i == 0 ? 'active' : ''; ?>">
                                            <div class="col-12 lp-tbanks-confira-bg-left slide1 hide-mobile"
                                                 style="background: url('<?= $imagem_de_fundo[$i]; ?>') no-repeat center center; background-size: cover;">
                                                <div class="lp-tbanks-confira-carousel">
                                                    <?= $campo_de_texto[$i]; ?>
                                                    <a href="<?= $url_cta[$i]; ?>"><?= $texto_cta[$i]; ?></a>
                                                </div>
                                            </div>
                                            <div class="col-12 lp-tbanks-confira-bg-mobile hide-desktop"
                                                 style="background: url('<?= $imagem_de_fundo[$i]; ?>') no-repeat center center; background-size: cover;">
                                                <div class="position-relative">
                                                    <img class="w-100"
                                                         src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tdx/mobileslide1.svg"
                                                         alt="Mobile Slide 1">
                                                    <div class="lp-tbanks-confira-carousel d-flex flex-column justify-content-center">
                                                        <?= $campo_de_texto[$i]; ?>
                                                        <a href="<?= $url_cta[$i]; ?>"><?= $texto_cta[$i]; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    endfor;
                                endif;
                                ?>

                            </div>

                            <div class="col-12 col-md-6">
                                <div class="navigation <?= count(get_field('slider_esg')) == 1 ? 'hide-desktop hide-mobile' : '' ?>">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#esgTivit"
                                            data-bs-slide="prev">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/arrow_left.png"
                                             alt="arrow_left">
                                    </button>
                                    <div class="d-flex flex-row counter4">
                                        <div class="numactive4"></div>
                                        <div class="numseparation4"></div>
                                        <div class="numtotal4"></div>
                                    </div>
                                    <button class="carousel-control-next" type="button" data-bs-target="#esgTivit"
                                            data-bs-slide="next">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/navegacao/arrow_right.png"
                                             alt="arrow_right">
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="a-tivit-certificacoes text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php the_field('chamada_certificacoes_ativit') ?>
                </div>
            </div>

            <div id="ativitClientes" class="lp-tbanks-logo-clientes mt-0">
                <div class="row">
                    <div class="col-12">
                        <div class="lp-tbanks-logo-clientes-content text-center">
                            <div class="text-center my-3">
                                <div class="row mx-auto my-auto justify-content-center">
                                    <div id="ativitCustomerCarousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <?
                                            if (have_rows('certificacoes_ativit')):
                                                // Loop through rows.
                                                for ($i = 0; have_rows('certificacoes_ativit'); $i++) : the_row();
                                                    $img_url[$i] = get_sub_field('logo');
                                                    ?>
                                                    <div class="carousel-item heroslide3 customers <?= $i == 0 ? 'active' : '' ?>">
                                                        <div class="col-6 col-md-3">
                                                            <div class="h-100">
                                                                <div class="m-3">
                                                                    <img src="<?= $img_url[$i] ?>" alt="Gptw">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                endfor;
                                            endif;
                                            ?>
                                        </div>
                                        <div class="w-100 position-relative mt-2">
                                            <a class="carousel-control-prev bg-transparent w-aut"
                                               href="#ativitCustomerCarousel" role="button" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            </a>
                                            <div class="d-flex flex-row justify-content-center counter3 mt-3">
                                                <div class="numactive3"></div>
                                                <div class="numseparation3"></div>
                                                <div class="numtotal3"></div>
                                            </div>
                                            <a class="carousel-control-next bg-transparent w-aut"
                                               href="#ativitCustomerCarousel" role="button" data-bs-slide="next">
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
    </div>

    <div class="home-pessoas-e-carreiras inovar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="home-pessoas-e-carreiras-title">
                        <?php the_field('chamada_final_ativit') ?>
                    </div>
                    <div class="botao">
                        <a href="<?php the_field('cta_url_final_ativit') ?>"
                           class="btn btn-primary"><?php the_field('cta_texto_final_ativit') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>