@include('admin.activity_header')
<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="mb-4 text-center">
							<img src="{{url('assets/images/logo.png')}}" width="180" alt="" />
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h4 class="">Forget password</h4>
									</div>
									<div class="d-grid">
										
									</div>
									<div class="form-body">
										<form class="row g-3" action="updatepass" method="POST">
										@csrf
											<div class="col-12">
												<label for="UserMobile" class="form-label">Email User Mobile</label>
												<input type="text" name="UserMobile" value="" class="form-control" maxlength="10" id="UserMobile" placeholder="Enter User Mobile">
												<span style="color:red">@error('UserMobile'){{ $message }}@enderror</span>
                                                <span id="errormsg"></span>
											</div>
                                            <div class="col-12">
                                            <span  style="float:right"><a href="#" id="getotp">GET OTP</a></span>
                                            </div>
                                            <div class="col-12" style="display:none" id="otpnumber">
                                            <label for="inputChoosePassword" class="form-label">Enter OTP Number</label>
												<div class="input-group" id="show_hide_password">
													<input type="number" class="form-control"  value="" id="otpnumbercheck"  name="otpnumber" placeholder="Enter Otp Number ">
                                                     <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
                                            </div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Enter Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control"  value="" name="password" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
												<span style="color:red">@error('password'){{ $message }}@enderror</span>
											</div>
                                            <div class="col-12">
												<label for="inputChoosePassword" class="form-label">Enter Confirm Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="cpassword" class="form-control"  value="" name="cpassword" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
												<span style="color:red">@error('cpassword'){{ $message }}@enderror</span>
											</div>

											<div class="col-md-6 text-end">
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" name="submit" value="submit" class="btn btn-primary">Update password</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<script src="{{url('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{url('admin/assets/js/jquery.min.js')}}"></script>
	<script src="{{url('admin/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{url('admin/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{url('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{url('admin/assets/js/notify.js')}}"></script>
	<script src="{{url('admin/assets/js/prettify.js')}}"></script>
	<!--Password show & hide js -->
	
 <script src="{{url('admin/assets/js/app.js')}}"></script>
 <script type="text/javascript">
     $(document).ready(function()
     {

        $("#getotp").click(function(){
            
            var UserMobile = $("#UserMobile").val();
            if(UserMobile=="" || UserMobile==null ){
                $("#errormsg").html("Mobile Number is required").css("color","red");
            }else if(isNaN(UserMobile)){
                $("#errormsg").html("Mobile Number should be Integer").css("color","red");
            }else if(UserMobile.length!=10){
                $("#errormsg").html("Mobile Number should be 10 Digit").css("color","red");
            }else{
                $("#errormsg").hide();
                $.ajax({
                    type:"POST",
                    data:{"_token":"{{ csrf_token() }}",UserMobile:UserMobile},
                    url:"{{ url('getotpnumber') }}",
                    success:function(res){
                        console.log(res);
                        if(res==1){
                            $.notify("OTP Sent On Your Mobile Number", {animationType:"drop",align:"right", verticalAlign:"top",color: "#D44950"});
                            $("#otpnumber").show();
                        }else if(res==2){
                            $.notify("Mobile Number Does not Exist !", {animationType:"drop",align:"right", verticalAlign:"top",color: "#D44950"});
                        }else{
                            $("#otpnumber").hide();
                            $.notify("OTP Does Not Sent On your Mobile Number", {animationType:"drop",align:"right", verticalAlign:"top",color: "#D44950"});
                        }
                    }, 
                    error:function(error){
                        console.log(error);
                    }
                });
            }
        });


        $("#otpnumbercheck").blur(function(){
            
            var otpnumber = $("#otpnumbercheck").val();
            if(otpnumber=="" || otpnumber==null ){
                $("#errormsgotp").html("OTP Number is required").css("color","red");
            }else{
                $("#errormsgotp").hide();
                $.ajax({
                    type:"POST",
                    data:{"_token":"{{ csrf_token() }}",otpnumber:otpnumber},
                    url:"{{ url('otpnumbercheck') }}",
                    success:function(res){
                        console.log(res);
                        if(res==1){
                            $.notify("OTP Verify Successfully", {animationType:"drop",align:"right", verticalAlign:"top",color: "#D44950"});
                            $("#otpnumber").show();
                        }else{
                            $("#otpnumber").hide();
                            $.notify("OTP Does Not Verify Successfully", {animationType:"drop",align:"right", verticalAlign:"top",color: "#D44950"});
                        }
                    }, 
                    error:function(error){
                        console.log(error);
                    }
                });
            }
        });
















    });



 </script>
 
</body>
</html>





