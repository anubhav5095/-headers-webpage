<?php
//include 'login2.php';
?>
<!Doctype Html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.headerLinks,a{
  font-size: 15px;
}

#headerLinks{
  font-style: 15px;
}
.navbar{
  padding: 0px;
  margin:0px;
}
.header {
    position: absolute;
    width: 100%;
    z-index: 10;
      filter: blur(0px);
  }






  input[type=text], input[type=password] {
      width: auto;
      padding: 5px 10px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
  }

  /* Set a style for all buttons */
  button {
      background-color: #4CAF50;
      color: white;
      padding: 20px;
      margin: 10px 0;
      cursor: pointer;
      width: auto;
  }

  button:hover {
      opacity: 0.8;
  }

  /* Extra styles for the cancel button */

  /* Center the image and position the close button */
  .imgcontainer {
      text-align: center;
      margin: 20px 0 0 0;
      position: relative;
  }

  img.avatar {
      width: 20%;
      height: 20%;
      border-radius: 50%;
  }


  .containers {
    position: relative;
    margin: 20px 0 20px 0;
    left: 90px;
    width: auto;
    height: auto;

  }

  span.psw {
      float: right;
      padding-top: 16px;
  }

  /* The Modal (background) */
  .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      padding-top:20px;


  }

  /* Modal Content/Box */
  .modal-content {
      background-color:#c4b7a6;
      opacity: 0.9;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 55%;
      height: auto;
    /* Could be more or less, depending on screen size */
  }

  /* The Close Button (x) */
  .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
  }

  .close:hover,
  .close:focus {
      color: red;
      cursor: pointer;
  }

  /* Add Zoom Animation */
  .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
  }

  @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)}
      to {-webkit-transform: scale(1)}
  }

  @keyframes animatezoom {
      from {transform: scale(0)}
      to {transform: scale(1)}
  }

  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
      span.psw {
         display: block;
         float: none;
      }
  }

/*yahan s modal k amdr ka login ka styling*/
  .vl {
    position: absolute;
    left: 50%;
    top: 20px;
    transform: translate(-50%);
    border: 2px solid white;
    height: 300px;
  }

  /* text inside the vertical line */
  .vl-innertext {
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    background-color: #f1f1f1;
    border: 1px solid grey;
    border-radius: 50%;
    padding: 8px 10px;
  }

  .jumbotron{
    padding: 20px;
    margin: 20px;
    border-radius: 5px;
    border: ;
    background-color: #f0f0f0;
  }

</style>

</head>

<body>
<div class="header" style="position:absolute; " style="opacity:0.9; background-color:;">
<nav class="navbar navbar-inverse" >
<div class="container-fluid">
  <ul class="nav navbar-nav" style="margin:0px;">
    <li class="headerLinks" ><a href="home.php"><i class="fa fa-fw fa-home"> </i> Home</a></li>
    <li class="headerLinks"><a href="aboutUs.html"><i class="fa fa-fw fa-globe"> </i> About Us</a></li>
    <li class="headerLinks"><a href="contactUs.php"><i class="fa fa-fw fa-envelope"></i> Contact Us</a></li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="signUp.php">Register as Renter</a></li>
        <li><a href="signUpCustomer.php">Register as Buyer</a></li>
      </ul>
    </li>
  </ul>

  <ul class="nav navbar-nav navbar-right">
    <li class="headerLinks"><button class="btn btn-success" onclick="document.getElementById('id01').style.display='block'" ><span class="glyphicon glyphicon-user"></span>&ensp;Login</button>&ensp; </li>
  </ul>
</div>
</nav>
</div>



<div id="id01" class="modal">
<div class="modal-content animate">
  </br><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <div class="row">
    <div class="col-xs-5" id="form1">
      <div class="jumbotron">

      <div class="">
        <div class="abc"><h4 style="text-align:center"><p style="background-color:#f0f0f0;padding:0px;">LOGIN RENTER</p></h4></div>
</br>
      </div>
      <form method="post" action="/action_page.php">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="emailrenter" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="passwordrenter" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
  </div>

        <div class="col-xs-2">
          <div class="vl">
            <span class="vl-innertext">or</span>
          </div>
        </div>


    <div class="col-xs-5" id="form1">
      <div class="jumbotron">

      <div class="">
        <div class="abc"><h4 style="text-align:center"><p style="background-color:#f0f0f0;padding:0px;">LOGIN BUYER</p></h4></div>
        </br>
      </div>
      <form method="post" action="/action_page.php">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="emailbuyer" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="passwordbuyer" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
          </div>

          <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
    </div>
</div>
</div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</br></br>
</body>
</html>
