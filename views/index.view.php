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
		<h1>Projet ISN</h1>		
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
	<a href="allcourses.php">Voir tous les cours</a>
	<footer><?php include_once("includes/footer.php"); ?></footer>
</body>
</html>