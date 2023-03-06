<?php
    // initialisations et inclusions

    session_start();// TODO 3.7 : il y a quelque chose à faire ici, en premier, pour la gestion de l'authentification

    include_once('auth.php');
    include_once('bd.php');
    $authendification = false;
    bd_connexion();// TODO 3.7 : connexion au serveur de bases de données (inutile vu le code de vérification du mot de passe)

    // TODO 3.7 :
    
    // - si on reçoit le formulaire de connexion
    // - et si login et mot de passe corrects, mettre l'internaute dans l'état authentifié
    // note : le login est correct si login = "toto" et mot de passe = "tutu"
    //        bien entendu normalement il faudrait interroger la base de données
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 6</title>
        <link rel="stylesheet" media="all" type="text/css" title="Mon Style" href="style.css" />
    </head>
    <body>
        <?php
            // TODO 3.7 : 
            // si formulaire reçu mais login incorrect
            //     afficher un message d'erreur
        ?>

        <?php
            // TODO 3.7 : si l'internaute est authentifié
            if (true)    // TODO 3.7 : à remplacer par le bon test
            {
        ?>
                <h1>menu</h1>

                <ul>
                    <li><a href="aff_villes.php">Afficher les villes</a></li>
                    <li><a href="aff_auteurs.php">Afficher les auteurs</a></li>
                    <li><a href="aff_articles.php">Afficher les articles</a></li>
                    <li><a href="aff_habitants.php">Afficher les habitants d'une ville</a></li>
                    <li><a href="modif_article.php">Modifier un article</a></li>
                    <li><a href="ajout_auteur.php">Ajouter un auteur</a></li>
                    <li><a href="efface_auteur.php">Supprimer un auteur</a></li>
                    <li><a href="deconnexion.php">Déconnexion</a></li>
                </ul>
        <?php
            }
            else
            {
        ?>

                <h1>exo 3.7 : authentification</h1>

                <form action="main.php" method="post">
                <p>
                    <label>login</label>
                    <input type="text" size="80" name="login" placeholder="login" /><br />
                    <label>mot de passe</label>
                    <input type="password" name="passwd" size="80" placeholder="mot de passe" /><br />
                </p>
                <p><input type="submit" value="Envoyer" /></p>
            </form>

        <?php
            }
        ?>

        <h2>POST</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($_POST, true));
            echo '</pre>';
        ?>

        <h2>SESSION</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($_SESSION, true));
            echo '</pre>';
        ?>

    </body>
</html>
<?php
    bd_deconnexion();// TODO 3.7 : déconnexion du serveur de bases de données
?>

