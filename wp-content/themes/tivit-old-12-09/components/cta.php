<div class="divCta text-center" style="background: <?=the_field('cor_de_fundo_nuvem');?>"> 
    <div class="d-flex justify-content-center align-items-center flex-column">
        <h2 class="cta"><?the_field('chamada_final_nuvem_solucoes');?></h2>
    </div>
    <? if(get_field('cta_texto_nuvem') != ''){  ?>
        <a href="<?the_field('cta_link_nuvem');?>" class="buttonCta"><?the_field('cta_texto_nuvem');?></a>
    <? } ?>
</div>