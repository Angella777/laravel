<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\mark;

class userDisplayController extends Controller
{
    public function show(Request $request)
    {
        $user=$request->session()->get('loggeduser');
        $checkinfo = User::where('id','=',$user)->first();
        return view('profilepagedisplay',['checkinfo'=>$checkinfo]);
    }

    function showData($id){
        $checkinfo= User::find($id);
        return view('profilepage',['checkinfo'=>$checkinfo]);
    }
    // public function check(Request $request){
    //     $info=$request->all();
        
    //     // $request->validate([
    //     //     'firstname'=>'required | max: 50 | alpha', 
    //     //     'lastname'=> 'required | max: 50 | alpha', 
    //     //     'username'=>'required | max: 20', 
    //     //     'address'=>'required', 
    //     //     'email'=>'required | string |regex:/(.+)@(.+)\.(.+)/i',
    //     //     'telephone'=>'required',
    //     //     'password'=>'required | min: 6' ,
    //     //     // 'Confirm_password' => 'required_with:password|same:password|min:6',
    //     //     'profileImage' => 'required | mimes:png,jpg,jpeg | min:0 | max: 5048'
    //     // ]);
    function update(Request $req){
        $checkinfo= User::find($req->id);
        $checkinfo->firstname=$req->firstname;
        $checkinfo->lastname=$req->lastname;
        $checkinfo->username=$req->username;
        $checkinfo->address=$req->address;
        $checkinfo->email=$req->email;
        $checkinfo->telephone=$req->phone;
        $checkinfo->password=$req->password;
        
        $checkinfo->save();
           
            return back()->with('profilepagedisplay','Your profile updated');
        
    }
 

    function delete($id)
    {
        $data=User::find($id);
        $data->delete($id);
        return redirect('profiledelete')->with('status','Your account has deleted');


    }
}
  
