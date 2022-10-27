<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Hash;
use\App\Models\User;
use\App\Models\Student;
use\App\Models\Complain;
use\App\Models\Notice;
use\App\Models\Course;

class AdminController extends Controller
{

    public function adminhome()
    {
        return view('dashboard.admin');
    } 

    
    public function admincomplain()
    {
        $complains =  Complain::all();
        return view('admin.complain',compact('complains'));
    } 


    public function student()
    {
        $students = Student ::all();
        return view('admin.student',compact('students'));
    } 

    public function addstudent()
    {
        return view('admin.addstudent');
    } 

    public function storestudent(Request $request)
    {
       
            $this->validate($request, [
                'firstname'=>'required',
                'lastname'=>'required',
                'regno'=>'required',
                'year'=>'required',
                'email'=>'required|email',
                'password'=>'required',
                'role'=>'required',
    
            ]);
            $stu = new Student([
                'firstname' => $request->get('firstname'),
                'lastname' => $request->get('lastname'),
                'regno' => $request->get('regno'),
                'year' => $request->get('year'),
                'email' => $request->get('email'),
                'password' => Hash::make($request->get('password')),
                'role' => $request->get('role'),
            ]);
            $stu->save();
            $user = new User([
                'firstname' => $request->get('firstname'),
                'lastname' => $request->get('lastname'),
                'email' => $request->get('email'),
                'password' => Hash::make($request->get('password')),
                'role' => $request->get('role'),
            ]);
            
            $user->save();
            $students = Student ::all();
            return view('admin.student',compact('students'))->with('success', 'Student saved!');
        }
     public function readcomp(Complain $complain)
        {
            $complain->update(['status'=>'reviewed']);
            $complains =  Complain::all();
            return view('admin.complain',compact('complains'));
        }

    public function adminnotice()
    {
        return view('admin.notice');
    } 

    function noticestore(Request $request)
    {
        $request->validate([
            'Date'=>'required',
            'courseunit'=>'required',
            'information'=>'required',
            
          
       ]);
   
       $notice = new Notice([
           'Date' => $request->get('Date'),
           'courseunit' => $request->get('courseunit'),
           'information' => $request->get('information'),

        ]);
       $notice->save();
       return view('dashboard.admin');
    }

    public function adminattendence()
    {
        return view('admin.attendence');
    }



    }

