@extends('layouts.header')
@section('main')


<div class="container1 main-banner">
    <div class="brand-title">Register</div>
      <div class="inputs">
        <label>Name</label>
        <input type="text" placeholder="Full Name" />
        <label>Reg_No</label></br>
        <input type="text" placeholder="20xx/xx/xxx" />
        <label>Email</label></br>
        <input type="email" placeholder="examoletest@gmail.com" />
        <label>Password</label></br>
        <input type="password" placeholder="Min 6 charcters " />
        <label>Confirm Password</label></br>
        <input type="password" placeholder="min 6 charcters" />
        <button type ="submit">Register</button>
     </div>
   </div>
</div>


@endsection