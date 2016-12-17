<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    
    <style type="text/css">
        
        .ajout_produit
        {
            width: 30%;
            margin: 4% auto 0 auto;

        }
        .ajout_produit label, .ajout_produit input, .ajout_produit textarea, .ajout_produit div select
        {
            float: left;
            clear: both;
            width: 50%;
            font-size: 20px;
        }
        .ajout_produit input, .ajout_produit textarea, .ajout_produit div select
        {
            margin: 1% 0 1% 0;
        }
        .ajout_produit textarea
        {
            width: 80%;
            height: 5em;
        }

         .ajout_produit .up_img
        {
            width: 24%;
        }

        .ajout_produit div .bouton
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


if(isset($_POST['valider'])) {

    $design_produit = (isset($_POST['design_produit'])) ? $_POST['design_produit'] : '';
    $descrip_produit = (isset($_POST['descrip_produit'])) ? $_POST['descrip_produit'] : '';
    $prix_produit = (isset($_POST['prix_produit'])) ? $_POST['prix_produit'] : '';
    $stock_produit = (isset($_POST['stock_produit'])) ? $_POST['stock_produit'] : '';
    $img_produit = (isset($_POST['img_produit'])) ? $_POST['img_produit'] : '';
    $id_scategorie = (isset($_POST['id_scategorie'])) ? $_POST['id_scategorie'] : '';
    $id_categorie = (isset($_POST['id_categorie'])) ? $_POST['id_categorie'] : '';



    $sql = "INSERT INTO produit(design_produit, descrip_produit, prix_produit, stock_produit, img_produit, id_scategorie, id_categorie) VALUES(:design_produit, :descrip_produit, :prix_produit, :stock_produit, :img_produit, :id_scategorie, :id_categorie)";

    $stmt = $db->prepare($sql);

    $stmt->execute(array(':design_produit'=> $design_produit, ':descrip_produit'=> $descrip_produit, ':prix_produit'=> $prix_produit, ':stock_produit'=> $stock_produit, ':img_produit'=> $img_produit, ':id_scategorie'=> $id_scategorie, ':id_categorie'=> $id_categorie));
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
        <div class= "ajout_produit">
            <form method="post" action="admin_ajouter_produit.php">

            <div>
                <label for="design_produit">Designation *</label>
                <input type="text" name="design_produit" id="design_produit" required>
            </div>

            <div>
                <label for="descrip_produit">Description *</label>
                <textarea type="text" name="descrip_produit" id="descrip_produit" required></textarea> 
            </div>



            <div>
                <label for="img_produit">Image *</label>
                <input class="up_img" type="file" name="img_produit" id="img_produit" >
            </div>

            <div>
                <label for="prix_produit">Prix *</label>
                <input type="text" name="prix_produit" id="prix_produit" placeholder = "0.00€" required>
            </div>

            <div>
                <label for="stock_produit">Stock *</label>
                <input type="text" name="stock_produit" id="stock_produit" required>
            </div>
            
            <div>
                <label for="id_categorie">Catégorie *</label>
                <?php 
                    $result2 = $db->prepare("SELECT * FROM categorie");
                    $result2->execute();
                ?>
                <select name="id_categorie">
                <?php while( $row2 = $result2->fetch()){ ?>
                    <option value="<?= $row2['id_categorie']; ?>"><?= $row2['nom_categorie']?></option>
                <?php } ?>
                </select>
            </div>
            <div>
                <label for="id_scategorie"> Sous-catégorie *</label>
                <?php 
                    $result3 = $db->prepare("SELECT * FROM sous_categorie");
                    $result3->execute();
                ?>
                <select name="id_scategorie">
                <?php while( $row3 = $result3->fetch()){ ?>
                    <option value="<?= $row3['id_scategorie']; ?>"><?= $row3['nom_scategorie']?></option>
                <?php } ?>
                </select>
            </div>

                <div>
                    <input type="submit" name="valider" class = "bouton">
                </div>
        </form>
        </div>
		
	</section>
</main>

<footer>
	<?php /*include "footer.php" */?>
</footer>
</body>
</html>