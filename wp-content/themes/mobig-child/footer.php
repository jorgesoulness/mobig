<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moBig_Child
 */

?>        
          </div>
        </main><!-- end.Main -->

        <section class="socialFooter">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-6">
                <ul class="socialFooter__list">
                  <li class="socialFooter__item">
                    <a class="socialFooter__link" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                  </li><!-- end.socialFooter__item -->
                  <li class="socialFooter__item">
                    <a class="socialFooter__link" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                  </li><!-- end.socialFooter__item -->
                  <li class="socialFooter__item">
                    <a class="socialFooter__link" href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                  </li><!-- end.socialFooter__item -->
                  <li class="socialFooter__item">
                    <a class="socialFooter__link" href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                  </li><!-- end.socialFooter__item -->
                </ul><!-- end.socialFooter__list -->
              </div><!-- end.col-* -->
              <div class="col-12 col-md-6">
                <div class="socialFooter__box">
                  <div class="socialFooter__circle">
                    <i class="fa fa-phone"></i>
                  </div><!-- end.socialFooter__circle -->
                  <p><a href="tel:+5280066244" target="_blank">800-26<span>moBig<small>(66244)</small></span></a></p>
                </div><!-- end.socialFooter__box -->
              </div><!-- end.col-* -->
            </div><!-- end.row -->
          </div><!-- end.container -->
        </section><!-- end.socialFooter -->
        <footer class="g-footer">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-3">
                <a href="/">
                  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/Iconos o moBig.svg" alt="logoMoBig">
                </a>
              </div>
              <div class="col-12 col-md-3">
                <div class="listFooter">
                  <h4 class="listFooter__title">Acerca de</h4>
              <?php
                wp_nav_menu( array(
                  'items_wrap'     => '<ul class="listFooter__list">%3$s</ul>',
                  'theme_location' => 'menu-acerca',
                  'container'       => '',
                  'container_class' => '',
                  'container_id'    => '',
                  'before'          => '',
                  'after'           => '',
                ));
              ?>
                </div>
              </div>
              <div class="col-12 col-md-3">
                <div class="listFooter">
                  <h4 class="listFooter__title">Legales</h4>
              <?php
                wp_nav_menu( array(
                  'items_wrap'     => '<ul class="listFooter__list">%3$s</ul>',
                  'theme_location' => 'menu-lelages',
                  'container'       => '',
                  'container_class' => '',
                  'container_id'    => '',
                  'before'          => '',
                  'after'           => '',
                ));
              ?>
                </div>
              </div>
              <div class="col-12 col-md-3">
                <div class="listFooter">
                  <h4 class="listFooter__title">Servicios</h4>
              <?php
                wp_nav_menu( array(
                  'items_wrap'     => '<ul class="listFooter__list">%3$s</ul>',
                  'theme_location' => 'menu-sevicios',
                  'container'       => '',
                  'container_class' => '',
                  'container_id'    => '',
                  'before'          => '',
                  'after'           => '',
                ));
              ?>
                </div>
              </div>
            </div><!-- end.row -->

            <div class="row">
              <hr class="dividerFoot">
            </div>
            <div class="row d-flex justify-content-between">
              <div class="col-4">
                <span>&copy; 2021 moBig. Todos los derechos reservados.</span>
              </div>
              <div class="col-4">
                <div class="row">
                  <div class="col-sm-4">
                    <span>Lorem ipsum</span>
                  </div>
                  <div class="col-sm-4">
                    <span>Lorem ipsum</span>
                  </div>
                  <div class="col-sm-4">
                    <span>Lorem ipsum</span>
                  </div>
                </div>
              </div>
            </div>


          </div><!-- end.container -->
        </footer><!-- end.Footer -->
        
        <?php wp_footer(); ?>

        <script>
          $('body').show();
          // $('.version').text(NProgress.version);
          NProgress.start();
          setTimeout(function () {
            NProgress.done();
            $('.fadeX').addClass('out');
            $('body').removeClass('is-preload');
          }, 1000);

          // $("#b-0").click(function() { NProgress.start(); });
          // $("#b-40").click(function() { NProgress.set(0.4); });
          // $("#b-inc").click(function() { NProgress.inc(); });
          // $("#b-100").click(function() { NProgress.done(); });
        </script>
    </body>
</html>