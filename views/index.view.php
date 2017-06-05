<!DOCTYPE html>
<html>
<head>
	<title>Projet ISN</title>
	<meta charset="utf-8">
	<?php include_once('includes/links.php'); ?>
	<link rel="stylesheet" type="text/css" href="design/index.css">


</head>
<body>
<div id = "main">
    <header><?php include_once('includes/header.php'); ?></header>

    <div align="center">
      <h1 class="titre">Les derniers cours</h1>   
    </div>

    <div class="container">
      <div class="row">
                   
      <?php while($c = $cours->fetch()) { ?>
        <div class="col-md-6 col-sm-6 text-center">
            <div class="box">
                <div class="box-content">
                    <h1 class="tag-title"><?= $c['titre'] ?> - <?= $c['pseudo']?></h1>
                    <hr>
                    <p><?= $c['description'] ?></p>
                    <br />
                    <a href="cours.php?id=<?= $c['c_id']?>" class="btn btn-block ">Voir ce cours</a>
                </div>
            </div>
        </div>
          
      <?php } ?>
      </div>
      
  <div class="row">
    <div class ="centered">
      <div class="col-sm-11 col-xs-11">
          <div class="boutonun btn-fixed">
            <a href="allcourses.php">Trouver un cours</a></div>
      
          <div class="boutondeux">
            <a href="createcourse.php">Créer un cours</a></div>
      </div>
    </div>
  </div>
</div>
                    
    <br><br><br>



<footer><?php include_once("includes/footer.php"); ?></footer>


	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>