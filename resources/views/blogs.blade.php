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
        @include('navbar')
        <!-- /nav -->
        <!-- page wrapper starts -->
        <div id="page-wrapper">
            <!-- Jumbotron -->
            <div class="jumbotron jumbotron-fluid">
                <div class="container" >
                <!-- jumbo-heading -->
                <div class="jumbo-heading" data-aos="fade-down">
                    <h1>Blog</h1>
                    <!-- Breadcrumbs -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('website')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Home</li>
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
            <div id="blog-home" class="page">
                <div class="container">
                <div class="row">
                    <!-- Blog Entries Column -->
                    <div class="col-lg-9 page-with-sidebar">
                        <div class="row">
                            <!-- featured blog post -->
                            <div class="col-lg-12 mb-5">
                            <!-- blog-box -->
                            <div class="blog-box">
                                <!-- image -->
                                <a href="{{url('blog-details/'.$getBlogList[0]->blogId)}}">
                                    <div class="image"><img src="{{url('blogImage/'.$getBlogList[0]->blogImage)}}" alt=""/></div>
                                </a>
                                <!-- blog-box-caption -->
                                <div class="blog-box-caption">
                                    <!-- date -->
                                    <div class="date"><span class="day">{{date("d F, Y", strtotime($getBlogList[0]->blogDate));}}</span></div>
                                    <a href="{{url('blog-details/'.$getBlogList[0]->blogId)}}">
                                        <h4>
                                            @php if($getBlogList){ 

                                            echo $getBlogList[0]->blogTitle;
                                            }
                                            @endphp
                                        </h4>
                                    </a>
                                    <!-- /link -->
                                    <p>
                                        @php if($getBlogList){ 

                                            echo $getBlogList[0]->description;
                                        }
                                        @endphp
                                    </p>
                                </div>
                                <!-- blog-box-footer -->
                                <div class="blog-box-footer">
                                    <div class="author">Posted by<a href="#"><i class="fas fa-user"></i>Vedic Tree School</a></div>
                                    <!-- Button -->	 
                                    <div class="text-center col-md-12">
                                        <a href="{{url('blog-details/'.$getBlogList[0]->blogId)}}" class="btn btn-primary ">Read more</a>
                                    </div>
                                </div>
                                <!-- /blog-box-footer -->
                            </div>
                            <!-- /blog-box -->
                            </div>
                            <!-- /col-lg-12-->

                            @if($getBlogList)
                             @foreach($getBlogList as $value)

                            <div class="col-lg-6 res-margin">
                                <!-- blog-box -->
                                <div class="blog-box">
                                    <!-- image -->
                                    <a href="{{url('blog-details/'.$value->blogId)}}">
                                        <div class="image"><img src="{{url('blogImage/'.$value->blogImage)}}" style="height:250px" alt=""/></div>
                                    </a>
                                    <!-- blog-box-caption -->
                                    <div class="blog-box-caption">
                                        <!-- date -->
                                        <div class="date"><span class="day">22</span><span class="month">Dec</span></div>
                                        <a href="{{url('blog-details/'.$value->blogId)}}">
                                            <h4>{{$value->blogTitle}}</h4>
                                        </a>
                                        <!-- /link -->
                                        <p>
                                            @php
                                            echo substr($value->description,0,500);
                                            @endphp
                                        </p>
                                    </div>
                                    <!-- blog-box-footer -->
                                    <div class="blog-box-footer">
                                        <div class="author">Posted by<a href="#"><i class="fas fa-user"></i>Vedic Tree School</a></div>
                                        <!-- Button -->	 
                                        <div class="text-center col-md-12">
                                            <a href="{{url('blog-details/'.$value->blogId)}}" class="btn btn-primary ">Read more</a>
                                        </div>
                                    </div>
                                    <!-- /blog-box-footer -->
                                </div>
                                <!-- /blog-box -->
                            </div>
                            @endforeach
                            @endif
                            <!-- /col-lg-6-->
                        </div>
                        <!-- /row -->
                        <div class="col-md-12 mt-5" style="display:none">
                            <!-- pagination -->
                            <nav aria-label="pagination">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                            </nav>
                            <!-- /nav -->
                        </div>
                        <!-- /col-md -->
                    </div>
                    <!-- /page-with-sdiebar -->
                    <!-- blog sidebar starts -->
                    <div id="sidebar" class="h-50 col-lg-3 sticky-top order-lg-1">
                        <!--widget-area notepad -->
                        <div class="widget-area notepad">
                            <h5 class="sidebar-header">Search</h5>
                            <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                            <button class="btn btn-secondary btn-sm" type="button">Go!</button>
                            </span>
                            </div>
                        </div>
                        <!--/widget-area notepad -->
                        <div class="widget-area notepad">
                            <h5 class="sidebar-header">Categories</h5>
                            <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                            Daycare
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">News</a>
                            <a href="#" class="list-group-item list-group-item-action">Parent Alerts</a>
                            <a href="#" class="list-group-item list-group-item-action">Our Events</a>
                            </div>
                        </div>
                        <!--/widget-area notepad -->
                        <div class="widget-area notepad">
                            <h5 class="sidebar-header">Our video</h5>
                            <!-- video -->
                            <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/a6m3ZQBY31E"></iframe>
                            </div>
                        </div>
                        <!--/widget-area notepad -->
                        <div class="widget-area notepad">
                            <h5 class="sidebar-header">Tags</h5>
                            <div class="tags-widget">
                            <a href="#" class="badge badge-pill badge-default">News</a>
                            <a href="#" class="badge badge-pill badge-default">Daycare</a>
                            <a href="#" class="badge badge-pill badge-default">Activities</a>
                            <a href="#" class="badge badge-pill badge-default">Lessons</a>
                            <a href="#" class="badge badge-pill badge-default">Teachers</a>
                            </div>
                        </div>
                        <!--/widget-area notepad -->
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
                        <!--/widget-area notepad -->
                    </div>
                    <!--/sidebar -->      
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
        @include('footer')
    </body>
</html>