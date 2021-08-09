<?php

namespace App\Http\Controllers;


 use Illuminate\Http\Request;


class DBcontroller extends Controller
{
     public function test(Request $request){
         $request->validate([
            'username'=> 'required',
            'password'=> 'required'
         ]);
        return $request->input();
    }
    
}
