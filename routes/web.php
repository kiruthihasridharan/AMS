<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () 
{
    return view('home');
});

Route::get('/login',[LoginController::class,'login']);
Route::post('/check',[LoginController::class,'checklogin']);
Route::get('/register',[UserController::class,'register']);
Route::get('/aboutus',[UserController::class,'aboutus']);
Route::post('/store',[UserController::class,'store']);

Route::get('/home/{student}',[StudentController::class,'home']);
Route::get('/complain/{student}',[StudentController::class,'complain']);
Route::get('/course/{student}',[StudentController::class,'course']);
Route::get('/attendence/{student}',[StudentController::class,'attendence']);
Route::get('/fcomplain/{student}',[StudentController::class,'fcomplain']);
Route::post('/complainstore/{student}',[StudentController::class,'complainstore']);
Route::get('/notice/{student}',[StudentController::class,'notice']);
Route::get('/myprofile/{student}',[StudentController::class,'myprofile']);
Route::get('/edit/{student}',[StudentController::class,'edit']);
Route::post('/pstore/{student}',[StudentController::class,'pstore']);
Route::get('/reset/{student}',[StudentController::class,'reset']);
Route::post('/changepw/{student}',[StudentController::class,'changepw']);

Route::get('/adminhome',[AdminController::class,'adminhome']);
Route::get('/student',[AdminController::class,'student']);
Route::get('/addstudent',[AdminController::class,'addstudent']);
Route::post('/storestudent',[AdminController::class,'storestudent']);
Route::get('/admincomplain',[AdminController::class,'admincomplain']);
Route::get('/adminreadcomp/{complain}',[AdminController::class,'readcomp']);
Route::get('/adminnotice',[AdminController::class,'adminnotice']);
Route::post('/noticestore',[AdminController::class,'noticestore']);
Route::get('/adminattendence',[AdminController::class,'adminattendence']);
Route::get('/m_attendence',[AdminController::class,'m_attendence']);
Route::get('/semi1',[AdminController::class,'semi1']);
Route::get('/semi2',[AdminController::class,'semi2']);
Route::post('/s_attendence',[AdminController::class,'s_attendence']);