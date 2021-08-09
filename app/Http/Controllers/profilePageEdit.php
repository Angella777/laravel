<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\mark;

use Illuminate\Http\Request;

class profilePageEdit extends Controller
{
    public function edit(Request $request ){
        $request->validate([
            'profileImage'=>'required | min: 0 | max: 5048 | mimes: png, jpeg, jpg ',
            'first_name'=>'required | alpha ',
            'last_name'=>'required',
            'phone'=>'required | numeric',
            'email'=>'required ',
            'subject'=>'required',
            'address'=>'required',
            'password'=>'required | comfirmed ',
            'password2'=>'required',

            
        ]);
    }
    public function show(Request $request)
    {
        $user=$request->session()->get('loggeduser');
        $checkinfo = User::where('id','=',$user)->first();
        return view('profilepage',['checkinfo'=>$checkinfo]);
    }
    public function showmark(Request $request)
    {
        $user=$request->session()->get('loggeduser');
        $checkinfo = mark::where('id','=',$user)->first();
        return view('profilepage',['checkinfo'=>$checkinfo]);
    }
}
