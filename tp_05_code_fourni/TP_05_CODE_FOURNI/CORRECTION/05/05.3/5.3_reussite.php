<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 5</title>
        <link rel="stylesheet" media="all" type="text/css" title="Mon Style" href="5.3.css" />
    </head>
    <body>

        <h1>exo 5.3, formulaire ok</h1>
        
        <p>Bravo, le formulaire a été correctement saisi.</p>
        <?php
            // TODO : lire et afficher le contenu du fichier créé à la page précédente
            $fd = @fopen('SAVE/save.txt', 'r');    // @ pour éviter un warning éventuel
            if ($fd === false)
                echo '<p>Fichier non présent</p>';
            else
            {
                echo '<table>';
                echo '<tr><th>ligne</th><th>contenu</th></tr>';
                $i = 1;
                while (true)
                {
                    $ligne = fgets($fd);
                    if ($ligne === false)
                        break;
                    echo '<tr><td>' . $i . '</td><td>' . $ligne . '</td></tr>';
                    $i ++;
                }
                echo '</table>';
            }
            
        ?>
        <p><a href="5.3_form.php">cliquer ici</a> pour revenir à un formulaire vide.</p>

   </body>
</html>
