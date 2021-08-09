@if($errors->any())
    @foreach($errors->all() as $err)
        <li>{{$err}}</li>
    @endforeach
@endif
<form action="/student" method="post"> 
@csrf
Username<input type="text" name="username"><br>
Password<input type="password" name="password"><br>
<button type="submit">Submit</button>
</form>
<?php
    if(isset($info)){
        print_r($info);
    }?>