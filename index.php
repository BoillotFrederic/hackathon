<?php

// Connexion à la base de données
include 'connect/connect.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ch'tis Selfies</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/FBStyle.css">
    <link rel="stylesheet" href="css/CRStyle.css">
    <link rel="stylesheet" href="css/FRStyle.css">
    <link rel="stylesheet" href="css/ELStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <?php include 'inc/goToTop.php'; ?>
    <div class="valign-wrapper teal darken-4" id="navBar">
      <?php include 'inc/navBar.php'; ?>
    </div>
    <?php include 'inc/addSelfie.php'; ?>
    <?php include 'inc/historic.php'; ?>
    <?php include 'inc/about.php'; ?>
    <div id="container-main">
    <?php

      include 'inc/logo.php';
      include 'inc/description.php';
      include 'inc/winner.php';
      include 'inc/carousel.php';
      include 'inc/rest.php';

    ?>
    </div>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="https://use.fontawesome.com/182356f2e8.js"></script>
    <script src="js/FBScript.js"></script>
    <script src="js/CRScript.js"></script>
    <script src="js/FRScript.js"></script>
    <script src="js/ELScript.js"></script>
  </body>
</html>
