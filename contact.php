<?php
/**
 * Created by PhpStorm.
 * User: nbkm8y5
 * Date: 8/13/15
 * Time: 6:31 PM
 */
?>
<!--Rolando Moreno
Web Developer
01.04.2015

developer@rolandomoreno.com
Revision 0.4
-->
<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 9]>
<html class="ie9" lang="en"> <![endif]-->
<!--[if IE 10]>
<html class="ie10" lang="en"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]>
<html lang="en"> <![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MPS Main Web Portal">
    <meta name="author" content="Rolando Moreno">
    <title>Mental, Physical, Spiritual - Dry Fit Sports Apparel</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!--This is the default links from google fonts CDN. This allows for the usage of the google fonts listed below.-->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/body.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section id="navigationBar">
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div id="navMargin" class="pull-left col-md-5 col-xs-12 navList">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="brand.html">The Brand</a></li>
                        <li><a href="team.html">Team MPS</a></li>
                    </ul>
                </div>
                <div id="navMargin" class="pull-right col-md-5 col-xs-12 navList">
                    <ul>
<!--                        <li><a id="menu" href="http://blog.mpslifestyle.com">Blog</a></li>-->
                        <li><a id="menu" href="contact.php">Contact Us</a></li>
                        <li class="storeColor"><a id="menu" href="store.html">Store</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of nav-->
</section>
<section id="contactus" class="container text-center">
    <div class="col-md-6">
        <h1 style="color: red;">WE WANT TO HEAR FROM YOU!</h1>
        <h2 style="color: #ffffff">Contact Us</h2>
        <h3 style="color: #ffffff">Have a question for MPS? Fill out the form below and we will get back shortly.</h3>
    <form action="contact.php" method="post">
        <div class="form-group">
            <label for="comments" style="color:#fff">Message</label>
                <textarea class="form-control" rows="10" id="comments" name="comments" required
                          placeholder="Comments"></textarea>
        </div>
        <div class="form-group">
            <label class="control-label" for="firstName" style="color: #ffffff">First Name</label>
            <input type="text" class="form-control" id="firstName" name="FIRSTNAME" required
                   placeholder="Enter First Name">
        </div>
        <div class="form-group">
            <label class="control-label" for="lastName" style="color: #ffffff">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="LASTNAME" required
                   placeholder="Enter Last Name">
        </div>
        <div class="form-group">
            <label class="control-label" for="city" style="color: #ffffff">City</label>
            <input type="text" class="form-control" id="city" name="CITY" required
                   placeholder="Enter City">
        </div>
        <div class="form-group">
            <label class="control-label" for="state" style="color: #ffffff">State</label>
            <input type="text" class="form-control" id="state" name="STATE" required
                   placeholder="Enter State">
        </div>
        <div class="form-group">
            <label class="control-label" for="emailAddress" style="color: #ffffff">Email address</label>
            <input type="email" class="form-control" id="emailAddress" name="EMAILADDRESS" required
                   placeholder="Enter email">
        </div>

        <button type="submit" class="btn btn-primary" value="Send" disabled="true">Submit</button>
    </form>
</div>
    <div class="col-md-6">
        <div id="mycarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/contact.jpg" alt="contact_us" class="image-responsive">
                <div class="carousel-caption">
                    <img src="images/avatar.png" height="100">
                    <h1>Located in Miami, Florida</h1>
                    <h1>You can also email us at <a href="mailto:info@mpslifestyle.com">info@mpslifestyle.com</a></h1>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>

<div class="footer">
    <div class="container">
        <div class="row">
            <div id="footerTopRow" class="col-xs-12 col-md-4">
                <!--<h2>SIGN UP!</h2>-->

                <!--<form class="form-inline" role="form">-->
                <!--<div class="form-group">-->
                <!--<div class="input-group">-->
                <!--<label class="sr-only" for="exampleInputEmail2">Email address</label>-->

                <!--<div class="input-group-addon">@</div>-->
                <!--<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">-->
                <!--</div>-->
                <!--</div>-->
                <!--<button type="submit" class="btn btn-default">Submit</button>-->
                <!--</form>-->
            </div>
            <div id="footerTopRow" class="col-xs-12 col-md-4">
                <h2>Mental | Physical | Spiritual</h2>

                <p>Miami, Florida, USA</p>

                <div id="footer-social">
                    <a href="http://www.facebook.com/MpsLifestyle" target="_blank"><img src="images/fb_light_blue.png"
                                                                                        alt="Facebook Logo"></a>
                    <a href="http://twitter.com/mpslifestyle" target="_blank"><img src="images/twitter_light_blue.png"
                                                                                   alt="Twitter Logo"></a>
                    <a href="https://www.youtube.com/channel/UCCN-moWraHd6UygiAb2dF6g" target="_blank"><img src="images/plus_light_blue.png"
                                                                                                            alt="YouTube Logo"></a>
                    <a href="http://www.instagram.com/mps_lifestyle" target="_blank"><img src="images/instagram_light_blue.png"
                                                                                          alt="Instagram Logo"></a>
                </div>
            </div>
            <div id="footerTopRow" class=" col-xs-12 col-md-4">
                <!--<h2>NEED HELP?</h2>-->
            </div>
        </div>
        <div class="row">
            <div id="footerBottomRow" class="col-md-12 text-center">
                <p> &copy 2015 MPS Lifestyle USA, LLC</p>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-66011763-1', 'auto');
    ga('send', 'pageview');

</script>

</body>
</html>