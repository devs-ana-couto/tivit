<!-- Section Conteúdo -->
<section class="conteudo-cases-item">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
            <?php
                // Check rows exists.   
                if( have_rows('conteudo') ):
                    // Loop through rows.
                    for($i=0; have_rows('conteudo'); $i++) : the_row();
                        $text[$i] = get_sub_field('texto');
                ?>
                <div class="box">
                    <?=$text[$i];?>      
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