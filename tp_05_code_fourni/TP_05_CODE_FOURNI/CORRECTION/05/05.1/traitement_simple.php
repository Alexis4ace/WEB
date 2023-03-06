<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 5</title>
    </head>
    <body>
        <h1> Listing des différentes valeurs reçues par le script </h1>

        <h2> Affichage des valeurs par POST </h2>

        <?php
            echo "<pre>" . htmlentities(print_r($_POST, true)) . "</pre>";      // voir l'utilité du paramètre "true", cf. http://php.net
        ?>

        <h2> Affichage des valeurs par FILES </h2>

        <?php
            echo "<pre>" . htmlentities(print_r($_FILES, true)) . "</pre>";
        ?>

    </body>
</html>
