<?php 
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
        <?php include_once("asset/header.php") ?>
        <!-- CONTENU -->
        
            <section>
                <div class="spaceinvaders">
                    <?php
                    if(isset($_GET['cat'])){
                        switch($_GET['cat']){
                            case 1:  include_once("modules/liste_produitsAll.php");
                                            break;   		
                        }
                    }
                    if(isset($_GET['scat'])){
                        switch($_GET['scat']){
                            case 1:  include_once("modules/liste_produits.php");
                                            break;  
                            case 2: 
                                    include_once("modules/liste_produits.php");
                                            break;		
                        }
                    }
                    if(isset($_GET['prod'])){
                        switch($_GET['prod']){
                            case 1:  include_once("modules/produitAll.php");
                                            break;  
                            case 2:  include_once("modules/produit.php");
                                            break;  
                        }
                    } ?>
                </div>
            </section>

        <!-- FOOTER 
        <footer class="clearfix">
            <ul>
                <li class="propos">
                    <h2>A Propos</h2>
                    <p>Arcu es massa vestibulum
                        <br>Arcu es massa vestibulum
                        <br>Arcu es massa vestibulum</p>
                </li>
                <li class="faq">
                    <h2>FAQ</h2>
                    <p>Arcu es massa vestibulum
                        <br>Arcu es massa vestibulum</p>
                </li>
                <li class="prenium">
                    <h2>Prenium</h2>
                    <p>Arcu es massa vestibulum
                        <br>Arcu es massa vestibulum
                        <br>Arcu es massa vestibulum</p>
                </li>
            </ul>
            <div class="social">
                <div class="fb">
                    <img src="img-layout/fb.svg" alt="Facebook">
                </div>
                <div class="twitter">
                    <img src="img-layout/twitter.svg" alt="Twitter">
                </div>
            </div>
        </footer>
        <?php include_once("asset/footer.php") ?>
        -->
        <?php include_once("asset/footer.php") ?>
    </body>
</html>
