<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Admin page</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
	
</head>

<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<div class="topnav">
    <a href="/"><img src="logoo.png" width="40" height="30"></a>
    
    <a  href="/">Home</a>
    <a href="about">About</a>
    <a href="Events">Events</a>
    <a href="contactform">Contact</a>
	<b><a class="btn btn-info" href={{route('logout')}} >logout</a></b>
   
  </div>
  
  
  <form class="input-group" action="{{route('admin')}}" method="GET">
  <div class="col-md-6 offset-md-3">
		<div class="card-body" style= "padding-top:30px; padding-bottom:10px;">

			<input type="text" class="form-control typeahead" name="search" value="{{request()->query('search') }}" placeholder="Search first name here...."/><button type="submit"  class="btn btn-primary" style= "position:relative; left:610px; top:-39px;" >Search</button>		
		</div>	
  </div>
  		
	</form>
	
	<!--  -->
	<div class="container-fluid">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-sm-2">
							<h2>Manage <b>Students</b></h2>
						</div>
						<div class="col-sm-6" style= "left:30%;">
							<a href="addstudentmodal" class="btn btn-success"><i class="material-icons">&#xE147;</i><span>Add New Students</span></a>
							
							
							@if(isset($student))
							@endif
						</div>
						
						</div>
					</div>
				</div>

				<table class="table table-striped table-hover" id="datatable">
					<thead>
						<tr>
							<th>ID</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
							<th>Gender</th>
							<th>Email</th>
							<th>Address</th>
							<th>Phone</th>
							<th>Subject</th>
							<th>Mark1</th>
							<th>Mark2</th>
							<th>Mark3</th>
							<th>Mark4</th>
							<th>Average</th>
							<th>Status</th>
							<th>Actions</th>

						</tr>
						<?php $count = 0;?>
						@foreach ($users as $item)
						<?php ++$count;?>
						
					</thead>

					<tbody>
					
					
						<tr>

							<td>{{$item['id']}}</td>
							<td>{{$item['firstname']}}</td>
							<td>{{$item['lastname']}}</td>
							<td>{{$item['username']}}</td>
							<td>{{$item['gender']}}</td>
							<td>{{$item['email']}}</td>
							<td>{{$item['address']}}</td>
							<td>{{$item['telephone']}}</td>
							<td>{{$item['subject']}}</td>
							<td>{{$item['mark1']}}</td>
							<td>{{$item['mark2']}}</td>
							<td>{{$item['mark3']}}</td>
							<td>{{$item['mark4']}}</td>
							<td>{{$item['average']}}</td>
							
							
							<td><span class="status text-success">&bull;</span> {{$item['status']}}</td>
							<td>
								<?php $test = $item['id']; ?>
								<a onclick="edit({{ $test }},{{$count}})" href="#editEmployeeModal" data-target="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
								
								<a onclick="deletes({{ $test }})" href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
							</td>
							
						</tr>
						
						<!-- Edit Modal HTML -->
						<div id="editEmployeeModal{{$count}}" class="modal fade">
							<div class="modal-dialog">
								<div class="modal-content">
									<form>
										<div class="modal-header">
											<h4 class="modal-title">Edit Student</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										</div>
										<div class="modal-body">
											<div class="form-group">
											<label>First Name</label>
												<input type="text" name="First_Name" value="" class="form-control" placeholder="Enter First Name">
												<span style="color:red"> @error('First_Name'){{$message}}@enderror</span><br>
											</div>
											<div class="form-group">
											<label>Last Name</label>
												<input type="text" name="Last_Name" value="" class="form-control" placeholder="Enter Last Name">
												<span style="color:red"> @error('Last_Name'){{$message}}@enderror</span><br>
											</div>

											<div class="form-group">
											<label>Gender</label>
											<select id="gender" name="gender" class="form-control" class="form-control" value="">
												<option value="" disabled selected hidden>Choose a gender</option>
												<option value="female">Female</option>
												<option value="male">Male</option>
											</select>
											
											<span style="color:red"> @error('gender'){{$message}}@enderror</span><br>
											</div>
											<div class="form-group">
												<label>Date of Birth</label>
												<input type="date" name="Date_of_Birth" class="form-control" value=""></span>
												<span style="color:red"> @error('Date_of_Birth'){{$message}}@enderror</span><br>
											</div>
											
											<div class="form-group">
												<label>Address</label>
												<input type="text" name="address" value="" class="form-control" placeholder="Enter Address">
												<span style="color:red"> @error('address'){{$message}}@enderror</span><br>
											</div>
											<div class="form-group">
												<label>Subject</label>
												<select id="subject" name="subject" class="form-control"  class="form-control" >
													<option value="" disabled selected hidden>Choose a subject</option>
													<option value="C">C</option>
													<option value="Java">Java</option>
													<option value="SQL">SQL</option>
													<option value="Phython">Python</option>
													<option value="HTML/CSS">HTML/CSS</option>
												</select>
												<span style="color:red"> @error('subject'){{$message}}@enderror</span><br>
											</div>

											<div class="form-group">
											<label>Email</label>
											<input type="text" name="email" value="" class="form-control"  placeholder="Enter Email">
											<span style="color:red"> @error('email'){{$message}}@enderror</span><br>
											</div>
											
											<div class="form-group">
											<label>Telephone No.</label>
											<input type="text" name="telephone" value="" class="form-control"  placeholder="000-000-0000">
											<span style="color:red"> @error('telephone'){{$message}}@enderror</span><br>
											</div>
											<div class="form-group">
												<label>Mark 1</label>
												<input type="text" name="mark1" class="form-control" placeholder="Enter mark" >
												<span style="color:red"> @error('mark1'){{$message}}@enderror</span><br>
											</div>
											<div class="form-group">
												<label>Mark 2</label>
												<input type="text" class="form-control" name="mark2" placeholder="Enter mark" >
												<span style="color:red"> @error('mark2'){{$message}}@enderror</span><br>
											</div>
											<div class="form-group">
												<label>Mark 3</label>
												<input type="text" class="form-control" name="mark3" placeholder="Enter mark" >
												<span style="color:red"> @error('mark3'){{$message}}@enderror</span><br>
											</div>
											<div class="form-group">
												<label>Mark 4</label>
												<input type="text" class="form-control" name="mark4" placeholder="Enter mark" >
												<span style="color:red"> @error('mark4'){{$message}}@enderror</span><br>
											</div>
											<div class="form-group">
												<label>Average</label>
												<input type="text" class="form-control" name="avg" placeholder="Enter average" >
												<span style="color:red"> @error('avg'){{$message}}@enderror</span><br>
											</div>
											<div class="form-group">
												<label>Status</label>
							
												<select id="gender" name="status" class="form-control" class="form-control" value="">
												<option value="" disabled selected hidden>Choose status of student</option>
												<option value="Active">Active</option>
												<option value="inactive">Inactive</option>
											</select>
											<span style="color:red"> @error('status'){{$message}}@enderror</span><br>
											</div>
											<div class="modal-footer">
										<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
										<input type="submit" class="btn btn-info" value="Save">
									</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- Delete Modal HTML -->
						<div id="deleteEmployeeModal" class="modal fade">
							<div class="modal-dialog">
								<div class="modal-content">
									<form action="delete" method="POST">
										@csrf
										<div class="modal-header">
											<h4 class="modal-title">Delete Student</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										</div>
										<div class="modal-body">
											<p>Are you sure you want to delete this Record?</p>
											<p class="text-warning"><small>This action cannot be undone.</small></p>
										</div>
										<div class="modal-footer">
											<input hidden type="text" name="id" id="test" value="">
											<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
											<input type="submit" class="btn btn-danger" value="Delete">
										</div>
									</form>
								</div>
							</div>
						</div>
						@endforeach
						
						
							
           				<div></div>
					
					</tbody>

				</table>
				@forelse ($users as $item)
						
						@empty
						<p class="text-center">
							No results found for <strong>{{ request()->query('search') }}</strong>
						</p>
						@endforelse
			</div>
			{{ $users->appends(['search' => request()->query('search') ])->links() }}
		</div>
	</div>
		

	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
	<script>
		function deletes(clr) {
			var check = document.getElementById('test').value = clr;
			console.log(check);
		}
		function edit(clr,cout) {
			var value = 'editEmployeeModal'
			var value1 = value.concat(cout)
			document.getElementById(value1).style.display = 'block'
			console.log(cout);
		}
	</script>


</body>

</html>