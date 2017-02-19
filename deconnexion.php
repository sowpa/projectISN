<?php
/*
deconnexion.php

Destruction des cookies de connexion et de la session. On renvoie vers la page d'acceuil (index.php).

*/
include_once('includes/config.php');
include_once('includes/fonctions.php');
my_unsetcookie('email');
my_unsetcookie('password');
$_SESSION = array();
session_destroy();
header("Location: index.php");
?>