<?php
    // initialisations et inclusions

    session_start();// TODO 3.7 : il y a quelque chose à faire ici, en premier, pour la gestion de l'authentification

    include_once('auth.php');
    include_once('bd.php');

    exitIfNotAuthenticate(); // TODO 3.7 : redirection vers la page d'accueil si l'internaute n'est pas authentifié
    bd_connexion();// TODO 3.5 : connexion au serveur de bases de données
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

        <h1>exo 3.5, insertion d'un auteur</h1>

        <h2>Saisissez votre auteur</h2>

        <form action="ajout_auteur.php" method="post">
            <p>
                <label>id</label>
                <input type="text" size="80" readonly="readonly"
                    value="== auto-increment ==" /><br />
                <label>nom</label>
                <input type="text" name="nom" size="80" value="" /><br />
                <label>ville</label>
                <select name="id_ville">
                    <option value="">---</option>       <!-- si l'auteur n'est pas lié à une ville -->
                    <?php
                        $sql = 'SELECT * FROM tp_villes';
                        // TODO 3.5 :
                        $resultat = bd_requete($sql, true);// - faire la requête SQL
                    foreach ($resultat as $ligne) 
                        echo '<option value="' . $ligne['id'] . '">' . $ligne['nom'] . '</option>';
                    $resultat->closeCursor();
                        // - créer les éléments de la liste déroulante
                        // - appeler closeCursor sur le résultat
                    ?>
                </select>
            </p>
            <p><input type="submit" value="Envoyer" /></p>
        </form>

        <?php
            // TODO 3.5 : si on reçoit le formulaire
            if (isset($_POST))   // TODO 3.5 : à remplacer par le bon test
            {
                // TODO 3.5 : si on a reçu un formulaire incomplet
                if ( !isset($_POST['id_ville']) || !isset($_POST['nom']))   // TODO 3.5 : à remplacer par le bon test
                    echo '<p>Il manque des valeurs</p>';
                // TODO 3.5 : sinon si le nom est vide
                elseif (!isset($_POST['nom']))   // TODO 3.5 : à remplacer par le bon test
                    echo '<p>Le nom est vide</p>';
                else
                {
                    $sql = 'INSERT INTO tp_auteurs (nom, id_ville)' .
                           ' VALUES (:nom, :id_ville)';
                    //bd_requete_preparee($sql, $_POST['id'], );// TODO 3.5 : exécuter la requête préparée en gérant le cas où il n'y a pas de ville
                if (empty($_POST['id_ville']))
                    $id_ville = null;
                else    
                    $id_ville = $_POST['id_ville'];
                    
                $resultat = bd_requete_preparee($sql, ['nom' => $_POST['nom'], 'id_ville' => $id_ville], false);
                
                // TODO 3.5 : vérifier que l'insertion a réussi
                if ($resultat != false)   // TODO 3.5 : à remplacer par le bon test
                {
                    echo '<p>Insertion réussie !</p>';
                    $resultat->closeCursor();
                    // TODO 3.5 : appeler closeCursor
                }
                else
                    echo '<p>Insertion échouée !!!</p>';
            }
            }
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
    bd_deconnexion();// TODO 3.5 : déconnexion du serveur de bases de données
?>

