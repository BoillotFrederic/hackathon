<?php

// Connexion à la base de données
include 'connect/connect.php';

// Récupération du POST
define('POST_type', (isset($_POST['type']) && $_POST['type'] == 'true') ? $_POST['type'] : 'false');
define('POST_id', (isset($_POST['id']) && is_numeric($_POST['id']) ? $_POST['id'] : 0));
$id = POST_id;

// Vérification du votant
$prep = $db->prepare('SELECT * from iplikendislike WHERE ip=:ip and idselfie=:idselfie');
$prep -> bindParam(':ip', $_SERVER["REMOTE_ADDR"]);
$prep -> bindParam(':idselfie', $id);
$prep->execute();
$dbIP = $prep->fetch();

if (@$dbIP['ip'] != $_SERVER["REMOTE_ADDR"])
{
  $prep = $db -> prepare('INSERT INTO iplikendislike (idselfie, ip) VALUES (:id, :ip)');
  $prep -> bindParam(':ip', $_SERVER["REMOTE_ADDR"]);
  $prep -> bindParam(':id', $id);

  $prep -> execute();

  // Incrémentation
  if (POST_type == 'true')
  $prep = $db -> prepare('UPDATE participant set islike=islike+1 WHERE id=:IN_id');
  else
  $prep = $db -> prepare('UPDATE participant set dontlike=dontlike+1 WHERE id=:IN_id');

  $prep -> bindParam(':IN_id', $id);
  $prep -> execute();

  // Confirmation
  echo 'true';
}

// Confirmation
else
echo 'false';
?>
