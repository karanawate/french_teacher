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
                                                            <i class="fadeIn animated bx bx-message-square-edit" style="font-size:30px;"></i>
                                                        </a>
                                                        <input type="hidden" name="testId" value="" >
                                                        <button type="submit" name="submit" value="submit" class="fadeIn animated bx bx-trash-alt" style="font-size:30px;display: contents;"></button>
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

