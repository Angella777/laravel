<?php

namespace App\Http\Controllers;

use App\Models\mark;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function index()
    {
        return view('Log-in');
    }


    public function login(Request $request)
    {
        $validationData = $request->validate([
            'username' => 'required | max:50',
            'user_type' => 'required ',
            'password' => 'required | min: 6',
        ]);
        if (Auth::attempt($validationData)) {
            $request->session()->regenerate();
            $checkinfo = User::where('username','=',$request->username)->first();
            if($checkinfo->user_type != $request->user_type){
                $fail1= 'Please select correct user type';
                return view('Log-in',['fail1'=>$fail1]);
            } else {
                if($checkinfo->user_type === 'Admin'){
                    return redirect('/admin');
            
                }elseif($checkinfo->user_type === 'User'){
                    $check_status = mark::where('user_id','=',Auth::user()->id)->get();
                    foreach ($check_status as $mark ) {
                        if ($mark->status != "Active") {
                            return back()->with('error', 'This Account Has Been Deactivated');
                        }
                    }
                    // dd($check_status);
                    return redirect('/user/'.$request->username);
                }
            }
        }
        $fail= 'Username not registered';
        return view('Log-in',['fail'=>$fail]);
        // if(!$checkinfo){
        //     $fail= 'Username not registered';
        //     return view('Log-in',['fail'=>$fail]);
        // }else{
        //     if(Hash::check($request->password,$checkinfo->password)){
        //         $request->session()->put('loggeduser', $checkinfo->id);
        //         // dd($request->user_type);
        //         if($checkinfo->user_type != $request->user_type){
        //             $fail1= 'Please select correct user type';
        //             return view('Log-in',['fail1'=>$fail1]);
        //         } else {
        //             if($checkinfo->user_type === 'Admin'){
                    
        //                 return redirect('/admin');
                
        //             }elseif($checkinfo->user_type === 'User'){
        //                 return view('profilepagedisplay',['checkinfo'=> $checkinfo]);
        //             }
        //         }
                
                
        //     }else{
        //         $fail='Password is incorrect';
        //         return view('Log-in',['fail'=>$fail]);
        //     }
        // }
        // return redirect ('Log-in')->with('status','Your are sucessfully logged in');
    }
    public function show_register()
    {
        return view('Register');
    }

    public function register(Request $request){
        $info=$request->all();
        // dd($request->all());
        $request->validate([
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
            'password'=>'required | min: 6' ,
            'ConfirmPassword' => 'required_with:password|same:password|min:6',
            'profileImage' => 'required | mimes:png,jpg,jpeg | min:0 | max: 5048'
        ]);
        $newImageName=time() . '_'.$request->username . '.' .$request->profileImage->extension();
        $request->profileImage->move(public_path('image'),$newImageName);

        $user= new User ;
        $user-> firstname = $request-> First_Name;
        $user-> lastname = $request-> Last_Name;
        $user-> username = $request-> username;
        $user-> user_type = $request-> user_type;
        $user-> gender = $request-> gender;
        $user-> Date_of_Birth = $request-> Date_of_Birth;
        $user-> address = $request-> address;
        $user-> subject = $request-> subject;
        $user-> email = $request-> email;
        $user-> telephone = $request-> telephone;
        $user->password= Hash::make($request->password);
        $user->image= $newImageName;
        $user->save();
        return view('Log-in',['info'=>$info]);

        
    }
public function logout(){
// if (session()->has('loggeduser'))
// {
//     session()->pull('loggeduser');
// }}
    Auth::logout();
    return view('Log-in');
}
}
