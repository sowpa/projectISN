<!DOCTYPE html>
<html>
<head>
	<title>Projet ISN</title> 
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="design/style.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
	<div id = "main">
		<header><?php include_once('includes/header.php'); ?></header>

		<div align="center">
			<h2> Les cours à donner</h2>
			<br>
			<div>
				<div align="right">
				<input type="submit" value="Annuler" name="cancel">
				</div>
			</div>



			<h2> Les cours à suivre</h2>
			<br>
			<div>
				<div align="right">
				<input type="submit" value="J'ai suivi ce cours" name="followed">
				<input type="submit" value="Annuler" name="cancel">
				</div>

			</div>

		</div>




<footer><?php include_once("includes/footer.php"); ?></footer>
	</div>
</body>
</html>

