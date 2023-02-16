<?php
/*
 * Page Builder Componentes
 * AC / Banner Home
*/

function pb_ac_hero_home($obj_id,$obj = null, $block, $echo = true){
	global $detect;
    if (!$detect->isMobile()) {
        $carouselFade = 'carousel-fade';
    }
	?>
    <section class="home-hero position-relative" id="header-home-scroll">
        <div id="hero" class="carousel slide <?php echo $carouselFade; ?> position-relative" data-bs-ride="carousel">
            <div class="carousel-inner text-center">
                <?php
                // Check rows exists.
                if (have_rows('slider_hero')):
                    // Loop through rows.
                    for ($i = 0; have_rows('slider_hero'); $i++) : the_row();
                        $banner_desktop_url[$i] = get_sub_field('banner_desktop');
                        $banner_mobile_url[$i] = get_sub_field('banner_mobile');
                        $chamada[$i] = get_sub_field('chamada');
                        $cta[$i] = get_sub_field("slider-cta");
                        $cta_text[$i] = get_sub_field("slider-cta-text");
                        if ($detect->isMobile()) {
                            $imgStyle = "background-image: url('$banner_desktop_url[$i]')";
                        } else {
                            $imgStyle = '';
                        }
                        ?>
                        <div class="carousel-item heroslide <?= $i == 0 ? 'active' : '' ?>">
                            <div class="content position-relative mt-0" style="<?php echo $imgStyle; ?>">
                                <img class="maskImg w-100 hide-mobile" src="<?= $banner_desktop_url[$i] ?>"
                                     alt="Imagem do Slider"/>
                                <img class="mask d-none d-lg-block mask-desk red active"
                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mascara_slider_v.svg"
                                     alt="mask"/>
                                <img class="mask d-none d-lg-block mask-desk white"
                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mascara_slider_v_white.svg"
                                     alt="mask"/>
                                <div class="card-img-overlay mask-mobile d-lg-none"></div>
                                <div class="title h-100 d-flex justify-content-center flex-wrap align-items-center position-absolute">
                                    <div class="col-12">
                                    <?= $chamada[$i] ?>
                                    <?php
                                    if ($cta[$i] !== "") {
                                        ?>
                                        <div class="botao">

                                            <a class="btn btn-primary"
                                               href="<?php echo $cta[$i]; ?>"><?php echo $cta_text[$i] ?></a>
                                        </div>
                                    <?php } ?>
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
            <div class="col-auto controladores position-absolute">
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <div class="col-auto d-none d- d-lg-flex align-items-center px-5 px-lg-3">
                        <button class="carousel-control-prev" type="button" data-bs-target="#hero" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                    </div>
                    <div class="col-auto p-0">
                        <div class="carousel-indicators position-relative m-0">
                            <?php
                            // Check rows exists.
                            if (have_rows('slider_hero')):
                                // Loop through rows.
                                for ($i = 0; have_rows('slider_hero'); $i++) : the_row();
                                    $banner_desktop_url[$i] = get_sub_field('banner_desktop');
                                    $banner_mobile_url[$i] = get_sub_field('banner_mobile');
                                    $chamada[$i] = get_sub_field('chamada');
                                    $cta[$i] = get_sub_field("slider-cta");
                                    $active = "";
                                    $current = "";
                                    if ($i === 0) {
                                        $active = ' class="active" ';
                                        $current = ' aria-current="true" ';
                                    }
                                    ?>
                                    <button type="button"
                                            data-bs-target="#hero"
                                            data-bs-slide-to="<?php echo $i; ?>"
                                        <?php echo $active; ?>
                                        <?php echo $current; ?>
                                            aria-label="Slide <?php echo $i; ?>"></button>
                                <?php
                                    // End loop.
                                endfor;
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-flex align-items-center px-5 px-lg-3">
                        <button class="carousel-control-next" type="button" data-bs-target="#hero" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="col-12">
                <div class="redes hide-mobile">
                    <?php if (get_field('instagram', 'option') != "") { ?>
                        <a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/instagram-white.svg"
                                    alt="Instagram"></a>
                    <?php } ?>

                    <?php if (get_field('linkedin', 'option') != "") { ?>
                        <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/linkedin-white.svg"
                                    alt="Linkedin"></a>
                    <?php } ?>

                    <?php if (get_field('facebook', 'option') != "") { ?>
                        <a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/facebook-white.svg"
                                    alt="Facebook"></a>
                    <?php } ?>

                    <?php if (get_field('twitter', 'option') != "") { ?>
                        <a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/twitter-white.svg"
                                    alt="Twitter"></a>
                    <?php } ?>

                    <?php if (get_field('youtube', 'option') != "") { ?>
                        <a href="<?php the_field('youtube', 'option'); ?>" target="_blank"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/youtube-white.svg"
                                    alt="Youtube"></a>
                    <?php } ?>
                </div>
            </div>

        </div>
        <div class="col-12 d-none position-relative box-arrow d-lg-flex justify-content-center">
            <div class="arrow slider-arrow-back text-center position-absolute">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icons/seta-red.svg"
                     alt="Saiba Mais">
            </div>
        </div>
    </section>
<?php
	return;
}