<?php
    // initialisations et inclusions

    session_start();// TODO 3.7 : il y a quelque chose à faire ici, en premier, pour la gestion de l'authentification

    include_once('auth.php');
    include_once('bd.php');

    exitIfNotAuthenticate();// TODO 3.7 : redirection vers la page d'accueil si l'internaute n'est pas authentifié
    bd_connexion();// TODO 3.3 : connexion au serveur de bases de données
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

        <h1>exo 3.3, affichage des habitants</h1>

        <h2>Choix de la ville</h2>

        <form method="post" action="aff_habitants.php">
            <p>
                Quelle ville :
                <select name="ville">
                    <?php
                        $sql = 'SELECT * FROM tp_villes';
                        $resultat = bd_requete($sql, true);

                    foreach ($resultat as $ligne)
                        echo '<option value="' . $ligne['id'] . '">' . $ligne['nom'] . '</option>';
                    
                    $resultat->closeCursor();
                        // TODO 3.3 :
                        // - faire la requête SQL
                        // - créer les éléments de la liste déroulante
                        // - penser à appeler closeCursor()
                    ?>
                </select>
                <input type="submit" value="go"/>
            </p>
        </form>


        <h2>Liste des habitants</h2>

        <?php
            // TODO 3.3 : s'il n'y a pas de formulaire
            if (empty($_POST))      // TODO 3.3 : à remplacer par le bon test
                echo '<p>Choisissez une ville</p>';
            else
            {
                $sql = 'SELECT tp_villes.nom FROM tp_villes WHERE tp_villes.id = :id';
                $resultat = bd_requete_preparee($sql,['id' => $_POST['ville'] ],true);    // TODO 3.3 : exécuter la requête préparée avec l'id reçue du formulaire
                $ligne = $resultat->fetch(PDO::FETCH_ASSOC);// TODO 3.3 : s'il n'y a pas de résultat
                if ($ligne == false)     // TODO 3.3 : à remplacer par le bon test
                {
                    $resultat->closeCursor();// TODO 3.3 :  penser à appeler closeCursor()
                    echo '<p>Ville inconnue</p>';
                }
                else
                {
                    
                    $resultat->closeCursor();// TODO 3.3 : penser à appeler closeCursor()
                    $sql = 'SELECT tp_auteurs.nom FROM tp_auteurs WHERE tp_auteurs.id_ville = :id_ville';
                    $resultat = bd_requete_preparee($sql,['id_ville' => $_POST['ville']], true);// TODO 3.3 : exécuter la requête préparée avec l'id reçue du formulaire
                    echo '<ul>';
                    echo '<h1>' . $ligne['nom'] . '</h1>';
                        foreach($resultat as $ligne)// TODO 3.3 : afficher les habitants dans des items <li></li>
                        echo '<li>'.$ligne['nom'].'</li>';
                        echo '</ul>';
                    $resultat->closeCursor();// TODO 3.3 : penser à appeler closeCursor()
                }
            }
        ?>

    </body>
</html>
<?php
    bd_deconnexion();// TODO 3.3 : déconnexion du serveur de bases de données
?>

