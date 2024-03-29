@extends('layouts.adminlayout')
@section('main')
<link rel ="stylesheet" href="/switch.css">
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
   <!--<form method="post" action="{{ url('/s_attendence') }}"> 
          {{ csrf_field() }}-->
         
   <div class="welcomelabel">
      <div class="container">
         <h4><b text-align="center">Mark Attendence</b></h4>
         </div>
         <br>

<br><br>

  <table class="table table-hover">
  <thead>
    <td class="marg" ><label class="marg" for="Date" > Date</label></td> 
    <td class="marg"><input class="marg" type="date" name="Date" /></td>  
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
      <td>
        
     
      <label class="switch">
     <!--<input type="checkbox" value="present" name="attendence"/>-->
     <input type="checkbox" value="present" name="attendence"/>
      <span class="slider round"></span>
    </label>
              <button type="submit">Mark</button>
     
      </td>
    </tr>
  @endforeach
</tbody>
</table>

</div>
<div class="btn btn-outline-info">
<a href="{{url('/adminhome')}}"></i>Save</a></li>
</div>
<!--
<button type ="submit" class="btn btn-outline-info">Save</button></a>
</form>-->
   </section>
  </body>
</header>

</html>
@endsection

