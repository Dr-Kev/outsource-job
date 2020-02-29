<?php
session_start();
include 'functions/upload.php';

?>

<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="author" content="John Doe">
<meta name="description" content="">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ALMEAL</title>

<script src="js/4n2NXumNjtg5LPp6VXLlDicTUfA.js"></script><link rel="apple-touch-icon" href="images/apple-touch-icon.html">
<link rel="shortcut icon" type="image/ico" href="images/favicon.html" />

<link rel="stylesheet" href="css/bootstrap.min.css">

<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="css/matrialize.css" rel="stylesheet">

<link href="owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/min_style.css">
</head>
<body>

<header class="header">
<div class="header_container background-color-orange-light">
<div class="container">
<div class="row">
<div class="col">
<div class="header_content d-flex flex-row align-items-center justify-content-start">
<div class="logo_container">
<a href="index.html">
<img src="imags/logo.png" class="logo-text" alt="">
</a>
</div>
<nav class="main_nav_contaner ml-auto">
<ul class="main_nav">
<li class="active"><a href="index.html">Home</li>
<li><a href="about_us.html">About</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>

<div class=" Post-Jobs">
<a href="post_job.html" class="">
Employers
</a>
</div>

<div class="hamburger menu_mm menu-vertical">
<i class="large material-icons font-color-white menu_mm menu-vertical">menu</i>
</div>
</nav>
</div>
</div>
</div>
</div>
</div>

<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
<div class="menu_close_container">
<div class="menu_close">
<div></div>
<div></div>
</div>
</div>
<div class="search">
<form action="#" class="header_search_form menu_mm">
<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
<i class="fa fa-search menu_mm" aria-hidden="true"></i>
</button>
</form>
</div>
<nav class="menu_nav">
<ul class="menu_mm">
<li class="menu_mm active"><a href="index.html">Home</li>
<li class="menu_mm"><a href="blog_page.html">Blog</a></li>
<li class="menu_mm"><a href="about_us.html">About</a></li>
<li class="menu_mm"><a href="contact.html">Contact</a></li>
</ul>
</nav>
</div>
</header>


<section id="intro">
<div class="carousel-item active">
<div class="carousel-background"><img src="imags/slider/slider1.jpg" alt=""></div>
<div class="carousel-container">
<div class="carousel-content">
<h2 class="font-color-white">African Labour & Manpower Empowerment Agencies Ltd.</h2>
<br>
<br>
<br>
<h4 class="font-color-white">Register</h4>
<div class="vertical-space-80"></div>
<h4 class="font-color-white">Home &gt; Create An Account</h4>
<div class="vertical-space-80"></div>
</section>

<!--Account Creation -->
<section id="signup" class="background-color-white">
    <div class="container">
        <div class="row">
            <div class="vertical-space-20"></div>
            <div class="col-lg-12 col-md-6 text-center">
                <h3 class="font-weight-700">PERSONAL INFORMATION</h3>
            </div>
        </div>
        <div class="vertical-space-20"></div>
        <div class="row">
            <div class="col-lg-3 col-md-6 vertical-space-2"></div>
            <div class="col-lg-6 col-md-6 vertical-space-2">
                    <div class="tab-content">
                        <form id="login" action="finalise_profile.php" method="POST" enctype="multipart/form-data"" class="tab-pane active">
                            <h4 class="font-weight-700">Create An Account</h4>
                            <div class="vertical-space-20"></div>
                            <div class="form-group">
                                <label class="font-weight-700">Sir Name *</label>
                                <input name="sName" required="" class="form-control" placeholder="First Name" type="text">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-700">Full Name *</label>
                                <input name="fName" required="" class="form-control" placeholder="Last Name" type="text">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-700">E-mail *</label>
                                <input name="eName" required="" class="form-control" placeholder="Your Email" type="email">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-700">Password *</label>
                                <input name="pName" required="" class="form-control " placeholder="Type Password" type="password">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div><div class="form-group">
                                <label class="font-weight-700">Confirm Password *</label>
                                <input name="pName" required="" class="form-control " placeholder="Type Password" type="password">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="text-left">
                                <button style="border-radius: 20px; width: 30%;" type="submit" class="btn btn-success" name="account">Create</button>
                            </div>
                        </form>
                    </div>
            </div>
            <div class="col-lg-3 col-md-6 vertical-space-2"></div>
        </div>
    </div>
</section>
    <!-- END -->


<footer id="footer" class="background-color-white">
    <div class="container">
    <div class="vertical-space-100"></div>
    <div class="row">
    
    <div class="col-lg-2 col-md-6 vertical-space-2"></div>
    <div class="col-lg-8 col-md-1 vertical-space-2">
        <a href="#">
        <i class="fa fa-facebook social-icon facebook"></i></a>
        <a href="#">
        <i class="fa fa-twitter social-icon twitter"></i></a>
        <a href="#">
        <i class="fa fa-pinterest-p social-icon pinterest-p"></i></a>
        <a href="#">
        <i class="fa fa-map-marker social-icon map-marker"></i></a>
        <a><i class="fa fa-phone social-icon"></i>0123 4567 8912</a>&nbsp;&nbsp;
        <a><i class="fa fa-envelope-o social-icon"></i>info@youremail.com</a>
    </div>
    <div class="col-lg-2 col-md-6 vertical-space-2"></div>
    </div>
    
    <div class="vertical-space-60"></div>
    </div>
    <div class="container-fluid background-color-orange main-footer">
    <div class="container text-center">
    <div class="vertical-space-30"></div>
    <p><a target="_blank" href="#">Copyright © 2020. All Rights Reserved</a></p>
    </div>
    </div>
</footer>

<script data-cfasync="false" src="js/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="js/jquery-ui.min.js"></script>

<script src="js/custom.js"></script>
<script>
        $(".search-icone").click(function(){
     // $(".menu").animate({height: "100vh"});
});

    </script>
</body>

</html>