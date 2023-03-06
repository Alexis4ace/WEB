<?php

// compléter le code : il y a 4 TODO

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 4.3, valeurs par défaut', WIDTH_H1, 'left', '*', '*', '*');

// TODO : écrire la fonction carre_decalage
function carre_decalage( int $chiffre , int $decalage = 0) : int {
	$final = ($chiffre * $chiffre) + $decalage ;
	return $final ;
}
$a = carre_decalage(4);   // TODO : à décommenter
//$a = 0;  // todo : à supprimer, juste pour éviter une erreur de compilation
echo 'paramètre seul à 4 : ' . $a . EOLn;

$a = carre_decalage(4, 2);   // TODO : à décommenter
echo 'paramètre à 4, décalage à 2 : ' . $a . EOLn;
