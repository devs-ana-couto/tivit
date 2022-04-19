<!-- Depoimentos -->
<div id="pecDepoimentos" class="lp-tbanks-depoimentos mx-custom soluc-dep">
  <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <? 
            if( have_rows('depoimentos_solucoes') ):
            // Loop through rows.
                for($i=0; have_rows('depoimentos_solucoes'); $i++) : the_row();
                $image_solucoes[$i] = get_sub_field('imagem');
                $name_solucoes[$i] = get_sub_field('nome');
                $role_solucoes[$i] = get_sub_field('cargo');
                $content_solucoes[$i] = get_sub_field('conteudo');
        ?>
        <div class="carousel-item heroslide <?=$i==0 ? 'active' : '';?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="lp-tbanks-depoimentos-content text-center ">
                            <div class="lp-tbanks-depoimentos-autor">
                                <img src="<?=$image_solucoes[$i]?>" alt="Tbanks Saiba Mais">
                                <h3><?=$name_solucoes[$i]?></h3>
                                <h4><?=$role_solucoes[$i]?></h4>
                                <p>
                                ”<?=$content_solucoes[$i]?>”
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? endfor; endif; ?>
    </div>
    <div class="mobileRelative <?=count(get_field('depoimentos_solucoes')) <= 1 ? 'hide-desktop hide-mobile' : ''; ?>">
      <button class="carousel-control-prev" type="button" data-bs-target="#recipeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#recipeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      <div class="d-flex flex-row justify-content-center counter mt-3">
        <div class="numactive"></div><div class="numseparation"></div><div class="numtotal"></div>
      </div>
    </div>
  </div>
</div>