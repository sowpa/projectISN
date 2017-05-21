<?php 
/*
mescours.php

affichage des cours à suivre et à donner

*/
include_once('includes/config.php');
include_once('includes/config.php');
include_once('includes/config.php');
if(isset($_SESSION['id'])){
	$query = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
	$query->execute(array($_SESSION['id']));
	$userinfo = $query->fetch();



include_once('views/mescours.view.php');
}
else{
	echo "Vous devez être connecté pour accéder a cette page.";
}
?>
