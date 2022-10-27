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
  <div class="brand-title">Edit Profile</div>
    @if($errors->any())
      <div class="alert alert-danger">
      <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form method="post" action="{{url('/pstore',$student->id)}}">
    {{ csrf_field() }}   
      <div class="inputs">
        <table>
          <tr>
            <td class="marg"><label class="marg" for="name"> First Name</label></td>
            <td class="marg"><input class="marg" type="text" name="firstname" value="{{$student->firstname}}" /></td>
            <td class="marg"><label class="marg" for="name"> Last Name</label></td>
            <td class="marg"><input class="marg" type="text" name="lastname" value="{{$student->lastname}}" /></td>
          </tr>
        </table>
</br>
        <table>
          <tr>
            <td class="marg2"><label class="marg2" for="reg_no">Reg_No</label></td>
            <td class="marg2"><input class="marg2" type="text" name="regno" value="{{$student->regno}}" /></td>
            <td class="marg2"><label class="marg3" for="name"> Year</label></td>
            <td class="marg2"><input class="marg2" type="text" name="year" value="{{$student->year}}" /></td>
          </tr>
          </table></br>
          
          <label for="email">Email</label>
          <input type="email"  name="email"value="{{$student->email}}" /></br>
          <br><br>
          <button type ="submit">save</button>
    
     </div>
 </br>
      
     </form></br>
                  
   </div>
</div>
