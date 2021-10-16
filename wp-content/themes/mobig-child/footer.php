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

              </div><!-- end.col-* -->
              <div class="col-12 col-md-6">

              </div><!-- end.col-* -->
            </div><!-- end.row -->
          </div><!-- end.container -->
        </section><!-- end.socialFooter -->
        <footer class="g-footer">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-3"></div>
              <div class="col-12 col-md-3"></div>
              <div class="col-12 col-md-3"></div>
              <div class="col-12 col-md-3"></div>
            </div><!-- end.row -->
          </div><!-- end.container -->
        </footer><!-- end.Footer -->
        
        <?php wp_footer(); ?>

        <script>
          $('body').show();
          $('.version').text(NProgress.version);
          NProgress.start();
          setTimeout(function() {
            NProgress.done(); $('.fadeX').addClass('out');
          }, 1000);

          // $("#b-0").click(function() { NProgress.start(); });
          // $("#b-40").click(function() { NProgress.set(0.4); });
          // $("#b-inc").click(function() { NProgress.inc(); });
          // $("#b-100").click(function() { NProgress.done(); });
        </script>
    </body>
</html>