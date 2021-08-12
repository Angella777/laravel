<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\mark;
use App\Models\addStudentmodel;
class addstudentContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addstudentmodal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
     public function store(Request $request)
    {
           

      
            $validated = $request->validate([
                'First_Name'=>'required | max: 50 | alpha', 
                'Last_Name'=> 'required | max: 50 | alpha', 
                'username'=>'required',
                'gender'=>'required', 
                'date_of_birth'=>'required | date | before: 17 years ago', 
                'address'=>'required', 
                'subject'=>'required',
                'email'=>'required | string |regex:/(.+)@(.+)\.(.+)/i',
                'telephone'=>'required',
                'mark_1'=>'required |numeric',
                'mark_2'=>'required |numeric',
                'mark_3'=>'required |numeric',
                'mark_4'=>'required |numeric',
                'avg'=>'required |numeric',
                'status'=>'required',
            ]);
            dd($request);
            $stud= new User;
            $stud-> firstname = $request->First_Name;
            $stud-> lastname = $request-> Last_Name;
            $stud->username = 'student';
            $stud-> user_type = "user";
            $stud-> gender = $request-> gender;
            $stud-> date_of_birth = $request-> date_of_birth;
            $stud-> address = $request-> address;
            $stud-> subject = $request-> subject;
            $stud-> email = $request-> email;
            $stud-> telephone = $request-> telephone; 
            $stud->password = 'wasgehtab';
            $stud->image = '../hand';
            
            $stud->save();

            // $mark= new mark();
            // $mark->mark1=$request->mark1;
            // $mark->mark2=$request->mark2;
            // $mark->mark3=$request->mark3;
            // $mark->mark4=$request->mark4;
            // $mark->avg=$request->avg;
            // $mark->status=$request->status;
            // $mark->save();


        
    }

}
