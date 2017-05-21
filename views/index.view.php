<!DOCTYPE html>
<html>
<head>
	<title>Projet ISN</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min">
	<link rel="stylesheet" type="text/css" href="design/style.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



</head>
<body>
	<div id = "main">
		<header><?php include_once('includes/header.php'); ?></header>
		<div align="center">
			<h1>Les derniers cours</h1>		
		</div>
		<div align="center">
		<?php while($c = $cours->fetch()) {	?>
			<div class="cours-display">
				<a href="cours.php?id=<?= $c['c_id']?>" >
					<h6><?= $c['titre'] ?> - <?= $c['pseudo']?></h6>
					<div><?= $c['description'] ?></div>
				</a>
			</div>	
		<?php } ?>
		</div>
			<div class="boutonun">
				<a href="allcourses.php">Trouver un cours</a></div>
			<div class="boutondeux">
				<a href="createcourse.php">Créer un cours</a></div>
		</div>
		<footer><?php include_once("includes/footer.php"); ?></footer>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>