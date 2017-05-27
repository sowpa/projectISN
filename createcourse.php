<?php 
/*
createcourse.php

Page permettant de créer un cours.

*/
include_once('includes/config.php');
include_once('includes/cookieconnect.php');
include_once('includes/fonctions.php');

if(isset($_SESSION['id']) AND !empty($_SESSION['id'])){
if(isset($_POST['submit'])){
if(isset($_POST['titre'], $_POST['ville'], $_POST['description'], $_POST['description_long']) AND !empty($_POST['titre']) AND !empty($_POST['ville']) AND !empty($_POST['description']) AND !empty($_POST['description_long'])){

	$titre = htmlspecialchars($_POST['titre']);
	$ville = htmlspecialchars($_POST['ville']);
	$description = htmlspecialchars($_POST['description']);
	$description_long = htmlspecialchars($_POST['description_long']);

	if(strlen($titre) <= 100){
	if(strlen($ville) <= 50){
	if(strlen($description <= 250)){
	if(strlen($description_long) <= 800){

		$query = $bdd->prepare('INSERT INTO cours (titre, description, ville, id_teacher, description_long, active) VALUES (?, ?, ?, ?, ?, ?)');
		$query->execute(array(
							$titre,
							$description,
							$ville,
							$_SESSION['id'],
							$description_long,
							1	
							));

		$message = "Votre cours a bien été créé.";

	}
	else{
		$erreur = "La description détaillée de votre cours doit faire moins de 800 caractères";
	}
	}
	else{
		$erreur = "Votre description doit contenir moins de 250 caractères.";
	}
	}
	else{
		$erreur = "Le nombre de caractère du nom de votre ville est limité a 50.";
	}
	}
	else{
		$erreur = "Votre titre doit contenir moins de 100 caractères.";
	}
}
else{
	$erreur = "Tous les champs sont nécéssaire à la création d'un nouveau cours.";
}
}
}
else{
	$erreur = "Vous devez être connecté pour créer un cours.";
}


include_once('views/createcourse.view.php');
?>