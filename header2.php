<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ak Tutorial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}


#navbar{
  position: fixed;
  top: 0;
  width: 100%;
  display:block;
  transition: top 0.8s;
}



.header h1 {
  position: relative;
  top: 40px;
  left: 10px;
  color: lightblue;
  font-size: 50px;
}

</style>
</head>
<body>

<div  id="nr"class="container">
<nav id="1" class="navbar navbar-fixed-top" style="background-color:black;opacity:; height:100px;">
<div class="header">
  

</div>

<nav id="n" class="navbar navbar-inverse navbar-fixed-top"  style="margin-top:100px;">
  <div class="container-fluid">

    <ul class="nav navbar-nav">
      <li ><a href="homePage.php">Home</a></li>
      <li ><a class="nav-link" href="gallery.php">Gallery</a></li>
      <li ><a class="nav-link" href="downloads.php">Downloads</a></li>
      <li ><a class="nav-link" href="contactUs.php">Contact Us</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="studentRegistration.php">Student Registration</a></li>
          <li><a href="staffRegistration.php">Staff Registration</a></li>
        </ul>
      </li>
    </ul>
    <!-- ye right side wale k liye-->
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="logIn.php"><span class="glyphicon glyphicon-log-in"></span>  Admin Login</a></li>
          <li><a href="logInStaff.php"><span class="glyphicon glyphicon-log-in"></span> Staff Login</a></li>
          <li><a href="logInStudent.php"><span class="glyphicon glyphicon-log-in"></span> Student Login</a></li>
        </ul>
      </li>

    </ul>
  </div>
</nav>
</nav>

</div>
<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("nav1").style.top = "0";
  } else {
    document.getElementById("nav1").style.top = "-170px";
  }
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("nav2").style.top = "0";
  } else {
    document.getElementById("nav2").style.top = "-300px";
  }
  prevScrollpos = currentScrollPos;
}
</script>
<br /><br /><br /><br /></br>
</br></br></br></br>
</body>
</html>
