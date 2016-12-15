

<?php
// configuration
require_once"connect.php";
// new data

$design = $_POST['design'];
$descrip = $_POST['descrip'];
$img = $_POST['img'];
$prix = $_POST['prix'];
$stock = $_POST['stock'];
$id_cat = $_POST['id_cat'];
$ids_cat = $_POST['ids_cat'];
$id = $_POST['id'];
echo $id_cat, $ids_cat;  


// query
$sql = "UPDATE produit 
            SET design_produit=?, descrip_produit=?, img_produit=?, prix_produit=?, stock_produit=?, id_categorie=?, id_scategorie=?
    		WHERE id_produit=?";
$q = $db->prepare($sql);
$q->execute(array($design,$descrip,$img,$prix,$stock,$id_cat,$ids_cat,$id));
header("location: admin_afficher_produit.php");

?>