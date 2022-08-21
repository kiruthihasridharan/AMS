
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
     <li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
     <li><a href="#"><i class="fa fa-user-circle"></i>Students</a></li>
     <li><a href="#"><i class="far fa-question-circle"></i>Complains</a></li>
     <li><a href="#"><i class="fas fa-lock"></i>Reset Password</a></li>
     <li><a href="#"><i class="fa fa-window-close"></i>logout</a></li>

    </ul>
   </div>
   <section>
    
<div class="row">
  <div class="column">
        <div class="card">
        <img src="images/student.jpg"style="width:100%">
              <div class="container">
               <h4><b>Students</b></h4>
               <p>list</p>
              </div>
         </div>
  </div>
  <div class="column">
        <div class="card">
        <img src="images/student.jpg"style="width:100%">
              <div class="container">
               <h4><b>Attendence</b></h4>
               <p>p/a</p>
              </div>
        </div>
  </div>

  <div class="column">
        <div class="card">
        <img src="images/student.jpg"style="width:100%">
              <div class="container">
               <h4><b>Complains</b></h4>
               <p>p/a</p>
              </div>
        </div>
  </div>
</div>


   </section>
  </body>
</header>

</html>

@endsection
    