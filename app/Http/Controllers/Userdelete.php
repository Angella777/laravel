<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\mark;







class Userdelete extends Controller
{ 

    function display()
    {
       
        $search=request()->query('search');
        if ($search){
            $users= User::where('firstname','LIKE',"%{$search}%")->paginate(3);

        }else{
            $users= User::where('user_type','=',"user")->paginate(3);
        }

        $data= mark::all();
        
        return view('/admin',['marks'=>$data])
        ->with(
            'users', $users
        );
        

    }
    
    function display_user(Request $request,$id){
        
        $checkinfo = User::where('username','=',$id)->first();
        $mark_1 ="";
        $mark_2 ="";
        $mark_3 ="";
        $mark_4 ="";
        $avg ="";
        $get_marks = mark::where('user_id','=',$checkinfo['id'])->get();
        // dd();
        foreach ($get_marks as $marks_get ) {
            $mark_1 =$marks_get->mark1;
            $mark_2 =$marks_get->mark2;
            $mark_3 =$marks_get->mark3;
            $mark_4 =$marks_get->mark4;
            $avg =$marks_get->avg;
        }
        return view('profilepagedisplay',[
            'checkinfo'=> $checkinfo,
            'mark1' =>$mark_1,
            'mark2' =>$mark_2,
            'mark3' =>$mark_3,
            'mark4' =>$mark_4,
            'avg' =>$avg,
        ]);
    }
  
    function delete(Request $request)
    {
        $id = $request->id;
    $data1=User::find($id);
    // dd($data1);
    $data1->delete();
    $data= User::all();
    
    $mark= mark::all();
    return back()->with('error', 'This Record Has Been Deleted',[
        'users'=>$data,
        'marks'=>$mark
    ]);
    }
    function edit(Request $request)
    {
        $id= $request->id;
        // dd($request);
        
        $user= User::find($id) ;
        $user-> firstname = $request-> First_Name;
        $user-> lastname = $request-> Last_Name;
        $user-> gender = $request-> gender;
        $user-> Date_of_Birth = $request-> Date_of_Birth;
        $user-> address = $request-> address;
        $user-> subject = $request-> subject;
        $user-> email = $request-> email;
        $user-> telephone = $request-> telephone;
        $user->save();
        
        // dd($request);
        if ($request->mark1 != null && $request->mark2 != null && $request->mark3 != null && $request->mark4 != null) {
            $getmark= mark::where('user_id','=',$request->id)->get();
            if (count($getmark) > 0) {
                $mark_id = 0;
                foreach ($getmark as $markget ) {
                    $mark_id = $markget->id;
                }
                $mark_reget = mark::find($mark_id);
                $mark_reget->mark1 = $request->mark1;
                $mark_reget->mark2 = $request->mark2;
                $mark_reget->mark3 = $request->mark3;
                $mark_reget->mark4 = $request->mark4;
                $average = ($request->mark1 + $request->mark2 + $request->mark3 +$request->mark4) / 4 ;
                $mark_reget->avg = $average;
                $mark_reget->status = $request->status;
                $mark_reget->user_id = $request->id;
                $mark_reget->save();
            } else {
                $gardes = new mark; 
                $gardes->mark1 = $request->mark1;
                $gardes->mark2 = $request->mark2;
                $gardes->mark3 = $request->mark3;
                $gardes->mark4 = $request->mark4;
                $average = ($request->mark1 + $request->mark2 + $request->mark3 +$request->mark4) / 4 ;
                $gardes->avg = $average;
                $gardes->status = $request->status;
                $gardes->user_id = $request->id;
                $gardes->save();
            }
            
           
        }
        $data=User::all();
      
        
        $mark= mark::all();
        return back()->with(
            'error', 'updated successfully',
            'admin',[
            'users'=>$data,
            'marks'=>$mark
        ]);
    }
    
}