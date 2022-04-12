<!-- Section Depoimento -->
<section class="depoimento-cases-item">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <?php
                // Check rows exists.   
                if( have_rows('depoimento_2') ):
                    // Loop through rows.
                    for($i=0; have_rows('depoimento_2'); $i++) : the_row();
                        $photo_url[$i] = get_sub_field('imagem');
                        $text[$i] = get_sub_field('texto');
                        $d_name[$i] = get_sub_field('nome');
                        $role[$i] = get_sub_field('cargo');
                ?>
                <div class="box text-center">
                    <img src="<?=$photo_url[$i];?>" alt="">
                    <h4><?=$d_name[$i];?></h4>
                    <h5><?=$role[$i];?></h5>
                    <p class="paragrafo3">
                        <span class="red">”</span><?=$text[$i];?><span class="red">”</span>
                    </p>
                </div>
            <?php
                // End loop.
                endfor;
                endif;
            ?>
            </div>
        </div>
    </div>
</section>