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


<body onload="info_noti()">
	<div class="wrapper">
		<?php echo view('sidebar',$usersession); ?>
		<?php echo view('sidebarheader',$usersession); ?>
		<div class="page-wrapper">
			<div class="page-content">
				<div class="card">
					<div class="card-body">
						<div class="card border-top border-0 border-4 border-danger">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-danger"></i>
									</div>
									<h5 class="mb-0 text-danger">Edit Blogs On Front Website</h5>
								</div>
								<hr>
								<?php if($getTestimonialList){ ?>
								<form class="row g-3" action="<?php echo base_url('home/editTestmonial'); ?>" method="post" enctype= multipart/form-data >
									<input type="hidden" name="testId" value="<?php echo $getTestimonialList[0]['testId']?>">
									<input type="hidden" name="oldTestiImage" value="<?php echo $getTestimonialList[0]['testiImage']?>">
									<div class="col-md-6">
										<label for="" class="form-label">Enter Start ( Given Star : <span style="font-size:20px;font-weight: 800;color:red"><?php echo $getTestimonialList[0]['testRate']; ?></span> ) </label>
										<div class="input-group"> 
											<input type="hidden" name="testRate" value="<?php echo $getTestimonialList[0]['testRate']; ?>" class="form-control " id="testRate" placeholder="Enter category name" />
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
											<input type="file" name="testiImage" class="form-control border-start-0" id="inputLastName1" placeholder="First Name" />
										</div>
										<span style="color:red"><?php if(isset($errors)) { echo $errors; }; ?></span>
									</div>
									<div class="col-md-6">
										<label for="inputLastName1" class="form-label">Parent Name</label>
										<div class="input-group"> 
											<input type="text" name="parentName" class="form-control border-start-0" id="inputLastName1" placeholder="First Name" />
										</div>
										<span style="color:red"><?php if(isset($errors)) { echo $errors; }; ?></span>
									</div>

									<div class="col-md-6">
										<label for="inputLastName1" class="form-label">Enter Blog Date</label>
										<div class="input-group"> 
											<input type="date" name="testDate" class="form-control" id="" value="<?php echo $getTestimonialList[0]['testDate']; ?>" placeholder="Blog Date" />
										</div>
										<span style="color:red"><?php if(isset($validation)){ echo  $validation->getError('testDate');}  ?></span>
									</div>
									<div class="col-md-6">
										<div class="input-group">
											<img style="width:100px;height:100px;" src="<?php echo base_url('testiImage/'.$getTestimonialList[0]['testiImage'])?>">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
										<label>Description</label>
										<textarea name="testDesc" col="10" row="10" id="editor2" contenteditable="true" class="inline-editor" style="border:black"><?php echo $getTestimonialList[0]['testDesc']; ?></textarea>
										<span style="color:red"></span>
										</div>
										<span style="color:red"><?php if(isset($validation)){ echo  $validation->getError('testDesc');}  ?></span>
									</div>
									<span style="color:<?php if(isset($color)){ echo $color; } ?>"><?php if(isset($error)) { echo $error; }; ?></span>
									<div class="col-12">
										<button type="submit" name="submit" value="submit" class="btn btn-danger px-5">Update</button>
									</div>
								</form>
								<?php }else{
									echo "No Data Found";
								} ?>
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
	<script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>

	<script>
    CKEDITOR.disableAutoInline = true;
    CKEDITOR.replace('editor2', {
        height: 400,
        extraPlugins: 'sourcedialog',
        removePlugins: 'sourcearea',
        removeButtons: 'PasteFromWord'
    });

</script>

<?php if(isset($color)){ ?>
	<script type="text/javascript">
		setTimeout(function() {
			window.location = "<?php echo base_url('home/testimonial');?>";  
	}, 5000);

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
    