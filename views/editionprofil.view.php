<!DOCTYPE html>
<html>
<head>
	<title>Projet ISN</title>
	<meta charset="utf-8">
	<?php include_once('includes/links.php'); ?>
</head>
<body>
	<div id = "main">
		<header><?php include_once('includes/header.php'); ?></header>
		<div align="center">
			<h1 class="titre">Edition de mon profil</h1>
			<br><br>
			<form method="POST" action="" enctype="multipart/form-data">
				<table>
					<tr>
						<td align="right">
							<label for="newpseudo">Pseudo :</label>
						</td>
						<td>
							<input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $_SESSION['pseudo'];?>"><br /><br />
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="newmail">Mail :</label>
						</td>
						<td>
							<input type="email" name="newmail" placeholder="Mail" value="<?php echo $_SESSION['mail'];?>"><br /><br />
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="newpassword">Mot de passe :</label>
						</td>
						<td>
							<input type="password" name="newpassword" placeholder="Mot de passe"><br /><br />
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="newpassword2">Confirmation du mot de passe :</label>
						</td>
						<td>
							<input type="password" name="newpassword2" placeholder="Confirmation du mot de passe"><br /><br />
						</td>
					</tr>
					<tr>
						<td align="right">
							<label>Avatar :</label>
						</td>					
						<td>
							<input type="file" name="avatar">
						</td>
					</tr>
				</table>
				<br /><br />
				<input type="submit" name="submit" value="Mettre a jour mon profil">
				<br /><br />
			</form>
			<?php if(isset($erreur)) {echo $erreur;} ?>

		<br><br><br><br><br><br>
		<br><br><br><br><br><br>
		<br><br><br>
		</div>
		<footer><?php include_once("includes/footer.php"); ?></footer>
	</div>
</body>
</html>