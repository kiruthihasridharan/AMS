@extends('layouts.studentlayout')
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
     <li><a href="{{url('/home',$student->id)}}"><i class="fas fa-qrcode"></i>Dashboard</a></li>
     <li><a href="{{url('/reset',$student->id)}}"><i class="fas fa-lock"></i>Reset Password</a></li>
     <li><a href="{{url('/')}}"><i class="fa fa-window-close"></i>logout</a></li>

    </ul>
   </div>
<section>
<div class="welcomelabel">
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Subject</th>
      <th scope="col">Attendence</th>
    </tr>
  </thead>

           @php
            $i=0;
            @endphp


  <tbody>
  @foreach($courses as $course)
    <tr>
    
      <th scope="row">{{++$i}}</th>
      <td>{{$course->coursename}}</td>
      <td>{{35+$i}}%</td>
      
    </tr>
    @endforeach
</tbody>
</table>

</div>

   </section>
  
</header>
</body>
</html>

@endsection