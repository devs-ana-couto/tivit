<!-- Section Links Externos -->
<section class="links-externos-cases-item" style="background: <?=the_field('cor_de_fundo_links_cases');?>">
    <div class="container">
        <?php
            if($detect->isMobile()){
                echo '<div class="row mx-auto my-auto justify-content-center">
                        <div id="paymentMobileCarousel" class="carousel slide p-0" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">';

            }else{
                echo '<div class="row">';
            }

            // Check rows exists.   
            if( have_rows('links_externos') ):
                // Loop through rows.
                for($i=0; have_rows('links_externos'); $i++) : the_row();
                    $link_category[$i] = get_sub_field('categoria');
                    $link_title[$i] = get_sub_field('titulo');
                    $link_description[$i] = get_sub_field('descricao');
                    $link_url[$i] = get_sub_field('url_do_link');
            ?>
        
            <!-- Desktop -->
            <div class="col-12 col-md-4 hide-mobile">
                <div class="box">
                    <div class="category">
                        <span><?=$link_category[$i]?></span>
                    </div>
                    <div class="title">
                        <h3><?=$link_title[$i]?></h3>
                    </div>
                    <div class="description">
                        <p><?=$link_description[$i]?></p>
                    </div>
                    <div class="button">
                        <a href="<?=$link_url[$i]?>" target="_blank" class="btn btn-primary">Leia mais</a>
                    </div>
                </div>
            </div>
            
            <!-- Mobile slide -->
            <div class="carousel-item col-md-4 hide-desktop heroslide4 payment <?=$i == 0 ? 'active' : '';?>">
                <div class="col-11 m-0 p-0">
                    <div class="box">
                        <div class="category">
                            <span><?=$link_category[$i]?></span>
                        </div>
                        <div class="title">
                            <h3><?=$link_title[$i]?></h3>
                        </div>
                        <div class="description">
                            <p><?=$link_description[$i]?></p>
                        </div>
                        <div class="button">
                            <a href="<?=$link_url[$i]?>" target="_blank" class="btn btn-primary">Leia mais</a>
                        </div>
                    </div>
                </div>
            </div>
                    
            <?php
                // End loop.
                endfor;
                endif;
            
            if($detect->isMobile()){
                echo '</div>
                    </div>
                </div>';
            }else{
                echo '</div>';
            }
        ?>            
    </div>
</section>