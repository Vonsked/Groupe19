<?php

$db = new PDO('mysql:host=localhost;dbname=basev1;charset=utf8mb4', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false,
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>

		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Désignation</th>
					<th>Déscription</th>
					<th>Images</th>
					<th>Prix</th>
					<th>Stock</th>
					<th>Catégorie</th>
					<th>Sous-catégorie</th>
					<th>Modifier</th>
					<th>Supprimer</th>
				</tr>
			</thead>
			<tbody>
				<?php

				$chemin = "img-content/";

				$result = $db->prepare("SELECT * FROM produit");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
					?>
					<tr class="produit">
						<td><?= $row['id_produit']; ?></td>
						<td><?= $row['design_produit']; ?></td>
						<td class="descrip_produit"><?= $row['descrip_produit']; ?></td>
						<!--<td><?= $row['img_produit']; ?></td>-->
						<td class="imgphp"><img src="<?= $chemin. $row['img_produit']; ?>"></td>
						<td><?= $row['prix_produit']; ?> €</td>
						<td><?= $row['stock_produit']; ?></td>
						<td><?= $row['id_categorie']; ?></td>
						<td><?= $row['id_scategorie']; ?></td>


						<td><a href="index.php?mod=1&task=edit&idProd=<?= $row['id_produit']; ?>"> edit </a></td>
						<td><a href="index.php?mod=1&task=drop&idProd=<?= $row['id_produit']; ?>"> suppr </a></td>
					</tr>

					<?php
				}
				?>
			</tbody>
		</table>
		