<?php
/**
 * Created by PhpStorm.
 * User: Lukas Buttke
 * Date: 18.06.2018
 * Time: 14:41
 */ ?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Christus für Hannover</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Christus für Hannover"/>
	<meta name="author" content="Lukas Buttke"/>


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

	<script src="js/jquery.down.js"></script>
	<script type="text/javascript">

	$(document).ready(function () {
		$('.bestell').click(function () {

			$("tr:last").after(
				'<tr>' +
				'<td>' +
				'<div class="form-group">' +
				'<div class="col-md-4">' +
				'<input id="textinput" name="textinput" type="text" placeholder="Anzahl" class="form-control input-md">' +
				'</div>' +
				'</div>' +
				'</td>' +
				'<td>' +
				'<div class="form-group">' +
				'<div class="col-md-12">' +
				'<select id="selectbasic" name="selectbasic" class="form-control">' +
				'<option value="1">Option jbasdjkbasdkjbasdjkbasdkjasdkjasdkjasdkj one </option>' +
				'<option value="2">Option two</option>' +
				'</select>' +
				'</div>' +
				'</div>' +
				'</td>' +
				'<td>' +
				'<div class="col-md-8">' +
				'<input id="textinput" name="textinput" type="text" placeholder="preis" class="form-control input-md">' +
				'</div>' +
				'</td>' +
				'<td>' +
				'<input type="submit" class="btn btn-primary" value="Bestellen">' +
				'</td>' +
				'</tr>'
			);

		})


		});

	</script>
</head>