<div class="gap" style="background: <?=the_field('cor_de_fundo_clouds');?>">
  <div class="container">
    <div class="row">
        <?
            if( have_rows('itens_nuvem_solucoes') ):
            // Loop through rows.
                for($i=0; have_rows('itens_nuvem_solucoes'); $i++) : the_row();
                $logo_url_item[$i] = get_sub_field('logo');
                $name_item[$i] = get_sub_field('nome');
                $content_item[$i] = get_sub_field('conteudo');
        ?>
        <div class="col-12 <? 
        if(count(get_field('itens_nuvem_solucoes')) == 1){
          echo 'col-md-12';
        }elseif(count(get_field('itens_nuvem_solucoes')) == 2){
          echo 'col-md-6';
        }elseif(count(get_field('itens_nuvem_solucoes')) == 3){
          echo 'col-md-4';
        }elseif(count(get_field('itens_nuvem_solucoes')) == 4){
          echo 'col-md-3';
        }
          ?>  hide-mobile">
            <div class="d-flex justify-content-center align-items-center w-100 cloudTitle flex-column position-relative">
                <h2><?=$name_item[$i]?></h2>
                <div class="tag">
                    <img class="position-absolute" src="<?=$logo_url_item[$i]?>" alt="mask" />
                </div>
                <div class="subtitle">
                    <p><?=$content_item[$i]?></p>
                </div>
            </div>
        </div>
        

        <!-- Mobile section -->
        <div class="container col-12 col-md-3 customTitleMobile hide-desktop">
          <div class="row">
            <div class="col-6 position-relative d-flex flex-column align-items-center justify-content-center">
              <p class="w-100">
                <span>
                  <h2><?=$name_item[$i]?></h2>
                </span>
                <img class="tagMobile position-absolute" src="<?=$logo_url_item[$i]?>" width="40" alt="Azure" />
              </p>
            </div>
            <div class="col-6">
              <div class="w-100 h-100 d-flex justify-content-start align-items-center">
            
              <p><?=$content_item[$i]?></p>
                  
              </div>
            </div>
          </div>
        </div>
        <!-- //// Mobile section -->
        <?  endfor; endif; ?>
    </div>
  </div>
</div>