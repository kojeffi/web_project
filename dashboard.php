<?php
session_start();
if(!isset($_SESSION['email'])){
   header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Student Complaints Management System</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Scholarly web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="css/swipebox.css">
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <!-- //css files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <!-- //online-fonts -->
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <!--    End of connection bootstrap js-->

    <!--    start of connection to bootstrap css-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/custom.css">

    <style>
        body{
            /*background-image: url("assets/images/bg2.jpg");*/
            background-color: #d0ffe9;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>



</head>
<body>
<!-- banner -->
<div class="main_section_agile" id="home">
    <div class="agileits_w3layouts_banner_nav">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                        <h1><a class="navbar-brand" href="index.php"><i class="fa fa-leanpub" aria-hidden="true"></i>
                                <b>Student</b>Complaint</b> System</a></h1>
                </div>
            </div>
            <ul class="agile_forms">
                <li><a class="active" href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a> </li>
            </ul>
        <div class="clearfix"> </div>
    </div>
<!-- banner -->
<br>
<hr>
<div class="row">
    <div class="col-md-4"> <a href="index.php">
            <i class="fa fa-users h1 text-center"></i>
            <span class="h1 text-success">HOME</span>
        </a>
        <a href="complaint_feedback.php">
            <i class="fa fa-comments h1 text-center" style="margin-left: 100px"></i>
            <span class="h1 text-secondary">FEEDBACK</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a></div>
    <div class="col-md-4">
        <div class="spinner-grow text-muted"></div>
        <div class="spinner-grow text-primary"></div>
        <div class="spinner-grow text-success"></div>
        <div class="spinner-grow text-info"></div>
        <div class="spinner-grow text-warning"></div>
        <div class="spinner-grow text-danger"></div>
        <div class="spinner-grow text-secondary"></div>
        <div class="spinner-grow text-dark"></div>
        <div class="spinner-grow text-light"></div>

    </div>
    <div class="col-md-3">
        <a href="admin.php">
            <i class="fa fa-comments h1 text-center" style="margin-left: 200px"></i>
            <span class="h1 text-danger">ADMIN</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a></div>
</div>
<hr>
<h1 class="text-center text-warning h1"><b>Welcome:</b>  <b><?php echo $_SESSION['email'];?></b>
    <br><a href="user_submit_complaint.php">Proceed to Submit a Complaint</a></h1>

<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="hover rounded-pill" src="assets/images/yu.jfif" alt="Los Angeles"
                 style=" margin-left:300px;width: 70%;height: 300px">
        </div>
        <div class="carousel-item">
            <img class="hover rounded-pill" src="assets/images/jef.jfif" alt="Chicago" style="margin-left:300px;width: 70%;height: 300px">
        </div>
</div>
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon text-center h1 text-primary">
            Complaint<b class="text-danger">Management<b class="text-secondary">System</b>
        </span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon">
        </span>
    </a>
<hr>
<div class="footer text-center">
    <div class="container">
        <b class="copyright h1 text-success">&copy; 2022 Brought To You By Omondi Jeff</b> <b class="text-warning h1">All rights reserved</b>.
    </div>
</div>
<hr>
</body>
</html>

