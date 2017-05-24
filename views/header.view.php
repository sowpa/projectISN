<link rel="stylesheet" type="text/css" href="design/header.css">


<nav class="navbar navbar-fixed-left" id="my-navbar">
	<div class = "container">
		<div class = "navbar-header">

			<a href="index.php"><img src="ressources/logo.png"></a>

			<div class="collapse navbar-collapse" id="navbar-collapse">
				<?php if($connect){ ?>
				<!-- si l'utilisateur est connecté -->
				<ul class="nav navbar-nav">
					<li><a href="profil.php?id=<?php echo $_SESSION['id'];?>">mon profil</a></li>
					<li><a href="createcourse.php">créer un cours</a></li>
					<li><a href="mescours.php">mes cours</a></li>
					<li><a href="deconnexion.php">se déconnecter</a></li>
				</ul>

				<?php }	else{ ?>
				<!-- si l'utilisateur n'est pas connecté -->
					<ul class="nav navbar-nav">
						<li><a href="connexion.php">se connecter</a>
						<li><a href="inscription.php">s'inscrire</a>
					</ul>

				<?php } ?>

			</div>
		
	</div>
</nav>
