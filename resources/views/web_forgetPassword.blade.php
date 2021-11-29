
@php 
 $usersession = Session::get('usersession');
@endphp
<!DOCTYPE html>
<html lang="en">
    @include('header')
   <!-- ==== body starts ==== -->
    <body id="top">
        <!-- Preloader -->
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
            <div class="register-lead-desktop" style="margin-right: 351px;">
                <form  method="POST"  action="{{ url('login-check')}}">
                    {{ csrf_field() }}
                        <div class="form-group mt-3">
                            <input type="text"  name="UserMobile" class="form-control" id="UserMobile" placeholder="Enter Mobile No" >
                            <span style="color:red">@error('UserMobile'){{ $message }}  @enderror</span>
                            <span id="errormsg"></span>
                        </div>
                        <span class="d-flex justify-content-end"><a href="#" id="getOtp">Get Otp</a></span>

                        <div class="form-group mt-3">
                            <input type="text"  name="UserPassword" class="form-control" placeholder="Enter Password" >
                            <span style="color:red">@error('UserPassword'){{ $message }}  @enderror</span>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text"  name="UserPassword" class="form-control" placeholder="Enter Re-Password" >
                            <span style="color:red">@error('UserPassword'){{ $message }}  @enderror</span>
                        </div>
                    <button type="submit" name="submit" id="submit" value="submit" class="btn btn-primary">Submit</button>
                </form>   
            </div>
            <!-- /.row-->
            </section>
            <!-- /Section -->
        </div>
        <!--/ page-wrapper -->
       
    </body>
    <!-- ==== footer ==== -->
    @include('web_footer')
    <!--/ footer-->

    <script>
        
        $(document).ready(function(){
            $('#getOtp').click(function(){
                var UserMobile = $('#UserMobile').val();
                if(UserMobile== "" || UserMobile==null )
                {
                    $("#errormsg").html("Mobile Number is required").css("color","red");
                }
                else if(isNaN(UserMobile)){
                    $('#errormsg').html('mobile no should be integer').css('color','red');
                }else if(UserMobile.length != 10){
                    $('#errormsg').html('mobile no should be 10 digit').css('color','red');
                }else
                {
                    $('#errormsg').hide();
                    $.ajax({
                        url:"{{url('otp-send')}}",
                        type:"POST",
                        data:{
                            _token:"{{csrf_token() }}",
                            UserMobile:UserMobile
                        },
                        success:function(res)
                        {
                            console.log(res);
                        },
                        error:function(error)
                        {
                            console.log(error);
                        }   







                    })
                   
                }
            });
        });
    </script>
   
    
