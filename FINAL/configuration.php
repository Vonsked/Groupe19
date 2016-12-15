<?php


function Connection{


    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "baseV1";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
        //Définir le mode d'erreur PDO à l'exception
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection reussi"; 
    }
    catch(PDOException $e)
    {
        echo "Connection ratet: " . $e->getMessage();
    }
}
?>