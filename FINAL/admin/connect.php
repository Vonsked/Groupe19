<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "basefinale";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    //Définir le mode d'erreur PDO à l'exception

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection ratet: " . $e->getMessage();
}$db->exec('set names utf8');
