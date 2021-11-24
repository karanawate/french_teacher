<?php 

$session = \Config\Services::session();
$usersession['usersession'] = $session->get('adminsession');
echo view('activity_header');?>
<body onload="info_noti()">
	<!--wrapper-->
	<div class="wrapper">
		<?php echo view('sidebar',$usersession); ?>
		<!--start header -->
		<?php echo view('sidebarheader',$usersession); ?>
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
									<h5 class="mb-0 text-danger">Add Category</h5>
								</div>
								<hr>
								<div class="col-md-12">
									
								<form class="row g-3" action="<?php echo base_url('home/add_courses'); ?>" method="post" enctype= multipart/form-data >
									<div class="col-md-6">
										<label for="inputLastName1" class="form-label">Enter Category Name</label>
										<div class="input-group"> 
											<input type="text" name="catName" class="form-control " id="inputLastName1" placeholder="Enter category name" />
										</div>
											<span style="color:red"><?php if(isset($validation)){ echo  $validation->getError('catName');}  ?></span>
									</div>
									<div class="col-md-6">
										<label for="inputLastName1" class="form-label">Enter Sub Category Name</label>
										<div class="input-group"> 
											<input type="text" name="subCatName" class="form-control " id="inputLastName1" placeholder="Enter sub category name" />
										</div>
											<span style="color:red"><?php  if(isset($validation)){ echo $validation->getError('subCatName'); } ?></span>
									</div>
									<div class="col-md-6">
										<label for="inputLastName1" class="form-label">Enter Course Price</label>
										<div class="input-group"> 
											<input type="text" name="catPrice" class="form-control " id="inputLastName1" placeholder="Enter Course Price " />
										</div>
											<span style="color:red"><?php  if(isset($validation)){ echo $validation->getError('catPrice'); } ?></span>
									</div>
									<div class="col-md-6">
										<label for="inputLastName1" class="form-label">Enter Course Period</label>
										<div class="input-group"> 
											<input type="text" name="catcoursePeriod" class="form-control " id="inputLastName1" placeholder="Enter Course Period" />
										</div>
											<span style="color:red"><?php  if(isset($validation)){ echo $validation->getError('catcoursePeriod'); } ?></span>
									</div>


									<span style="color:<?php if(isset($color)){ echo $color; } ?>"><?php if(isset($error)) { echo $error; }; ?></span>
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
										<th>category Name</th>
										<th>Sub category Name</th>
										<th>Course Price</th>
										<th>Course Period</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php if($getCourseList){
										$i=1;
										foreach ($getCourseList as $key => $value) {
											
									 ?>
									<tr>
										<td><?php echo $i++; ?></td>
										<td><?php echo $value['catName']; ?></td>
										<td><?php echo $value['subCatName']; ?></td>
										<td><?php echo $value['catPrice']; ?></td>
										<td><?php echo $value['catcoursePeriod']; ?></td>
										<td>
											<form class="" method="post" onclick="return check()" action="<?php echo base_url('home/deleteCourses');?>" >
												<input type="hidden" name="catId" value="<?php echo $value['catId'] ?> " >
												<button type="submit" name="submit" value="submit" class="fadeIn animated bx bx-trash-alt" style="font-size:30px;display: contents;"></button>
											</form>
										</td>
										
									</tr>
									<?php } } ?>
												
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
	<?php echo view('themestyle.php'); ?>
	<?php echo view('footer.php'); ?>

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

	
<?php if(isset($color)){ ?>


	<script type="text/javascript">
		setTimeout(function() {
			window.location = "<?php echo base_url('home/add_courses');?>";  
	}, 5000);

</script>
<?php } ?>
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