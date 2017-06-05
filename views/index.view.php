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
                    <div class="col-lg-6  text-center">
                        <div class="box">
                            <div class="box-content">
                             <!--   <a href="cours.php?id=<?= $c['c_id']?>" >
              <h6><?= $c['titre'] ?> - <?= $c['pseudo']?></h6>
              <div><?= $c['description'] ?></div>
            </a>-->
                                <a href="cours.php?id=<?= $c['c_id']?>" class="btn btn-block ">Voir ce cours</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6  text-center">
                        <div class="box">
                            <div class="box-content">
                                <h1 class="tag-title">Nom du cours</h1>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis sit amet neque.</p>
                                <br />
                                <a href="#" class="btn btn-block ">Voir ce cours</a>
                            </div>
                        </div>
                    </div>
                              
      </div>
      <div class="row">
                    <div class="col-lg-6 text-center">
                        <div class="box">
                            <div class="box-content">
                                <h1 class="tag-title">Nom du cours</h1>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis sit amet neque.</p>
                                <br />
                                <a href="#" class="btn btn-block">Voir ce cours</a>
                            </div>
                        </div>
                      </div>
                        <div class="col-lg-6 text-center">
                        <div class="box">
                            <div class="box-content">
                                <h1 class="tag-title">Nom du cours</h1>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis sit amet neque.</p>
                                <br />
                                <a href="#" class="btn btn-block">Voir ce cours</a>
                            </div>
                        </div>
                      </div>
      </div>

      

    </div>
    <div class="container">
      <div class="row">
          <div align="center">
          
            <div class="col-sm-12 col-xs-12 text-center">
                <div class="boutonun">
                  <a href="allcourses.php">Trouver un cours</a></div>
          
            
                <div class="boutondeux">
                  <a href="createcourse.php">Créer un cours</a></div>
            </div>
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