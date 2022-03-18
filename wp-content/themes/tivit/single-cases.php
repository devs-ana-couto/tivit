<?php
get_header();
require_once 'libs/Mobile_Detect.php';
$detect = new Mobile_Detect;

if(have_posts()) : while(have_posts()) : the_post();
?>

<!-- Section Banner -->
<section class="banner-cases-item">
    <div class="case-item-background" style="background: url('<? $detect->isMobile() ? the_field('banner_mobile') : the_field('banner_desktop'); ?>') no-repeat center center; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="case-item-content">
                        <h2>Cliente: <strong><? the_field('nome_do_cliente'); ?></strong></h2>
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="case-item-logos">
                        <div class="row">
                            <div class="col-4">
                                <img src="<? the_field('logo_01'); ?>" alt="">
                            </div>
                            <div class="col-7">
                                <img src="<? the_field('logo_02'); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Empresa -->
<section class="empresa-cases-item">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>Sobre o cliente</h2>
            </div>
            <div class="col-4">
                <img src="<? the_field('logo_da_empresa'); ?>" alt="">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <p class="paragrafo3"><? the_field('descricao'); ?></p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <a href="contato" class="btn-entre-em-contato">Entre em Contato</a>
            </div>
            <div class="col-12">
                <a href="<? the_field('download'); ?>" class="btn-download">Download <img src="<?php echo get_template_directory_uri(); ?>/assets/images/custom-post-types/cases/save_alt.svg" alt="..."></a>
            </div>
        </div>
    </div>
</section>

<!-- Section Destaques -->
<section class="destaques-item-cases">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Destaques do projeto</h2>
                <?php
                // Check rows exists.
                if( have_rows('adicione_seus_destaques') ):
                    // Loop through rows.
                    for($i=0; have_rows('adicione_seus_destaques'); $i++) : the_row();
                        $icon_url[$i] = get_sub_field('icone');
                        $description[$i] = get_sub_field('texto');
                    ?>
                <div class="box">
                    <div class="row">
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
</section>

<!-- Section Desafio -->
<section class="desafio-cases-item">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Desafio</h2>
            </div>
            <div class="box">
                <p class="paragrafo2"><?the_field('texto_desafio');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php 
                    if(have_rows('depoimento')) :
                        while(have_rows('depoimento')) : the_row();
                            $texto = get_sub_field('texto');
                            $autor = get_sub_field('autor');
                            $funcao = get_sub_field('funcao');
                        ?>

                        <div class="depoimento">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/custom-post-types/cases/aspas.svg" alt="...">
                            <p><?=$texto;?></p>
                            <h3><?=$autor;?></h3>
                            <h4><?=$funcao;?></h4>
                        </div>

                        <?
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Section Serviços Nuvem -->
<section class="nuvem-cases-item">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Serviços gerenciados na nuvem</h2>
                <?php
                // Check rows exists.
                if( have_rows('servico_nuvem') ):
                    // Loop through rows.
                    for($i=0; have_rows('servico_nuvem'); $i++) : the_row();
                        $icon_url[$i] = get_sub_field('icone');
                        $description[$i] = get_sub_field('texto');
                    ?>
                <div class="logo text-center">
                    <img src="<?=$icon_url[$i];?>" alt="..."></a>
                </div>
                <div class="box">
                    <p class="paragrafo3">
                        <?=$description[$i];?>
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

<?php
endwhile; endif;
get_footer();
?>