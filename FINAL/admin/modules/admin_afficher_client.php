<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">


	<title>Interface admin</title>
</head>
<body>
<header>
	<?php include "../asset/header.php" ?>
</header>

<!-- PHP -->
<?php

require_once"../connect.php";
?>


<main class = "admin_interface">


	<aside>
		<ul>
			<li><h4>Produits</h4></li>
			<ul>
				<li><a href="../modules/admin_afficher_produit.php">Afficher / Modifier</a></li>
				<li><a href="../modules/admin_ajouter_produit.php">Ajouter</a></li>
			</ul>
			<li><h4>Catégories</h4></li>
			<ul>
				<li><a href="../modules/admin_afficher_categorie.php">Afficher / Modifier</a></li>
				<li><a href="../modules/admin_ajouter_categories.php">Ajouter</a></li>
			</ul>
			<li><h4>Clients</h4></li>
			<ul>
				<li><a href="../modules/admin_afficher_client.php">Afficher / Supprimer</a></li>
			</ul>
			<li><a href="../modules/admin_afficher_commande.php"><h4>Commandes</h4></a></li>
		</ul>
	</aside>


	<section>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nom</th>
					<th>Prenom</th>
					<th>Civilité</th>
					<th>Adresse</th>
					<th>Code postal</th>
					<th>Ville</th>
					<th>Téléphone</th>
					<th>Mail</th>
					<th>Pseudo</th>
					<th>Mot de passe</th>
					<!--<th>Modifier</th>-->
					<th>Supprimer</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$result = $db->prepare("SELECT * FROM client");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
					?>
					<tr class="produit">
						<td><?php echo $row['id_client']; ?></td>
						<td><?php echo $row['nom_client']; ?></td>
						<td><?php echo $row['prenom_client']; ?></td>
						<td><?php echo $row['civilite_client']; ?></td>
						<td><?php echo $row['adresse_client']; ?></td>
						<td><?php echo $row['cp_client']; ?></td>
						<td><?php echo $row['ville_client']; ?></td>
						<td><?php echo $row['tel_client']; ?></td>
						<td><?php echo $row['mail_client']; ?></td>
						<td><?php echo $row['pseudo_client']; ?></td>
						<td><?php echo $row['password_client']; ?></td>

						<!--<td><a href="admin_modifier_client_form.php?id=<?php echo $row['id_client']; ?>"> edit </a></td>-->
						<td><a href="admin_supprimer_client_req.php?id=<?php echo $row['id_client']; ?>"> suppr </a></td>
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