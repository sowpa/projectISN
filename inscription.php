<?php
/*
inscription.php

Formulaire d'inscription des membres.

Vérification de chaques champs remplis par l'utilisateur et affiche une erreur si elle n'est pas valide.
Insertion des données dans la bdd.

*/

require('includes/recaptcha/autoload.php');
include_once('includes/config.php');
include_once('includes/cookieconnect.php');

if(isset($_POST['g-recaptcha-response'])){

	$recaptcha = new \ReCaptcha\ReCaptcha('6LfxDgwUAAAAAH310pYwjF0DorNwktTIBVIEGka3');
	$resp = $recaptcha->verify($_POST['g-recaptcha-response']);
	if ($resp->isSuccess()) {
	    // verified!
	    if(isset($_POST['forminscription'])){

			$pseudo = htmlspecialchars($_POST['pseudo']);
			$mail = htmlspecialchars($_POST['mail']);
			$mail2 = htmlspecialchars($_POST['mail2']);
			$password = sha1($_POST['password']);
			$password2 = sha1($_POST['password2']);

			if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['password']) AND !empty($_POST['password2']))
			{
				$pseudolen = strlen($pseudo);

				if ($pseudolen <= 15) {
					$query = $bdd->prepare("SELECT * FROM membres WHERE pseudo = ?");
					$query->execute(array($pseudo));

					if($query->rowCount() == 0){
						if ($mail == $mail2) {
							if(filter_var($mail, FILTER_VALIDATE_EMAIL))
							{
								$query = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
								$query->execute(array($mail));

								if($query->rowCount() == 0){
									if ($password == $password2) {
										//création de la clé de confirmation
										$keylength = 15;
										$key = "";
										for($i=1;$i<$keylength;$i++){
											$key .= mt_rand(0,9);
										}



										//insertion dans la database
										$req = $bdd->prepare("INSERT INTO membres(pseudo, mail, password, avatar, admin, confirmkey, confirmed) VALUES(?, ?, ?, ?, ?, ?, ?)");
										$result = $req->execute(array($pseudo, 
																		$mail,
																		$password, 
																		"default.png", 
																		0, 
																		$key,
																		0
																		));
																		

										//envoie de l'email de confirmation
										$header="MIME-Version: 1.0\r\n";
										$header.='From:"TeachAndLearn.com"<support@teachandlearn.com>'."\n";
										$header.='Content-Type:text/html; charset="uft-8"'."\n";
										$header.='Content-Transfer-Encoding: 8bit';
										$content='
										<html>
											<body>
												<div align="center">
													<a href="http://127.0.0.1/projectISN/confirmation.php?pseudo='.urlencode($pseudo).'&key='.$key.'">Confirmez votre compte<a/>
												</div>
											</body>
										</html>
										';
										mail($mail, "Confirmation de compte", $content, $header);



										$message = 'Votre compte a bien été créé. <a href="connexion.php">Connectez vous.</a>';


									/*	header('Location: connexion.php');*/
									}
									else{
										$erreur = "Vos mots de passe ne correspondent pas.";
									}
								}
								else{
									$erreur = "Il existe déja un compte pour cette adresse email.";
								}
							}
							else{
								$erreur = "Votre adresse mail est invalide.";
							}
						}
						else{
							$erreur = "Vos adresses email ne correspondent pas.";
						}
					}
					else{
						$erreur = "Ce pseudo est déja utilisé.";
					}

				}
				else{
					$erreur = "Votre peudo ne doit pas dépasser 15 caractères";
				}
			}
			else
			{
				$erreur = "Merci de compléter tout les champs.";
			}
		}
	} else {
	    $erreur = "Merci de prouver que vous n'etes pas un robot.";
	}
}

include_once('views/inscription.view.php');
?>