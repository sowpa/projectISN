<!DOCTYPE html>
<html>
<head>
	<title>Projet ISN</title>
	<meta charset="utf-8">
	<?php include_once('includes/links.php'); ?>
	<link rel="stylesheet" type="text/css" href="design/createcourse.css">
</head>
<body>
	<div id = "main">
		<header><?php include_once('includes/header.php'); ?></header>
		<div align="center">
			<h2 class="titrecrea">Création de cours</h2>
			<br><br><br>
			<form class="form-horizontal" name="creation" method="POST" action="">
			
			<div class="form-crea">
			<br>
				<div class="form-group">
				<label class="col-md-4 control-label" for="titre">Le titre de votre cours : </label>
					<div class="col-md-4">
						<input id="titre" name="titre" type="text" placeholder="Exemple : Échec et maths" class="form-controlinput-md">
					</div>
				</div><br/><br />


				<div class="form-group">
  				<label class="col-md-4 control-label" for="ville">La ville où vous donnerez votre cours :</label> 
					<div class="col-md-4">
						<input id="ville" name="ville" type="text" placeholder="Exemple : Paris" class="form-controlinput-md">
					</div>
				</div><br /><br />

				<div class="form-group">
				<label class="col-md-4 control-label" for="description">Une courte description de votre cours : </label>
					<div class="col-md-4">
						<textarea rows="3" name="description" id="description" placeholder="Exemple : Apprenez les math avec un élève de terminal S !" cols="24" class="form-controlinput-md"></textarea>
					</div>
				</div>				

				<br/><br/>

				<div class="form-group">
				<label class="col-md-4 control-label" for="description_long">Une longue description de votre cours : </label>
				<br/>
					<div class="col-md-4">
						<textarea rows="15" name="description_long" id="description_long" cols="30" class="form-controlinput-md"></textarea><br/>
					</div>
				</div>
				<br/><br/>
				
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