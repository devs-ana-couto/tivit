<!-- Section Diferenciais e Beneficios -->
<section class="diferenciais-cases-item" style="background: <?=the_field('cor_de_fundo_nd_cases');?>">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-11 offset-md-1">
              <? if(get_field('chamada_nuvem_services') != ''){  ?>
                <h2><?the_field('chamada_nuvem_services')?></h2>
              <? } ?>
              <? if(get_field('descricao_db') != ''){  ?>
                <?the_field('descricao_db')?>
              <? } ?>
                
                <div class="row">
                <?php
                // Check rows exists.
                if( have_rows('diferenciais_e_beneficios') ):
                    // Loop through rows.
                    for($i=0; have_rows('diferenciais_e_beneficios'); $i++) : the_row();
                        $icon_url[$i] = get_sub_field('icone');
                        $description[$i] = get_sub_field('texto');
                    ?>

                  <div class="col-12 col-md-4">
                    <div class="box">
                      <p class="paragrafo3">
                          <?=$description[$i];?>
                      </p>
                    </div>
                  </div>
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