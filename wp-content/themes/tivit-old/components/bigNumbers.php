<!--<div class="gap" style="background: <?php /*the_field('cor_de_fundo_solucoes');*/?>">
    <div class="container">
        <div class="w-100">
            <h2 class="title text-center"><?php /*the_field('chamada_big_numbers_solucoes');*/?></h2>
            <?php /*the_field('descricao_solucoes_big_numbers');*/?>
        </div>

        <div class="row">
            <?php /*
                if( have_rows('itens_big_numbers') ):
                // Loop through rows.
                    for($i=0; have_rows('itens_big_numbers'); $i++) : the_row();
                    $text_item[$i] = get_sub_field('texto');
                    $desciption_item[$i] = get_sub_field('descricao');
            */?>
            <div class="col-12 <?php /*
                if(count(get_field('itens_big_numbers')) == 1){
                echo 'col-md-12';
                }elseif(count(get_field('itens_big_numbers')) == 2){
                echo 'col-md-6';
                }elseif(count(get_field('itens_big_numbers')) == 3){
                echo 'col-md-4';
                }elseif(count(get_field('itens_big_numbers')) == 4){
                echo 'col-md-3';
                }
            */?>  hide-mobile">
                <div class="bigNumbersTitle">
                    <div class="title">
                        <h2><?php /*echo $text_item[$i]*/?></h2>
                    </div>
                    <div class="subtitle">
                        <p><?php /*echo $desciption_item[$i]*/?></p>
                    </div>
                </div>
            </div>
            <?php /*  endfor; endif; */?>
        </div>
    </div>
</div>-->
<section class="container-fluid px-lg-0 box-big-number position-relative"
         style="background: <?php the_field('cor_de_fundo_solucoes');?>">
    <!-- mascara 50% color top permitir que o usuario passar a cor desejada  através do style background -->
    <div class="card-img-overlay h-50 fundo-50-top" style="background: transparent;"></div>
    <!-- o titulo é opicinal, caso o usurio não passe nenhum titulo, adiconar a classe
    d-none no container abaixo -->
    <div class="containe d-none">
        <div class="col d-flex justify-content-center box-title-top">
            <h3 class="title-top"><?php the_field('chamada_big_numbers_solucoes');?></h3>
            <?php the_field('descricao_solucoes_big_numbers');?>
        </div>
    </div>

    <!-- aqui se incia os container cards -->
    <div class="container-fluid p-0">
        <div class="container">
            <div class="row">
                <div class="col-12 box-cards">
                    <!-- passar o numero de colunas no row-cols-lg-numero, recomendado no máximo 3 colunas -->
                    <div class="row row-cols-1 row-cols-lg-auto align-items-stretch g-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body p-0">
                                    <!-- permitir que o usuário passe a cor do titulo atrávés do style background,
                                     caso não seja setado a cor padrão será a defina no css-->
                                    <h5 class="card-title">15 bilhões</h5>
                                    <p class="card-text"><?php echo $desciption_item[$i]?></p>
                                </div>
                            </div>
                        </div>
                        <?php 
                        if( have_rows('itens_big_numbers') ):
                        // Loop through rows.
                        for($i=0; have_rows('itens_big_numbers'); $i++) : the_row();
                        $text_item[$i] = get_sub_field('texto');
                        $desciption_item[$i] = get_sub_field('descricao');
                        ?>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body p-0">
                                        <h5 class="card-title"><?php echo $text_item[$i]?></h5>
                                        <p class="card-text"><?php echo $desciption_item[$i] ?></p>
                                    </div>
                                </div>
                            </div>

                        <?php   
                            endfor;
                            endif;
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>