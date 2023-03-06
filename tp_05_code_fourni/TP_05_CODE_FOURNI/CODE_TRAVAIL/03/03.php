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
		<h1> y
		o
		l
		o </h1>
        <?php
            // TODO
			
			print_r($_SERVER);
        ?>

        <h2>ENV</h2>
        <?php
            // TODO
			print_r($_ENV);
        ?>

        <h2>REQUEST</h2>
        <?php
            // TODO
			print_r($_REQUEST);
        ?>

        <h2>SESSION (avec un warning)</h2>
        <?php
            // TODO
			print_r($_SESSION);
        ?>

        <h2>COOKIE</h2>
        <?php
            // TODO
			print_r($_COOKIE);
        ?>

        <h2>POST</h2>
        <?php
            // TODO
			print_r($_POST);
        ?>

        <h2>GET</h2>
        <?php
            // TODO
			print_r($_GET);
        ?>

        <h2>FILES</h2>
        <?php
            // TODO
			print_r($_FILES);
        ?>

        <h2>GLOBALS</h2>
        <?php
			print_r($GLOBALS);
        ?>

        <h2>phpinfo()</h2>
        <?php
            phpinfo();
        ?>

    </body>
</html>
