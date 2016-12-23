<div id="rest" class="row center ">
  <h4 class="col s12 m12 l12 "> Les participants </h4>

<?php

$query = $db->prepare('SELECT * from participant  WHERE adddate > "'.date("Y/m/d", $lastMonday).'"  ORDER BY id DESC LIMIT 0,9');
$query->execute();
while($restData = $query->fetch())
{
?>
  <div class="col l4 s12 m6 rest">
    <div class="containerImg">
      <div class="restpseudo responsive-img"><?php echo $restData['pseudo']; ?></div>
      <img class="responsive-img" src="uploads/<?php echo $restData['img']; ?>">
      <div class="backGwhite">
      <div id="nbrlike<?php echo $restData['id']; ?>" class="nbrlike"><?php echo $restData['islike']; ?></div>
      <a onclick="likeNdislike(this, 'true'); return false;" href="#" class="like fa fa-thumbs-o-up fa-3x" data-id="<?php echo $restData['id']; ?>" aria-hidden="true"></a>
      <div id="nbrdislike<?php echo $restData['id']; ?>" class="nbrdislike"><?php echo $restData['dontlike']; ?></div>
      <a onclick="likeNdislike(this, 'false'); return false;" href="#" class="dislike fa fa-thumbs-o-down fa-3x" data-id="<?php echo $restData['id']; ?>" aria-hidden="true"></a>
</div>
    </div>
  </div>
<?php
  }
?>
</div>
