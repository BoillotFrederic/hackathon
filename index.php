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
    <div class="row" id="container-left">
      <div class="col s3 m3 l3" id="navBar">
        <?php include 'inc/navBar.php'; ?>
      </div>
      <div class="col s9 m9 l9 right" id="container-right">
    <?php

      include 'inc/logo.php';
      include 'inc/description.php';
      include 'inc/winner.php';
      include 'inc/carousel.php';

    ?>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/FBScript.js"></script>
    <script src="js/CRScript.js"></script>
    <script src="js/FRScript.js"></script>
    <script src="js/ELScript.js"></script>
  </body>
</html>
