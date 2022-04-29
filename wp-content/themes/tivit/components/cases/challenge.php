<!-- Section Desafio -->
<section class="desafio-cases-item" style="background: <?=the_field('cor_de_fundo_desafio_cases');?>">
    <div class="container">
        <div class="row">
            <div class="col-11 offset-md-1">
                <h2><?the_field('chamada_desafio')?></h2>
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