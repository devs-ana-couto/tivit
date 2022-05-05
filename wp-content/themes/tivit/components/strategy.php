<div id="strategy" style="background: <?=the_field('cor_de_fundo_pl_solucoes');?>">
  <div class="container">
    <? if(get_field('chamada_pl_solucoes') || get_field('descricao_pl_solucoes') || get_field('descricao_pl_solucoes_2') != ''){ ?>
      <div class="intro">
        <? the_field('chamada_pl_solucoes') != '' ? "<h2>".the_field('chamada_pl_solucoes')."</h2>" : '' ?>
        <? the_field('descricao_pl_solucoes') != '' ? "<p>".the_field('descricao_pl_solucoes')."</p>" : '' ?>
        <? the_field('descricao_pl_solucoes_2') != '' ? "<p>".the_field('descricao_pl_solucoes_2')."</p>" : '' ?>
      </div>
    <? } ?>
    <div class="row cards hide-mobile">
      <div class="col-12 col-md-4">
        <div class="intro text-center">
          <h3><?the_field('label_item_1');?></h3>
        </div>
        <? 
            if( have_rows('item_1_pl_solucoes') ):
            // Loop through rows.
                for($i=0; have_rows('item_1_pl_solucoes'); $i++) : the_row();
                $content_item[$i] = get_sub_field('conteudo');
        ?>
        <div class="card w-100">
          <p><?=$content_item[$i]?></p>
        </div>
        <? endfor; endif; ?>
      </div>
      <div class="col-12 col-md-4">
        <div class="intro text-center">
        <h3><?the_field('label_item_2');?></h3>
        </div>
        <? 
            if( have_rows('item_2_pl_solucoes') ):
            // Loop through rows.
                for($i=0; have_rows('item_2_pl_solucoes'); $i++) : the_row();
                $content_item[$i] = get_sub_field('conteudo');
        ?>
        <div class="card w-100">
          <p><?=$content_item[$i]?></p>
        </div>
        <? endfor; endif; ?>
      </div>
      <div class="col-12 col-md-4">
        <div class="intro text-center">
          <h3><?the_field('label_item_3');?></h3>
        </div>
        <? 
            if( have_rows('item_3_pl_solucoes') ):
            // Loop through rows.
                for($i=0; have_rows('item_3_pl_solucoes'); $i++) : the_row();
                $content_item[$i] = get_sub_field('conteudo');
        ?>
        <div class="card w-100">
          <p><?=$content_item[$i]?></p>
        </div>
        <? endfor; endif; ?>        
      </div>
    </div>

    <!-- Mobile accordion -->
    <div class="accordion hide-desktop" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <h3><?the_field('label_item_1');?></h3>
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <? 
                if( have_rows('item_1_pl_solucoes') ):
                // Loop through rows.
                    for($i=0; have_rows('item_1_pl_solucoes'); $i++) : the_row();
                    $content[$i] = get_sub_field('conteudo');
            ?>
            <div class="card w-100">
            <p><?=$content[$i]?></p>
            </div>
            <? endfor; endif; ?>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <h3><?the_field('label_item_2');?></h3>
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">

            <? 
                if( have_rows('item_2_pl_solucoes') ):
                // Loop through rows.
                    for($i=0; have_rows('item_2_pl_solucoes'); $i++) : the_row();
                    $content[$i] = get_sub_field('conteudo');
            ?>
            <div class="card w-100">
            <p><?=$content[$i]?></p>
            </div>
            <? endfor; endif; ?>


          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <h3><?the_field('label_item_3');?></h3>
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <? 
                if( have_rows('item_3_pl_solucoes') ):
                // Loop through rows.
                    for($i=0; have_rows('item_3_pl_solucoes'); $i++) : the_row();
                    $content[$i] = get_sub_field('conteudo');
            ?>
            <div class="card w-100">
            <p><?=$content[$i]?></p>
            </div>
            <? endfor; endif; ?>
          </div>
        </div>
      </div>
    </div>
    <!-- //mobile accordion -->
  </div>
</div>
