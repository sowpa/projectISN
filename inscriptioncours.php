<?php 
/*
inscriptioncours.php

Inscription a un cours.

*/

include_once('includes/config.php');
include_once('includes/cookieconnect.php');
include_once('includes/fonctions.php');

if(isset($_GET['id'])){
	if(isset($_SESSION['id']) AND my_userexists($_SESSION['id'], $bdd)){
		$query = $bdd->prepare('SELECT * FROM cours WHERE id = ?');
		$query->execute(array($_GET['id']));
		$cours = $query->fetch();
		if($cours['suivi'] != 0){
			$message = "Désolé ! Quelqu'un d'autre est déja inscrit à ce cours.";
		}
		elseif ($cours['id_teacher'] == $_SESSION['id']) {
			$message = "Vous ne pouvez pas vous inscrire à votre prope cours .";
		}
		else{
			//Le cours est suivi
			$query = $bdd->prepare('UPDATE `cours` SET `suivi`= ?, active = 0 WHERE id = ?');
			$query->execute(array($_SESSION['id'], $_GET['id']));

			//Payement de 1 crédit
			$query = $bdd->prepare('UPDATE membres SET credit = credit - 1 WHERE id = ?');
			$query->execute(array($_SESSION['id']));



			$message = "Vous avez bien été inscrit au cours " . $cours['titre'];
		}
	}
	else{
		header("location:etreco.php");
	}
}
else{
	$message = "Ce cours n'existe pas.";
}
	include_once('views/inscriptioncours.view.php');
?>