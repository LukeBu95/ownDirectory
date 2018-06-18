<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
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
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="../css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="../js/respond.min.js"></script>
	<![endif]-->

	<script src="../js/jquery.down.js"></script>
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

<body style="background-image: url(../images/img_bg_2.jpg)">
<div class="gtco-loader"></div>

<div id="page">
	<div class="page-inner">

		<?php include "navbar.php"; ?>

		<div class="gtco-section border-bottom">
			<div class="gtco-container">
				<div class="row">

					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2>Verkauf von Getränken und Essen</h2>
						<div hidden="hidden"><a href="#" class="bestell">+BESTELLEN+</a></div>
					</div>
					<div class="col-md-24 col-md-offset-0 text-left">

						<form action="buchung.php" target="_self" method="post">
							<input type="hidden" name="username" value="<?php $username?>">
							<input type="hidden" name="userid" value="<?php $userid?>">
							<table border="1">
								<tbody>
								<tr>
									<td>Was wurde verkauft ?</td>
									<td>Wie viel verkauft ?</td>
									<td>Für wieviel verkauft ?</td>
									<td>Bar oder auf Karte ?</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td align=center>
										<div class="form-group">
											<div class="col-md-12">
												<select id="item_name" name="item_name" class="form-control">
													<option value="1">Option jbasdjkbasdkjbasdjkbasdkjasdkjasdkjasdkj
														one
													</option>
													<option value="2">Option two</option>
												</select>
											</div>
										</div>
									</td>
									<td align=center>
										<div class="form-group">
											<div class="col-md-5">
												<input id="item_anzahl" name="item_anzahl" type="number" placeholder="" class="form-control input-md">
											</div>
										</div>
									</td>
									<td align=center>
										<div class="col-md-8">
											<input id="item_price" name="item_price" type="text" placeholder="Trinkgeld" class="form-control input-md">
										</div>
									</td>
									<td align=center>
										<div class="form-group">
											<label class="col-md-4 control-label" for="checkboxes"></label>
											<div class="col-md-4">
												<label class="checkbox" for="checkboxes-0">
													<input type="checkbox" name="item_barzahlung" id="checkboxes-0" value="1">
												</label>
											</div>
										</div>
									</td>
									<td>
										<input type="submit" class="btn btn-primary" value="Bestellen">
									</td>
								</tr>

								</tbody>
							</table>
						</form>


					</div>
				</div>
			</div>
		</div>

		<div class="gtco-section border-bottom">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2>Auflistung des Verkauftem </h2>
						<p>Hier stehen dann die Einträge, wieviel wovon für welchen Preis verkauft wurde</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="../images/img_2.jpg" class="fh5co-project-item image-popup">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="../images/img_2.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2>Constructive heading</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="../images/img_3.jpg" class="fh5co-project-item image-popup">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="../images/img_3.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2>Constructive heading</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="../images/img_4.jpg" class="fh5co-project-item image-popup">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="../images/img_4.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2>Constructive heading</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							</div>
						</a>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="../images/img_1.jpg" class="fh5co-project-item image-popup">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="../images/img_1.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2>Constructive heading</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="../images/img_5.jpg" class="fh5co-project-item image-popup">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="../images/img_5.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2>Constructive heading</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="../images/img_6.jpg" class="fh5co-project-item image-popup">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="../images/img_6.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2>Constructive heading</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							</div>
						</a>
					</div>

				</div>
			</div>
		</div>

		<div id="gtco-products">
			<div class="gtco-container">
				<div class="row">

				</div>
			</div>
		</div>

		<div id="gtco-subscribe">
			<div class="gtco-container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2>Subscribe</h2>
						<p>Be the first to know about the new templates.</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2">
						<form class="form-inline">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Your Email">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<button type="submit" class="btn btn-default btn-block">Subscribe</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<footer id="gtco-footer" role="contentinfo">
			<div class="gtco-container">
				<div class="row row-p	b-md">

					<div class="col-md-4">
						<div class="gtco-widget">
							<h3>About <span class="footer-logo">Splash<span>.<span></span></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint
								ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat repudiandae
								cum. Totam cupiditate nostrum ut neque ab?</p>
						</div>
					</div>

					<div class="col-md-4 col-md-push-1">
						<div class="gtco-widget">
							<h3>Links</h3>
							<ul class="gtco-footer-links">
								<li><a href="#">Knowledge Base</a></li>
								<li><a href="#">Career</a></li>
								<li><a href="#">Press</a></li>
								<li><a href="#">Terms of services</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-4">
						<div class="gtco-widget">
							<h3>Get In Touch</h3>
							<ul class="gtco-quick-contact">
								<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
								<li><a href="#"><i class="icon-mail2"></i> info@FreeHTML5.co</a></li>
								<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
							</ul>
						</div>
					</div>

				</div>

				<div class="row copyright">
					<div class="col-md-12">
						<p class="pull-left">
							<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
							<small class="block">Designed by
								<a href="http://FreeHTML5.co/" target="_blank">FreeHTML5.co</a> Demo Images:
								<a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
						</p>
						<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
						</p>
					</div>
				</div>

			</div>
		</footer>
	</div>

</div>

<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="../js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="../js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="../js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="../js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="../js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="../js/main.js"></script>

</body>
</html>

