
@extends('layouts.adminlayout')
@section('main')


    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>AMS</header>
    <ul>
     <li><a href="{{url('/adminhome')}}"><i class="fas fa-qrcode"></i>Dashboard</a></li>
     <li><a href="{{url('/student')}}"><i class="fa fa-user-circle"></i>Students</a></li>
     <li><a href="{{url('/admincomplain')}}"><i class="far fa-question-circle"></i>Complaints</a></li>
     <li><a href="{{url('/')}}"><i class="fa fa-window-close"></i>logout</a></li>

    </ul>
   </div>
   <section>
    
<div class="row">
  <div class="column">
        <div class="card">
        <img src="images/student.jpg"style="width:100%">
              <div class="container">
               <h4><a href ="{{url('/student')}}"><b>Students</b></h4>
              </div>
         </div>
  </div>

  <div class="column">
        <div class="card">
        <img src="images/attendence.png"style="width:100%">
              <div class="container">
               <h4><a href ="{{url('/adminattendence')}}"><b>Attendence</b></h4>
              </div>
        </div>
  </div>

  <div class="column">
        <div class="card">
        <img src="images/complain.png"style="width:100%">
              <div class="container">
               <h4><a href ="{{url('/admincomplain')}}"><b>Complaints</b></a></h4>
              </div>
        </div>
  </div>

  <div class="column">
        <div class="card">
        <img src="images/notice.png"style="width:100%">
              <div class="container">
               <h4><a href ="{{url('/adminnotice')}}"><b>Notice</b></h4>
              </div>
        </div>
   </div>
</div>
   </section>
  </body>
</header>

</html>

@endsection
    