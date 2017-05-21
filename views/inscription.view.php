<!DOCTYPE html>
<html>
<head>
	<title>Projet ISN</title>
	<meta charset="utf-8">
  <?php include_once('includes/links.php'); ?>
  <link rel="stylesheet" type="text/css" href="design/inscription.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<div id = "main">
		<header><?php include_once('includes/header.php'); ?></header>
		<div align="center">
			<h2 class="titreins">Inscription</h2>
			<br><br><br>
			<form class="form-horizontal" method="POST" action="">
        

          <div class="form-group">
            <label class="col-md-4 control-label" for="pseudo">Pseudo</label>
            <div class="col-md-4">
            <input id="pseudo" type="text" name="pseudo" placeholder="Votre pseudo..." class="form-controlinput-md" value="<?php if(isset($pseudo)) echo $pseudo;?>">
            </div>
          </div>
          <br/>

          <div class="form-group">
            <label class="col-md-4 control-label" for="mail">Mail</label>
            <div class="col-md-4">
            <input id="mail" type="email" name="mail" placeholder="Votre mail..." class="form-controlinput-md" value="<?php if(isset($mail)) echo $mail;?>">
            </div>
          </div>
          <br/>


          <div class="form-group">
            <label class="col-md-4 control-label" for="mail2">Confirmation</label>
            <div class="col-md-4">
            <input id="mail2" type="email" name="mail2" placeholder="Confirmez mail..." class="form-controlinput-md" value="<?php if(isset($mail2)) echo $mail2;?>">
            </div>       
          </div>
          <br/>

          <div class="form-group">
            <label class="col-md-4 control-label" for="password">Mot de passe</label>
            <div class="col-md-4">
            <input id="password" type="password" name="password" placeholder="Votre mot de passe..." class="form-controlinput-md">
            </div>       
          </div>
          <br/>

          <div class="form-group">
            <label class="col-md-4 control-label" for="password2">Confirmation</label>
            <div class="col-md-4">
            <input id="password2" type="password" name="password2" placeholder="Confirmez mdp..." class="form-controlinput-md">
            </div>       
          </div>
          <br/>
      </form>

        <br>
        <div class="g-recaptcha" data-sitekey="6LfxDgwUAAAAAM9ctoroK6t0u7BsofOqPKe5Pe2z"></div>
        <br>

        <input class="btn" type="submit" value="S'inscrire" name="forminscription">

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