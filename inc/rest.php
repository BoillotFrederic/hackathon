<div id="rest" class="row center ">
  <h4 class="col s12 m12 l12 "> Les participants : </h4>

<?php

$query = $db->prepare('SELECT * from participant  WHERE adddate > "'.date("Y/m/d", $lastMonday).'"  ORDER BY adddate DESC LIMIT 0,9');
$query->execute();
while($restData = $query->fetch())
{
?>
  <div class="col l4 s12 m6 rest">
    <div class="containerImg">
      <div class="restpseudo"><?php echo $restData['pseudo']; ?></div>
      <img class="responsive-img" src="uploads/<?php echo $restData['img']; ?>">
      <div class="nbrlike"><?php echo $restData['islike']; ?></div>
      <a href="#" class="like fa fa-thumbs-o-up fa-2x" aria-hidden="true"></a>
      <div class="nbrdislike"><?php echo $restData['dontlike']; ?></div>
      <a href="#" class="dislike fa fa-thumbs-o-down fa-2x" aria-hidden="true"></a>
    </div>
  </div>
<?php
  }
?>
</div>
