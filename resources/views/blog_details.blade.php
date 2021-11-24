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
                            <li class="breadcrumb-item"><a href="{{url('/website')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/blogs')}}">Blog Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Day Care 101: How to Choose the best Facilities</li>
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
                    <!-- Post Content Column -->
                    <div class="col-lg-9 blog-card page-with-sidebar">
                        <h2 class="mb-2">{{$getBlogList[0]->blogTitle}}</h2>
                        <!-- Post info-->
                        <div class="post-info text-muted">
                            <i class="fas fa-calendar margin-icon"></i>{{date("d F, Y", strtotime($getBlogList[0]->blogDate));}}
                            <a href="#">Vedic Tree School</a> /  <i class="fas fa-comment margin-icon"></i>{{$count}} comments
                        </div>
                        <hr>
                        <!-- Preview Image -->
                        <img src="{{url('blogImage/'.$getBlogList[0]->blogImage)}}" class="img-fluid" alt="">
                        <hr>
                        <!-- Post Content -->
                        <p class="lead">
                             @php
                                echo $getBlogList[0]->description;
                             @endphp
                        </p>
                        
                        <!-- Comments Form -->
                        <div class="card my-4 mt-5 bg-light">
                            <h5 class="card-header">Leave a Comment:</h5>
                            <div class="card-body">
                            <form action="/comments" method="post">
                                @csrf
                                <input type="hidden" name="blogid" value="{{$getBlogList[0]->blogId}}">
                                <div class="form-group">
                                    <input type="text" name="userName" class="form-control" placeholder="Enter Name " required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" name="commentMsg" required placeholder="Comments"></textarea>
                                </div>
                                <button type="submit" name="submit" value="submit" class="btn btn-secondary">Submit</button>
                            </form>
                            </div>
                        </div>
                        @if($getComments)
                         @foreach($getComments as $value)
                        <!-- Comment -->
                        <div class="comment row mt-5">
                            
                            <!-- /col-md -->
                            <div class="col-md-9 col-xs-12 float-left">
                            <h6 class="mt-2"><a href="">{{ $value->userName}}</a> <small>says:</small></h6>
                            <p> {{ isset($value->commentMsg) ? $value->commentMsg : 'no commnets found'  }}  </p>
                           
                            </div>
                            <!--/media-body -->
                        </div>
                        <!--/Comment -->
                        @endforeach @endif
                        
                    </div>
                    <!-- /page-with-sidebar -->
                    <!-- Sidebar -->
                    <div id="sidebar" class="h-50 col-lg-3 sticky-top">
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
        <!--/ footer-->
    </body>
</html>