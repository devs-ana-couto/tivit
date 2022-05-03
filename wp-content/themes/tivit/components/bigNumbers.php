<div class="gap" style="background: <?=the_field('cor_de_fundo_solucoes');?>">
    <div class="container">
        <div class="w-100">
            <h2 class="title text-center"><?the_field('chamada_big_numbers_solucoes');?></h2>
            <?the_field('descricao_solucoes_big_numbers');?>
        </div>

        <div class="row">
            <?
                if( have_rows('itens_big_numbers') ):
                // Loop through rows.
                    for($i=0; have_rows('itens_big_numbers'); $i++) : the_row();
                    $text_item[$i] = get_sub_field('texto');
                    $desciption_item[$i] = get_sub_field('descricao');
            ?>
            <div class="col-12 <? 
                if(count(get_field('itens_big_numbers')) == 1){
                echo 'col-md-12';
                }elseif(count(get_field('itens_big_numbers')) == 2){
                echo 'col-md-6';
                }elseif(count(get_field('itens_big_numbers')) == 3){
                echo 'col-md-4';
                }elseif(count(get_field('itens_big_numbers')) == 4){
                echo 'col-md-3';
                }
            ?>  hide-mobile">
                <div class="bigNumbersTitle">
                    <div class="title">
                        <h2><?=$text_item[$i]?></h2>
                    </div>
                    <div class="subtitle">
                        <p><?=$desciption_item[$i]?></p>
                    </div>
                </div>
            </div>
            <?  endfor; endif; ?>
        </div>
    </div>
</div>