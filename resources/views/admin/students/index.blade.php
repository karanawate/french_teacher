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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-primary"  href="{{ url('report-card/create') }}" >Add Report-card</a>	
                    </div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Id</th>
										<th>Name</th>
										<th>Phone</th>
										<th>Class</th>
										<th>Package</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                    @if($students)
                                        @php $i = 1; @endphp
                                       @foreach($students as $student)     
                                            <tr>
                                                <td>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $student->studentName }}</td>
                                                    <td>{{ $student->studentMobile }}</td>
                                                    <td>
                                                        @if($student->studentClass     == 1)
                                                        @php echo "Nursary";  @endphp
                                                        @elseif($student->studentClass == 2)
                                                        @php echo "Junior";    @endphp
                                                        @elseif($student->studentClass == 3)
                                                        @php echo "Senior";    @endphp
                                                        @endif
                                                    <td>
                                                        <a href="#">
                                                            <i class="fadeIn animated bx bx-message-square-edit " data-toggle="modal" data-target="#myModal{{$student->studId}}"  style="font-size:30px;"></i>
                                                        </a>
                                                    </td>
                                            </tr>
                                        @endforeach
                                    @endif
								</tbody>
							</table>
						</div>
					</div>
				
<!-- Modal -->
		@if($students)
		   @foreach($students as $student)
				<div class="modal fade" id="myModal{{$student->studId}}" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
						
						<h4 class="modal-title">Student-Information</h4>
						</div>
					
						<div class="modal-body">
							<div class="row">
							    <div class="col-md-6">
								 Name:	{{ $student->studentName }}
								 </div>
								 <div class="col-md-6">
								  Number: {{ $student->studentMobile }}
								 </div>
							</div>
							<div class="row">
							    <div class="col-md-6">
								
								 Class:	{{ $student->studentClass }}
								 </div>
								 <div class="col-md-6">
								  Number: {{ $student->studentGender }}
								 </div>
							</div>
						
						</div>
					
						<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
					
					</div>
				</div>
		    @endforeach
		@endif
<!-- popup start from here -->
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

