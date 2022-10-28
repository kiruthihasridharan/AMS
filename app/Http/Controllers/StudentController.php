<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Hash;
use\App\Models\User;
use\App\Models\Student;
use\App\Models\Complain;
use\App\Models\Course;
use\App\Models\Notice;
use\App\Models\Attendence;
class StudentController extends Controller
{
    public function complain(Student $student)
    {
        $complains =  Complain::all();
        return view("student.complain", compact('complains','student'));
    } 
    
    public function course(Student $student)
    {
        $courses =  Course::all();
        return view('student.course', compact('student','courses'));
    } 
       
    public function attendence(Student $student)
    {
        $courses =  Course::all();
        return view('student.attendence',compact('student','courses'));
    } 
    public function fcomplain(Student $student)
    {
        return view('student.complainform', compact('student'));
    } 

    function complainstore(Request $request, Student $student)
    {
        $request->validate([
           'Date'=>'required',
           'complain'=>'required',
           
          
       ]);
   
       $complain = new Complain([
           'Date' => $request->get('Date'),
           'complain' => $request->get('complain'),
           'status' => $request->get('status'),

        ]);
       $complain->save();
       $complains =  Complain::all();
       return view('student.complain',compact('student','complains'))->with('success', 'Complain saved!');
    }
    public function notice(Student $student)
    {
        $notices =  Notice::all();
        return view("student.notice", compact('notices','student'));
    } 

    public function home(Student $student)
    {
        return view('dashboard.student', compact('student'));
    } 

    public function myprofile(Student $student)
    {
        return view("student.myprofile",compact('student'));
    } 

    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));
    } 
       

    public function pstore(Request $request, Student $student, User $user)
    {
        $this->validate($request, [
            'firstname'=>'required',
            'lastname'=>'required',
            'regno'=>'required',
            'year'=>'required',
            'email'=>'required|email',
    
        ]);
        $student->update([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'regno' => $request->get('regno'),
            'year' => $request->get('year'),
            'email' => $request->get('email'),
        ]);
        
        $user->update([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
        ]);
        
        return view('student.myprofile',compact('student','user'));
    }

    public function reset(Student $student)
    {
        return view('student.resetpassword',compact('student'));
    } 

    public function changepw(Request $request,Student $student)
    {
        $this->validate($request, [
            'password'=>'required',
            're-password'=>'required|same:password',
        ]);

        $student->update([
            'password' => $request->get('password'),]);
        
        return view('dashboard.student',compact('student'));
    } 

 }
    

