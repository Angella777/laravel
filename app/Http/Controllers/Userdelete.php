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
            $users= User::paginate(3);
        }

        
        return view('/admin')
        ->with('users', $users);
        

    }
    
    function showmark(){
       
        $data= mark::all();
        return view('/admin',['users'=>$data]);
    }
    function delete(Request $request)
    {
        $id = $request->id;
    $data1=User::find($id);
    // dd($data1);
    $data1->delete();
    $data= User::all();

    return back()->with('admin',[
        'users'=>$data
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
        if ($request->mark1 != "null" && $request->mark2 != "null" && $request->mark3 != "null" && $request->mark4 != "null" && $request->avg != "null" && $request->status != "null" && $request->user_id != "null") {
            dd('yes');
            // $gardes = new mark; 
            // $gardes->mark1 = $request->mark1;
            // $gardes->mark2 = $request->mark2;
            // $gardes->mark3 = $request->mark3;
            // $gardes->mark4 = $request->mark4;
            // $gardes->avg = $request->avg;
            // $gardes->status = $request->status;
            // $gardes->user_id = $request->user_id;
            // $gardes->save();
        }
        $data=User::all();
      

        return back()->with('admin',[
            'users'=>$data
        ]);
    }
    
}