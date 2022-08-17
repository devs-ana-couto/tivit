<?php /* Template Name: Cases */ ?>
<?php get_header(); ?>

<?php page_bulder_init(get_the_ID(), $post, true); ?>


    <div class="cases-recentes">
        <!--- Desktop -->
        <div class="container hide-mobile">
            <div class="row">
                <?= do_shortcode('[ac-pagina-cases]') ?>
            </div>
        </div>
        <!--- End Desktop -->
    </div>

    <!--<div class="home-pessoas-e-carreiras inovar">
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
    </div>-->

<?php get_footer(); ?>