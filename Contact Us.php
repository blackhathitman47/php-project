<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
		<title>Contact Us</title>
		<link rel="shortcut icon" href="images/icon.ico">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/resp.css" />
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key= AIzaSyDy1paoiUBEn85vEMVLWQSFTdVi3oDEQ4k &callback=initMap">
    </script>
	<script src="js/map.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
		
</head>
<body>
	<header class="site-header-wrap">
		<header class="row  top-bar">
			<div class="inl-bloc">
				<i class="fa fa-home" aria-hidden="true"></i>
				<p class="p-color-font inl-bloc">Hay Moulay Abdellah, Rue 295 N°1, Sur Boulvars Mouhamed 6, Casablanca</p>
			</div>
			<div class="fl-right inl-bloc">
				<p class="p-color-font inl-bloc">Follow us : </p>
				<a href="https://www.facebook.com/Multi-Parts-Auto-171881533518473/?ti=as" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
			</div>
		</header>
		<header class="clear bar">
			<img src="images/Multi-Parts (Final).jpg">
			<div id="div-info" class="fl-right inl-bloc">
				<div class=" inl-bloc info-wrap">
					<i class="fa fa-comments-o fa-4x" aria-hidden="true"></i>
					<p class="info-p inl-bloc">+212 000 000 000
					<br>contact@gmail.com</p>
				</div>
				<div class=" inl-bloc info-wrap">
					<i class="fa fa-clock-o fa-4x" aria-hidden="true"></i>
					<p class="info-p inl-bloc"> 8:00 - 17:30
					<br>Monday to Saturday</p>
				</div>
			</div>
		</header>
		<header id="nav" class="clear bar nav-color">
			<nav class="navbar navbar-inverse navmod">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed btt-colore " data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html">Multi-Parts Auto</a>
					</div>
					<div class="navbar-collapse collapse" aria-expanded="false" style="height: 0.8px;">
						<ul class="nav navbar-nav ">
							<li class="active"><a class="bg-active" href="index.html">Home</a></li>
				 		    <li><a href="About Us.html">About Us</a></li>
						    <li><a href="contact us.html">Contact</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Engine Parts</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Transmission</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Electrical Part</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Part Suspension</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Lubricant + Antifreeze And Additive</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Lubricating Oil</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Other</a></li>
								</ul>
							</li>
						</ul>
					 </div><!--/.nav-collapse -->
				</div>
			</nav>
		</header>
	</header>
	<main>
			<section id="section1">
    		<div id="map"></div>
			</section>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h2 class="mb-sm mt-sm text-h2">
								<strong>Contact</strong>
								Us
							</h2>
							<form action="" method="POST">
								<div class="row form-group">
									<div class="form-group">
										<div class="col-md-6">
											<label>Nom et Prénom</label>
											<input value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required="" type="text">
										</div>
										<div class="col-md-6">
												<label>Email</label>
												<input value="" data-msg-required="Please enter your Email." maxlength="100" class="form-control" name="email" id="email" required="" type="email">
										</div>
									</div>
								</div>
								<div class="row form-group">
										<div class="form-group">
											<div class="col-md-6">
												<label>Sujet</label>
												<input value="" data-msg-required="Please enter your Sujet." maxlength="100" class="form-control" name="Sujet" id="Sujet" required="" type="text">
											</div>
											<div class="col-md-6">
													<label>Telephone</label>
													<input value="" data-msg-required="Please enter your telephone." maxlength="100" class="form-control" name="telephone" id="telephone" required="" type="tel">
											</div>
										</div>
								</div>
								<div class="row form-group">
										<div class="form-group">
											<div class="col-md-12">
												<label>Message</label>
												<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required=""></textarea>
											</div>
										</div>
								</div>
								<div class="row form-group">
										<div class="form-group">
											<div class="col-md-12">
												<input value="Envoyer" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading..." type="submit">
											</div>
										</div>
								</div>							
							</form>
						</div>
						<div class="col-md-6">
								<h4 class="heading-primary mt-lg"></h4>
								<p class="par-de">VOUS SOUHAITEZ EN SAVOIR PLUS SUR NOS MATERIAES ?
									<br>N’hésitez pas à nous contacter</p>
								<hr>
	
								<h4 class="heading-primary">Notre <strong>Magasin</strong></h4>
								<ul class="list list-icons list-icons-style-3 mt-xlg">
									<li><i class="fa fa-map-marker"></i> <strong>Address:</strong> Hay Moulay Abdellah, Rue 295 N°1, Casablanca</li>
									<li><i class="fa fa-phone"></i> <strong>Téléphone:</strong> +212 666 05 47 43</li>
									<li><i class="fa fa-fax"></i> <strong>Fax:</strong> +212 522 52 53 14</li>								
									<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="#">Multi-Parts Auto@gmail.com</a></li>
								</ul>
	
								<hr>
	
								<h4 class="heading-primary">Heures <strong> De Travail</strong></h4>
								<ul class="list list-icons list-dark mt-xlg">
									<li><i class="fa fa-clock-o"></i><strong> Lundi - Vendredi</strong></li>
									<li><i class="fa "></i>  08h30---------------------12h30</li>
									<li><i class="fa "></i>  14h30---------------------18h30</li>
									<li><i class="fa fa-clock-o"></i><strong> Samedi</strong></li>
									<li><i class="fa "></i>8h30----------------------13h </li>
								</ul>
	
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer class="footer-distributed">
				<div class="footer-left">
	
					<h3>Multi<span>-Parts</span> Auto</h3>
	
					<p class="footer-links">
						<a href="index.html">Home</a>
						·
						<a href="About Us.html">About Us</a>
						·
						<a href="#">Products</a>
						·
						<a href="#">Gallery</a>
					</p>
	
					<p class="footer-company-name">Copyright.Talon &copy; 2018</p>
	
					<div class="footer-icons">
	
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
	
					</div>
	
				</div>
				<div class="footer-right">
	
					<p>Contact Us</p>
	
					<form action="#" method="post">
	
						<input type="text" name="email" placeholder="Email" />
						<textarea name="message" placeholder="Message"></textarea>
						<button>Send</button>
	
					</form>
	
				</div>
			</footer>
</body>
</html>