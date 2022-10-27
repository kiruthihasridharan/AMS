@extends('layouts.adminlayout')
@section('main')
<link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
   <div class="welcomelabel">
      <div class="container">
         <h4><b text-align="center">Mark Attendence</b></h4>
         </div>
         <br>

<br><br>

  <table class="table table-hover">
  <thead>
    <tr>
    
      <th scope="col">No</th>
      <th scope="col">Student Reg_No</th>
      <th scope="col">Present/Absence</th>
    </tr>
  </thead>

            @php
            $i=0;
            @endphp

  <tbody>
  @foreach($students as $student)
    <tr>
      <th scope="row">{{++$i}}</th>
      <td>{{$student->regno}}</td>
      <td>present</td>
    </tr>
  @endforeach
</tbody>
</table>

</div>
   </section>
  </body>
</header>

</html>
@endsection

