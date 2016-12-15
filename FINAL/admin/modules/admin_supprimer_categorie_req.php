
<?php
// configuration
require_once"connect.php";
// new data
$id=$_GET['id'];

// query
$sql = "DELETE FROM categorie
WHERE id_categorie=?";
$q = $db->prepare($sql);
$q->execute(array($id));
header("location: admin_afficher_categorie.php");

?>