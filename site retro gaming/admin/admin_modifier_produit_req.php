

<?php
// configuration
$db = new PDO('mysql:host=localhost;dbname=basev2;charset=utf8mb4', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// new data

$design = $_POST['design'];
$descrip = $_POST['descrip'];
$img = $_POST['img'];
$prix = $_POST['prix'];
$stock = $_POST['stock'];
$id_cat = $_POST['id_cat'];
$ids_cat = $_POST['ids_cat'];
$id = $_POST['id'];


// query
$sql = "UPDATE produit 
            SET design_produit=?, descrip_produit=?, img_produit=?, prix_produit=?, stock_produit=?, id_categorie=?, id_scategorie=?
    		WHERE id_produit=?";
$q = $db->prepare($sql);
$q->execute(array($design,$descrip,$img,$prix,$stock,$id_cat,$ids_cat,$id));
header("location: admin_afficher_produit.php");

?>