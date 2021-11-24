@php
$res = Session::get('usersession');
@endphp

<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{url('admin/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">@php echo $res[0]->UserName @endphp</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			
			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;">
						<div class="menu-title">Dashboard</div>
					</a>
				</li>			
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">Generate Card</div>
					</a>

					<ul>
						<li> <a href="{{url('report-card')}}"><i class="bx bx-right-arrow-alt"></i>Student Report-card</a></li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">Manage Assignment</div>
					</a>
					<ul>
						<li> <a href="{{url('/assigments/create')}}"><i class="bx bx-right-arrow-alt"></i>Add-Assignment</a></li>
						<li> <a href="{{url('/assigments')}}"><i class="bx bx-right-arrow-alt"></i>View-Assignment</a></li>
					</ul>
				</li>	
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">Student's Info</div>
					</a>
					<ul>
						<li> <a href="{{url('students')}}"><i class="bx bx-right-arrow-alt"></i>Student list</a></li>
					</ul>
				</li>	
		

			
				

				

				

				








			</ul>
		</div>
