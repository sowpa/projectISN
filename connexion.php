<?php
/*
connexion.php

Page de connexion des membres. Mise en place des cookies de connexion si l'utilisateur veut que l'on se souvienne de lui, même après que sa session soit terminée.

*/
include_once('includes/config.php');
include_once('includes/cookieconnect.php');
include_once('includes/fonctions.php');

if(isset($_POST['formconnect'])){
	$mailconnect = htmlspecialchars($_POST['mailconnect']);
	$passwordconnect = sha1($_POST['passwordconnect']);
	if(!empty($mailconnect) AND !empty($passwordconnect)){
		$query = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND password = ?");
		$query->execute(array($mailconnect, $passwordconnect));

		if($query->rowCount() == 1){
			if(isset($_POST['rememberme'])){
				my_setcookie('email', $mailconnect);
				my_setcookie('password', $passwordconnect);
			}
			$userinfo = $query->fetch();
			session_refresh($userinfo['id'], $bdd);		
			header("Location: index.php");
		}
		else{
			$erreur = "Mauvais mail ou mauvais mot de passe.";
		}
	}
	else{
		$erreur = "Tous les champs doivent être complétés";
	}
}

if(isset($_SESSION['id']) AND !empty($_SESSION['id'])){
	include_once('views/alreadyconnected.view.php');
}
else{
	include_once('views/connexion.view.php');
}
?>