<?php
/*
cours.php

Affiche les détails du cours demmandé ($_GET). Si ce n'est pas précisé, on affiche les cours en ligne (par id décroissant)

*/
include_once('includes/config.php');
include_once('includes/cookieconnect.php');
include_once('includes/fonctions.php');

if(isset($_GET['id']) AND $_GET['id'] != null){
	$id = (int) $_GET['id'];

	$query = $bdd->prepare('SELECT * FROM cours WHERE id = ?');
	$query->execute(array($id));

	if(isset($id) AND !empty($id) AND $query->rowCount() != 0){

		$query = $bdd->prepare('SELECT *, c.id c_id, m.id m_id FROM membres m INNER JOIN cours c ON c.id_teacher = m.id WHERE c.id = ?');
		$query->execute(array($id));
		$data = $query->fetch();
	}
	else{
			$message = "Ce cours n'existe pas ou n'est plus accessible.";
	}
}
else{
	header("Location: allcourses.php");
}
	include_once('views/cours.view.php');
 ?>