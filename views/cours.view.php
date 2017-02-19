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
		<h2><?= $data['titre'] ?></h2>
		<br><br><br>
		<div>
			<p><?= nl2br($data['description_long']) ?></p>
		</div>
		<a href="inscriptioncourse.php?id=<?= $data['id'] ?>">S'inscrire au cours</a>
	<footer><?php include_once("includes/footer.php"); ?></footer>
</body>
</html>