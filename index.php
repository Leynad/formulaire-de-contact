<!DOCTYPE html>
<html>
	<head>
		<title>Contactez-moi</title>
		<meta charset="utf-8"/>
		<!--Formulaire responsive-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--CDN JQuery-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		
		<!--TESTING BOOTSTRAP V3.3.6-->
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<!--//TESTING BOOTSTRAP V3.3.6-->
		
		<!--CDN Bootstrap for JQuery and Popper.js /!\ INCLURE AVANT /!\-->
<!--		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<!--		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>-->
		<!--CDN Bootstrap CSS and JS /!\ INCLURE APRES /!\-->
<!--		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">-->
<!--		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>-->
		
		<!--Font Family-->
		<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		<!--CSS-->
		<link rel="stylesheet" href="css/style.css">
		<!--JQuery-->
		<script src="js/script.js"></script>
	</head>
	
	<body>
		
		<div class="container">
			<div class="divider"></div>
			<div class="heading">
				<h2>Contactez-moi</h2>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<form id="contact-form" method="post" action="" role="form">
						<div class="row">
							<!--Prénom/Nom/Email/Tel-->
							<div class="col-md-6">
								<label for="firstname">Prénom <span class="blue">*</span></label>
								<input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="">
								<p class="comments"></p>
							</div>
							
							<div class="col-md-6">
								<label for="nom">Nom <span class="blue">*</span></label>
								<input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value="">
								<p class="comments"></p>
							</div>
							
							<div class="col-md-6">
								<label for="email">Email <span class="blue">*</span></label>
								<input type="email" id="email" name="email" class="form-control" placeholder="Votre email" value="">
								<p class="comments"></p>
							</div>
							
							<div class="col-md-6">
								<label for="phone">Téléphone </label>
								<input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value="">
								<p class="comments"></p>
							</div>
							<!--//Prénom/Nom/Email/Tel-->
							
							<!--Message-->
							<div class="col-md-12">
								<label for="message">Message<span class="blue">*</span></label>
								<textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4"></textarea>
								<p class="comments"></p>
							</div>
							<!--//Message-->
							
							<!--Infos requises-->
							<div class="col-md-12">
								<p class="blue"><strong>* Ces informations sont requises</strong></p>
							</div>
							<!--//Infos requises-->
							
							<!--Button: Envoyer-->
							<div class="col-md-12">
								<input type="submit" class="button1" value="Envoyer">
							</div>
							<!--//Button: Envoyer-->
						</div>
						
						
					</form>
				</div>
			</div>
		</div>
	</body>
</html>