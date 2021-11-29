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
                        <input type="text" class="form-control" name="studentMobile" placeholder="Enter Mobile Number">
                        <span style="color:red">@error('studentMobile') {{ $message }} @enderror</span>
                    </div>
                        <div class="form-group mt-3">
                            <input type="password"  name="UserPassword" class="form-control" placeholder="Enter Password " >
                            <span style="color:red">@error('UserPassword'){{ $message }}  @enderror</span>
                        </div>
                        <div class="row">
                            <div class="form-check form-switch col-md-6">
                                <input class="form-check-input" type="checkbox" name="remember" id="flexSwitchCheckChecked" checked>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                            </div>
                            <div class="form-check form-switch col-md-6">
                                <label class="form-check-label" for="flexSwitchCheckChecked"><a href="forgetpass">forgot password</a></label>
                            </div>
						</div>

                    <button type="submit" name="submit" id="submit" value="submit" class="btn btn-primary">Login</button>
                </form>   
            </div>
            <!-- <div class="register-lead-mobile">
                <form id="log" method="POST" action="leadform">
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" id="" name="studentName" placeholder="Enter Name of Your Child" required>
                    </div>
                    <div class="form-group">
                    <input type="email" name="studentEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                    </div>
                    <div class="row">
                        <div class="form-group col-7">
                            <input type="number" class="form-control" id="" placeholder="Enter Mobile Number" maxlength="10" onkeydown="return event.keyCode !== 69" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                        </div>
                        <div class="form-group col-5 pl-0">
                            <select class="form-control" id="" name="fkclass_id" >
                                <option disabled selected>Select Class</option>
                                <option>Nursery</option>
                                <option>Junior KG</option>
                                <option>Senior KG</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>   
            </div> -->
            
                <!-- /.row-->
            </section>
            <!-- /Section -->
        </div>
        <!--/ page-wrapper -->
       
    </body>
    <!-- ==== footer ==== -->
    @include('web_footer')
    <!--/ footer-->
   
    
