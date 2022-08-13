<?php /* Template Name: A Tivit */ ?>
<?php get_header(); ?>

<?php page_bulder_init(get_the_ID(), $post, true); ?>


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