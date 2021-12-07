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
                            <a class="btn btn-primary"  href="{{ url('report-card/create') }}" >Add Report-card</a>	
                        </div>
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Id</th>
										<th>Student Name</th>
										<th>Mobile Number</th>
										<th>createDT</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									
									@if($students)
									  @php $i = 1; @endphp
									  @foreach($students as $student)
										<tr>
										<td>{{ $i++; }}</td>
										<td>{{ $student->studentName }}</td>
										<td>{{ $student->studentMobile }}</td>
										<td>{{ $student->createDT }}</td>
										<td>
										
										<form action="{{ url('view-reportcard')}}" method="post">
											<input type="hidden" value="{{$student->studId }}" name="studId" />
											<input type="hidden" value="{{$student->studentClass }}" name="studentClass" />
											@csrf
											<button type="submit" class="btn btn-primary" name="submit" value="submit" >
												View-Reportcard
											</button>
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

