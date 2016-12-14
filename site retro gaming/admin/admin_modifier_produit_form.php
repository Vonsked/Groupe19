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
		<?php

		$db = new PDO('mysql:host=localhost;dbname=basev2;charset=utf8mb4', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		$id=$_GET['id'];

		$result = $db->prepare("SELECT * FROM produit WHERE id_produit= :userid");
		$result->bindParam(':userid', $id);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
			?>

			<form action="admin_modifier_produit_req.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
				Désignation<br>
				<input type="text" name="design" value="<?php echo $row['design_produit']; ?>" /><br>
				Déscription<br>
				<input type="text" name="descrip" value="<?php echo $row['descrip_produit']; ?>" /><br>
				Images<br>
				<input type="text" name="img" value="<?php echo $row['img_produit']; ?>" /><br>
				Prix<br>
				<input type="text" name="prix" value="<?php echo $row['prix_produit']; ?>" /><br>
				Stock<br>
				<input type="text" name="stock" value="<?php echo $row['stock_produit']; ?>" /><br>
				Catégorie<br>
				<input type="text" name="id_cat" value="<?php echo $row['id_categorie']; ?>" /><br>
				Sous-catégorie<br>
				<input type="text" name="ids_cat" value="<?php echo $row['id_scategorie']; ?>" /><br>
				<input type="submit" value="Enregistrer" />
			</form>

			<!--
			<form method="post" action="formulaire_inscription.php">
				<fieldset>

					<div class="gauche">

						<div>
							<label for="mme">Mme</label><input type="radio" name="civilite_client" id="mme" value="Mme" required>
							<label for="mr">Mr</label><input type="radio" name="civilite_client" id="mr" value="Mr">
						</div>

						<div>
							<label for="nom_client">Nom *</label>
							<input type="text" name="nom_client" id="nom_client" required>
						</div>

						<div>
							<label for="prenom_client">Prenom *</label>
							<input type="text" name="prenom_client" id="prenom_client" required>
						</div>

						<div>
							<label for="adresse_client">Adresse *</label>
							<input type="text" name="adresse_client" id="adresse_client" required>
						</div>

						<div>
							<label for="cp_client">Code postal *</label>
							<input type="text" name="cp_client" maxlength="5" id="cp_client" required>
						</div>
					</div>

					<div class="droite">

						<div>
							<label for="ville_client">Ville *</label>
							<input type="text" name="ville_client" id="ville_client" required>
						</div>

						<div>
							<label for="tel_client">Téléphone *</label>
							<input type="text" name="tel_client" id="tel_client" required>
						</div>

						<div>
							<label for="mail_client">Mail *</label>
							<input type="email" name="mail_client" id="mail_client" required>
						</div>

						<div>
							<label for="pseudo_client">Pseudo *</label>
							<input type="text" name="pseudo_client" id="pseudo_client" required>
						</div>

						<div>
							<label for="password_client">Mot de passe:</label>
							<input type="password" name="password_client" id="password_client" required>
						</div>
					</div>
					<div>
						<input type="submit" name="valider" class = "bouton">
					</div>


				</fieldset>
			</form>
			-->
			<?php
		}
		?>



	</section>
</main>
<!--
<footer>
	<?php /*include "footer.php" */?>
</footer>-->
</body>
</html>