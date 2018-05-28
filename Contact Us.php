<!DOCTYPE html>
<html>
<?php
extract($_POST);
?>
<head>
<?php include'php/link.php'; ?>
	<meta charset="UTF-8" />
		<title>Contact Us</title>
		<script src="js/map.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDy1paoiUBEn85vEMVLWQSFTdVi3oDEQ4k&callback=initMap">
    </script>
	
	
	</head>
<body>
	<header class="site-header-wrap">
	<?php include'php/nav.php'; ?>
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
											<input value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required="" type="text" onblur="namev()">
										</div>
										<div class="col-md-6">
												<label>Email</label>
												<input  onblur="emailv()" data-msg-required="Please enter your Email." maxlength="100" class="form-control" name="email" id="email" required="" type="email" value="<?php  if (isset($_POST['femail'])){echo $_POST['femail'];}else{echo "";}?>" onblur="emailcv()">
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
												<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required=""><?php if (isset($_POST['fmessage'])){echo $_POST['fmessage'];}else{echo "";}?></textarea>
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
	<?php include'php/footer.php'; ?>
</body>
</html>