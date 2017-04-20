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
</body>
</html>