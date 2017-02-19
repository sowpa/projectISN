<?php
if(!isset($_SESSION['id']) AND isset($_COOKIE['email'], $_COOKIE['password']) AND !empty($_COOKIE['email']) AND !empty($_COOKIE['password'])){
	$query = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND password = ?");
	$query->execute(array($_COOKIE['email'], $_COOKIE['password']));

	if($query->rowCount() == 1){
		$userinfo = $query->fetch();
		$_SESSION['id'] = $userinfo['id'];
		$_SESSION['pseudo'] = $userinfo['pseudo'];
		$_SESSION['mail'] = $userinfo['mail'];
	}
}