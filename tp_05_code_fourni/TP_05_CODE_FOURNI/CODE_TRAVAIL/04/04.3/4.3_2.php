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

    // TODO
	$cpt_marche = true;
	$cpt = "";
	$action_marche = false;
	$action_msg = "";
	
    // - vérifier que le paramètre GET 'action' existe et est un nombre entre 1 et 5
    if (isset($_GET['action'])){
		if($_GET['action'] >= 1 && $_GET['action'] <= 5 && is_numeric($_GET['action']) ){
			switch($_GET['action'])
			{
				case 1 : 
					if ( isset($_COOKIE['compteur']))
						$action_marche = setcookie('compteur' , $_COOKIE['compteur'] + 1 , time()+3600*24);
					else 
						$action_marche = setcookie('compteur' ,0 , time()+3600*24);
					break;
				case 2 :
					$action_marche1 = setcookie('nombres[un]','one',0);
					$action_marche2 = setcookie('nombres[deux]','two',0);
					$action_marche3 = setcookie('nombres[trois]','three',0);
					$action_marche = $action_marche1 && $action_marche2 && $action_marche3;
					break;
				case 4 :
					$action_marche = setcookie('compteur', "", 1);
					break;
				case 5 : 
					if ( isset($_COOKIE['nombres'] )) {
						$action_marche = true ;
						foreach ( $_COOKIE['nombres'] as $cle => $val )
						{
							$ok = setcookie('nombres['.$cle.']' , "",1 );
							$action_marche = $ok && $action_marche ;
						}
					}
					break;
				default : 
					$cpt_marche = false ;
				
			}
		}
	}
	else { $cpt_marche = false ; $action_msg = " error";}
    // TODO
    // en fonction de la valeur de 'action'
    // - faire les modifications de cookie nécessaires
    // - mais aucun affichage ici (jamais hors des balises <body></body>)
    
    // Note : comme les affichages se font à part du traitement, il faut
    //        positionner des variables pour indiquer au code plus loin
    //        comment il doit réagir et ce qu'il doit afficher.
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

            switch($_GET['action'])
            {
                case 1:
                    // TODO : tout a été fait avant, donc ici un éventuel message d'erreur
                    break;
                case 2:
                    // TODO : tout a été fait avant, donc ici un éventuel message d'erreur
                    break;
                case 3:
                    afficheCookies();
                    break;
                case 4:
                    // TODO : tout a été fait avant, donc ici un éventuel message d'erreur
                    break;
                case 5:
                    // TODO : tout a été fait avant, donc ici un éventuel message d'erreur
                    break;
                default:
                    // déjà traité en début de fichier
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
