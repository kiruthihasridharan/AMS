
@extends('layouts.footer')
@section('main')
     


   @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There are some problems with your input.</br></br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div><br />
   @endif
  <div class="container section">
    <div class="brand-title"> AMS</br>LOGIN</div>
    
@if ($message =Session::get('error'))
      <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">x</button>
          <strong>{{$message}}</strong>
      </div>
@endif

    
    <form method="post" action="{{ url('check') }}"> 
          {{ csrf_field() }}
      <div class="inputs">
        <label for="email">EMAIL</label></br>
        <input type="email" name ="email" placeholder="exampletest@gmail.com" /></br>
        <label for="password">PASSWORD</label></br>
        <input type="password"  name="password"placeholder="Min 6 charaters long" /><br>
        <button type ="submit">LOGIN</button></a>
     </div> 
</form> 
   </div>
</div>

@endsection