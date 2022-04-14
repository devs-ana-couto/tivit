<!-- Section Destaques -->
<section class="destaques-cases-item">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <h2>Destaques do projeto</h2>
                <div class="row">   
                    <?php
                    // Check rows exists.
                    if( have_rows('adicione_seus_destaques') ):
                        // Loop through rows.
                        for($i=0; have_rows('adicione_seus_destaques'); $i++) : the_row();
                            $icon_url[$i] = get_sub_field('icone');
                            $description[$i] = get_sub_field('texto');
                        ?>


                        <div class="col-12 col-md-4">
                            <div class="box">
                                <div class="col-3 text-center">
                                    <img src="<?=$icon_url[$i];?>" alt="">
                                </div>
                                <div class="col-9">
                                    <h3><?=$description[$i];?></h3>
                                </div>
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