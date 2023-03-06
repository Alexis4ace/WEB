<?php
    // exo 5.1, passage à la ligne

    // compléter le code : il y a plusieurs TODO

    include_once('../UTILS/utils.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link rel="stylesheet" media="screen" type="text/css"
              title="style d" href="01.css" />
    </head>
    <body>
        <h1>exo 5.1, passage à la ligne</h1>
        
        <p>
            Il faut parfois regarder le code source de la page pour voir
            le résultat (Ctrl^U sous firefox).
        </p>

        <!-- a) ---------------------------------------------------------- -->
        <div>
            <h2>a) <code>nl2br</code> avec des apostrophes</h2>
            <?php
                $s = 'une ligne\n2 lignes\n3 lignes';
                // TODO $r = utilisation du filtre nl2br
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo 'avant : -&gt;' . $s . '&lt-' . EOLbr;
                echo 'après : -&gt;' . $r . '&lt-' . EOLbr;
            ?>
        </div>

        <!-- b) ---------------------------------------------------------- -->
        <div>
            <h2>b) <code>nl2br</code> avec des guillemets</h2>
            <?php
                $s = "une ligne\n2 lignes\n3 lignes";
                // TODO $r = utilisation du filtre nl2br
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo 'avant : -&gt;' . $s . '&lt-' . EOLbr;
                echo 'après : -&gt;' . $r . '&lt-' . EOLbr;
            ?>
        </div>

        <!-- c) ---------------------------------------------------------- -->
        <div>
            <h2>c) remplacement des \n</h2>
            <?php
                $s = "une ligne\n2 lignes\n3 lignes";
                // TODO $r = utilisation d'un ou plusieurs filtres
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo 'avant : -&gt;' . $s . '&lt-' . EOLbr;
                echo 'après : -&gt;' . $r . '&lt-' . EOLbr;
            ?>
        </div>

        <!-- d) ---------------------------------------------------------- -->
        <div>
            <h2>d) <code>&lt;br /&gt;</code> to <code>\n</code></h2>
            <?php
                $s = 'une ligne<br />2 lignes<br />3 lignes';
                // TODO $r = utilisation du filtre str_replace
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo 'avant : -&gt;' . $s . '&lt-' . EOLbr;
                echo 'après : -&gt;' . $r . '&lt-' . EOLbr;
            ?>
        </div>

        <!-- e) ---------------------------------------------------------- -->
        <div>
            <h2>e) <code>&lt;br /&gt;</code>, <code>&lt;br/&gt;</code>, <code>&lt;br&gt;</code> to <code>\n</code></h2>
            <?php
                $s = 'une ligne<br />2 lignes<br/>3 lignes<br>4 lignes';
                // TODO $r = utilisation 3 fois du filtre str_replace
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo 'avant : -&gt;' . $s . '&lt-' . EOLbr;
                echo 'après : -&gt;' . $r . '&lt-' . EOLbr;
            ?>
        </div>

        <!-- e) ---------------------------------------------------------- -->
        <div>
            <h2>e) <code>&lt;br /&gt;</code>, <code>&lt;br/&gt;</code>, <code>&lt;br&gt;</code> to <code>\n</code> (autre solution)</h2>
            <?php
                $s = 'une ligne<br />2 lignes<br/>3 lignes<br>4 lignes';
                // TODO $r = utilisation du filtre preg_replace
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo 'avant : -&gt;' . $s . '&lt-' . EOLbr;
                echo 'après : -&gt;' . $r . '&lt-' . EOLbr;
            ?>
        </div>

        <!-- e) ---------------------------------------------------------- -->
        <div>
            <h2>e) <code>&lt;br /&gt;</code>, <code>&lt;br/&gt;</code>, <code>&lt;br&gt;</code> to <code>\n</code> (autre solution)</h2>
            <?php
                $s = 'une ligne<br />2 lignes<br/>3 lignes<br>4 lignes';
                // TODO $r = utilisation une seule fois du filtre str_replace
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo 'avant : -&gt;' . $s . '&lt-' . EOLbr;
                echo 'après : -&gt;' . $r . '&lt-' . EOLbr;
            ?>
        </div>
    </body>
</html>
