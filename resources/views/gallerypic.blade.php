<!DOCTYPE html>
<html lang="en">
    @include('header')
    <!-- ==== body starts ==== -->
    <body id="top">
        <!-- Preloader  -->
        <div id="preloader">
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                <div class="preloader-logo">
                    <!--spinner -->
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
        @include('navbar')
        <!-- /nav -->
        <!-- page wrapper starts -->
        <div id="page-wrapper">
            <!-- Jumbotron -->
            <div class="jumbotron jumbotron-fluid">
                <div class="container" >
                <div class="jumbo-heading" data-aos="fade-down">
                    <h1>Gallery</h1>
                    <!-- Breadcrumbs -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery </li>
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
                <div class="col-lg-6 text-center offset-lg-3 mb-5">
                    <h2>Our Photo Gallery</h2>
                    <p>In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                </div>
                <!-- /col-lg -->
                </div>
                <!-- /row -->
                <!-- centered Gallery navigation -->
                <ul class="nav nav-pills category-isotope center-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-toggle="tab" data-filter="*">All</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="tab" data-filter=".school">Our School</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="tab" data-filter=".activities">Activities</a>
                </li> -->
                </ul>
                <!-- /ul -->
                <!-- Gallery -->
                <div id="gallery-isotope" class="row mt-5 magnific-popup">
                <!-- Image 1 -->
                @if($getGalleryList)
                @foreach($getGalleryList as $value)
                <div class="col-sm-6 col-md-6 col-lg-4 activities">
                    <div class="portfolio-item">
                        <div class="gallery-thumb">
                            <img class="img-fluid " src="{{url('galleryImage/'.$value->galImages)}}" style="width:350px; height:250px" alt="">
                            <span class="overlay-mask"></span>
                            <a href="{{url('galleryImage/'.$value->galImages)}}" class="link centered" title="You can add caption to pictures.">
                            <i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Image 2 -->
                
               @endforeach
               @endif
                </div>
                <!-- /gallery-isotope-->	
            </div>
            <!-- /page -->
        </div>
        <!--/ page-wrapper -->
        <svg version="1.1" id="footer-divider"  class="secondary" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 1440 126" preserveAspectRatio="none slice" xml:space="preserve">
            <path class="st0" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"/>
        </svg>
        <!-- ==== footer ==== -->
        @include('footer')
        <script src="{{url('assets/vendor/jquery/jquery.min')}}.js"></script>
        <script src="{{url('assets/vendor/bootstrap/js/bootstrap')}}.min.js"></script>
        <!-- Custom Js -->
        <script src="{{url('assets/js/custom.js')}}"></script>
        <script src="{{url('assets/js/plugins.js')}}"></script>
        <script src="{{url('assets/js/prefixfree.min.js')}}"></script>
    </body>
</html>