<?php

// compléter le code : il y a 4 TODO

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


/**
 * fonction testant l'égalité
 * on ne type pas les paramètres : n'importe quel type est accepté
 *
 * @param $a : premier paramètre
 * @param $b : deuxième paramètre
 */
// TODO : écrire la fonction comparer, et surtout comprendre les résultats
// par exemple l'affichage produit par la fonction pourrait ressembler à :
//   comparaison de :
//     - 123 (integer)
//     - 123 (integer)
//   ==  : true
//   === : true
function comparer( $a , $b ){
	$s = boolToStr( $a == $b );
	$s1 =  boolToStr($a ===$b);
	echo "\n".'S : '.$s.'  S1 : '.$s1.'  type a et b  :  '.gettype($a).' '.gettype($b) ; 
}

// de même on ne type pas les deux paramètres
function test_comparaison($a, $b, String $titre = 'test comparaison')
{
    echo EOLn;
    echo encadre($titre, WIDTH_H2);
	comparer($a,$b);
    // TODO : appeler la fonction comparer sur $a et $b
}


echo encadre('exo 3.2, égalité', WIDTH_H1, 'left', '*', '*', '*');

echo EOLn;
echo encadre('Mise en bouche', WIDTH_H2);
if (1 == 'miaou')
   echo "il y a un problème (1 == \"miaou\") ?" . EOLn;
if (0 == "miaou")
   echo 'il y a un problème (0 == "miaou") ?' . EOLn;
echo 'Les résultats sont logiques : aucune égalité n\'est vraie.' . EOLn;
echo 'Ce n\'était le cas avant PHP 8 où : (0 == "miaou") était vrai.' . EOLn;

test_comparaison(123, 123, "deux entiers");
test_comparaison(123, "123", "un entier, une chaîne avec le même entier");
test_comparaison(123, "miaou", "un entier, une chaîne quelconque");
test_comparaison(0, "miaou", "un entier à 0, une chaîne quelconque");
test_comparaison(123, "123miaou", "un entier, une chaîne commençant par l'entier");
test_comparaison(0, 0.0, "un entier nul, un float nul");
test_comparaison(0, "0.0", "un entier nul, une chaîne contenant un float nul");
test_comparaison("0", 0.0, "une chaîne contenant un entier nul, un float nul");
test_comparaison("0", "0.0", "deux chaînes : un entier nul, un float nul");
test_comparaison("120", "12d1", "à votre avis ?");
test_comparaison("120", "12e1", "à votre avis ?");
test_comparaison(120, 12e1, "à votre avis ?");



echo EOLn;
echo encadre('Différences entre == et ===', WIDTH_H2);
echo 'egalité de valeur et egalité de valeur + type '."\n";
// TODO : écrire la réponse

echo EOLn;
echo encadre('Différences entre apostrophes et guillemets', WIDTH_H2);
echo ' apostrophes affihce text et guillemets pour \n ';
// TODO : écrire la réponse

