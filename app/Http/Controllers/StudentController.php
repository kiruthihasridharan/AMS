<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Hash;
use\App\Models\User;
use\App\Models\Student;
use\App\Models\Complain;

class StudentController extends Controller
{
    public function complain()
    {
        return view('student.complain');
    } 
    
    public function fcomplain()
    {
        return view('student.complainform');
    } 
    
}
