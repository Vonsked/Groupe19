
<?php
// configuration
$db = new PDO('mysql:host=localhost;dbname=basev2;charset=utf8mb4', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false,
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// new data
$id=$_GET['id'];

// query
$sql = "DELETE FROM categorie
WHERE id_categorie=?";
$q = $db->prepare($sql);
$q->execute(array($id));
header("location: admin_afficher_categorie.php");

?>