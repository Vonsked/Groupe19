<?php 
$visible=0;

require_once"connect.php";
?>

<?php
$id = $_GET['idCat'];
$ids = $_GET['idsCat'];

if($id == true)
{
    $result = $db->prepare("SELECT * FROM produit WHERE id_categorie = :idCat and id_scategorie = :idsCat");
    $result->bindValue(':idCat', $id);
    $result->bindValue(':idsCat', $ids);
    $result->execute();
}


?>

<!-- CONTENU -->

<section class="contenu clearfix">
    <div class="right-content">
        <?php while($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="w25">
                <div class="imagetitre">
                    <a href="index.php?idCat=<?= $row['id_categorie']; ?>&idsCat=<?= $row['id_scategorie']; ?>&idProd=<?= $row['id_produit']; ?>&prod=1">
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

