<?php

// compléter le code : il y a 3 TODO

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 4.7, deux fonctions particulière', WIDTH_H1, 'left', '*', '*', '*');


echo EOLn;
echo encadre('a) function_exists', WIDTH_H2);

function carre(int $n) : int
{
    return $n * $n;
}

$liste = array('carre', 'errac', 'strlen', 'echo');
// TODO : appelez "function_exists" sur chaque élément du tableau

// TODO : expliquez pourquoi "echo" n'existe pas ?


echo EOLn;
echo encadre('b) get_defined_functions', WIDTH_H2);

// TODO : appelez "get_defined_functions" et affichez le retour de la fonction.

