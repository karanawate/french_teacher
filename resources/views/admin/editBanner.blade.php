@include('admin.activity_header');
@php
$res = Session::get('usersession');
@endphp

<body onload="">
	<div class="wrapper">
	@include('admin.sidebar');
		<!--start header -->
		@include('admin.sidebarheader');
		<div class="page-wrapper">
			<div class="page-content">
				<div class="card">
					<div class="card-body">
						<div class="card border-top border-0 border-4 border-danger">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-danger"></i>
									</div>
									<h5 class="mb-0 text-danger">Edit Banner On Front Website</h5>
								</div>
								<hr>
								 @if($getEditBannerList)
								<form class="row g-3" action="/updateBanner" method="POST" enctype="multipart/form-data" >
									@csrf
									<input type="hidden" name="banId" value="{{ $getEditBannerList[0]->banId }}">
									<div class="col-md-6">
										<label for="inputLastName1" class="form-label">Banner Image</label>
										<div class="input-group"> 
											<input type="file" name="bannerImage" class="form-control border-start-0" id="inputLastName1" placeholder="First Name" / value="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-group">
											<img style="width:100px;height:100px;" src="{{ url('bannerImage/'.$getEditBannerList[0]->bannerImage) }}">
										</div>
									</div>
									<span style="color:res"></span>
									<div class="col-12">
										<button type="submit" name="submit" value="submit" class="btn btn-danger px-5">Update</button>
									</div>
								</form>
								@else
									No Image Found;
								@endif
							</div>
						</div>
					</div>
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

	@if(isset($color))
	<script type="text/javascript">
		setTimeout(function() {
			window.location = "{{ url('add-banner') }}";  
	}, 5000);

</script>
@endif