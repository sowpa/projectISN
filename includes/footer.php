<?php
/*
footer.php

Page a inclure dans la vue de toutes les pages du site. Affiche le footer.
*/
if(isset($_COOKIE['accept_cookie'])){
	$showcookie = false;
}
else{
	$showcookie = true;
}

require_once('views/footer.view.php');
?>