<?php

$query = $db->prepare('SELECT *, (islike - dontlike) AS diff from participant WHERE adddate >= "'.date("Y/m/d", $lastMonday-7*24*3600).'" and adddate < "'.date("Y/m/d", $lastMonday).'" ORDER BY diff DESC');
$query->execute();
$winnerData = $query->fetch();

?>


<!-- ajout de commentaire-->
<div id="addCom" class="modal">
  <div class="modal-content">
    <h4>Ajouter Un Commentaire</h4>
    <div class="row">
      <form id="submitAddCom" data-id="<?php echo $winnerData['id']; ?>" class="col s12" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s12">
            <input autocomplete="off" id="pseudoCom" type="text" name="pseudoCom" class="validate">
            <label for="pseudoCom">Pseudo</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea autocomplete="off" id="textCom" class="materialize-textarea"></textarea>
            <label for="textCom">Commentaire</label>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="modal-footer">
    <a onclick="addCom(); return false;" href="" class="modal-action waves-effect waves-green btn-flat">Poster</a>
  </div>
</div><!-- fin de ajout de commentaire-->

<div class="container">
   <div class="row">
     <div class="col l12 m12 s12 center-align">
       <!--compte a rebour-->
       <?php
        $nextMonday = strtotime('next monday');
        $weekNoNextMonday = date('d', $nextMonday);

        $nbDays = $weekNoNextMonday - date('d');
        $nbDays = $nbDays . ' <span>jour' . (($nbDays > 1) ? 's' : '') . '</span>';
       ?>
          <p id="Compte"><span>Prochain gagnant dans</span> <?php echo $nbDays; ?> </p>
    </div><!-- fin compte a rebour-->

       <div class="col l12 m12 s12 center-align">
      <h3 class="blink"> Gagnant de la semaine précedente !</h3>
      </div>

  </div>

   <div  class="row">
     <div class="col l12 m12 s12 center">
       <img id="medaille" src="imgs/medaille.jpeg"alt='medaille'>
     </div>

       <div class="col l12 m12 s12 center-align">
         <div class="col S12 m12 l12 center-align" style="width:100% !important">
          <div id="pseudogagnant"><?php echo $winnerData['pseudo']; ?></div>
        </div>
          <div id="divgagnant">
            <img class="center responsive-img" id="gagnant" onclick="clickimage();"src="uploads/<?php echo $winnerData['img']; ?>" alt="<?php echo $winnerData['pseudo']; ?>">
            <div id="like"><span class="num"><?php echo $winnerData['islike']; ?></span><a  class="liker fa fa-thumbs-o-up fa-3x" aria-hidde="true"></a></div>
            <div id="like1"><span class="num"><?php echo $winnerData['dontlike']; ?></span><a  class="disliker fa fa-thumbs-o-down fa-3x" aria-hidden="true"></a></div>
          </div>
       </div>
    </div>
       <div class="col s12 m12 l12 center">
       <a id="boutonmodal" class="waves-effect waves-light btn" href="#modal1">Commentaires</a>

       </div>






     <!-- Modal Trigger -->

   <!-- Modal Structure -->
   <div id="modal1" class="modal bottom-sheet">
     <div class="modal-content">
           <div class="row com">
        <?php

        $prep = $db->prepare('SELECT *, DATE_FORMAT(comdate,"%d/%m/%Y") AS date_mdY from comments WHERE idselfie=:id  ORDER BY id DESC LIMIT 0,10');
        $prep -> bindValue(':id', intval($winnerData['id']), PDO::PARAM_INT);
        $prep->execute();

        while($comData = $prep->fetch())
        {
        ?>
          <div class="row borderBottom">
            <div class="col l2 m3 s6 borderRight msgUser">
              <span class="speudo "><?php echo $comData['pseudo']; ?></span> a posté<br />
              Le <span class="dates "><?php echo $comData['date_mdY']; ?></span>
            </div>
            <div class="col l10 m9 s6">
              <p class="commentaire"><?php echo $comData['com']; ?></p>
            </div>
          </div>
        <?php
        }
        ?>
      </div>

           <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">FERMER</a>
             <a id="boutonmodal" class="waves-effect waves-light btn" href="#addCom">Ajouter Un Commentaire</a>
            </div>

    </div>
  </div>

</div>
