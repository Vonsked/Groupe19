
<?php
// configuration
require_once"../connect.php";
// new data
$id=$_GET['id'];

// query
$sql = "DELETE FROM produit
WHERE id_produit=?";
$q = $db->prepare($sql);
$q->execute(array($id));
header("location: admin_afficher_produit.php");

?>