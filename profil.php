<?php
/*
profil.php

affichage des informations du membres demmandé ($_GET).
$mine prend la valeur 'true' si ce profil est celui du membre connecé.

*/
include_once('includes/config.php');
include_once('includes/cookieconnect.php');
include_once('includes/fonctions.php');


if(isset($_GET['id']) AND $_GET['id'] > 0 AND my_userexists($_GET['id'], $bdd)){

	session_refresh($_SESSION['id'], $bdd);

	$getid = intval($_GET['id']);
	$query = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
	$query->execute(array($getid));
	$userinfo = $query->fetch();

	if($getid ==  $_SESSION['id']){
		$mine = true;
	}
	else{
		$mine = false;
	}

	include_once('views/profil.view.php');
}
else{
	header("Location: index.php");
}
?>