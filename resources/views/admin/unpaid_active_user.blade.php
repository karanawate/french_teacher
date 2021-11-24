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
				<h6 class="mb-0 text-uppercase">Unpaid Activity User</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Full Name</th>
										<th>User Email</th>
										<th>Date</th>
										<th>Age</th>
										<th>Gender</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php if($gethubstudInactiveData){ 
										foreach ($gethubstudInactiveData as $key => $value) {
											
										
									?>
									<tr>
										<td><?php echo $value['studFullName'];?></td>
										<td><?php echo $value['studEmail'];?></td>
										<td><?php echo $value['studCreateDT'];?></td>
										<td><?php echo $value['studGender'];?></td>
										<td><?php if($value['studStatus']==1){ echo "Active";}else{ echo "De-Active";} ?></td>
										<td>Action</td>
									</tr>
									<?php }} ?>
									
								</tbody>
							</table>
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
	<!--end wrapper-->
	<!--start switcher-->
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

	
