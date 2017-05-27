<!DOCTYPE html>
<html>
<head>
	<title>Teach and Learn</title>
	<?php include_once('includes/links.php'); ?>
</head>
<body>
	<div id = "main">
		<header><?php include_once('includes/header.php');?></header>
		<div align="center">
		<br><br>
			<p>
				<?php
					if(isset($message)){
						echo $message;
					}
				  ?>	
			</p>
		<br><br>	
		</div>

		<footer><?php include_once("includes/footer.php"); ?></footer>
	</div>
</body>
</html>