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

		<!-- affichage de la searchbar -->
		<div align="center">
			<form method="GET">
				<input type="search" name="q" placeholder="Recherche..." value="<?php if(!empty($q)) {echo $q;}?>" >
				<input type="submit" value="Chercher">
			</form>
		</div>



		<!-- Affichage des cours disponibles -->
		<?php if($nbCours > 0){ ?>
			<div align="center">		
				<?php while($c = $cours->fetch()){ ?>
					<a href="cours.php?id=<?= $c['c_id'] ?>">
						<b><?= $c['titre'] ?> - Proposé par <?= $c['pseudo'] ?> à <?= $c['ville'] ?></b>
					</a>
					<br>
					<i><?= $c['description'] ?></i>
					<br /><br />
				<?php }?>
				<?php }else{ ?>
					<b>Il n'y a aucun résultat pour la recherche : <?= $q ?></b>
				<?php } ?>			
			</div>
		<br /><br />


		<!-- Navigation entre les pages -->
		<div align="center">
			<?php if($currentPage != 1) {?>
				<a href="allcourses.php?q=<?= $q ?>&page=1">Premiere page</a>
				|
				<?php if($previousPage != 1) {?>
				<a href="allcourses.php?q=<?= $q ?>&page=<?= $previousPage ?>"><?= $previousPage ?></a>
				|
			<?php }} ?>
			
			<?= $currentPage ?>

			<?php if(!($nextPage >= $nbPages)){ ?>
				|
				<a href="allcourses.php?q=<?= $q ?>&page=<?= $nextPage ?>"><?= $nextPage ?></a>			
			<?php } ?>

			<?php if($currentPage != $nbPages){ ?>
				|
				<a href="allcourses.php?q=<?= $q ?>&page=<?= $nbPages ?>">Derniere page</a>
			<?php } ?>
		</div>
		<footer><?php include_once("includes/footer.php"); ?></footer>
	</div>
</body>
</html>