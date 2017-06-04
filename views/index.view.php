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
<div class="col-sm-12">

   

  <div id="myCarousel" class="row carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
   
      <div class="item active">
        
        <ul class="thumbnails">

        <div align="center">
          <li class="col-sm-3">      
            <div class="caption-box">
             <?php while($c = $cours->fetch()) { ?>
     			<div class="cours-display">
       			<a href="cours.php?id=<?= $c['c_id']?>" >
          		<h6><?= $c['titre'] ?> - <?= $c['pseudo']?></h6>
          		<div><?= $c['description'] ?></div>
        		</a>
     		</div>  
    		<?php } ?>
              <a class="btn btn-primary btn-large" href="cours.php?id=<?= $c['c_id']?>">Voir cours</a>
            </div>
          </li>

          <li class="col-sm-3">      
            <div class="caption-box">
             <?php while($c = $cours->fetch()) { ?>
     			<div class="cours-display">
       			<a href="cours.php?id=<?= $c['c_id']?>" >
          		<h6><?= $c['titre'] ?> - <?= $c['pseudo']?></h6>
          		<div><?= $c['description'] ?></div>
        		</a>
     		</div>  
    		<?php } ?>
              <a class="btn btn-success btn-mini" href="cours.php?id=<?= $c['c_id']?>">Voir cours</a>
            </div>
          </li>

         <li class="col-sm-3">      
            <div class="caption-box">
             <?php while($c = $cours->fetch()) { ?>
     			<div class="cours-display">
       			<a href="cours.php?id=<?= $c['c_id']?>" >
          		<h6><?= $c['titre'] ?> - <?= $c['pseudo']?></h6>
          		<div><?= $c['description'] ?></div>
        		</a>
     		</div>  
    		<?php } ?>
              <a class="btn btn-success btn-mini" href="cours.php?id=<?= $c['c_id']?>">Voir cours</a>
            </div>
          </li>

          <li class="col-sm-3">      
            <div class="caption-box">
             <?php while($c = $cours->fetch()) { ?>
     			<div class="cours-display">
       			<a href="cours.php?id=<?= $c['c_id']?>" >
          		<h6><?= $c['titre'] ?> - <?= $c['pseudo']?></h6>
          		<div><?= $c['description'] ?></div>
        		</a>
     		</div>  
    		<?php } ?>
              <a class="btn btn-success btn-mini" href="cours.php?id=<?= $c['c_id']?>">Voir cours</a>
            </div>
          </li>
        </ul>
      </div><!-- /Slide1 --> 


      <div class="item">
        <li class="col-sm-3">      
            <div class="caption-box">
             <?php while($c = $cours->fetch()) { ?>
     			<div class="cours-display">
       			<a href="cours.php?id=<?= $c['c_id']?>" >
          		<h6><?= $c['titre'] ?> - <?= $c['pseudo']?></h6>
          		<div><?= $c['description'] ?></div>
        		</a>
     		</div>  
    		<?php } ?>
              <a class="btn btn-success btn-mini" href="cours.php?id=<?= $c['c_id']?>">Voir cours</a>
            </div>
          </li>

     
      </div><!-- /Slide2 --> 


     



    </div><!-- /Wrapper for slides .carousel-inner -->



    <!-- Control box -->
    <div class="control-box">                            
      <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
      <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
    </div><!-- /.control-box -->   



  </div><!-- /#myCarousel -->


</div><!-- /.col-sm-12 -->          
</div><!-- /.row --> 
</div><!-- /.container -->

            
            <div class="boutonun">
        <a href="allcourses.php">Trouver un cours</a></div>
      <div class="boutondeux">
        <a href="createcourse.php">Créer un cours</a></div>
    </div>                
    <br><br><br><br>
<footer><?php include_once("includes/footer.php"); ?></footer>


	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>