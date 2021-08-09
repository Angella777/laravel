<h1>Login</h1>
@if($errors->any())
    @foreach($errors->all() as $err)
        <li>{{$err}}</li>
    @endforeach
@endif
<form action= "" method= "GET">
    @csrf
    <input  type="text" name="username"  placeholder="username" /><br><br>
    <span style="color:red">@error('username'){{$message}}@enderror</span><br>

    <input  type= "password" name="password" placeholder="password" /><br>
    <span style="color:red">@error('password'){{$message}}@enderror</span><br>
    
    <button  type= "submit">submit</button>
</form>
 