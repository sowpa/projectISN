<!DOCTYPE html>
<html>
<head>
	<title>Projet ISN</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="design/style.css">
</head>
<body>
	<header><?php include_once('includes/header.php'); ?></header>
	<div align="center">
		<h2>Connexion</h2>
		<br><br><br>
		<form method="POST" action="">
			<input type="email" name="mailconnect" placeholder="Mail" value="
			<?php if(isset($mailconnect)) echo $mailconnect;?>"/>
			<input type="password" name="passwordconnect" placeholder="Mot de passe" />
			<br /><br />
			<input type="checkbox" name="rememberme" id="remembercheckbox"><label for="remembercheckbox">Se souvenir de moi</label>
			<br /><br />
			<input type="submit" name="formconnect" value="se connecter" />
		</form>
		<?php
			if (isset($erreur)) {
				echo $erreur;
			}
			if (isset($message)) {
				echo $message;
			}
		?>
		<p>Pas encore de compte ? <a href="inscription.php">Inscrivez vous</a>.</p>
	</div>	
	<footer><?php include_once("includes/footer.php"); ?></footer>
</body>
</html>