<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\Userdelete;
use App\Http\Controllers\profilePageEdit;
use App\Http\Controllers\userDisplayController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\usereditController;
use App\Http\Controllers\addstudentContoller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/users', function () {
   return view('users');
});

// Route::get('/admin', function () {
//    return view('admin');
// });

 Route:: get ('/contact', function () {
    return view('contact');
 });


 Route:: get ('/about', function () {
    return view('about');
 });


 Route::get('/Register',[FormController::class,'show_register'])->name('register');
 Route::post('/Register',[FormController::class,'register'])->name('register.user');

 Route::get('/admin',[Userdelete::class,'display'])->name('admin');
 route::post('/delete',[Userdelete::class,'delete']);
 route::post('/edit',[Userdelete::class,'edit']);
//  route::get('edit/{id}',[Userdelete::class,'edit']);
 route::post('/admin',[Userdelete::class,'store']);

 Route::get('/contactform', [ContactUsFormController::class, 'createForm']);

 Route::post('/contactform', [ContactUsFormController::class, 'ContactUsForm'])->name('contactform.store');

 Route:: get ('/Events', function () {
   return view('Events');
});

Route::post("/user",[Users::class,'getData']);

// Route:: view("Log-in",'Log-in');
Route:: view("profilepage",'profilepage');
Route:: view("profilepagedisplay",'profilepagedisplay');
Route:: view("profiledelete",'profiledelete');
 Route::get('/users', function(){
    return view ('users');
 });
Route::get('Log-in',[FormController::class,'index'],'index');
Route::get('/logout',[FormController::class,'logout'])->name('logout');
Route::post('login',[FormController::class,'login']);
 Route::post('/student','App\Http\Controllers\DBcontroller@test');

Route::get('profilepagedisplay',[userDisplayController::class,'show']);
Route::get('profilepage',[profilePageEdit::class,'show']);
Route::get('profilepage/{id}',[userDisplayController::class,'showData']);
Route::post('profilepage',[userDisplayController::class,'update']);
Route::get('profiledelete/{id}',[userDisplayController::class,'delete']);

Route::get('/profilepage',[userDisplayController::class,'addmarks']);

Route::get('addstudentmodal', [addstudentContoller::class, 'create']);
Route::post('addstudentmodal', [addstudentContoller::class, 'store'])->name('store-stud');


Route::get('/TestMail', function(){
   return view ('TestMail');
});

Route::get('/TestMail',[MailController::class,'sendEmail']);