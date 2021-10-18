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
      <meta name="robots" content="index, follow">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      
      <?php wp_head(); ?>

      <script>var siteURL = '<?php echo get_site_url(); ?>';</script>
    </head>
    <body <?php body_class('is-preload'); ?> style="display: none;">

      <div class="overProgress fadeX"></div>
    
        <header id="headerGeneral" class="g-header">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-3">
                <div class="brand">
                  <a href="<?php echo get_site_url(''); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/logos/icono_mobig-01.svg" alt="">
                    <h1 class="site-title">moBig</h1>
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
              </div>
              <div class="col-md-9">
                <div class="menuMain">
                  <nav class="menuDesk">
                    <ul id="md">
                      <li><a class="menuIemHover" href="<?php echo site_url(); ?>/recargas">Recargas</a></li>
                      <li><a class="menuIemHover" href="<?php echo site_url(); ?>/telefonia">Telefonía</a></li>
                      <li><a class="menuIemHover" href="<?php echo site_url(); ?>/mifi">Internet Mifi</a></li>
                      <li><a class="menuIemHover" href="<?php echo site_url(); ?>/equipos">Equipos</a></li>
                      <li><a class="menuIemHover" href="<?php echo site_url(); ?>/compatibilidad">Compatibilidad</a></li>
                      <li><a class="menuIemHover" href="<?php echo site_url(); ?>/portabilidad">Portabilidad</a></li>
                      <li class="btnMenu"><a href="<?php echo site_url(); ?>/contacto">Contactar</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </header><!-- end.Header -->

        <!-- MenuMobile -->
        <div id="mm" class="cont-menu-mobile" data-menu-expand="false">
          <div id="contListMenu" class="mnuContMob">

          </div>
        </div>
        <!-- end.MenuMobile -->

        <main>
          <div id="primary" class="content-area">
        