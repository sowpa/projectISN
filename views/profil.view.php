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
			<h1 class="titre">Profil de <?php echo $userinfo['pseudo']; ?></h1>
			<br /><br />
			<img src="membres/avatars/<?php echo $userinfo['avatar']; ?>" width=150>
			<br /><br />
			Pseudo : <?php echo $userinfo['pseudo']; ?>
			<br /><br />
			Mail : 	<?php echo $userinfo['mail']; ?>
			<br /><br />
			<?php if($mine){ ?>
			<a href="editionprofil.php">Editer mon profil</a>
			<br>
			<a href="mescours.php">Mes cours</a>
			<?php } ?>

		<br><br><br><br><br><br>
		<br><br><br><br><br><br>
		<br><br><br><br><br><br>
		</div>

		<footer><?php include_once("includes/footer.php"); ?></footer>
	</div>
</body>
</html>