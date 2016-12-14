<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">


	<title>Interface admin</title>
</head>
<body>
<header>
	<?php include "header.php" ?>
</header>

<!-- PHP -->
<?php

$db = new PDO('mysql:host=localhost;dbname=basev2;charset=utf8mb4', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false,
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>


<main class = "admin_interface">
	<aside>
		<ul>
			<li><h4>Produits</h4></li>
				<ul>
					<li><a href="admin_afficher_produit.php">Afficher / Modifier</a></li>
					<li>Ajouter</li>
				</ul>
			<li><h4>Catégories</h4></li>
				<ul>
					<li><a href="admin_afficher_categorie.php">Afficher / Modifier</a></li>
					<li>Ajouter</li>
				</ul>
			<li><h4>Clients</h4></li>
				<ul>
					<li><a href="admin_afficher_client.php">Afficher / Supprimer</a></li>
				</ul>
			<li><a href="admin_afficher_commande.php"><h4>Commandes</h4></a></li>
		</ul>
	</aside>


	<section>
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
						<td><?php echo $row['id_produit']; ?></td>
						<td><?php echo $row['design_produit']; ?></td>
						<td class="descrip_produit"><?php echo $row['descrip_produit']; ?></td>
						<!--<td><?php echo $row['img_produit']; ?></td>-->
						<td class="imgphp"><img src="<?php echo $chemin. $row['img_produit']; ?>"></td>
						<td><?php echo $row['prix_produit']; ?> €</td>
						<td><?php echo $row['stock_produit']; ?></td>
						<td><?php echo $row['id_categorie']; ?></td>
						<td><?php echo $row['id_scategorie']; ?></td>


						<td><a href="admin_modifier_produit_form.php?id=<?php echo $row['id_produit']; ?>"> edit </a></td>
						<td><a href="admin_supprimer_produit_req.php?id=<?php echo $row['id_produit']; ?>"> suppr </a></td>
					</tr>

					<?php
				}
				?>
			</tbody>
		</table>
		
	</section>
</main>
<!--
<footer>
	<?php /*include "footer.php" */?>
</footer>-->
</body>
</html>