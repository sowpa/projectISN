<link rel="stylesheet" type="text/css" href="design/style.css">
<link rel="stylesheet" type="text/css" href="design/header.css">


<nav class="navbar navbar-fixed-left" id="my-navbar">
	<div class = "container">
		<div class = "navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target ="#navbar-collapse" >
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			
			</button>

			<a href="index.php"><href= "class=navbar-brand"><img src="ressources/logo.png"></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Accueil</a>
				<li><a href="connexion.php ">Se connecter</a>
			</ul>
		</div>
	</div>
</nav>


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
