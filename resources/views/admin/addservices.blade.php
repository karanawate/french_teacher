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
									<h5 class="mb-0 text-danger">Create Services</h5>
								</div>
								<hr>
								<div class="col-md-12">
									
								<form class="row g-3" action="addservice" method="post" enctype= multipart/form-data >
								@csrf
									<div class="col-md-6">
										<label for="inputLastName1" class="form-label">Enter Title </label>
										<div class="input-group"> 
											
												<div class="input-group"> 
													<input type="text" name="servicesTitle" class="form-control " id="inputLastName1" placeholder="" />
												</div>
												</div>

												<span style="color:red">@error('servicesTitle'){{ $message }}@enderror</span>
									  	  </div>
											  <div class="col-md-6">
												<label for="inputLastName1" class="form-label">Upload Services Image</label>
												<div class="input-group"> 
													<input type="file" name="servicesImage" class="form-control " id="inputLastName1" placeholder="" />
												</div>
												<span style="color:red">@error('servicesImage'){{ $message }}@enderror</span>
											  </div>
												
									  		<div class="col-md-12">
												<div class="form-group">
													<label>Description</label>
													<textarea name="servicesDesc" col="10" row="10" id="editor2" contenteditable="true" class="inline-editor" style="border:black"></textarea>
													</div>
													<span style="color:red">@error('servicesDesc'){{ $message }}@enderror</span>
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
				<div class="page-content">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Id</th>
										<th>Testimonial Image</th>
										<th>Testimonial Description</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@if($getServicesList)
										@php $i=1; @endphp
											@foreach ($getServicesList as $value)
									<tr>
										<td>{{$i++ }}</td>
										<td><img src="{{url('servicesImage/'.$value->servicesImage)}}" width="100px;" height="100px;"></td>
										<td>@php echo substr($value->servicesDesc,0,100) @endphp</td>
										<td>
											<a href="{{ url('Servicesedit/'.$value->serviceId) }}"><i class="fadeIn animated bx bx-message-square-edit" style="font-size:30px;"></i></a>
											<form class="" method="post" onclick="return check()" action="{{ url('deleteServices')}}" >
											@csrf
												<input type="hidden" name="serviceId" value="{{$value->serviceId }} " >
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


<script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    CKEDITOR.disableAutoInline = true;
    CKEDITOR.replace('editor2', {
        height: 400,
        extraPlugins: 'sourcedialog',
        removePlugins: 'sourcearea',
        removeButtons: 'PasteFromWord'
    });


	$(document).ready(function() {
		var table = $('#example2').DataTable( {
			lengthChange: false,
			buttons: [ 'copy', 'excel', 'pdf', 'print']
		} );
	 
		table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
	} );

	function check() {

		if(confirm("Are You Sure You Want To Delete")==true)
        {
            return true;
        }else{
            return false;
        }
	}


</script>

@if(isset($color))
	<script type="text/javascript">
		setTimeout(function() {
			window.location = "{{ url('addservices') }} ";  
	}, 5000);

</script>
@endif


<script>
        $(document).ready(function() {
          $("#st1").hover(function() {
              $(".fa-star").css("color", "black");
              $("#st1").css("color", "yellow");
              $("#testRate").val(1);

          });
          $("#st2").hover(function() {
              $(".fa-star").css("color", "black");
              $("#st1, #st2").css("color", "yellow");
              $("#testRate").val(2);

          });
          $("#st3").hover(function() {
              $(".fa-star").css("color", "black")
              $("#st1, #st2, #st3").css("color", "yellow");
              $("#testRate").val(3);

          });
          $("#st4").hover(function() {
              $(".fa-star").css("color", "black");
              $("#st1, #st2, #st3, #st4").css("color", "yellow");
              $("#testRate").val(4);

          });
          $("#st5").hover(function() {
              $(".fa-star").css("color", "black");
              $("#st1, #st2, #st3, #st4, #st5").css("color", "yellow");
              $("#testRate").val(5);

          });
        });
    </script>

