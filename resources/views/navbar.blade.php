<nav id="main-nav" class="navbar-expand-xl fixed-top">
    <div class="row">
        <!-- Start Top Bar -->
        <div class="container-fluid top-bar" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Start Contact Info -->
                        <ul class="contact-details float-left">
                        <li><i class="fa fa-envelope"></i><a href="mailto:email@site.com">email@yoursite.com</a></li>
                        <li><i class="fa fa-phone"></i>(123) 456-789</li>
                        </ul>
                        <!-- End Contact Info -->
                        <!-- Start Social Links -->
                        <ul class="social-list float-right list-inline">
                        <li class="list-inline-item"><a title="Facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a  title="Instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        <!-- /End Social Links -->
                    </div>
                    <!-- col-md-12 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- End Top bar -->
        <!-- Navbar Starts -->
            <div class="container">
                <div class="desktop-view-nav">
                    <ul class="navbar-nav" style="justify-self: center;">
                        <!-- menu item -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('website')}}">Home</a>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('services')}}">Services</a>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('about-us')}}">About Us</a>
                        </li>
                    </ul>
                    <div style="justify-self: center; align-self: center;">
                        <a class="nav-brand" href="index.html">
                            <img src="{{url('assets/img/logo.png')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <ul class="navbar-nav" style="justify-self: center;">
                        <!-- menu item -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{('gallerypic')}}">Gallery</a>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{('contact')}}">Contact</a>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{('blogs')}}">Blogs</a>
                        </li>
                        
                        @if(Session::has('usersession'))
                          @php  $usersession = Session::get('usersession') @endphp
                            <div class="w3-dropdown-hover" style="margin-top:20px; border-radius:5px">
                                <button class="w3-button w3-black">{{ $usersession[0]->UserName }}</button>
                                <div class="w3-dropdown-content w3-bar-block w3-border">
                                <a href="#" class="w3-bar-item w3-button">Dashboard</a>
                                <a href="{{ url('user-logout') }}" class="w3-bar-item w3-button">Logout</a>
                                </div>
                            </div>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{('login')}}">Login</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        <div class="navbar container-fluid mobile-view-nav">
            <div class="container ">
                <!-- logo -->
                <a class="nav-brand" href="index.html">
                <img src="{{url('assets/img/logo.png')}}" alt="" class="img-fluid">
                </a>
                <!-- Navbar toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon">
                <i class="fas fa-bars"></i>
                </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                    <!-- menu item -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home
                        </a>
                    </li>
                    <!-- menu item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="services-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="services-dropdown">
                            <a class="dropdown-item active" href="services.html">Services Style 1</a>
                            <a class="dropdown-item" href="services2.html">Services Style 2</a>
                            <a class="dropdown-item" href="services-single.html">Services Single</a>
                        </div>
                    </li>
                    <!-- menu item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="about-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                        </a>
                        <div class="dropdown-menu" aria-labelledby="about-dropdown">
                            <a class="dropdown-item" href="about.html">About Style 1</a>
                            <a class="dropdown-item" href="about2.html">About Style 2</a>
                            <a class="dropdown-item" href="team.html">Our Team</a>
                            <a class="dropdown-item" href="team-single.html">Team Single Page</a>
                            <a class="dropdown-item" href="careers.html">Careers</a>
                            <a class="dropdown-item" href="pricing.html">Pricing</a>
                        </div>
                    </li>
                    <!-- menu item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="gallery-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Gallery
                        </a>
                        <div class="dropdown-menu" aria-labelledby="gallery-dropdown">
                            <a class="dropdown-item" href="gallery.html">Gallery Style 1</a>
                            <a class="dropdown-item" href="gallery2.html">Gallery Style 2</a>
                            <a class="dropdown-item" href="gallery3.html">Gallery Style 3</a>
                        </div>
                    </li>
                    <!-- menu item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="contact-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contact
                        </a>
                        <div class="dropdown-menu" aria-labelledby="contact-dropdown">
                            <a class="dropdown-item" href="contact.html">Contact Style 1</a>
                            <a class="dropdown-item" href="contact2.html">Contact Style 2</a>
                            <a class="dropdown-item" href="contact3.html">Contact Style 3</a>
                        </div>
                    </li>
                    <!-- menu item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="others-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Other pages
                        </a>
                        <div class="dropdown-menu" aria-labelledby="others-dropdown">
                            <a class="dropdown-item" href="blog.html">Blog Home 1</a>
                            <a class="dropdown-item" href="blog2.html">Blog Home 2</a>
                            <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                            <a class="dropdown-item" href="elements.html">Elements Page</a>
                            <a class="dropdown-item" href="404.html">404 Page</a>
                        </div>
                    </li>
                    </ul>
                    <!--/ul -->
                </div>
                <!--collapse -->
            </div>
            <!-- /container -->
        </div>
        <!-- /navbar -->
    </div>
    <!--/row -->
</nav>