@include('admin.activity_header');
@php
$res = Session::get('usersession');
@endphp

<body onload="">
	<!--wrapper-->
	<div class="wrapper">
	@include('admin.sidebar');
		<!--start header -->
		@include('admin.sidebarheader');
		<!--end header -->
		<!--start page wrapper -->

		@if (session('status'))
		<div class="alert alert-success" role="alert">
			<button type="button" class="close" data-dismiss="alert">×</button>
			{{ session('status') }}
		</div>
		@elseif(session('failed'))
		<div class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismiss="alert">×</button>
			{{ session('failed') }}
		</div>
		@endif


		<div class="page-wrapper">
			<div class="page-content">
				<div class="card">
					<div class="card-body">
						<div class="card border-top border-0 border-4 border-danger">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-danger"></i>
									</div>
									<h5 class="mb-0 text-danger">Add Banner On Front Website</h5>
								</div>
								<hr>
								<form class="row g-3" action="addbanner" method="POST" enctype="multipart/form-data">
								@csrf
									<div class="col-md-6">
										<label for="inputLastName1" class="form-label">Banner Image</label>
										<div class="input-group"> 
											<input type="file" name="bannerImage" class="form-control border-start-0" id="inputLastName1" placeholder="First Name" />
										</div>
									</div>
									<span style="color:red"></span>
									<div class="col-12">
										<button type="submit" name="submit" value="submit" class="btn btn-danger px-5">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				<!-- table -->
				<div class="page-content">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Id</th>
										<th>Banner Image</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@if($getBannerList)
										@php $i=1 @endphp
										@foreach($getBannerList as $value)
									<tr>
										<td>{{ $i++ }}</td>
										<td><img src="{{url('bannerImage/'.$value->bannerImage)}}" width="100px;" height="100px;"></td>
										<td>
											<a href="{{url('edit/'.$value->banId)}}"><i class="fadeIn animated bx bx-message-square-edit" style="font-size:30px;"></i></a>
											<form class="" method="post" onclick="return check()" action="{{url('deleteBanner')}}" >
											@csrf
												<input type="hidden" name="banId" value="{{$value->banId}}" >
												<button type="submit" name="submit" value="submit" class="fadeIn animated bx bx-trash-alt" style="font-size:30px;display: contents;"></button>
											</form>
										</td>
									</tr>
									@endforeach
									@endif		
								</tbody>
							</table>
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

	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>

	
 @if(isset($color))
	<script type="text/javascript">
		setTimeout(function() {
			window.location = "{{url('admin/add_banner')}}"  
	}, 5000);

</script>
@endif

<script type="text/javascript">

	function check() {

		if(confirm("Are You Sure You Want To Delete")==true)
        {
            return true;
        }else{
            return false;
        }
	}

</script>
