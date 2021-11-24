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
                    <h1>Services</h1>
                    <!-- Breadcrumbs -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="services.html">Services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Services Single</li>
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
            <div class="page">
                <div class="container">
                <div class="row">
                    <!-- page with sidebar starts -->
                    <div class="col-lg-9 page-with-sidebar">
                        <div class="col-md-12">
                            <h2>Daycare</h2>
                            <!-- Image -->
                            <p class="h7">Maecenas at arcu risus scelerisque laoree.</p>
                            <p>Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall Maecenas at arcu risus scelerisque laoree.
                            Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.
                            </p>
                            <!-- row -->
                            <div class="row">
                            <div class="col-md-5">
                                <div class="col-md-12 carousel-1item owl-carousel owl-theme "  data-aos="fade-in" >
                                    <img src="<?php echo base_url(); ?>/assets/img/services/service-single1.jpg" class="img-fluid rounded-circle" alt="">
                                    <img src="<?php echo base_url(); ?>/assets/img/services/service-single2.jpg" class="img-fluid rounded-circle" alt="">
                                    <img src="<?php echo base_url(); ?>/assets/img/services/service-single3.jpg" class="img-fluid rounded-circle" alt="">
                                </div>
                                <!-- /col-md- -->
                            </div>
                            <!-- /col-md -->
                            <div class="col-md-7">
                                <h4>Fun Activities</h4>
                                <!-- Image -->
                                <p>Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall Maecenas at arcu risus scelerisque laoree.
                                    Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.
                                </p>
                                <!-- Button -->	 
                                <a href="contact.html" class="btn btn-secondary mt-3">Contact us</a>
                            </div>
                            <!-- /col-md -->
                            <div class="col-md-12 mt-5">
                                <h4>Frequently asked questions</h4>
                                <div class="accordion mt-3">
                                    <!-- collapsible accordion 1 -->
                                    <div class="card">
                                        <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                        Payment details
                                        </a>
                                        </div>
                                        <!-- /card-header -->
                                        <div id="collapseOne" class="collapse show" data-parent=".accordion">
                                        <div class="card-body">
                                            <p>Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- /card -->
                                    <!-- collapsible accordion 2 -->
                                    <div class="card">
                                        <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                        Enrollment Information
                                        </a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent=".accordion">
                                        <div class="card-body">
                                            <p>Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- /card -->
                                    <!-- collapsible accordion 3 -->
                                    <div class="card">
                                        <div class="card-header">
                                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                        Safety information
                                        </a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent=".accordion">
                                        <div class="card-body">
                                            <p>Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- /card -->
                                </div>
                                <!-- /accordion -->
                            </div>
                            <!-- /col-md-12-->
                            <div class="col-md-12 mt-5">
                                <h5>Our benefits</h5>
                                <!-- custom-list -->
                                <ul class="custom pl-0">
                                    <li>Orci eget, viverra elit liquam erat volut pat phas ellus ac Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dol</li>
                                    <li>Ipuset phas ellus ac sodales Lorem ipsum dolor Phas ell lorem</li>
                                    <li>Ipuset phas ellus ac sodales Lorem ipsum dolor Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dol</li>
                                    <li>Ipuset phas ellus ac sodales Lorem ipsum dolor Phas ell lorem , scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus</li>
                                    <li>Aliquam erat volut pat phas ellu</li>
                                </ul>
                                <!-- /ul -->
                            </div>
                            <!-- /col-md -->
                            <!-- custom link -->
                            <a class="custom-link float-right mt-5" href="services.html">Go back to services</a>
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /col-md-12 -->
                    </div>
                    <!-- /col-lg-9 -->
                    <!-- ==== Sidebar ==== -->
                    <div id="sidebar" class="col-lg-3 h-50 sticky-top">
                        <!--widget area-->
                        <div class="widget-area notepad">
                            <h5 class="sidebar-header">All Services</h5>
                            <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active">
                            Daycare
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">Summer Camp</a>
                            <a href="#" class="list-group-item list-group-item-action">Infant Care</a>
                            <a href="#" class="list-group-item list-group-item-action">Classes</a>
                            <a href="#" class="list-group-item list-group-item-action">Activities</a>
                            </div>
                            <!-- /list-group -->
                        </div>
                        <!-- /widget-area -->
                    </div>
                    <!-- /sidebar -->
                </div>
                <!-- /row-->
                </div>
                <!-- /container-->
            </div>
            <!-- /page -->
        </div>
        <!--/ page-wrapper -->
        <svg version="1.1" id="divider"  class="secondary" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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