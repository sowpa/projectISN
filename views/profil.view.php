<!DOCTYPE html>
<html>
<head>
	<title>Projet ISN</title>
	<meta charset="utf-8">
	<?php include_once('includes/links.php'); ?>
	<link rel="stylesheet" type="text/css" href="design/profil.css">
</head>
<body>
	<div id = "main">
		<header><?php include_once('includes/header.php'); ?></header>
		<div align="center">
			<h1 class="titre">Profil de <?php echo $userinfo['pseudo']; ?></h1>
			<br /><br />
			<div class="profil">
			<img src="membres/avatars/<?php echo $userinfo['avatar']; ?>" class="pdp">
			<br/><br/>
			<div class="infos">
			<p> Pseudo : <?php echo $userinfo['pseudo']; ?> </p>
			<br/>
			<p> Mail : 	<?php echo $userinfo['mail']; ?> </p>
			<br/>
			<p> Crédit(s) : 	<?php echo $userinfo['credit']; ?> </p>
			</div>
			<br /><br />
			<?php if($mine){ ?>
			<a class="linkedition" href="editionprofil.php">Editer mon profil</a>
			<br/><br/>
			<a class="linkmescours" href="mescours.php">Mes cours</a>
			<?php } ?>
			<br/><br/>
			</div>

		</div>
		<br><br><br><br><br><br>
		<br><br><br><br><br><br>
		<br><br><br><br><br><br>
		

		<footer><?php include_once("includes/footer.php"); ?></footer>
	</div>
</body>
</html>