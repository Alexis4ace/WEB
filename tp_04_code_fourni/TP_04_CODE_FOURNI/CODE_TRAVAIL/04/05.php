<?php

// compléter le code : il y a 3 TODO

include_once('../UTILS/utils.php');

define('WIDTH_H1', 70);
define('WIDTH_H2', 60);


echo encadre('exo 4.5, récursivité', WIDTH_H1, 'left', '*', '*', '*');

// TODO écrire la fonction fact

$a = 6;
// $r = fact($a);   // TODO : à décommenter
$r = -1; // todo : à supprimer, juste pour éviter une erreur de compilation
echo $a . '! = ' . $r . EOLn;

