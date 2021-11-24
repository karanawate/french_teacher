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
					<div class="card-body">
						<div class="card border-top border-0 border-4 border-danger">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-danger"></i>
									</div>
									<h5 class="mb-0 text-danger">Create Testimonial</h5>
								</div>
								<hr>
								<div class="col-md-12">
									
								<form class="row g-3" action="addtestimonial" method="post" enctype= multipart/form-data >
								@csrf
									<div class="col-md-6">
										<label for="inputLastName1" class="form-label">Please provide rating on our product </label>
										<div class="input-group"> 
											<input type="hidden" name="testRate" value="" class="form-control " id="testRate" placeholder="" >
												<div class = "con">
										       <i class = "fa fa-star" aria-hidden = "true" id = "st1"></i>
										       <i class = "fa fa-star" aria-hidden = "true" id = "st2"></i>
										       <i class = "fa fa-star" aria-hidden = "true" id = "st3"></i>
										       <i class = "fa fa-star" aria-hidden = "true" id = "st4"></i>
										       <i class = "fa fa-star" aria-hidden = "true" id = "st5"></i>
										     </div>
											  </div>
												<span style="color:red">@error('testRate'){{ $message }}@enderror</span>
									  	  </div>
											<div class="col-md-6">
												<label for="inputLastName1" class="form-label">Upload Testimonial Image</label>
												<div class="input-group"> 
													<input type="file" name="testiImage" class="form-control border-start-0" id="inputLastName1" placeholder="" />
												</div>
												<span style="color:red">@error('testiImage'){{ $message }}@enderror</span>
											</div>
											<div class="col-md-6">
												<label for="inputLastName1" class="form-label">Enter Testimonial Date</label>
												 <div class="input-group"> 
													<input type="date" name="testDate" value="" class="form-control" id="" placeholder="Testimonial Date" />
												 </div>
												 <span style="color:red">@error('testDate'){{ $message }}@enderror</span>
										  	</div>
											  <div class="col-md-6">
												<label for="inputLastName1" class="form-label">Enter Parent Name</label>
												 <div class="input-group"> 
													<input type="text" name="parentName" value="" class="form-control" id="" placeholder="Enter parentName" />
												 </div>
												 <span style="color:red">@error('parentName'){{ $message }}@enderror</span>
										  	</div>
									  		

									  		<div class="col-md-12">
												<div class="form-group">
													<label>Description</label>
													<textarea name="testDesc" col="10" row="10" id="editor2" contenteditable="true" class="inline-editor" style="border:black"></textarea>
													</div>
													<span style="color:red">@error('testDesc'){{ $message }}@enderror</span>
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


<script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

