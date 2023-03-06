<?php

// compléter le code : il y a 4 TODO

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 4.4, valeur(s) de retour', WIDTH_H1, 'left', '*', '*', '*');


// TODO : écrire la fonction suite
//        elle prend un entier en paramètre (valeur par défaut de 0)
//        retourne un tableau de 3 cases contenant n+1, n+2, n+3
function suite( int $entier = 0 ) : array {
	$tab = [ $entier + 1 , $entier + 2, $entier + 3 ] ;  
	return $tab;  // return [ $entier + 1 , $entier + 2, $entier + 3 ];  mieux 
}
// TODO : appeler la fonction suite sans paramètre et stocker directement
//        les valeurs de retour dans $a, $b, $c grâce à la fonction list
list( $a , $b , $c ) = suite( );
//$a = $b =$c = 0;  // todo : à supprimer, juste pour éviter une erreur de compilation
echo '$a, $b, $c valent : ' . $a . ', ' . $b . ', ' . $c . EOLn;

list( $a , $b , $c ) = suite(5);
// TODO : idem, mais avec le paramètre valant 5
echo '$a, $b, $c valent : ' . $a . ', ' . $b . ', ' . $c . EOLn;

