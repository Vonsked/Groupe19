<?php


require_once"connect.php";
$id=$_GET['idProd'];

		$result = $db->prepare("SELECT * FROM produit WHERE id_produit= :userid");
		$result->bindParam(':userid', $id);
		$result->execute();
		while( $row = $result->fetch()){
			?>

			<form action="modules/admin_modifier_produit_req.php" method="POST">
				<input type="hidden" name="id" value="<?= $id; ?>" />
				Désignation<br>
				<input type="text" name="design" value="<?= $row['design_produit']; ?>" /><br>
				Déscription<br>
				<input type="text" name="descrip" value="<?= $row['descrip_produit']; ?>" /><br>
				Images<br>
				<input type="text" name="img" value="<?= $row['img_produit']; ?>" /><br>
				Prix<br>
				<input type="text" name="prix" value="<?= $row['prix_produit']; ?>" /><br>
				Stock<br>
				<input type="text" name="stock" value="<?= $row['stock_produit']; ?>" /><br>
				Catégorie<br>
				<?php 
                $result2 = $db->prepare("SELECT * FROM categorie");
                $result2->execute();
                ?>
				<select name="id_cat">
                 <?php while( $row2 = $result2->fetch()){
                    ?>
                  <option value="<?= $row2['id_categorie']; ?>"><?= $row2['nom_categorie']?></option>
                  <?php } ?>
                </select>
                
				<input type="text" name="" value="<?= $row['id_categorie']; ?>" /><br>
				Sous-catégorie<br>
				<?php 
                $result3 = $db->prepare("SELECT * FROM sous_categorie");
                $result3->execute();
                    ?>
                <select name="ids_cat">
                 <?php while( $row3 = $result3->fetch()){
                    ?>
                  <option value="<?= $row3['id_scategorie']; ?>"><?= $row3['nom_scategorie']?></option>
                  <?php } ?>
                </select>
				<input type="text" name="" value="<?php echo $row['id_scategorie']; ?>" /><br>
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