@extends('admin.attendence')
@section('course1')
<div class="welcomelabel">
<table class="table table-hover ">
  <thead>
    <tr>
      <th >Course_Unit</th>
      <th >Course_Name</th>
    </tr>
  </thead>
  <tbody>
 
  @foreach($courses as $course)
    <tr>
      <td><a href ="{{url('/m_attendence',$course->id)}}">{{$course->courseunit}}</a></td>
      <td><a href ="{{url('/m_attendence')}}">{{$course->coursename}}</a></td>

    </tr>
    @endforeach
</tbody>
</table>

</div>

@endsection