<?php
require_once"connect.php";
$visible = 0;

// on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['connexion'])) {

    if ((isset($_POST['pseudo']) && !empty($_POST['pseudo'])) && (isset($_POST['password']) && !empty($_POST['password']))) {

        $sql = 'SELECT * FROM client WHERE pseudo_client=:login AND password_client=:password ';
        $stmt = $db-> prepare($sql);
        $stmt->bindValue(":login", $_POST['pseudo']);
        $stmt->bindValue(":password", $_POST['password']);
        $stmt->execute();

        $res = $stmt->fetch();
        if ($res == null) {
            echo '<div class="error-login">Vos identifiants sont incorrects !</div>';
        }
        else {
            session_start();
            $_SESSION['id'] = $res['id_client'];
            $_SESSION['pseudo'] = $_POST['pseudo'];
            echo 'OK';
            header('Location:index.php');
            exit();
        }


    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/connexion.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <title>L'Atelier Rétro</title>
    </head>
    <body>
        <!-- HEADER -->
        <header class="clearfix">
            <section class="header">
                <div class="header-left">
                    <h1>
                        <a href="index.php"><img src="img-layout/logo.png" alt="logo"></a>
                    </h1>
                </div>       
            </section>
           
        </header>
        
        <!-- CONTENU -->
        <fieldset class="connexion">
        <form action="<?php $_SERVER['PHP_SELF'] ?> " method="post">
        <div class="pseudo">
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo">
        </div>
        <div class="mot-passe"> 
            <label for="mot-passe">Mot de passe</label>
            <input type="password" name="password">
        </div>

        <a href="" class="mot-passe-oublie">Mot de passe oublié</a>

        
        <input type="submit" name="connexion" value="connexion" class="connect">

        <a href="" class="inscription" >Inscription</a>
        </form>
        </fieldset>

        <!-- FOOTER -->
        <?php include_once("asset/header.php"); ?>
    </body>
</html>
