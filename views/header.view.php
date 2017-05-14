<link rel="stylesheet" type="text/css" href="design/style.css">
<link rel="stylesheet" type="text/css" href="design/header.css">


<div class = "container">
		<div class = "pull-left">
			<div class = "logo">
				<a href="index.php">
					<img src="ressources/logo.png">
				</a>
			</div>
		</div>
</div>



<?php if($connect){ ?>
<!-- si l'utilisateur est connecté -->
	<a href="profil.php?id=<?php echo $_SESSION['id'];?>">mon profil</a>
	|
	<a href="deconnexion.php">se déconnecter</a>
	|
	<a href="createcourse.php">créer un cours</a>

<?php }	else{ ?>
<!-- si l'utilisateur n'est pas connecté -->
	<a href="connexion.php">se connecter</a>
	|
	<a href="inscription.php">s'inscrire</a>

<?php } ?>