<?php

$db = new PDO('mysql:host=localhost;dbname=basev1;charset=utf8mb4', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false,
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>


<main class = "admin_interface">
	<aside>
		<ul>
			<li><a href="admin_afficher_produit.php"><h4>Produits</h4></a></li>
			<li><a href="admin_afficher_categorie.php"><h4>Catégories</h4></a></li>
			<li><a href="admin_afficher_client.php"><h4>Clients</h4></a></li>
			<li><a href="admin_afficher_commande.php"><h4>Commandes</h4></a></li>
		</ul>
	</aside>


	<section>
		<?php

		$db = new PDO('mysql:host=localhost;dbname=basev1;charset=utf8mb4', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		$id=$_GET['id'];

		$result = $db->prepare("SELECT * FROM client WHERE id_client= :userid");
		$result->bindParam(':userid', $id);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
			?>


			<form action="admin_modifier_client_req.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
				Nom<br>
				<input type="text" name="nom" value="<?php echo $row['nom_client']; ?>" /><br>
				Prenom<br>
				<input type="text" name="prenom" value="<?php echo $row['prenom_client']; ?>" /><br>
				Civilité<br>
				<input type="text" name="civilite" value="<?php echo $row['civilite_client']; ?>" /><br>
				Adresse<br>
				<input type="text" name="adresse" value="<?php echo $row['adresse_client']; ?>" /><br>
				Code postal<br>
				<input type="text" name="cp" value="<?php echo $row['cp_client']; ?>" /><br>
				Ville<br>
				<input type="text" name="ville" value="<?php echo $row['ville_client']; ?>" /><br>
				Téléphone<br>
				<input type="text" name="telephone" value="<?php echo $row['tel_client']; ?>" /><br>
				Mail<br>
				<input type="text" name="mail" value="<?php echo $row['mail_client']; ?>" /><br>
				Pseudo<br>
				<input type="text" name="pseudo" value="<?php echo $row['pseudo_client']; ?>" /><br>
				Mot de passe<br>
				<input type="text" name="mdp" value="<?php echo $row['password_client']; ?>" /><br>
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