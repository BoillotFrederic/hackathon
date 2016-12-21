<?php

try
{
    // 192.168.1.37 // FREDO
    $db = new PDO("mysql:dbname=hackathon;host=localhost", "root2", "Az3rty", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    // François
    //$db = new PDO("mysql:dbname=hackathon;host=localhost", "root", "CodeOp62", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    // Elise
    //$db = new PDO("mysql:dbname=hackathon;host=localhost", "root", "pokemon1910", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    // Chris
    //$db = new PDO("mysql:dbname=hackathon;host=localhost", "root", "vidal62", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
}
catch (PDOException $e)
{
  echo 'Error : ' . $e->getMessage();
}

$db->exec('SET NAMES utf8');

?>
