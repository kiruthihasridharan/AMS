<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Hash;
use\App\Models\User;
use\App\Models\Student;

class LoginController extends Controller
{
    function login()
    {
       return view('login');

    } 
    function checklogin(Request $request)
    {
        //validation
       $this->validate($request,[
      'email'=>'required|email',
      'password'=>'required|alphaNum|min:5']);
       //Authentication
       $user_data = array(
        'email'=>$request->get('email'),
        'password'=>$request->get('password'),
       );
      $student=Student::where('email','=',$user_data['email'])->first();
       if(Auth::attempt($user_data))
       {
        if(Auth::user()->role=='admin')
           return view('dashboard.admin');
        if(Auth::user()->role=='student')
           return view('dashboard.student',compact('student'));
       }
      /* else if($student != null)
       {
         if(Hash::check($user_data['password'],$student->password))
         {
            return view('dashboard.student'); 
         }
          else{
            return back()->with('error','wrong pw');
         }
       }*/
       else{
        return back()->with('error','Wrong Login Details');
       }

    } 

    
    
}
