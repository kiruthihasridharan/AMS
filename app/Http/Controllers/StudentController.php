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
        //$complains =  Complain::all();
        return view('student.attendence',compact('student'));
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
       
 }
    

