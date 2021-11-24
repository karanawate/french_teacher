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
            <!-- Jumbotron -->
            <div class="jumbotron jumbotron-fluid">
                <div class="container" >
                <!-- jumbo-heading -->
                <div class="jumbo-heading" data-aos="fade-down">
                    <h1>Our Team</h1>
                    <!-- Breadcrumbs -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="team.html">Team</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Team Single page</li>
                        </ol>
                    </nav>
                    <!-- /breadcrumb -->
                </div>
                <!-- /jumbo-heading -->
                </div>
                <!-- /container -->
            </div>
            <!-- /jumbotron -->
            <!-- ==== Page Content ==== -->
            <div class="page container">
                <div class="row">
                <!-- page with sidebar starts -->
                <div class="col-lg-9 page-with-sidebar">
                    <div class="col-lg-12">
                        <div class="row">
                            <!-- Image -->
                            <div class="col-lg-5 text-center">
                            <img src="<?php echo base_url(); ?>/assets/img/team/team3.jpg" class="img-fluid rounded" alt="">
                            <!-- ornament starts-->
                            <div class="ornament-stars" data-aos="zoom-out"></div>
                            </div>
                            <!-- /col-lg -->
                            <div class="col-lg-7">
                            <h3 class="res-margin mt-5 mb-1">Lauren Doe</h3>
                            <h6>Teacher</h6>
                            <p class="h7">Lauren have been a teacher at our daycare since 2009, she loves her job.</p>
                            <ul class="social-media">
                                <!--social icons -->
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="mailto:email@email.com"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                            </div>
                            <!-- /col-lg -->
                        </div>
                        <!-- /row -->
                        <h4 class="mt-5">About me</h4>
                        <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                        <p>Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall Maecenas at arcu risus scelerisque laoree.
                        <p>Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall Maecenas at arcu risus scelerisque laoree.
                            Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.
                        </p>
                        <h5 class="mt-3">My Qualifications</h5>
                        <!-- custom list -->
                        <ul class="custom pl-0">
                            <li>Orci eget, viverra elit liquam erat volut pat phas ellus ac</li>
                            <li>Ipuset phas ellus ac sodales Lorem ipsum dolor Phas ell</li>
                            <li>Aliquam erat volut pat phas ellu</li>
                            <li>Orci eget, viverra elit liquam erat volut pat phas ellus ac</li>
                            <li>Ipuset phas ellus ac sodales Lorem ipsum dolor Phas ell</li>
                        </ul>
                        <!-- /ul -->
                        <!-- custom link -->
                        <a class="custom-link float-left mt-5" href="#" onclick="history.back();">Go back</a>
                    </div>
                    <!-- /col-lg-12-->
                </div>
                <!-- /page-with-sidebar -->
                <!-- ==== Sidebar ==== -->
                <div id="sidebar" class="h-50 col-lg-3 sticky-top">
                    <!--widget-area -->
                    <div class="widget-area notepad">
                        <h5 class="sidebar-header">Meet our Team</h5>
                        <!-- widget -->		 
                        <div class="widget2">
                            <div class="card">
                            <div class="card-img">
                                <!-- image  -->	
                                <a href="team.html">
                                <img class="rounded card-img-top" src="<?php echo base_url(); ?>/assets/img/about/aboutsidebar.jpg" alt="" >
                                </a>
                            </div>
                            <div class="card-body">
                                <!--  info -->	
                                <a href="team.html" class="text-center">
                                    <p><strong>Over 30 Certified professionals</strong></p>
                                </a>
                                <!-- button -->	
                                <a href="team.html" class="btn btn-secondary btn-block btn-sm">See More</a>
                            </div>
                            <!--/card-body -->	
                            </div>
                            <!-- /card -->	
                        </div>
                        <!--/widget2 -->
                    </div>
                    <!--/widget-area -->
                    <div class="widget-area notepad">
                        <h5 class="sidebar-header">Our Mission</h5>
                        <p>Aliquam erat volutpat In id fermentum augue Mae cenas at arcu risus. Donec com modo sodales ex.</p>
                    </div>
                    <!--/widget-area -->
                    <div class="widget-area notepad">
                        <h5 class="sidebar-header">Follow us</h5>
                        <div class="contact-icon-info">
                            <ul class="social-media text-center">
                            <!--social icons -->
                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <!--/contact-icon-info -->
                    </div>
                    <!--/widget-area -->
                </div>
                <!--/sidebar -->   
                </div>
                <!-- /row -->
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