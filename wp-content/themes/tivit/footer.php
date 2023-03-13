<footer class="footer text-center" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
  <div class="bg-white">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between">
            <div class="col d-none d-lg-flex footer-menu">
                <nav class="navbar navbar-expand-lg bg-transparent" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'depth' => 1, // 1 = no dropdowns, 2 = with dropdowns.
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => 'navbar-nav',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker(),
                ));

                ?>
                </nav>
            </div>

            <div class="col-auto footer-logo" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-red.png" width="148px" height="21px" alt="Logo Tivit"></a>
            </div>
            <div class="col footer-menu d-none d-lg-flex justify-content-end">
                <nav class="navbar navbar-expand-lg bg-transparent" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu-02',
                    'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => 'navbar-nav',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker(),
                ));
                ?>
                </nav>
            </div>
        </div>

      <div class="row">
        <div class="col-12 col-md-3 footer-phone">
          <p>
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/phone.svg" alt="Phone Tivit"> <? the_field('telefone', 'option'); ?>
            </a>
          </p>
        </div>

        <div class="col-12 col-md-6 footer-address">
          <p>Av. Nações Unidas 8.501, 9º andar / CEP 05423-110 <span class="hide-mobile">/</span> Pinheiros / São Paulo, Brasil</p>
        </div>

        <div class="col-12 col-md-3 footer-socials hide-mobile">
          <p>

          <? if(get_field('instagram', 'option') != ""){?>
            <a href="<? the_field('instagram', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/instagram-red.svg" alt="Instagram"></a>
          <? } ?>

          <? if(get_field('linkedin', 'option') != ""){?>
            <a href="<? the_field('linkedin', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/linkedin-red.svg" alt="Linkedin"></a>
          <? } ?>

          <? if(get_field('facebook', 'option') != ""){?>
            <a href="<? the_field('facebook', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/facebook-red.svg" alt="Facebook"></a>
          <? } ?>

          <? if(get_field('twitter', 'option') != ""){?>
            <a href="<? the_field('twitter', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/twitter-red.svg" alt="Twitter"></a>
          <? } ?>

          <? if(get_field('youtube', 'option') != ""){?>
            <a href="<? the_field('youtube', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/youtube-red.svg" alt="Youtube"></a>
          <? } ?>

          </p>

        </div>

        <div class="col-12 hr">
          <hr>
        </div>


        <div class="col-12 hide-desktop footer-menu-copyright">
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'footer-menu-copyright',
                'menu_class' => 'nav',
                'container' => 'ul',
              )
            );
          ?>
        </div>

        <div class="footer-partners hide-mobile">

          <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/dev-api.svg" width="95px" height="60px" alt="DevApi Tivit">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/logo_lambda3_rodape.svg" alt="Lambda Tivit">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/privally.svg" width="121.58px" height="29px" alt="Privally Tivit">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/stone-age.svg" width="135px" height="90px" alt="StoneAge Tivit">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/tdx.svg" width="68.28px" height="30px" alt="Tdx Tivit">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/tivit-labs.svg" width="188.4" height="18px" alt="Tivit Labs">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/logo-sensr.it-tivit-company.png" height="30px"  alt="Sensr.it"> -->
<?php
    $args['post_type']   = 'rodape';
    $args['orderby']     = 'menu_order';
    $args['order']       = 'ASC';
    $args['post_status'] = 'publish';
    $args['nopaging']    = true;
    $the_query = new WP_Query( $args );
    // var_dump($the_query);
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $identif    = $the_query->post->ID;
        $titulo     = get_the_title();
        $thumbnail  = ( has_post_thumbnail()) ? wp_get_attachment_url(get_post_thumbnail_id()) : '';
        $thumb_alt  = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
        echo '<img src="'.$thumbnail.'" alt="'.$thumb_alt.'" style="width:auto;height:auto;max-width:188px;max-height:90px;">';

    }
    wp_reset_query();
?>

        </div>

      </div>
    </div>
  </div>
  <div class="bg-red">
    <div class="container">
      <div class="row">
        <div class="col-7 col-md-3 footer-copyright">

          <p>
            <span>TIVIT®</span> <?php pll_e('Todos os direitos reservados','tivit'); ?>
          </p>

        </div>

        <div class="col-5 col-md-6 hide-mobile footer-menu-copyright">
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'footer-menu-copyright',
                'menu_class' => 'nav',
                'container' => 'ul',
              )
            );
          ?>
        </div>

        <div class="col-5 col-md-3 footer-ac">
          <p>
            <?php pll_e('Criado por <span>ANA COUTO</span>','tivit'); ?>
          </p>
        </div>

      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
</body>
</html>
