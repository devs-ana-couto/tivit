<?php /* Template Name: Contato */ ?>
<?php get_header(); ?>

<?php page_bulder_init(get_the_ID(),$post,true);?>


    <!-- Intro -->
    <div class="contato-intro">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- <p class="hide-desktop">Entre em contato com a <span>TIVIT</span> para solicitar um orçamento ou tirar dúvidas sobre nossas soluções</p> -->
                    <p>Compartilhe seu desafio e receba uma solução personalizada.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulário de Contato -->
    <div class="contato-formulario">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?= do_shortcode('[contact-form-7 id="112" title="Página Contato"]'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Pessoas e Carreiras -->
    <div class="home-pessoas-e-carreiras">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="home-pessoas-e-carreiras-title">
                        <h2>TRABALHE CONOSCO</h2>
                        <p>Para envio de CV, veja nossa área de carreiras</p>
                    </div>
                    <div class="botao">
                        <a href="#" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contato-canais">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>ou entre em contato pelos nossos canais:</h2>
                </div>
                <div class="col-12 col-md-6">
                    <div class="borda">
                        <div class="contato-canais-item">
                            <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/phone.svg"
                                    alt="Telefone"><? the_field('telefone', 'option'); ?></p>
                            <!-- <p class="hide-desktop"><strong>Ligar</strong> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato/arrow_forward.svg" alt="Ligar"></p> -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="borda socials">

                        <? if (get_field('instagram', 'option') != "") { ?>
                            <a href="<? the_field('instagram', 'option'); ?>" target="_blank"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/instagram-white.svg"
                                        alt="Instagram"></a>
                        <? } ?>

                        <? if (get_field('linkedin', 'option') != "") { ?>
                            <a href="<? the_field('linkedin', 'option'); ?>" target="_blank"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/linkedin-white.svg"
                                        alt="Linkedin"></a>
                        <? } ?>

                        <? if (get_field('facebook', 'option') != "") { ?>
                            <a href="<? the_field('facebook', 'option'); ?>" target="_blank"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/facebook-white.svg"
                                        alt="Facebook"></a>
                        <? } ?>

                        <? if (get_field('twitter', 'option') != "") { ?>
                            <a href="<? the_field('twitter', 'option'); ?>" target="_blank"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/twitter-white.svg"
                                        alt="Twitter"></a>
                        <? } ?>

                        <? if (get_field('youtube', 'option') != "") { ?>
                            <a href="<? the_field('youtube', 'option'); ?>" target="_blank"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/youtube-white.svg"
                                        alt="Youtube"></a>
                        <? } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>