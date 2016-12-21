<?php

$query = $db->prepare('SELECT *, (islike - dontlike) AS diff from participant WHERE adddate >= "'.date("Y/m/d", $lastMonday-7*24*3600).'" and adddate < "'.date("Y/m/d", $lastMonday).'" ORDER BY diff DESC');
$query->execute();
$winnerData = $query->fetch();

?>



<div id="addcommentaire" class="modal">
  <div class="modal-content">
    <h4>Ajouter Un Commentaire</h4>
    <div class="row">
      <form id="submitAddCommentaire" class="col s12" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s12">
            <input autocomplete="off" id="pseudo" type="text" name="pseudo" class="validate">
            <label for="pseudo">Pseudo</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input autocomplete="off" id="email" type="email" name="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="file-field input-field">
          <div class="btn">
            <span>Commentaire</span>
            <input autocomplete="off" id="file" name="file" type="file">
          </div>
          <div class="file-path-wrapper">
            <input autocomplete="off" class="file-path validate" type="text">
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="modal-footer">
    <a onclick="addForm(); return false;" href="" class="modal-action waves-effect waves-green btn-flat">Ajouter</a>
  </div>
</div>

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
     <div class="col l10 m12 s12 center">
          <span><?php echo $winnerData['pseudo']; ?></span>
         <img id="gagnant" onclick="clickimage();"src="uploads/<?php echo $winnerData['img']; ?>" alt="<?php echo $winnerData['pseudo']; ?>">
       <a id="boutonmodal" class="waves-effect waves-light btn" href="#modal1">Commentaires</a>
    </div>
    <div class="col l2 m2 s12 center-align ">

      <div id="like"><span class="num"><?php echo $winnerData['islike']; ?></span><i class="liker fa fa-thumbs-o-up fa-3x" aria-hidde="true"></i></div>
      <div id="like1"><span class="num"><?php echo $winnerData['dontlike']; ?></span><i class="disliker fa fa-thumbs-o-down fa-3x" aria-hidden="true"></i></div>
     </div>





     <!-- Modal Trigger -->

   <!-- Modal Structure -->
   <div id="modal1" class="modal bottom-sheet">
     <div class="modal-content">
           <div class="row borderBottom">
                <div class="col l2 m3 s6 borderRight msgUser">
                    <span class="speudo ">chris</span> à posté<br />
                    Le <span class="dates ">22/11/2016</span>
                </div>
                <div class="col l10 m9 s6">
                     <p class="commentaire">trop beau</p>
                </div>
            </div>
     </div>

           <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">FERMER</a>
             <a id="boutonmodal" class="waves-effect waves-light btn" href="#addcommentaire">Ajouter Un Commenter</a>
            </div>

          </div>
    </div>
  </div>
