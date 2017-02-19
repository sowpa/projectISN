<?php
function session_refresh($id, $bdd){
	// $_SESSION['pseudo'] = $pseudo;
	// $_SESSION['mail'] = $mail;

	$query = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
	$query->execute(array($id));

	$userinfo = $query->fetch();
	$_SESSION['id'] = $userinfo['id'];
	$_SESSION['pseudo'] = $userinfo['pseudo'];
	$_SESSION['mail'] = $userinfo['mail'];
	$_SESSION['admin'] = $userinfo['admin'];
	$_SESSION['credit'] = $userinfo['credit'];
	$_SESSION['avatar'] = $userinfo['avatar'];

}

function my_unsetcookie($name)
{
	setcookie($name, '', time()-3600, '/');
}

function my_setcookie($name, $value)
{
	setcookie($name, $value, time()+365*24*3600, '/', null, false, true);
}

function my_userexists($id, $bdd)
{
	$query = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
	$query->execute(array($id));
	if($query->rowCount() == 1){
		return true;
	}
	else{
		return false;
	}
}
?>