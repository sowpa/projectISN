<?php
/*
editionptofil.php

Formulaire d'édition du profil du membre connecté. Vérification des données envoyé par l'utilisateur et affiche une erreur en cas de non-validité de ces dernières. Mise a jour des données dans la bdd.
*/
include_once('includes/config.php');
include_once("includes/fonctions.php");
include_once('includes/cookieconnect.php');

if(isset($_SESSION['id'])){
	$query = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
	$query->execute(array($_SESSION['id']));
	$userinfo = $query->fetch();

	session_refresh($_SESSION['id'], $bdd);

	//Mise à jour du pseudo s'il est modifié + sécurité puis ridirection vers le profil
	if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $userinfo['pseudo']){
		$newpseudo = htmlspecialchars($_POST['newpseudo']);
		if(strlen($newpseudo) <= 15){
			$updatepseudo = $bdd->prepare("SELECT * FROM membres WHERE pseudo = ?");
			$updatepseudo->execute(array($newpseudo));

			if($updatepseudo->rowCount() == 0){
				$updatepseudo = $bdd->prepare("UPDATE membres SET pseudo = ? WHERE id = ?");
				$updatepseudo->execute(array($newpseudo, $_SESSION['id']));
				header("Location: profil.php?id=".$_SESSION['id']);
			}
			else{
				$erreur = "Ce pseudo est déjà utilisé.";
			}
		}
		else{
			$erreur = "Votre pseudo ne peut pas être plus long que 15 caractères.";
		}
	}

	//Mise à jour de l'adresse email si elle est modifiée + sécurité puis redirection vers le profil
	if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $userinfo['mail']){
		if(filter_var($_POST['newmail'], FILTER_VALIDATE_EMAIL)){
			$updatemail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
			$updatemail->execute(array($_POST['newmail']));

			if($updatemail->rowCount() == 0){
				$updatemail = $bdd->prepare("UPDATE membres SET mail = ? WHERE id = ?");
				$updatemail->execute(array($_POST['newmail'], $_SESSION['id']));
				header("Location: profil.php?id=".$_SESSION['id']);
			}
			else{
				$erreur = "Cette adresse email est déjà utilisée.";
			}
		}
		else{
			$erreur = "cette adresse email n'est pas valide.";
		}

	}


	//Mise à jour du mot de passe + hashage 
	if(isset($_POST['newpassword']) AND !empty($_POST['newpassword']) AND isset($_POST['newpassword2']) AND !empty($_POST['newpassword2'])){
		$password = sha1($_POST['newpassword']);
		$password2 = sha1($_POST['newpassword2']);
		if($password2 == $password){
			$updatepassword = $bdd->prepare("UPDATE membres SET password = ? WHERE id = ?");
			$updatepassword->execute(array($password, $_SESSION['id']));
			header("Location: profil.php?id=".$_SESSION['id']);
		}
		else{
			$erreur = "Vos mots de passe ne correspondent pas.";
		}
	}

	//Mise à jour de l'avatar + sécurité (vérification de l'extension et de la taille du fichier)
	if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])){
		$maxSize = 2097152;
		$validateExtensions = array('jpg', 'jpeg', 'gif', 'png');

		if($_FILES['avatar']['size'] <= $maxSize){
			$extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
			if(in_array($extensionUpload, $validateExtensions)){
				$path = "membres/avatars/".$_SESSION['id'].".".$extensionUpload;				
				if(move_uploaded_file($_FILES['avatar']['tmp_name'], $path)){
					$updateAvatar = $bdd->prepare('UPDATE membres SET avatar  = :avatar WHERE id = :id');
					$updateAvatar->execute(array(
						'avatar' => $_SESSION['id'].".".$extensionUpload,
						'id' => $_SESSION['id']						
						));

						header("Location: profil.php?id=".$_SESSION['id']);
				}
				else{
					$erreur = "Une erreur s'est produite lors de l'importation de votre fichier";
				}

			}
			else{
				$erreur = "L'extension de votre fichier n'est pas une extension valide (jpg, jpeg, gif, png)";
			}
		}
		else{
			$erreur = "Votre image de profil ne doit pas excéder 2Mo.";
		}
	}

	//Même si l'utilisateur ne modifie rien, on reviens quand même sur la page de profil
	if(isset($_POST['newpseudo']) AND $_POST['newpseudo'] == $userinfo['pseudo']){
		header("Location: profil.php?id=".$_SESSION['id']);
	}

	
	include_once('views/editionprofil.view.php');
}
else{
	header("Location: etreco.php");
}
?>