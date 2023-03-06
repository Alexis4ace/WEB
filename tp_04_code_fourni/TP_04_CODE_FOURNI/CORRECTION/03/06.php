<?php
    // exo 3.6, tableaux associatifs (indicés par des chaînes)

    // compléter le code : il y a plusieurs TODO

    include_once('../UTILS/utils.php');
    
    function afficheTableau(Array $t)
    {
        echo '<table>';
        echo '<tr><th>clé</td><th>type</td><th>contenu</td></tr>';
        foreach ($t as $cle => $val)
        {
            echo '<tr>';
            echo '   <td>' . $cle . '</td>';
            echo '   <td>' . gettype($val) . '</td>';
            echo '   <td>';
            if (is_array($val))
                afficheTableau($val);
            elseif (is_bool($val))
                echo boolToStr($val);
            else
                echo $val;
            echo '   </td>';
            echo '</tr>';
        }
        echo '</table>';
    }

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link rel="stylesheet" media="screen" type="text/css"
              title="style d" href="06.css" />
    </head>
    <body>
        <h1>exo 3.6, tableaux associatifs (indicés par des chaînes)</h1>

        <div>
            <h2>a) illustration</h2>
            <?php
                // TODO : juste à vérifier que l'affichage est correct
                $tab = array(
                        'age' => 113,
                        'retraite' => true,
                        'jeu' => 'WoW',
                        'banque' => array('coffre' => 'un', 'code' => 22),
                        'pi' => 3.14,
                    );
                afficheTableau($tab);
            ?>
        </div>

            <h2>b) ajout de deux cases</h2>
            <?php
                // on reconstruit le tableau de l'exercice précédant
                $villes = array('Paris', 'Londres', 'Madrid', 123, true, 'Mexico');
                unset($villes[1]);
                unset($villes[4]);
                $villes[10] = 'Beyrouth';
                // on ajoute les deux cases indicées par des textes
                // TODO
                $villes['chat'] = 'miaou';
                $villes['chien'] = 'ouaf';
                // on affiche
                afficheTableau($villes);
            ?>
        </div>

        <div>
            <h2>c) valeurs et index</h2>

            <h3>on réindexe (<code>array_values</code>)</h3>
            <?php
                // TODO : mettre dans $villes2 le retour de array_values
                $villes2 = array_values($villes);
                afficheTableau($villes2);
            ?>

            <h3>on récupère les clés/index (<code>array_keys</code>)</h3>
            <?php
                // TODO : mettre dans $villes2 le retour de array_keys
                $villes2 = array_keys($villes);
                afficheTableau($villes2);
            ?>
        </div>

        <div>
            <h2>d) capitales</h2>
            <?php
                // TODO : mettre dans $capitales trois couples (pays/capitale)
                $capitales = array(
                        'Australie' => 'Canberra',
                        'Islande' => 'Reykjavik',
                        'Togo' => 'Lomé',
                    );
                afficheTableau($capitales);
            ?>
        </div>

        <div>
            <h2>e) Jules Verne</h2>

            <h3><code>str_replace</code></h3>
            <?php
                $s = 'Pencroff et Ayrton procédèrent donc '
                   . 'aux préparatifs du lancement';
                $nombre = -1;
                // TODO : mettre dans $nombre le nombre d'espaces
                //        mettre dans $t la chaîne avec des '/'
                $t = str_replace(' ', '/', $s, $nombre);
                echo 'il y a ' . $nombre . ' espaces ' . EOLbr;
                echo 'avant : ' . $s . EOLbr;
                echo 'après : ' . $t . EOLbr;
            ?>
        </div>

        <div>
            <h3><code>implode</code>/<code>explode</code></h3>
            <?php
                $s = 'Pencroff et Ayrton procédèrent donc '
                   . 'aux préparatifs du lancement';
                $nombre = -1;
                // TODO : mettre dans $nombre le nombre d'espaces
                //        mettre dans $t la chaîne avec des '/'
                $tmp = explode(' ', $s);
                $t = implode('\\', $tmp);
                $nombre = count($tmp) - 1;
                echo 'il y a ' . $nombre . ' espaces ' . EOLbr;
                echo 'avant : ' . $s . EOLbr;
                echo 'après : ' . $t . EOLbr;
            ?>
        </div>

    </body>
</html>
