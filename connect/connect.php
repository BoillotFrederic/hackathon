<?php

try
{
    $db = new PDO("mysql:dbname=hackathon;host=localhost", "root2", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
}
catch (PDOException $e)
{
  echo 'Error : ' . $e->getMessage();
}

$db->exec('SET NAMES utf8');

?>
