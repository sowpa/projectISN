<!DOCTYPE html>
<html>
<head>
	<title>Projet ISN</title>
	<meta charset="utf-8">
	<?php include_once('includes/links.php'); ?>
</head>
<body>
	<div id = "main">
		<header><?php include_once('includes/header.php'); ?></header>
		<div align="center">
			<h2><?= $data['titre'] ?></h2>
			<br><br><br>
			<div>
				<p><?= nl2br($data['description_long']) ?></p>
			</div>
			<a href="inscriptioncours.php?id=<?= $data['id'] ?>">S'inscrire au cours</a>
		<footer><?php include_once("includes/footer.php"); ?></footer>
	</div>
</body>
</html>