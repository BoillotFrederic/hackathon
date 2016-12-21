<?php
$lastMonday = mktime(0, 0, 0, date("m", $lastMonday)  , date("d", $lastMonday), date("Y", $lastMonday));
$query=$db->prepare("SELECT *, (islike - dontlike) AS diff FROM participant WHERE adddate<='".date('Y/m/d', $lastMonday)." ORDER BY diff DESC");
$query->execute();
$CarouData=$query->fetch();
$query=$db->prepare("SELECT *, (islike - dontlike) AS diff FROM participant WHERE adddate<='".date('Y/m/d', $lastMonday)." ORDER BY diff DESC");
$query->execute();
$CarouData1=$query->fetch();
$query=$db->prepare("SELECT *, (islike - dontlike) AS diff FROM participant WHERE adddate<='".date('Y/m/d', $lastMonday)." ORDER BY diff DESC");
$query->execute();
$CarouData2=$query->fetch();
$query=$db->prepare("SELECT *, (islike - dontlike) AS diff FROM participant WHERE adddate<='".date('Y/m/d', $lastMonday)." ORDER BY diff DESC");
$query->execute();
$CarouData3=$query->fetch();
$query=$db->prepare("SELECT *, (islike - dontlike) AS diff FROM participant WHERE adddate<='".date('Y/m/d', $lastMonday)." ORDER BY diff DESC");
$query->execute();
$CarouData4=$query->fetch();
$query=$db->prepare("SELECT *, (islike - dontlike) AS diff FROM participant WHERE adddate<='".date('Y/m/d', $lastMonday)." ORDER BY diff DESC");
$query->execute();
$CarouData5=$query->fetch();
$query=$db->prepare("SELECT *, (islike - dontlike) AS diff FROM participant WHERE adddate<='".date('Y/m/d', $lastMonday)." ORDER BY diff DESC");
$query->execute();
$CarouData6=$query->fetch();
$query=$db->prepare("SELECT *, (islike - dontlike) AS diff FROM participant WHERE adddate<='".date('Y/m/d', $lastMonday)." ORDER BY diff DESC");
$query->execute();
$CarouData7=$query->fetch();
?>
<div class="row">
  <div class="col m12 s12 l12">
<div id="car" class="carousel center-align">
  <a class="carousel-item" href="#one!"><h1 class="titrecar">2nd</h1><?php echo $CarouData['img']; ?><p class="elise"><?php echo $CarouData['pseudo']; ?></p></a>
  <a class="carousel-item active" href="#two!"><h1 class="titrecar">3rd</h1><?php echo $CarouData1['img']; ?><p class="elise"><?php echo $CarouData2['pseudo']; ?></p></a>
  <a class="carousel-item active" href="#three!"><h1 class="titrecar">4th</h1><?php echo $CarouData2['img']; ?><p class="elise"><?php echo $CarouData3['pseudo']; ?></p></a>
  <a class="carousel-item active" href="#four!"><h1 class="titrecar">5th</h1><?php echo $CarouData3['img']; ?><p class="elise"><?php echo $CarouData4['pseudo']; ?></p></a>
  <a class="carousel-item active" href="#five!"><h1 class="titrecar">6th</h1><?php echo $CarouData4['img']; ?><p class="elise"><?php echo $CarouData5['pseudo']; ?></p></a>
  <a class="carousel-item active" href="#five!"><h1 class="titrecar">7th</h1><?php echo $CarouData5['img']; ?><p class="elise"><?php echo $CarouData6['pseudo']; ?></p></a>
  <a class="carousel-item active" href="#five!"><h1 class="titrecar">8th</h1><?php echo $CarouData6['img']; ?><p class="elise"><?php echo $CarouData7['pseudo']; ?></p></a>
  <a class="carousel-item active" href="#five!"><h1 class="titrecar">9th</h1><?php echo $CarouData7['img']; ?><p class="elise"><?php echo $CarouData8['pseudo']; ?></p></a>
  <a class="carousel-item active" href="#five!"><h1 class="titrecar">10th</h1><?php echo $CarouData8['img']; ?><p class="elise"><?php echo $CarouData9['pseudo']; ?></p></a>
</div>
</div>
</div>
