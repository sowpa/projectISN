<?php
/*
header.php

Page a inclure dans toutes les pages du site. Affiche le header.
*/
if(isset($_SESSION['id'])){
	$connect = true;
}
else{
	$connect = false;
}

if(isset($_SERVER['HTTP_REFERE']) AND !empty($_SERVER['HTTP_REFERE'])){
	$previouspage = $_SERVER['HTTP_REFERE'];
}
else{
	$previouspage = 'index.php';
}

include_once('views/header.view.php');
?>