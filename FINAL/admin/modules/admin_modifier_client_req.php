

<?php
// configuration
require_once"connect.php";
// new data

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$civilite = $_POST['civilite'];
$adresse = $_POST['adresse'];
$cp = $_POST['cp'];
$ville = $_POST['ville'];
$telephone = $_POST['telephone'];
$mail = $_POST['mail'];
$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];
$id = $_POST['id'];


// query
$sql = "UPDATE client 
            SET nom_client=?, prenom_client=?, civilite_client=?, adresse_client=?, cp_client=?, ville_client=?, tel_client=?, mail_client=?, pseudo_client=?, password_client=?
    		WHERE id_client=?";
$q = $db->prepare($sql);
$q->execute(array($nom,$prenom,$civilite,$adresse,$cp,$ville,$telephone,$mail,$pseudo,$mdp,$id));
header("location: index.php");

?>