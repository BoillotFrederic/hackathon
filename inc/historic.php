<?php
$lastMonday = time() + ( date() - date("N") + 1) * 86400;

$query=$db->prepare("SELECT *, (islike - dontlike) AS diff FROM participant WHERE adddate<='".date('Y/m/d', $lastMonday)."' AND adddate>'".date('Y/m/d', $lastMonday-604800000)." ORDER BY diff DESC'");
$query->execute();
$HistoricData=$query->fetch();
echo $HistoricData['pseudo;'];
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
    <h4 class="titreabout">Nos anciens gagnants et participants.</h4>
    <img src="imgs/winner.jpg" class="win responsive-img center-block">
      <ul class="collection with-header">
        <li class="collection-header"><h4 class="titreli">Gagnants sur les 2 derniers mois</h4></li>
        <li class="blue row collection-item"><div class="col m12 s12 l12"><div class="col m4 s4 l4 name">Alvin</div><div class="col m4 s4 l4" >le 17/12/2016</div>
          <div class="col m4 s4 l4"><i class="fa fa-thumbs-up icon" aria-hidden="true">100</i><i class="fa fa-thumbs-down icon" aria-hidden="true">50</i></a></div></div></li>
        <li class="row collection-item"><div class="col m12 s12 l12"><div class="col m4 s4 l4 name">Sacha</div><div class="col m4 s4 l4">le 10/12/2016</div>
          <div class="col m4 s4 l4"><i class="fa fa-thumbs-up icon" aria-hidden="true">100</i><i class="fa fa-thumbs-down icon" aria-hidden="true">50</i></a></div></li>
        <li class="red row collection-item"><div class="col m12 s12 l12"><div class="col m4 s4 l4 name">Vidal</div><div class="col m4 s4 l4">le 03/12/2016</div>
          <div class="col m4 s4 l4"><i class="fa fa-thumbs-up icon" aria-hidden="true">100</i><i class="fa fa-thumbs-down icon" aria-hidden="true">50</i></a></div></li>
        <li class="row collection-item"><div class="col m12 s12 l12"><div class="col m4 s4 l4 name ">Jacqueline</div><div class="col m4 s4 l4">le 26/11/2016</div>
          <div class="col m4 s4 l4"><i class="fa fa-thumbs-up icon" aria-hidden="true">100</i><i class="fa fa-thumbs-down icon" aria-hidden="true">50</i></a></div></li>
        <li class="green row collection-item"><div class="col m12 s12 l12"><div class="col m4 s4 l4 name">Hervé</div><div class="col m4 s4 l4">le 19/11/2016</div>
          <div class="col m4 s4 l4"><i class="fa fa-thumbs-up icon" aria-hidden="true">100</i><i class="fa fa-thumbs-down icon" aria-hidden="true">50</i></a></div></li>
        <li class="row collection-item"><div class="col m12 s12 l12"><div class="col m4 s4 l4 name">Samuel</div><div class="col m4 s4 l4">le 12/11/2016</div>
          <div class="col m4 s4 l4"><i class="fa fa-thumbs-up icon" aria-hidden="true">100</i><i class="fa fa-thumbs-down icon" aria-hidden="true">50</i></a></div></li>
        <li class="yellow row collection-item"><div class="col m12 s12 l12"><div class="col m4 s4 l4 name">Brigitte</div><div class="col m4 s4 l4">le 05/11/2016</div>
          <div class="col m4 s4 l4"><i class="fa fa-thumbs-up icon" aria-hidden="true">100</i><i class="fa fa-thumbs-down icon" aria-hidden="true">50</i></a></div></li>
        <li class="row collection-item"><div class="col m12 s12 l12"><div class="col m4 s4 l4 name">Théo</div><div class="col m4 s4 l4">le 29/10/2016</div>
          <div class="col m4 s4 l4"><i class="fa fa-thumbs-up icon" aria-hidden="true">100</i><i class="fa fa-thumbs-down icon" aria-hidden="true">50</i></a></div></li>
      </ul>
    <p></p>
  </div>
</div>
