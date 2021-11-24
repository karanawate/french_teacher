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
										<h3 class="">Sign in</h3>
									</div>
									<div class="d-grid">
									@if (session('status'))
                                       <div class="alert alert-danger">
                                        {{ session('status') }}
                                       </div>
                                    @endif
									</div>
									<div class="form-body">
										<form class="row g-3" action="store" method="POST">
										@csrf
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email User Mobile</label>
												<input type="text" name="UserMobile" value="" class="form-control" maxlength="10" id="inputEmailAddress" placeholder="Enter User Mobile">
												<span style="color:red">@error('UserMobile'){{ $message }}@enderror</span>
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Enter Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="inputChoosePassword" value="" name="UserPassword" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
												<span style="color:red">@error('UserPassword'){{ $message }}@enderror</span>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" name="remember" id="flexSwitchCheckChecked" checked>
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
												<div class="form-check form-switch" style="float:right;position:relative;margin-right:-222px;top:-24px;">
													<label class="form-check-label" for="flexSwitchCheckChecked"><a href="forgetpass">forgot password</a></label>
												</div>
											</div>
											<div class="col-md-6 text-end">
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" name="submit" value="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
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
	<!-- Bootstrap JS -->
	<script src="{{url('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{url('admin/assets/js/jquery.min.js')}}"></script>
	<script src="{{url('admin/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{url('admin/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{url('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{url('admin/assets/js/notify.js')}}"></script>
	<script src="{{url('admin/assets/js/prettify.js')}}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
 <script src="{{url('admin/assets/js/app.js')}}"></script>
 
 



	
</body>
</html>





