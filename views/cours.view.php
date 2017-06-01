<!DOCTYPE html>
<html>
<head>
	<title>Projet ISN</title>
	<meta charset="utf-8">
	<?php include_once('includes/links.php'); ?>
	<link rel="stylesheet" type="text/css" href="design/cours.css">
</head>

<body>
	<div id = "main">
		<header><?php include_once('includes/header.php'); ?></header>
		<div align="center">
			<h2 class="titre"><?= $data['titre'] ?></h2>
			<br><br><br>
			<div>
				<p><?= nl2br($data['description_long']) ?></p>
				<p>Ville : <?= $data['ville'] ?></p>
				<p>Proposé par : <?= $data['pseudo'] ?></p>
			</div>
			<a class ="inscripcours"href="inscriptioncours.php?id=<?= $data['id'] ?>">S'inscrire au cours</a>
			<br><br><br>
			
			<br><br><br><br><br><br>
			<br><br><br><br><br><br>
			<br><br><br><br><br><br>
			<br><br><br><br><br><br>
		</div>
	<footer><?php include_once("includes/footer.php"); ?></footer>
	</div>

</body>

</html>