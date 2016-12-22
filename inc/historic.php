<?php
// $lastMonday = mktime(0, 0, 0, date("m", $lastMonday)  , date("d", $lastMonday), date("Y", $lastMonday));
$lastMonday = time() + ( @date() - date("N") + 1) * 86400;
$lastMonday = mktime(0, 0, 0, date("m", $lastMonday)  , date("d", $lastMonday), date("Y", $lastMonday));
$query=$db->prepare("SELECT *, (islike - dontlike) AS diff FROM participant WHERE adddate<='".date('Y/m/d', $lastMonday)."' AND adddate>'".date('Y/m/d', $lastMonday-604800)."' ORDER BY diff DESC");
$query->execute();
$HistoricData=$query->fetch();
$query=$db->prepare("SELECT *, (islike - dontlike) AS diff FROM participant WHERE adddate<='".date('Y/m/d', $lastMonday-604800)."' AND adddate>'".date('Y/m/d', $lastMonday-1209600)."' ORDER BY diff DESC");
$query->execute();
$HistoricData1=$query->fetch();
$query=$db->prepare("SELECT *, (islike - dontlike) AS diff FROM participant WHERE adddate<='".date('Y/m/d', $lastMonday-1209600)."' AND adddate>'".date('Y/m/d', $lastMonday-1814400)."' ORDER BY diff DESC");
$query->execute();
$HistoricData2=$query->fetch();
$query=$db->prepare("SELECT *, (islike - dontlike) AS diff FROM participant WHERE adddate<='".date('Y/m/d', $lastMonday-1814400)."' AND adddate>'".date('Y/m/d', $lastMonday-2419200)."' ORDER BY diff DESC");
$query->execute();
$HistoricData3=$query->fetch();
$query=$db->prepare("SELECT *, (islike - dontlike) AS diff FROM participant WHERE adddate<='".date('Y/m/d', $lastMonday-2419200)."' AND adddate>'".date('Y/m/d', $lastMonday-3024000)."' ORDER BY diff DESC");
$query->execute();
$HistoricData4=$query->fetch();
$query=$db->prepare("SELECT *, (islike - dontlike) AS diff FROM participant WHERE adddate<='".date('Y/m/d', $lastMonday-3024000)."' AND adddate>'".date('Y/m/d', $lastMonday-3628800)."' ORDER BY diff DESC");
$query->execute();
$HistoricData5=$query->fetch();
$query=$db->prepare("SELECT *, (islike - dontlike) AS diff FROM participant WHERE adddate<='".date('Y/m/d', $lastMonday-3628800)."' AND adddate>'".date('Y/m/d', $lastMonday-4233600)."' ORDER BY diff DESC");
$query->execute();
$HistoricData6=$query->fetch();
$query=$db->prepare("SELECT *, (islike - dontlike) AS diff FROM participant WHERE adddate<='".date('Y/m/d', $lastMonday-4233600)."' AND adddate>'".date('Y/m/d', $lastMonday-4838400)."' ORDER BY diff DESC");
$query->execute();
$HistoricData7=$query->fetch();
// array getdate ([ int $timestamp = time("") ] );
// print_r($today);
// print_r(date_parse("2006-12-12 10:00:00.5"));
// while ($HistoricData=$query->fetch()) {
//     echo $HistoricData['pseudo'];
//     echo $HistoricData['adddate'];
//     echo $HistoricData['islike'];
//     echo $HistoricData['dontlike'];
// }
?>
<div id="historic" class="modal">
  <div class="modal-content">
    <h4 class="titreabout">Gagnants des 5 dernières semaines.</h4>
    <img src="imgs/winner.jpg" class="win responsive-img center-block">
      <ul class="collection with-header">
        <li class="blue liste row valign-warpper collection-item"><div class="col m12 s12 l12"><div class="col m4 s5 l4 name"><?php echo $HistoricData['pseudo']; ?></div><div class="name col m4 s6 l4" ><?php echo $HistoricData['adddate']; ?></div>
          <div class="col m4 l4 hide-on-small-only"><i class="fa fa-thumbs-up icon" aria-hidden="true"><?php echo $HistoricData['islike']; ?></i><i class="fa fa-thumbs-down icon" aria-hidden="true"><?php echo $HistoricData['dontlike']; ?></i></a></div></div></li>
        <li class="red liste row valign-warpper collection-item"><div class="col m12 s12 l12"><div class="col m4 s6 l4 name"><?php echo $HistoricData1['pseudo']; ?></div><div class="name col m4 s6 l4"><?php echo $HistoricData1['adddate']; ?></div>
          <div class="col m4 l4 hide-on-small-only"><i class="fa fa-thumbs-up icon" aria-hidden="true"><?php echo $HistoricData1['islike']; ?></i><i class="fa fa-thumbs-down icon" aria-hidden="true"><?php echo $HistoricData1['dontlike']; ?></i></a></div></li>
        <li class="yellow liste row valign-warpper collection-item"><div class="col m12 s12 l12"><div class="col m4 s6 l4 name"><?php echo $HistoricData2['pseudo']; ?></div><div class="name col m4 s6 l4"><?php echo $HistoricData2['adddate']; ?></div>
          <div class="col m4 l4 hide-on-small-only"><i class="fa fa-thumbs-up icon" aria-hidden="true"><?php echo $HistoricData2['islike']; ?></i><i class="fa fa-thumbs-down icon" aria-hidden="true"><?php echo $HistoricData2['dontlike']; ?></i></a></div></li>
        <li class="green liste row valign-warpper collection-item"><div class="col m12 s12 l12"><div class="col m4 s6 l4 name "><?php echo $HistoricData3['pseudo']; ?></div><div class="name col m4 s6 l4"><?php echo $HistoricData3['adddate']; ?></div>
          <div class="col m4 l4 hide-on-small-only"><i class="fa fa-thumbs-up icon" aria-hidden="true"><?php echo $HistoricData3['islike']; ?></i><i class="fa fa-thumbs-down icon" aria-hidden="true"><?php echo $HistoricData3['dontlike']; ?></i></a></div></li>
        <li class="orange liste valign-warpper row collection-item"><div class="col m12 s12 l12"><div class="col m4 s6 l4 name"><?php echo $HistoricData4['pseudo']; ?></div><div class="name col m4 s6 l4"><?php echo $HistoricData4['adddate']; ?></div>
          <div class="col m4 l4 hide-on-small-only"><i class="fa fa-thumbs-up icon" aria-hidden="true"><?php echo $HistoricData4['islike']; ?></i><i class="fa fa-thumbs-down icon" aria-hidden="true"><?php echo $HistoricData4['dontlike']; ?></i></a></div></li>
      </ul>
    <p></p>
  </div>
</div>
