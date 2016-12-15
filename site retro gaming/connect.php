<?php
$servername = "localhost";
$username = "root";
$password = "";  
$dbname = "baseV1";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    //Définir le mode d'erreur PDO à l'exception

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection reussi"; 
}
catch(PDOException $e)
{
    echo "Connection ratet: " . $e->getMessage();
}$db->exec('set names utf8');
