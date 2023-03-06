<?php
    // initialisations et inclusions

    session_start();// TODO 3.7 : il y a quelque chose à faire ici, en premier, pour la gestion de l'authentification

    include_once('auth.php');
    include_once('bd.php');

    exitIfNotAuthenticate();
    bd_connexion();     // TODO 3.7 : redirection vers la page d'accueil si l'internaute n'est pas authentifié
    // TODO 3.4 : connexion au serveur de bases de données
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

        <h1>exo 3.4, modification d'un article</h1>

        <?php
        /*--------------------------------------------------------------------*
         * choix de l'article à modifier
         *--------------------------------------------------------------------*/
        ?>
        <h2>Choix de l'article</h2>

        <!-- on affiche systématiquement le premier formulaire -->
        <form action="modif_article.php" method="post">
            <p>
            <!-- TODO 3.4 : champ caché pour identifier le permier formulaire -->
            <input type ="hidden" name="operation" value="choix article" />
            <label>Choix de l'article</label>
            <select name="id" size="1">
                <?php
                    $sql = 'SELECT id, titre FROM tp_articles';
                    $resultat = bd_requete($sql,true);
                    foreach ($resultat as $ligne)
                        echo '<option value="' . $ligne['id'] . '">' . $ligne['titre'] . '</option>';

                    $resultat->closeCursor();    // TODO 3.4 :
                    // - faire la requête SQL
                    // - créer les éléments de la liste déroulante
                    // - penser à appeler closeCursor()
                 ?>
            </select>
            </p>

            <p><input type="submit" value="Valider" /></p>
        </form>

        <?php
            /*--------------------------------------------------------------------*
             * aucun formulaire reçu
             *--------------------------------------------------------------------*/
           
            // TODO 3.4 : si on ne reçoit pas de formulaire
            if (empty($_POST))   // TODO 3.4 : à remplacer par le bon test
                echo '<p>Choisissez un article</p>';

            /*--------------------------------------------------------------------*
             * réception du formulaire "choix de l'article"
             *--------------------------------------------------------------------*/
            // TODO 3.4 : si on reçoit le premier formulaire
            elseif (isset($_POST['operation']) && ($_POST['operation'] === "choix article"))   // TODO 3.4 : à remplacer par le bon test
            {
                echo '<h2> Modifiez votre article </h2>';
                // notons la faille de sécurité si l'on ne filtre pas le contenu d'un formulaire
                $tmp = $_POST['id'];    // TODO 3.4 : à remplacer par l'id de l'article choisi dans le premier formulaire
                $sql = 'SELECT * FROM tp_articles WHERE id = ' . $tmp;
                $resultat = bd_requete($sql,true);
           
                $ligne = $resultat->fetch(PDO::FETCH_ASSOC); // TODO 3.4 : faire la requête SQL
               
                // TODO 3.4 : si l'article n'existe pas
                if ($ligne == false) // TODO 3.4 : à remplacer par le bon test
                    echo '<p>L\'article n\'existe pas !</p>';
                else
                {
                    echo '<input type ="hidden" name="operation" value="choix auteur" /> ';
                    echo '<form action="modif_article.php" method="post">';
                    echo '<p>';
                    // TODO 3.4 : champ caché pour identifier le second formulaire
                    echo '<input type ="hidden" name="changement" value="change article" />';
                    echo '   <label>id</label> ';
                    $tmp = $ligne['id'];   // TODO 3.4 : à remplacer par "id article"
                    echo '   <input type="text" name="id" size="80" readonly="readonly" ' .
                         '          value="' . $tmp . '" /><br />';

                    echo '   <label>id_auteur</label> ';
                    // il faudrait plutôt une liste déroulante avec pré-sélection
                    echo '<select name="id_auteur" size="1">';
                        
                    $sql = 'SELECT id, titre FROM tp_articles';
                    $resultat = bd_requete($sql,true);
                    foreach ($resultat as $l)
                        echo '<option value="' . $l['id'] . '">' . $l['id'] . '</option>';

                    $resultat->closeCursor();    // TODO 3.4 :
                    // - faire la requête SQL
                    // - créer les éléments de la liste déroulante
                    // - penser à appeler closeCursor()
        
                    echo '</select><br />';
                    
                    

                    echo '   <label>titre</label> ';
                    $tmp = $ligne['titre'];   // TODO 3.4 : à remplacer par "titre article"
                    echo '   <input type="text" name="titre" value="' . $tmp . '" /><br />';

                    echo '   <label>contenu</label> ';
                    $tmp = $ligne['contenu'];   // TODO 3.4 : à remplacer par "contenu article"
                    echo '   <textarea name="contenu" rows="5" cols="80">' . $tmp . '</textarea><br />';

                    echo '   <label>date</label> ';
                    $tmp = $ligne['date'];   // TODO 3.4 : à remplacer par "date article"
                    echo '   <input type="text" name="date" value="' . $tmp . '" /><br />';

                    echo '   <input type="submit" value="Envoyer" />';
                    echo '</p>';
                    echo '</form>';
                }
                $resultat->closeCursor();  // TODO 3.4 : appeler closeCursor sur le résultat
            }

            /*--------------------------------------------------------------------*
             * réception du formulaire "modification de l'article"
             *--------------------------------------------------------------------*/
            // TODO 3.4 : sinon si on reçoit le premier formulaire
            elseif (isset($_POST['changement']) && ($_POST['changement'] === "change article"))   // TODO 3.4 : à remplacer par le bon test
            {
                // TODO 3.4 : si on a bien reçu un formulaire complet
                if (!isset($_POST['id']) || !isset($_POST['id_auteur']) || !isset($_POST['titre']) || !isset($_POST['contenu']) || !isset($_POST['date'])  )  // TODO 3.4 : à remplacer par le bon test
                    echo '<p>Il manque des valeurs</p>';
                else
                {
                    $tmp = $_POST['id'];   // TODO 3.4 : à remplacer par l'id de l'article à modifier
                    $sql = 'SELECT id FROM tp_articles WHERE id = ' . $tmp;
                    $resultat = bd_requete($sql,true);
                    $ligne = $resultat->fetch(PDO::FETCH_ASSOC); // TODO 3.4 : faire la requête SQL
                    // TODO 3.4 : si l'article n'existe pas
                    
                    if ($ligne == false)  // TODO 3.4 : à remplacer par le bon test
                        echo '<p>Article inexistant !</p>';
                    else
                    {
                        $article_id = $_POST['id'];          // TODO 3.4 : à remplacer par l'id de l'article à modifier
                        $article_id_auteur = $_POST['id_auteur'];   // TODO 3.4 : à remplacer par l'id de l'auteur
                        $article_titre = $_POST['titre'];       // TODO 3.4 : à remplacer par le titre
                        $article_contenu = $_POST['contenu'];     // TODO 3.4 : à remplacer par le contenu
                        $article_date = $_POST['date'];        // TODO 3.4 : à remplacer par la date
                        $sql = 'UPDATE tp_articles SET '
                                            . 'id_auteur = ' . bd_quote($article_id_auteur) . ', '
                                            . 'titre     = ' . bd_quote($article_titre) . ', '
                                            . 'contenu   = ' . bd_quote($article_contenu) . ', '
                                            . 'date      = ' . bd_quote($article_date) . ' '
                                        . 'WHERE tp_articles.id = ' . bd_quote($article_id);
                        $resultat = bd_requete($sql,true);// TODO 3.4 : faire la requête SQL (une requête préparée aurait été plus adéquate)
                    // TODO 3.4 : si tout s'est bien passé
                        if ($resultat != false) // TODO 3.4 : à remplacer par le bon test
                        {
                            echo '<p>La mise à jour a réussi !</p>';
                            $resultat->closeCursor();
                            // TODO 3.4 : appeler closeCursor sur le résultat
                        }
                        else
                            echo '<p>La mise à jour a échoué !!!</p>';
                    }
                }
            }

            else
            {
                echo '<p>Problème sur le formulaire reçu</p>';
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
bd_deconnexion();// TODO 3.4 : déconnexion du serveur de bases de données
?>

