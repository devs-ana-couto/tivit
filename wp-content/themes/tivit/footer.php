<footer class="footer text-center">
  <div class="bg-white">
    <div class="container">
      <div class="row">

        <div class="col-5 hide-mobile footer-menu">
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'nav',
                'container' => 'ul',
              )
            );
          ?>
        </div>  

        <div class="col-12 col-md-2 footer-logo">
          <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-red.png" width="148px" height="21px" alt="Logo Tivit"></a>
        </div>

        <div class="col-md-5 footer-options hide-mobile">

          <div class="footer-people-and-careers">
            <p>Pessoas e Carreiras</p>
          </div>

          <div class="footer-contact">
            <p><a href="#" class="btn btn-contact">Contato</a></p>
          </div>

          <div class="language">
            EN/ES
          </div>

        </div>

        <div class="col-12 col-md-3 footer-phone">
          <p>
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/phone.svg" alt="Phone Tivit"> <span>+55 (11)</span> 3757-2222
            </a>
          </p>
        </div>

        <div class="col-12 col-md-6 footer-address">
          <p>Av. Nações Unidas 8.501, 9º andar / CEP 05423-110 <span class="hide-mobile">/</span> Pinheiros / São Paulo, Brasil</p>
        </div>

        <div class="col-12 col-md-3 footer-socials hide-mobile">
          <p>

            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/linkedin-red.svg" alt="Linkedin Tivit">
            </a>

            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/instagram-red.svg" alt="Instagram Tivit">
            </a>

            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/twitter-red.svg" alt="Twitter Tivit">
            </a>

            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/youtube-red.svg" alt="Youtube Tivit">
            </a>

            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/facebook-red.svg" alt="Facebook Tivit">
            </a>

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

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/dev-api.svg" width="95px" height="60px" alt="DevApi Tivit">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/lambda.svg" width="127px" height="40px" alt="Lambda Tivit">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/privally.svg" width="121.58px" height="29px" alt="Privally Tivit">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/stone-age.svg" width="135px" height="90px" alt="StoneAge Tivit">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/tdx.svg" width="68.28px" height="30px" alt="Tdx Tivit">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/tivit-labs.svg" width="188.4" height="18px" alt="Tivit Labs">
        
        </div>
          
      </div>
    </div>
  </div>
  <div class="bg-red">
    <div class="container">
      <div class="row">
        <div class="col-7 col-md-3 footer-copyright">

          <p>
            <span>TIVIT®</span> Todos os direitos reservados
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
            Criado por <span>ANA COUTO</span>
          </p>
        </div>

      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>
