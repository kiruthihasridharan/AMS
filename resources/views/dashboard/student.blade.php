
@extends('layouts.studentlayout')
@section('main')

<body> 
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
            <h3>Welcome <div class="namedesign">{{$student->firstname}} {{$student->lastname}}</div></h3>
      </div>
</div>
<div class="row">
  <div class="column">
        <div class="card">
        <img src="/images/student.jpg"style="width:100%">
              <div class="container">
               <h4><a href="{{url('/course',$student->id)}}"><b>Course</b></h4>
              </div>
         </div>
  </div>

  <div class="column">
        <div class="card">
        <img src="/images/attendence.png"style="width:100%">
              <div class="container">
               <h4><a href="{{url('/attendence',$student->id)}}"><b>Attendence</b></h4>
              </div>
        </div>
  </div>

  <div class="column">
        <div class="card">
        <img src="/images/complain.png"style="width:100%">
              <div class="container">
               <h4><a href="{{url('/complain',$student->id)}}"><b>Complaints</b></a></h4>
              </div>
        </div>
  </div>

  <div class="column">
        <div class="card">
        <img src="/images/notice.png"style="width:100%">
              <div class="container">
               <h4><a href="{{url('/notice',$student->id)}}"><b>Notice</b></h4>
              </div>
        </div>
  </div>
</div>
   </section>
  </body>


@endsection
    