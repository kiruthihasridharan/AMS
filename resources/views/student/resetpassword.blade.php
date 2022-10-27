<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Attendence Managemant System</title> 
    <link rel ="stylesheet" href="/style.css">
            <link rel ="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

     <body>        
<header class="main-header clearfix" role="header">
    <div class="logo" >
      <a href="{{url('/')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>AMS<em></a>    
    </div>
    
          <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">
            <li><a href="{{url('/home',$student->id)}}">Home</a></li>
             <li><a href="{{url('/')}}">logout</a></li>
           </ul>
          </nav>
</header>
<div class="container1 main-banner" >
  <div class="brand-title" >Reset Password</div>
<form method="post" action="{{url('/changepw',$student->id)}}">
    {{ csrf_field() }}   
    <div class="inputs">
        <label for="password">New Password</label></br>
        <input type="password" name ="password" placeholder="Enter the new password" /> </br>
        <label for="password">Confirm Password</label></br>
        <input type="password" name ="re-password" placeholder="Re-enter the new password" /> 
        <br>
        <button type ="submit" class="btn btn-outline-info">Reset</button>
     </div> 
</form>
</div>
</div>
</body>
 </html>