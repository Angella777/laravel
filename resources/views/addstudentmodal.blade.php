<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/addstudent.css') }}">
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
</head>

<body style="background-image: url('../hand.jpg'); background-size: cover;" > 

    <div class="modal-dialog" id="addmodal">
        <div class="modal-content">
            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <form action="{{route('store-stud')}}" method="POST">
                @csrf
                <div class="modal-header">
                
                    <h4 class="modal-title">Add Student</h4>
                    <a class="btn-close" href="{{{ URL::route('admin') }}}"></a>
                    
                </div>
                <div class="modal-body">
                    <div class="form-group">
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
                        <label>Username</label>
                            <input type="text" name="username" value="" class="form-control" placeholder="Enter Last Name">
                            <span style="color:red"> @error('Last_Name'){{$message}}@enderror</span><br>
                        </div>
                        <div class="form-group">
                        <label>Gender</label>
                        <select id="gender" name="gender" class="form-control" class="form-control" value="">
                            <option value="" disabled selected hidden>Choose a gender</option>
                            <option  value="female">Female</option>
                            <option value="male">Male</option>
                        </select>
                        
                        <span style="color:red"> @error('gender'){{$message}}@enderror</span><br>
                        </div>
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control" value=""></span>
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
                            <input type="text" name="mark_1" class="form-control" placeholder="Enter mark" >
                            <span style="color:red"> @error('mark_1'){{$message}}@enderror</span><br>
                        </div>
                        <div class="form-group">
                            <label>Mark 2</label>
                            <input type="text" class="form-control" name="mark_2" placeholder="Enter mark" >
                            <span style="color:red"> @error('mark_2'){{$message}}@enderror</span><br>
                        </div>
                        <div class="form-group">
                            <label>Mark 3</label>
                            <input type="text" class="form-control" name="mark_3" placeholder="Enter mark" >
                            <span style="color:red"> @error('mark_3'){{$message}}@enderror</span><br>
                        </div>
                        <div class="form-group">
                            <label>Mark 4</label>
                            <input type="text" class="form-control" name="mark_4" placeholder="Enter mark" >
                            <span style="color:red"> @error('mark_4'){{$message}}@enderror</span><br>
                        </div>
                        <div class="form-group">
                            <label>Average</label>
                            <input type="text" class="form-control" name="avg" placeholder="Enter average" >
                            <span style="color:red"> @error('avg'){{$message}}@enderror</span><br>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
        
                            <select id="status" name="status" class="form-control" class="form-control" value="">
                            <option value="" disabled selected hidden>Choose status </option>
                            <option value="Active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        <span style="color:red"> @error('status'){{$message}}@enderror</span><br>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <a href="{{{ URL::route('admin') }}}" class="btn btn-info" role="button">Cancel</a>
                    <button id="submit" name="submit" class="btn btn-primary" value="1">Add Student</button>
                    </div>
            </form>
           
        </div>
    </div>
    </div>
</body>