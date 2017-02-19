<!DOCTYPE html>
<html>
<head>
	<title>Projet ISN</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="design/style.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<header><?php include_once('includes/header.php'); ?></header>
	<div align="center">
		<h2>Inscription</h2>
		<br><br><br>
		<form method="POST" action="">
			<table>
				<tr>
					<td align="right">
						<label for="pseudo">Pseudo :</label>
					</td>
					<td>
						<input id="pseudo" type="text" name="pseudo" placeholder="Votre pseudo" value="<?php if(isset($pseudo)) echo $pseudo;?>">
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="mail">Mail :</label>
					</td>
					<td>
						<input id="mail" type="email" name="mail" placeholder="Votre mail" value="<?php if(isset($mail)) echo $mail;?>">
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="mail2">Confirmation du mail :</label>
					</td>
					<td>
						<input id="mail2" type="email" name="mail2" placeholder="Confirmation de votre mail" value="<?php if(isset($mail2)) echo $mail2;?>">
					</td>				
				</tr>
				<tr>
					<td align="right">
						<label for="password">Mot de passe :</label>
					</td>
					<td>
						<input id="password" type="password" name="password" placeholder="Votre mot de passe">
					</td>				
				</tr>
				<tr>
					<td align="right">
						<label for="password2">Confirmation du mot de passe :</label>
					</td>
					<td>
						<input id="password2" type="password" name="password2" placeholder="Confirmation de votre mdp">
					</td>				
				</tr>
			</table>
			<br>
			<div class="g-recaptcha" data-sitekey="6LfxDgwUAAAAAM9ctoroK6t0u7BsofOqPKe5Pe2z"></div>
			<br>
			<input type="submit" value="s'inscrire" name="forminscription">
		</form>
		<?php
			if (isset($erreur)) {
				echo $erreur;
			}
			if (isset($message)) {
				echo $message;
			}
		?>
		<p>Vous avez déjà un compte ? <a href="connexion.php">Connectez vous.</a></p>
	</div>
	<footer><?php include_once("includes/footer.php"); ?></footer>
</body>
</html>