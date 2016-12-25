<?php

try
{
<<<<<<< HEAD
    // 192.168.1.24 // FREDO
    $db = new PDO("mysql:dbname=hackathon;host=192.168.1.51", "root2", "Az3rty", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    // François
    $db = new PDO("mysql:dbname=hackathon;host=localhost", "root", "CodeOp62", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    // Elise
    //$db = new PDO("mysql:dbname=hackathon;host=localhost", "root", "pokemon1910", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    // Chris
    //$db = new PDO("mysql:dbname=hackathon;host=localhost", "root", "vidal62", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
=======
    $db = new PDO("mysql:dbname=hackathon;host=localhost", "root2", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
>>>>>>> 5d448bc1dd1a790ce5d9be639419a5d8e040e46e
}
catch (PDOException $e)
{
  echo 'Error : ' . $e->getMessage();
}

$db->exec('SET NAMES utf8');

?>
