@include('admin.activity_header');
@php
$res = Session::get('usersession');
@endphp
	<!--wrapper-->
	<div class="wrapper">
	@include('admin.sidebar');
		<!--start header -->
		@include('admin.sidebarheader');
		<!--end header -->
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
									<h5 class="mb-0 text-danger">Create Blog</h5>
								</div>
								<hr>
								<div class="col-md-12">
									
								<form class="row g-3" action="blogs" method="post" enctype= "multipart/form-data" >
									@csrf
									<div class="col-md-6">
										<label for="inputLastName1" class="form-label">Enter Blog Title</label>
										<div class="input-group"> 
											<input type="text" name="blogTitle" class="form-control " id="inputLastName1" placeholder="Enter category name" />
										</div>
										<span style="color:red">@error('blogTitle'){{ $message }}@enderror</span>
									</div>

									<div class="col-md-6">
										<label for="inputLastName1" class="form-label">Upload Blog Image</label>
										<div class="input-group"> 
											<input type="file" name="blogImage" class="form-control border-start-0" id="inputLastName1" placeholder="First Name" />
										</div>
										<span style="color:red">@error('blogImage'){{ $message }}@enderror</span>
									</div>
									<div class="col-md-6">
										<label for="inputLastName1" class="form-label">Enter Blog Date</label>
										<div class="input-group"> 
											<input type="date" name="blogDate" class="form-control" id="" placeholder="Blog Date" />
										</div>
										<span style="color:red">@error('blogDate'){{ $message }}@enderror</span>
									</div>
									<div class="col-md-12">
										<div class="form-group">
	                                            <label>Description</label>
	                                            <textarea name="description" col="10" row="10" id="editor2" contenteditable="true" class="inline-editor" style="border:black"></textarea>
	                                            
	                                    </div>
	                                    <span style="color:red">@error('description'){{ $message }}@enderror</span>
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
										<th>Blog Title Name</th>
										<th>Blog Image</th>
										<th>Blog Description</th>
										<th>Blog Date</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@if($getBlogList)
									@php $i=1; @endphp
									@foreach ($getBlogList as $key => $value)
											
									<tr>
										<td>{{ $i++ }}</td>
										<td>{{ $value->blogTitle }}</td>
										<td><img src="{{url('blogImage/'.$value->blogImage)}}" width="100px;" height="100px;"></td>
										<td>@php echo substr($value->description,0,100) @endphp </td>
										<td>{{ $value->blogDate }}</td>
										<td>
											<a href="{{ url('editBLog/'.$value->blogId) }}"><i class="fadeIn animated bx bx-message-square-edit" style="font-size:30px;"></i></a>
											<form class="" method="POST" onclick="return check()" action="deleteblog" >
											@csrf
												<input type="hidden" name="blogId" value="{{ $value->blogId }} " >
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
		$('#example').DataTable();
	  } );

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
			window.location = "{{ url('add-blogs') }} ";  
	}, 5000);

</script>
@endif


