<?php
require_once"connect.php";
session_start();
if (isset($_SESSION['pseudo'])) {
    $visible=1;
}else{
    $visible=0;
}
$pseudo = $_SESSION['pseudo'];
$result = $db->prepare("SELECT * FROM client WHERE pseudo_client = :pseudo");
$result->bindValue(':pseudo', $pseudo);
$result->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <title>L'Atelier Rétro</title>
</head>
<body>

<?php include_once ("asset/header.php"); ?>

<!-- CONTENU -->

<div class="spaceinvaders">
    <h2>Votre Pseudo : <?= $row['pseudo_client'] ?></h2>

    <p>Votre mot de passe : </p>
</div>

<!-- FOOTER -->
<?php include_once("asset/footer.php"); ?>
</body>
</html>
