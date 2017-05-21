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

	$coursQuery = $bdd->prepare("SELECT * FROM `cours` WHERE NOT suivi = 0 AND id_teacher = ?");
	$coursQuery->execute(array($_SESSION['id']));
	$nbCours = $coursQuery->rowCount();

	$coursFollowed = $bdd->prepare("SELECT * FROM cours WHERE suivi = ?");
	$coursFollowed->execute(array($_SESSION['id']));
	$nbCoursF = $coursFollowed->rowCount();



include_once('views/mescours.view.php');
}
else{
	echo "Vous devez être connecté pour accéder a cette page.";
}
?>
