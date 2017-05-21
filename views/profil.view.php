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
			<h1>Profil de <?php echo $userinfo['pseudo']; ?></h1>
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
		</div>

		<footer><?php include_once("includes/footer.php"); ?></footer>
	</div>
</body>
</html>