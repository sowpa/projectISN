<?php
/*
admin.cours.php

Page d'administration des cours. Seuls les administrateurs du site peuvent y accéder.
*/
include_once('../includes/config.php');
include_once('../includes/fonctions.php');


//on refresh la session un fois avant l'application des éventuelles modifications
session_refresh($_SESSION['id'], $bdd);


//si on est pas connecté ou si on est pas admin
if(!isset($_SESSION['admin']) OR $_SESSION['admin'] != 1){
	exit();
}

//on supprime le cours envoyé ($_GET)
if(isset($_GET['delete']) AND !empty($_GET['delete']) AND my_userexists($_GET['delete'], $bdd)){
	$query = $bdd->prepare('DELETE FROM cours WHERE id = ?');
	$query->execute(array((int) $_GET['delete']));
}


//Puis on refresh encore un fois avant l'affichage
session_refresh($_SESSION['id'], $bdd);

//si on est pas connecté ou si on est pas admin
if(!isset($_SESSION['admin']) OR $_SESSION['admin'] != 1){
	exit();
}


$membres = $bdd->query('SELECT *, c.id c_id, m.id m_id FROM membres m INNER JOIN cours c ON c.id_teacher = m.id');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
</head>
<body>
	<ul>
	<?php while($m = $membres->fetch()) { ?>
		<li><?= $m['id'] ?> : <?= $m['pseudo'] ?>
		- <?= $m['mail'] ?>
		- <?php if($m['admin']) { ?><a href="admin/admin.php?unmakeadmin=<?= $m['id'] ?>">unmake admin</a> <?php } else{?><a href="admin/admin.php?makeadmin=<?= $m['id'] ?>">make admin</a> <?php } ?> 
		- <a href="admin/admin.php?delete=<?= $m['id'] ?>">DELETE</a></li>
		<?php } ?>
	</ul>


</body>
</html>