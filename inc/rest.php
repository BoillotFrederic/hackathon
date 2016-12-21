<div id="rest" class="row center ">
  <h4 class="col s12 m12 l12 "> Les participants : </h4>

<?php

$query = $db->prepare('SELECT * from participant  WHERE adddate > "'.date("Y/m/d", $lastMonday).'"  ORDER BY adddate DESC LIMIT 0,9');
$query->execute();
while($restData = $query->fetch())
{
?>
  <div class="col l4 s12 m6 rest">
    <div class="restpseudo"><?php echo $restData['pseudo']; ?></div>
    <img class="responsive-img" src="uploads/<?php echo $restData['img']; ?>">
    <div class="nbrlike"><?php echo $restData['islike']; ?></div>
    <i class="like fa fa-thumbs-o-up fa-3x" aria-hidden="true"></i>
    <div class="nbrdislike"><?php echo $restData['dontlike']; ?></div>
    <i class="dislike fa fa-thumbs-o-down fa-3x" aria-hidden="true"></i>
  </div>
<?php
  }
?>
</div>
