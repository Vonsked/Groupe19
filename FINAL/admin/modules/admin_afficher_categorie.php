<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">


    <title>Interface admin</title>
</head>
<body>
<header>
    <?php include "../asset/header.php" ?>
</header>

<!-- PHP -->
<?php

require_once"../connect.php";


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


    <section class="table_cat">
        <div>
            <h2>Catégorie</h2>
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Catégorie</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $result = $db->prepare("SELECT * FROM categorie");
                $result->execute();
                for($i=0; $row = $result->fetch(); $i++){
                    ?>
                    <tr class="categorie">
                        <td><?php echo $row['id_categorie']; ?></td>
                        <td><?php echo $row['nom_categorie']; ?></td>
                        <td><a href="admin_modifier_categorie_form.php?id=<?php echo $row['id_categorie']; ?>"> edit </a></td>
                        <td><a href="admin_supprimer_categorie_req.php?id=<?php echo $row['id_categorie']; ?>"> suppr </a></td>
                    </tr>

                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>

        <div>
            <h2>Sous-Catégorie</h2>
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Sous-Catégorie</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $result = $db->prepare("SELECT * FROM sous_categorie");
                $result->execute();
                for($i=0; $row = $result->fetch(); $i++){
                    ?>
                    <tr class="scategorie">
                        <td><?php echo $row['id_scategorie']; ?></td>
                        <td><?php echo $row['nom_scategorie']; ?></td>
                        <td><a href="admin_modifier_categorie_form.php?id=<?php echo $row['id_scategorie']; ?>"> edit </a></td>
                        <td><a href="admin_supprimer_scategorie_req.php?id=<?php echo $row['id_scategorie']; ?>"> suppr </a></td>
                    </tr>

                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>

    </section>
</main>
<!--
<footer>
	<?php /*include "footer.php" */?>
</footer>-->
</body>
</html>