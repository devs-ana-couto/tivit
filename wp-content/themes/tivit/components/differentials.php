<div class="container" style="background: <?=the_field('cor_de_fundo_nd');?>">
    <div class="diferenciais">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="intro">
                    <h2 class="titleDif"><?the_field('chamada_diferenciais')?></h2>
                    <p class="subtitle"><?the_field('descricao_diferenciais')?></p>
                    <div>
                        <a href="<?the_field('cta_link_solucoes');?>" class="cta"><?the_field('cta_texto_solucoes_1');?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <?
                        if( have_rows('itens_solucoes') ):
                        // Loop through rows.
                            for($i=0; have_rows('itens_solucoes'); $i++) : the_row();
                            $name_item[$i] = get_sub_field('nome');
                            $content_item[$i] = get_sub_field('descricao');
                    ?>
                    <div class="col-12 col-md-6">
                        <div class="content">
                            <div>
                                <h2><?=$name_item[$i]?></h2>
                                <p><?=$content_item[$i]?></p>
                            </div>
                        </div>
                    </div>
                    <? endfor; endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>