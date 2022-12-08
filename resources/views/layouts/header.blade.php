<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Attendence Managemant System</title> 
           
            <link rel ="stylesheet" href="style.css">
            <link rel ="stylesheet" href="css/form.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
            
            
<header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="{{url('/')}}"><em>AMS</em></a>    
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/aboutus')}}">About Us</a>
        <li><a href="{{url('/login')}}"><i class="fa fa-fw fa-user"></i>Login</a>
        </li>
      </ul>
    </nav>
   
  </header>
</head>
<body>
@yield('main')
</body>
</html>
