<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    
    <style type="text/css">
        
        .ajout_categorie, .ajout_scategorie
        {
            width: 30%;
            margin: 5% auto 4% auto;
            height: 10em;
        }
        .ajout_categorie label, .ajout_categorie input, .ajout_scategorie label, .ajout_scategorie input
        {
            float: left;
            clear: both;
            width: 50%;
            font-size: 20px;
        }
        .ajout_categorie input, .ajout_scategorie input
        {
            margin: 1% 0 1% 0;
        }

        .ajout_categorie div .bouton, .ajout_scategorie div .bouton
        {
            margin: 3% 0 3% 0;
        }


    </style>

	<title>Interface admin</title>
</head>
<body>
<header>
	<?php include "../asset/header.php" ?>
</header>

<!-- PHP -->
<?php

require_once"../connect.php";

if(isset($_POST['valider1'])) {

    $nom_categorie = (isset($_POST['nom_categorie'])) ? $_POST['nom_categorie'] : '';




    $sql = "INSERT INTO categorie(nom_categorie) VALUES(:nom_categorie)";

    $stmt = $db->prepare($sql);

    $stmt->execute(array(':nom_categorie'=> $nom_categorie));
}
if(isset($_POST['valider2'])) {

    $nom_scategorie = (isset($_POST['nom_scategorie'])) ? $_POST['nom_scategorie'] : '';




    $sql = "INSERT INTO sous_categorie(nom_scategorie) VALUES(:nom_scategorie)";

    $stmt = $db->prepare($sql);

    $stmt->execute(array(':nom_scategorie'=> $nom_scategorie));
}
?>


<main class = "admin_interface">


    <aside>
        <ul>
            <li><h4>Produits</h4></li>
            <ul>
                <li><a href="../modules/admin_afficher_produit.php">Afficher / Modifier</a></li>
                <li><a href="../modules/admin_ajouter_produit.php">Ajouter</a></li>
            </ul>
            <li><h4>Catégories</h4></li>
            <ul>
                <li><a href="../modules/admin_afficher_categorie.php">Afficher / Modifier</a></li>
                <li><a href="../modules/admin_ajouter_categories.php">Ajouter</a></li>
            </ul>
            <li><h4>Clients</h4></li>
            <ul>
                <li><a href="../modules/admin_afficher_client.php">Afficher / Supprimer</a></li>
            </ul>
            <li><a href="../modules/admin_afficher_commande.php"><h4>Commandes</h4></a></li>
        </ul>
    </aside>

	<section>
        <div class= "ajout_categorie">
            <form method="post" action="admin_ajouter_categories.php">
                <div>
                    <label for="nom_categorie">Catégorie *</label>
                    <input type="text" name="nom_categorie" id="nom_categorie" >
                </div>

                <div>
                    <input type="submit" name="valider1" class = "bouton">
                </div>
            </form>
        </div>

        <div class= "ajout_scategorie">
            <form method="post" action="admin_ajouter_categories.php">
                <div>
                    <label for="nom_scategorie">Sous Catégorie *</label>
                    <input type="text" name="nom_scategorie" id="nom_scategorie" required>
                </div>

                 <div>
                    <input type="submit" name="valider2" class = "bouton">
                </div>
            </form>
        </div>
	</section>
</main>


</body>
</html>