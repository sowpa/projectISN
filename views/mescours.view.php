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
			<h2> Les cours à donner</h2>
			<br>
			<?php if($nbCours > 0){
				while($c = $coursQuery->fetch()){ ?>
				<div>
					<?php echo $c['titre']; ?>

					<div align="right">
						<input type="submit" value="Annuler" name="cancel">
					</div>
				</div>
				<?php }
			}
			else{
				echo "Personne n'est inscrit à un de vos cours";
				}?>


			<h2> Les cours à suivre</h2>
			<br>
			<?php if($nbCoursF > 0){
				while($c = $coursFollowed->fetch()){ ?>
				<div>
					<?php echo $c['titre']; ?>
					<div align="right">
					<input type="submit" value="J'ai suivi ce cours" name="followed">
					<input type="submit" value="Annuler" name="cancel">
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

