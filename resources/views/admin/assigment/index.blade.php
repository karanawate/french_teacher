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

				<!-- table -->
				<div class="page-content">
					<div class="card-body">
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-primary"  href="{{ url('assigments/create') }}" >Add Assigment</a>	
                        </div>
						@if(Session::has('danger'))
						  <div class="alert alert-danger">
								{{ Session::get('danger'); }}
						  </div>
						@endif
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Id</th>
										<th>Title</th>
										<th>Description</th>
										<th>Download file</th>
										<th>Date</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@if($assigments)
									   @php $i = 1; @endphp
									  @foreach($assigments as $Assigment)
										<tr>
											<td>{{ $i++ }}</td>
											<td>{{ $Assigment->home_title }}</td>
											<td>{{ $Assigment->description }}</td>
											<td>
												<img
												  src="{{ asset('images/'.$Assigment->allocated_file) }}"
												  alt="No file found"
												  height="50"
												  width="50"
												  >
												</td>
												<td>
												@php 
												$date = $Assigment->created_at;
												@endphp
												{{ \Carbon\Carbon::parse($date)->diffForHumans() }}
												</td>
											<td>
												<a href="{{ route('assigments.edit', $Assigment->Assigment_Id)}}">
													<i class="fadeIn animated bx bx-message-square-edit" style="font-size:30px;"></i>
												</a>
												<form action="{{ route('assigments.destroy',$Assigment->Assigment_Id)}}" method="POST">
													@method('DELETE')
													@csrf
													<button type="submit"  value="submit"  name="submit" value="submit" class="fadeIn animated bx bx-trash-alt" style="font-size:30px;display: contents;"></button>
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


<script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
	$(document).ready(function(){
		setTimeout(() => {
			$('.alert-danger').remove();
		}, 3000);
	});
</script>

