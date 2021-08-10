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
        $data2=User::find($id);
        $data2->edit();
        $data=User::all();

        return back()->with('admin',[
            'users'=>$data
        ]);
    }
    
}