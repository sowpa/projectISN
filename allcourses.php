<?php 
/*
allcourses.php

Page qui affiche tous les cours disponible sur le site (avec un système de pagination).
Une barre de recherche pour trouver un cours.
*/
include_once('includes/config.php');
include_once('includes/cookieconnect.php');
include_once('includes/fonctions.php');

$coursParPage = 3;
$nbCoursQuery = $bdd->query('SELECT id FROM cours');
$nbCours = $nbCoursQuery->rowCount();

if($nbCours > 0){
	$nbPages = ceil($nbCours / $coursParPage);
}
else{
	$nbPages = 1;
}


if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] != 0 AND $_GET['page'] <= $nbPages)
{
	$currentPage = intval($_GET['page']);	

}
else{
	$currentPage = 1;
}

$depart = ($currentPage - 1) * $coursParPage;
$previousPage = $currentPage - 1;
$nextPage = $currentPage + 1;
$q ='';


//si on fait une recherche
if(isset($_GET['q']) AND !empty($_GET['q'])){
	$q = htmlspecialchars($_GET['q']);

	$cours = $bdd->query('SELECT *, c.id c_id, m.id m_id
						FROM membres m 
						INNER JOIN cours c ON c.id_teacher = m.id 
						WHERE titre LIKE "%'.$q.'%" AND active = 1
						ORDER BY c.id DESC LIMIT '.$depart.','. $coursParPage);
	$nbCoursQuery = $bdd->query('SELECT id FROM cours WHERE titre LIKE "%'.$q.'%"');
	$nbCours = $nbCoursQuery->rowCount();

	if($nbCours > 0){
		$nbPages = ceil($nbCours / $coursParPage);
	}
	else{
		$nbPages = 1;
	}
	$previousPage = $currentPage - 1;
	$nextPage = $currentPage + 1;


}
else{
	$cours = $bdd->query('SELECT *, c.id c_id, m.id m_id 
							FROM membres m 
							INNER JOIN cours c ON c.id_teacher = m.id 
							WHERE c.active = 1 
							ORDER BY c.id DESC LIMIT '.$depart.','. $coursParPage );
	}
include_once('views/allcourses.view.php');

?>