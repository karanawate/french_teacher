<!DOCTYPE html>
<html lang="en">
    <?php echo view('header'); ?>
   <!-- ==== body starts ==== -->
   <body id="top">
        <!-- Preloader  -->
        <div id="preloader">
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                <div class="preloader-logo">
                    <!-- spinner -->
                    <div class="spinner">
                        <div class="dot1"></div>
                        <div class="dot2"></div>
                    </div>
                </div>
                <!--/preloader logo -->
                </div>
                <!--/row -->
            </div>
            <!--/container -->
        </div>
        <!--/Preloader ends -->
        <?php echo view('navbar'); ?>
        <!-- /nav -->
        <!-- page wrapper starts -->
        <div id="page-wrapper">
            <!-- ==== Page Content ==== -->
            <div class="page">
                <div class="container" id="not-found">
                <div class="row text-lg-left text-center">
                    <!-- content -->
                    <div class="col-lg-5 offset-lg-2" data-aos="zoom-in">
                        <!-- image -->
                        <img src="<?php echo base_url(); ?>/assets/img/404.png" class="img-fluid" alt="">
                    </div>
                    <!-- /col-lg -->
                    <div class="col-lg-5" data-aos="fade-down">
                        <h1>404</h1>
                        <span>Oops, Nothing found..</span>
                        <div class="text-lg-left">
                            <!-- button -->
                            <a href="index.html" class="btn btn-secondary btn-sm mt-4">Back to home page</a>
                        </div>
                    </div>
                    <!-- /col-lg -->
                </div>
                <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /page -->
        </div>
        <!--/ page-wrapper -->
        <svg version="1.1" id="footer-divider"  class="secondary" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 1440 126" preserveAspectRatio="none slice" xml:space="preserve">
            <path class="st0" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"/>
        </svg>
        <!-- ==== footer ==== -->
        <?php echo view('footer'); ?>
        <!--/ footer-->
        <!-- Bootstrap core & Jquery -->
        <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Custom Js -->
        <script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/plugins.js"></script>
        <!-- Prefix free -->
        <script src="<?php echo base_url(); ?>/assets/js/prefixfree.min.js"></script>
   </body>
</html>