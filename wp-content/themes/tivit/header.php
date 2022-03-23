<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title>Tivit</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
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
            <p>Pessoas e Carreiras</p>
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