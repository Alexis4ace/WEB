<?php
   // TODO : créer/récupérer la session
   session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 5</title>
    </head>
    <body>

        <h1>exo 4.2, deuxième page</h1>

        <p>
            <a href="4.2_1.php">cliquer ici</a> pour revenir à la première page.
        </p>

        <h2>Actions</h2>

        <?php
			if(isset($_GET['action'])){
				echo 'GET[ACTION] eiste '."\n";
				if(is_numeric($_GET['action']) ){
					echo 'action est un chiffre '."\n";
					if($_GET['action'] >=1 && $_GET['action'] <=5){
						echo 'action est compris entre 1 et 5 '."\n";
						if($_GET['action'] == 1 ){
							$_SESSION['nom'] = $_SESSION['nom'].'?' ;
							$_SESSION['age'] += 3;
						}
						if($_GET['action'] == 2 ){
							$_SESSION['nom'] = 'bob';
							$_SESSION['age'] = 99;
						}
						if($_GET['action'] == 3){
							if (! isset($_SESSION))
								echo '$_SESSION n\'existe pas.<br />';
							else
							{
								if (isset($_SESSION['nom']))
									echo '$_SESSION[\'nom\'] vaut ' . $_SESSION['nom'] . '<br />';
								else
									echo '$_SESSION[\'nom\'] n\'existe pas.<br />';
									if (isset($_SESSION['age']))
										echo '$_SESSION[\'age\'] vaut ' . $_SESSION['age'] . '<br />';
									else
										echo '$_SESSION[\'age\'] n\'existe pas.<br />';
							}
						}
						if($_GET['action'] == 4 ){
							unset($_SESSION['nom']);
						}
						if($_GET['action'] == 5 ){
							session_destroy();
						}
					}
					else{
						echo 'action nest pas copris entre 1et 5'."\n";
					}
				}
				else
					echo ' action n est pas un chiffre '."\n";
			}
			else
				echo 'GET[ACTION] existe pas'."\n";
			
			
            // TODO
            // vérifier que la variable GET nommée 'action' :
            // - existe (fonction isset)
            // - est un nombre (fonction is_numeric)
            // - est comprise entre 1 et 5
            // selon valeur de action :
            // 1: modifier les cases 'nom' et 'age' de la session
            // 2: modifier les cases 'nom' et 'age' de la session avec d'autres valeurs
            // 3: afficher les deux cases de la session si elles existent
            // 4: détruire (fonction unset) la case 'nom' de la session
            // 5: détruire la session (fonction session_destroy)
        ?>

        <h2>SESSION</h2>
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
