<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title>Tivit</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<!-- Bootstrap -->
<!-- CSS -->

<?php
  // Path: header.php
  wp_head();
?>
</head>
<body <?php body_class(); ?>>
<header class="fixed-top header frontpage">
  <nav class="navbar navbar-expand-md navbar-light" role="navigation"> 
    <div class="container">
      <div class="row">
        <div class="col-2 col-md-5 header-menu">
          <div class="hide-mobile">
          <?php
            wp_nav_menu( array(
              'theme_location'  => 'header-menu',
              'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
              'container'       => 'div',
              'container_class' => 'collapse navbar-collapse',
              'container_id'    => 'bs-example-navbar-collapse-1',
              'menu_class'      => 'navbar-nav mr-auto',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
          ?>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'tivit' ); ?>">
            <span class="navbar-toggler-icon"></span>          
          </button>

        </div>  

        <div class="col-8 col-md-2 header-logo">
          <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" width="148px" height="21px" class="logo-brand" alt="Logo Tivit">
          </a>
        </div>

        <div class="col-4 col-md-5 header-options hide-mobile">

          <div class="header-people-and-careers">
            <p><a href="/staged/tivit/pessoas-e-carreiras">Pessoas e Carreiras</a></p>
          </div>

          <div class="header-contact">
            <p><a href="/staged/tivit/contato" class="btn btn-contact">Contato</a></p>
          </div>

          <div class="language">
            <a href="#"><p class="en">EN</p></a>
            <a href="#"><p class="es">ES</p></a>
          </div>

          <div class="search">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/nav/search-white.svg" alt="Search Tivit"></a>
          </div>

        </div>

        <div class="col-2 hide-desktop search">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/nav/search-white.svg" class="search-ico" alt="Search Tivit"></a>
        </div>
      </div>

      <div class="solution-menu position-absolute hide-mobile">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Por serviços e produtos</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Por indústria</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">POR DESAFIO</button>
          </li>
        </ul>
        <div class="container">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active pt-5" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="row">
                <div class="col-md-3">
                  <div class="textLeft">
                    <h2>Conheça as soluções da TIVIT por <strong>Serviços e Produtos.</strong></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed massa at eros elementum posuere ut et elit. Nulla consequat sapien vestibulum, hendrerit ante in, fermentum eros.</p>
                    <a class="buttonintro">ver todas as solucoes</a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="textMenu">
                    <h2>Cloud Solutions</h2>
                    <ul>
                      <li>
                        Public CLOUD
                      </li>
                      <li>
                        CLOUD MANAGED SERVICES
                      </li>
                      <li>
                        CLOUD PRofeSSIONAL SERvices
                      </li>
                      <li>
                        private cloud
                      </li>
                    </ul>
                  </div>
                  <hr class="separator w-100"/>
                  <div class="textMenu">
                    <h2>TECH PLATFORMS</h2>
                    <ul>
                      <li>
                        Infrastructure Management
                      </li>
                      <li>
                        Transactional Services
                      </li>
                      <li>
                        Workplace
                      </li>
                      <li>
                        Smart Systems & IoT
                      </li>
                      <li>
                        Enterprise Content Management
                      </li>
                      <li>
                        Business Integration
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="textMenu">
                    <h2>Cloud Solutions</h2>
                    <ul>
                      <li>
                        Public CLOUD
                      </li>
                      <li>
                        CLOUD MANAGED SERVICES
                      </li>
                      <li>
                        CLOUD PRofeSSIONAL SERvices
                      </li>
                      <li>
                        private cloud
                      </li>
                    </ul>
                  </div>
                  <hr class="separator w-100"/>
                </div>
                <div class="col-md-3">
                  <div class="textMenu">
                    <h2>Cloud Solutions</h2>
                    <ul>
                      <li>
                        Public CLOUD
                      </li>
                      <li>
                        CLOUD MANAGED SERVICES
                      </li>
                      <li>
                        CLOUD PRofeSSIONAL SERvices
                      </li>
                      <li>
                        private cloud
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="row">
                <div class="col-md-3">
                  <div class="textLeft pt-5">
                    <h2>Conheça as soluções da TIVIT por <strong>INDÚSTRIA</strong></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed massa at eros elementum posuere ut et elit. Nulla consequat sapien vestibulum, hendrerit ante in, fermentum eros.</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="textMenuCard mt-5">
                    <h2><a>serviços financeiros</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed massa at eros elementum posuere ut et elit.</p>
                  </div>
                  <div class="textMenuCard mt-4">
                    <h2><a>serviços financeiros</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed massa at eros elementum posuere ut et elit.</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="textMenuCard mt-5">
                    <h2><a>serviços financeiros</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed massa at eros elementum posuere ut et elit.</p>
                  </div>
                  <div class="textMenuCard mt-4">
                    <h2><a>serviços financeiros</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed massa at eros elementum posuere ut et elit.</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="textMenuCard mt-5">
                    <h2><a>serviços financeiros</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed massa at eros elementum posuere ut et elit.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <div class="row">
                <div class="col-md-3">
                  <div class="textLeft pt-5">
                    <h2>Conheça as soluções da TIVIT por <strong>INDÚSTRIA</strong></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed massa at eros elementum posuere ut et elit. Nulla consequat sapien vestibulum, hendrerit ante in, fermentum eros.</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="textMenuCard mt-5">
                    <h2><a>serviços financeiros</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed massa at eros elementum posuere ut et elit.</p>
                  </div>
                  <div class="textMenuCard mt-4">
                    <h2><a>serviços financeiros</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed massa at eros elementum posuere ut et elit.</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="textMenuCard mt-5">
                    <h2><a>serviços financeiros</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed massa at eros elementum posuere ut et elit.</p>
                  </div>
                  <div class="textMenuCard mt-4">
                    <h2><a>serviços financeiros</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed massa at eros elementum posuere ut et elit.</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="textMenuCard mt-5">
                    <h2><a>serviços financeiros</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed massa at eros elementum posuere ut et elit.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center hide-desktop">
      <?php
          wp_nav_menu( array(
            'theme_location'  => 'header-menu',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'bs-example-navbar-collapse-1',
            'menu_class'      => 'navbar-nav mr-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          ) );
        ?>
      </div>
    </div>
  </nav>
</header>