<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="crsf-token" content="{{csrf_token()}}">
    <title>Log-in @yield('title')</title>
   
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/log-in.css') }}">
    
</head>

<body>

    @if(session()->has('error'))
                <div class="alert" role="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    {{ session()->get('error') }}
                </div>
            @endif
    <div class="card">
        <div class="loginBox">
            
            <h2>LOGIN </h2>
            @if (isset($fail))
            <span style="color:red">{{$fail}}</span>
                
            @endif
            <form action="login" method="post">
                @csrf
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username"><br>
                <span style="color:red"> @error('username'){{$message}}@enderror</span>
                <br>
                <!--        
            <p>User type</p> -->
                <p>User Type</p>
                <select id="user_type" name="user_type">
                    <option value="" disabled selected hidden>Choose a user type</option>
                    <option value="User">Student</option>
                    <option value="Admin">Teacher</option>
                                    </select><br><br>

                <span style="color:red"> @error('user_type'){{$message}}@enderror 
                    @if (isset($fail1))
                        <span style="color:red">{{$fail1}}</span>
                    @endif
                </span>
                <input type="password" name="password" placeholder="Enter password"><br>
                <span style="color:red"> @error('password'){{$message}}@enderror</span>
                <input type="submit" value="Login"><br>
                <p>Don't have an account?<a href="/Register"> Register here</a></p>
            </form>
        </div>
</body>

</html>