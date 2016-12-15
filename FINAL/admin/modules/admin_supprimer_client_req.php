
<?php
// configuration
require_once"connect.php";
// new data
$id=$_GET['id'];

// query
$sql = "DELETE FROM client
WHERE id_client=?";
$q = $db->prepare($sql);
$q->execute(array($id));
header("location: admin_afficher_client.php");

?>