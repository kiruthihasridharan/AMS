<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Attendence Managemant System</title> 
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css')}}"/>
    
  </head>

     <body>        
<header class="main-header clearfix" role="header">
    <div class="logo" >
      <a href="{{url('/')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>AMS<em></a>    
    </div>
    
          <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">
            <li><a href="{{url('/adminhome')}}">Home</a></li>
            <li><a href="{{url('/adminhome')}}">Back</a></li>
             <li><a href="{{url('/')}}">logout</a></li>
           </ul>
          </nav>
  
    @yield('main')