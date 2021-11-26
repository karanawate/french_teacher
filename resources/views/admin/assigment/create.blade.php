@include('admin.activity_header');
@php
$res = Session::get('usersession');
@endphp
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
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
					<div class="card-body">
						<div class="card border-top border-0 border-4 border-danger">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-danger"></i>
									</div>
									<h5 class="mb-0 text-danger">Create Assigment</h5>
								</div>
								<hr>
								<div class="col-md-12">
									@if(Session::has('success'))
									  <div class="alert alert-success alertbox">
										{{ Session::get('success')}}
									  </div>
									@endif
								<form class="row g-3" action="{{route('assigments.store')}}" method="post" enctype= multipart/form-data >
								@csrf
										 <div class="row">
												<div class="col-md-6">
													<label for="inputLastName1" class="form-label">Enter Title</label>
													<div class="input-group"> 
														<input type="text" name="home_title"  class="form-control"  placeholder="Enter Title" />
													</div>
													<span style="color:red">@error('home_title'){{ $message }}@enderror</span>
												</div>
										 </div>
										 <div class="row">	
										    	<div class="col-md-6">
													<label for="inputLastName1" class="form-label">Upload Image</label>
													<div class="input-group"> 
														<input type="file" name="allocated_file" class="form-control border-start-0" id="inputLastName1" placeholder="" />
													</div>
													<span style="color:red">@error('allocated_file'){{ $message }}@enderror</span>
											    </div>
                                        </div>
										<div class="row">
												<div class="col-md-6">
													<label for="inputLastName1" class="form-label">Start time</label>
													<div class="input-group"> 
														<input type="date" name="start_time" class="form-control" id="" placeholder="Enter parentName" />
													</div>
													<span style="color:red">@error('start_time'){{ $message }}@enderror</span>
												</div>
										</div>
										<div class="row">
												<div class="col-md-6">
													<label for="inputLastName1" class="form-label">Start time</label>
													<div class="input-group"> 
														<input type="date" name="end_time"  class="form-control" />
													</div>
													<span style="color:red">@error('start_time'){{ $message }}@enderror</span>
												</div>
										</div>
										<div class="row">
												<div class="col-md-6">
														<label>Description</label>
														<textarea name="description" rows="10" cols="80"></textarea>
														</div>
														<span style="color:red">@error('testDesc'){{ $message }}@enderror</span>
												</div>
                                        </div>
										<div class="col-12">
												<button type="submit" name="submit" value="submit" class="btn btn-danger px-5">Submit</button>
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

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
	$(document).ready(function(){
		setTimeout(() => {
			$('.alert-success').remove();
		}, 3000);
	});
</script>

