<?php

// Connexion à la base de données
include 'connect/connect.php';

// Dernier Lundi
$lastMonday = time() + (@date() - date("N") + 1) * 86400;
$lastMonday = mktime(0, 0, 0, date("m", $lastMonday)  , date("d", $lastMonday), date("Y", $lastMonday));

// Récupération de la LIMIT
define('nextLimit', (isset($_POST['limit']) && is_numeric($_POST['limit']) ? $_POST['limit'] : 0));
$limit = nextLimit;

$prep = $db -> prepare('SELECT * from participant  WHERE adddate > "'.date("Y/m/d", $lastMonday).'"  ORDER BY adddate DESC LIMIT :limit,9');
$prep -> bindValue(':limit', intval($limit), PDO::PARAM_INT);
$prep -> execute();

while($restData = $prep -> fetch())
{
?>
<div class="col l4 s12 m6 rest">
  <div class="containerImg">
    <div class="restpseudo"><?php echo $restData['pseudo']; ?></div>
    <img class="responsive-img" src="uploads/<?php echo $restData['img']; ?>">
    <div class="backGwhite">
    <div class="nbrlike"><?php echo $restData['islike']; ?></div>
    <a href="#" class="like fa fa-thumbs-o-up fa-3x" aria-hidden="true"></a>
    <div class="nbrdislike"><?php echo $restData['dontlike']; ?></div>
    <a href="#" class="dislike fa fa-thumbs-o-down fa-3x" aria-hidden="true"></a>
  </div>
  </div>
</div>
<?php
  }
?>
