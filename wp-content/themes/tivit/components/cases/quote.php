<!-- Section Citação -->
<section class="citacao-cases-item" style="background: <?=the_field('cor_de_fundo_citacao');?>">
<div id="triangle-down"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">                
                <div class="box">
                    <? if(get_field('titulo_da_citacao') != ''){  ?>
                        <h2><? the_field('titulo_da_citacao'); ?></h2>
                    <? } ?>
                    <? if(get_field('texto_de_citacao') != ''){  ?>
                        <p><? the_field('texto_de_citacao'); ?></p>
                    <? } ?>
                </div>
            </div>
        </div>
    </div>
</section>