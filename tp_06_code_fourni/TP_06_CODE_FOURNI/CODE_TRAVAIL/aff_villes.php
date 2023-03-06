<?php
    // initialisations et inclusions

    session_start();// TODO 3.7 : il y a quelque chose à faire ici, en premier, pour la gestion de l'authentification

    include_once('auth.php');
    include_once('bd.php');
    exitIfNotAuthenticate();
    // TODO 3.7 : redirection vers la page d'accueil si l'internaute n'est pas authentifié
    
    bd_connexion();// TODO 3.2 : connexion au serveur de bases de données
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 6</title>
        <link rel="stylesheet" media="all" type="text/css" title="Mon Style" href="style.css" />
    </head>
    <body>
        <p>
            Retour à la <a href="main.php">page principale</a><br />
            <a href="deconnexion.php">Déconnexion</a>
        </p>

        <h1>exo 3.2, affichage des villes</h1>

        <?php

            $sql = 'SELECT * FROM tp_villes;';
            $resultat = bd_requete($sql, true);
            foreach($resultat as $ligne) // TODO 3.2 : 
                echo '<li>' . $ligne['nom'] . ' : ' . $ligne['code'] . '</li>' ;// - faire la requête SQL
            // - afficher le résultat dans une table HTML
            $resultat->closeCursor();// - penser à appeler closeCursor()
        ?>

    </body>
</html>
<?php
    bd_deconnexion();// TODO 3.2 : déconnexion du serveur de bases de données
?>

