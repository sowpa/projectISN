<div class = "logo">
	<a href="index.php">
		<img src="ressources/logo.png">
		</a>
</div>


<<<<<<< HEAD


	
=======
>>>>>>> 67c0ce969e3ef9be53f84b8fc01e9c30d95bcf7f
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