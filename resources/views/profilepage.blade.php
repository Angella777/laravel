<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Profile</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/profilepage.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script> -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
     integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>

@if (Session::has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="class" data-dismiss="alert"><i class="fa fa-times"></i>
            </div>    
        @endif
<hr>

<div class="container bootstrap snippet">
  
    <div class="row">
  		<div class="col-sm-10"><h1>Edit Profile</h1></div>
    	<div class="col-sm-2"><a href="/" class="pull-right"><img title="Back to home page" class="img-circle img-responsive" src="../logoo.png"></a></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              
          <div class="pic">
                <img src="http://localhost/laravel/public/image/{{$checkinfo['image']}}" value="" class="avatar img-circle img-thumbnail" alt="avatar" onClick="triggerClick()" id="profileDisplay" name="image" />
                 <input hidden type="file" name="profileImage" value="" onChange="displayImage(this)" id="profileImage" class="form-control">
            </div> <p style="text-align:center">Upload different photo</p>

     
               
          <div class="panel panel-default">
            <div class="panel-heading">Subject: <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body">{{$checkinfo['subject']}}</div>
          </div>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Final Marks <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Mark1</strong></span>{{$mark1}}</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Mark2</strong></span> {{$mark2}}</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Mark3</strong></span> {{$mark3}}</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Mark4</strong></span> {{$mark4}}</li>
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">Average</div>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i>{{$avg}} <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
       
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Edit Profile</a></li>
              </ul>
           
              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="/user/profilepage" method="post" id="registrationForm">
                  @csrf
                  @if(session()->has('error'))
                        <div class="alert" role="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            {{ session()->get('error') }}
                        </div>
                    @endif
                  <input type="hidden" name="id" value="{{$checkinfo['id']}}">
                      <div class="form-group">
                        
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4> <span style="color:red"> @error('firstname'){{$message}}@enderror</span></label>
                              <input type="text" class="form-control" value="{{$checkinfo['firstname']}}" name="firstname" id="firstname" >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4><span style="color:red"> @error('lastname'){{$message}}@enderror</span></label>
                              <input type="text" class="form-control" name="lastname"  value="{{$checkinfo['lastname']}}" id="lastname">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Username</h4><span style="color:red"> @error('lastname'){{$message}}@enderror</span></label>
                              <input type="text" class="form-control" name="username"  value="{{$checkinfo['username']}}" id="lastname">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Telephone</h4><span style="color:red">@error('phone'){{$message}}@enderror</span></label>
                              <input type="text" class="form-control" name="phone" id="phone"  value="{{$checkinfo['telephone']}}">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Email</h4><span style="color:red">@error('email'){{$message}}@enderror</span></label>
                              <input type="email" class="form-control" name="email" id="email"  value="{{$checkinfo['email']}}">
                          </div>
                      </div>
                    
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="address"><h4>Address</h4><span style="color:red">@error('address'){{$message}}@enderror</span></label>
                              <input type="text" class="form-control" name="address"  value="{{$checkinfo['address']}}">
                          </div>
                      </div>
                    
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                   <button class="btn btn-lg" type="cancel"><i class="glyphicon glyphicon-cancel"><a href="/user/{{$checkinfo['username']}}"></i> Back</a></button>
                            </div>
                      </div>
                	</form>
              <hr>
              
            </div>

        </div>
    </div>
<script>
    function triggerClick(e) {
        document.getElementById('profileImage').click();
    }

    function displayImage(e) {
        if (e.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e){
            document.getElementById('profileDisplay').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
        }
    }
</script>

                                                      