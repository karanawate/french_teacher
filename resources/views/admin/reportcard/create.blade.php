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
		@if(Session::has('success'))
			<div class="alert alert-success">{{ Session::get('success')}}</div>
		@endif
		<form action="{{ route('report-card.store') }}" method="post">
			@csrf
			<div class="page-wrapper">
				<div class="page-content">
					<div class="card">
						<div class="card-body">
							<div class="card border-top border-0 border-4 border-danger">
								<div class="card-body p-5">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-danger"></i>
										</div>
										<h5 class="mb-0 text-danger">Create Report</h5>
									</div>
									<hr>
									<div class="row">
										<div class="form-group col-sm-3">
											<label for="username"> I enjoy my work</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="first_que" id="one" required>
													<label class="form-check-label" style="margin-left: 20px;" for="one" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
										<div class="form-group col-sm-3">
											<label for="username"> I love to play</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="second_que" id="second_que" required>
													<label class="form-check-label" style="margin-left: 20px;" for="second_que" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
										<div class="form-group col-sm-3">
											<label for="username"> I do physical Exercise</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="third_que" id="third_que" required>
													<label class="form-check-label" style="margin-left: 20px;" for="third_que" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
										<div class="form-group col-sm-3">
											<label for="username"> I am independent*</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="four_que" id="one" required>
													<label class="form-check-label" style="margin-left: 20px;" for="four_que" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
									</div>
									<!-- */ second  row */ -->
									<div class="row">
										<div class="form-group col-sm-3">
											<label for="username"> I listen to Instructions*</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="five_que" id="one" required>
													<label class="form-check-label" style="margin-left: 20px;" for="one" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
										<div class="form-group col-sm-3">
											<label for="username"> I Know my table Manners</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="six_que" id="second_que" required>
													<label class="form-check-label" style="margin-left: 20px;" for="second_que" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
										<div class="form-group col-sm-3">
											<label for="username"> I can sing/dance</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="seven_que" id="third_que" required>
													<label class="form-check-label" style="margin-left: 20px;" for="third_que" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
										<div class="form-group col-sm-3">
											<label for="username"> I can draw and color</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="eight_que" id="one" required>
													<label class="form-check-label" style="margin-left: 20px;" for="four_que" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
									</div>
									<!-- third query -->
									<div class="row">
									<span><h5>COGNITIVE & LANGUAGE DEVLOPMENT</h5></span>
										<div class="form-group col-sm-2">
											<label for="username"> Reading*</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="nine_que" id="nine_que" required>
													<label class="form-check-label" style="margin-left: 20px;" for="one" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
										<div class="form-group col-sm-2">
											<label for="username">I General Awarness*</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="ten_que" id="ten_que" required>
													<label class="form-check-label" style="margin-left: 20px;" for="second_que" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
										<div class="form-group col-sm-2">
											<label for="username"> Recitation</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="eleven_que" id="eleven_que" required>
													<label class="form-check-label" style="margin-left: 20px;" for="third_que" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
										<div class="form-group col-sm-2">
											<label for="username">Story Narration*</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="tweele_que" id="tweele_que" required>
													<label class="form-check-label" style="margin-left: 20px;" for="four_que" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
										<div class="form-group col-sm-2">
											<label for="username"> Conversation</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="threen_que" id="threen_que" required>
													<label class="form-check-label" style="margin-left: 20px;" for="four_que" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
									</div>
									<!-- four row -->
									<div class="row">
									<span><h5>IN WRITING MY SCORE IS</h5></span>
										<div class="form-group col-sm-2">
											<label for="username"> English*</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="english" id="english" required>
													<label class="form-check-label" style="margin-left: 20px;" for="one" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
										<div class="form-group col-sm-2">
											<label for="username">Maths*</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="maths" id="maths" required>
													<label class="form-check-label" style="margin-left: 20px;" for="second_que" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
										<div class="form-group col-sm-2">
											<label for="username"> Hindi</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="hindi" id="hindi" required>
													<label class="form-check-label" style="margin-left: 20px;" for="third_que" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
									
										
									</div>
									<!-- physically  Personallity Devlopment -->
									<div class="row">
									<div><h5>PHYSICAL/ PERSONALITY DEVLOPEMENT</h5></div>
										<div class="form-group col-sm-2">
											<label for="username"> Neat and Tidy*</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="dev_one" id="dev_one" required>
													<label class="form-check-label" style="margin-left: 20px;" for="one" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
										<div class="form-group col-sm-2">
											<label for="username">Active*</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="dev_two" id="dev_two" required>
													<label class="form-check-label" style="margin-left: 20px;" for="second_que" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
										<div class="form-group col-sm-2">
											<label for="username"> Healthy</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="dev_three" id="dev_three" required>
													<label class="form-check-label" style="margin-left: 20px;" for="third_que" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
										<div class="form-group col-sm-2">
											<label for="username">A good co-ordinator</label><span style="color:red">*</span>
											<div class="grade-align">
												@foreach($cards as $card) 
												<div>
													<input class="form-check-input" type="radio" value="{{ $card->Grade }}" name="dev_four" id="dev_four" required>
													<label class="form-check-label" style="margin-left: 20px;" for="third_que" >{{ $card->Grade }}</label>
												</div>
												@endforeach	
											</div>
										</div>
										
										<div >
											<div class="col-md-12 ">
											<label for="username">Remark</label><span style="color:red">*</span>
											<div class="grade-align ">
												@foreach($cards as $card) 
												<div class="inline">
													<input class="form-check-input" type="radio" value="{{ $card->remark }}" name="dev_four" id="dev_four" required>
													<label class="form-check-label" style="margin-left: 20px;" for="third_que" >{{ $card->remark }}</label>
												</div>
												@endforeach	
											</div>
											</div>
										</div>
									
										
									</div>
								</div>
							</div>
							<input type ="submit" class="btn btn-primary w-md waves-effect waves-light" name="submit" value="submit" type="submit">
						</div>
					<!-- table -->
					
				</div>
				</div>
			</div>
        </form>	

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

