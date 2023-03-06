<?php
    // exo 5.3, entités HTML

    // compléter le code : il y a plusieurs TODO

    include_once('../UTILS/utils.php');
    
    // la chaîne qui va être encodée au fil des questions
    $not_encoded = 'Le <code>if</code> est une "structure de contrôle", le && un \'opérateur booléen\'';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link rel="stylesheet" media="screen" type="text/css"
              title="style d" href="03.css" />
    </head>
    <body>
        <h1>exo 5.3, entités HTML</h1>

        <div>
            <h2>chaîne non encodée</h2>
            <?php
                echo "<p>" . $not_encoded . "</p>";
            ?>

        <div>
            <h2>a) <code>htmlspecialchars</code></h2>

            <h3>avec ENT_NOQUOTES</h3>
            <?php
                // TODO $r = utilisation du filtre htmlspecialchars
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo "<p>" . $r . "</p>";
            ?>

            <h3>avec ENT_QUOTES|ENT_HTML401</h3>
            <?php
                // TODO $r = utilisation du filtre htmlspecialchars
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo "<p>" . $r . "</p>";
            ?>

            <h3>avec ENT_QUOTES|ENT_HTML5</h3>
            <?php
                // TODO $r = utilisation du filtre htmlspecialchars
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo "<p>" . $r . "</p>";
            ?>
        </div>

        <div>
            <h2>b) <code>htmlspecialchars deux fois</code></h2>

            <h3>avec ENT_NOQUOTES</h3>
            <?php
                // TODO $r = ???
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo "<p>" . $r . "</p>";
            ?>

            <h3>avec ENT_QUOTES|ENT_HTML401</h3>
            <?php
                // TODO $r = ???
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo "<p>" . $r . "</p>";
            ?>

            <h3>avec ENT_QUOTES|ENT_HTML5</h3>
            <?php
                // TODO $r = ???
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo "<p>" . $r . "</p>";
            ?>
        </div>

        <div>
            <h2>c) <code>htmlentities</code></h2>

            <h3>avec ENT_NOQUOTES</h3>
            <?php
                // TODO $r = utilisation du filtre htmlentities
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo "<p>" . $r . "</p>";
            ?>

            <h3>avec ENT_QUOTES|ENT_HTML401</h3>
            <?php
                // TODO $r = utilisation du filtre htmlentities
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo "<p>" . $r . "</p>";
            ?>

            <h3>avec ENT_QUOTES|ENT_HTML5</h3>
            <?php
                // TODO $r = utilisation du filtre htmlentities
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo "<p>" . $r . "</p>";
            ?>
        </div>

        <div>
            <h2>d) <code>htmlspecialchars_decode</code> et <code>htmlentities_decode</code></h2>
            <?php
                $to_decode = '&lt;em&gt;béb&eacute;&lt;/em&gt; &quot;&amp;amp;cie&quot;';
            ?>

            <h3>htmlspecialchars_decode avec ENT_NOQUOTES</h3>
            <?php
                echo "<p>original : " . $to_decode . "</p>";
                // TODO $r = utilisation du filtre htmlspecialchars_decode
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo "<p>résultat : " . $r . "</p>";
            ?>

            <h3>htmlspecialchars_decode avec ENT_QUOTES|ENT_HTML401</h3>
            <?php
                echo "<p>original : " . $to_decode . "</p>";
                // TODO $r = utilisation du filtre htmlspecialchars_decode
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo "<p>résultat : " . $r . "</p>";
            ?>

            <h3>hmlspecialchars_decode avec ENT_QUOTES|ENT_HTML5</h3>
            <?php
                echo "<p>original : " . $to_decode . "</p>";
                // TODO $r = utilisation du filtre htmlspecialchars_decode
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo "<p>résultat : " . $r . "</p>";
            ?>

            <h3>html_entity_decode avec ENT_QUOTES|ENT_HTML5</h3>
            <?php
                echo "<p>original : " . $to_decode . "</p>";
                // TODO $r = utilisation du filtre html_entity_decode
                $r = '';//todo ligne à supprimer, présente pour la compilation
                echo "<p>résultat : " . $r . "</p>";
            ?>
        </div>
    </body>
</html>
