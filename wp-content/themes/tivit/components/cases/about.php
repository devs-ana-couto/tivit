<!-- Section Empresa -->
<section class="empresa-cases-item" style="background: <?= the_field('cor_de_fundo_sobre_cases'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2><? the_field('chamada_empresa') ?></h2>
            </div>
            <div class="col-4 hide-desktop">
                <img src="<? the_field('logo_da_empresa'); ?>" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 d-flex flex-wrap">
                <div class="col-12">
                    <p class="paragrafo2"><? the_field('descricao'); ?></p>
                </div>
                <div class="col-12 col-lg-6 pt-5">
                    <a href="contato" class="btn-entre-em-contato">Entre em Contato</a>
                </div>
                <div class="col-12  col-lg-6  pt-5">
                    <a href="<? the_field('download'); ?>" class="btn-download">Download <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/custom-post-types/cases/save_alt.svg"
                                alt="..."></a>
                </div>
            </div>
            <div class="col-4 h-100 hide-mobile offset-md-1">
                <img src="<? the_field('logo_da_empresa'); ?>" alt="">
            </div>

        </div>
    </div>
</section>