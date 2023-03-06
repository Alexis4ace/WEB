<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 5</title>
    </head>
    <body>

        <h1>exo 5.2, réception formulaire</h1>

        <table border="3">
            <caption>Contenu du formulaire</caption>

            <thead>
                <tr>
                    <th>champs</th>
                    <th>valeur</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    // le nom
                    echo '<tr>';
                    echo '<td>nom</td>';
                    // TODO : le code est ici fourni pour servir d'exemple
                    if (! isset($_POST['nom']))
                        $val = '(absent)';
                    elseif ($_POST['nom'] == '')
                        $val = '(empty)';
                    else
                        $val = $_POST['nom'];
                    echo '<td>' . $val . '</td>';      // il faudrait traiter une injection, ce n'est pas le propos ici
                    echo '</tr>';

                    // le mot de passe
                    echo '<tr>';
                    echo '<td>password</td>';
                    // TODO : gérer le champ 'passwd'
                    if (! isset($_POST['passwd']))
                        $val = '(absent)';
                    elseif ($_POST['passwd'] == '')
                        $val = '(empty)';
                    else
                        $val = $_POST['passwd'];
                    echo '<td>' . $val . '</td>';
                    echo '</tr>';

                    // l'état civil
                    echo '<tr>';
                    echo '<td>radio1</td>';
                    // TODO : gérer le champ 'radio1'
                    if (! isset($_POST['radio1']))
                        $val = '(absent)';
                    elseif ($_POST['radio1'] == '')
                        $val = '(empty)';
                    else
                        $val = $_POST['radio1'];
                    echo '<td>' . $val . '</td>';
                    echo '</tr>';

                    // les centres d'intérêt
                    echo '<tr>';
                    echo '<td>cb1</td>';
                    // TODO : gérer le champ 'cb1'
                    //        attention c'est un tableau
                    if (! isset($_POST['cb1']))
                        $val = '(absent)';
                    elseif (count($_POST['cb1']) == 0)    // impossible je suppose, mais n'importe quoi peut arriver
                        $val = '(empty)';
                    else
                    {
                        $val = '';
                        for ($i = 0; $i < count($_POST['cb1']); $i ++)
                            $val .= $_POST['cb1'][$i] . '<br />';
                    }
                    echo '<td>' . $val . '</td>';
                    echo '</tr>';
                
                    // le pays
                    echo '<tr>';
                    echo '<td>liste2</td>';
                    // TODO : gérer le champ 'liste2'
                    if (! isset($_POST['liste2']))
                        $val = '(absent)';
                    elseif ($_POST['liste2'] == '')
                        $val = '(empty)';
                    else
                        $val = $_POST['liste2'];
                    echo '<td>' . $val . '</td>';
                    echo '</tr>';

                    // centres d'intérêt (bis repetita)
                    echo '<tr>';
                    echo '<td>liste4</td>';
                    // TODO : gérer le champ 'liste4'
                    //        attention c'est un tableau
                    if (! isset($_POST['liste4']))
                        $val = '(absent)';
                    elseif (count($_POST['liste4']) == 0)    // impossible je suppose, mais n'importe quoi peut arriver
                        $val = '(empty)';
                    else
                    {
                        $val = '';
                        for ($i = 0; $i < count($_POST['liste4']); $i ++)
                            $val .= $_POST['liste4'][$i] . '<br />';
                    }
                    echo '<td>' . $val . '</td>';
                    echo '</tr>';
                
                    // la taille maximale
                    echo '<tr>';
                    echo '<td>MAX_FILE_SIZE</td>';
                    // TODO : gérer le champ 'MAX_FILE_SIZE'
                    if (! isset($_POST['MAX_FILE_SIZE']))
                        $val = '(absent)';
                    elseif ($_POST['MAX_FILE_SIZE'] == '')
                        $val = '(empty)';
                    else
                        $val = $_POST['MAX_FILE_SIZE'];
                    echo '<td>' . $val . '</td>';
                    echo '</tr>';
                
                    // le fichier reçu
                    echo '<tr>';
                    echo '<td>fichier</td>';
                    // TODO : gérer la variable $_FILES
                    //        c'est un tableau à 5 cases avec des noms précis
                    //        attention le tableau a pu ne pas être envoyé
                    if (! isset($_FILES['fichier']))
                        $val = '(absent)';
                    else
                    {
                        // il faudrait tester l'existence de chaque case
                        $val = '';
                        $val .= '<table>';
                        $val .= '<tr><td>name</td>    <td>=</td><td>' . $_FILES['fichier']['name']     . '</td></tr>';
                        $val .= '<tr><td>type</td>    <td>=</td><td>' . $_FILES['fichier']['type']     . '</td></tr>';
                        $val .= '<tr><td>tmp_name</td><td>=</td><td>' . $_FILES['fichier']['tmp_name'] . '</td></tr>';
                        $val .= '<tr><td>error</td>   <td>=</td><td>' . $_FILES['fichier']['error']    . '</td></tr>';
                        $val .= '<tr><td>size</td>    <td>=</td><td>' . $_FILES['fichier']['size']     . '</td></tr>';
                        $val .= '</table>';
                    }
                    echo '<td>' . $val . '</td>';
                    echo '</tr>';

                ?>
            </tbody>
        </table>


        <h2>GET</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($_GET, true));
            echo '</pre>';
        ?>

        <h2>POST</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($_POST, true));
            echo '</pre>';
        ?>

        <h2>FILES</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($_FILES, true));
            echo '</pre>';
        ?>

   </body>
</html>
