<?php
/*
index.php

Page d'acceuil du site. Affichage des 4 derniers cours mis en ligne.
*/
include_once('includes/config.php');
include_once('includes/cookieconnect.php');

$cours = $bdd->query('SELECT *, c.id c_id, m.id m_id FROM membres m INNER JOIN cours c ON c.id_teacher = m.id WHERE c.active = 1 ORDER BY c.id DESC LIMIT 4');

include_once('views/index.view.php');
?>