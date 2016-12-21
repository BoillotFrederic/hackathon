<?php

// Connexion à la base de données
include 'connect/connect.php';

// Dernier Lundi
$lastMonday = time() + ( date() - date("N") + 1) * 86400;
$lastMonday = mktime(0, 0, 0, date("m", $lastMonday)  , date("d", $lastMonday) +1, date("Y", $lastMonday));

$query = $db->prepare('SELECT *, (islike - dontlike) AS diff from participant WHERE adddate >= "'.date("Y/m/d", $lastMonday-7*24*3600).'" and adddate < "'.date("Y/m/d", $lastMonday).'" ORDER BY diff DESC');
$query->execute();
$winnerData = $query->fetch();

?>





<div class="container">
   <div class="row">
     <div class="col l12 m12 s12 center-align">
          <p id="Compte"></p>
    </div>
   <div class="col l12 m12 s12 center-align">
      <h3 class="blink"> Gagnant de la semaine!</h3>
  </div>

     </div>

     <div  class="row">
     <div class="col l10 m12 s12 center-align">
          <span><?php echo $winnerData['pseudo']; ?></span>
         <img id="gagnant" onclick="clickimage();"src="uploads/<?php echo $winnerData['img']; ?>" alt="<?php echo $winnerData['pseudo']; ?>">
       <a id="boutonmodal" class="waves-effect waves-light btn" href="#modal1">Commentaires</a>
    </div>
    <div class="col l2 m2 s2 center-align">
      <div id="like"></i><?php echo $winnerData['islike']; ?></div>
      <div id="like1"></i><?php echo $winnerData['dontlike']; ?></div>
    </div>
<!-- <i class="like fa fa-thumbs-o-up fa-3x" aria-hidden="true">
<i class="like fa fa-thumbs-o-up fa-3x" aria-hidden="true"> -->
     <!-- Modal Trigger -->

   <!-- Modal Structure -->
   <div id="modal1" class="modal bottom-sheet">
     <div class="modal-content">
           <div class="row">
                <div class="col 2l m2 s2 center-align">

                     <div class="dates valign-wrapper" id="dates">22/11</div>
                      <div class="dates valign-wrapper" id="dates1">22/11</div>
                       <div class="dates valign-wrapper" id="dates2">22/11</div>
                        <div class="dates valign-wrapper" id="dates3">22/11</div>
                         <div class="dates valign-wrapper" id="dates4">22/11</div>
                          <div class="dates valign-wrapper" id="dates5">22/11</div>
                           <div class="dates valign-wrapper" id="dates6">22/11</div>
                            <div class="dates valign-wrapper" id="dates7">22/11</div>

                </div>
      <div class="col 2l m2 s2 center-align">

         <div class="speudo valign-wrapper" id="speudo">fred</div>
          <div class="speudo valign-wrapper" id="speudo1">chris</div>
           <div class="speudo valign-wrapper" id="speudo2">francois</div>
            <div class="speudo valign-wrapper" id="speudo3">élise</div>
             <div class="speudo valign-wrapper" id="speudo4">francois</div>
              <div class="speudo valign-wrapper" id="speudo5">rémy</div>
               <div class="speudo valign-wrapper" id="speudo6">greg</div>
                <div class="speudo valign-wrapper" id="spudo7">thomas</div>


      </div>


      <div class="col l8 m8 s8 center-align">

         <div class="com valign-wrapper " id="comm">trop beau </div>
          <div class="com valign-wrapper" id="comm1">super </div>
           <div class="com valign-wrapper" id="comm2">super</div>
            <div class="com valign-wrapper" id="comm3">beau</div>
             <div class="com valign-wrapper" id="comm4">super photo</div>
              <div class="com valign-wrapper" id="comm5">cool trop bien</div>
               <div class="com valign-wrapper" id="comm6">super</div>
                <div class="com valign-wrapper" id="comm7">cool</div>

     </div>

       </div>
     </div>

           <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">FERMER</a>
            </div>
  </div>
</div>
</div>
