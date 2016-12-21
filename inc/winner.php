<?php

// Connexion à la base de données
include 'connect/connect.php';

// Dernier Lundi
$lastMonday = time() - ( date("N") -1) * 86400;
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
     <div class="col l12 m12 s12 center-align">
          <span><?php echo $winnerData['pseudo']; ?></span>
         <img id="gagnant" onclick="clickimage();"src="uploads/<?php echo $winnerData['img']; ?>" alt="<?php echo $winnerData['pseudo']; ?>">
       <a id="boutonmodal" class="waves-effect waves-light btn" href="#modal1">Commentaires</a>

    </div>

     <!-- Modal Trigger -->

   <!-- Modal Structure -->
   <div id="modal1" class="modal bottom-sheet">
     <div class="modal-content">
           <div class="row">
                <div class="col 2l m2 s2">
                    <h6 id="datess">date</h6>
                     <div class="dates valign-wrapper" id="dates">2222</div>
                      <div class="dates valign-wrapper" id="dates">2222</div>
                       <div class="dates valign-wrapper" id="dates">2222</div>
                        <div class="dates valign-wrapper" id="dates">2222</div>
                         <div class="dates valign-wrapper" id="dates">2222</div>
                          <div class="dates valign-wrapper" id="dates">2222</div>
                           <div class="dates valign-wrapper" id="dates">2222</div>
                            <div class="dates valign-wrapper" id="dates">2222</div>

                </div>
      <div class="col 2l m2 s2">
        <h6 id="speudo1">pseudo</h6>
         <div class="speudo valign-wrapper" id="speudo">2222</div>
          <div class="speudo valign-wrapper" id="speudo">2222</div>
           <div class="speudo valign-wrapper" id="speudo">2222</div>
            <div class="speudo valign-wrapper" id="speudo">2222</div>
             <div class="speudo valign-wrapper" id="speudo">2222</div>
              <div class="speudo valign-wrapper" id="speudo">2222</div>
               <div class="speudo valign-wrapper" id="speudo">2222</div>
                <div class="speudo valign-wrapper" id="spudo">2222</div>


      </div>


      <div class="col l8 m8 s8">
                <h6 id="comme">commentaires</h6>
         <div class="com valign-wrapper " id="comm">proute</div>
          <div class="com valign-wrapper" id="comm1">ppp</div>
           <div class="com valign-wrapper" id="comm2">ppp</div>
            <div class="com valign-wrapper" id="comm3">ppp</div>
             <div class="com valign-wrapper" id="comm4">ppp</div>
              <div class="com valign-wrapper" id="comm5">ppp</div>
               <div class="com valign-wrapper" id="comm6">ppp</div>
                <div class="com valign-wrapper" id="comm7">ppp</div>

     </div>

       </div>
     </div>

           <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">FERMER</a>
            </div>
  </div>

 </div>
</div>
