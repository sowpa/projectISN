<!DOCTYPE html>
<html>
<head>
	<title>Projet ISN</title>
	<meta charset="utf-8">
	<?php include_once('includes/links.php'); ?>
	<link rel="stylesheet" type="text/css" href="design/connexion.css">
</head>

<body>
	<div id = "main">
		<header><?php include_once('includes/header.php'); ?></header>
		<div align="center">

			<h2 class="titreconnex">Connexion</h2>

			<br><br><br>

			<form method="POST" action="">
			<br><br>

				<div class="form-connex">

          		<div class="form-group">           	
            	<div class="col-md-4">
            	<input id="mailconnect" type="email" name="mailconnect" placeholder="Votre mail..." class="form-controlinput-md" value="<?php if(isset($mailconnect)) echo $mailconnect;?>"/>
            	</div>
          		</div>

          		<div class="form-group">
            	<div class="col-md-4">
            	<input id="passwordconnect" type="password" name="passwordconnect" placeholder="Votre mot de passe..." class="form-controlinput-md" />
            	</div>
         	 	</div>

				

				<br/><br/>
				<input type="checkbox" name="rememberme" id="remembercheckbox"><label for="remembercheckbox">Se souvenir de moi</label>
				<br /><br />
				</div>
			

			<br><br><br>
				<input class="btnconx" type="submit" name="formconnect" value="Se connecter" />
			</form>



			<?php
				if (isset($erreur)) {
					echo $erreur;
				}
				if (isset($message)) {
					echo $message;
				}
			?>
			<br /><br />

			<p>Pas encore de compte ? <a href="inscription.php">Inscrivez vous</a>!</p>

		</div>	
		<footer><?php include_once("includes/footer.php"); ?></footer>
	</div>
</body>

</html>