<!-- Section Depoimento -->
<section class="depoimento-cases-item" style="background: <?=the_field('cor_de_fundo_depoimentos_cases');?>">

    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="box text-center">
                <? if(get_field('chamada_depoimentos_cases') != ''){  ?>
                    <h2><?the_field('chamada_depoimentos_cases')?></h2>
                <? } ?>
                <? if(get_field('descricao_depoimentos_cases') != ''){  ?>
                    <p><?the_field('descricao_depoimentos_cases')?></p>
                <? } ?>
            <?php
                // Check rows exists.   
                if( have_rows('depoimento_2') ):
                    // Loop through rows.
                    for($i=0; have_rows('depoimento_2'); $i++) : the_row();
                        $photo_url[$i] = get_sub_field('imagem');
                        $text[$i] = get_sub_field('texto');
                        $d_name[$i] = get_sub_field('nome');
                        $role[$i] = get_sub_field('cargo');
                ?>
                
                    <img src="<?=$photo_url[$i];?>" alt="">
                    <h4><?=$d_name[$i];?></h4>
                    <h5><?=$role[$i];?></h5>
                    <p class="paragrafo3">
                        <span class="red">”</span><?=$text[$i];?><span class="red">”</span>
                    </p>
                
            <?php
                // End loop.
                endfor;
                endif;
            ?>
            </div>
            </div>
        </div>
    </div>
</section>