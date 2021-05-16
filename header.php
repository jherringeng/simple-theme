<html>
  <head>
    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <?php
      wp_head();
     ?>
  </head>

  <body <?php body_class(); ?>>

    <div class="page-content">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <!-- Brand and toggle button -->
          <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>">
            <?php echo get_bloginfo( 'name' ); ?>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <!-- End -->
          <!-- Your website Links -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php
                   wp_nav_menu( array(
                   'menu'              => 'primary',
                   'theme_location'    => 'header-menu',
                   'depth'             => 2,
                   'container'         => 'div',
                   'container_class'   => '',
                   'container_id'      => '',
                   'menu_class'        => 'navbar-nav mr-auto',
                   'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                   'walker'            => new wp_bootstrap_navwalker())
                   );
              ?>
          </div>
          <!-- End -->
      </nav>

      
