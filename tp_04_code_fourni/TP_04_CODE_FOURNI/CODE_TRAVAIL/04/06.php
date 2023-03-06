<?php

// compléter le code : il y a 3 TODO

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 4.6, fonction via une variable', WIDTH_H1, 'left', '*', '*', '*');

function fact(int $n) : int
{
    if ($n == 0)
        return 1;
    else
        return $n * fact($n-1);
}

// TODO : mettre dans $f le nom de la fonction
$a = 6;
// TODO : $r = appel de la fonction via la variable $f
$r = -1; // todo : à supprimer, juste pour éviter une erreur de compilation
echo $a . '! = ' . $r . EOLn;

