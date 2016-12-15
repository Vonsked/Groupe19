

<!-- PHP -->
<?php

require_once"connect.php";
?>

    <div class="table_cat">
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
                        <td><a href="admin_modifier_produit_form.php?id=<?php echo $row['id_categorie']; ?>"> edit </a></td>
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
                        <td><a href="admin_modifier_produit_form.php?id=<?php echo $row['id_scategorie']; ?>"> edit </a></td>
                        <td><a href="admin_supprimer_produit_req.php?id=<?php echo $row['id_scategorie']; ?>"> suppr </a></td>
                    </tr>

                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
