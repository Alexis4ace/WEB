<?php
   // TODO : créer/récupérer la session
   $sessionOk = session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 5</title>
    </head>
    <body>

        <h1>exo 4.2, deuxième page</h1>

        <p>
            <a href="4.2_1.php">cliquer ici</a> pour revenir à la première page.
        </p>

        <h2>Actions</h2>

        <?php
            function afficheSession() // pour l'action 3
            {
                echo "<p>";
                if (! isset($_SESSION))
                    echo '$_SESSION n\'existe pas.<br />';
                else
                {
                    if (isset($_SESSION['nom']))
                        echo '$_SESSION[\'nom\'] vaut ' . $_SESSION['nom'] . '<br />';
                    else
                        echo '$_SESSION[\'nom\'] n\'existe pas.<br />';
                    if (isset($_SESSION['age']))
                        echo '$_SESSION[\'age\'] vaut ' . $_SESSION['age'] . '<br />';
                    else
                        echo '$_SESSION[\'age\'] n\'existe pas.<br />';
                }

                echo "Affichage brut de SESSION";
                echo "</p>";
                echo "<pre>" . htmlspecialchars(print_r($_SESSION, true)) . "</pre>";
            }

            if (! $sessionOk)
            {
                echo '<p>Echec de la session</p>';
                exit("");
            }

            // TODO
            // vérifier que la variable GET nommée 'action' :
            // - existe (fonction isset)
            // - est un nombre (fonction is_numeric)
            // - est comprise entre 1 et 5
            // selon valeur de action :
            // 1: modifier les cases 'nom' et 'age' de la session
            // 2: modifier les cases 'nom' et 'age' de la session avec d'autres valeurs
            // 3: afficher les deux cases de la session si elles existent
            // 4: détruire (fonction unset) la case 'nom' de la session
            // 5: détruire la session (fonction session_destroy)
            if (! isset($_GET['action']))
                echo '<p>Il n\'y a pas d\'identificateur "action" en paramètre</p>';
            elseif (! is_numeric($_GET['action']))
                echo '<p>L\'identificateur n\'est pas un nombre</p>';
            elseif(($_GET['action'] < 1) || ($_GET['action'] > 5))
                echo '<p>L\'identificateur n\'est pas un nombre dans le bon intervalle</p>';
            else
            {
                switch($_GET['action'])
                {
                    case 1:
                        $_SESSION['nom'] = "nom un";
                        $_SESSION['age'] = 11;
                        break;
                    case 2:
                        $_SESSION['nom'] = "nom deux";
                        $_SESSION['age'] = 22;
                        break;
                    case 3:
                        afficheSession();
                        break;
                    case 4:
                        unset($_SESSION['nom']);
                        break;
                    case 5:
                        $ok = session_destroy();
                        if (! $ok)
                            echo '<p>problème de destruction de session</p>';
                        break;
                    default:
                        echo '<p>Grave problème, on ne devrait pas arriver dans ce code</p>';
                }
            }
        ?>

        <h2>SESSION</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($_SESSION, true));
            echo '</pre>';
        ?>

        <h2>COOKIE</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($_COOKIE, true));
            echo '</pre>';
        ?>

    </body>
</html>
