@extends('layouts.header')
@section('main')
</br>
</br>
<div class="container1 main-banner" >
  <div class="brand-title">Student Registration</div>
    @if($errors->any())
      <div class="alert alert-danger">
      <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form method="post" action="{{url('/store')}}">
    {{ csrf_field() }}   
      <div class="inputs">
        <table>
          <tr>
            <td class="marg"><label class="marg" for="name"> First Name</label></td>
            <td class="marg"><input class="marg" type="text" name="firstname" placeholder="First Name" /></td>
            <td class="marg"><label class="marg" for="name"> Last Name</label></td>
            <td class="marg"><input class="marg" type="text" name="lastname" placeholder="Last Name" /></td>
          </tr>
        </table>
</br>
        <table>
          <tr>
            <td class="marg2"><label class="marg2" for="reg_no">Reg_No</label></td>
            <td class="marg2"><input class="marg2" type="text" name="regno" placeholder="20xx/xx/xxx" /></td>
            <td class="marg2"><label class="marg3" for="name"> Year</label></td>
            <td class="marg2"><input class="marg2" type="text" name="year" placeholder="Year" /></td>
          </tr>
          </table></br>
          
          <label for="email">Email</label>
          <input type="email"  name="email"placeholder="examoletest@gmail.com" /></br>
          <label for="password">Password</label>
          <input type="password" name="password" placeholder="Min 6 charcters " /></br>
          
          <button type ="submit">Register</button>
        

     </div>
 </br>
     <a href="{{url('/')}}">Back</a> 
     </form></br>
                  
   </div>
</div>


@endsection