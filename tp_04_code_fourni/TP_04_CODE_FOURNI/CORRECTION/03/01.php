<?php

// compléter le code : il y a 3 TODO

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


/**
 * fonction retournant la somme de deux entiers
 *
 * @param $a : premier paramètre
 * @param $b : deuxième paramètre
 * @return somme des deux paramètres
 */
// on ne type pas les paramètres ici pour voir les conversions implicites
// TODO : écrire la fonction somme, et surtout comprendre les résultats
function somme($a, $b)
{
    return $a + $b;
}


// de même on ne type pas les deux opérandes
function test_somme($a, $b, String $titre = 'test somme')
{
    echo EOLn;
    echo encadre($titre, WIDTH_H2);
    $x = $a;
    $y = $b;
    // TODO : appeler la fonction somme sur $a et $b, stocker le résultat dans $r
    $r = somme($x, $y);
    echo 'somme de :' . EOLn;
    echo '  - ' . $x . ' (' . gettype($x) . ')' . EOLn;
    echo '  - ' . $y . ' (' . gettype($y) . ')' . EOLn;
    echo 'résultat :' . EOLn;
    echo '  - ' . $r . ' (' . gettype($r) . ')' . EOLn;
}


echo encadre('exo 3.1, opérateur +', WIDTH_H1, 'left', '*', '*', '*');

test_somme(123, 654, 'deux entiers');

echo EOLn;
echo encadre('Pourquoi ne pas utiliser des prompts ?', WIDTH_H2);
// TODO : écrire la réponse
echo 'Le code PHP s\'exécute sur le serveur distant, alors que les prompts
avec JavaScript s\'exécutent dans le navigateur sur le poste client.' . EOLn;

test_somme("123", "654", 'deux chaînes mais qui contiennent des entiers');
//test_somme("123", "aaa", 'deux chaînes dont une avec que des lettres');
test_somme("123", "1aaa", 'deux chaînes dont une commence avec des chiffres');
//test_somme("aaa1", "123", 'deux chaînes dont une se termine avec des chiffres');
//test_somme("aaa", "bbb", 'deux chaînes sans chiffre');
test_somme("123", "2d2", 'même cas que plus haut !');
test_somme("123", "2e2", 'même cas que ci-dessus ?');


echo EOLn;
echo encadre('Quelques explications', WIDTH_H2);
echo 'L\'opérateur "+" fait une addition quoi qu\'il arrive (et non pas une
concaténation qui est le rôle de l\'opérateur ".").
Si on passe autre chose que des nombres, il essaie de faire des conversions
s\'il y arrive.' . EOLn;

