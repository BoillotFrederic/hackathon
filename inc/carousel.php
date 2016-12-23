<div class="row">
  <div class="col m12 s12 l12">
<div id="car" class="carousel center-align block-center">

<?php
//Requete pour parcourir les participants (from) entre la date (Where)du début de la selection et chaque semaines, et est listé grâce à la différence (AS) entre les vote j'aime et n'aime pas et avec une limite de 9 participants (Order by)
//la boucle se réfère à l'index pour affecter le classement au dessus de l'image, la boucle s'arrete dès que toute les lignes (ici les photos pseudos) ont été parcourus.
$i = 2;
$query = $db->prepare('SELECT *, (islike - dontlike) AS diff from participant WHERE adddate >= "'.date("Y/m/d", $lastMonday-7*24*3600).'" and adddate < "'.date("Y/m/d", $lastMonday).'" ORDER BY diff DESC LIMIT 1, 9');
$query->execute();  //la variable utilise la methode execute qui lance la boucle while qui suit
while($TopData = $query->fetch()) //fetch renvoie sous forme de tableau le 
{
  if ($i==2) $itext="2nd";
  else if($i==3) $itext="3rd";
  else $itext=$i."th";
?>
  <a class="carousel-item active" href="#one!"><h1 class="titrecar"><?php echo $itext; ?></h1><img class="responsive-img center-block picture" src="uploads/<?php echo $TopData['img']; ?>"><div class="elise"><?php echo $TopData['pseudo']; ?></div></a>
<?php
$i++;
}
?>
</div>
</div>
</div>
