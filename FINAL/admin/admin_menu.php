<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">


	<title>Interface admin</title>
</head>
<body>
<header>
	<?php include "header.php" ?>
</header>

<!-- PHP -->



<main class = "admin_interface">

    <aside>
        <ul>
            <li><h4>Produits</h4></li>
            <ul>
                <li><a href="admin_afficher_produit.php">Afficher / Modifier</a></li>
                <li>Ajouter</li>
            </ul>
            <li><h4>Catégories</h4></li>
            <ul>
                <li><a href="admin_afficher_categorie.php">Afficher / Modifier</a></li>
                <li>Ajouter</li>
            </ul>
            <li><h4>Clients</h4></li>
            <ul>
                <li><a href="admin_afficher_client.php">Afficher / Supprimer</a></li>
            </ul>
            <li><a href="admin_afficher_commande.php"><h4>Commandes</h4></a></li>
        </ul>
    </aside>

	<section>
		<div class="spaceinvaders"></div>
	</section>
</main>

<footer>
	<?php /*include "footer.php" */?>
</footer>
</body>
</html>