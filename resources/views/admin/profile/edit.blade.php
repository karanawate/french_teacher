@include('admin.activity_header');
@php
$res = Session::get('usersession');
@endphp
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	 .fa-star {
        font-size : 40px;
        align-content : center;
    }

</style>
<body onload="info_noti()">
	<!--wrapper-->
	<div class="wrapper">
	@include('admin.sidebar');
		<!--start header -->
		@include('admin.sidebarheader');
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="card">
					<div class="card-body d-flex justify-content-center">
						<div class="card border-top border-0 border-4 border-danger">
							<div class="card-body p-5 ">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-danger"></i>
									</div>
									<h5 class="mb-0 text-danger">Profile Update</h5>
								</div>
								<hr>
								<div class="col-md-12">
									@if(Session::has('success'))
									  <div class="alert alert-success alertbox">
										{{ Session::get('success')}}
									  </div>
									@endif
								<form class="row g-3" id="profile_update" >
										 <div class="row">
												<div class="col-md-6">
													<label for="inputLastName1" class="form-label">Enter Mobile Number</label>
													<div class="input-group"> 
														<input type="text"  name="UserMobile" id="UserMobile" class="form-control"  placeholder="Enter Mobile Number" />
													</div>
													<span style="color:red">@error('UserMobile'){{ $message }}@enderror</span>
												</div>
										 </div>
										 
										<div class="row">
												<div class="col-md-6">
													<label for="inputLastName1" class="form-label">Name</label>
													<div class="input-group"> 
														<input type="text"  name="UserName" id="UserName" class="form-control" id="" placeholder="Enter Name" />
													</div>
													<span style="color:red">@error('UserName'){{ $message }}@enderror</span>
												</div>
										</div>

										<div class="row">
												<div class="col-md-6">
													<label for="inputLastName1" class="form-label">E-mail</label>
													<div class="input-group"> 
														<input type="text"   name="UserEmail" id="UserEmail" class="form-control" id="" placeholder="Enter E-mail" />
													</div>
													<span style="color:red">@error('UserEmail'){{ $message }}@enderror</span>
												</div>
										</div>

										<div class="col-12">
                                                <button class="btn btn-danger px-5">Update profile</button>
										</div>
								</form>
								</div>
							</div>
						</div>
					</div>
				<!-- table -->
				
			   </div>
			</div>
		</div>
		<div class="overlay toggle-icon"></div>
		 <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	@include('admin.themestyle');
	@include('admin.footer');


<script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



<script>
    $('#profile_update').submit(function(event){
        event.preventDefault();
        var UserMobile = $('#UserMobile').val();
        var UserName   = $('#UserName').val();
        var UserEmail  = $('#UserEmail').val();
        $.ajax({
            url: "{{url('profile-update')}}", 
            type:'POST',
            data:{
                _token:'{{ csrf_token() }}',
                UserMobile: UserMobile,
                UserName: UserName,
                UserEmail: UserEmail
            },sucess:function(data)
            {
                console.log(data);
            },error:function(error){
                console.log(error);
            }
        }); 
    });
</script>

