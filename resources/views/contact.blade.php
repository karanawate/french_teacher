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
                <!-- jumbo-heading -->
                <div class="jumbo-heading" data-aos="fade-down">
                    <h1>Contact</h1>
                    <!-- Breadcrumbs -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
                    <div class="col-lg-7">
                        <h3>Contact Information</h3>
                        <p>In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                        <p>
                            <!-- contact icons-->
                        <ul class="list-inline mt-3 list-contact colored-icons">
                            <li class="list-inline-item"><i class="fa fa-envelope margin-icon"></i><a href="mailto:email@yoursite.com">email@yoursite.com</a></li>
                            <li class="list-inline-item"><i class="fa fa-phone margin-icon"></i>(123) 456-789</li>
                            <li class="list-inline-item" ><i class="fa fa-map-marker margin-icon"></i>Street Name 123 - New York</li>
                        </ul>
                        <!-- /list-->
                        <!-- map-->
                        <div id="map-canvas" class="mt-5"></div>
                        <!-- /map-->
                    </div>
                    <!-- /col-lg- -->
                    <!-- contact box -->  
                    <div class="col-lg-4 contact-form3 offset-lg-1 bg-light h-100">
                        <div class="contact-image bg-light">
                            <!-- envelope icon-->
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5 class="text-center mt-3">Send us a message</h5>
                        <!-- Form Starts -->
                        <form action="contactus" method="POST" >
                            @csrf
                        <div id="contact_form">
                            <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Name<span class="required">*</span></label>
                                    <input type="text" name="name" class="form-control input-field" required=""> 
                                    <span style="color:red">@error('name'){{ $message }}@enderror</span>
                                </div>
                                <div class="col-md-12">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input type="email" name="email" class="form-control input-field" required=""> 
                                    <span style="color:red">@error('email'){{ $message }}@enderror</span> 
                                </div>
                                <div class="col-md-12">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control input-field">
                                    <span style="color:red">@error('subject'){{ $message }}@enderror</span> 
                                </div>
                                <div class="col-md-12">
                                    <label>Message<span class="required">*</span></label>
                                    <textarea name="message" id="message" class="textarea-field form-control" rows="3"  required=""></textarea>
                                    <span style="color:red">@error('message'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            <!-- button -->
                            <button type="submit" id="submit_btn" value="Submit" name="submit" class="btn btn-primary btn-block mt-3">Send message</button>
                            </div>
                        </form>
                            <!-- /form-group-->
                            <!-- Contact results -->
                            <div id="contact_results" style="color:green">@php if(isset($color)){ echo  $error['error']; } @endphp</div>
                        </div>
                        <!-- /contact-form-->
                    </div>
                    <!-- /col-lg-->
                </div>
                <!-- /row -->
                </div>
                <!-- /container -->
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

@if(isset($color))
	<script type="text/javascript">
		setTimeout(function() {
			window.location = "{{ url('contact') }} ";  
	}, 5000);

</script>
@endif
