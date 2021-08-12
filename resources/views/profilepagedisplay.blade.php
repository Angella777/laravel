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

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
</head>

<style>
    .row{
        font-size: 15px;
    }
    .btn{
        font-size: 20px;
    
    }
    h1{
        font-size: 90px;
        font-family:Alfa Slab One;
        font-weight: 70px;
        
    }
   
</style>
<hr>
@include('sweet::alert')
<a  class="btn btn-dark" href={{route('logout')}}>logout</a>
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-10"><h1>Welcome {{$checkinfo['username']}}</h1></div>
            <div class="col-sm-2"><a href="/" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="../logoo.png"></a></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
      <img src="image/{{$checkinfo['image']}}" style="max-width: 70%;  border-radius: 50%; " alt="user image" />
      
    
        
      </div></hr><br>

               
          <div class="panel panel-default">
            <div class="panel-heading">Subject: <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body">{{$checkinfo['subject']}}</a></div>
          </div>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Marks <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Mark 1</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Mark 2</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Mark 3</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Mark 4</strong></span> 78</li>
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">AVERAGE</div>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="/profilepage" method="post" id="registrationForm">
                      <div class="form-group">
                      <div class="col-xs-6">
                            <label for="last_name"><h4>ID No.</h4></label>
                              <p>{{$checkinfo['id']}}</p>
                          </div>
                      </div>

                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <p>{{$checkinfo['firstname']}}</p>
                          </div>
                      </div>
                      <div class="form-group">
                      <div class="col-xs-6">
                            <label for="id"><h4>Last Name</h4></label>
                              <p>{{$checkinfo['lastname']}}</p>
                          </div>
                      </div>
                          
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Telephone</h4></label>
                              <p>{{$checkinfo['telephone']}}</p>
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Email</h4></label>
                             <p>{{$checkinfo['email']}}</p>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="gender"><h4>Gender</h4></label>
                              <p>{{$checkinfo['gender']}}</p>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="Date_of_Birth"><h4>Date of Birth</h4></label>
                              <p>{{$checkinfo['date_of_birth']}}</p>
                          </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Address</h4></label>
                              <p>{{$checkinfo['address']}}</p>
                          </div>
                      </div>
                     
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<a class="btn btn-primary" href={{"profilepage/".$checkinfo['id']}}>Edit Profile</a>
                                <a  class="btn btn-danger" href={{"profiledelete/".$checkinfo['id']}}>Delete Profile</a></button>
                            </div>
                      </div>
                	</form>
              <hr>
              
            </div>

        </div><!--/col-9-->
    </div><!--/row-->
    