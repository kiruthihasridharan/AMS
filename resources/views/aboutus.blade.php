<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Attendence Managemant System</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

            
            <link rel ="stylesheet" href="welcome/template.css">
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
      <header class="main-header clearfix" role="header">
        <div class="logo">
          <a href="{{url('/')}}"><em>AMS </em><h4 color="white">University Of Jaffna</h4></a>
        </div>
          <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
          <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">
             <li><a href="{{url('/')}}">Back</a></li>
          </nav>
     </header>

     <section class="section main-banner" id="top">
       <video autoplay muted loop id="bg-video">
          <source src="images/Project video.mp4" type="video/mp4" />
       </video>

        <div class="video-overlay header-text">
          <div class="caption">
              <h2><em>aboutus</em></h2></br></br></br></br></br></br></br></br>
              <div class="caption">
                <h6>Attendance Management System is software developed for daily student attendance in Department of Computer Science. It makes it easier to access a student's attendance records for a specific semester. The information is sorted by the admin, which will be provided by the staffs for a particular class. This system will also help in evaluating attendance eligibility criteria of a student.
                 </h6>
             </div>
              
          </div>
       </div>
    </section>
  </body>
</html>
