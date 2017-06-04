<link rel="stylesheet" type="text/css" href="design/header.css">


<nav class="navbar " id="my-navbar">
	<div class = "container">
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<a href="index.php" class="navbar-left"><img src="ressources/logo.png"></a>
					<div class = "navbar-header">
				
					
					<?php if($connect){ ?>
					<!-- si l'utilisateur est connecté -->
					<ul class="nav navbar-nav navbar-right">
						<li><a href="createcourse.php">Créer un cours</a></li>
						<li><a href="mescours.php">Mes cours</a></li>
						<li><a href="profil.php?id=<?php echo $_SESSION['id'];?>">Mon profil</a></li>
						<li><a href="deconnexion.php">Se déconnecter</a></li>
					</ul>

					<?php }	else{ ?>
					<!-- si l'utilisateur n'est pas connecté -->

						<ul class="nav navbar-nav navbar-right">
							<li><a href="connexion.php"">Se connecter</a>
							<li><a href="inscription.php">S'inscrire</a>
						</ul>

					<?php } ?>

					</div>
			</div>
	</div>
</nav>
