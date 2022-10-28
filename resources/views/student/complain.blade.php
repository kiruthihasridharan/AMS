<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Attendence Managemant System</title> 
    <link rel="stylesheet" href="/style.css">
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
            <li><a href="{{url('/myprofile',$student->id)}}">My Profile</a></li>
             <li><a href="{{url('/')}}">logout</a></li>
           </ul>
          </nav>

<input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>AMS</header>
    <ul>
      <li><a href="{{url('/home',$student->id)}}"><i class="fas fa-qrcode"></i>Dashboard</a></li>
      <li><a href="{{url('/reset',$student->id)}}"><i class="fas fa-lock"></i>Reset Password</a></li>
      <li><a href="{{url('/')}}"><i class="fa fa-window-close"></i>logout</a></li>

    </ul>
   </div>
   <section>
   <div class="welcomelabel">
      <div class="container">
         <h4><b text-align="center">Complaint Status</b></h4>
         </div>
         <br>
         <a href="{{url('/fcomplain',$student->id)}}" class="btn btn-success">Add Complaint</a>

<br><br>

  <table class="table table-hover">
  <thead>
    <tr>
    
      <th scope="col">No</th>
      <th scope="col">Date</th>
      <th scope="col">Complaint</th>
      <th scope="col">Status</th>
    </tr>
  </thead>

            @php
            $i=0;
            @endphp

  <tbody>
  @foreach($complains as $complain)
    <tr>
      <th scope="row">{{++$i}}</th>
      <td>{{$complain->Date}}</td>
      <td>{{$complain->complain}}</td>
      <td>{{$complain->status}}</td>
      
    </tr>
    @endforeach
</tbody>
</table>

</div>
   </section>
  </body>
</header>

</html>


