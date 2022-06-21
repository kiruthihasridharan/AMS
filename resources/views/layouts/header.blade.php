<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Attendence Managemant System</title> 
            <link rel ="stylesheet" href="welcome/home.css">
            <link rel ="stylesheet" href="welcome/template.css">
            <link rel="stylesheet" href="welcome/fontawesome.css">
            <link rel="stylesheet" href="welcome/lightbox.css">
            
<header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="{{url('/')}}"><em>AMS</em></a>    
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="#">About Us</a>
        <li><a href="{{url('/login')}}">Login</a>
        </li>
      </ul>
    </nav>
   
  </header>
        <link rel ="stylesheet" href="css/form.css">

        @yield('main')
</head>
</html>
