<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moBig_Child
 */

?>
<!DOCTYPE html>
<html lang="es-MX">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="profile" href="https://gmpg.org/xfn/11">
      <title> Somos el proveedor de soluciones en comunicaciones que necesitas. Te ofrecemos alternativas para todos los sectores con tecnología 4.5 G</title>
      <meta name="robots" content="index, follow">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <meta name="theme-color" content="#D45A6A">
      
      <?php wp_head(); ?>

      <script>var siteURL = '<?php echo get_site_url(); ?>';</script>
    </head>


    <!-- Modal -->
    <div class="modal fade" id="result1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="titleModal">¡FELICIDADES!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
          <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/chip.jpg" alt="chip" class="w-50">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <body <?php body_class('is-preload'); ?> style="display: none;">

      <div class="overProgress fadeX"></div>
    
        <header id="headerGeneral" class="g-header">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-6 col-md-2 col-lg-2">
                <div class="brand">
                  <a href="<?php echo get_site_url(''); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/logos/icono_mobig-01.svg" alt="">
                    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                  </a>
                <!-- <?php
                  //the_custom_logo();
                  //if (is_page(6)) :
                ?>
                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php //else : ?>
                  <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
                  //endif;
                ?> -->
                </div>
              </div><!-- end.col-* -->
              <div class="d-none d-lg-block col-lg-10">
                <div class="menuMain">
                  <nav class="menuDesk">
                    <?php
                      wp_nav_menu( array(
                        'items_wrap'     => '<ul id="md">%3$s</ul>',
                        'theme_location' => 'menu-main',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'before'          => '',
                        'after'           => '',
                      ));
                    ?>
                  </nav><!-- end.menuDesk -->
                </div><!--  end.menuMain -->
              </div><!-- end.col-* -->
              <div class="d-block d-lg-none col-6 col-md-10">
                <div class="headTools">
                  <button type="button" id="openMenuMobile" class="menu-mobile-btn" onClick="menuMobile()" data-menu-expand="false">
                    <span></span>
                  </button>
                </div><!-- end.headTools -->
              </div><!-- end.col-* -->
            </div><!-- end.row -->
          </div><!-- end.container -->
        </header><!-- end.Header -->

        <!-- MenuMobile -->
        <div id="mm" class="cont-menu-mobile" data-menu-expand="false">
          <div id="contListMenu" class="mnuContMob">

          </div>
        </div>
        <!-- end.MenuMobile -->

        <main>
          <div id="primary" class="content-area">
        