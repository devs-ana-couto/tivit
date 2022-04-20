<div class="container d-flex justify-content-center align-items-center flex-column w-100" style="background: <?=the_field('cor_de_fundo_extra');?>" >
    <div class="text text-center">
        <h2><? the_field('chamada_extra'); ?></h2>
        <div class="d-flex justify-content-center align-items-center flex-column mt-4 w-100">
            <p><? the_field('descricao_extra'); ?></p>
        </div>
        <div class="divCta">
            <a href="<?the_field('link_cta_extra');?>" class="buttonCta"><?the_field('cta_extra');?></a>
        </div>
    </div>
</div>