<?php 
include_once("fonctions.php");
my_setcookie('accept_cookie', true);

if(isset($_SERVER['HTTP_REFERER']) AND !empty($_SERVER['HTTP_REFERER'])){
	header('Location:'.$_SERVER['HTTP_REFERER']);
}
else{
	header('Location: ../index.php');
}
?>