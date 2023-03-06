<?php
   // pas de session_start dans ce fichier
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 5</title>
    </head>
    <body>

        <h1>exo 4.2, première page</h1>

        <p>
            <a href="4.2_2.php?action=1">lien 1</a> : modification de <code>nom</code> et de <code>age</code><br />
            <a href="4.2_2.php?action=2">lien 2</a> : autre modification de <code>nom</code> et de <code>age</code><br />
            <a href="4.2_2.php?action=3">lien 3</a> : affichage de <code>nom</code> et de <code>age</code><br />
            <a href="4.2_2.php?action=4">lien 4</a> : suppression de <code>nom</code><br />
            <a href="4.2_2.php?action=5">lien 5</a> : destruction de la session<br />
        </p>

        <h2>SESSION</h2>
        <p>
            On ne gère pas les session dans ce fichier, donc normalement le tableau n'existe pas et on a un warning.
        </p>
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
