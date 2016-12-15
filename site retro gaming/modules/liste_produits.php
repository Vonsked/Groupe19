<?php 
$visible=0;

$db = new PDO('mysql:host=localhost;dbname=basev1;charset=utf8mb4', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

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
    <div class="left-content">
        <form method="post" action="">
            <p>
                <label for="pays">Prix</label><br/>
                <select name="prix" id="prix">
                    <option value="tous">Tous les produits</option>
                    <option value="100">+ de 100 euros</option>
                    <option value="50-100">Entre 50 et 100 euros</option>
                    <option value="50">- de 50 euros</option>
                </select>
            </p>
        </form>
    </div>
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

