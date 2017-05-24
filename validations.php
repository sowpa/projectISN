<?php 
/*
mescours.php

affichage des cours à suivre et à donner

*/
include_once('includes/config.php');
include_once('includes/cookieconnect.php');
include_once('includes/fonctions.php');
if(isset($_SESSION['id'])){
	$query = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
	$query->execute(array($_SESSION['id']));
	$userinfo = $query->fetch();

	if(isset($_GET['annulerCours'])){
		# code...
	}
	elseif (isset($_GET['coursSuivi'])) {
		# code...
	}
	elseif (isset($_GET['coursNonSuivi'])) {
		# code...
	}

	header('location:mescours.php');
}
else{
	header('location:index.php');
}