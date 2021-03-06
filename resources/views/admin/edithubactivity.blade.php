<?php 
$session = \Config\Services::session();
$usersession['usersession'] = $session->get('adminsession');
echo view('activity_header');?>
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	 .fa-star {
        font-size : 40px;
        align-content : center;
    }
</style>
<body >
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
									<h5 class="mb-0 text-danger">Edit Hub Activity</h5>
								</div>
								<hr>
								<div class="col-md-12">
									<?php if($getHubactivityList){

										// echo "<pre>";
										// print_r($getHubactivityList);
									 ?>
								<form class="row g-3" action="<?php echo base_url('home/edithubactivity'); ?>" method="post" enctype= multipart/form-data >
									
									<div class="col-md-6">
										<label for="" class="form-label">Enter Start ( Given Star : <span style="font-size:20px;font-weight: 800;color:red"><?php echo $getHubactivityList[0]['testRate']; ?></span> ) </label>
										<div class="input-group"> 
											<input type="hidden" name="testRate" value="" class="form-control " id="testRate" >
												<div class = "con">
										       <i class = "fa fa-star" aria-hidden = "true" id = "st1"></i>
										       <i class = "fa fa-star" aria-hidden = "true" id = "st2"></i>
										       <i class = "fa fa-star" aria-hidden = "true" id = "st3"></i>
										       <i class = "fa fa-star" aria-hidden = "true" id = "st4"></i>
										       <i class = "fa fa-star" aria-hidden = "true" id = "st5"></i>
										     </div>
											  </div>
												<span style="color:red"><?php if(isset($validation)){ echo  $validation->getError('testRate');}  ?></span>
									  	  </div>
									  	  <div class="col-md-6">
													<label for="inputLastName1" class="form-label">Upload Testimonial Image</label>
													 <div class="input-group"> 
													  <img src="<?php echo base_url('activityImage/'.$getHubactivityList[0]['activityImage'])?>" width="100px;" height="100px;">
												   </div>
												 	 <span style="color:red"><?php if(isset($errors)) { echo $errors; }; ?></span>
											  </div>

											  <div class="col-md-6">
													<label for="inputLastName1" class="form-label">Upload Testimonial Image</label>
													 <div class="input-group"> 
													   <input type="file" name="activityImage" class="form-control border-start-0" id="inputLastName1" placeholder="" />
												   </div>
												 	 <span style="color:red"><?php if(isset($errors)) { echo $errors; }; ?></span>
											  </div>

											  <div class="col-md-6">
													<label for="inputLastName1" class="form-label">Enter Testimonial Date</label>
														<div class="input-group"> 
															<input type="date" name="testDate" value="<?php echo $getHubactivityList[0]['testDate']; ?>" class="form-control" id="" placeholder="Testimonial Date" />
														</div>
														<span style="color:red"><?php if(isset($validation)){ echo  $validation->getError('testDate');}  ?></span>
										  	</div>

									  		<div class="col-md-6">
														<div class="form-group">
		                          <label class="form-label" >Select Category</label>
		                          <select class="form-control" name="fk_catId" id="getSubcategory">
		                          	<option value="<?php echo $getHubactivityList[0]['fk_catId']; ?>"><?php echo $getHubactivityList[0]['catName']; ?></option>
		                          		<?php if($getcategoryList) { 
		                          				foreach ($getcategoryList as $key => $value) {
		                          			?>
		                        	  	<option value="<?php echo $value['catId']; ?>"><?php echo $value['catName']; ?></option>
		                          		<?php } }?>
		                          </select>
				                	  </div>
		                    	<span style="color:red"><?php if(isset($validation)){ echo  $validation->getError('fk_catId');}  ?></span>
		                   </div>

		                   <div class="col-md-6">
													<div class="form-group">
		                          <label class="form-label">Select Sub Category</label>
		                      	    <select class="form-control" name="fk_subcatId" id="takeSubcategory" >
		                      	    	<option value="<?php echo $getHubactivityList[0]['fk_subcatId']; ?>"><?php echo $getHubactivityList[0]['subCatName']; ?></option>
		                      	    </select>
				                  </div>
		                      <span style="color:red"><?php if(isset($validation)){ echo  $validation->getError('fk_subCatId');}  ?></span>
		                   </div>

		                   <div class="col-md-6">
												   <div class="form-group">
		                          <label class="form-label">Enter Price</label>
		                          <input class="form-control" name="takeprice" id="takeprice" value="" readonly="">		                          		
				                   </div>
		                    <span style="color:red"><?php if(isset($validation)){ echo  $validation->getError('takeprice');}  ?></span>
		                   </div>

											 <div class="col-12">
											<input type="hidden" name="catPrice" value="<?php echo $getHubactivityList[0]['catPrice']; ?>" >
											<input type="hidden" name="fk_subcatIds" value="<?php echo $getHubactivityList[0]['fk_subcatId']; ?>"  >
											<input type="hidden" name="activityImageold" value="<?php echo $getHubactivityList[0]['activityImage']; ?>">
											<input type="hidden" name="hubId" value="<?php echo $getHubactivityList[0]['hubId']; ?>">

												<button type="submit" name="submit" value="submit" class="btn btn-danger px-5">Submit</button>
										</div>
								  </form>
								<?php } ?>
								</div>
							</div>
						</div>
					</div>
				<!-- table -->
				
			   </div>
			</div>
		</div>
		<div class="overlay toggle-icon"></div>
		 <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<footer class="page-footer">
			<p class="mb-0">Copyright ?? 2021. All right reserved.</p>
		</footer>
	</div>
	<?php echo view('themestyle.php'); ?>
	<?php echo view('footer.php'); ?>


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


	
<?php if(isset($error)){ ?>
	<script type="text/javascript">
		swal("<?php if(isset($error)){ echo $error; } ?>");
		setTimeout(function() {
			window.location = "<?php echo base_url('home/addHubactivity');?>";  
	}, 2000);

</script>
<?php } ?>
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

    <script type="text/javascript">
    	
    	$(document).ready(function(){

    			$("#getSubcategory").change(function(){
    					var catId = $(this).val();
    							if(catId=="" || catId==null){
    								swal("Please Select Category First");
    							}else{

    									$.ajax({
    											type:"POST",
    											data:{catId:catId},
    											url:"<?php echo base_url('home/getsubcategory');?>",
    											success:function(res) {
    												var res = JSON.parse(res);
    												$("#takeSubcategory").html(res.html);
    												$("#takeprice").val(res.html1);
    											},
    											error:function(error) {
    													console.log(error);
    											}
   									});
    						}
    			});
    	});

    </script>

