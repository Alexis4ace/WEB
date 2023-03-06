<?php
    // initialisations et inclusions

    session_start();// TODO 3.7 : il y a quelque chose à faire ici, en premier, pour la gestion de l'authentification

    include_once('auth.php');
    include_once('bd.php');

    exitIfNotAuthenticate();
    bd_connexion();// TODO 3.7 : redirection vers la page d'accueil si l'internaute n'est pas authentifié
    // TODO 3.6 : connexion au serveur de bases de données
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

        <h1>exo 3.6, suppression d'un auteur</h1>

        <h2>Choisissez votre auteur</h2>

        <?php
            // attention, le formulaire se fabrique avant (peut-être) un effacement
            // dans la seconde partie du script, et donc la liste déroulante
            // va peut-être contenir une entrée de trop
        ?>
        <form action="efface_auteur.php" method="post">
            <p>
                Si vous venez de demander la suppression d'un auteur, il
                apparait tout de même (à traiter normalement bien sûr)<br />
                <label>Choix de l'auteur</label>
                <select name="id" size="1">
                    <?php
                        // note : normalement il ne faudrait sélectionner que les auteurs qui n'ont pas d'article
                        $sql = 'SELECT id, nom FROM tp_auteurs';
                        // TODO 3.6 :
                        $resultat = bd_requete($sql,true);// - faire la requête SQL
                        foreach ($resultat as $ligne) // - créer les éléments de la liste déroulante
                            echo '<option value="' . $ligne['id'] . '">' . $ligne['nom'] . '</option>';
                        
                            $resultat->closeCursor();
                            // - appeler closeCursor sur le résultat
                    ?>
                </select>
            </p>
            <p><input type="submit" value="Valider" /></p>
        </form>

        <?php
            // TODO 3.6 : si on reçoit un formulaire
            if (!empty($_POST))   // TODO 3.6 : à remplacer par le bon test
            {
                echo '<h2> Résultat de la suppression </h2>';
                // TODO 3.6 : si le formulaire n'est pas complet
                if (!isset($_POST['id']))   // TODO 3.6 : à remplacer par le bon test
                    echo '<p>Impossible de déterminer qui doit être supprimé !</p>';
                else
                {
                    $sql = 'SELECT * FROM tp_auteurs WHERE id = :id';
                    $resultat = bd_requete_preparee($sql, ['id' => $_POST['id']], false);        // TODO 3.6 : exécuter la requête préparée
                    
                    // TODO 3.6 : s'il n'y a pas de résultat
                    if ($resultat == false )   // TODO 3.6 : à remplacer par le bon test
                    {
                        echo '<p>L\'auteur n\'existe pas !</p>';
                        $resultat->closeCursor();
                        // TODO 3.6 : appeler closeCursor
                    }
                    else
                    {
                        // TODO 3.6 : appeler closeCursor
                        /*
                         * une vérification manuelle, mais on peut ne pas la faire et regarder
                         * si le DELETE échoue, ce qui signifie certainement qu'une contrainte
                         * d'intégrité est violée.
                         * L'avantage de ne pas faire de vérification manuelle est double
                         * - plus simple puisqu'il n'y a rien à faire
                         * - si de nouvelles tables sont rajoutées, il n'y a aucun code à compléter
                         * L'inconvénient est qu'il est choquant de lancer une requête qui se
                         * solde par une erreur.
                         */
                        $sql = 'SELECT id FROM tp_articles WHERE id_auteur = :id_auteur';
                        // TODO 3.6 : exécuter la requête préparée
                        // TODO 3.6 : s'il y au moins un résultat
                        if (true)   // TODO 3.6 : à remplacer par le bon test
                            echo '<p>L\'auteur possède au moins un article, la suppression va échouer</p>';
                        // TODO 3.6 : appeler closeCursor

                        // normalement le code ci-dessous devrait être dans un else, mais on veut
                        // voir le comportement lorsqu'une suppression échoue
                        $sql = 'DELETE FROM tp_auteurs WHERE id = :id';
                        // TODO 3.6 : exécuter la requête préparée
                        // TODO 3.6 : si la requête réussie
                        if (false)   // TODO 3.6 : à remplacer par le bon test
                        {
                            echo '<p>La suppression a réussi !</p>';
                            // TODO 3.6 : appeler closeCursor
                        }
                        else
                            echo '<p>La suppression a échoué !!!</p>';
                    }
                }
            }
            else{echo '<h2>veuillez envoyer un formulaire</h2>';}
        ?>

        <h2>POST</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($_POST, true));
            echo '</pre>';
        ?>

    </body>
</html>
<?php
    // TODO 3.6 : déconnexion du serveur de bases de données
?>

