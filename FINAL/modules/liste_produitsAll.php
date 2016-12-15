<?php 
$visible=0;

// inclusion de la partie qui permet de se connecter a la base de donnee
require_once"connect.php";

?>

<?php
// detection de l'id de la categorie
$id=$_GET['idCat'];

//
if($id == true)
{
    $result = $db->prepare("SELECT * FROM produit WHERE id_categorie = :idcat");
    $result->bindValue(':idcat', $id);
    $result->execute();
}
else
{
 $result = $db->prepare("SELECT * FROM produit");
 $result->execute();
}

?>

<!-- CONTENU -->

<section class="contenu clearfix">
    <div class="right-content">
        <?php while($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="w25">
                <div class="imagetitre">
                    <a href="index.php?idCat=<?= $row['id_categorie']; ?>&prod=1&idProd=<?= $row['id_produit']; ?>">
                        <img src="img-content/<?php echo $row['img_produit']; ?>" alt="">
                        <h2><?php echo $row['design_produit']; ?><br>
                            <?php echo $row['prix_produit']; ?> €</h2>
                    </a>
                </div>
            </div>
            <?php
        endwhile;
        ?>
    </div>
</section>

