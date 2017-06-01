<?php 
/*
mescours.php

affichage des cours à suivre et à donner

*/
include_once('includes/config.php');
include_once('includes/cookieconnect.php');
include_once('includes/fonctions.php');
if(isset($_SESSION['id']) AND my_userexists($_SESSION['id'], $bdd)){
	$query = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
	$query->execute(array($_SESSION['id']));
	$userinfo = $query->fetch();

	$query = $bdd->prepare('SELECT * FROM cours WHERE id = ?');
	

	//Si on annule un cours
	if(isset($_GET['annulerCours'])){
		$query->execute(array($_GET['annulerCours']));
		$cours = $query->fetch();


		//On rend un crédit à l'élève
		$query = $bdd->prepare('UPDATE membres SET credit = credit + 1 WHERE id = ?');
		$query->execute(array($cours['suivi']));


		//On réactive le cours et on met 'suivi' à 0
		$query = $bdd->prepare('UPDATE `cours` SET `suivi`= 0, active = 1 WHERE id = ?');
		$query->execute(array($cours['id']));
	}


	//Si on confirme que le cours a bien été suivi
	elseif (isset($_GET['coursSuivi'])) {
		$query->execute(array($_GET['coursSuivi']));
		$cours = $query->fetch();

		//On remet le cours en tant qu'actif et on reset le 'suivi'
		$query = $bdd->prepare('UPDATE `cours` SET `suivi`= 0, active = 1 WHERE id = ?');
		$query->execute(array($cours['id']));

		//On donne un crédit au professeur
		$query = $bdd->prepare('UPDATE membres SET credit = credit + 1 WHERE id = ?');
		$query->execute(array($cours['id_teacher']));
	}

	//Si le cours qu'on devait suivre ne l'a pas été
	elseif (isset($_GET['coursNonSuivi'])) {
		$query->execute(array($_GET['coursNonSuivi']));
		$cours = $query->fetch();

		//On récupere notre crédit
		$query = $bdd->prepare('UPDATE membres SET credit = credit + 1 WHERE id = ?');
		$query->execute(array($cours['suivi']));

		//On reset le cours
		$query = $bdd->prepare('UPDATE `cours` SET `suivi`= 0, active = 1 WHERE id = ?');
		$query->execute(array($cours['id']));
	}

	header('location:mescours.php');
}
else{
	header('location:index.php');
}