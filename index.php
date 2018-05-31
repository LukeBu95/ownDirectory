<?php

if(isset($_COOKIE["username"])) {
	header("Status: 200");
	header("Location: ./buchung");
}

?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tequilala Buchungen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tequilala Buchungen"/>
    <meta name="author" content="David Adams"/>


    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body style="background-image: url(../images/img_bg_2.jpg)">

<div class="gtco-loader"></div>

<div id="page">

    <div class="page-inner">

        <header id="gtco-header" class="gtco-cover_login" role="banner" style="background-image: url(images/img_4.jpg)">
            <div class="overlay"></div>
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-left">


                        <div class="row row-mt-15em">
                            <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                                <span class="intro-text-small">Welcome to Tequi-la-la</span>
                                <h1>The best Bar in Town</h1>
                            </div>
                            <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                                <div class="form-wrap">
                                    <div class="tab">
                                        <ul class="tab-menu">
                                            <li class="active gtco-first"><a href="#" data-tab="login">Verkäufer-login</a></li>
											<li class="gtco-second"><a href="#" data-tab="signup">Kunden-login</a></li>
										</ul>
                                        <div class="tab-content">
                                            <div class="tab-content-inner active" data-content="login">
                                                <form action="login.php" method="post">
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <label for="username">Verkäufername</label>
                                                            <input type="text" class="form-control" name="user" id="username">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <label for="password">Password</label>
                                                            <input type="password" class="form-control" name="pw" id="password">
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <input type="submit" class="btn btn-primary" value="Login">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

											<div class="tab-content-inner" data-content="signup">
												<form action="#">
													<div class="row form-group">
														<div class="col-md-12">
															<label for="username">Username or Email</label>
															<input type="text" class="form-control" id="username">
														</div>
													</div>

													<div class="row form-group">
														<div class="col-md-12">
															<input type="submit" class="btn btn-primary" value="Sign up">
														</div>
													</div>
												</form>
											</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </header>

    </div>

</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="js/main.js"></script>

</body>
</html>


