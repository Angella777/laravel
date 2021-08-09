<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intitial-scale=1.0">
    <title>AngeeEdu.com @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/Register.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<style>
        body {
            background-image: url(../hand.jpg);
        }
    </style>

</head>

<body>
    <div class="loginBox">
        <h2>Create an account</h2>
        <!-- <p>Profile Photo</p><br><br> -->
        
        <form method="post" action={{route('register.user')}} enctype="multipart/form-data">
        @csrf
      
            <div class="pic">
                <img src={{ asset('image/rich.png') }} class="user" onClick="triggerClick()" id="profileDisplay">
                <input hidden type="file" name="profileImage" value="" onChange="displayImage(this)" id="profileImage" class="form-control">
            </div>  <p>Add photo</p>
            <span style="color:red">@error('profileImage'){{$message}}@enderror</span><br>

            <p>First Name</p>
            <input type="text" name="First_Name" value="" placeholder="Enter First Name">
         <span style="color:red"> @error('First_Name'){{$message}}@enderror</span>
            <br><br>

            <p>Last Name</p>
            <input type="text" name="Last_Name" value="" placeholder="Enter Last Name">
            <span style="color:red"> @error('Last_Name'){{$message}}@enderror</span>
            <br><br>

            <p>Username</p>
            <input type="text" name="username" value="" placeholder="Enter Username">
            <span style="color:red"> @error('username'){{$message}}@enderror</span>
            <br><br>

            <p>User type</p>
            <select id="user_type" name="user_type" value="">
                <option value="" disabled selected hidden>Choose a user type</option>
                <option value="User">Student</option>
                <option value="Admin">Teacher</option>
            </select>
            <span style="color:red"> @error('user_type'){{$message}}@enderror</span><br>
            <br><br>
            <p>Gender</p>
            <select id="gender" name="gender" value="" >
                <option value="" disabled selected hidden>Choose a gender</option>
                <option value="female">Female</option>
                <option value="male" >Male</option>
            </select> 
            <span style="color:red"> @error('gender'){{$message}}@enderror</span>
            <br><br>

            <p>Date of Birth</p>
            <input type="date" name="Date_of_Birth" value=""></span>
            <span style="color:red"> @error('Date_of_Birth'){{$message}}@enderror</span>
            <br><br>

            <p>Address</p>
            <input type="text" name="address" value="" placeholder="Enter Address">    
           <span style="color:red"> @error('address'){{$message}}@enderror</span><br><br>

            <p>Subject</p>
            <select id="subject" name="subject" >
                <option value="" disabled selected hidden>Choose a subject</option>
                <option value="C">C</option>
                <option value="Java">Java</option>
                <option value="SQL">SQL</option>
                <option value="Phython">Python</option>
                <option value="HTML/CSS">HTML/CSS</option>
            </select>
            <span style="color:red"> @error('subject'){{$message}}@enderror</span>
            <br> <br>

            <p>Email</p>
            <input type="text" name="email" value="" placeholder="Enter Email">
            <span style="color:red"> @error('email'){{$message}}@enderror</span><br>
            <br><br>

            <p>Telephone No.</p>
            <input type="text" name="telephone" value="" placeholder="000-000-0000">
            <span style="color:red"> @error('telephone'){{$message}}@enderror</span><br>
            <br><br>

            <p>Password</p>
            <input type="password" name="password" value="" placeholder="Enter password"><br>
            <span style="color:red"> @error('password'){{$message}}@enderror</span><br>
            <br>
                                                            

            <p>Confirm Password</p>
            <input type="password" name="ConfirmPassword" value="" placeholder="Confirm password"><br>
            <span style="color:red"> @error('ConfirmPassword'){{$message}}@enderror</span><br>
            <br><br>

            <input type="submit" name="signup"  value="Sign-up"><br>
            <input type="reset" value="Cancel">
            <p>Already have an account?<a href="Log-in"> Log-in</a></p>


        </form>
</body>

</html>

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
