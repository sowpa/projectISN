<?php
/*
admin.membres.php

Page d'administration des membres. Seuls les administrateurs du site peuvent y accéder.
*/
include_once('../includes/config.php');
include_once('../includes/fonctions.php');

session_refresh($_SESSION['id'], $bdd);

if(!isset($_SESSION['admin']) OR $_SESSION['admin'] != 1){
	exit();
}

if(isset($_GET['delete']) AND !empty($_GET['delete']) AND my_userexists($_GET['delete'], $bdd)){
	$query = $bdd->prepare('DELETE FROM membres WHERE id = ?');
	$query->execute(array((int) $_GET['delete']));
}

if(isset($_GET['makeadmin']) AND !empty($_GET['makeadmin']) AND my_userexists($_GET['makeadmin'], $bdd)){
	$query = $bdd->prepare('UPDATE membres SET admin = 1 WHERE id = ?');
	$query->execute(array((int) $_GET['makeadmin']));
}

if(isset($_GET['unmakeadmin']) AND !empty($_GET['unmakeadmin']) AND my_userexists($_GET['unmakeadmin'], $bdd)){
	$query = $bdd->prepare('UPDATE membres SET admin = 0 WHERE id = ?');
	$query->execute(array((int) $_GET['unmakeadmin']));
}

session_refresh($_SESSION['id'], $bdd);

if(!isset($_SESSION['admin']) OR $_SESSION['admin'] != 1){
	exit();
}


$membres = $bdd->query('SELECT * FROM membres ORDER BY id DESC');

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