<html lang="en">
<head>
  <style>
      .navbar-global {
          background-color: indigo;
      }

      .navbar-global .navbar-brand {
          color: white;
      }

      .navbar-global .navbar-user > li > a
      {
          color: white;
      }

      .navbar-primary {
          background-color: #333;
          bottom: 0px;
          left: 0px;
          position: absolute;
          top: 51px;
          width: 200px;
          z-index: 8;
          overflow: hidden;
          -webkit-transition: all 0.1s ease-in-out;
          -moz-transition: all 0.1s ease-in-out;
          transition: all 0.1s ease-in-out;
      }

      .navbar-primary.collapsed {
          width: 60px;
      }

      .navbar-primary.collapsed .glyphicon {
          font-size: 22px;
      }

      .navbar-primary.collapsed .nav-label {
          display: none;
      }

      .btn-expand-collapse {
          position: absolute;
          display: block;
          left: 0px;
          bottom:0;
          width: 100%;
          padding: 8px 0;
          border-top:solid 1px #666;
          color: grey;
          font-size: 20px;
          text-align: center;
      }

      .btn-expand-collapse:hover,
      .btn-expand-collapse:focus {
          background-color: #222;
          color: white;
      }

      .btn-expand-collapse:active {
          background-color: #111;
      }

      .navbar-primary-menu,
      .navbar-primary-menu li {
          margin:0; padding:0;
          list-style: none;
      }

      .navbar-primary-menu li a {
          display: block;
          padding: 10px 18px;
          text-align: left;
          border-bottom:solid 1px #444;
          color: #ccc;
      }

      .navbar-primary-menu li a:hover {
          background-color: #000;
          text-decoration: none;
          color: white;
      }

      .navbar-primary-menu li a .glyphicon {
          margin-right: 6px;
      }

      .navbar-primary-menu li a:hover .glyphicon {
          color: orchid;
      }

      .main-content {
          margin-top: 60px;
          margin-left: 200px;
          padding: 20px;
      }

      .collapsed + .main-content {
          margin-left: 60px;
      }

  </style>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-global navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">OCTO</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-user navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Octo technology</a></li>
                <li><a href="#about"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<nav class="navbar-primary">
    <a href="#" class="btn-expand-collapse"><span class="glyphicon glyphicon-menu-left"></span></a>
    <ul class="navbar-primary-menu">
        <li>
            <a href="#"><span class="glyphicon glyphicon-list-alt"></span><span class="nav-label">Dashboard</span></a>
            <a href="#"><span class="glyphicon glyphicon-envelope"></span><span class="nav-label">Profile</span></a>
            <a href="#"><span class="glyphicon glyphicon-cog"></span><span class="nav-label">Settings</span></a>
            <a href="#"><span class="glyphicon glyphicon-film"></span><span class="nav-label">Notification</span></a>
            <a href="#"><span class="glyphicon glyphicon-calendar"></span><span class="nav-label">Monitor</span></a>
        </li>
    </ul>
</nav>
<div class="main-content">
    <h1> I am the main content </h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem sint assumenda quae aliquid voluptatibus quia, ea, ad natus magni repellat earum, culpa iure tempore. Enim dolor eaque minima voluptas ducimus?</p>
</div>

<script>
    $('.btn-expand-collapse').click(function(e) {
        $('.navbar-primary').toggleClass('collapsed');
    });
</script>
</body>

</html>