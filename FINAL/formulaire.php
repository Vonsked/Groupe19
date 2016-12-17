<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <title>L'Atelier Rétro</title>
</head>
<body>

<!-- HEADER -->
<?php include 'asset/header.php'; ?>

<!-- PHP -->
<?php

require_once "connect.php";

if(isset($_POST['valider'])) {

    $nom_client = (isset($_POST['nom_client'])) ? $_POST['nom_client'] : '';
    $prenom_client = (isset($_POST['prenom_client'])) ? $_POST['prenom_client'] : '';
    $civilite_client = (isset($_POST['civilite_client'])) ? $_POST['civilite_client'] : '';
    $adresse_client = (isset($_POST['adresse_client'])) ? $_POST['adresse_client'] : '';
    $cp_client = (isset($_POST['cp_client'])) ? $_POST['cp_client'] : '';
    $ville_client = (isset($_POST['ville_client'])) ? $_POST['ville_client'] : '';
    $tel_client = (isset($_POST['tel_client'])) ? $_POST['tel_client'] : '';
    $mail_client = (isset($_POST['mail_client'])) ? $_POST['mail_client'] : '';
    $pseudo_client = (isset($_POST['pseudo_client'])) ? $_POST['pseudo_client'] : '';
    $password_client = (isset($_POST['password_client'])) ? $_POST['password_client'] : '';

    /*$hash = crypt($password_client);*/



    $sql = "INSERT INTO client(nom_client, prenom_client, civilite_client, adresse_client, cp_client, ville_client, tel_client, mail_client, pseudo_client, password_client) VALUES(:nom_client, :prenom_client, :civilite_client, :adresse_client, :cp_client, :ville_client, :tel_client, :mail_client, :pseudo_client, :password_client)";

    $stmt = $db->prepare($sql);

    $stmt->execute(array(':nom_client'=> $nom_client, ':prenom_client' => $prenom_client, ':civilite_client' => $civilite_client, ':adresse_client' => $adresse_client, ':cp_client' => $cp_client, ':ville_client' => $ville_client, ':tel_client' => $tel_client, ':mail_client' => $mail_client, ':pseudo_client' => $pseudo_client, ':password_client' => $password_client));
}
?>

<!-- CONTENU -->

<section class = "formulaire_client">
    <form method="post" action="formulaire.php">
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
</section>


<?php include 'asset/footer.php'; ?>

</body>
</html>