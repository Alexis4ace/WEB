<?php

// compléter le code : il y a 4 TODO

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 4.3, valeurs par défaut', WIDTH_H1, 'left', '*', '*', '*');

// TODO : écrire la fonction carre_decalage
function carre_decalage(float $n, float $d = 0)
{
    return $n*$n + $d;
}

$a = carre_decalage(4);   // TODO : à décommenter
echo 'paramètre seul à 4 : ' . $a . EOLn;

$a = carre_decalage(4, 2);   // TODO : à décommenter
echo 'paramètre à 4, décalage à 2 : ' . $a . EOLn;
