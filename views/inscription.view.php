<!DOCTYPE html>
<html>
<head>
	<title>Projet ISN</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="design/style.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<div id = "main">
		<header><?php include_once('includes/header.php'); ?></header>
		<div align="center">
			<h2>Inscription</h2>
			<br><br><br>
			<form class="form-horizontal col-lg-6">
  <div class="form-group">
    <legend>Insription</legend>
  </div>
  <div class="row">
    <div class="form-group">
      <label for="Pseudo" class="col-lg-2 control-label">Votre pseudo </label>
      <div class="col-lg-10">
        <input  type="text" name="pseudo" class="form-control" id="pseudo" placeholder="Votre pseudo" value="<?php if(isset($pseudo)) echo $pseudo;?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="mail" class="col-lg-2 control-label">Adresse mail </label>
      <div class="col-lg-10">
        <input type="email" class="form-control" id="mail" placeholder="Votre mail" value="<?php if(isset($mail)) echo $mail;?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
    <label for="select" class="col-lg-2 control-label">Confirmation du mail: </label>
      <div class="col-lg-10">
        <input type="email" class="form-control" id="mail2" placeholder="Votre mail" value="<?php if(isset($mail)) echo $mail;?>">
      </div>
    </div>
  </div>

    <div class="row">
    <div class="form-group">
      <label for="password" class="col-lg-2 control-label">Mot de passe </label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="mdp" placeholder="Votre mot de passe">
      </div>
    </div>
  </div>

    <div class="row">
    <div class="form-group">
      <label for="password2" class="col-lg-2 control-label">Confirmation mot de passe </label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="mdp2" placeholder="Confirmez votre saisie...">
      </div>
    </div>
  </div>  

  <br>
  <div class="g-recaptcha" data-sitekey="6LfxDgwUAAAAAM9ctoroK6t0u7BsofOqPKe5Pe2z"></div>
  <br>
  <input type="submit" value="s'inscrire" name="forminscription">
</form>
			<?php
				if (isset($erreur)) {
					echo $erreur;
				}
				if (isset($message)) {
					echo $message;
				}
			?>
			<p>Vous avez déjà un compte ? <a href="connexion.php">Connectez vous.</a></p>
		</div>
		<footer><?php include_once("includes/footer.php"); ?></footer>
	</div>
</body>
</html>