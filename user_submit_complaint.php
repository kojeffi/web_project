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
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a class="navbar-brand" href="index.php"><i class="fa fa-leanpub" aria-hidden="true"></i>
                        <b>Student</b>ComplaintSystem</a></h1>
    <ul class="agile_forms">
        <li><a class="active" href="dashboard.php"><i class="fa fa-sign-out"></i>Sign Out</a></li>
    </ul>
    <div class="clearfix"></div>
</div>
<!-- banner -->
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
<div class="spinner-border text-muted text-center"></div>
<div class="spinner-border text-primary"></div>
<div class="spinner-border text-success"></div>
<div class="spinner-border text-info"></div>
<div class="spinner-border text-warning"></div>
<div class="spinner-border text-danger"></div>
<div class="spinner-border text-secondary"></div>
<div class="spinner-border text-dark"></div>
<div class="spinner-border text-light"></div>
        </div>
        <div class="col-md-4"></div>
    </div>
<hr class="btn-warning" style="border: 3px solid blue">
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <form method="post" class="rounded " action="user_submit_complaint_handler.php" style="background-color: #cbdcff">
            <h1 class="text-info text-center text-primary">Submit Your Complaint</h1>
            <br>
            <div class="row">
            <div class="col-md-6">
                <label for="">Name:</label>
                <input name="u_name" class="form-control" placeholder="Enter Your name" type="text">
            </div>
            <div class="col-md-6">
                <label for="">Registration Number:</label>
                <input name="u_reg" class="form-control" placeholder="Enter Registration number" type="text">
                <br>
            </div>
            </div>
                <div class="row">
                <div class="col-md-6">
                    <label for="">Phone Number:</label>
                    <input name="u_phone_number" class="form-control" placeholder="Enter phone number" type="number">
                </div>
                <div class="col-md-6">
                    <label for="">Email:</label>
                    <input name="u_email" class="form-control" placeholder="Enter email" type="email">
                </div>
                </div>
            <div class="row">
            <div class="col-md-6">
                <label for="">Gender:</label>
                <select name="u_gender"  class="form-control" id="gender">
                    <option value="">Select Your Gender:</option>
                    <option type="radio" value="Male">Male</option>
                    <option type="radio" value="Female">Female</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="">Complaint:</label>
                <select name="u_category"class="form-control"  id="#Complaints">
                    <option value="">Select Your Complaint Category:</option>
                    <option value="Accommodation">ACCOMMODATION
                    </option>
                    <option value="Library">
                        LIBRARY
                    </option>
                    <option value="Cafe">
                        CAFE
                    </option>
                    <option value="Missing Marks">
                        MISSING MARKS
                    </option>
                    <option value="Courses">
                        COURSES
                    </option>
                    <option value="Teaching Mode">
                        TEACHING MODE
                    </option>
                    <option value="Student Welfare">
                        STUDENT WELFARE
                    </option>
                    <option value="Student Dressing Code">
                        STUDENT DRESSING CODE
                    </option>
                    <option value="Lab">
                        Lab
                    </option>
                    <option value="Lecturers">
                        Lecturers
                    </option>
                    <option value="Securty">
                        Security
                    </option>
                    <option value="Medical fee">
                        Medical Fee
                    </option>
                    <option value="Fee Problem">
                        Fee problem
                    </option>
                </select>
            </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="" >Description:</label>
                    <textarea name="u_description"class="form-control" id="message" placeholder="Descibe your complaint according to category chosen" cols="45" rows="8"></textarea>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="">Date:</label>
                    <div class="form-control">
                        <input name="u_date" type="date" class="form-control" id="inputEmail3" placeholder="Enter...">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="">Current Year of study:</label>
                    <input name="u_year" class="form-control" placeholder="Year,Sem Ex.YR1,Sem2" type="text">
                </div>
                <div class="col-md-6">
                    Select file to upload:
                    <input  type="file" name="u_file" id="fileToUpload">
                    <input type="submit" value="Upload file" name="submit">
                </div>
            </div>
            <br>
            <br>
                 <div class="row">
                     <div class="col-md-4"></div>
                     <div class="col-md-4">
                         <input class="btn-block btn-success form-control form-group"
                                name="btn_Add" value="Submit" type="submit">
                     </div>
                     <div class="col-md-4"></div>
                 </div>
        </form>
    </div>
    <div class="col-md-1">

    </div>
</div>


<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- stats -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //stats -->
<!-- moving-top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">




</body>
</html>

