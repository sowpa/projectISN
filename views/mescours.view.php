<!DOCTYPE html>
<html>
<head>
	<title>Projet ISN</title> 
	<meta charset="utf-8">
	<?php include_once('includes/links.php'); ?>
	<link rel="stylesheet" type="text/css" href="design/mescours.css">
</head>

<body>
	<div id = "main">
		<header><?php include_once('includes/header.php'); ?></header>

		<div align="center">
			<h2 class="titreadonner"> Les cours à donner</h2>
			<br>
			<?php if($nbCours > 0){
				while($c = $coursQuery->fetch()){ ?>
				<div>
					<?php echo $c['titre']; ?>

					<div align="right">
						<a class="annulercours" href="validations.php?annulerCours=<?php echo $c['id']; ?>">Annuler ce cours</a>
					</div>
				</div>
				<?php }
			}
			else{
				echo "Personne n'est inscrit à un de vos cours";
				}?>

			<br>
			<h2 class="titreasuivre"> Les cours à suivre</h2>
			<br>
			<?php if($nbCoursF > 0){
				while($c = $coursFollowed->fetch()){ ?>
				<div>
					<?php echo $c['titre']; ?>
					<div align="right">
					<a class="suivi" href="validations.php?coursSuivi=<?php echo $c['id']; ?>">J'ai suivi ce cours</a>
					<a class="plussuivre" href="validations.php?coursNonSuivi=<?php echo $c['id']; ?>">Ne plus suivre ce cours</a>
					</div>

				</div>

			<?php }
			}
			else{
				echo "Vous n'êtes inscrit à aucun cours";
			}?>

		</div>




<footer><?php include_once("includes/footer.php"); ?></footer>
	</div>
</body>
</html>

