<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <title>L'Atelier Rétro</title>
    </head>
    <body>

        <?php include 'asset/header.php'; ?>

        <!-- CONTENU -->
        <main class = "admin_interface">

            <aside>
                <ul>
                    <li><h4>Produits</h4></li>
                    <ul>
                        <li><a href="modules/admin_afficher_produit.php">Afficher / Modifier</a></li>
                        <li><a href="modules/admin_ajouter_produit.php">Ajouter</a></li>
                    </ul>
                    <li><h4>Catégories</h4></li>
                    <ul>
                        <li><a href="modules/admin_afficher_categorie.php">Afficher / Modifier</a></li>
                        <li><a href="modules/admin_ajouter_categories.php">Ajouter</a></li>
                    </ul>
                    <li><h4>Clients</h4></li>
                    <ul>
                        <li><a href="modules/admin_afficher_client.php">Afficher / Supprimer</a></li>
                    </ul>
                    <li><a href="modules/admin_afficher_commande.php"><h4>Commandes</h4></a></li>
                </ul>
            </aside>
            <section>
                <div class="spaceinvaders">
                    <?php
                    if(isset($_GET['mod'])){
                        switch($_GET['mod']){
                            case 1: 
                                if(isset($_GET['task'])){
                                    switch($_GET['task']){
                                        case 'add': 
                                            include_once("modules/ajouter_categorie.php");
                                            break;
                                        case 'edit':
                                            if(isset($_GET['idProd'])){
                                                include_once("./modules/admin_modifier_produit_form.php");
                                            }else{
                                                header('Location: index.php?mod=1');					
                                            }

                                            break;
                                        case 'drop':
                                            if(isset($_GET['idProd'])){
                                                include_once("./modules/admin_supprimer_produit_req.php");
                                            }else{
                                                header('Location: index.php?mod=1');					
                                            }
                                            break;
                                    }
                                }else{
                                    include_once("modules/admin_afficher_produit.php");
                                }
                                break;		
                        }
                    } ?>
                </div>
            </section>
        </main>

        <?php include 'asset/footer.php'; ?>

    </body>
</html>

header('Location: indx.php');