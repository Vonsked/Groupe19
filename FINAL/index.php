<?php

// Demarage de la session utilisateur
session_start();
if (isset($_SESSION['pseudo'])) {
    $visible=1;
}else{
    $visible=0;
}
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

        <!-- header -->
        <?php include_once("asset/header.php") ?>

        <!-- CONTENU -->
        
            <section>
                <?php
                if(!isset($_GET['cat'])&&!isset($_GET['scat'])&&!isset($_GET['prod'])){
                    ?>
                    <div class="spaceinvaders">
                </div>

                <?php
                }
                ?>

                    <?php
                    //detection de la methode get pour inclure et afficher liste des produit des cattegorie
                    if(isset($_GET['cat'])){
                        switch($_GET['cat']){
                            case 1:  include_once("modules/liste_produitsAll.php");
                                            break;   		
                        }
                    }
                    //detection de la methode get pour inclure et afficher liste des produit des sous - cattegorie
                    if(isset($_GET['scat'])){
                        switch($_GET['scat']){
                            case 1:  include_once("modules/liste_produits.php");
                                            break;  
                            case 2: 
                                    include_once("modules/liste_produits.php");
                                            break;		
                        }
                    }
                    //detection de la methode get pour inclure et afficher un produit produit des sous - cattegorie et categorie
                    if(isset($_GET['prod'])){
                        switch($_GET['prod']){
                            case 1:  include_once("modules/produitAll.php");
                                            break;  
                            case 2:  include_once("modules/produit.php");
                                            break;  
                        }
                    } ?>

            </section>

        <!-- footer -->
        <?php include_once("asset/footer.php") ?>

    </body>
</html>
