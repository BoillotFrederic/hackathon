<?php

  // Connexion à la base de données
  include 'connect/connect.php';

  // Récupération du POST
  define('POST_pseudo', (isset($_POST['pseudo']) && trim($_POST['pseudo']) != '') ? $_POST['pseudo'] : '');
  define('POST_email', (isset($_POST['email']) && trim($_POST['email']) != '') ? $_POST['email'] : '');

  // Le fichier
  $fileName = basename($_FILES['file']['name']);
  $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
  $uploaddir = 'uploads/';
  $uploadfile = $uploaddir . $fileName;

  // Vérification du post
  $error = '';

  if (!POST_pseudo || !POST_email)
  $error = 'field';

  else if (!preg_match('/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/', POST_email))
  $error = 'email';

  else if (!@move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))
  $error = 'file';

  else if ($fileExt != 'jpg' && $fileExt != 'jpeg' && $fileExt != 'JPG' && $fileExt != 'JPEG')
  $error = 'ext';

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
                else if($error == 'email')
                echo 'L\'email est invalide';
                else if($error == 'ext')
                echo 'Le format attendu est uniquement le JPG/JPEG';
                else
                echo 'Le fichier n\'a pas pu être téléchargé';
              ?>
    !
  </p>

<div class="modal-footer">
  <a onclick="addFormBack(); return false;" href="" class="modal-action waves-effect waves-green btn-flat">Retour</a>
</div>

<?php
}
else
{
?>

<div class="modal-content">
  <h4>Envoi effectué</h4>
  <p class="green-text text-darken-4">Le selfies a correctement été ajouté !</p>

<div class="modal-footer">
  <a onclick="addFormInit(); return false;" href="" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
</div>

<?php
// Ajout des données à la base des données
$pseudo = POST_pseudo;
$email = POST_email;

$prep = $db -> prepare('INSERT INTO participant (pseudo, email, img, adddate) VALUES (:IN_pseudo, :IN_email, :IN_img, now())');
$prep -> bindParam(':IN_pseudo', $pseudo);
$prep -> bindParam(':IN_email', $email);
$prep -> bindParam(':IN_img', $fileName);

$prep -> execute();
}
?>
