        
          </div>
        </main><!-- end.Main -->

        <footer class="g-footer">

        </footer><!-- end.Footer -->
        
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/nprogress.js"></script>
        <!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/vendor/popper.js/dist/umd/popper.min.js"></script> -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/vendor/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/vendor/greensock/dist/TweenMax.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/jquery.validate.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/additional-methods.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/wow.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/slick.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/scripts/layoutScripts.js?ver=<?php echo rand(); ?>"></script>

        <script>
          $('body').show();
          $('.version').text(NProgress.version);
          NProgress.start();
          setTimeout(function() {
            NProgress.done(); $('.fadeX').addClass('out');
          }, 1000);

          <?php if($_GET['sec'] == ''): ?>
            // $(document).ready(function(){
            //   $("#videoHome").get(0).play();
            // });
          <?php endif; ?>

          // $("#b-0").click(function() { NProgress.start(); });
          // $("#b-40").click(function() { NProgress.set(0.4); });
          // $("#b-inc").click(function() { NProgress.inc(); });
          // $("#b-100").click(function() { NProgress.done(); });
        </script>
    </body>
</html>