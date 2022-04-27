<!-- Section Serviços Nuvem -->
<section class="nuvem-cases-item" style="background: <?=the_field('cor_de_fundo_cloud_cases');?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Serviços gerenciados na nuvem</h2>
            </div>
        </div>
        <?php
        // Check rows exists.
        if( have_rows('servico_nuvem') ):
            // Loop through rows.
            for($i=0; have_rows('servico_nuvem'); $i++) : the_row();
                $icon_url[$i] = get_sub_field('icone');
                $description[$i] = get_sub_field('texto');
            ?>
        <div class="servico-item">
            <div class="row">
                <div class="col-12 col-md-2 offset-md-1">
                    <div class="logo text-center">
                        <img src="<?=$icon_url[$i];?>" alt="..."></a>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="box">
                        <p class="paragrafo3">
                            <?=$description[$i];?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php
            // End loop.
            endfor;
            endif;
        ?>
    </div>
</section>