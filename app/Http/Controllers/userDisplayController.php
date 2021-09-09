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
        $mark_1 ="";
        $mark_2 ="";
        $mark_3 ="";
        $mark_4 ="";
        $avg ="";
        $get_marks = mark::where('user_id','=',$id)->get();
        // dd();
        foreach ($get_marks as $marks_get ) {
            $mark_1 =$marks_get->mark1;
            $mark_2 =$marks_get->mark2;
            $mark_3 =$marks_get->mark3;
            $mark_4 =$marks_get->mark4;
            $avg =$marks_get->avg;
        }
        return view('profilepage',[
            'checkinfo'=>$checkinfo,
            'mark1' =>$mark_1,
            'mark2' =>$mark_2,
            'mark3' =>$mark_3,
            'mark4' =>$mark_4,
            'avg' =>$avg,
        ]);
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
        // dd($req);
        $checkinfo= User::find($req->id);
        $checkinfo->firstname=$req->firstname;
        $checkinfo->lastname=$req->lastname;
        $checkinfo->username=$req->username;
        $checkinfo->address=$req->address;
        $checkinfo->email=$req->email;
        $checkinfo->telephone=$req->phone;
        // $checkinfo->password=$req->password;
        
        $checkinfo->save();
           
            return back()->with('error','Your profile updated');
        
    }
 

    function delete($id)
    {
        $data=User::find($id);
        // dd($data);
        $data->delete($id);
        return redirect('/')->with('error','Your account has deleted');


    }
}
  
