<?php
require_once "connect.php";
$idProd = $_GET['idProd'];
$idc = $_GET['idCat'];


$sql = "SELECT * FROM produit WHERE id_produit = :idProd and id_categorie = :idCat";
$stmt = $db->prepare($sql);
$stmt->bindValue(':idProd', $idProd);
$stmt->bindValue(':idCat', $idc);

$stmt->execute();


while($row = $stmt->fetch(PDO::FETCH_ASSOC)):
    ?>


    <!-- CONTENU -->
    <div class="produit-content clearfix">
        <div class="content-top">
            <div class="produit-left">
                <figure>
                    <img src="images/<?= $row['img_produit'];?>" alt="">

                </figure>
            </div>

            <div class="produit-right">
                <p>
                    <?php
                    echo $row['descrip_produit']; ?>


                </p>



                <p class="prix"><?php
                    echo $row['prix_produit']; ?>€</p>
                <img class="produit-panier" src="img-layout/panier.png" alt="">
                <a href="#" class="button-commander">Commander</a>
            </div>
        </div>
    </div>
<?php endwhile; ?>
