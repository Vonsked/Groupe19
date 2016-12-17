<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <title>L'Atelier Rétro</title>
    </head>
    <body>

    <?php
    include_once ("asset/header.php");
    ?>


        <!-- CONTENU -->
        <fieldset>

            <div class="gauche">

                <div>
                    <label for="civilite">Civilité</label>
                    <input type="text" id="civilite" name="civilite">
                </div>

                <div>
                    <label for="nom">Nom *</label>
                    <input type="text" id="nom" name="nom" placeholder=" Vote nom" required>
                </div>

                <div>
                    <label for="prenom">Prénom *</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Votre prenom" required>
                </div>

                <div>
                    <label for="adresse">Adresse</label>
                    <input type="text" id="adresse" name="adresse" placeholder="Votre Adresse" required>
                </div>

                <div>
                    <label for="code-postal">Code Postal</label>
                    <input type="text" id="code-postal" name="code-postal" maxlength="5" placeholder="Taper votre code" required>
                </div>
            </div>

            <div class="droite">

                <div>
                    <label for="ville">Ville</label>
                    <input type="text" id="ville" name="ville">
                </div>

                <div>
                    <label for="telephone">Téléphone</label>
                    <input type="text" id="telephone" name="telephone">
                </div>

                <div>
                    <label for="mail">Mail</label>
                    <input type="email" id="mail" name="mail">
                </div>

                <div>
                    <label for="pseudo">Pseudo</label>
                    <input type="text" id="pseudo" name="pseudo">
                </div>

                <div>
                    <label for="password">Mot de passe</label>
                    <input type="password" id="motdepasse" name="motdepasse" maxlength="10">
                </div>
            </div>

            <button>Entrer</button>

        </fieldset>

        <?php
        include_once ("asset/footer.php");
        ?>
    </body>
</html>
