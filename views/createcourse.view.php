<!DOCTYPE html>
<html>
<head>
	<title>Projet ISN</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="design/style.css">
</head>
<body>
	<div id = "main">
		<header><?php include_once('includes/header.php'); ?></header>
		<div align="center">
			<h2 class="titrecrea">Création de cours</h2>
			<br><br><br>
			<form name="creation" method="POST" action="">
			<div class="form-crea">
			<br>
				<label for="titre">Le titre de votre cours : </label>
				<input type="text" name="titre" id="titre" placeholder="Exemple : Echec et math" /><br /><br />
				<label for="ville">La ville ou vous donnerez votre cours : </label>
				<input type="text" name="ville" id="ville" placeholder="Exemple : Paris" /><br /><br />
				<label for="description">Une courte description de votre cours : </label>
				<textarea rows="3" name="description" id="description" placeholder="Exemple : Apprenez les math avec un élève de terminal S !" cols="24"></textarea><br /><br />
				<label for="description_long">Une longue description de votre cours : </label>
				<textarea rows="5" name="description_long" id="description_long" cols="24"></textarea><br /><br />
				
			</div>

			<br><br><br>
				<input class="btncrea" type="submit" name="submit" value="Créer ce cours" />
			</form>
			<?php
				if (isset($erreur)) {
					echo $erreur;
				}
				if (isset($message)) {
					echo $message;
				}
			?>
		</div>	
		<footer><?php include_once("includes/footer.php"); ?></footer>
	</div>
</body>
</html>