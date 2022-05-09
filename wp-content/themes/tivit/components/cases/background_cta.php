<section class="background_cta" style="background: url('<? $detect->isMobile() ? the_field('imagem_de_fundo_mobile_ctabg') : the_field('imagem_de_fundo_desktop_ctabg'); ?>') no-repeat center center; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="chamada">
                    <h2><?=the_field('chamada_ctabg');?></h2>
                </div>
                <div class="desc">
                    <?=the_field('descricao_ctabg');?>
                </div>
                <?
                    if(get_field('cta_ctabg') != ''){ 
                        echo '<div class="botao">';
                        echo '<a href="'.get_field('link_cta_ctabg').'" class="btn btn-primary">'.get_field('cta_ctabg').'</a>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
    </div>
</section>