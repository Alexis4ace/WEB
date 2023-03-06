<?php
    // pas de session_start dans cet exercice

    // Attention : la création de cookie doit se faire ici et surtout ne pas mettre
    // le moindre espace avant la balise php
    // Remarque : c'était vrai à une certaine époque et maintenant c'est plus permissif ;
    //            cependant la règle est de faire la modification des cookies avant
    //            l'envoi de l'entête (bref avant le doctype)

    // au cas où le php.ini n'aurait pas mis les bonnes valeurs
    ini_set("display_errors", "on");
    ini_set("expose_php", "on");
    ini_set("error_reporting", E_ALL);

    // stcoker les affichages à faire dans les balises <boy></body>
    $numActionOk = true;
    $numActionMsg = "";
    $actionOk = false;
    $actionMsg = "";

    // TODO
    // - vérifier que le paramètre GET 'action' existe et est un nombre entre 1 et 5
    if (! isset($_GET['action']))
    {
        $numActionOk = false;
        $numActionMsg = '<p>Il n\'y a pas de numéro d\'action en paramètre</p>';
    }
    elseif (! is_numeric($_GET['action']))
    {
        $numActionOk = false;
        $numActionMsg = '<p>Le numéro d\'action n\'est pas un nombre</p>';
    }
    elseif(($_GET['action'] < 1) || ($_GET['action'] > 5))
    {
        $numActionOk = false;
        $numActionMsg = '<p>Le numéro d\'action n\'est pas un nombre dans le bon intervalle</p>';
    }
    else
    {
        // TODO
        // en fonction de la valeur de 'action'
        // - faire les modifications de cookie nécessaires
        // - mais aucun affichage ici (jamais hors des balises <body></body>)
        switch($_GET['action'])
        {
            case 1:
                if (! isset($_COOKIE['compteur']))
                   $actionOk = setcookie('compteur', 0, time()+3600*24);
                else
                   $actionOk = setcookie('compteur', $_COOKIE['compteur'] + 1, time()+3600*24);
                if (! $actionOk)
                   $actionMsg = 'set cookie compteur';
                break;
            case 2:
                $actionOk1 = setcookie('nombres[un]', 'one', 0);
                $actionOk2 = setcookie('nombres[deux]', 'two', 0);
                $actionOk3 = setcookie('nombres[trois]', 'three', 0);
                $actionOk = $actionOk1 && $actionOk2 && $actionOk3;
                if (! $actionOk)
                   $actionMsg = 'set cookie nombres';
                break;
            case 3:
                // code fait dans le corps de la page
                // interdiction de faire un affichage hors des balises <body></body>
                break;
            case 4:
                $actionOk = setcookie('compteur', "", 1);   // "" indique qu'on efface le cookie
                if (! $actionOk)
                   $actionMsg = 'détruit cookie compteur';
                break;
            case 5:
                if (! isset($_COOKIE['nombres']))
                {
                    $actionOk = false;
                    $actionMsg = 'cookie(s) nombres inexistant(s)';
                }
                else
                {
                    $actionOk = true;
                    foreach ($_COOKIE['nombres'] as $cle => $val)
                    {
                        $ok = setcookie('nombres[' . $cle . ']', "", 1);
                        $actionOk = $actionOk && $ok;
                    }
                    if (! $actionOk)
                        $actionMsg = 'détruit cookie(s) nombres';
                }
                break;
            default:
                $numActionOk = false;
                $numActionMsg = '<p>Le numéro d\'action n\'est pas un entier correct, voire pas un entier du tout</p>';
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 5</title>
    </head>
    <body>

        <h1>exo 4.3, deuxième page</h1>

        <p>
            <a href="4.3_1.php">cliquer ici</a> pour revenir à la première page.
        </p>

        <h2>Actions</h2>

        <?php
            function afficheCookies()
            {
                echo "<p>";
                if (! isset($_COOKIE))
                    echo '$_COOKIE n\'existe pas.<br />';
                else
                {
                    if (isset($_COOKIE['compteur']))
                        echo '$_COOKIE[\'compteur\'] vaut ' . $_COOKIE['compteur'] . '<br />';
                    else
                        echo '$_COOKIE[\'compteur\'] n\'existe pas.<br />';

                    if (isset($_COOKIE['nombres']))
                    {
                        echo 'Affichage de $_COOKIE[nombres]<br />';
                        foreach($_COOKIE['nombres'] as $cle => $valeur)
                            echo '&nbsp;&nbsp;$_COOKIE[\'nombres\'][' . $cle . '] vaut ' . $_COOKIE['nombres'][$cle] . '<br />';
                    }
                    else
                        echo '$_COOKIE[\'nombres\'] n\'existe pas.<br />';
                }
                echo "</p>";
            }

            // TODO
            // si le paramètre GET 'action' n'est pas correct (cf. code avant le doctype)
            // afficher un message d'erreur explicite et sortir (fonction exit) du script
            if (! $numActionOk)
            {
                echo $numActionMsg;
                exit("");
            }

            switch($_GET['action'])
            {
                case 1:
                    // TODO : tout a été fait avant, donc ici un éventuel message d'erreur
                    if (! $actionOk)
                        echo '<p>L\'action 1 a échoué : ' . $actionMsg . '</p>';
                    break;
                case 2:
                    // TODO : tout a été fait avant, donc ici un éventuel message d'erreur
                    if (! $actionOk)
                        echo '<p>L\'action 2 a échoué : ' . $actionMsg . '</p>';
                    break;
                case 3:
                    afficheCookies();
                    break;
                case 4:
                    // TODO : tout a été fait avant, donc ici un éventuel message d'erreur
                    if (! $actionOk)
                        echo '<p>L\'action 4 a échoué : ' . $actionMsg . '</p>';
                    break;
                case 5:
                    // TODO : tout a été fait avant, donc ici un éventuel message d'erreur
                    if (! $actionOk)
                        echo '<p>L\'action 5 a échoué : ' . $actionMsg . '</p>';
                    break;
                default:
                    // déjà fait en début de fichier
            }
        ?>

        <h2>COOKIE</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($_COOKIE, true));
            echo '</pre>';
        ?>

    </body>
</html>
