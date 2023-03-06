<?php
    // cf. lignes "TODO"
    // Pensez à la balise <pre></pre>
    // Au cas où une variable contiendrait du HTML (ou du JavaScript),
    // utilisez le filtre "htmlspecialchars" pour neutraliser le code
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 5</title>
    </head>
    <body>

        <h1>exo 3, variables superglobales</h1>

        <h2>SERVER</h2>
        <p>Utilité&nbsp;: variables système</p>
        <?php
            // TODO
            echo '<pre>';
            echo htmlspecialchars(print_r($_SERVER, true));
            echo '</pre>';
        ?>

        <h2>ENV</h2>
        <p>Utilité&nbsp;: à étudier</p>
        <?php
            // TODO
            echo '<pre>';
            echo htmlspecialchars(print_r($_ENV, true));
            echo '</pre>';
        ?>

        <h2>REQUEST</h2>
        <p>Utilité&nbsp;: à étudier</p>
        <?php
            // TODO
            echo '<pre>';
            echo htmlspecialchars(print_r($_REQUEST, true));
            echo '</pre>';
        ?>

        <h2>SESSION (avec un warning)</h2>
        <p>Utilité&nbsp;: variables de session&nbsp;; doit être explicitement activé (cf.&nbsp;fonction <code>session_start</code>).</p>
        <?php
            // TODO
            echo '<pre>';
            echo htmlspecialchars(print_r($_SESSION, true));
            echo '</pre>';
        ?>

        <h2>COOKIE</h2>
        <p>Utilité&nbsp;: ensemble des cookies transmis au serveur</p>
        <?php
            // TODO
            echo '<pre>';
            echo htmlspecialchars(print_r($_COOKIE, true));
            echo '</pre>';
        ?>

        <h2>POST</h2>
        <p>Utilité&nbsp;: formulaire envoyé en mode POST</p>
        <?php
            // TODO
            echo '<pre>';
            echo htmlspecialchars(print_r($_POST, true));
            echo '</pre>';
        ?>

        <h2>GET</h2>
        <p>Utilité&nbsp;: formulaire envoyé en mode GET</p>
        <?php
            // TODO
            echo '<pre>';
            echo htmlspecialchars(print_r($_GET, true));
            echo '</pre>';
        ?>

        <h2>FILES</h2>
        <p>Utilité&nbsp;: fichiers joints à un formulaire</p>
        <?php
            // TODO
            echo '<pre>';
            echo htmlspecialchars(print_r($_FILES, true));
            echo '</pre>';
        ?>

        <h2>GLOBALS</h2>
        <p>Utilité&nbsp;: ensemble des variables précédentes</p>
        <?php
            // TODO
            echo '<pre>';
            echo htmlspecialchars(print_r($GLOBALS, true));
            echo '</pre>';
        ?>

        <h2>phpinfo()</h2>
        <?php
            phpinfo();
        ?>

    </body>
</html>
