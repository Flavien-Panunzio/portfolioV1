<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Panunzio Flavien</title>
		<link rel="icon" type="image/png" href="img/favicon.png">

		<!--Jquery-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!--Bootstrap Js + CSS-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

		<!--Jquery redimentionnement filtre portfolio-->
		<script src="http://ricostacruz.com/jquery.transit/jquery.transit.min.js"></script>

		<!--FontAwesome-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

		<!--CSS + Js Perso -->
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<header class="header">
			<nav class="navbar navbar-expand-lg fixed-top">
				<a class="navbar-brand" href="#"><img class="logo" src="img/logo_perso_blanc.png" alt="Logo"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<i class="fas fa-bars fa-3x"></i>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link ancre" href="header">Accueil</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ancre" href=".portfolio">Portfolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ancre" href=".competences">Compétences</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ancre" href="#contact">Contact</a>
						</li>
					</ul>
			</nav>
			<h1 class="titre"> Portfolio de Panunzio Flavien</h1>
			<a class="scroll ancre" href=".portfolio"><img  class="gif-scroll" src="img/scroll.gif"></a>
		</header>

		<div class="container portfolio">
			<?php include('portfolio.php'); ?>
		</div>

		<div class="container competences">
			<h2>Compétences</h2>
			<div class="row">
				<!--Logo HTML-->
				<div class="col-3">
					<?php include('img/logo/HTML.svg'); ?>
				</div>
				<!--Logo CSS-->
				<div class="col-3">		
					<?php include('img/logo/CSS.svg'); ?>
				</div>
				<!--Logo PHP-->
				<div class="col-3">
					<?php include('img/logo/PHP.svg'); ?>
				</div>
				<!--Logo JavaScript-->
				<div class="col-3">
					<?php include('img/logo/JS.svg'); ?>
				</div>
			</div>
			<div class="images row">
				<!--Logo Illustrator-->
				<div class="col-4">
					<?php include('img/logo/AI.svg'); ?>
				</div>
				<!--Logo Photoshop-->
				<div class="col-4">
					<?php include('img/logo/Ps.svg'); ?>
				</div>
				<!--Logo InDesign-->
				<div class="col-4">
						<?php include('img/logo/Id.svg'); ?>
				</div>
			</div>
		</div>

		<footer class="container-fluid">
			<h2>Contactez-moi</h2>
			<div class="row">
				<div class="col-lg-6 col-md-12 gauchefooter">
					<form id="contact" method="POST">
						<div class="form-row">
							<div class="col-xl-4"></div>
							<div class="col-xl-4">
								<label for="surname">Nom</label>
								<input type="surname" name="surname" class="form-control" id="surname" placeholder="Saisir votre nom">
							</div>
							<div class="col-xl-4">
								<label for="name">Prénom</label>
								<input type="name" name="name" class="form-control" id="name" placeholder="Saisir votre prénom">
							</div>	
						</div>
						<div class="form-row">
							<div class="col-xl-4"></div>
							<div class="col-xl-4">
								<label for="email" required>E-mail</label>
								<input type="email" name="email" class="form-control" id="email" placeholder="Saisir votre E-mail">
							</div>
							<div class="col-xl-4">
								<label for="phone">Téléphone</label>
								<input type="phone" name="phone" class="form-control" id="phone" placeholder="Saisir votre numéro de téléphone">
							</div>
						</div>
						<div class="form-row">
							<div class="col-xl-4"></div>
							<div class="col-xl-8">
								<label for="message" required>Message</label>
								<textarea rows="4" cols="20" type="message" name="message" class="form-control" id="message" placeholder="Saisir votre message"></textarea>
							</div>
						</div>
						<button type="submit" class="btn btn-primary submit">Envoyer</button>
					</form>
				</div>
				<div class="col-lg-6 col-md-12">
					<table class="infos">
						<tr>
							<td><i class="fas fa-user-circle"></i></td>
							<td>Flavien Panunzio</td>
						</tr>
						<tr>
							<td><i class="fas fa-map-marker-alt"></i></td>
							<td>3 Rue du Pensionnat Notre-Dame de France,</td>
						</tr>
						<tr>
							<td></td>
							<td>43000 Le Puy-en-Velay </td>
						</tr>
						<tr>
							<td><i class="fas fa-envelope-square"></i></td>
							<td><a href="mailto:flavien.panunzio@gmail.com">flavien.panunzio@gmail.com</a></td>
						</tr>
						<tr>
							<td><i class="fas fa-phone"></i></td>
							<td><a href="tel:0678871814">06.78.87.18.14</a></td>
						</tr>
						<tr>
							<td colspan="2" class="tdreseaux">
								<a href="https://www.facebook.com/flavien.panunzio"><i class="reseaux fab fa-facebook-f fa-2x"></i></a>
									<a href="https://www.linkedin.com/in/flavien-panunzio"><i class="reseaux fab fa-linkedin fa-2x"></i></a>
									<a href="https://www.instagram.com/portfolio_panunzio_flavien/"><i class="reseaux fab fa-instagram fa-2x"></i></a>
									<a href="https://www.pinterest.fr/flavienpanunzio"><i class="reseaux fab fa-pinterest fa-2x"></i></a>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<p class="copy">&copy; Flavien PANUNZIO - 2018</p>
		</footer>
	</body>
	<?php include('mail.php'); ?>
</html>
