<?php

// Dernier Lundi
$lastMonday = time() + ( date() - date("N") + 1) * 86400;
$lastMonday = mktime(0, 0, 0, date("m", $lastMonday)  , date("d", $lastMonday), date("Y", $lastMonday));

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
    <div class="col l2 m2 s2 center-align ">

      <div id="like"><span class="num"><?php echo $winnerData['islike']; ?></span><i class="liker fa fa-thumbs-o-up fa-3x" aria-hidde="true"></i></div>
      <div id="like1"><span class="num"><?php echo $winnerData['dontlike']; ?></span><i class="disliker fa fa-thumbs-o-down fa-3x" aria-hidden="true"></i></div>
     </div>





     <!-- Modal Trigger -->

   <!-- Modal Structure -->
   <div id="modal1" class="modal bottom-sheet">
     <div class="modal-content">
           <div class="row">
                <div class="col 4l m2 s2 center-align">
                  <div class="corpsleft">
                     <h6>date</h6><div class="dates valign-wrapper">22/11</div>
                      <h6>pseudo</h6><div class="speudo valign-wrapper">22/11</div>
                    </div>
                  </div>
                    <div class="col l8 m8 s8 center-align">
                      <div class="corpsright">
                         <p>commentaires</p>
                         <p><div class="com valign-wrapper ">trop beau </div></p>
                       </div>
                       </div>
              </div>
                        <div class="row">
                       <div class="col 4l m2 s2 center-align">
                            <h6>date</h6><div class="dates valign-wrapper" id="dates">22/11</div>
                             <h6>pseudo</h6><div class="speudo valign-wrapper" id="speudos">22/11</div>
                           </div>
                           <div class="col l8 m8 s8 center-align">
                                <p>commentaires</p>
                                <div class="com valign-wrapper " id="comm">trop beau </div>
                              </div>
                            </div>


     </div>



           <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">FERMER</a>
            </div>

          </div>
    </div>
  </div>
