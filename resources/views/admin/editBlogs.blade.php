<?php

$session = \Config\Services::session();
$usersession['usersession'] = $session->get('adminsession');
echo view('activity_header');?>
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
								<?php if($getEditBlogList){ ?>
								<form class="row g-3" action="<?php echo base_url('home/editblogs'); ?>" method="post" enctype= multipart/form-data >
									<input type="hidden" name="blogId" value="<?php echo $getEditBlogList[0]['blogId']?>">
									<input type="hidden" name="oldBlogImage" value="<?php echo $getEditBlogList[0]['blogImage']?>">
									<div class="col-md-6">
										<label for="inputLastName1" class="form-label">Enter Blog Title</label>
										<div class="input-group"> 
											<input type="text" name="blogTitle" value="<?php echo $getEditBlogList[0]['blogTitle']; ?>" class="form-control " id="inputLastName1" placeholder="Enter category name" />
										</div>
											<span style="color:red"><?php if(isset($validation)){ echo  $validation->getError('blogTitle');}  ?></span>
									</div>


									<div class="col-md-6">
										<label for="inputLastName1" class="form-label">Upload Blog Image</label>
										<div class="input-group"> 
											<input type="file" name="blogImage" class="form-control border-start-0" id="inputLastName1" placeholder="First Name" />
										</div>
										<span style="color:red"><?php if(isset($errors)) { echo $errors; }; ?></span>
									</div>

									<div class="col-md-6">
										<label for="inputLastName1" class="form-label">Enter Blog Date</label>
										<div class="input-group"> 
											<input type="date" name="blogDate" class="form-control" id="" value="<?php echo $getEditBlogList[0]['blogDate']; ?>" placeholder="Blog Date" />
										</div>
										<span style="color:red"><?php if(isset($validation)){ echo  $validation->getError('blogDate');}  ?></span>
									</div>
									<div class="col-md-6">
										<div class="input-group">
											<img style="width:100px;height:100px;" src="<?php echo base_url('blogsImage/'.$getEditBlogList[0]['blogImage'])?>">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
	                                            <label>Description</label>
	                                            <textarea name="description" col="10" row="10" id="editor2" contenteditable="true" class="inline-editor" style="border:black"><?php echo $getEditBlogList[0]['description']; ?></textarea>
	                                            <span style="color:red"></span>
	                                    </div>
	                                    <span style="color:red"><?php if(isset($validation)){ echo  $validation->getError('description');}  ?></span>
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
			window.location = "<?php echo base_url('home/blogs');?>";  
	}, 5000);

</script>
<?php } ?>