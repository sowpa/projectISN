<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=isn_project;charset=utf8', 'root', '');

//A supprimer avant la mise en ligne
echo "<script>document.write('<script src=\"http://' + (location.host || '127.0.0.1').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')</script>";
?>