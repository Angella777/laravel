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
    public function index()
    {
        //
    }

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
                'username'=>'required | max: 20', 
                'user_type'=>'required', 
                'gender'=>'required', 
                'Date_of_Birth'=>'required | date | before: 17 years ago', 
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
            $stud= new addStudentmodel();
            $stud-> firstname = $request-> First_Name;
            $stud-> lastname = $request-> Last_Name;
            $stud->username = 'student';
            $stud-> user_type = "user";
            $stud-> gender = $request-> gender;
            $stud-> Date_of_Birth = $request-> Date_of_Birth;
            $stud-> address = $request-> address;
            $stud-> subject = $request-> subject;
            $stud-> email = $request-> email;
            $stud->password = 'wasgehtab';
            $stud-> telephone = $request-> telephone;  
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('addStudentmodel');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
