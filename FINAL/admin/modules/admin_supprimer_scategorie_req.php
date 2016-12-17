<?php
// configuration
require_once"../connect.php";
// new data
$id=$_GET['id'];

// query
$sql = "DELETE FROM sous_categorie
WHERE id_scategorie=?";
$q = $db->prepare($sql);
$q->execute(array($id));
header("location: admin_afficher_categorie.php");

?>