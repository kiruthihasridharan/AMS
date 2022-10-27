@extends('layouts.studentlayout')
@section('main')

<link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<section>

<div class="welcomelabel">
      <div class="container">
         <h4><b text-align="center">My Profile</b></h4>
         </div>
         <br>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">First_Name</th>
      <th scope="col">{{$student->firstname}}</th>
    </tr>
  </thead>
  <thead>
    <tr>
      <th scope="col">Last_Name</th>
      <th scope="col">{{$student->lastname}}</th>
    </tr>
  </thead>
  <thead>
    <tr>
      <th scope="col">Reg_No</th>
      <th scope="col">{{$student->regno}}</th>
    </tr>
  </thead>
  <thead>
    <tr>
      <th scope="col">Year</th>
      <th scope="col">{{$student->year}}</th>
    </tr>
  </thead>
  <thead>
    <tr>
      <th scope="col">Email</th>
      <th scope="col">{{$student->email}}</th>
    </tr>
  </thead>


</table>

<a href="{{url('/edit',$student->id)}}" class="btn btn-success" text-align="centre">Edit</a>

</div>
   </section>
  </body>
</header>

</html>

@endsection
