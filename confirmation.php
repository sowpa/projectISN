<?php
/*
confitmation.php

confirmer l'adresse email de l'utilisateur.

*/
include_once('includes/config.php');
include_once('includes/cookieconnect.php');

if(isset($_GET['pseudo'], $_GET['key']) AND !empty($_GET['pseudo']) AND !empty($_GET['key'])){
	$pseudo = htmlspecialchars(urldecode($_GET['pseudo']));
	$key = htmlspecialchars($_GET['key']);

	$requser = $bdd->prepare("SELECT * FROM membres WHERE pseudo = ? AND confirmkey = ?");
	$requser->execute(array($pseudo, $key));
	$userexist = $requser->rowCount();


	if($userexist == 1){
		$user = $requser->fetch();
		if($user['confirmed'] == 0){
			$updateuser = $bdd->prepare("UPDATE membres SET confirmed = 1 WHERE pseudo = ? AND confirmkey = ?");
			$updateuser->execute(array($pseudo, $key));
			echo "Votre compte a bien été confirmé.";
		}
		else{
			echo "Votre compte a deja été confirmé.";
		}
	}
	else{
		echo "Cet utilisateur n'existe pas.";
	}
}


 ?>