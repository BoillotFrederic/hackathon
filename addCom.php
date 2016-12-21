<?php

  // Connexion à la base de données
  include 'connect/connect.php';

  // Récupération du POST
  define('POST_id', (isset($_POST['id']) && trim($_POST['id']) != '') ? $_POST['id'] : '');
  define('POST_pseudo', (isset($_POST['pseudo']) && trim($_POST['pseudo']) != '') ? $_POST['pseudo'] : '');
  define('POST_com', (isset($_POST['com']) && trim($_POST['com']) != '') ? $_POST['com'] : '');

  // Vérification du post
  $error = '';

  if (!POST_pseudo || !POST_com)
  $error = 'field';

if ($error)
{
?>

<div class="modal-content">
  <h4>Erreur de validation</h4>
  <p class="red-text text-darken-4">
    Raison :
              <?php
                if($error == 'field')
                echo 'Tous les champs sont obligatoire';
              ?>
    !
  </p>

<div class="modal-footer">
  <a onclick="addComBack(); return false;" href="" class="modal-action waves-effect waves-green btn-flat">Retour</a>
</div>

<?php
}
else
{
?>

<div class="modal-content">
  <h4>Commentaire ajouté</h4>
  <p class="green-text text-darken-4">Le commentaire a bien été posté !</p>

<div class="modal-footer">
  <a onclick="addFormInit(); return false;" href="" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
</div>

<?php
// Ajout des données à la base des données
$id = POST_id;
$pseudo = POST_pseudo;
$com = POST_com;

$prep = $db -> prepare('INSERT INTO comments (idselfie, pseudo, com, comdate) VALUES (:IN_id, :IN_pseudo, :IN_com, now())');
$prep -> bindParam(':IN_id', $id);
$prep -> bindParam(':IN_pseudo', $pseudo);
$prep -> bindParam(':IN_com', $com);

$prep -> execute();
}
?>
