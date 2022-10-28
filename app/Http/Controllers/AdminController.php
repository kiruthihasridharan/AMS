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
use\App\Models\Attendence;

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

    
    public function semi1()
    {
        $courses = Course ::where('semester','=',1)->get();
        return view('admin.sem',compact('courses'));
    }

    public function semi2()
    {
        $courses = Course ::where('semester','=',2)->get();
        return view('admin.sem',compact('courses'));
    }
    public function m_attendence()
    {
        $students = Student ::all();
        return view('admin.markattendence',compact('students'));
    }

    public function s_attendence( Request $request , Student $student )
    {
        $request->validate([
            'attendence'=>'required',
       ]);
       $attendence = new Attendence([
        
        //'Date' => $request->get('Date'),
        'attendence'=>$request->get('attendence'),

       

     ]);
     $attendence->save();
     $attendence =  Attendence::all();
        return view('admin.markattendence',compact('student','attendence'));
    }

    }

