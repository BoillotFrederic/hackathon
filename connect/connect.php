<?php

try
{
<<<<<<< HEAD
    // 192.168.1.37 // FREDO
    //$db = new PDO("mysql:dbname=hackathon;host=192.168.1.37", "root2", "Az3rty", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
=======
    // 192.168.1.24 // FREDO
    $db = new PDO("mysql:dbname=hackathon;host=192.168.1.24", "root2", "Az3rty", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
>>>>>>> 16030c340c8b9af360cd9736d316b34a853d03d5
    // François
    //$db = new PDO("mysql:dbname=hackathon;host=localhost", "root", "CodeOp62", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    // Elise
    //$db = new PDO("mysql:dbname=hackathon;host=localhost", "root", "pokemon1910", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    // Chris
    $db = new PDO("mysql:dbname=hackathon;host=localhost", "root", "vidal62", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
}
catch (PDOException $e)
{
  echo 'Error : ' . $e->getMessage();
}

$db->exec('SET NAMES utf8');

?>
